<?php 
namespace app;

trait Product {
	use DB;

	public function get_all() {
		$db = DB::getLink();
		$query = $db->query('SELECT * FROM products ORDER BY id DESC');
		$buffer = $query->fetchAll(\PDO::FETCH_ASSOC);
		return $buffer;
	}

	public function add($product) {
		$db = DB::getLink();
		$query = $db->prepare('INSERT INTO products SET SPU = :SPU, name = :name, price = :price, type = :type, characters = :characters');
		$buffer = $query->execute($product);
		return !!$buffer;
	}
	public function delete($products) {
		$db = DB::getLink();
		$query = $db->query("DELETE FROM products WHERE id IN ($products)");
		return !!$query;
	}
}

 ?>