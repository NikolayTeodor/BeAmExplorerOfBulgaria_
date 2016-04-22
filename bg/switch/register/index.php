<?php 
if($_SESSION['is-logged'] != true) //is user logged checking
	{
	?>
<form id="box" method="post" action="">
	<h2>Регистрация</h2>
	<br />
	<input id="text-box" placeholder="Потребител:" type="text" name="username" value="" maxlength="50"></input>
	<br />
	
	<br />
	<input id="text-box" placeholder="Парола:" type="password" name="password" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<input id="text-box" placeholder="Потвърди парола:" type="password" name="password2" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<select id="text-box" style="width: auto;" name="area">
		<option value="volvo">Областта, в която живеете</option>
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
	<input id="text-box" placeholder="Е-поща:" type="text" name="email" value="" maxlength="150"></input>
	<br />
	<br />

	<br />
	<input id="text-box" placeholder="Име" type="text" name="name" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<br />
	<input id="text-box" placeholder="Фамилия" type="text" name="surname" value="" maxlength="150"></input>
	<br />
	<br />

	
	<button id="button" type="submit" name="register-me">Регистрация</button>
	<br />
	<h5>Вече си създал профил? <a href="./?p=login">Влез</a> сега! </h5>
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
		echo "Въведете името си.";
	}
	else
	{
	if(empty($username))//empty username box 
	{
		echo "Въведете потребителското си име.";
	}
	else
	{
	if($password !=$password2 ) //password confirmation
	{
		echo "Грешно повторена парола.";
	}
	else
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {




				
	     

	$check = mysql_query("SELECT `username` FROM `users` WHERE `username` = '$username'"); //member database checking
	$num = mysql_num_rows($check);
	if ($num > 0)
	{
		echo "Има такъв потребител.";
	}
	else
	{
	mysql_query("INSERT INTO `avatar` (`username`) VALUES('$username')");
	mysql_query("INSERT INTO `users` (`username`,`password`,`email`,`area`,`name`,`surname`)VALUES('$username','$password','$email','$area', '$name', '$surname')");
	header("Location: ./?p=login");
	}

		} 
		else {
		     echo("Имейл адресът: '$email' не е валиден ");
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