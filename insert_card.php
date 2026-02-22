<!DOCTYPE html>
<html>
<head>
    <title>ATM - Insert Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body text-center">

          <h4 class="mb-3">🏧 Insert Your ATM Card</h4>

          <form method="POST" action="insert_card_process.php">
            <input 
              type="text" 
              name="card_no" 
              class="form-control mb-3 text-center"
              placeholder="Enter 16 Digit Card Number"
              maxlength="16"
              required
            >

            <button class="btn btn-primary w-100">
              Insert Card
            </button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
