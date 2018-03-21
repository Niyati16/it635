<?php
//always start the session before anything else!!!!!!
session_start();
//connect to the db

$today = date("Y-m-d");
$plus = strtotime("+20 day", time());
$estimate = date('Y-m-d', $plus);

        $ISBN = $_POST['ISBN'];
        $book_title = $_POST['book_title'];
        $read_id = $_POST['read_id'];
        $link = mysqli_connect('localhost','nbm5','qwerty') or die( "Unable to connect");
        mysqli_select_db($link, 'libproject') or die( "Unable to select database");





        $sql_query = "Select ISBN, book_title, read_id from BOOKS Where ISBN='$ISBN' AND book_title='$book_title' AND read_id!='$read_id' ";
        //Run our sql query
    $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));
        if($result == false)
        {
                
               header('Location: failed.php');
                //echo "The query  failed.";
                exit();
        }
         else {
                $sql_query = "UPDATE BOOKS SET status='issued', issue_date='$today', return_date='$estimate', read_id='$read_id' where ISBN='$ISBN' AND book_title='$book_title' ";
                //Run our sql query
                $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));
//               echo 'book is issued';
                 }
                 ?>
                                              
<html>
<body>
<h1>What Book would you like to checkout today?</h1>

<form action="" method="post">
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

<tr>
    <td>Check Out Date</td>
    <td><?php echo $today; ?></td>
</tr>

<tr>
    <td>Estimated Return Date</td>
    <td><?php echo $estimate; ?></td>
</tr>

</table>
<input type="submit" value="Confirm" action="" method ="post"/>
</form>
<form action="Librarian.php" method="post">
<input type="submit" value="Cancel"/>
</form>
</body>
</html>		 
