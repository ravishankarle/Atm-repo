<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Enter Amount</title>

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

/* AMOUNT INPUT */
.amount-input{
    width:280px;
    height:50px;
    font-size:26px;
    text-align:center;
    border-radius:6px;
    border:none;
    outline:none;
    margin:30px auto;
    display:block;
}

/* BUTTONS */
.atm-btn{
    background:#5bb3e6;
    color:#003366;
    padding:12px;
    border-radius:25px;
    font-size:16px;
    font-weight:600;
    display:block;
    text-align:center;
    text-decoration:none;
    margin-bottom:18px;
    width:160px;
}

.atm-btn:hover{
    background:#4aa3df;
}

/* RIGHT ALIGN */
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
                Please Enter Amount.<br>
                (Cash Available : Rs 500)
            </div>

            <!-- AMOUNT FORM -->
            <form method="POST" action="withdraw_processing.php">
                <input 
                    type="number" 
                    name="amount" 
                    value="0"
                    min="0"
                    step="500"
                    class="amount-input"
                    required
                >
                
                <!-- BUTTONS -->
                <div class="row mt-4">
                    <div class="col-md-6 right-col">
                        <button type="submit" class="atm-btn">🌐 YES</button>
                    </div>
                    <div class="col-md-6">
                        <a href="dashboard.php" class="atm-btn">🌐 NO</a>
                    </div>
                </div>


            </form>

        </div>
    </div>
</div>

</body>
</html>



