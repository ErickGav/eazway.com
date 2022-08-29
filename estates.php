<?php
require 'config.php';

$_SESSION["id"] = 1; // Fill session id with user's id to get user's data like name and image name
$sessionId = $_SESSION["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $sessionId"));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eazway Estate solutions </title>
    <link rel="stylesheet" type="text/css" href="carstyles.css">
    </head>
    <style media="screen">
    body .forms{
      position: fixed;
      top: 30px;
      right: 1px;
    }
    body .forms .upload{
      width: 140px;
      position: relative;
      margin: auto;
      text-align: center;
    }
    body .forms .upload img{
      border-radius: 50%;
      border: 1px solid #DCDCDC;
      width: 75px;
      height: 80px;
    }
    body .forms .upload .rightRound{
      position: absolute;
      bottom: 0;
      right: 0;
      background: #00B4FF;
      width: 20px;
      height: 20px;
      line-height: 20px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    body .forms .upload .leftRound{
      position: absolute2222222222;
      bottom: 0;
      left: 0;
      background: red;
      width: 20px;
      height: 20px;
      line-height: 20px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    body .forms .upload .fa{
      color: white;
    }
    body .forms .upload input{
      position: absolute;
      transform: scale(2);
      opacity: 0;
    }
    body .forms .upload input::-webkit-file-upload-button, .upload input[type=submit]{
      cursor: pointer;
    }
  </style>
<body >
    <div class="menu-bar">
    <ul>
        <li><a href="index.php"><i class="fa fa-home"></i></i><br> Home</a></li>
        <li class="active"><a href="estates.php"><i class="fa fa-exchange"></i></i><br>Buy <br>/Sell Estate</a>
        <div class="sub-menu-1">
            <ul>
                <li class="hover-me"> <a href="buyestates.php">Buy Estate</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-2">
                        <ul>
                        <li><a href="estateslogin.php">login</a><i class="fa fa-users"></i></li>
                        </ul>
                    </div>
                </li>
                
                <li class="hover-me"> <a href="sellestates.php">Sell Estate</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-2">
                        <ul>
                        <li><a href="sellestateslogin.php">login</a><i class="fa fa-users"></i></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        </li>
        <li><a href="#"><i class="fa fa-building"></i></i><br>Rent<br>Let</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="#"><i class="fa fa-home"></i></i>Rent </a><i class="fa fa-angle-right"></i>
                        <div class="sub-menu-2">
                            <ul>
                            <li><a href="#">login</a><i class="fa fa-users"></i></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hover-me"> <a href="#"><i class="fa fa-money"></i></i>Let</a><i class="fa fa-angle-right"></i>
                        <div class="sub-menu-2">
                            <ul>
                            <li><a href="#">login</a><i class="fa fa-users"></i></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="#"><i class="fa fa-address-card"></i></i><br>Register <br>/Contact Agent</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="#"><i class="fa fa-address-card" ></i>Register your Agent<i class="fa fa-angle-right"></i></a>
                    <div class="sub-menu-2">
                        <ul>
                        <li><a href="#">login</a><i class="fa fa-users"></i></li>
                        </ul>
                    </div>
                    </li>
                    <li class="hover-me"> <a href="#"><i class="fa fa-users"></i></i>Find an Agent<i class="fa fa-angle-right"></i></a>
                        <div class="sub-menu-2">
                            <ul>
                            <li><a href="#">login</a><i class="fa fa-users"></i></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="#"><i class="fa fa-address-card"></i></i><br>Dealership<br>Register /Contact</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="#">Register as Dealer</a>
                    <div class="sub-menu-2">
                        <ul>
                            <li><a href="#">login</a><i class="fa fa-users"></i></li>
                        </ul>
                    </div>
                    </li>
                    <li class="hover-me"> <a href="#">Contact Dealer Directly</a>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="#">login</a><l class="fa fa-users"></l></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li><i class="fa fa-money"></i><br><a href="#">Financing<br>/& Morgages</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="#">Financing</a><i class="fa fa-angle-right"></i>
                     <div class="sub-menu-2">
                        <ul>
                            <li><a href="#">login</a><i class="fa fa-users"></i></li>
                        </ul>
                    </div>
                    </li>
                    <li class="hover-me"> <a href="#">Morgages</a>
                    <div class="sub-menu-2">
                        <ul>
                            <li><a href="#">login</a><i class="fa fa-users"></i></li>
                        </ul>
                    </div>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="#"><i class="fa fa-newspaper-o"></i></i><br>News on the <br>Go</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="#"> Home</a><i class="fa fa-angle-right"></i>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="#">login</a><i class="fa fa-users"></i></li>
                            </ul>
                        </div>
                </li>
                </ul>
            </div>
        </li>
        <li><i class="fa fa-line-chart"></i><br><a href="#">Commercial &<br>Investment</a>
            <div class="sub-menu-1">
                <ul>
<li class="hover-me"> <a href="#">List An assets</a> <i class="fa fa-angle-right"></i>
<div class="sub-menu-2">
<ul>
    <li><a href="#">login</a><i class="fa fa-users"></i></li>
</ul>
</div>
</li>
<li class="hover-me"> <a href="#"><i class="fa fa-line-chart"></i> List a Production</a><i class="fa fa-angle-right"></i>
    <div class="sub-menu-2">
        <ul>
            <li><a href="#">login</a><i class="fa fa-users"></i></li>
        </ul>
        </div>
</li>
                    <li class="hover-me"> <a href="#">> Register as An Investor </a><i class="fa fa-angle-right"></i>
                    
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="#">login</a><i class="fa fa-users"></i></li>
                            </ul>
                            </div>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="#"><i class="fa fa-bed"></i></i><br>Hotels, <br>& Holidays</a>
            <div class="sub-menu-1">
                <ul>
                    <li> <a href="#">Buy Estate</a></li>
                    <li> <a href="#">Sell Estate</a></li>
                </ul>
            </div>
        </li>
        <li><a href="#"><i class="fa fa-briefcase"></i></i><br>About Us</a></li>
    </ul>
</div>
<div class="action">
    <div class="profile" onclick="menuToggle();">
        <img alt="bg.jpg" src="bg.jpg" id="photo">
        <input type="file" id="file">
        <label for="file" id="uploadBtn">choose file</label>
        <script src="app.js"></script>
    </div>
    <div class="menu">
        <div class="active">
            
        <h3>Its Me Erick<br><span>doing tha ting</span></h3>
        <ul>
            <li><img src="profile.png" alt="home.png"><a href="#">home</a></li>
            <li><img src="profile.png" alt="profile.png"><a href="#">my profile</a></li>
            <li><img src="profile.png" alt="key.png"><a href="#">Manage Accounts</a></li>
            <li><img src="profile.png" alt="edit.png"><a href="#">Manage Portfolio</a></li>
            <li><img src="profile.png" alt="inbox.png"><a href="#">Messages</a></li>
            <li><img src="profile.png" alt="notifications.png"><a href="#">Notifications</a></li>
            <li><img src="profile.png" alt="mission.png"><a href="#">Missions</a></li>
            <li><img src="profile.png" alt="settings.png"><a href="#">Settings</a></li>
            <li><img src="profile.png" alt="logout.png"><a href="#">Log Out</a></li>
        </ul>
    </div>
    </div>
</div>
<div>
    <script>
        function menuToggle(){
            const toggleMenu =document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
</div>
<div class="forms">
    <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
      <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
      <div class="upload">
        <img src="img/<?php echo $user['image']; ?>" id = "image">

        <div class="rightRound" id = "upload">
          <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera"></i>
        </div>
        <div class="leftRound" id = "cancel" style = "display: none;">
          <i class = "fa fa-times"></i>
        </div>
        <div class="rightRound" id = "confirm" style = "display: none;">
          <input type="submit">
          <i class = "fa fa-check"></i>
        </div>
      </div>
    </form>
    </div>
    <script type="text/javascript">
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; // Back to previous image

        document.getElementById("cancel").style.display = "none";
        document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }
    </script>
 <?php
    if(isset($_FILES["fileImg"]["name"])){
      $id = $_POST["id"];

      $src = $_FILES["fileImg"]["tmp_name"];
      $imageName = uniqid() . $_FILES["fileImg"]["name"];

      $target = "img/" . $imageName;

      move_uploaded_file($src, $target);

      $query = "UPDATE tb_user SET image = '$imageName' WHERE id = $id";
      mysqli_query($conn, $query);
    }
    ?>
<div class="container">
    <form action="#" method="get" class="search-bar">
        <input type="text" placeholder="EAZ-WAY search anything @EAZY-WAY" name="q">
        <button type="submit">
            <img src="images/search.jpg">
        </button>
    </form>    
</div>
<div class="button">
        <a href="login.html"> login</a>
        <a href="register.html"> Register</a>
    </div>
</body>
</html>