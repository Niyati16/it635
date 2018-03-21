
<!DOCTYPE HTML>
<html>
<body >
<center><h2>Issued Books</h2></center>
<br>


<?php
$conn=mysqli_connect("localhost","nbm5","qwerty","libproject");
$show= $_REQUEST["search"];

$query =" SELECT BOOKS.ISBN, BOOKS.book_title, BOOKS.description, BOOKS.author, BOOKS.issue_date, BOOKS.return_date, BOOKS.status, BOOKS.read_id, READER.reader_name FROM BOOKS NATURAL JOIN READER WHERE BOOKS.status='issued'";
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
<th>issue_date </th>
<th>return_date </th>
<th>status </th>
<th> read_id</th>
<th>reader_name </th>

</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["book_title"];?> </td>
<td><?php echo $row["description"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["issue_date"];?> </td>
<td><?php echo $row["return_date"];?> </td>
<td><?php echo $row["status"];?> </td>
<td><?php echo $row["read_id"];?> </td>
<td><?php echo $row["reader_name"];?> </td>




</tr>
<?php
}
}

else
echo "<center>No books are issued $show </center>" ;
?>
</table>
</body>
</html>
<br>



                                                                                
