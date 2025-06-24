<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Coffee Shop Delete Order</h1>
        <form method="POST" action="../database/delete.php">
            <label for="order_id" class="deleteorder">Order ID:</label>
            <input type="text" class="deleteorder" id="order_id" name="order_id" required>

            <button type="submit" class="btn deleteorder">Delete Order</button>
        </form>

        <br />
        
        <form action="../index.php">
            <button type="submit" class="btn"><img src="../image/back.png" class="backbtn"></button>
        </form>
        
    
   <?php 
        include_once 'footer.php';
      ?>
</body>
</html>