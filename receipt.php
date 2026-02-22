<?php
session_start();
$amount = $_SESSION['withdraw_amount'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Receipt</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f2f2f2;
    font-family:"Courier New", monospace;
}

.receipt{
    width:320px;
    background:#fff;
    margin:40px auto;
    padding:20px;
    border:1px dashed #333;
}

.receipt h5{
    text-align:center;
    font-weight:bold;
}

.receipt hr{
    border-top:1px dashed #000;
}

.receipt p{
    font-size:14px;
    margin:4px 0;
}

.btn-area{
    text-align:center;
    margin-top:20px;
}
</style>

<script>
function printReceipt(){
    window.print();
    setTimeout(function(){
        window.location.href="logout.php";
    }, 3000);
}
</script>

</head>

<body>

<div class="receipt">

    <h5>STATE BANK OF INDIA</h5>
    <p class="text-center">ATM TRANSACTION RECEIPT</p>

    <hr>

    <p><strong>Date:</strong> <?php echo date("d-m-Y"); ?></p>
    <p><strong>Time:</strong> <?php echo date("h:i:s A"); ?></p>
    <p><strong>ATM ID:</strong> SBI12345</p>
    <p><strong>Txn Ref:</strong> <?php echo rand(100000,999999); ?></p>

    <hr>

    <p><strong>Card No:</strong> XXXX-XXXX-XXXX-1234</p>
    <p><strong>Txn Type:</strong> Cash Withdrawal</p>
<p><strong>Amount:</strong> Rs. <?php echo $amount; ?></p>
<p><strong>Status:</strong> SUCCESS</p>

    <hr>

    <p class="text-center">Thank You for Banking with SBI</p>
    <p class="text-center">Please Collect Your Card</p>

</div>

<div class="btn-area">
    <button class="btn btn-primary" onclick="printReceipt()">PRINT RECEIPT</button>
    <br><br>
    <a href="logout.php" class="btn btn-secondary">NO RECEIPT</a>
</div>

</body>
</html>
