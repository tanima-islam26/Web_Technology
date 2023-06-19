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

  	</fieldset>
    </td>
    <td>
    	<fieldset>
    		<legend>Profile</legend>
    	   <h2>Name          : <?php echo $_SESSION["sname"];?></h2>
    		<h2>Email         :  <?php echo $_SESSION["semail"]?></h2>
    		<h2>Gender        :  <?php echo $_SESSION["sgender"];?></h2>
    		
    		
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
