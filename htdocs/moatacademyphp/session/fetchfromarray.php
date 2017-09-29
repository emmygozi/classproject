<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'party');

$res = mysqli_query($conn, "select * from registration");
$total_registration = mysqli_num_rows($res);
echo ($total_registration);

echo "<pre>";
echo ($total_registration);
echo "</pre>";


echo "<table border='1' width='100%'>";
echo "<thead><tr><td>Firstname</td><td>Lastname</td><td>Reg Date</td> <td>Passport Name</td> </tr></thead>";
echo "<tbody>";
while ($data = mysqli_fetch_assoc($res)) {
$id = $data['id']; //for product details page
$link = "details.php?id=$id"; //for product details page ....use $_GET in array
echo "<tr><td>"."<a href=\"$link\">".$data['first_name']."</a></td>";
echo "<td>".$data['last_name']."</td>";
echo "<td>".$data['reg_date']."</td></tr>";
//echo "<td><img src='../uploads/".$data['passport_name']. " '> </td></tr>";
}
echo "</tbody>";
echo "</table>";


 ?>
