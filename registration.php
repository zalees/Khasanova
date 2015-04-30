<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>
	  .form-line
	  {
	    clear:both;
	  }
	  .form-line input
	  {
		background-color: #D0FFFB;
	    display:block;
	    float:left;
	  }
	  .form-line label
	  {
		background-color: #FFF3D0;
	    display: block;
	    float:left;
	    width:200px;
	  }
	</style>
</head>
<body bgcolor="#FFFAE9">
  <?php
  $emailPattern = "/^\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3}$/";
  $notices = array();
  if(isset($_POST['register']))
  {
    if(($_POST['email'])=='' || ($_POST['password'])=='' || ($_POST['name1'])=='' || ($_POST['name2'])=='' || ($_POST['name3'])=='')
	{
      $notices[] = 'Поля, помеченные *, обязательны для заполнения.';
    }
    else{
      if(!preg_match($emailPattern, $_POST['email']))
	  {
        $notices[] = 'E-mail введен неверно.';
      }
    if(count($notices))
	{
      echo '<h4>Форма заполнена неправильно</h4><ul>';
      foreach($notices as $notice)
	  {
        echo '<li>'.$notice.'</li>';
      }
      echo '</ul><br>';
    }
    else
	{
      $data = array(
        'email'    => $_POST['email'],
        'password' => md5($_POST['password']),
        'name1' => $_POST['name1'],
		'name2' => $_POST['name2'],
		'name3' => $_POST['name3'],
        'role'  => 'user',
      );
        $f=fopen('users.csv','a+');
		fputcsv($f,$data,';'); 
		fclose($f);
      echo '<h3> Вы зарегистрированы</h3>';
    }
  }
  ?>
  <?php
  if( (isset($_POST['register']) && count($notices)) || !isset($_POST['register']) )
  {
  ?>
    <form action="" method="POST">
      <div class="form-line">
        <label for="email">E-mail *</label>
        <input type="email" name="email" id="email"  required<?=(isset($_POST['email'])?' value="'.$_POST['email'].'"':'')?>>
      </div>
      <div class="form-line">
        <label for="password">Пароль *</label>
        <input type="password" name="password" id="password" required<?=(isset($_POST['password'])?' value="'.$_POST['password'].'"':'')?>>
      </div>
      <div class="form-line">
        <label for="name1">Фамилия *</label>
        <input type="text" name="name1" id="name1" required<?=(isset($_POST['name1'])?' value="'.$_POST['name1'].'"':'')?>>
      </div>
	  <div class="form-line">
        <label for="name2">Имя *</label>
        <input type="text" name="name2" id="name2" required<?=(isset($_POST['name2'])?' value="'.$_POST['name2'].'"':'')?>>
      </div>
	  <div class="form-line">
        <label for="name3">Отчество *</label>
        <input type="text" name="name3" id="name3" required<?=(isset($_POST['name3'])?' value="'.$_POST['name3'].'"':'')?>>
      </div>
        <?=(isset($_POST['subscription'])?' checked':'')?>>
      <div class="form-line">
        <input type="submit" name="register" value="Зарегистрироваться">
      </div>
    </form>
	<?php
    }
	?>
</body>
</html>