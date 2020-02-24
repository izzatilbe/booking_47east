<?php /* Smarty version Smarty-3.1.19, created on 2020-01-28 07:23:29
         compiled from "/home/tilbae/Projects/hotelcommerce/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8017256905e2fe171b38952-04882764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595a302d14c206ffed4889a06549d3350b666c95' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1580196142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8017256905e2fe171b38952-04882764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e2fe171b465b5_65395431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2fe171b465b5_65395431')) {function content_5e2fe171b465b5_65395431($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
