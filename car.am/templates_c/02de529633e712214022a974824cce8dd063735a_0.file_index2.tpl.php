<?php
/* Smarty version 5.3.1, created on 2024-07-18 14:03:05
  from 'file:index2.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66990479efbcf3_47172380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02de529633e712214022a974824cce8dd063735a' => 
    array (
      0 => 'index2.tpl',
      1 => 1721304181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66990479efbcf3_47172380 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php-project\\templates';
?><!-- templates/index.tpl -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobile Selling Website</title>
    <link rel="stylesheet" href="styles.css">
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
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('cars')) > 0) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cars'), 'car', false, 'index');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('index')->value => $_smarty_tpl->getVariable('car')->value) {
$foreach0DoElse = false;
?>
                    <div class='car-item' data-index='<?php echo $_smarty_tpl->getValue('index');?>
'>
                        <h3><?php echo $_smarty_tpl->getValue('car')['make'];?>
 <?php echo $_smarty_tpl->getValue('car')['model'];?>
</h3>
                        <p>Year: <?php echo $_smarty_tpl->getValue('car')['year'];?>
</p>
                        <p>Price: $ <?php echo $_smarty_tpl->getValue('car')['price'];?>
</p>
                        <img class='car-image' src='<?php echo $_smarty_tpl->getValue('car')['image'];?>
' alt='<?php echo $_smarty_tpl->getValue('car')['make'];?>
 <?php echo $_smarty_tpl->getValue('car')['model'];?>
'>
                        <form action='Edit.php' method='GET'>
                            <input type='hidden' name='edit' value='<?php echo $_smarty_tpl->getValue('index');?>
'>
                            <button class='edit-btn' type='submit'>Edit</button>
                        </form>
                        <button class='delete-btn' data-index='<?php echo $_smarty_tpl->getValue('index');?>
'>Delete</button>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <p>No cars available.</p>
            <?php }?>
        </section>
    </main>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
