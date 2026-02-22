<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Collect Cash</title>

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
    padding:16px;
    border-radius:8px;
    font-size:22px;
    font-weight:600;
    margin:25px auto;
    width:90%;
}

/* CASH SLOT */
.cash-slot{
    width:180px;
    height:20px;
    background:#08194a;
    border-radius:10px;
    margin:20px auto;
    overflow:hidden;
    position:relative;
}

/* CASH NOTE */
.cash-note{
    width:160px;
    height:70px;
    background:#4caf50;
    border-radius:6px;
    margin:0 auto;
    position:absolute;
    left:10px;
    top:-80px;
    animation: cashOut 3s ease-out forwards;
}

.cash-note span{
    color:white;
    font-weight:bold;
    position:absolute;
    top:22px;
    left:50px;
}

/* CASH ANIMATION */
@keyframes cashOut{
    0%{ top:-80px; }
    100%{ top:25px; }
}

/* RECEIPT BOX */
.receipt-box{
    background:#eaf4ff;
    color:#003366;
    padding:15px;
    border-radius:10px;
    width:60%;
    margin:30px auto 0;
    display:none;
}

/* BUTTONS */
.atm-btn{
    background:#5bb3e6;
    color:#003366;
    padding:10px 24px;
    border-radius:25px;
    font-size:15px;
    font-weight:600;
    border:none;
    margin:10px;
}

.atm-btn:hover{
    background:#4aa3df;
}
</style>

<script>
/* Show receipt option after cash dispense */
setTimeout(function(){
    document.getElementById("receipt").style.display = "block";
}, 3500);

/* Auto logout after some time */
setTimeout(function(){
    window.location.href = "logout.php";
}, 12000);
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
        Please Collect Cash and Take Your Card.
    </div>

    <!-- CASH SLOT -->
    <div class="cash-slot">
        <div class="cash-note">
            <span>₹ CASH</span>
        </div>
    </div>

    <!-- RECEIPT OPTION -->
    <div class="receipt-box" id="receipt">
        <p class="fw-bold mb-2">Do you want to print receipt?</p>
        <button class="atm-btn" onclick="window.location.href='receipt.php'">YES</button>
        <button class="atm-btn" onclick="window.location.href='logout.php'">NO</button>
    </div>

</div>
</div>
</div>

</body>
</html>