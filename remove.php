<?php

$hostname = "localhost";
$username = "nbm5";
$password = "qwerty";
$db = "libproject";

//$book_title=$_POST['book_title'];
//$description=$_POST['description'];
$ISBN=$_POST['ISBN'];




$dbconnect=mysqli_connect($hostname,$username,$password,$db) or die ("oops!!");

if($dbconnect)
{
echo "";
}


$sql = "Delete from BOOKS where ISBN='$ISBN'";

if ($dbconnect->query($sql)) {
    echo " book deleted";
} else {
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

//mysql_close($dbconnect);
?>

