<?php
session_start();
if(!isset($_SESSION['sms_alert'])){
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>ATM - OTP Verification</title>
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
.otp-input{
    width:200px;
    height:45px;
    font-size:22px;
    text-align:center;
    border-radius:6px;
    border:none;
}
.atm-btn{
    background:#5bb3e6;
    color:#003366;
    padding:12px 26px;
    border-radius:25px;
    font-size:16px;
    font-weight:600;
    border:none;
    margin-top:20px;
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-10 atm-screen">

    <div class="title-bar">
        Enter OTP Sent to Your Mobile
    </div>

    <!-- SMS SIMULATION -->
    <p class="text-warning fw-bold">
        (SMS ALERT): <?php echo $_SESSION['sms_alert']; ?>
    </p>

    <form method="POST" action="otp_verify_process.php">
        <input type="number" name="otp" class="otp-input" required>
        <br>
        <button class="atm-btn">🌐 VERIFY OTP</button>
    </form>

</div>
</div>
</div>

</body>
</html>
