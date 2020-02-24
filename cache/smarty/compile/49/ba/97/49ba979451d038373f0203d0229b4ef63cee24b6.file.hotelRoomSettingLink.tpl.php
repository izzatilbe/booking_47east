<?php /* Smarty version Smarty-3.1.19, created on 2020-02-24 11:44:47
         compiled from "/home/tilbae/Projects/hotelcommerce/modules/wkhotelroom/views/templates/hook/hotelRoomSettingLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12490487495e5346af0148b8-31390486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49ba979451d038373f0203d0229b4ef63cee24b6' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/modules/wkhotelroom/views/templates/hook/hotelRoomSettingLink.tpl',
      1 => 1580196143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12490487495e5346af0148b8-31390486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htlRoomBlockConfigLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e5346af025556_12377404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5346af025556_12377404')) {function content_5e5346af025556_12377404($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htlRoomBlockConfigLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-key"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Hotel Rooms Block','mod'=>'wkhotelroom'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Hotel Rooms Setting','mod'=>'wkhotelroom'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure Hotel Rooms settings. Using this module you can display your hotel rooms in home page.','mod'=>'wkhotelroom'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>
