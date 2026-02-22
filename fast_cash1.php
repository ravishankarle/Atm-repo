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

/* SBI LOGO */
.sbi-logo{
    font-size:36px;
    font-weight:700;
    text-align:center;
}

/* TITLE BAR */
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

/* FAST CASH BUTTON */
.fast-btn{
    background:#5bb3e6;
    color:#003366;
    padding:14px;
    border-radius:25px;
    font-size:18px;
    font-weight:600;
    display:block;
    text-align:center;
    text-decoration:none;
    margin-bottom:22px;
    width:220px;
    border:none;
}

.fast-btn:hover{
    background:#4aa3df;
}

/* ALIGNMENT */
.left-col{
    text-align:left;
    padding-left:60px;
}
.right-col{
    text-align:right;
    padding-right:60px;
}
</style>

<script>
function fastWithdraw(amount){
    // store fast cash amount (optional for backend)
    sessionStorage.setItem("fast_amount", amount);

    // redirect to processing
    window.location.href = "withdraw_processing.php";
}
</script>

</head>

<body>

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-11 atm-screen">

    <!-- SBI LOGO -->
    <div class="sbi-logo">🔵 SBI</div>

    <!-- TITLE -->
    <div class="title-bar">
        FAST CASH – Please Select Amount
    </div>

    <!-- BUTTONS -->
    <div class="row mt-4">

        <!-- LEFT -->
        <div class="col-md-6 left-col">
            <button class="fast-btn" onclick="fastWithdraw(500)">₹ 500</button>
            <button class="fast-btn" onclick="fastWithdraw(1000)">₹ 1000</button>
        </div>

        <!-- RIGHT -->
        <div class="col-md-6 right-col">
            <button class="fast-btn" onclick="fastWithdraw(2000)">₹ 2000</button>
            <button class="fast-btn" onclick="fastWithdraw(5000)">₹ More Ruppes</button>
        </div>

    </div>

</div>
</div>
</div>

</body>
</html>
