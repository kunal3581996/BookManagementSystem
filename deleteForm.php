<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="Select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/BRM/login.php')

?>

<html>
    <head>
    
        <title>Delete Book Records</title>
        <link rel="stylesheet" href="viewStyle.css" />
        <link rel="stylesheet" href="image.css">
        <?php require_once 'nav.php'; ?>
    </head>
    <body>
    <div align="center" class="jumbotron"  >
    <h1>Book Record Management</h1>
    <form action="deletion.php" method="post">
    <table id="view_table">
        <tr>
        <th>Book ID</th>
        <th>Title</th>
        <th>Price</th>
        <th>Author</th>
        <th>Select to delete</th>
        </tr>
        <?php
            for($i=1;$i<=$num;$i++)
            {
                $row=mysqli_fetch_array($result);
        ?>
        <tr>
        <td align="center"><?php echo $row['bookid']; ?></td>
        <td align="center"><?php echo $row['title']; ?></td>
        <td align="center"><?php echo $row['price']; ?></td>
        <td align="center"><?php echo $row['author']; ?></td>
        <td><input type="checkbox" value="<?php echo $row['bookid']; ?> " name="b<?php echo $i; ?>" /></td>
        </tr>
        <?php
            }
        ?>   
        <tr>
        <td colspan="5" ><input type="submit" value="Delete"/></td>
        </tr>
         </table>
         </form>
         </div>
    </body>
</html>    