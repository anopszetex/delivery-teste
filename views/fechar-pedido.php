<!DOCTYPE html>
<html>
<head>
	<title>Carrinho - System</title>
	<link rel="stylesheet" type="text/css" href="<?= INCLUDE_PATH ?>views/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
	<section class="descricao-home">
		<div class="container">
			<h2><i class="fas fa-shopping-cart"></i> Seu carrinho!</h2>
			<a href="<?= INCLUDE_PATH  ?>">Voltar</a>
			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</section><!--descricao-home-->

	<div class="container">
		<?php 
			if($carrinho = deliveryModel::getItemsCart()) {
			  	$total = 0;
		?>
		<table style="width: 100%;">
			<tr>
				<td>Imagem</td>
				<td>Preço</td>
			</tr>

			<?php
				foreach($carrinho as $key => $value):
				$item = deliveryModel::getItem($value);
			?>
				<tr>
					<td><img src="<?= INCLUDE_PATH;  ?>assets/images/<?= $item[0]; ?>"></td>
					<td>R$<?= number_format($item[1], 2, ',', '.'); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
		<?php } else { ?>
			<h2 style="text-align: center; margin: 10px 0;">Seu carrinho está vazio!</h2>
		<?php } ?>
	</div><!--container-->

</body>
</html>