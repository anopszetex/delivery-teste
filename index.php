<?php
	session_start();  
	require('controllers/deliveryController.php');
	require('models/deliveryModel.php');

	define('INCLUDE_PATH', 'http://localhost:8080/projeto-delivery/');

	$deliveryController = new deliveryController();

	$deliveryController->index();

?>