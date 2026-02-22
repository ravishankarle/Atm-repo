<?php
session_start();
require "db/config.php";

// Security check
if(!isset($_SESSION['card_no'])){
    header("Location: index.php");
    exit;
}

$card = $_SESSION['card_no'];

// Fetch last 5 transactions
$query = "
    SELECT type, amount, txn_date 
    FROM transactions 
    WHERE card_no='$card' 
    ORDER BY txn_date DESC 
    LIMIT 5
";
$res = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Mini Statement</title>

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
}
.sbi-logo{
    font-size:36px;
    font-weight:700;
}
.title-bar{
    background:#bfe3f7;
    color:#003366;
    padding:14px;
    border-radius:8px;
    font-size:22px;
    font-weight:600;
    margin:30px auto;
    width:90%;
}
.statement-box{
    background:#ffffff;
    color:#000;
    border-radius:10px;
    padding:15px;
    width:80%;
    margin:0 auto;
    font-size:14px;
}
.statement-row{
    display:flex;
    justify-content:space-between;
    border-bottom:1px dashed #999;
    padding:6px 0;
}
.statement-row:last-child{
    border-bottom:none;
}
.atm-btn{
    background:#5bb3e6;
    color:#003366;
    padding:12px 26px;
    border-radius:25px;
    font-size:16px;
    font-weight:600;
    border:none;
    margin-top:25px;
}
.atm-btn:hover{
    background:#4aa3df;
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-10 atm-screen">

    <!-- SBI LOGO -->
    <div class="sbi-logo">🔵 SBI</div>

    <!-- TITLE -->
    <div class="title-bar">
        MINI STATEMENT (Last 5 Transactions)
    </div>

    <!-- STATEMENT -->
    <div class="statement-box">

        <?php
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
                echo "
                <div class='statement-row'>
                    <span>".date("d-m-Y", strtotime($row['txn_date']))."</span>
                    <span>{$row['type']}</span>
                    <span>₹ {$row['amount']}</span>
                </div>
                ";
            }
        } else {
            echo "<p>No transactions found.</p>";
        }
        ?>

    </div>

    <!-- BACK BUTTON -->
    <button class="atm-btn" onclick="window.location.href='dashboard.php'">
        🌐 BACK
    </button>

</div>
</div>
</div>

</body>
</html>
