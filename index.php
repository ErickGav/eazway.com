<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eazy-way Estates Solutions</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="searcarstyles.css">
</head>
<body >
<div class="menu-bar">
 <ul>
        <li class="active"><a href="index.php"><i class="fa fa-home"></i></i><br> Home</a></li>
        <li><a href="estates.php"><i class="fa fa-exchange"></i></i><br>Buy <br>/Sell Estate</a>
        <div class="sub-menu-1">
            <ul>
                <li class="hover-me"> <a href="estates.php">Buy Estate</a><i class="fa fa-angle-right"></i>
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
        <script src="appp.js"></script>
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


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
   
</body>