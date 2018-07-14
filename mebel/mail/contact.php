<?php	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = "girih1@ukr.net"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Новое сообщение с контактной формы от:  $name";
$email_body = "Вы получили новое сообщение от контактной формы сайта girih.com.ua.\n\n"."
	Вот подробности:\nИмя: ".htmlspecialchars($name)."\n\nEmail: ".htmlspecialchars($email_address)."\n\nСообщение:\n".htmlspecialchars($message);
$success = mail($to,$email_subject,$email_body);			
?>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<meta http-equiv="Content-Language" content="ru">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Thanks!</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-offset-4 col-md-4 col-md-offset-4 text-center">
  				<div class="logo_success">
  					<a href="#"><img src="../img/logo.png" alt="логотип" class="img-responsive"></a>
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-offset-4 col-md-4 col-md-offset-4 text-center">
  				<div class="text_success">
  					<?php if ($success) echo "<p>Ваше сообщение отправлено. Мы ответим Вам в ближайщее время.</p>" ?>
  <?php if (!$success) echo "<p>Ошибка. Возникли технические неполадки. Попробуйте позже.</p>" ?>
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-offset-4 col-md-4 col-md-offset-4 text-center">
  				<div class="button_success">
  					<a href="http://mebel:822/"><button id="btn_success" class="btn btn-custom btn-lg">Продолжить</button></a>
  				</div>
  			</div>
  		</div>
  	</div>
  </body>
</html>