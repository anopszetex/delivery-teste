<?php  

	class deliveryModel {

		public static $items = array(array('img1.png', '20.00'), array('img2.jpg', '25.00'), array('img3.jpg', '30.00'));

		public static function listarItems() {
			return self::$items;
		}

		public static function addToCart($idProduto) {
			if($idProduto > count(self::$items) - 1)
				return;
			
			if($idProduto < 0)
				return;

			if(!isset($_SESSION['carrinho']))
				$_SESSION['carrinho']   = array();

			if(isset($_SESSION['carrinho']))
				$_SESSION['carrinho'][] = $idProduto;
			
		}

		public static function getItemsCart() {
			return (isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : false);
		}

		public static function getItem($id) {
			return self::$items[$id];
		}

	}


?>