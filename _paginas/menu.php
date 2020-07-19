<style>
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	
	.navMenu{
		display: flex;
		/* Definindo a largura automatica e altura fixa em 70px */
		width: 100%;
		height: 70px;

		/* Estilizando a cor da barra do menu */
		background: #FEDFE7;
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

		color: rgba(88, 111, 83, 0.5);
	}.links :hover::after {
 		width: 100%;

	}.links a::after{
		content: '';
		width: 0px;
		height: 2px;
		display: block;
		background: rgba(88, 111, 83, 0.5);
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
		background: rgba(0, 0, 0, 0.3);
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



</style>

<nav class='navMenu'>
	<ul class='menu'>
		<img src="./_img/index/logo.svg">

		<div class="links">
			<li><a href="">Home</a></li>
			<li><a href="">Produtos</a></li>
			<li><a href="">Quem Somos</a></li>
			<li><a href="">Orçamento</a></li>
			<li><a href="">Contato</a></li>
			<li><a href="">Entrar</a></li>
		</div>

		<button id="whats" class="btWaths">(45) 9 9953-0893</button>
	</ul>
</nav>