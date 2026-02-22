<?php
session_start();
$conn = mysqli_connect("localhost","root","","atm");

$card = $_POST['card_no'];
$pin  = $_POST['pin'];

$q = "SELECT * FROM users WHERE card_no='$card' AND pin='$pin'";
$res = mysqli_query($conn,$q);

if(mysqli_num_rows($res)==1){
    $_SESSION['user'] = $card;
    header("location: dashboard.php");
}else{
    echo "Invalid Card or PIN";
}
?>
