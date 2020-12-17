<?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  

  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'BRM_DB');

  $q="INSERT INTO user (username,password) values('$username', '$password')";
  $status=mysqli_query($con,$q);
  mysqli_close($con);
?>
<html>
 <head>
      <title>Insertion</title>
 </head>

  <body>
   <h1>Book Record Management</h1>
    <p>
     <?php
       if($status==1)
         echo "Record inserted";  
       else
         echo "Insertion Failed";
     ?>
    </p>
         already ragister
     <a href="login.php">Click Here</a>
  </body>
 </html>