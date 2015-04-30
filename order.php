<?php
 if(isset($_POST['back']))
	{
		header("Location: index.php");
	}
 ?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<head>
	<title> Заказ </title>
	</head>
	<body bgcolor="#FFFAE9">
	<form method = "POST" action="">
	<table border="0" width="500" height="500" >
		<tr>
			<td align="center" bgcolor="#FFF3D0">Фамилия</td>
			<td bgcolor="#D0FFFB">
			<input type="text" name="name1" width="300"/>
			</td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFF3D0">Имя</td>
			<td bgcolor="#D0FFFB">
			<input type="text" name="name2" width="300"/>
			</td>
		</tr >
		<tr>
			<td align="center" bgcolor="#FFF3D0">Отчество</td>
			<td bgcolor="#D0FFFB">
			<input type="text" name="name3" width="300"/>
			</td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFF3D0">Товар</td>
			<td bgcolor="#D0FFFB">
			<select name="item" size="1"/>
			<option value="pen">Ручка</option>
			<option value="pencil">Карандаш</option>
			<option value="ruler">Линейка</option>
			<option value="rubber">Ластик</option>
			<option value="compasses">Циркуль</option>
			<option value="marker">Маркер</option>
			<option value="case">Пенал</option> 
			</select>
			</td>
		</tr>
			<td align="center" bgcolor="#FFF3D0">Количество</td>
			<td bgcolor="#D0FFFB">
			<select name="quantity" size="1"/>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option> 
			<option value="8">8</option> 
			<option value="9">9</option> 
			<option value="10">10</option> 
			</select>
			</td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFF3D0">Комментарий</td>
			<td bgcolor="#D0FFFB">
			<textarea name="comment" cols="20" rows="5"/></textarea>
			</td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFF3D0"> </td>
			<td bgcolor="#D0FFFB">
			<input type="submit" name="submit" value="Заказать"/>
			</td>
		</tr> 
	</table>
	</form>
</body>
<?php
	$prices = array('pen'=>'15','pencil'=>'5','ruler'=>'25','rubber'=>'20','compasses'=>'50','marker'=>'30','case'=>'70');
	$_totalPrice=$_POST[quantity]*$prices["$_POST[item]"];
	$csvFile = 'myCSVfile.csv';
	$csvData = "{$_POST[name1]};{$_POST[name2]};{$_POST[name3]};{$_POST[item]};{$_POST[quantity]};{$_POST[comment]};{$_totalPrice}\r\n";
	file_put_contents( $csvFile, $csvData, FILE_APPEND );
?>
</html>