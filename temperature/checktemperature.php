<!DOCTYPE html>
<html>
<head>
  <title>Temperature</title>

<script src="../../boots/js/jquery-3.2.1.min.js"></script>
<script src="../../boots/js/bootstrap.min.js"></script>

</head>
<body>

<form method="post" action="externaltwo.php">
<input type="text" name="user" id="user">

<select id="select" name="select">
  <option value="">Plese select</option>
  <option value="yes" >Fahrenit</option>
  <option value="no">Celsuis</option>
</select>

<div id="hide"></div>
<input type="submit" name="sub">
</form>
<script type="text/javascript">

  $(document).ready(function(){
    

    $('#select').change(function(){
      
      var resp = $("#select").val();
          var data = $("#user").val();
          var selecta = $("#select").val();
          var tobesent ={user:data, select:selecta};

      if (resp == 'yes') {

        $("#hide").load('external.php',tobesent,function(){alert("I have come back");});
      

      }else if (resp == 'no') {
         $("#hide").load('external.php',tobesent,function(){alert("I have come back");}); 
      }
    });

  });
</script>


</body>
</html>