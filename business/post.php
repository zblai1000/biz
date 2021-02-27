<?php
session_start(); 


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $user = $_SESSION["username"]; 
   
}
else{
    $user = "Sign In"; 
}
 
require ('mysqli_connect.php');

require_once("dbcontroller1.php");



$db_handle = new DBController();

//variables
$itemName = '';

$info = '';
$errors = 0; 

$itemName_error = $info_error = $image_error = '';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $target_dir = "../posts/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



    //check 
    if (empty($_POST['itemName'])) {
        $itemName_error = 'Please fill in the post name.';
        $errors = $errors + 1; 
    } else{
        $i = mysqli_real_escape_string($biz, trim($_POST['itemName'])); 
    }

    


    if (empty($_POST['info'])) {
        $info_error = 'Please fill in the post description.';
        $errors = $errors + 1; 
    } else{
        $in = mysqli_real_escape_string($biz, trim($_POST['info'])); 
    }



    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $image_error = "File is not an image.";
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $image_error = "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 50000000) {
        $image_error = "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $image_error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    if ($errors == 0){
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        $imageName = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
        //$_SESSION["imageLocation"] = $imageName; 
       //$picture = "./".$_POST["category"]."/" . $imageName;
        $path = "../posts/" .$imageName;
        //header("Location: insertItemAdmin.php");
        //add to database here
        $q = "INSERT INTO items (itemName, info, picture, business) VALUES ('$i', '$in', '$path', '$user')";
        $r = @mysqli_query($biz, $q); 

        if ($r) { // If it ran OK.
            
            echo "Successfully added item.";        
            
            echo "<script>
            window.location.href='profile.php';
            alert('Upload successful!');
            
            </script>";
                    
        }
        else { // If it did not run OK.

        
                // Debugging message:
                echo '<p>' . mysqli_error($biz) . '<br /><br />Query: ' . $q . '</p>';
                    
            } 


        } else {
        echo "Sorry, there was an error uploading your file.";
        }
    }
    }
    else{
        echo "Error exists"; 
    }


}





?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="javascript.js"></script>
     
    <title>Eyeglasses</title>

    <style>

    .button {
    background-color: rgb(67, 167, 48);
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;

    }

    .button:hover{
        
        background-color: rgb(71, 233, 39);
    }

    input[type=submit]{
  width: 10em;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: black;
        color: white;
    }

    td, th {
       
        padding: 20px;
        font-family: "Comic Sans MS", cursive, sans-serif;
        
    }

   

    tr:hover {background-color: #ddd;}

    

    
    table{
        width: 90em;
     
        height: auto;
        margin-left: auto; 
     margin-right: auto;
    }

    @media screen and (max-width: 1120px) {
        table{
     
        width: auto;
        
    }

    }


    </style>
    
</head>


<body>

<header>


    <br>
    <br>

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
<title>Post</title>
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
</div>

    <div class="productDiv" style="width: 90%; text-align: left; margin: 20px;">

    <form action="post.php" method="post" enctype="multipart/form-data">
    <p>Title: <input type="text" name="itemName" size="10" maxlength="40" value="<?php  if (isset($_POST['itemName'])) echo $_POST['itemName']; ?>"  /><?php echo $itemName_error; ?></p>
   
    <p>Item description: <input type="text" name="info" size="10" maxlength="1000" value="<?php if (isset($_POST['info'])) echo $_POST['info']; ?>"  /><?php echo $info_error; ?></p>
   
  
    <br>
    <br>

  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <p><?php echo $image_error; ?></p>
  <input type="submit" value="Upload Item" name="submit">
</form>

</div>

 



<div class="div" style="flex-wrap: wrap; justify-content: center;">

      
        
 </div>

 <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>


    <br>
    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>


</body>
</html>