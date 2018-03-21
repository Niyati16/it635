<?php

session_start(); 
?>
<!DOCTYPE html>
<html>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   </head>
<body>
  <div class="container">
    <h3 class="text-center">Please Enter the Book Details you wish to Add/Remove</h3>

<?php 
$conn=mysqli_connect("localhost","nbm5","qwerty","libproject");
$sql="SELECT * FROM BOOKS";
?>
<form action="AddBooks.php" method="post">
     <div class="form-group">
        <label for="book_title">Book Title:</label>
        <input type="text" class="form-control" name="book_title" required>
      </div>
     <div class="form-group">
        <label for="description">Book Description:</label>
        <input type="text" class="form-control" name="description"required>
      </div>
	<div class="form-group">
        <label for="author">Book Author:</label>
        <input type="text" class="form-control" name="author" required>
      </div>
	<input type="submit" value='Add' </input>
</div>
<div>
</form>
      
</div>
</form>



<div align="center">
<a  href="logout.php" style="width: 0%;">LOGOUT</a>
</div>
</body>
</html>
