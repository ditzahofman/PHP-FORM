<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="./save.php" method="post">
        <h2>Add product</h2>
        <label for="description">Description:</label>
        <input type="text" name="description" />
        <br><br>

        <label for="date">Date:</label>
        <input type="date" name="date" />
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" />
        <br><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" />
        <br><br>

        <button type="submit">Add</button>

    </form>
</body>

</html>