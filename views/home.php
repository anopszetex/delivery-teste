<!DOCTYPE html>
<html>
<head>
	<title>Delivery - System</title>
	<link rel="stylesheet" type="text/css" href="<?= INCLUDE_PATH ?>views/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
	<section class="descricao-home">
		<div class="container">
			<h2><i class="fas fa-bullhorn"></i> Faça seu pedido conosco!</h2>
			<a href="<?= INCLUDE_PATH  ?>fechar-pedido">Fechar pedido</a>
			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</section><!--descricao-home-->

	<section class="lista-produtos">
		<div class="container">
			<?php for($x = 0; $x < 3; $x++): ?>
				<div class="box-single-food">
					<img src="<?= INCLUDE_PATH ?>assets/images/img1.png">
					<p>R$20,00</p>
					<a href="<?= INCLUDE_PATH  ?>?addCard=0">Adicionar ao carrinho</a>
				</div><!--box-single-food-->
			<?php endfor; ?>
			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</section>

</body>
</html>