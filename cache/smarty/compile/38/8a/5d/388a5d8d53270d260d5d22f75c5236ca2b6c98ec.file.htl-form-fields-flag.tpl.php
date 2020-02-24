<?php /* Smarty version Smarty-3.1.19, created on 2020-02-24 11:42:38
         compiled from "/home/tilbae/Projects/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/_partials/htl-form-fields-flag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5736217725e53462e6c01f9-48564997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '388a5d8d53270d260d5d22f75c5236ca2b6c98ec' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/_partials/htl-form-fields-flag.tpl',
      1 => 1580196143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5736217725e53462e6c01f9-48564997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'currentLang' => 0,
    'ps_img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e53462e6f35f7_60641835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e53462e6f35f7_60641835')) {function content_5e53462e6f35f7_60641835($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
	<img class="all_lang_icon" data-lang-id="<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ps_img_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
.jpg">
<?php }?><?php }} ?>
