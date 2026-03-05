<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="test.php"method="POST">
        
        <label for="">Username</label>
        <input type="text"name="username">
        <label for="">Password</label>
    
        <input type="password"name="password"placeholder="1234">
        <br>
        <input type="submit"value="login">

    </form>
</body>
</html> -->
 <?php 
    $student = ["name"=>"Roth","grade"=>"A+"];
    echo $student["name"];

    $student["age"]=2;
    print_r($student);
 ?>
<?php 
    $employee = ["name"=> "Chhe","position"=> "kru math","salary"=>1000];
    foreach ($employee as $key => $value) {
        echo "<br>$key:$value<br>";
    }
?>