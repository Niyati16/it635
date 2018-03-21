

<?php
include 'db.php'; 
?>  
<?php
//always start the session before anything else!!!!!! 
session_start(); 
//connect to the db 
$username = $_SESSION['username'];
unset($_SESSION['isbn']);
unset($_SESSION['copyid']);	
?> 
<html>
<body>
<h1>Welcome Reader</h1>

<form action="SearchBook.php" method="post">
<input type="submit" value="Search Books Here"/>
</form>

<form action="viewbook.php" method="post">
<input type="submit" value="View Book Information"/>
</form>

<form action="reservebook.php" method="post">
<input type="submit" value="Reserve Books Here"/>
</form>

<form action="login.php" method="post">
<input type="submit" value="Logout"/>
</form>

</body>
</html>
