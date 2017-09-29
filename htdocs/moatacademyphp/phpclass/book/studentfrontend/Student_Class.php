<?php
class Student_class{
var $matric ;
var $name;
var $gender;
var $level;
var $password;

protected $conn;
var $error = array();

function __construct(){
	//echo "I am a constructot, I will always be executed";
	session_start();
	$this->conn = mysqli_connect('localhost','root', 'root', 'student');
	if (!$this->conn) {
		$this->error = "Error Connecting to Db";
	}

}

public function login($matric, $passwrd){
 	$res = mysqli_query($this->conn, "SELECT user_id FROM user WHERE user_matric = '$matric' AND user_password = '$passwrd' ");
 	$no = mysqli_num_rows($res);
 	if($no > 0){
 		$_SESSION['theuser'] =$matric;
 		header("location:studentprofile.php");
 	}else{
 		header("location:login.php");
 	}
}

public function checkresult(){

	$res = mysqli_query($this->conn,"SELECT * FROM course_reg") or die (mysqli_error());
			$tosent = array();
			while ($row = mysqli_fetch_array($res)){
				$tosent[] = $row;
			}
			
			return $tosent;
}
	
	

public function register($matr, $passd){
	
}

public function setter_matric($thematric){
	$this->matric = $thematric;
}

public function getter_matric(){
	return $this->matric ;
}

public function get_RandomPin(){
	$pin = rand(12345, 44444);
	return $pin;
}


public function returnCourses(){

	$res = mysqli_query($this->conn,"SELECT * FROM courses") or die (mysqli_error());
			$tosent = array();
			while ($row = mysqli_fetch_array($res)){
				$tosent[] = $row;
			}
			
			return $tosent;
}
	
	public function getSession(){

	$res = mysqli_query($this->conn,"SELECT * FROM acad_session") or die (mysqli_error());
			$tosent = array();
			while ($row = mysqli_fetch_array($res)){
				$tosent[] = $row;
			}
			
			return $tosent;
}

public function registerCourses($postValue){

	$course_id = $postValue['qwerty'];
	$year = $postValue['session'];
	$matric = $_SESSION['theuser'];
	foreach ($course_id as $value) {
		
		$res = mysqli_query($this->conn,"INSERT INTO course_reg SET reg_session = '$year',
		 reg_matric = '$matric', reg_courseid = '$value' ") or die (mysqli_error());

	}
}

	

}



$obj = new Student_class();
echo $obj->getter_matric();

?>