<html>
<head>
<title>Register Courses</title>
<link href="../../../boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>

</head>
<body>

<!-- Note: when calling method with parameters in html, simply call functionName(x,y,..)
where 'x' and 'y' is the representation of parameter values -->
<div class="container-fluid">

<h1>Register Courses</h1>

<?php
$title;


require("Student_Class.php");


$result = $obj->returnCourses();


echo "<pre>";
print_r($result);
echo "</pre>";

	




 ?>

	<form action=""  method="post" >
	<div class="row">
	<div class="form-group col-md-4">
	<label> Enter session:</label>
	<select name="session">
	<option  >Select session</option>
		<?php
		$res = $obj->getSession();
		foreach ($res as $key => $value) {
			$sec_id = $value[0];
			$session = $value[1];
			echo "<option>".$session."</option>";
		}
		?>
	</select>
	</div>
	</div>

	
	<table width = 80% border = 2>
					<tr>
						<th>Course_ID</th>
						<th>Course_Name</th>
						<th>Course_Unit</th>
						<th>Course_Description</th>
					</tr>
				<?php 
				
				for ($row=0; $row<count($result); $row++){
					
		?>
				
					
					
		<?php			
				for ($col=0; $col<4; $col++){
		
		
		?>
					<td><?php echo $result[$row][$col]; ?></td>
					
					<?php
						}
				?>
		</tr>
		<?php 
		}
		?>
			</table><br><br>
			
			
			
			<?php
			
			echo "<table border='1' width='80%' class='table table-striped table-hover'>";
			echo "<thead>
				<tr>
				
					<th>course_id</th>
					<th>course_name</th>
					<th>course_unit</th>
					<th>course_desc</th>
					<th>Select Course(s)</th>
					
				</tr>
			
			 </thead>";
			
			
			
			
			foreach($result as $key=>$value){
				$course_id = $value[0];
				$course_name = $value[1];
				$course_unit = $value[2];
				$course_desc= $value[3];
				
				
				/*if($key==0){
				echo "<tr>
				<th>#</th>
				<th>$city</th>
				<th>$country</th>
				<th>$continent</th>
				 </tr>";
				}else{
				*/
				
				
				echo "<tr>
				<td>$course_id</td>
				<td>$course_name</td>
				<td>$course_unit</td>
				<td>$course_desc</td>
				<td>
					<input type='checkbox' name='qwerty[]' value = '$course_id'> 
				</td>
				 </tr>"; // $course_id is in a foreach loop and increases.
				$serial++;
				
				
						
				}
				
				echo "</table>"
			
			
			
			
			
			
			
			
			?>
			
						<button class = "btn btn-success">register</button>
			
			
			
			
			
			
			
			
			
			</div>
	
	
	<?php

	echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if ($_POST) {
	 $obj->registerCourses($_POST);
}


	?>
	
	

</div>




<script src="../boots/js/jquery-3.2.1.min.js"></script>
<script src="../boots/js/bootstrap.min.js"></script>
</body>
</html>
