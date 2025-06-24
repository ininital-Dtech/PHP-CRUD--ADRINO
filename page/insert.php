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
        <h1>Coffee Shop Order Form</h1>
        <form action="../database/order.php" method="post">
            <input type="text" id="name" class="name" name="name" placeholder="Fullname" required><br>
            <label for="coffee" class="coffelabel">Coffee Type :</label>
            <select id="coffee" name="coffee" class="coffeetype">
                <option value="espresso">Espresso - ₱250</option>
                <option value="latte">Latte - ₱300</option>
                <option value="cappuccino">Cappuccino - ₱350</option>
                <option value="americano">Americano - ₱200</option>
                <option value="mocha">Mocha - ₱400</option>
            </select>
             <div class="input-group">
                <label class="coffelabel">Size:</label>
                <input type="radio" id="small" name="size" value="small" required>
                <label for="small">Small: +₱0</label>

                <input type="radio" id="medium" name="size" value="medium">
                <label for="medium">Medium: +₱50</label>

                <input type="radio" id="large" name="size" value="large">
                <label for="large">Large: +₱80</label>
            </div>

            <div class="input-group">
                <label for="extras" class="coffelabel">Extras:</label>
                <input type="checkbox" id="sugar" name="extras[]" value="sugar">
                <label for="sugar">Sugar: +₱5.75</label>
                <br>
                <input type="checkbox" id="cream" name="extras[]" value="cream">
                <label for="cream">Cream: +₱10.50</label>
            </div>

            <label for="instructions">Special Instructions:</label><br>
            <textarea id="instructions" placeholder="Optional" class="textarea" name="instructions" rows="4"></textarea>
            <br>
            <input type="submit" class="btn" id="addorder">
           
        </form>

        <br />

        <form action="../index.php">
            <button type="submit" class="btn"><img src="../image/back.png" class="backbtn"></button>
        </form>
    
       
    
    <?php 
        include_once 'footer.php';
      ?>

        </form>
        </div>
    
</body>
</html>