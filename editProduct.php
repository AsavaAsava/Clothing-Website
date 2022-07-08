<?php 
session_start();
print_r($_POST);
require("connect.php");
require_once("selectSubCategories.php");
$pid=$_POST["product"];
$sql2 = "SELECT * FROM tbl_product WHERE product_id = '$pid'";

$result2 = mysqli_query($conn,$sql2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="formStyling.css">
</head>
<body>
    <header>
        <img id="mainIcon" src="./images/chopIcon.png">
    </header>

    <div class="mainCatContainer">
        <div class ="mainForm">
            <h1>Edit Product</h1>
                <form action="./process_editProduct.php" method = "POST" enctype="multipart/form-data">
                    <?php 
                    while($row2 = mysqli_fetch_assoc($result2)){
                    echo "<label for=\"prodName\">Product Name:</label>";
                    echo "<br>";
                    echo "<input type=\"text\" name=\"productName\" id=\"prodName\" placeholder=\"Enter Product Name\" value= \"".$row2['product_name']."\">";
                    echo "<br>";
                    echo "<label for=\"prodDesc\">Product Description:</label>";
                    echo "<br>";
                    echo "<textarea name=\"productDescription\" id =\"prodDesc\" placeholder=\"Enter Description Here\"value= \"".$row2['product_description']."\"></textarea>";
                    echo "<br>";
                    echo "<label for=\"prodImage\">Product Images:</label>";
                    echo "<br>";
                    echo "<input type=\"file\" name=\"productImage\" id=\"prodImg\" placeholder=\"Select Product Image\"value= \"".$row2['product_image']."\">>";
                    echo "<br>";
                    echo "<label for=\"prodPrice\">Unit Price:</label>";
                    echo "<br>";
                    echo "<input type=\"number\" name=\"price\"  id=\"prodPrice\" placeholder=\"Price\"value= \"".$row2['unit_price']."\">";
                    echo "<br>";
                    echo "<label for=\"prodQuantity\">Product Quantity:</label>";
                    echo "<br>";
                    echo "<input type=\"number\" name=\"productQuantity\" id=\"prodQuantity\" placeholder=\"0\" value= \"".$row2['available_quantity']."\">";
                    echo "<br>";
                    echo "<label for=\"subCatName\"> Select Sub-Category</label>";
                    echo "<br>";
                    }
                    ?>
                    <select name="subcategory" id="subCatName">
                         
                        <?php
                            echo "<optgroup label=\"Men\">";

                            foreach ($male as $value) {
 	                        echo("<option value=\"". $value['subcategory_id']."\">"  .$value['subcategory_name']."</option>");
                            }

                            echo "</optgroup>";

                            echo "<optgroup label=\"Women\">";

                            foreach ($female as $value) {
 	                        echo("<option value=\"". $value['subcategory_id']."\">"  .$value['subcategory_name']."</option>");
                            }

                            echo "</optgroup>";

                            echo "<optgroup label=\"Kids\">";

                            foreach ($kids as $value) {
 	                        echo("<option value=\"". $value['subcategory_id']."\">"  .$value['subcategory_name']."</option>");
                            }

                            echo "</optgroup>";


                        ?>  

                    </select>
                    <br>
                    <?php echo "<input type=\"number\" name=\"prodID\" value= \"".$pid."\" hidden>"?>
                    <input type="submit" name="submit_product" value="Submit">
                </form>    
        </div>
    </div>
</body>
</html>

