<?php session_start();

include_once(‘connection.inc.php’);

$name=mysqli_real_escape_string($con, $_POST[‘uname1’]);

$nameclean = filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$pass=mysqli_real_escape_string($con, $_POST[‘pass1′]);

$result = $con->query("SELECT * FROM users WHERE username=’$nameclean’ ") ;

$total=$result->num_rows;

if($total<1){

echo ‘That user is not in our system’;

}else{

while ($row = $result->fetch_assoc()) {

echo ‘Yes we have a match and the email is ‘.$row[’email’];

if(password_verify($pass, $row[‘password’])){

$_SESSION[‘id’]=$row[‘id’];

echo ‘<br/>The Session ID is ‘.$_SESSION[‘id’];

}else{

echo ‘Wrong Password’;

}

}

}

$con->close();

?>