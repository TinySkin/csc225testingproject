<?php
$firstName = $_POST ['firstName'];
$lastName = $_POST ['lastName'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$number = $_POST ['number'];

// database connect
$conn = new mysqli('localhost','root','','testproject');
if($conn->connect_error){
    die('Connection Failed :' . $conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into mytesting(firstName,lastName,email,password,number)
    values(?,?,?,?,?)");
    $stmt->bind_param("ssssi",$firstName,$lastName,$email,$password,$number);
    $stmt->execute();
    echo"insert successfully";
$stmt->close();
$conn->close();

}
?>