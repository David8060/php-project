<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobile Selling Website</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <h1>Create Car</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="create.php">Create</a>
        </nav>
    </header>
    <main>
        <form id="create-car-form" action="Create.php" method="POST" enctype="multipart/form-data">
            <label for="make">Make:</label>
            <input type="text" id="make" name="make" required>
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" required>
            <label for="year">Year:</label>
            <input type="number" id="year" step="1" min='1970' max='2025' name="year" required>
            <label for="price">Price:</label>
            <input type="number" id="price" min='0' name="price" required>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            <button type="submit">Create</button>
        </form>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../index.js">
    </script>

</body>

</html>