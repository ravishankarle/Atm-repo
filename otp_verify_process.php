<?php
session_start();
require "db/config.php";

$card = $_SESSION['card_no'];
$userOtp = $_POST['otp'];

// fetch OTP
$res = mysqli_query($conn,"
    SELECT otp, otp_time FROM users WHERE card_no='$card'
");
$row = mysqli_fetch_assoc($res);

// expiry check (2 minutes)
$otpTime = strtotime($row['otp_time']);
$current = time();

if(($current - $otpTime) > 120){
    echo "<script>alert('OTP Expired');location.href='dashboard.php';</script>";
    exit;
}

if($row['otp'] == $userOtp){
    // OTP correct → register mobile banking
    mysqli_query($conn,"
        UPDATE users 
        SET mobile_registered='YES', otp=NULL
        WHERE card_no='$card'
    ");

    // SMS CONFIRMATION
    $_SESSION['sms_alert'] = "Mobile Banking Activated Successfully.";

    echo "<script>alert('OTP Verified. Mobile Banking Activated');location.href='dashboard.php';</script>";
}else{
    echo "<script>alert('Invalid OTP');location.href='otp_verify.php';</script>";
}
