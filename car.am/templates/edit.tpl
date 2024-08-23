<!-- templates/edit.tpl -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobile Selling Website - Edit Car</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Edit Car</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="Create.php">Create</a>
        </nav>
    </header>
    <main>
        <form id="edit-car-form" action="Edit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="edit" value="{$id}" >
            <label for="make">Make:</label>
            <input type="text" id="make" name="make" value="{$make}" required>
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" value="{$model}" required>
            <label for="year">Year:</label>
            <input type="number" id="year" name="year" value="{$year}" required>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="{$price}" required>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            
            <button type="submit">Update</button>
        </form>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../index.js"></script>
</body>
</html>
