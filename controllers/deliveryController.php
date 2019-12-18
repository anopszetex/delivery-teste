<?php  

	class deliveryController {

		public function index() {
			$url  = (isset($_GET['url'])) ? $_GET['url'] : 'home';
			$slug = explode('/', $url)[0];

			echo 'slug';
		}

	}



?>