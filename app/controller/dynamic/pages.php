<?php 
namespace app;

class Pages {
	
	use View;
	use Product;

	public function index() {
		$products = Product::get_all();
		self::render("main","pages", ['data' => $products]);
	}
	public function add() {
		self::render('add', 'pages');
	}
}

 ?>