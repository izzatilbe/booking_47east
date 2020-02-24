<?php /* Smarty version Smarty-3.1.19, created on 2020-02-24 11:44:47
         compiled from "/home/tilbae/Projects/hotelcommerce/modules/wkfooterpaymentblock/views/templates/hook/footerPaymentSettingLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19405848135e5346af03f142-39990669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f124cc693a8449c64a52a8a1edc1271888b60666' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/modules/wkfooterpaymentblock/views/templates/hook/footerPaymentSettingLink.tpl',
      1 => 1580196143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19405848135e5346af03f142-39990669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerPaymentBlockLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e5346af056d59_16203537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5346af056d59_16203537')) {function content_5e5346af056d59_16203537($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['footerPaymentBlockLink']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-money"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Footer Payment Block','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Footer Payment Block Setting','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Using this setting, you can configure payment block view in the footer of page in front end.','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>
