<?php /* Smarty version Smarty-3.1.19, created on 2020-01-28 16:49:34
         compiled from "/home/tilbae/Projects/hotelcommerce/admin918zwb2pn/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18281214285e2ff59e67d4c0-08997691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a8bb7b3b69848d1acc822496adfbc18b9b43711' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/admin918zwb2pn/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1580196142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18281214285e2ff59e67d4c0-08997691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e2ff59e696af4_48059071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2ff59e696af4_48059071')) {function content_5e2ff59e696af4_48059071($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
