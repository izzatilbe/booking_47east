<?php /* Smarty version Smarty-3.1.19, created on 2020-02-24 11:44:46
         compiled from "/home/tilbae/Projects/hotelcommerce/modules/wkabouthotelblock/views/templates/hook/aboutHotelBlockModuleSetting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4691581555e5346aef2a1d2-65792750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b532bc2a910bb828b716bc4640cb335ab884ae8' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/modules/wkabouthotelblock/views/templates/hook/aboutHotelBlockModuleSetting.tpl',
      1 => 1580196143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4691581555e5346aef2a1d2-65792750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e5346aef35ba4_33018353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5346aef35ba4_33018353')) {function content_5e5346aef35ba4_33018353($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAboutHotelBlockSetting'), ENT_QUOTES, 'UTF-8', true);?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-file-text"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Hotel Interior Block','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'About Hotel Setting','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure Hotel Interior block. You can display hotel interior images using this block. This block will be displayed in home page','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>
