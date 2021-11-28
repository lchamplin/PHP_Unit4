        
$(document).ready(function(){

        $("#add").click(function(e){
                e.preventDefault();
                dataString = checkFields()+"&action='add'";
                if(dataString!=""){
                        console.log("ajax reached", dataString)
                        $.ajax({
                                type: "POST",
                                url: "Unit4__order_ajax.php",
                                data: dataString,
                                cache: false,
                                success: function (result) {
                                        alert(result);
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
                var inactive = $("#inactive").val();
                if (name == '') {
                        alert("Please provide product name");
                        return "";
                }
                if (image == '') {
                        alert("Please provide product image");
                        return "";
                }
                return "name=" + name + "&image=" + image + "&quantity=" + quantity + "&price=" + price + "&inactive=" + inactive;

        }

        
});

        