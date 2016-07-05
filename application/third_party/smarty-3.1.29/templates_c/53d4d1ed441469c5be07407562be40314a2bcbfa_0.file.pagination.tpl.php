<?php
/* Smarty version 3.1.29, created on 2016-07-01 14:26:00
  from "C:\openServer\domains\localhost\eurosoftTest\application\views\modules\pagination.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57764538240d20_08067609',
  'file_dependency' => 
  array (
    '53d4d1ed441469c5be07407562be40314a2bcbfa' => 
    array (
      0 => 'C:\\openServer\\domains\\localhost\\eurosoftTest\\application\\views\\modules\\pagination.tpl',
      1 => 1467368677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57764538240d20_08067609 ($_smarty_tpl) {
?>
<nav style="display: table; margin: auto">
    <ul class="pagination">
        <?php if (isset($_smarty_tpl->tpl_vars['result']->value->toStart)) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['result']->value->toStart+1;?>
">В начало</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['result']->value->prev == true) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['result']->value->currentPage-1;?>
" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        <?php }?>
        <?php
$_from = $_smarty_tpl->tpl_vars['result']->value->pages;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_page_0_saved_item = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page'] : false;
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$__foreach_page_0_saved_local_item = $_smarty_tpl->tpl_vars['page'];
?>
            <?php if (!isset($_smarty_tpl->tpl_vars['page']->value->active)) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->value;?>
<span class="sr-only">(current)</span></a>
                </li>
            <?php } else { ?>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->value;?>
<span class="sr-only">(current)</span></a>
                </li>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_0_saved_local_item;
}
if ($__foreach_page_0_saved_item) {
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_0_saved_item;
}
?>
        <?php if ($_smarty_tpl->tpl_vars['result']->value->next == true) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['result']->value->currentPage+1;?>
" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['result']->value->toEnd)) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['result']->value->toEnd;?>
">В конец</a></li>
        <?php }?>
    </ul>
</nav><?php }
}
