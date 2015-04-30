<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
$data = fopen ( 'users.csv', 'r' );
for($i=0; $info = fgetcsv ($data, 300, ";"); $i++){
list($email, $password, $name_1, $name_2, $name_3, $role) = $info;
}
  if(!empty($_SESSION['auth'])){
  	header("Location:index.php");
  exit();
  }
  if(isset($_POST['login']) && isset($_POST['password'])){
  	$notice = 'Wrong login-password.';
  	
  $data = fopen ( 'users.csv', 'r' );
  for($i=0; $info = fgetcsv ($data, 300, ";"); $i++){
    list($mail, $pass, $name_1, $name_2, $name_3, $role) = $info;
    if($mail == $_POST['login'] && $pass == md5($_POST['password'])){
      $_SESSION['auth'] = array(
        'email'   => $mail,
        'name1'    => $name_1,
		'name2'    => $name_2,
		'name3'    => $name_3,
		'role'	  => $role,
      );     
      header('Location:index.php');
      exit();
    }
	
  }
  }
?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Аутентификация пользователя</title>
  <style>
  	.form-line{
	    clear:both;
	  }
	  .form-line input{
		background-color: #D0FFFB;
	    display:block;
	    float:left;
	  }
	  .form-line label{
		background-color: #FFF3D0;
	    display: block;
	    float:left;
	    width:200px;
	  }
  </style>
</head>
<body bgcolor="#FFFAE9">
	<form action="" method="POST">
		<?php
			if(!empty($notice)){
				echo '<div class="notice">'.$notice.'</div>';
			}
		?>
		<div class="form-line">
			<label for="login">E-mail</label>
			<?php ?>
			<input name="login" id="login" type="email" <?php echo empty($_POST['login'])?'':' value="'.htmlspecialchars($_POST['login']).'"' ?>>
		</div>
		<div class="form-line">
			<label for="password">Пароль</label>
			<input name="password" id="password" type="password">
		</div>
		<div class="form-line">
		<input type="submit" name="submitButton" value="Войти">
		</div>
		
	</form>
</body>
</html>