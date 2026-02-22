<?php
session_start();
require "db/config.php";

// security check
if(!isset($_SESSION['card_no'])){
    header("Location: index.php");
    exit;
}

$card = $_SESSION['card_no'];

$res = mysqli_query($conn, "SELECT balance FROM users WHERE card_no='$card'");
$row = mysqli_fetch_assoc($res);

$balance = $row['balance'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Balance Inquiry</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#0a1e5e;
    font-family:"Segoe UI", Arial, sans-serif;
}
.atm-screen{
    background: linear-gradient(#2b3fa8, #1b2f80);
    height:92vh;
    border-radius:12px;
    padding:25px;
    color:white;
    text-align:center;
}
.sbi-logo{
    font-size:36px;
    font-weight:700;
}
.title-bar{
    background:#bfe3f7;
    color:#003366;
    padding:14px;
    border-radius:8px;
    font-size:22px;
    font-weight:600;
    margin:40px auto;
    width:90%;
}
.balance-box{
    font-size:32px;
    font-weight:bold;
    margin:30px 0;
}
.atm-btn{
    background:#5bb3e6;
    color:#003366;
    padding:12px 26px;
    border-radius:25px;
    font-size:16px;
    font-weight:600;
    border:none;
}
.atm-btn:hover{
    background:#4aa3df;
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-10 atm-screen">

    <!-- SBI LOGO -->
    <div class="sbi-logo">🔵 SBI</div>

    <!-- TITLE -->
    <div class="title-bar">
        Your Available Balance is
    </div>

    <!-- BALANCE -->
    <div class="balance-box">
        ₹ <?php echo number_format($balance); ?>
    </div>

    <!-- BACK BUTTON -->
    <button class="atm-btn" onclick="window.location.href='dashboard.php'">
        🌐 BACK
    </button>

</div>
</div>
</div>

</body>
</html>
