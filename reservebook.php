<html>
<body>
<h1>Which Book would you like to reserve today?</h1>

<form action="rbook.php" method="post">
<table>
<tr>
    <td> READER ID</td>
    <td><input type="number" name="read_id" required/></td>
</tr>
<tr>
    <td>ISBN</td>
    <td><input type="number" name="ISBN" required/></td>
</tr>
<tr>
    <td>Book title</td>
    <td><input type="text" name="book_title" required/></td>
</tr>


</table>

<input type="submit" value="Confirm" action="" method ="post"/>
</form>
<form action="Librarian.php" method="post">
<input type="submit" value="Cancel"/>
</form>
</body>
</html>
