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



<div class="story">

    <div style="align-items: center;">

        <a href="podcast.php"><img src="../style/podcastLogo.jpg" class="profile"></a>
        <a href="podcast.php"><img src="../style/podcastLogo.jpg" class="profile"></a>
        <a href="podcast.php"><img src="../style/podcastLogo.jpg" class="profile"></a>
        <a href="podcast.php"><img src="../style/podcastLogo.jpg" class="profile"></a>
       
  

    </div>  


</div>

<br>
<br>

<div style="display:flex; width: 100%;">

    <div style="width: 50%; margin: 2px;">
        <a href="podcast.php"><img src="../style/podcast.jpg" class="profile" style="width: 100%; height: 100%;"></a>
    </div>

    <div style="width: 50%; margin: 2px;">
        <a href="podcast.php"><img src="../style/podcast.jpg" class="profile" style="width: 100%; height: 100%;"></a>
    </div>

</div>

<div style="display:flex; width: 100%;">

    <div style="width: 50%; margin: 2px;">
        <a href="podcast.php"><img src="../style/podcast.jpg" class="profile" style="width: 100%; height: 100%;"></a>
    </div>

    <div style="width: 50%; margin: 2px;">
        <a href="podcast.php"><img src="../style/podcast.jpg" class="profile" style="width: 100%; height: 100%;"></a>
    </div>
    
</div>

<div style="display:flex; width: 100%;">

    <div style="width: 50%; margin: 2px;">
        <a href="podcast.php"><img src="../style/podcast.jpg" class="profile" style="width: 100%; height: 100%;"></a>
    </div>

    <div style="width: 50%; margin: 2px;">
        <a href="podcast.php"><img src="../style/podcast.jpg" class="profile" style="width: 100%; height: 100%;"></a>
    </div>
    
</div>

    
</body>
</html>