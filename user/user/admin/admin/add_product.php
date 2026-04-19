<?php
include("../config/db.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $price = $_POST['price'];

    $conn->query("INSERT INTO products (name,price) VALUES ('$name','$price')");
    echo "Product added ✔";
}
?>

<form method="POST">
<input type="text" name="name" placeholder="Product Name"><br>
<input type="number" name="price" placeholder="Price"><br>
<button>Add</button>
</form>
