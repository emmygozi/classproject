<?php


?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link href="../boots/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="../boots/js/jquery-3.2.1.min.js"></script>
	<script src="../boots/js/bootstrap.min.js"></script>

</head>
<body>


<form action="index.php" method="post" id="changepass">
<div class="form-group">
<label>Are you a Nigerian?</label>
<select name='question' id='question'>
<option value=''>Please Select</option>
<option value='yes'>Yes</option>
<option value='no'>No</option>
</select>
</div>

<div id="loader"></div>
<input type="submit" class='btn btn-primary' value="Submit" disabled="disabled" />
</form>
<p>Copyright. Designed by Moat Academy Class</p>

<script type="text/javascript">
$(document).ready(function(){
	
	
	$("#question").change(function(){
		var nationality =$("#question").val();
		
		if (nationality == 'yes') {
			$("#loader").load('states.php');
		}
		if (nationality != "") {
			$('#submit').prop('disabled', '');
		}
		
	});
})

</script>


</body>
</html>