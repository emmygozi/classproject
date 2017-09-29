<html>
<head>
<title>Session Choice</title>
<link href="../../../boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>

</head>
<body>

<!-- Note: when calling method with parameters in html, simply call functionName(x,y,..)
where 'x' and 'y' is the representation of parameter values -->
<div class="container-fluid">


<?php
require("Student_Class.php");

$result = $obj->checkresult();



echo "<pre>";
print_r($result);
echo "</pre>";

	




 ?>

 <?php
			
			echo "<table border='1' width='80%' class='table table-striped table-hover'>";
			echo "<thead>
				<tr>
				
					<th>S/N</th>
					<th>reg_id</th>
					<th>reg_session</th>
					<th>reg_matric</th>
					<th>reg_courseid</th>
					<th>result</th>
					
				</tr>
			
			 </thead>";
			
			
			$serial = 1;
			
			foreach($result as $key=>$value){
				$reg_id = $value[0];
				$reg_session = $value[1];
				$reg_matric = $value[2];
				$reg_courseid= $value[3];
				$result= $value[4];
				
				
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
					<td>$serial</td>
					<td>$reg_id</td>
					<td>$reg_session</td>
					<td>$reg_matric</td>
					<td>$reg_courseid</td>
					<td>$result</td>
					
				
				 </tr>"; // $course_id is in a foreach loop and increases.
				$serial++;
				
				
						
				}
				
				echo "</table>"
			
			
			
			
			
			
			
			
			?>
			



<script src="../boots/js/jquery-3.2.1.min.js"></script>
<script src="../boots/js/bootstrap.min.js"></script>
</body>
</html>
