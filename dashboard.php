<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Select Transaction</title>

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
    width:85%;
}

/* ATM BUTTONS */
.atm-btn{
    background:#5bb3e6;
    color:#003366;
    padding:12px;
    border-radius:25px;
    font-size:15px;
    font-weight:600;
    display:block;
    text-align:center;
    text-decoration:none;
    margin-bottom:18px;
    transition:0.2s;
}

.atm-btn:hover{
    background:#4aa3df;
    color:#002244;
}

/* ALIGNMENT */
.left-col{
    padding-left:40px;
}
.right-col{
    padding-right:40px;
}
</style>
</head>

<body>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11 atm-screen">

            <!-- SBI LOGO -->
            <div class="sbi-logo">🔵 SBI</div>

            <!-- TITLE -->
            <div class="title-bar">
                Dear Customer, Please Select Transaction
            </div>

            <!-- BUTTONS -->
            <div class="row mt-4">

                <!-- LEFT -->
                <div class="col-md-6 left-col">
                    <a href="mobile_banking.php" class="atm-btn">🌐 MOBILE BANKING REGISTRATION</a>
                    <a href="change_pin.php" class="atm-btn">🔐 PIN CHANGE</a>
                    <a href="others.php" class="atm-btn">⚙️ OTHERS</a>
                </div>

                <!-- RIGHT -->
                <div class="col-md-6 right-col text-end">
                    <a href="fast_cash.php" class="atm-btn">⚡ FAST CASH</a>
                    <a href="withdraw.php" class="atm-btn">💵 WITHDRAWAL</a>
                    <a href="balance.php" class="atm-btn">💰 BALANCE INQUIRY</a>
                    <a href="mini_statement.php" class="atm-btn">📄 MINI STATEMENT</a>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
