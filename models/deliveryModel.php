<?php  

	class deliveryModel {

		public static $items = array(array('img1.png', '20.00', "Xis Mega"), array('img2.jpg', '25.00', 'Xis Tudo'), array('img3.jpg', '30.00', 'Xis Completo Turbo'));

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

		public static function getTotalPedido() {
			$total = 0;
			foreach($_SESSION['carrinho'] as $key => $value) {
				$total += self::getItem($value)[1];
			}
			return $total;
		}

		public static function checkInput($var) {
			return htmlspecialchars(trim(stripcslashes($var)));
		}

		public static function redirect($url) {
			echo '<script>location.href="'.$url.'"</script>';
			die();
		}

	}


?>