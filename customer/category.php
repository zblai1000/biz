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



<br>
<br>

<div style="display:flex; width: 100%;">

    <div style="width: 50%; margin: 2px;">
        <img src="../style/1.jpg" class="profile" style="width: 100%; height: 100%;">
    </div>

    <div style="width: 50%; margin: 2px;">
        <img src="../style/3.jpg" class="profile" style="width: 100%; height: 100%;">
    </div>

</div>

<div style="display:flex; width: 100%;">

    <div style="width: 50%; margin: 2px;">
        <img src="../style/2.jpg" class="profile" style="width: 100%; height: 100%;">
    </div>

    <div style="width: 50%; margin: 2px;">
        <img src="../style/4.jpg" class="profile" style="width: 100%; height: 100%;">
    </div>

</div>


    
</body>
</html>