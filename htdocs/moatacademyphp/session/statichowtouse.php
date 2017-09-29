<?php
/**
* 
*/
class ShowStatic 
{
	
	static $counter = 0;

	public function checkResult(){
		if (self::$counter < 5) {
			echo $this->computeResult()."<br>";
			self::$counter++;
			echo self::$counter;
		}else{
			echo "You need to buy another.";
		}
	}

	private function computeResult(){
		return 50;
	}
}
$obj = new ShowStatic();

$obj->checkResult();

?>