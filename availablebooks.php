
<html>
<body >
<center><h2>Available Books</h2></center>
<br>


<?php
$conn=mysqli_connect("localhost","nbm5","qwerty","libproject");
$show= $_REQUEST["search"];

$query =" SELECT BOOKS.ISBN, BOOKS.book_title, BOOKS.description, BOOKS.author, BOOKS.status FROM BOOKS  WHERE BOOKS.status='available'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{

?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> ISBN </th>
<th> Book_Title </th>
<th> Description </th>
<th> Author </th>
<th>status </th>


</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["book_title"];?> </td>
<td><?php echo $row["description"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["status"];?> </td>




</tr>
<?php
}
}

else
echo "<center>No books are available $show </center>" ;
?>
</table>
</body>
</html>
<br>

<form action="remove.php" method="post">
<div class="form-group">
        <label for="ISBN">Enter ISBN</label>
        <input type="text" class="form-control" name="ISBN"required>
      </div>
          <input type="submit" value="delete"/>
</form>

