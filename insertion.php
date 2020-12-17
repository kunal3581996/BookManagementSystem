<?php
  $title=$_POST['title'];
  $price=$_POST['price'];
  $author=$_POST['author'];

  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'BRM_DB');

  $q="INSERT INTO book (title,price,author) values('$title', $price ,'$author')";
  $status=mysqli_query($con,$q);
  mysqli_close($con);
?>
<html>
 <head>
      <title>Insertion</title>
 </head>  
    <?php require_once 'home.php'; ?>
         
  </body>
 </html>