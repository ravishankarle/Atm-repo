<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ATM - Enter PIN</title>

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

/* SBI LOGO */
.sbi-logo{
    font-size:38px;
    font-weight:700;
    margin-top:5px;
}

/* PIN TITLE BAR */
.pin-bar{
    background:#bfe3f7;
    color:#003366;
    padding:14px;
    border-radius:8px;
    font-size:22px;
    font-weight:800;
    margin:30px auto;
    width:100%;
}

/* PIN INPUT */
.pin-input{
    width:260px;
    height:45px;
    font-size:24px;
    letter-spacing:12px;
    text-align:center;
    border-radius:6px;
    border:none;
    outline:none;
    margin-bottom:20px;
}

/* PRESS HERE BUTTON */
.press-btn{
    background:#b6c94a;
    color:#1b2f00;
    padding:10px 26px;
    border-radius:25px;
    font-size:14px;
    font-weight:600;
    display:inline-flex;
    align-items:center;
    gap:8px;
    cursor:pointer;
    border:none;
    margin-bottom:30px;
}

.press-btn:hover{
    background:#a8bc3f;
}

/* KEYPAD ICON */
.keypad{
    width:120px;
    height:120px;
    background:#4aa3df;
    border-radius:15px;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 auto;
}

.keypad-grid{
    display:grid;
    grid-template-columns: repeat(3, 20px);
    grid-gap:6px;
}

.keypad-grid div{
    width:20px;
    height:20px;
    border:2px solid white;
    border-radius:3px;
}

/* HAND ICON */
.hand{
    font-size:50px;
    margin-top:-15px;
}

/* FOOTER */
.footer-text{
    position:absolute;
    bottom:20px;
    left:30px;
    font-size:14px;
    opacity:0.8;
}
</style>
</head>

<body>

<div class="container-fluid position-relative">
    <div class="row justify-content-center">
        <div class="col-md-10 atm-screen">

            <!-- SBI LOGO -->
            <div class="sbi-logo">🔵 SBI</div>

            <!-- TITLE -->
            <div class="pin-bar">
                Please Enter Your PIN
            </div>

            <!-- PIN FORM -->
            <form method="POST" action="dashboard.php">
                <input 
                    type="password" 
                    name="pin" 
                    maxlength="4" 
                    class="pin-input"
                    required
                >

                <!-- PRESS HERE -->
                <button type="submit" class="press-btn" onclick="goToTransaction()">
    🌐 PRESS HERE
</button>

<script>
function goToTransaction(){
    window.location.href = "dashboard.php";
}
</script>
            </form>

            <!-- KEYPAD ICON -->
            <div class="keypad">
                <div class="keypad-grid">
                    <div></div><div></div><div></div>
                    <div></div><div></div><div></div>
                    <div></div><div></div><div></div>
                </div>
            </div>

            <div class="hand">☝️</div>

            <!-- FOOTER -->
            <div class="footer-text ">HELLO, CUSTOMER !!  </div>

        </div>
    </div>
</div>

</body>
</html>
