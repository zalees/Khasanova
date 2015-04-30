<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Главная</title>
</head>
<body bgcolor="#FFFAE9">
  <h1>Здравствуй, <?php echo !empty($_SESSION['auth'])?$_SESSION['auth']['name']:"Гость"  ?>!</h1>
  <?php
    $check = !empty($_SESSION['auth']);
    if (!empty($_SESSION['auth'])){
      ?>
      <a href="profile.php">Профиль</a><br>
      <?php
        if ($_SESSION['auth']['role']=='admin'){
          echo '<a href="orderlst.php">Список заказов</a><br>';
        }
      ?>
      <a href="order.php">Оформить заказ</a><br>
      <a href="exit.php">Выход</a><br>
      <?php }
    else{
      ?>
      <a href="login.php">Вход</a><br>
	  <a href="registration.php">Регистрация</a><br>
      <?php
    }
  ?>
</body>
</html>