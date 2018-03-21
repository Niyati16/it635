
<?php
include 'db.php'; 
?>  

<!DOCTYPE html>
<html>
   <!--body background="https://psmag.com/.image/c_limit%2Ccs_srgb%2Cq_80%2Cw_960/MTQ5NjM2MTg5NzU2ODYwMjE4/library.webp-->
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   </head>
<body>
  <div class="container">
    <h3 class="text-center">Please Login to access Library Management System</h3>

<?php
session_start(); 
if(isset($_POST['username']) and isset($_POST['password']))  { //check null
	$username = $_POST['username']; 
	$password = MD5($_POST['password']);
	

$_SESSION['username']=$username;
//connect to the db
$link = mysqli_connect('localhost','nbm5','qwerty') or die( "Unable to connect");
mysqli_select_db($link, 'libproject') or die( "Unable to select database");
         //Librarian Query
           $sql_query = "Select log_name,log_password,type From LOGIN Where log_name = '$username' AND log_password = '$password' and type = 'L' ";  
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
			if($result == false)
				{
				echo 'The query failed.';
				exit();
			}
			if(mysqli_num_rows($result) == 1){ 
				header('Location: Librarian.php');	
          //Reader Query
			}
			
           $sql_query = "Select log_name,log_password,type From LOGIN Where log_name = '$username' AND log_password = '$password' and type = 'R' ";
            //Run our sql query
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
			if($result == false)
				{
				echo 'The query failed.';
				exit();
			}
			if(mysqli_num_rows($result) == 1){ 
				header('Location: UserSummary.php');
			   
			}else{ 
			$err = 'Incorrect username or password' ; 
			} 
			echo "$err";
    } 
    
	
?>	

<form action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
  </div>
</body>
</html>
