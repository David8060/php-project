<?php
/* Smarty version 5.3.1, created on 2024-07-18 16:17:05
  from 'file:create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669923e11f55c4_95670939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1100e40506397f5e934ab54ba65ebaf89cb3563' => 
    array (
      0 => 'create.tpl',
      1 => 1721311336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669923e11f55c4_95670939 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php-project\\car.am\\templates';
?><!DOCTYPE html>
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
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../index.js">
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}
