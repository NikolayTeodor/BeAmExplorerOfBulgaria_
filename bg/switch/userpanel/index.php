
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
    <td id="title-box" style="width: 50%;" >Информация</td>
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
    <h4><big>Профил:</big> <font color="#10932c"><?php echo $_SESSION['user']['username'];?></font></h4>
	<h4><big>Електронна поща:</big> <font color="#10932c"><?php echo $_SESSION['user']['email'];?></font></h4>
	<h4><big>Местожителство:</big> <font color="#10932c"> <?php echo $_SESSION['user']['area'];?></font></h4>
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
					<div id="button" >Сменете аватара</div></a>
				<br />
				<?php
				}
				else{?>
				<a href="./?p=upload">
					<div id="button" >Прикачете аватар</div>
				</a>
				<br />
				<?php	
				}
				?>  
 
				<a href="./?p=friends">
					<div id="button" >Намерете приятел</div>
				</a> 
  	</td>
  	    	<td>
    		</td>
    		

</tr>
  </tr>
</table>
<form name="feedback" method="post"  action="">
<textarea id="chat" cols="50" rows="4" name="chat-text" placeholder="Напишете своето съобщение тук.Забранени са псувните и псувните."></textarea><br />
<button id="button" name="send-chat-msg" >Напишете съобщение</button>
</form>

<?php
if(isset($_POST['send-chat-msg']))
{	
	$username2 = $_SESSION['user']['username'];
	$text = trim(htmlspecialchars($_POST['chat-text']));
	$time = time();
	
	if(strlen($text) < 3)
	{
		echo "<font color='darkred'>Моля не спамете в чатбокса!</font><br /><br />";
	}
	else
	{
		mysql_query("INSERT INTO `chat` (`username`,`timestamp`,`text`)VALUES('$username2','$time','$text')");
		echo "<font color='green'>Съобщението изпратено успешно</font><br /><br />";
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
