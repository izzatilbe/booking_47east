<?php /* Smarty version Smarty-3.1.19, created on 2020-02-24 11:44:47
         compiled from "/home/tilbae/Projects/hotelcommerce/modules/blocknavigationmenu/views/templates/hook/customNavigationLinkSetting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14081048085e5346af05a1d8-80586648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f6f15f8c8d7626f7de770a298c09bf84a42f8fd' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/modules/blocknavigationmenu/views/templates/hook/customNavigationLinkSetting.tpl',
      1 => 1580196142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14081048085e5346af05a1d8-80586648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'custom_navigation_link_setting_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e5346af09b1f2_66318213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5346af09b1f2_66318213')) {function content_5e5346af09b1f2_66318213($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['custom_navigation_link_setting_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-chain"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Custom Navigation Link','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Custom Links Setting','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Create custom links which will display at footer navigation block and navigation menu.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>
