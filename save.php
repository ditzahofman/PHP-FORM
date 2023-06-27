<?php
$description = $_POST["description"];
$date = $_POST["date"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$line = "Description: $description, Date: $date, Email: $email, Phone: $phone" . PHP_EOL;

// Append the line to the file "products.txt"
file_put_contents("products.txt", $line, FILE_APPEND);

header("Location: Thanks.php");
exit()

?>
