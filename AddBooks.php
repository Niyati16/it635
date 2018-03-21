<?php

$hostname = "localhost";
$username = "nbm5";
$password = "qwerty";
$db = "libproject";

$book_title=$_POST['book_title'];
$description=$_POST['description'];
$author=$_POST['author'];




$dbconnect=mysqli_connect($hostname,$username,$password,$db) or die ("oops!!");

if($dbconnect)
{
echo "";
}


$sql = "INSERT INTO BOOKS(ISBN,book_title,description,author, status, read_id)
VALUES (0, '$book_title', '$description', '$author', 'available' ,  null )";

if ($dbconnect->query($sql)) {
    echo "New book added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

//mysql_close($dbconnect);
?>
