	<?php
if($_SESSION['is-logged'] != true) //log in checking
{
	header("Location:./?p=login");
}
else
{

	?>
	<form method="post" action="">
	<div class="flexContainer">
    <input type="text" class="inputField" name="username" placeholder="Username ">
    <button type="submit" name="search"><img src="../img/search.png" style="cursor: pointer;" height="20px" width="20px" ></button>
    </div>
    </form>



<?php
if(isset($_POST['search']))
{	
	$username = trim(htmlspecialchars($_POST['username']));
	$search = mysql_query("SELECT * FROM `users` WHERE `username`='$username'");
		if($employ = mysql_fetch_assoc($search)) {	

	?>
<table>
  	<tr>
  		<td style="width:20%;">  </td>
    	<td id="title-box" style="width: 50% ">Information</td>
    	
  	</tr>
  	<tr>
    	<td> 	
    <!-- AVATAR UPLOAD/SHOW -->
        			<?php
        				$fileAvatar = $id . ".png"; 
        				$id= $employ['id'];
        				$id2= $_SESSION['user']['id'];
        				$check = mysql_query("SELECT `id` FROM `users` WHERE `id` = '$id'");
        				$num = mysql_num_rows($check);
        			 	$fileAvatar = "../avatars/" . $id . ".png";
				if(file_exists($fileAvatar))
				{
					echo '<img src="../avatars/'.$id.'.png" height="150px" width="150px" style="float: left; border: 5px solid;" />';
				}	
				else
				{
					echo '<img src="../img/avatar.jpg" height="150px" width="150px" style="float: left; border: 5px solid;" />';
				}
				?>

			 
    	</td>
    	<td >
    <h4><big>User:</big> <font color="#10932c"><?php echo "".$employ['username']."";?></font></h4>
	<h4><big>E-mail:</big> <font color="#10932c"><?php echo "".$employ['email']."";;?></font></h4>
	<h4><big>Area:</big> <font color="#10932c"> <?php echo "".$employ['area']."";;?></font></h4>
	
    	</td>
    	<?php

	?>


	
</tr>

		 <?php
	}
else{
	echo "<font color='red'>Sorry but <big><big>there is a problem with</big></big> <big><big>".$username."</big></big>!<br/>Rewrite the username please.</font>";
}

		
	 ?>


    	</td> 
  	</tr>

</table>
<?php
	}
}


?>
</div>
