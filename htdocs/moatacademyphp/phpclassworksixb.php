<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo "<select>";
for ($i=1; $i < 40; $i++) { 
	# code...
	$range = 40;
	echo "<option value=\"$i\">$i - $range</option>";
}
</select>

?>
</body>
</html>