CREATE DATABASE coffeeshop;
USE coffeeshop;

CREATE TABLE orders (
  orderID INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  coffeeType VARCHAR(255),
  size VARCHAR(255),
  instructions VARCHAR(255),
  extras VARCHAR(255),
  totalPrice VARCHAR(255),
  
  
);
