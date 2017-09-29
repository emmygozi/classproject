
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


<form action="#" method="post" id="fomregtwo">
<div class="form-group">


<div id="loader"></div>
<input type="submit" class='btn btn-primary' value="Submit" id="submit" />
</form>
<p>Copyright. Designed by Moat Academy Class</p>

<script type="text/javascript">
$(document).ready(function(){
	
	
	$.("#submit").click(function(){

		$.ajax({

			url:'animated.php';
			

		})

	});
});

</script>


</body>
</html>


