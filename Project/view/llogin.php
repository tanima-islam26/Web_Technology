<?php 
session_start();
?>
<?php



$cookie_name="loginCheck"; 
$cookie_value="1";   
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if (!isset($_COOKIE['count'])) { 
  echo "Welcome! This is the first time you have viewed this page today."; 
  $cookie = 1;
  setcookie("count", $cookie);
}
else
{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "You have viewed this page today ".$_COOKIE['count']." times.";
};



$aq=$sw=$de="";
$inputmismatch="";
$a=-1;
$message="";
$error="";
$oerror = "";
$nerror = "";
$cerror = "";
if($_SERVER["REQUEST_METHOD"]=="POST")  {  
          if(empty($_POST["uuname"]))  
           {  
                $oerror = "Enter user name"; 
           }
 
      if(empty($_POST["nnewpass"]))  
      {  
           $nerror = "Enter password"; 
      }
      if(empty($oerror) && empty($nerror)){
               if(file_exists('../controller/data.json')){
				  


                   $data = file_get_contents("../controller/data.json");  
                   $data = json_decode($data, true);
                   $flag=false;
                   foreach((array)$data as $row){  
                   if(($row["username"]==$_POST["uuname"]) && ($row["passcode"]==$_POST["nnewpass"])) { 
                        $_SESSION["sname"]=$row["name"]; 
                        $_SESSION["semail"]=$row["e-mail"];
                        $_SESSION["sgender"]=$row["gender"];
                        $flag=true;   
                        break;
                     }
                    }
               if($flag==true){
                    header('location:dsboard.php');
               }
          }  
           else  
           {  
                $error = 'File not exits';  
           }
      }
  }
 
?>
 
<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
.grn {color: #00FF00;}
.blu {color: #0000FF;}
</style>
</head>
<body>
     <fieldset>
     <?php
     include '../controller/headerone.php';
     ?>
</fieldset>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
     <fieldset>
          <legend>Login</legend>
          User name : <input type='text' name='uuname' id="name" value="" onkeyup="myFunction()"><span class="error">*<?php echo $oerror ?></span><br><br>
 
          Password: <input type='password' name='nnewpass' id="pass"  value="" onkeyup="myFunction()"><span class="error">*<?php echo $nerror ?></span><br><br>
 
          <input type="checkbox" name="reme" value="me" id="mme">
               <label for="mme">Remember me</label><br>
     </fieldset>
     <br><button id="btn" name="submit" value="Submit" disabled >Submit</button><br><br><a href="fpass.php">Forget password</a>
</form>
<script>
function myFunction() {
  var x = document.getElementById("name").value;
  var y = document.getElementById("pass").value;
  
  if(x=="" || y==""){
  	document.getElementById("btn").disabled = true;
  }
  else{
 	document.getElementById("btn").disabled = false;
  }
  
}
</script>

</body>
</html>
