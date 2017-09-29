<html>
<head>
<title></title>
</head>
<body>

<h1>Welcome to increment page! </h1>
<p>Number of visits:</p>
  <?php




if (isset($_COOKIE['num'])) { // if $_COOKIE['num'] returns true,

$count = $_COOKIE["num"];
++$count;                                  // increment count based on number of visit per page.
setcookie("num" , $count, time()+(1000*60*60));
echo $count;

}else {


setcookie("num" , 0, time()+(1000*60*60));


}


   ?>

</body>
</html>
