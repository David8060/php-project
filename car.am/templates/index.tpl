<!-- templates/index.tpl -->
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
        <h1>Car Marketplace</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="Create.php">Create</a>
        </nav>
    </header>
    <main>
        <section id="car-list">
        {if $cars|@count > 0}
            {foreach $cars as $car}
                <div class='car-item' data-index='{$car.id}'>
                    <h3>{$car.make} {$car.model}</h3>
                    <p>Year: {$car.year}</p>
                    <p>Price: $ {$car.price}</p>
                    <img class='car-image' src='{$car.image}' alt='{$car.make} {$car.model}'>
                    <form action='Edit.php' method='GET'>
                        <input type='hidden' name='edit' value='{$car.id}'>
                        <button class='edit-btn' type='submit'>Edit</button>
                    </form>
                    <button class='delete-btn' data-index='{$car.id}'>Delete</button>
                </div>
            {/foreach}
        {else}
            <p>No cars available.</p>
        {/if}
        </section>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="../index.js"></script>
</body>
</html>
