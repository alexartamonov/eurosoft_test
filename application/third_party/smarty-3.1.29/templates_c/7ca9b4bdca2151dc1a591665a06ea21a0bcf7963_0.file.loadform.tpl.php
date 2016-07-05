<?php
/* Smarty version 3.1.29, created on 2016-07-02 00:34:06
  from "C:\openServer\domains\localhost\eurosoftTest\application\views\images\loadform.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5776d3be444759_33999972',
  'file_dependency' => 
  array (
    '7ca9b4bdca2151dc1a591665a06ea21a0bcf7963' => 
    array (
      0 => 'C:\\openServer\\domains\\localhost\\eurosoftTest\\application\\views\\images\\loadform.tpl',
      1 => 1467405240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5776d3be444759_33999972 ($_smarty_tpl) {
echo '<script'; ?>
 src="/assets/js/loadform.js"><?php echo '</script'; ?>
>

<form id="fileform" class="center" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/uploadpost" method="post" enctype="multipart/form-data">
    <div class="center glyphupload"><span class="glyphicon glyphicon-cloud-upload"></span></div>
    <h2 class="center interval">Загрузка изображений</h2>
    <div class="file_upload">
        <button class="btn btn-default" type="button">Выбрать</button>
        <div>Файл не выбран</div>
        <input type="file" value="Выбрать файл" accept="image/*" name="userfile[]">

    </div>
    <input type="text" name="comment" placeholder="Комментарий">
    <input class="btn btn-primary center" type="submit" value="Загрузить">
</form>



<?php }
}
