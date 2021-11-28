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
        echo getProductTableHTML($conn);
        ?>
  </div>

  <!-- <div class="column">
<form>
   <fieldset class="product">
    <legend>Product Info</legend>
                Product Name: * <input type="text" name="name" id="name" required><br>
                Product Image: * <input type="text" name="image" id="image" required><br>
                Quantity: <input type="number" name="quantity" id="quantity" min=0 value=0><br>
                Price:  <input type="number" name="price" id="price" min=0 value=0><br>
                Make Inactive: <input type="checkbox" name="inactive" id="inactive"><br>
        </fieldset>
</form>
                <span>
                        <button id="add">ADD<button>
                        <button id="update">UPDATE<button>
                        <button id="delete">DELETE<button>
                </span>
  </div> -->
</div> 
</body>
</html>

 <?php include 'Unit4_footer.php';?>