<?php
session_start();
$conn = mysqli_connect("localhost","root","","atm");

if(isset($_POST['card_no'])){
    
    $card_no = $_POST['card_no'];

    // card validation
    $query = "SELECT * FROM users WHERE card_no='$card_no'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) == 1){
        // card valid
        $_SESSION['card_no'] = $card_no;
        header("Location: enter_pin.php");
    }else{
        echo "
        <script>
            alert('Invalid ATM Card');
            window.location.href='insert_card.php';
        </script>
        ";
    }
}
?>
