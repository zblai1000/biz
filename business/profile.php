<?php 

session_start();
 
// Check if the user is already logged in, if yes then redirect him to profile page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $user = $_SESSION["username"]; 
    $link = $_SESSION["link"];

    
   
}
else{
    $user = "Sign In"; 
}

require_once("dbcontroller1.php");



$db_handle = new DBController();
 
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

     

    </div>
    <hr>


</head>
<body>

<p class="productDiv"><?php echo $user?></p>
<p class="productDiv"><?php echo $link ?></p>






<br>
<button class="btn"><a href="post.php" style="text-decoration: none; color: white;">Create new post</a></button>
<br>
<div class="profileDiv">
<?php





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
  <button class="btn" style="background-color: red;"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>
</div>    
</body>
</html>