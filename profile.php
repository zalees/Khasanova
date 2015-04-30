<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Аутентификация</title>
</head>
<body bgcolor="#FFFAE9">
  <?php
  	if(!empty($_SESSION['auth'])){
  		?>
		  <h1>Здравствуй, <?php echo $_SESSION['auth']['name'] ?>!</h1>
		  <h3>Ваш статус на сайте:  
		  <?php
                  if ($_SESSION['auth']['role']=='admin') 
				  {
                    echo "Администратор";
                  } 
				  else
				  {
                    echo "Пользователь";
                  }
		  ?></h3>
	  	<a href="index.php">Главная</a><br>
		  <a href="exit.php">Выход</a><br>
  		<?php
  	}
  	else{
  		?>
  		<h1>Необходима аутентификация</h1>
	  	<a href="index.php">Главная</a><br>
	  	<a href="login.php">Вход</a><br>
	  	<a href="exit.php">Выход</a><br>
  		<?php
  	}
  ?>
</body>
</html>