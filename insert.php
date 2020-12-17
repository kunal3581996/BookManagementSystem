<?php 
session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/BRM/login.php')
?>
<html>
    <head>
        <title>Insertion Form</title>
        <link rel="stylesheet" href="image.css">
        <?php require_once 'nav.php'; ?>        

    </head>
    <body>
    <div align="center" class="jumbotron"  >
    <h1>Book Record Management</h1>
    <form action="insertion.php" method="post">
        <table>
        <tr>
        <th>Title</th>
        <td><input type="text" name="title" required/></td>
        </tr>
        <tr>
        <th>Price</th>
        <td><input type="text" name="price" required/></td>
        </tr>
        <tr>
        <th>Author</th>
        <td><input type="text" name="author"/></td>
        </tr>
        <tr>
        <th></th>
        <td><input type="submit" value="Insert"/></td>
        </tr>
        </table>
        </form>
        </div>
    </body>
</html>