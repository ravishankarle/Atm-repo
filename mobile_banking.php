<?php
session_start();
require "db/config.php";

if(!isset($_SESSION['card_no'])){
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Mobile Banking Registration</title>

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
    margin:25px auto;
    width:90%;
}
.input-box{
    width:260px;
    height:45px;
    font-size:20px;
    text-align:center;
    border-radius:6px;
    border:none;
    margin:20px auto;
    display:block;
}
.atm-btn{
    background:#5bb3e6;
    color:#003366;
    padding:12px 26px;
    border-radius:25px;
    font-size:16px;
    font-weight:600;
    border:none;
    margin:10px;
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

    <div class="sbi-logo">🔵 SBI</div>

    <div class="title-bar">
        Mobile Banking Registration
    </div>

    <form method="POST" action="mobile_banking_process.php">
        <input type="text" name="mobile" class="input-box" 
               placeholder="Enter Mobile Number" maxlength="10" required>

        <button class="atm-btn" type="submit">🌐 REGISTER</button>
        <button class="atm-btn" type="button"
                onclick="window.location.href='dashboard.php'">
            🌐 CANCEL
        </button>
    </form>

</div>
</div>
</div>

</body>
</html>
