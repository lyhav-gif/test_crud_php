 <?php
    //  header('Content-Type: application/json');

    //     // sample data
    //     $data = [
    //         ['id' => 1, 'name' => 'John Doe', 'email' => 'john.doe@example.com'],
    //         ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane.smith@example.com']
    //     ];


    //     if (isset($_GET['id'])) {
    //         $id = intval($_GET['id']);
    //         foreach ($data as $row) {
    //             if ($row['id'] === $id) {
    //                 echo json_encode($row, JSON_PRETTY_PRINT);
    //                 exit(); 
    //             }
    //         }
    //         echo json_encode(['error' => 'User not found'], JSON_PRETTY_PRINT);
    //     } else {
    //         echo json_encode($data, JSON_PRETTY_PRINT);
    //     }

    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods:  POST');

    // Read incoming JSON data
    $data = json_decode(file_get_contents('php://input'), true);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($data['name']) && isset($data['email'])) {
            $newUser = [
                "id" => rand(3, 100), // Simulate auto-increment ID
                "name" => $data['name'],
                "email" => $data['email']
            ];
            echo json_encode(["message" => "User created successfully", "user" => $newUser]);
        } else {
            echo json_encode(["erro" => "Missing required fields: name and email"]);
        }
    }

    ?>