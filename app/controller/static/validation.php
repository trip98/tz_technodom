<?php 
namespace app;

trait Validation {
	public function price($text) {
		if(intval($text) === 0) return false;
		return true;
	}
	public function characters($data, $type) {
		if(count($data) === 0) return false;
		if($type == 3) {
			$characters = explode($data, 'x');
			if(count($characters) != 3) return false;
			foreach ($characters as $value) {
			 	if(intval($value) === 0) return false;
			 } 
		}else if(intval($data) === 0) return false;
		return true;
	}
}

 ?>