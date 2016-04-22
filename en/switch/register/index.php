<?php 
if($_SESSION['is-logged'] != true) //is user logged checking
	{
	?>
<form id="box" method="post" action="">
	<h2>Registration</h2>
	<br />
	<input id="text-box" placeholder="Username:" type="text" name="username" value="" maxlength="50"></input>
	<br />
	
	<br />
	<input id="text-box" placeholder="Password:" type="password" name="password" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<input id="text-box" placeholder="Password again:" type="password" name="password2" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<select id="text-box" style="width: auto;" name="area">
		<option value="volvo">The area you are living in</option>
		  <option value="Благоевград">Благоевград</option>
		  <option value="Бургас">Бургас</option>
		  <option value="Варна">Варна</option>
		  <option value="Велико Търново">Велико Търново</option>
		  <option value="Видин">Видин</option>
		  <option value="Враца">Враца</option>
		  <option value="Габрово">Габрово</option>
		  <option value="Добрич">Добрич</option>
		  <option value="Кърджали">Кърджали</option>
		  <option value="Кюстендил">Кюстендил</option>
		  <option value="Ловеч">Ловеч</option>
		  <option value="Монтана">Монтана</option>
		  <option value="Пазарджик">Пазарджик</option>
		  <option value="Перник">Перник</option>
		  <option value="Плевен">Плевен</option>
		  <option value="Пловдив">Пловдив</option>
		  <option value="Разград">Разград</option>
		  <option value="Русе">Русе</option>
		  <option value="Силистра">Силистра</option>
		  <option value="Сливен">Сливен</option>
		  <option value="Смолян">Смолян</option>
		  <option value="София">София</option>
		  <option value="Стара Загора">Стара Загора</option>
		  <option value="Търговище">Търговище</option>
		  <option value="Хасково">Хасково</option>
		  <option value="Шумен">Шумен</option>
		  <option value="Ямбол">Ямбол</option>		  		  		  
	</select>
	<br />

	<br />
	<input id="text-box" placeholder="E-mail:" type="text" name="email" value="" maxlength="150"></input>
	<br />
	<br />

	<br />
	<input id="text-box" placeholder="Name" type="text" name="name" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<br />
	<input id="text-box" placeholder="Surname" type="text" name="surname" value="" maxlength="150"></input>
	<br />
	<br />

	
	<button id="button" type="submit" name="register-me">Register</button>
	<br />
	<h5>Already have an account? <a href="./?p=login">Sing in</a> now! </h5>
	<font color="red">	



<?php

if(isset($_POST['register-me']))
	{
	$username = trim(htmlspecialchars($_POST['username']));
	$password = md5(trim(htmlspecialchars($_POST['password'])));
	$password2 = md5(trim(htmlspecialchars($_POST['password2'])));  
	$email = trim(htmlspecialchars($_POST['email']));
	$area = trim(htmlspecialchars($_POST['area']));
	$name = trim(htmlspecialchars($_POST['name']));
	$surname = trim(htmlspecialchars($_POST['surname']));
	if (empty($name)){ //empty name box
		echo "Insert your name.";
	}
	else
	{
	if(empty($username))//empty username box 
	{
		echo "Insert your username.";
	}
	else
	{
	if($password !=$password2 ) //password confirmation
	{
		echo "Wrong password";
	}
	else
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {




				
	     

	$check = mysql_query("SELECT `username` FROM `users` WHERE `username` = '$username'"); //member database checking
	$num = mysql_num_rows($check);
	if ($num > 0)
	{
		echo "This user is registered.";
	}
	else
	{
	mysql_query("INSERT INTO `avatar` (`username`) VALUES('$username')");
	mysql_query("INSERT INTO `users` (`username`,`password`,`email`,`area`,`name`,`surname`)VALUES('$username','$password','$email','$area', '$name', '$surname')");
	header("Location: ./?p=login");
	}

		} 
		else {
		     echo("E-mail: '$email' is not valid. ");
		}
	}
		echo mysql_error();
}
}
}
}
		
	
else
{
	header("Location: ./?p=userpanel");
}

?>
</font>
</form>