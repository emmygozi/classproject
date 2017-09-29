<?php
class Counter {
	 var $count ;
	 static  $counter = 0;


	function getCounter(){
		$a = $this->count;
		return ++$a;
	}

	static function getStatic(){
		return self::$counter;
		
	}
}


?>