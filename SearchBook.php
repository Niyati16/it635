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
    <h3 class="text-center">Search the book with book_title </h3>

<form action="" method="post">
     <div class="form-group">
        <label for="book_title">Book Title:</label>
        <input type="text" class="form-control" placeholder="Enter Book Title" name="book_title" required>
      
        <input type="submit" name="submit1" value="Search" class="btn btn-default">
</div>
</div>
</form>





<?php

session_start();
?>


<?php
$conn=mysqli_connect("localhost","nbm5","qwerty","libproject");
$book_title=$_POST["book_title"];


$sql=mysqli_query($conn, "SELECT BOOKS.ISBN, BOOKS.book_title, BOOKS.description, BOOKS.author, BOOKS.status FROM BOOKS where book_title='$book_title'");
if(isset($_POST["submit1"]))
{


 echo "<table class='table table-bordered' >";

 echo "<tr>";
  echo "<th> ISBN </th>";
  echo "<th>Book_title</th>";
  echo "<th>Description</th>";
 echo "<th>Author</th>";
 echo "<th>Status</th>";
  echo "</tr>";

while($row = mysqli_fetch_array($sql))
{
echo "<tr>";
echo "<td>";
echo $row["ISBN"];
echo "</td>";
echo "<td>";
echo $row["book_title"];
echo "</td>";
echo "<td>";
echo $row["description"];
echo "</td>";
echo "<td>";
echo $row["author"];
echo "</td>";
echo "<td>";
echo $row["status"];
echo "</td>";





echo "</tr>";

}}
else {


echo "<table class='table table-bordered' >";

echo "<tr>";
echo "<th> ISBN </th>";
echo "<th> Book_Title </th>";
echo "<th> Description </th>";
echo "<th> Author </th>";
echo "<th>status </th>";


echo "</tr>";

while($row = mysqli_fetch_array($sql))
{
echo "<tr>";
echo "<td>";
echo $row["ISBN"];
echo "</td>";
echo "<td>";
echo $row["book_title"];
echo "</td>";
echo "<td>";
echo $row["description"];
echo "</td>";
echo "<td>";
echo $row["author"];
echo "</td>";
echo "<td>";
echo $row["status"];
echo "</td>";





echo "</tr>";
}
}

?>


<form action="UserSummary.php" method="post">
<input type="submit" value="Back"/>
</form>

<form action="login.php" method="post">
<input type="submit" value="Close"/>
</form>

</body>
</html>
