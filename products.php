<?php
// Read the contents of the "products.txt" file
$fileContents = file_get_contents("products.txt");

// Output the file contents
echo nl2br($fileContents);
// header("Location: index.php");
header("refresh:3; url=index.php");
exit()
?>
