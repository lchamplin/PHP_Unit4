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
<form action="Unit4_ajaxsubmit.php" method="post" id="form">
   <fieldset class="product">
    <legend>Product Info</legend>
                Product Name: * <input type="text" name="name" id="name" required><br>
                Product Image: * <input type="text" name="image" id="image" required><br>
                Quantity: <input type="number" name="quantity" id="quantity" min=0><br>
                Price:  <input type="number" name="price" id="price" min=0><br>
                Make Inactive: <input type="checkbox" name="inactive" id="inactive"><br>
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
 
 function highlight_row() {
    var table = document.getElementById('display-table');
    var cells = table.getElementsByTagName('td');

    for (var i = 0; i < cells.length; i++) {
        // Take each cell
        var cell = cells[i];
        // do something on onclick event for cell
        cell.onclick = function () {
            // Get the row id where the cell exists
            var rowId = this.parentNode.rowIndex;

            var rowsNotSelected = table.getElementsByTagName('tr');
            for (var row = 0; row < rowsNotSelected.length; row++) {
                rowsNotSelected[row].style.backgroundColor = "";
                rowsNotSelected[row].classList.remove('selected');
            }
            var rowSelected = table.getElementsByTagName('tr')[rowId];
            rowSelected.style.backgroundColor = "yellow";
            rowSelected.className += " selected";

            document.getElementById("name").value = rowSelected.cells[0].innerHTML;
            document.getElementById("image").value = rowSelected.cells[1].innerHTML;
            document.getElementById("quantity").value = rowSelected.cells[2].innerHTML;
            document.getElementById("price").value = rowSelected.cells[3].innerHTML;
            console.log(rowSelected.cells[4].innerHTML);
            if (rowSelected.cells[4].innerHTML == "yes"){
                document.getElementById("inactive").attr("checked") = true;
            }
            else{
                document.getElementById("inactive").attr("checked") = false;
            }
        }
    }

}

highlight_row();
</script>