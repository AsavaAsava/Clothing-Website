<!DOCTYPE html>
<html>
<head>
	<title>Add Category</title>
	<link rel="stylesheet" href="formStyling.css">
</head>
<body>
	<header>
 		<img id="mainIcon" src="./images/chopIcon.png">
    </header>

    <div class="mainCatContainer">
        <div class ="mainCatForm">
        <a href="./adminLanding.php">Return to Dashboard</a>
            <h1>Add Category</h1>
                <form action="./process_addCategory.php" method = "POST">
 	              <input type="text" name="categoryName" placeholder="Enter Category name">
                    <br>
                    <input type="submit" name="submit_category" value="Submit">
                </form>    
        </div>
    </div>
</body>
</html>