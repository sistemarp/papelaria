<style>
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}

	:root{
		--color-bg-menu: rgba(242, 160, 182, 0.9);
		--color-button-link: rgba(0, 0, 0, 0.5);
		--color-button-whats: rgba(0, 0, 0, 0.2);
	}
	
	.navMenu{
		display: flex;
		/* Definindo a largura automatica e altura fixa em 70px */
		width: 100%;
		height: 70px;

		/* Estilizando a cor da barra do menu */
		background: var(--color-bg-menu);
	}

	.menu{
		width: 100%;
		/* Definindo o tipo do display do menu */
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		align-items: center;

		margin-left: 40px;
		margin-right: 20px;
	}

	.links{
		display: flex;
		justify-content: space-around;
		align-items: center;
		width: 45%;
	}.links li{
		list-style: none;

		font-family: Roboto Mono;
		font-style: normal;
		font-weight: normal;
		font-size: 22px;
		line-height: 26px;

	}.links a{
		display: inline-block;
		text-decoration: none;

		color: var(--color-button-link);
	}.links :hover::after {
 		width: 100%;

	}.links a::after{
		content: '';
		width: 0px;
		height: 2px;
		display: block;
		background: var(--color-button-link);
		transition: 500ms;
	}

	.menu img{
		width: 100px;
		height: 60px;
		border: 1px solid pink;
		border-radius: 5px;
	}

	.btWaths{
		/*Definindo o tamanho*/
		width: 228px;
		height: 60px;

		/*removendo marcação do botao*/
		outline-style: none;

		/*Colocando cor no botao*/
		background: var(--color-button-whats);
		box-shadow: 1px 1px 2px black;
		border-radius: 10px;
		border: none;

		text-align: right;
		padding-right: 15px;

		background-image: url("./_img/index/whatsapp.svg");
		background-repeat: no-repeat;
		background-size: 50px;
		background-position: 10px;

		font-family: Roboto;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		line-height: 21px;

		/* identical to box height */
		color: rgba(0, 0, 0, 0.6);

	}.btWaths:hover{
		box-shadow: 2px 2px 4px black;
	}.btWaths:active{
		box-shadow: 1px 1px 2px black;
	}

	.drop ul{
		position: absolute;
		background-color: var(--color-bg-menu);
		display:none;
		border-radius: 7px;
	}.links li:hover ul, .menu li.over ul{
		z-index: 1;
		display:block;
	}.drop ul li{
		margin: 10px;
	}


</style>

<nav class='navMenu'>
	<ul class='menu'>
		<img src="./_img/index/logo.svg">

		<div class="links">
			<li><a href="index.php">Home</a></li>
			<li><a href="">Produtos</a></li>
			<li><a href="">Quem Somos</a></li>
			<li><a href="">Orçamento</a></li>
			<li><a href="">Contato</a></li>
			<?php 
				session_start();
				if(isset($_SESSION["user_session_token"])){
					echo "
					<li class='drop'><a href='#'>".$_SESSION['user_first_name']."</a>
					<ul>
						<li><a href='_paginas/user_config.php'>Configurações</a></li>
						<li><a href='_paginas/logout.php'>Logout</a>
					</ul>					
					</li>";
				}else{
					echo '<li><a href="login.php">Entrar</a></li>';
				}
			
			?>
		</div>

		<button id="whats" class="btWaths">(45) 9 9953-0893</button>
	</ul>
</nav>