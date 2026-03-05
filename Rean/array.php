<?php
$student = [
    ["Sok", 20, "A"],
    ["seng", 22, "B"],
    ["vuthy", 21, "C"]
];

foreach ($student as $item) {
    echo " Name:" . $item[0] . ",Age:" . $item[1] . ",Grade: " . $item[2] . "<br>";
}
$students = [
    "student1" => ["name" => "sok roth", "course" => ["Math" => "A", "Science" => "B+"]],
    "student2" => ["name" => "song thi", "course" => ["Math" => "A", "Science" => "A"]],
];

$students = [
    "student1" => [
        "name" => "Sok sovan",
        "Courses" => ["Math" => "A", "Science" => "B+"]
    ],
    "student2" => [
        "name" => "song seyha",
        "Courses" => ["Math" => "B", "Science" => "A"]
    ]
];
foreach ($students as $studentID => $studentDetails) {
    echo "Student ID: $studentID <br>";
    echo "Name :" . $studentDetails["name"] . "<br>";
    echo "Courses and Grades: <br>";

    foreach ($studentDetails["Courses"] as $course => $grade) {
        echo "- $course: $grade<br>";
    }
    echo "==========================<br>";
}

$sentence = "PHP is fun!";
$words = explode(" ", $sentence);
$reversed = array_reverse($words);
echo  implode(" ", $reversed);//Output: fun! is php
