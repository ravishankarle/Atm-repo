<?php
session_start();
require "db/config.php";

$card   = $_SESSION['card_no'];
$mobile = $_POST['mobile'];

// validation
if(strlen($mobile) != 10 || !is_numeric($mobile)){
    echo "<script>alert('Invalid Mobile Number');location.href='mobile_banking.php';</script>";
    exit;
}

// generate OTP
$otp = rand(100000, 999999);
$time = date("Y-m-d H:i:s");

// save OTP
mysqli_query($conn,"
    UPDATE users 
    SET mobile='$mobile', otp='$otp', otp_time='$time'
    WHERE card_no='$card'
");

// store mobile in session
$_SESSION['mobile'] = $mobile;

// ===== SMS ALERT (SIMULATION) =====
$_SESSION['sms_alert'] = "Your OTP for SBI Mobile Banking is $otp";

// redirect to OTP page
header("Location: otp_verify.php");
exit;

// check already registered
$check = mysqli_query($conn,"
    SELECT mobile_registered FROM users WHERE card_no='$card'
");
$row = mysqli_fetch_assoc($check);

if($row['mobile_registered'] == 'YES'){
    echo "<script>alert('Mobile Banking Already Registered');location.href='dashboard.php';</script>";
    exit;
}

// register
mysqli_query($conn,"
    UPDATE users 
    SET mobile='$mobile', mobile_registered='YES'
    WHERE card_no='$card'
");

echo "<script>alert('Mobile Banking Registered Successfully');location.href='dashboard.php';</script>";
