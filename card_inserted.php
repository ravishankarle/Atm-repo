<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Card Inserted</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#0a1e5e;
    font-family: "Segoe UI", Arial, sans-serif;
}

.atm-screen{
    background: linear-gradient(#243a9b, #1a2f80);
    height:92vh;
    border-radius:12px;
    padding:30px;
    color:white;
    text-align:center;
}

/* SBI LOGO */
.sbi-logo{
    font-size:42px;
    font-weight:700;
    margin-top:10px;
}

/* MESSAGE BAR */
.msg-bar{
    background:#cfe9f7;
    color:#003366;
    padding:18px;
    border-radius:10px;
    font-size:22px;
    font-weight:600;
    margin:40px auto;
    width:85%;
}

/* BOTTOM CARD */
.card-info{
    background:#ffffff;
    color:#000;
    border-radius:12px;
    padding:15px;
    width:60%;
    margin:0 auto;
}
</style>
</head>

<body>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 atm-screen">

            <!-- SBI LOGO -->
            <div class="sbi-logo">
                🔵 SBI
            </div>

            <!-- MESSAGE -->
            <div class="msg-bar">
                Hi, Please do not Remove your Chip Card.<br>
                Leave your Card Inserted during<br>
                the Entire Transaction.
            </div>

            <!-- BOTTOM PROMO -->
            <div class="card-info">
                <strong>Technology that matches the Generation</strong>
                <p class="mb-1">SBI EMV Chip Debit Card</p>
                <small>Safe • Secure • Smart</small>
            </div>

        </div>
    </div>
</div>

</body>
</html>
