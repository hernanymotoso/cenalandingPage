<!doctype html>
<html lang="pt-br">
	<head>
		<title>Minha Landing Page</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="<?php echo BASE_URL ;?>/assets/css/style.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8"/>
		<meta name="description" content="Descricao do site"/>
		<meta name="keywords" content="palavras-chave,separadas,por,virgula">
		<meta name="author" content="Hernany"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0"/>
	</head>
	<body>
		<header>
			<div class="container">

				<div>
					<div class="logo-1"></div><!--Logo-1-->
				</div><!--Div Cega-->

				<div>
					<div class="logo-2"></div><!--Logo-2-->
			    </div><!--Div Cega-->

				<div class="clear"><!--clear-->

			</div><!--container-->
		</header><!--header-->

		<section class="cover-form">

			<div class="container bg">

				<div class="form-container">

					<h2>PODE ACREDITAR, POR DENTRO AINDA É MAIS BONITO.
					</h2>
					<form method="POST" action="/home">
						<div class="form-wraper">
							<p>*Nome completo:</p>
							<input type="text" name="nome" required placeholder="Nome">
					    </div><!--form-wraper-->

					    <div class="form-wraper">
							<p>E-mail:</p>
							<input type="text" name="email" required placeholder="E-mail">
					    </div><!--form-wraper-->

					    <div class="form-wraper">
							<p>Telefone:</p>
							<input type="text" name="telefone" required placeholder="Telefone">
					    </div><!--form-wraper-->
						
						<div class="form-wraper">
							<input type="submit" name="acao" value="Enviar">
						</div><!--wraper-->
						<div class="form-wraper">
							<p>* Campos obrigatórios</p>
						</div><!--wraper-->
					</form>
				</div><!--form-container-->
		
			</div><!--container-->
		</section><!--cover-form-->

		<section class="chamada">
			<div class="container">
				<div><h2>Minha chamada para o empreendimento</h2></div>
				<div><p>Alguma mensagem para a chamada</p></div>
			</div><!--container-->		
		</section><!--chamada-->

		<section class="mosaico">

			<div class="container">

				<div class="flex-mosaico">
					
					<div style="background-image:url('<?php echo BASE_URL ;?>/assets/imagens/mosaico1.jpg');" class="item-1-mosaico">
						
					</div><!--item-1-mosaico-->		
					<div class="item-2-mosaico">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex eum vel, iste maiores rerum officia officiis alias quisquam magni quod cumque ipsa iusto fuga sint labore, quasi corporis quo mollitia.</p>
					</div><!--item-2-mosaico-->

				</div><!--flex-mosaico-->

				<div class="flex-mosaico" style="flex-direction: row-reverse">
					
					<div style="background-image:url('<?php echo BASE_URL ;?>/assets/imagens/mosaico2.jpg');" class="item-1-mosaico">
						
					</div><!--item-1-mosaico-->		
					<div class="item-2-mosaico">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex eum vel, iste maiores rerum officia officiis alias quisquam magni quod cumque ipsa iusto fuga sint labore, quasi corporis quo mollitia.</p>
					</div><!--item-2-mosaico-->

				</div><!--flex-mosaico-->

				<div class="flex-mosaico">
					
					<div style="background-image:url('<?php echo BASE_URL ;?>/assets/imagens/mosaico3.jpg');" class="item-1-mosaico">
						
					</div><!--item-1-mosaico-->		
					<div class="item-2-mosaico">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex eum vel, iste maiores rerum officia officiis alias quisquam magni quod cumque ipsa iusto fuga sint labore, quasi corporis quo mollitia.</p>
					</div><!--item-2-mosaico-->

				</div><!--flex-mosaico-->

				<div class="flex-mosaico" style="flex-direction: row-reverse">
					
					<div style="background-image:url('<?php echo BASE_URL ;?>/assets/imagens/mosaico4.jpg');" class="item-1-mosaico">
						
					</div><!--item-1-mosaico-->		
					<div class="item-2-mosaico">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex eum vel, iste maiores rerum officia officiis alias quisquam magni quod cumque ipsa iusto fuga sint labore, quasi corporis quo mollitia.</p>
					</div><!--item-2-mosaico-->

				</div><!--flex-mosaico-->

			</div><!--container-->

		</section><!--mosaico--> 

		<footer>
			<img src="<?php echo BASE_URL ;?>/assets/imagens/logo.png"/>
			<p>Todos os direitos reservados</p>
			<p>Contato: (XX) XXXXX-XXXX</p>
		</footer>

	</body>	
</html>