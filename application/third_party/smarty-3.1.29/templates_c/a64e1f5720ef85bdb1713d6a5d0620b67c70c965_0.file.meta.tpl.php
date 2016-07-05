<?php
/* Smarty version 3.1.29, created on 2016-07-02 00:56:23
  from "C:\openServer\domains\localhost\eurosoftTest\application\views\meta.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5776d8f777e918_53009319',
  'file_dependency' => 
  array (
    'a64e1f5720ef85bdb1713d6a5d0620b67c70c965' => 
    array (
      0 => 'C:\\openServer\\domains\\localhost\\eurosoftTest\\application\\views\\meta.tpl',
      1 => 1467406582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5776d8f777e918_53009319 ($_smarty_tpl) {
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Тестовое задание "ЕвроСофт" Артамонов А.А.</title>
</head>
<body>


<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"><?php echo '</script'; ?>
>

 Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!--Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="/assets/style.css">

<div class="main">
    <div class="header">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
assets/images/rocket.png">
        <h1>Тестовое задание "ЕвроСофт"</h1>
    </div>


    <div class="navigation">
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><span class="glyphicon glyphicon-home"></span>  Главная</a></li>
            <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/upload/"><span class="glyphicon glyphicon-cloud-upload"></span>  Загрузка</a></li>
            <?php if (isset($_SESSION['login']) && false) {?>
                <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/index?user=<?php echo $_SESSION['user_id'];?>
"><span class="glyphicon glyphicon-list"></span> Мои изображения</a></li>
                <li role="presentation">    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/login"><span class="glyphicon glyphicon-home"></span> Выход из системы</a></li>
                <li role="presentation">    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/login"><span class="glyphicon glyphicon-home"></span> Вход в систему</a></li>
                <?php } else { ?>
            <?php }?>



        </ul>
    </div>
    <div class="content">







<?php }
}
