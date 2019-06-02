<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>05.Post и Get запросы</title>
	<style>h1{color: GreenYellow;}</style>
</head>
<body>

	<form action="index.php" method="post">
		<input type="text" name="userName" placeholder="Ваше имя"><br>
		<input type="email" name="userEmail" placeholder="Ваш email"><br>
		<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
		<input type="submit" value="Отправить форму">
	</form>	

<?php


if (!empty($_POST)) {

	$message = "Новое сообщение: \n "
	. "Имя отправителя: " . $_POST['userName'] . "\n"
	. "Email отправителя: " . $_POST['userEmail'] . "\n"
	. "Текст сообщения: \n " . $_POST['message'];

	$from = "From: rambler@rambler.com";
	$result = mail("mail@mail.com", "Сообщение", $message, $from);


	if ($result) {
		echo "<h1>Форма отправлена успешно !</h1>";
	} else {
		echo "Что то нетак !";
	}
}

?>


	 
	
</body>
</html>