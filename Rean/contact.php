<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'db.php';

        $title = $_POST['title'];
        $isbn = $_POST['isbn'];
        $category = $_POST['category'];
        $page_number  = intval($_POST['page_number']);
        $unit_price = floatval($_POST['unit_price']);
        
        $sql = "INSERT INTO books (title,isbn,category,page_number,unit_price)
                VALUES ('$title,$isbn,$category,$page_number,$unit_price')";
        if($conn->query($sql) ==  TRUE){
            echo"<br> New record created successfully";
        }
        else{
            echo"Error: " . $sql . "<br>" .$conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="created.php" method="post">
        <h2>insert data to database</h2>
        <label>Title:</label>
        <input type="text" name="title"><br><br>
         <label>ISBN:</label>
        <input type="text" name="isbn"><br><br>
         <label>Category:</label>
        <input type="text" name="category"><br><br>
         <label>Page Number:</label>
        <input type="number" name="page_number"><br><br>
         <label>Unit Price:</label>
        <input type="number" name="unit_price"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
