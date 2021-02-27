<?php 
error_reporting(0);
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $user = $_SESSION["username"]; 
    // header("location: profile.php");
    
   
}
else{
    $user = "Sign In"; 
}
 
// This script performs an INSERT query to add a record to the users table.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Profile</title>

    <div class="header">

        <div class="logo">
            <img src="../style/logo.png" class="logoImg">

        </div>

        <div class="nav">
        <span style="font-size:30px; cursor:pointer;" onclick="openNav()">&#9776; </span>

        </div>

    </div>
    <hr>

    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</head>
<body>

<p class="productDiv"><?php echo $user ?></p>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Business Categories</a>
  <a href="#">Blogs</a>
  <a href="#">Podcasts</a>
  <a href="#">Forums</a>
  <a href="#">Post</a>
</div>




<br>
<br>
<div class="profileDiv">
<?php

require_once("dbcontroller1.php");



$db_handle = new DBController();

$product_array = $db_handle->runQuery("SELECT * FROM items WHERE business='$user'");
if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
?>


    <form method="post" action="home.php?action=add&code=<?php echo $product_array[$key]["id"]; ?>">

  

  
    
        <img src="<?php echo $product_array[$key]["picture"]; ?>" width="110vw" height="110vh">



    <br>
    <br>
    </form>

<?php
        }
}
?>

</div>
</div>

<div>
  <button><a href="logout.php">Logout</a></button>
</div>    
</body>
</html>