<?php
/* Smarty version 3.1.29, created on 2016-07-02 01:18:55
  from "C:\openServer\domains\localhost\eurosoftTest\application\views\images\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5776de3f879de5_20693694',
  'file_dependency' => 
  array (
    '6eac88d47cc67ed46cf610ac7d4e4f808e88916f' => 
    array (
      0 => 'C:\\openServer\\domains\\localhost\\eurosoftTest\\application\\views\\images\\index.tpl',
      1 => 1467407932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5776de3f879de5_20693694 ($_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="/assets/js/modal.js"><?php echo '</script'; ?>
>

<div class="imagelist">
    <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?><div class="image">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/get" name="getImg">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">
                <div class="glyphimage">
                    <span class="glyphicon glyphicon-picture"></span>
                    <span style="position: absolute;"><?php echo $_smarty_tpl->tpl_vars['image']->value['comment'];?>
</span>
                </div>
            </form>
        </div><?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
</div>


<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <span class="glyphicon glyphicon-remove close"></span>
            <img id="modalimage" src="">
        </div>
    </div>
</div><?php }
}
