<?php
    $pd = $_POST['product_description'];
    $lp = $_POST['list_price'];
    $dp = $_POST['discount_percent'];
    $discount = $lp * $dp / 100;
    $total = $lp - $discount;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $pd; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $lp; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $dp."%"; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $total; ?></span><br>
    </main>
</body>
</html>