<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>☕ Coffee Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<?php


include "dbh.con.php";

try {
    // Open the database connection
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);

    // Set the PDO error mode to exception -  useful for error handling and allows you to catch and handle any errors that occur during the execution of the database operations.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepares an SQL statement for execution
    $stmt = $conn->prepare("SELECT * FROM orders");

    // Executes the prepared statement
    $stmt->execute();

    // Fetch all the orders
    $results = $stmt->fetchAll();

    $url = "update.php";
    $url1 = "delete.php";
        
    // Display each order as a table row
    foreach ($results as $result) {
        
        echo "<tr>";
        echo "<td>" . $result['orderID'] . "</td>"."<br>";
        echo "<td>" . $result['name'] . "</td>";
        echo "<td>" . $result['coffeeType'] . "</td>";
        echo "<td>" . $result['size'] . "</td>";
        echo "<td>₱" . number_format($result['totalPrice'], 2) . "</td>";
        echo "<td>" . $result['instructions'] . "</td>";
        echo "<td>" . $result['extras'] . "</td>";
        echo "<td>" . "<a href='$url'>update</a>" . "</td>";
        echo "<td>" . "<a href='$url1'>delete</a>" . "</td>";
        echo "</tr>";
        
           
    
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
<form action="../index.php">
            <button type="submit" class="btn"><img src="../image/back.png" class="backbtn"></button>
        </form>
         

</body>

</html>