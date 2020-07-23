<!DOCTYPE html>
<html>
<head>
	<title>Entrar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./_css/login.css">
	<link href="https://fonts.googleapis.com/css2?family=Ravi+Prakash&display=swap" rel="stylesheet">
</head>
<body>

	<?php include_once("./_paginas/menu.php"); ?>

	<section class='container'>
		
		<form class='fLogin'>
			<span id='idEntrar'>ENTRAR</span>
			<input id='idLogin' type="email" name="login" placeholder='Login: ' required='required'>
			<input id='idPass' type="password" name="senha" placeholder='Senha: ' required='required' minlength='4' maxlength='12'>
			<button id='entrar'>LOGIN</button>
		</form>

	</section>

	<?php include_once("./_paginas/rodape.php"); ?>

</body>
</html>
