<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
        <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Product name</th> 
                               <th>Quantity</th>  
                               
                          </tr>  
                          <?php   
                          include '../controller/bdatacontroller.php' ;

                          $data = loadData();

                          foreach($data as $row)  
                          {  
                              ?>
                               <tr>
                               <td><a href="bdetails.php?product=<?php echo $row['product'] ?>"><?php echo $row['product'] ?></a></td>
                               <td><?php echo $row['quantity'] ?></td>
                               
                               </tr>
                               <?php 
                          }  
                          ?>  
                     </table> 
                     <a href="dsboard.php" class="btn btn-primary">OK</a> 
                   </div>
                 </div>
      </body>  
 </html>  
 