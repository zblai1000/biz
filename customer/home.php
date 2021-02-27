<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Home</title>

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

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="category.php">Business Categories</a>
  <a href="blogs.php">Blogs</a>
  <a href="podcastNav.php">Podcasts</a>
  <a href="forums.php">Forums</a>
</div>



<div class="story">

    <div>

        <img src="../style/profileSample.jpg" class="profile">
        <img src="../style/profileSample.jpg" class="profile">
        <img src="../style/profileSample.jpg" class="profile">
        <img src="../style/profileSample.jpg" class="profile">
  

    </div>  


</div>

<br>
<br>

<?php

require_once("dbcontroller1.php");



$db_handle = new DBController();

$product_array = $db_handle->runQuery("SELECT * FROM items");
if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
?>

<div class="productDiv">
    <form method="post" action="home.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">

    <div class="inDiv" style="margin: 3px; flex-direction: column; width: auto; text-align: left;">
        <p style="font-weight: normal; margin: 0px; left: 0;"><?php echo $product_array[$key]["business"]; ?></p>
    </div>

    <div class="inDiv" style="margin: 20px; flex-direction: column; width: auto; align-items: center;">
    
        <img src="<?php echo $product_array[$key]["picture"]; ?>" width="420vw" height="420vh" class="smallImg">
    </div>

    <div class="productDiv">
    <p style="font-weight: bold; margin: 0px;"><?php echo $product_array[$key]["itemName"]; ?></p>
        <p style="margin: 5px;"><?php echo $product_array[$key]["info"]; ?></p>

    </div>
    <br>
    <br>
    </form>
</div>
<?php
        }
}
?>


</div>
    
</body>
</html>