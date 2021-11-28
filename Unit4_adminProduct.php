<?php include 'Unit4_header.php';?>
<?php include 'Unit4_database.php';?>
<?php date_default_timezone_set("America/Denver");?>



<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Lauren Champlin">
	<link rel="stylesheet" href="Unit4_adminProduct.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="Unit4_CRUD_script.js"></script>
</head>
<body>
        <br>
        <br>
<div class="wrapper">
  <div class="column1" id="col1">
          <?php
        $conn = getConnection();
        echo getProductTableHTML($conn);
        ?>
        <br>
  </div>

  <div class="column2">
<form action="Unit4_ajaxsubmit.php" method="post">
   <fieldset class="product">
    <legend>Product Info</legend>
                Product Name: * <input type="text" name="name" id="name" required><br>
                Product Image: * <input type="text" name="image" id="image" required><br>
                Quantity: <input type="number" name="quantity" id="quantity" min=0><br>
                Price:  <input type="number" name="price" id="price" min=0><br>
                Make Inactive: <input type="checkbox" name="inactive" id="inactive" value="off"><br>
        </fieldset>
                <span>
                        <button id="add" type="submit">ADD</button>
                        <button id="update" type="submit" onclick="editDB('update')">UPDATE</button>
                        <button id="delete" type="submit" onclick="editDB('delete')">DELETE</button>
                </span>
</form>
  </div>
</div> 
</body>
</html>

 <?php include 'Unit4_footer.php';?>



<script>
 
//  function editDB(str) {
//                 var xhttp = new XMLHttpRequest();
//                 xhttp.onreadystatechange = function() {                                
//                         if (this.readyState == 4 && this.status == 200){
//                                 document.getElementById("col1").innerHTML = 
//                                 "<?php
//                                 $conn = getConnection();
//                                 echo getProductTableHTML($conn);
//                                 ?>;"
//                         }
//                 };
//                 xhttp.open("GET", "Unit4_get_quantity.php?id="+str, true);
//                 xhttp.send();
//         }

</script>