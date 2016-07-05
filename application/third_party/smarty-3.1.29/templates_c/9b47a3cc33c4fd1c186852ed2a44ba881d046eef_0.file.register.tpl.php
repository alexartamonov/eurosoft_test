<?php
/* Smarty version 3.1.29, created on 2016-06-30 18:05:27
  from "C:\openServer\domains\localhost\eurosoftTest\application\views\auth\register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57752727c81d68_95781377',
  'file_dependency' => 
  array (
    '9b47a3cc33c4fd1c186852ed2a44ba881d046eef' => 
    array (
      0 => 'C:\\openServer\\domains\\localhost\\eurosoftTest\\application\\views\\auth\\register.tpl',
      1 => 1467295523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57752727c81d68_95781377 ($_smarty_tpl) {
?>
<div class="center" style="width: 300px">
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/registerpost">
    <input class="form-control interval" type="text" name="name" placeholder="Ваше имя">
    <input class="form-control interval" type="text" name="email" placeholder="Почтовый ящик">
    <input class="form-control interval" type="password"  placeholder="Пароль" name="password">
    <input class="form-control interval" type="password" placeholder="Повторите пароль" name="password_repeat"/>
    <br>
    <input type="submit" class="btn btn-default center">
</form>
</div>

<?php }
}
