<?php
/* Smarty version 5.3.1, created on 2024-08-27 11:27:19
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66cdb81798f167_76290350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ad261647aa7bfeb6835379e098cb3d84cfcba3' => 
    array (
      0 => 'index.tpl',
      1 => 1724407713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66cdb81798f167_76290350 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?><!-- templates/index.tpl -->
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
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('cars')) > 0) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cars'), 'car');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('car')->value) {
$foreach0DoElse = false;
?>
                <div class='car-item' data-index='<?php echo $_smarty_tpl->getValue('car')['id'];?>
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
                        <input type='hidden' name='edit' value='<?php echo $_smarty_tpl->getValue('car')['id'];?>
'>
                        <button class='edit-btn' type='submit'>Edit</button>
                    </form>
                    <button class='delete-btn' data-index='<?php echo $_smarty_tpl->getValue('car')['id'];?>
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
 src="../index.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
