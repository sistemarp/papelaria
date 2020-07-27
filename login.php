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

	<section class='container' id='cnt'>		
		<form class='fLogin'id='form_login'>
			<div id='errors'></div>
			<span id='idEntrar'>ENTRAR</span>
			<input id='idLogin' type="email" name="login" placeholder='Login: ' required='required'>
			<input id='idPass' type="password" name="senha" placeholder='Senha: ' required='required' minlength='4' maxlength='12'>
			<button id='entrar'>LOGIN</button>
			<a id='cadastro' href="cadastro.php">Cadastre-se</a>
			<a id='esqueceu' href="esqueceu_senha.php">Esqueceu sua senha?</a>
		</form>

	</section>

	<?php include_once("./_paginas/rodape.php"); ?>

</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
	<script src="./_java/index/index.js"></script>
</html>
