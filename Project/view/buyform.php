<?php  

include '../controller/bdatacontroller.php';
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      
           if(file_exists('../controller/bdata.json'))  
           {  
                $extra = array(  
                     'product'               =>     $_POST['product'],  
                     'quantity'          =>     $_POST["quantity"]  
                     
                ); 
                addData($extra);
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>.</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Buying Form</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Product name</label>  
                     <input type="text" name="product" class="form-control" /><br />  
                     <label>Quantity</label>
                     <input type="number" name = "quantity" class="form-control" /><br />
                    

                    
                    </fieldset> 
                     
                     <input type="submit" name="submit" value="Add to list" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  