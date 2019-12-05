<?php 
namespace app;

class Products {
	use Product;
	use Validation;

	public function get() {
		$products = self::get_all();
		echo json_encode($products);
	}
	public function insert($request) {
		$product = $request['POST'];
		if(!self::price($product['price'])) echo false;
		if(!self::characters($product['characters'], $product['type'])) echo false;
		$result = self::add($product);
		echo json_encode($result);
	}
	public function destroy($request) {
		$products = $request['POST']['products'];
		$result = self::delete($products);
		echo json_encode($result);
	}
}

 ?>