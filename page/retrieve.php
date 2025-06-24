<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container1">
       <h1> ☕ Coffee Order Details</h1>
        <form method="POST" action="../database/retrieve.php">
            <label for="order_id" class="orderdtls">Order ID:</label>
            <input type="text" id="order_id" class="orderdtls" name="order_id" required>
            <br>
            <button type="submit" class="orderdtls1 btn">Retrieve Order</button>
        </form>

        <br />

        <form action="../index.php">
            <button type="submit" class="btn"><img src="../image/back.png" class="backbtn"></button>
        </form>
    




        <br>
    
    <?php 
        include_once 'footer.php';
      ?>
      
</body>
</html>