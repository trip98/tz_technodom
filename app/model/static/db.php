<?php 
namespace app;

trait DB {
	public function getLink() {
		$link = new \PDO('mysql:host=localhost;dbname=tz_thechnodom','root','');
        $link->exec("set names utf8");
        return $link;
	}
}


 ?>