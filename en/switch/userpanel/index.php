
	<?php
if($_SESSION['is-logged'] != true) //log in checking
{
	header("Location:./?p=login");
}
else
{

	?>
<table>
  <tr>
  	<td style="width: 20%;" ></td>
    <td id="title-box" style="width: 50%;" >Information</td>
  </tr>
  <tr style="border: 2px solid #34495e; border-radius: 25px;">
    <td> 	
    <!-- AVATAR UPLOAD/SHOW -->
        			<?php
        				$fileAvatar = $id . ".png"; 
        				$id= $_SESSION['user']['id'];
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
    <td>
    <h4><big>User:</big> <font color="#10932c"><?php echo $_SESSION['user']['username'];?></font></h4>
	<h4><big>E-mail:</big> <font color="#10932c"><?php echo $_SESSION['user']['email'];?></font></h4>
	<h4><big>Area:</big> <font color="#10932c"> <?php echo $_SESSION['user']['area'];?></font></h4>
    </td>

		<?php
}	
	 ?>

  </tr>
  <tr>
  	<td >
  	<?php
  						if(file_exists('../avatars/'.$id.'.png')){ ?>

				<a href="./?p=upload">
					<div id="button" >Change the avatar</div></a>
				<br />
				<?php
				}
				else{?>
				<a href="./?p=upload">
					<div id="button" >Upload an avatar</div>
				</a>
				<br />
				<?php	
				}
				?>  
 
				<a href="./?p=friends">
					<div id="button" >Search your friends</div>
				</a> 
  	</td>
  	    	<td>
    		</td>
    		

</tr>
  </tr>
</table>
<form name="feedback" method="post"  action="">
<textarea id="chat" cols="50" rows="4" name="chat-text" placeholder="Type yout message here."></textarea><br />
<button id="button" name="send-chat-msg" >Type a message</button>
</form>

<?php
if(isset($_POST['send-chat-msg']))
{	
	$username2 = $_SESSION['user']['username'];
	$text = trim(htmlspecialchars($_POST['chat-text']));
	$time = time();
	
	if(strlen($text) < 3)
	{
		echo "<font color='darkred'>Please dont spam in the chat!</font><br /><br />";
	}
	else
	{
		mysql_query("INSERT INTO `chat` (`username`,`timestamp`,`text`)VALUES('$username2','$time','$text')");
		echo "<font color='green'>The message successful sended.</font><br /><br />";
	}
}
 		$coq = mysql_query("SELECT * FROM `chat` ORDER BY `timestamp` DESC LIMIT 3");
 		while($cr = mysql_fetch_array($coq))
 		{
?>

		<font color="red"><big><?php echo $cr['username']; ?></big></font> <?php echo date("d.m.Y - H:i", $cr['timestamp']);?>>> <font color="brightred">  <?php echo $cr['text'];?><br /></font>	
<?php
}

?>
</div>
