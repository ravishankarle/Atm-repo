<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Thank You</title>

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
    padding:30px;
    color:white;
    text-align:center;
    position:relative;
}

/* SBI LOGO */
.sbi-logo{
    font-size:38px;
    font-weight:700;
    margin-top:20px;
}

/* MESSAGE BAR */
.msg-bar{
    background:#bfe3f7;
    color:#003366;
    padding:18px;
    border-radius:10px;
    font-size:22px;
    font-weight:600;
    margin:50px auto;
    width:90%;
}

/* SUB TEXT */
.sub-text{
    font-size:18px;
    opacity:0.9;
}

/* FOOTER */
.footer{
    position:absolute;
    bottom:20px;
    width:100%;
    text-align:center;
    font-size:14px;
    opacity:0.7;
}
</style>

<script>
/* Auto restart ATM */
setTimeout(function(){
    window.location.href = "index.php";
}, 5000); // 5 seconds
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
        Thank You for Using SBI ATM
    </div>

    <p class="sub-text">
        Please take your card.<br>
        Have a nice day!
    </p>

    <!-- FOOTER -->
    <div class="footer">
        © State Bank of India | Safe • Secure • Trusted
    </div>

</div>
</div>
</div>

</body>
</html>
