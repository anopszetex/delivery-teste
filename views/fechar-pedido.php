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
		<?php if($carrinho = deliveryModel::getItemsCart()) { ?>
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

		<div class="pedido">
			<p>O total do seu pedido foi: <b>R$<?= number_format(deliveryModel::getTotalPedido(), 2, ',', '.'); ?></b></p>
			<form method="post">
				<p>Escolha seu método de pagamento: </p>
				<select name="opcao_pagamento">
					<option value="cartao_credito">Cartão de Crédito</option>
					<option value="cartao_debito">Cartão de Debito</option>
					<option value="dinheiro">Dinheiro</option>
				</select>

				<div style="display: none;" class="troco">
					<p>Troco pra quanto?</p>
					<input type="text" name="troco"><br />
				</div><!--troco-->
				<input type="submit" name="acao" value="Finalizar pedido">
			</form>
		</div><!--pedido-->

		<?php } else { ?>
			<h2 style="text-align: center; margin: 10px 0;">Seu carrinho está vazio!</h2>
		<?php } ?>
	</div><!--container-->

<script src="<?= INCLUDE_PATH ?>views/js/jquery.js"></script>
<script src="<?= INCLUDE_PATH ?>views/js/script.js"></script>
</body>
</html>