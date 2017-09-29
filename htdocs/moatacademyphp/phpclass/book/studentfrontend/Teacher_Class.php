<?php
/**

php inheritance demonsration
*  
*/
require("Student_class.php");
class Teacher_class extends Student_class
{

	public function get_RandomPin(){
		$pin = parent::get_RandomPin();
		return $pin."asdef";
	}
	
}

$tea = new Teacher_class();
$te2 = new Student_class();

$courses = $tea->returnCourses();

$pin1 = $tea->get_RandomPin();

$pin = $te2->get_RandomPin();

echo "<br>".$pin1."<br>";

echo "<br>".$pin."<br>";

print_r($courses);

?>