<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Select Account Type</title>

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

/* ACCOUNT BUTTON */
.atm-btn{
    background:#5bb3e6;
    color:#003366;
    padding:14px;
    border-radius:25px;
    font-size:16px;
    font-weight:600;
    display:block;
    text-align:center;
    text-decoration:none;
    margin-bottom:22px;
    width:220px;
}

.atm-btn:hover{
    background:#4aa3df;
    color:#002244;
}

/* ALIGN RIGHT */
.right-col{
    text-align:right;
    padding-right:60px;
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
                Please Select Account Type
            </div>

            <!-- ACCOUNT OPTIONS -->
            <div class="row mt-5">
                <div class="col-md-12 right-col">
                    <a href="withdraw_amount.php?type=credit" class="atm-btn">🌐 CREDIT</a>
                    <a href="withdraw_amount.php?type=current" class="atm-btn">🌐 CURRENT</a>
                    <a href="withdraw_amount.php?type=savings" class="atm-btn">🌐 SAVINGS</a>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
