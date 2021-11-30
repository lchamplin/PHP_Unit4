        
$(document).ready(function(){

        $("#add").click(function(e){
                e.preventDefault();
                dataString = checkFields()+"&action=add";
                if(dataString!=""){
                        console.log("ajax reached", dataString)
                        $.ajax({
                                type: "POST",
                                url: "Unit4_order_ajax.php",
                                data: dataString,
                                cache: false,
                                success: function (result) {
                                        document.getElementById('col1').innerHTML = result;
                                        document.getElementById('form').reset();
                                        alert("Product added")
                                }
                        });
                }
                else{
                        return
                }
        });

        $("#update").click(function(e){
                e.preventDefault();
                dataString = checkFields()+"&action=update";
                dataString = dataString + "&id=" + $("#id").val();
                if(dataString!=""){
                        console.log("ajax reached", dataString)
                        $.ajax({
                                type: "POST",
                                url: "Unit4_order_ajax.php",
                                data: dataString,
                                cache: false,
                                success: function (result) {
                                        document.getElementById('col1').innerHTML = result;
                                        document.getElementById('form').reset();
                                        alert("Product updated")
                                }
                        });
                }
                else{
                        return
                }
        });

        $("#delete").click(function(e){
                e.preventDefault();
                dataString = checkFields() + "&id=" + $("#id").val();
                dataString = dataString+"&action=delete_check";
                if(dataString!=""){
                        console.log("ajax reached", dataString)
                        $.ajax({
                                type: "POST",
                                url: "Unit4_order_ajax.php",
                                data: dataString,
                                cache: false,
                                success: function (result) {
                                        console.log(result);
                                        if (result == 1){
                                                alert('Cannot delete--there are orders for this product');
                                        }else{
                                                if(confirm('Are you sure you want to delete this product?')){
                                                        dataString = dataString.substring(0, dataString.length - 12) + "delete";
                                                        $.ajax({
                                                                type: "POST",
                                                                url: "Unit4_order_ajax.php",
                                                                data: dataString,
                                                                cache: false,
                                                                success: function (result) {
                                                                        document.getElementById('col1').innerHTML = result;
                                                                        document.getElementById('form').reset();
                                                                        // alert("Product deleted")
                                                                
                                                                }
                                                        });

                                                }
                                        }
                                }
                        });
                }
                else{
                        return
                }
        });
        
        function checkFields() {
                var name = $("#name").val();
                var image = $("#image").val();
                var quantity = $("#quantity").val();
                var price = $("#price").val();
                var inactive = document.getElementById("inactive").checked;
                if (inactive){
                        inactive = 1;
                }
                else{
                        inactive = 0;
                }
                if (name == '') {
                        alert("Please provide product name");
                        document.getElementById('name').focus();
                        return "";
                }
                if (image == '') {
                        alert("Please provide product image");
                        document.getElementById('image').focus();
                        return "";
                }
                return "name=" + name + "&image=" + image + "&quantity=" + quantity + "&price=" + price + "&inactive=" + inactive;

        }

        
});

        