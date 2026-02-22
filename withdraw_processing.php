<?php
session_start();

if(isset($_POST['amount'])){
    $_SESSION['withdraw_amount'] = $_POST['amount'];
}

// animation + auto redirect
header("refresh:4;url=cash_collect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Processing</title>

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
    position:relative;
}

/* SBI LOGO */
.sbi-logo{
    font-size:36px;
    font-weight:700;
    margin-top:10px;
}

/* MESSAGE BAR */
.msg-bar{
    background:#bfe3f7;
    color:#003366;
    padding:18px;
    border-radius:8px;
    font-size:22px;
    font-weight:600;
    margin:40px auto 20px;
    width:90%;
}

/* SPINNER */
.spinner{
    width:70px;
    height:70px;
    border:6px solid #9cccf0;
    border-top:6px solid #ffffff;
    border-radius:50%;
    margin:30px auto;
    animation: spin 1s linear infinite;
}

@keyframes spin{
    0%{ transform:rotate(0deg); }
    100%{ transform:rotate(360deg); }
}

/* DOTS */
.loading-dots{
    font-size:30px;
    letter-spacing:6px;
    margin-top:15px;
}
.loading-dots span{
    animation: blink 1.4s infinite both;
}
.loading-dots span:nth-child(2){ animation-delay:0.2s; }
.loading-dots span:nth-child(3){ animation-delay:0.4s; }

@keyframes blink{
    0%{ opacity:0.2; }
    20%{ opacity:1; }
    100%{ opacity:0.2; }
}
</style>

<script>
/* Auto redirect after processing */
setTimeout(function(){
    window.location.href = "cash_collect.php";
}, 4500); // 4.5 seconds
</script>

</head>

<body>

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-10 atm-screen">

    <!-- SBI LOGO -->
    <div class="sbi-logo">🔵 SBI</div>

    <!-- MESSAGE -->
    <div class="msg-bar">
        Your transaction is being processed.<br>
        Please wait…
    </div>

    <!-- ANIMATION -->
    <div class="spinner"></div>

    <div class="loading-dots">
        <span>●</span>
        <span>●</span>
        <span>●</span>
    </div>

</div>
</div>
</div>

</body>
</html>
