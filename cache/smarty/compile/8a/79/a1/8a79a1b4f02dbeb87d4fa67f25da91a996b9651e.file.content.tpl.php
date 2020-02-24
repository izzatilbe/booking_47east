<?php /* Smarty version Smarty-3.1.19, created on 2020-01-28 07:23:34
         compiled from "/home/tilbae/Projects/hotelcommerce/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4953195555e2fe17677f8e7-45932726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a79a1b4f02dbeb87d4fa67f25da91a996b9651e' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/admin/themes/default/template/content.tpl',
      1 => 1580196142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4953195555e2fe17677f8e7-45932726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e2fe176784b35_27962618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2fe176784b35_27962618')) {function content_5e2fe176784b35_27962618($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
