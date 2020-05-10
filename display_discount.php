<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $discount_amount = $discount * $price / 1000;
    $discount_price = $price - $discount_amount;
    echo "Product Description: " . $product . "<br>" .
        "Price: $" . $price . "<br>" .
        "Discount Percent: " . $discount . "%" . "<br>" .
        "Discount Amount: " . $discount_amount . "<br>" .
        "Discount Price: " . $discount_price;
}