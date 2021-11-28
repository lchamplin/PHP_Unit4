<?php include 'Unit4_header.php';?>
<?php include 'Unit4_database.php';?>
<?php date_default_timezone_set("America/Denver");?>



<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Lauren Champlin">
	<link rel="stylesheet" href="Unit4_adminProduct.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="row">
  <div class="column">
          <?php
        $conn = getConnection();
        $products = getProductTable($conn);

        echo "<br>";
        echo "<h3> Products </h3>";
        echo "<table border='1'>
        <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        </tr>";

        while($row = mysqli_fetch_array($products))
        {
        echo "<tr>";
        echo "<td>" . $row['product_name'] . "</td>";
        echo "<td>" . $row['in_stock'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>
  </div>
  <div class="column">

  </div>
</div> 
</body>
</html>

 <?php include 'Unit4_footer.php';?>