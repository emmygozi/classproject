
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


<form action="#" method="post" id="regform">


<input type="text" name="name">Name<br>
<input type="text" name="email">Email<br>


<div id="loader"></div>
<input type="submit" class='btn btn-primary' value="Submit"  />
</form>
<p>Copyright. Designed by Moat Academy Class</p>

<script type="text/javascript">
$(document).ready(function(){
	
$("#regform").submit(function(event){

	event.preventDefault();
	var datatosend = $("#regform").serialize();
	alert(datatosend);

	$.get('states2.php', datatosend, function(datafetched, status){
		$('#loader').html(datafetched);

	});

	//$.post('state2.php', datatosend, function(datafetched, status){
	//	$('#loader').html(datafetched);

	//});

	

});
	
	
	
});

</script>


</body>
</html>
