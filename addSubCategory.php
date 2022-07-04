<?php 
require_once("selectCategories.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin -SubCategory</title>
	<link rel="stylesheet" href="formStyling.css">
</head>
<body>
	<header>
 		<img id="mainIcon" src="./images/chopIcon.png">
    </header>

    <div class="mainCatContainer">
        <div class ="mainCatForm">
            <h1>Add Sub-Category</h1>
                <form action="./process_addSubCategory.php" method = "POST">
                    <label for="catName">Category:</label>
                    <br>
 	                <select name="category" id="catName">
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                            echo("<option value=\"". $row['category_id']."\">"  .$row['category_name']."</option>");
                            }
                        ?>
                    </select>
                    <br>
                    <label for="subCatName">Sub-Category:</label>
                    <br>
                    <input type="text" name="subCategory" id="subCatName" placeholder="Enter Subcategory Name">
                    <br>
                    <input type="submit" name="submit_category" value="Submit">
                </form>    
        </div>
    </div>
</body>
</html>