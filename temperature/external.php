<?php
//use this when data is sent as string variable
/* echo "<p>Great,". $_GET['user']. " It's good to know you have learnt programming before</p>";
echo "Your password is ". $_GET['password']; */
/*
echo "<pre>";
print_r($_POST); 
echo "</pre>";
**/

echo "<p>Great,". $_POST['user']. " Enter value</p>";

$name = $_POST['select'];

if ($name == 'yes') {
	echo "<div class='form-group'>
<label>Fahrenit value</label>
<input type='number' name='far' id='far'>
</div>";

}else{
	echo "<div class='form-group'>
<label>Celsuis value</label>
<input type='number' name='cel' id='cel'>
</div><div id='qw'></div>";
}


?>
<script type="text/javascript">
	var a= document.getElementById('cel').value;
	alert(a);
</script>