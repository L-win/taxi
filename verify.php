<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Подтверждение заказа</title>
	<link rel="stylesheet" type="text/css" href="taxi.css">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>

<?php 

	$phone = $_POST['phone'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$counter = 0;
	
	if ( isset($phone) and !empty($phone) ) ++$counter;
	if ( isset($name) and !empty($name) ) ++$counter;
	if ( isset($address) and !empty($address) ) ++$counter;
	
?>

	<div id="wrapper">
		<div class="top" id="block" >
			<p style="font-size:50px;">TAXI ПЕТЕРГОФ</p>
		</div>
		<div class="middle_one" id="block" style="text-align:center;">
			<?php if ( $counter == 3 ){ ?>
			<p>Ваш заказ принят!</p><p>Ожидайте звонка оператора.</p>
			<?php } else { ?>
			<p><a href="order.html">Заполните</a> все поля анкеты и повторите попытку.</p>
			<?php } ?>
		</div>
		<div class="middle_two" id="block" style="text-align:center; padding-right:0px;">
			<a style="margin:15px;" href="index.html" >Вернуться &nbsp;на &nbsp;Главную</a>
		</div>
		<div class="foot" id="block" >&copy 2017 ИП "TAXI Петергоф"</div>
	</div>

</body>
</html>