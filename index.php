<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Insert Card</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#0b2e83;
    font-family: Arial, sans-serif;
}

.atm-screen{
    background:#103fa3;
    height:90vh;
    border-radius:15px;
    padding:20px;
    color:white;
}

.atm-header{
    text-align:center;
    margin-top:40px;
}

.atm-header h1{
    font-size:38px;
    font-weight:bold;
}

.atm-header p{
    font-size:22px;
    margin-top:15px;
}

.card-slot{
    width:200px;
    height:30px;
    background:#001f54;
    margin:30px auto;
    border-radius:5px;
    box-shadow: inset 0 0 5px #000;
}

.side-btn{
    background:#1c5ed6;
    border-radius:10px;
    padding:15px;
    margin-bottom:15px;
    text-align:center;
    font-size:14px;
}

.footer-btn{
    background:#e91e63;
    padding:12px;
    border-radius:30px;
    text-align:center;
    font-weight:bold;
}
</style>
</head>

<body>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 atm-screen">

            <!-- TOP MESSAGE -->
            <div class="atm-header">
                <h1>Welcome!</h1>
                <p>Please insert your card.</p>
                <div class="card-slot"></div>
            </div>

            <!-- MIDDLE CONTENT -->
            <div class="row mt-5">
                <div class="col-md-8 gap-5">
                    <p class="fw-bold row">SBI</p>
                    <p>THREE REASONS TO SWITCH YOUR HOME LOAN TO SBI</p>

                    <div class="row text-center mt-3">
                        <div class="col-md-4 side-btn">LOW INTEREST
                            <p>Low interest rates help customers save money by reducing the total amount paid over time.
                               They make loans and credit more affordable and easier to repay.</p>    
                        </div>
                        <div class="col-md-4 side-btn">LOW PROCESSING
                        <p>Our streamlined processing ensures quick approvals and minimal paperwork, making your loan experience hassle-free.                            
                        </p>
                        </div>
                        <div class="col-md-4 side-btn">NO HIDDEN CHARGES
                            <p>We believe in transparency. Our loans come with no hidden fees or charges, ensuring you know exactly what you're paying for.</p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT BUTTONS -->
                <div class="col-md-4">
                    <div class="side-btn">QR CASH</div>
                    <div class="footer-btn mt-4" onclick="goToPin()">🌐 YONO CASH</div>

<script>
function goToPin(){
    window.location.href = "enter_pin.php";
}
</script>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
