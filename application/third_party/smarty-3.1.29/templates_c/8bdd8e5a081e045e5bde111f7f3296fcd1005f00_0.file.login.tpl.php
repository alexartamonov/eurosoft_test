<?php
/* Smarty version 3.1.29, created on 2016-06-30 18:04:32
  from "C:\openServer\domains\localhost\eurosoftTest\application\views\auth\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577526f08b48d2_50199639',
  'file_dependency' => 
  array (
    '8bdd8e5a081e045e5bde111f7f3296fcd1005f00' => 
    array (
      0 => 'C:\\openServer\\domains\\localhost\\eurosoftTest\\application\\views\\auth\\login.tpl',
      1 => 1467295462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577526f08b48d2_50199639 ($_smarty_tpl) {
?>

<style>

</style>

<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/loginpost" method="post" class="center" style="width: 300px">
    <input class="form-control interval" type="text" name="login">
    <input class="form-control interval" type="password" name="password">

    <div class="center">
        <input type="submit" class="btn btn-primary interval" value="Войти в систему">
        <div class="interval">
        <a style="font-size: 10px;" class="center" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/register">Cоздать профиль</a>
        </div>
    </div>
</form><?php }
}
