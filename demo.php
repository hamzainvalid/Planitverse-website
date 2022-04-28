<?php



$fName = $_POST['fName'];
$lName = $_POST['lName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$street = $_POST['street'];
$post_code = $_POST['post'];
$city = $_POST['city'];
$country = $_POST['country'];



$servername = "sql113.ezyro.com";
$username = "ezyro_30496506";
$pass = "tzyzsshbn";
$dbname = "ezyro_30496506_Plantiverse";

$conn = mysqli_connect($servername, $username, $pass, $dbname);

if($conn){
    $stmt = $conn->prepare("insert into customer(fName, lName, phone, email, address, street, post_code, city, country) values(?,?,?,?,?,?,?,?,?)");
    $stmt-> bind_param("ssissssss",$fName, $lName, $phone, $email, $address, $street, $post_code, $city, $country);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header('Location: payment.php', "_self");
}
else{
    echo"<h1>Not connected</h1>";
}
?>