<?php  
	if(!isset($_SESSION['carrinho']) && !isset($_SESSION['tipo_pagamento']) && !isset($_SESSION['total']))
		deliveryModel::redirect(INCLUDE_PATH);
?>
<h2>Pedido em andamento: </h2>

<p>Tipo de pagamento: <?= $_SESSION['tipo_pagamento']; ?></p>
<hr>
<p>Total: R$<?= $_SESSION['total']; ?></p>

<?php  
	if($_SESSION['tipo_pagamento'] == 'dinheiro') {
		echo '<hr>';
		echo '<p>Troco: '.$_SESSION['troco'].'</p>';
	}
?>

<h2>Items do seu pedido</h2>
<div class="container">
	<table style="width: 100%;">
		<tr>
			<td>Nome</td>
			<td>Preço</td>
		</tr>

		<?php
			$carrinho = deliveryModel::getItemsCart();
			foreach($carrinho as $key => $value):
			$item     = deliveryModel::getItem($value);
		?>
			<tr>
				<td><?= $item[2];  ?></td>
				<td>R$<?= number_format($item[1], 2, ',', '.'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
<br />
<a href="<?= INCLUDE_PATH ?>historico?resetar">Pedido entregue!</a>

<?php  
	if(isset($_GET['resetar'])) {
		session_unset();
		session_destroy();
		header('Location: '.INCLUDE_PATH);
		die();
	}

?>