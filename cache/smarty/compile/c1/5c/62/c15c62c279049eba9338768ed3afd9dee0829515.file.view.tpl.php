<?php /* Smarty version Smarty-3.1.19, created on 2020-02-24 11:44:46
         compiled from "/home/tilbae/Projects/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/hotel_configuration_setting/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6373696225e5346aeee6de1-27731153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c15c62c279049eba9338768ed3afd9dee0829515' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/hotel_configuration_setting/helpers/view/view.tpl',
      1 => 1580196143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6373696225e5346aeee6de1-27731153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'general_setting_link' => 0,
    'htl_reviews_conf_link' => 0,
    'payment_setting_link' => 0,
    'order_restrict_setting_link' => 0,
    'other_module_setting_link' => 0,
    'feature_price_setting_link' => 0,
    'additional_demand_setting_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e5346aef24ca5_34433147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5346aef24ca5_34433147')) {function content_5e5346aef24ca5_34433147($_smarty_tpl) {?><div class="panel htl_conf_panel">
	<h3 class="tab"> <i class="icon-cogs"></i>&nbsp;&nbsp; <?php echo smartyTranslate(array('s'=>'Hotel Configuration','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</h3>
	<div class="panel-body">
		<div class="btn-group setting-link-div col-sm-3 col-xs-12">
			<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['general_setting_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
				<span class="col-sm-2 col-xs-2"><i class="icon-cogs"></i></span>
				<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'General Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
			</a>
			<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Hotel General Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure Your Hotel general Settings using this option.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-placement="bottom">
				<i class="icon-question-circle"></i>
			</a>
		</div>
		
		<?php if (isset($_smarty_tpl->tpl_vars['htl_reviews_conf_link']->value)&&$_smarty_tpl->tpl_vars['htl_reviews_conf_link']->value) {?>
			<div class="btn-group setting-link-div col-sm-3 col-xs-12">
				<a type="button"  href="<?php echo $_smarty_tpl->tpl_vars['htl_reviews_conf_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
					<span class="col-sm-2 col-xs-2"><i class="icon-star"></i></span>
					<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Hotel Reviews','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
				</a>
				<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Hotel Reviews Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure Reviews setting using this link.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-placement="bottom">
					<i class="icon-question-circle"></i>
				</a>
			</div>
		<?php }?>
		<div class="btn-group setting-link-div col-sm-3 col-xs-12">
			<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['payment_setting_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
				<span class="col-sm-2 col-xs-2"><i class="icon-money"></i></span>
				<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Payment Modules','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
			</a>
			<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Payment Modules Setting','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure your payment Modules settings using this link.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-placement="bottom">
				<i class="icon-question-circle"></i>
			</a>
		</div>
		<div class="btn-group setting-link-div col-sm-3 col-xs-12">
			<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['order_restrict_setting_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
				<span class="col-sm-2 col-xs-2"><i class="icon-list-alt"></i></span>
				<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Order Restrict','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
			</a>
			<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Order Restrict Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure if you want to restrict orders till a specific date for your hotels.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-placement="bottom">
				<i class="icon-question-circle"></i>
			</a>
		</div>
		<div class="btn-group setting-link-div col-sm-3 col-xs-12">
			<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['other_module_setting_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
				<span class="col-sm-2 col-xs-2"><i class="icon-support"></i></span>
				<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Other Modules','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
			</a>
			<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Other Modules Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure here settings of other modules of the software.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-placement="bottom">
				<i class="icon-question-circle"></i>
			</a>
		</div>
		<!-- Setting to set prices for date range -->
		<div class="btn-group setting-link-div col-sm-3 col-xs-12">
			<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['feature_price_setting_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
				<span class="col-sm-2 col-xs-2"><i class="icon-cog"></i></span>
				<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Feature Price','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
			</a>
			<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Feature Prices Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Here set specific prices for specific dates.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-placement="bottom">
				<i class="icon-question-circle"></i>
			</a>
		</div>
		<!-- Setting to set addition demands for the room type -->
		<div class="btn-group setting-link-div col-sm-3 col-xs-12">
			<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['additional_demand_setting_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
				<span class="col-sm-2 col-xs-2"><i class="icon-cog"></i></span>
				<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Additional Facilities','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
			</a>
			<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Additional Facilities Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Here create additional facilities and their prices for room types.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" data-placement="bottom">
				<i class="icon-question-circle"></i>
			</a>
		</div>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAddModuleSettingLink'),$_smarty_tpl);?>

	</div>
</div>
<?php }} ?>
