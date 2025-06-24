<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>☕ Coffee Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container2">
        
         <h1 class="coffeeshow">☕ORDER DETAILS☕</h1>
        
        <table>
            <tr>
                <th>Order ID</th>
                <th>Name</th>
                <th>Coffee Type</th>
                <th>Size</th>
                <th>Total Price</th>
                <th>Instructions</th>
                <th>Extras</th>
                <th>Edit</th>
                <th>Delete</th>
         
      
            </tr>
            <?php include '../database/show_order.php' ?>
        </table>

        <br />

       
    </div>


</body>

</html>