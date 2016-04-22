<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
session_start();
ob_start();
require_once "../conf.php";
//url
$domain = $_SERVER['HTTP_HOST'];
$path = $_SERVER['SCRIPT_NAME'];
$queryString = $_SERVER['QUERY_STRING'];
$url = "http://" . $domain . $path . "?" . $queryString;
  ?>
  <html>
  <head>
		<title>BeAnExplorerOfBulgaria</title>
    	<link rel="icon" type="image/ico" href="../favicon.ico">
		  <link rel="stylesheet" type="text/css" media="screen" href="../css/styles.css"/>
    	<script type="text/javascript" charset="utf-8" src="../scripts/scripts.js" ></script>
		  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    	<meta charset="utf-8">
    	 	<style>
	 	       @font-face { font-family: Stylo; src: url('../stylo.ttf'); } 
		        body {
		      font-family: Stylo
			</style>
  </head>
  <body>
  <center>
  <img src="../img/bg.jpg" id="full-screen-background-image">
  			<div class="header">
          <a href="http://detelina.hostei.com/bg/<?php echo "?$queryString";?>" style="float:left;">
          <img src="../img/bul.png" style="height:20px; width:30px; position: static; " class="social">
          </a>

          <h1>BeAnExplorerOfBulgaria</h1>

  			</div>

 <!-- Start of navigation menu -->
<ul >
  <li><a href="./?p=index">Home</a></li>
  <li><a href="./?p=district">Districts</a></li>
  <li><a href="./?p=randomdistrict">Random district</a>
  <li><a href="./?p=gallery">Gallery</a></li>

  

  											<!--Start Logged user checking-->
<?php 
if($_SESSION['is-logged'] != true)
{
?>
          <li style="float:right;"><a href="index.php?p=register">Register</a></li>
  				<li style="float:right;"><a href="index.php?p=login" >Log in</a></li></ul>



<?php
}
else
{
	?>

				<li style="float:right;"><a href="index.php?p=logout">Log out</a></li>
        <li style="float:right;"><a href="index.php?p=userpanel">User account</a>
        <li  style="float:right;"><a>Hey, <?php echo $_SESSION['user']['username']; ?></a></li>
        <li  style="float:right;"> 
 <?php
    // <!-- AVATAR UPLOAD/SHOW -->
              
                $fileAvatar = $id . ".png"; 
                $id= $_SESSION['user']['id'];
                $check = mysql_query("SELECT `id` FROM `users` WHERE `id` = '$id'");
                $num = mysql_num_rows($check);
                $fileAvatar = "../avatars/" . $id . ".png";
        if(file_exists($fileAvatar))
        {
          echo '<img src="../avatars/'.$id.'.png" height="30px" width="30px" style="margin:20% ; border: 2px solid;" />';
        } 
        else
        {
          echo '<img src="../img/avatar.jpg" height="30px" width="30px" style="margin:20% ; border: 2px solid;" />';
        }
        ?> 
        </li>
    </li>
        </ul>


				<?php
}
?>
			</div>
											<!-- End of navigation menu -->

											<!--End of logged user checking-->

											<!-- Start of php switch -->
<?php
$p = $_GET['p'];
$file = "switch/".$p."/index.php";
if(file_exists($file))
{
  include $file;
}

else{
  include "switch/index/index.php";
}
?>

											<!-- End of PHP switch -->
      <div class="footer">
          <footer>
          <!-- Start of SimpleHitCounter Code -->
<div align="center" style="float: left; "><img src="http://simplehitcounter.com/hit.php?uid=2074768&f=0&b=65535" style="border: 2px solid #330000; border-radius: 25px;" height="18" width="83" alt="web counter"></a><br><a target="_blank" style="text-decoration:none;">Website views</a></div>
<!-- End of SimpleHitCounter Code -->

<!-- SOCIAL -->


                <p> Copyright &copy <a href="skype:tedo3637" style="text-decoration: none; font-family: cursive;">BeAnExplorerOfBulgaria</a> <?php echo date("Y");?>. All rights reserved.</p>

          </footer>
      </div>
      </center>
  </body>
</html>