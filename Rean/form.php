<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body>
    <h2>Enter your name</h2>
    <form method="POST" action="form.php">
        <label>Full Name : </label>
        <input type="text" name="fullname" required>
        <input type="submit" value="Submit">
    </form>
</body>


</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the name from the form
    $name = $_POST["fullname"];
    echo "Hello ," . ($name) . " welcome to our website.";
}
?>