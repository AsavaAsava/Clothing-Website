<?php 
require_once("selectSubCategories.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin -Add Product</title>
    <link rel="stylesheet" href="formStyling.css">
</head>
<body>
    <header>
        <img id="mainIcon" src="./images/chopIcon.png">
    </header>

    <div class="mainCatContainer">
        <div class ="mainForm">
            <h1>Add Product</h1>
                <form action="./process_addProduct.php" method = "POST" enctype="multipart/form-data">
                    <label for="prodName">Product Name:</label>
                    <br>
                    <input type="text" name="productName" id="prodName" placeholder="Enter Product Name">
                    <br>
                    <label for="prodDesc">Product Description:</label>
                    <br>
                    <textarea name="productDescription" id ="prodDesc "placeholder="Enter Description Here"></textarea>
                    <br>
                    <label for="prodImage">Product Images:</label>
                    <br>
                    <input type="file" name="productImage" id="prodImg" placeholder="Select Product Image">
                    <br>
                    <label for="prodPrice">Unit Price:</label>
                    <br>
                    <input type="number" name="price"  id="prodPrice" placeholder="Price">
                    <br>
                    <label for="prodQuantity">Product Quantity:</label>
                    <br>
                    <input type="number" name="productQuantity" id="prodQuantity" placeholder="0">
                    <br>
                    <label for="subCatName"> Select Sub-Category</label>
                    <br>
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
                    <input type="submit" name="submit_product" value="Submit">
                </form>    
        </div>
    </div>
</body>
</html>