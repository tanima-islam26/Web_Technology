<?php 
  session_start();
  

    if(isset($_SESSION['sname']))

    {

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
table, th, td {
  border:1px solid black;
}
td {
  height: 500px;
}
tr {
  height: 100px;
}
</style>
<body>

<table style="width:100%">
  <tr>
    <th><?php include '../controller/headerone.php' ?></th>
  </tr>
</table>
<table style="width:100%">
  <tr><td>
  	<fieldset>
  		<h1>Account</h1>
  	</fieldset>
  	<fieldset>
  		<a href="dash.php/">Dashboard</a><br><br>
  		<a href="seeprofile.php/">View Profile</a><br><br>
  		<a href="logout.php/">Logout</a><br><br>
      <a href="addProduct.php">Buying Agent Task, add</a><br><br>
      <a href="addCustomer.php">Buying Agent Task</a>

  	</fieldset>
    </td>
    <td>
    	<fieldset>
    		<legend>Logged In</legend>
    	   <h1>Welcome...<?php echo $_SESSION["sname"]; ?></h1>
    	</fieldset>
    </td>
  </tr>
</table>
<table style="width:100%">
  <tr>
    <th><?php include '../controller/allfooter.php' ?></th>
  </tr>
</table>


</body>
</html>

<?php

    }

    else{

        echo "Please do Registration before login in";
	}

?>