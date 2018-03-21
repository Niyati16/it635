<?php
session_start(); 
//connect to the db 

	$ISBN = $_POST['ISBN'];
	$book_title = $_POST['book_title'];
	$read_id = $_POST['read_id'];
	$link = mysqli_connect('localhost','nbm5','qwerty') or die( "Unable to connect");
	mysqli_select_db($link, 'libproject') or die( "Unable to select database");
		
	$sql_query = "Select ISBN, book_title, read_id from BOOKS Where ISBN='$ISBN'  AND  status ='available'";
	//Run our sql query
    $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
	if(!$result )
	{
		echo 'The query  failed.';
		exit();
	}
	 else {
		$sql_query = "UPDATE BOOKS SET  status='reserved', read_id='$read_id', issue_date=null, return_date=null where ISBN='$ISBN' AND book_title='$book_title'";
		//Run our sql query
		$result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
		 echo 'book is reserved';
		 }
		 ?>
