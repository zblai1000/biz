<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Blogs</title>

    <div class="header">

        <div class="logo">
            <a href="home.php"><img src="../style/logo.png" class="logoImg"></a>

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

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="category.php">Business Categories</a>
  <a href="blogs.php">Blogs</a>
  <a href="podcastNav.php">Podcasts</a>
  <a href="forums.php">Forums</a>
</div>



<div class="story">

    <div>

    <a href="demo.php"><img src="../style/profileSample.jpg" class="profile"></a>
        <a href="demo.php"><img src="../style/profileSample.jpg" class="profile"></a>
        <a href="demo.php"><img src="../style/profileSample.jpg" class="profile"></a>
        <a href="demo.php"><img src="../style/profileSample.jpg" class="profile"></a>
  

    </div>  


</div>

<br>
<br>

<?php

require_once("dbcontroller1.php");



$db_handle = new DBController();

$product_array = $db_handle->runQuery("SELECT * FROM blogs");
if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
?>

<div class="productDiv">
    <form method="post" action="home.php?action=add&code=<?php echo $product_array[$key]["id"]; ?>">

    <div class="inDiv" style="margin: 3px; flex-direction: column; width: auto; text-align: left;">
        <b><p style="font-weight: heavy; margin: 0px; left: 0;"><a href="<?php echo $product_array[$key]["link"]; ?>"><?php echo $product_array[$key]["title"]; ?></a></p></b>
        <p>________________________</p>
        
    </div>



    </form>
</div>
<?php
        }
}
?>


</div>
    
</body>
</html>