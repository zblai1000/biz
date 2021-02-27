<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Podcast</title>

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
  <a href="#">Business Categories</a>
  <a href="blogs.php">Blogs</a>
  <a href="#">Podcasts</a>
  <a href="#">Forums</a>
</div>


    

<br>
<br>

<img src="../style/podcast.jpg" style="width: 100%; height:100%; margin: 0px">
<img src="../style/play.png" style="width: 100%; height:100%; margin: 0px">
</body>
</html>