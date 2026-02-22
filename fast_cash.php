<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Fast Cash</title>

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
}
.sbi-logo{
    font-size:36px;
    font-weight:700;
    text-align:center;
}
.title-bar{
    background:#bfe3f7;
    color:#003366;
    padding:14px;
    border-radius:8px;
    font-size:22px;
    font-weight:600;
    text-align:center;
    margin:25px auto;
    width:90%;
}
.fast-btn{
    background:#5bb3e6;
    color:#003366;
    padding:14px;
    border-radius:25px;
    font-size:18px;
    font-weight:600;
    display:block;
    margin-bottom:20px;
    width:220px;
    border:none;
}
.fast-btn:hover{
    background:#4aa3df;
}
.left-col{ padding-left:60px; }
.right-col{ padding-right:60px; text-align:right; }

.more-box{
    display:none;
    margin-top:20px;
    text-align:center;
}
.more-box input{
    width:260px;
    height:45px;
    font-size:22px;
    text-align:center;
    border-radius:6px;
    border:none;
    margin-bottom:15px;
}
</style>

</head>
<body>

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-11 atm-screen">

    <div class="sbi-logo">🔵 SBI</div>

    <div class="title-bar">
        FAST CASH – Please Select Amount
    </div>

    <!-- HIDDEN FORM (for PHP backend) -->
    <form id="fastForm" method="POST" action="withdraw_processing.php">
        <input type="hidden" name="amount" id="fastAmount">
    </form>

    <div class="row mt-4">

        <!-- LEFT -->
        <div class="col-md-6 left-col">
            <button class="fast-btn" onclick="fastWithdraw(500)">₹ 500</button>
            <button class="fast-btn" onclick="fastWithdraw(1000)">₹ 1000</button>
        </div>

        <!-- RIGHT -->
        <div class="col-md-6 right-col">
            <button class="fast-btn" onclick="fastWithdraw(2000)">₹ 2000</button>
            <button class="fast-btn" onclick="showMore()">₹ MORE RUPEES</button>
        </div>

    </div>

    <!-- MORE RUPEES INPUT -->
    <div class="more-box" id="moreBox">
        <input type="number" id="moreAmount" placeholder="Enter Amount (eg. 10000)">
        <br>
        <button class="fast-btn" onclick="submitMore()">🌐 CONFIRM</button>
    </div>

</div>
</div>
</div>

<script>
// Direct fast cash
function fastWithdraw(amount){
    document.getElementById("fastAmount").value = amount;
    document.getElementById("fastForm").submit();
}

// Show input box
function showMore(){
    document.getElementById("moreBox").style.display = "block";
}

// Custom amount submit
function submitMore(){
    let amt = document.getElementById("moreAmount").value;

    if(amt === "" || amt <= 0){
        alert("Please enter valid amount");
        return;
    }

    if(amt % 500 !== 0){
        alert("Amount must be multiple of 500");
        return;
    }

    document.getElementById("fastAmount").value = amt;
    document.getElementById("fastForm").submit();
}
</script>

</body>
</html>
