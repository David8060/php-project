<?php
/* Smarty version 5.3.1, created on 2024-07-23 16:14:26
  from 'file:edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669fbac2ba37f7_38335263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f6610fca5901962ea43bbe529aa721e83e4f105' => 
    array (
      0 => 'edit.tpl',
      1 => 1721744055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669fbac2ba37f7_38335263 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php-project\\car.am\\templates';
?><!-- templates/edit.tpl -->
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
            <input type="hidden" name="edit" value="<?php echo $_smarty_tpl->getValue('idcar_items');?>
" >
            <label for="make">Make:</label>
            <input type="text" id="make" name="make" value="<?php echo $_smarty_tpl->getValue('make');?>
" required>
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" value="<?php echo $_smarty_tpl->getValue('model');?>
" required>
            <label for="year">Year:</label>
            <input type="number" id="year" name="year" value="<?php echo $_smarty_tpl->getValue('year');?>
" required>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="<?php echo $_smarty_tpl->getValue('price');?>
" required>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            
            <button type="submit">Update</button>
        </form>
    </main>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../index.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
