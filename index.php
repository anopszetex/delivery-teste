<?php  
	require('controllers/deliveryController.php');
	require('models/deliveryModel.php');

	$deliveryController = new deliveryController();

	$deliveryController->index();

?>