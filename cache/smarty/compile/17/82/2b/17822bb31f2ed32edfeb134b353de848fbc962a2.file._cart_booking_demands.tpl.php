<?php /* Smarty version Smarty-3.1.19, created on 2020-01-28 07:23:34
         compiled from "/home/tilbae/Projects/hotelcommerce/admin/themes/default/template/controllers/orders/_cart_booking_demands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4223934385e2fe176291327-31665051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17822bb31f2ed32edfeb134b353de848fbc962a2' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/admin/themes/default/template/controllers/orders/_cart_booking_demands.tpl',
      1 => 1580196142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4223934385e2fe176291327-31665051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selectedRoomDemands' => 0,
    'roomDemand' => 0,
    'roomCount' => 0,
    'roomTypeDemands' => 0,
    'idGlobalDemand' => 0,
    'demand' => 0,
    'idOption' => 0,
    'option' => 0,
    'demand_key' => 0,
    'selected_adv_option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e2fe176329af3_25090294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2fe176329af3_25090294')) {function content_5e2fe176329af3_25090294($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)&&$_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?>
	<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable(1, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['roomDemand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roomDemand']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['selectedRoomDemands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->key => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['roomDemand']->key;
?>
		<div class="row room_demands_container">
			<div class="col-sm-12 demand_header">
				<span>
					<i class="icon-bed"></i>
					<?php if (isset($_smarty_tpl->tpl_vars['roomDemand']->value['room_num'])&&$_smarty_tpl->tpl_vars['roomDemand']->value['room_num']) {?>
						<?php echo smartyTranslate(array('s'=>'Room'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomDemand']->value['room_num'], ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo smartyTranslate(array('s'=>'Room'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
				</span>
			</div>
			<div class="col-sm-12 room_demand_detail">
				<?php if (isset($_smarty_tpl->tpl_vars['roomTypeDemands']->value)&&$_smarty_tpl->tpl_vars['roomTypeDemands']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['demand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['demand']->_loop = false;
 $_smarty_tpl->tpl_vars['idGlobalDemand'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['roomTypeDemands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['demand']->key => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->_loop = true;
 $_smarty_tpl->tpl_vars['idGlobalDemand']->value = $_smarty_tpl->tpl_vars['demand']->key;
?>
						<div class="row room_demand_block">
							<div class="col-xs-6">
								<div class="row">
									<div class="col-xs-2">
										<input id_cart_booking="<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idGlobalDemand']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" class="id_room_type_demand" <?php if (isset($_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands'])&&$_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands']&&(in_array($_smarty_tpl->tpl_vars['idGlobalDemand']->value,$_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands']))) {?>checked<?php }?> />
									</div>
									<div class="col-xs-10 demand_adv_option_block">
										<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
										<?php if (isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'])&&$_smarty_tpl->tpl_vars['demand']->value['adv_option']) {?>
											<select class="id_option">
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['idOption'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['demand']->value['adv_option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['idOption']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
													<?php $_smarty_tpl->tpl_vars['demand_key'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['idGlobalDemand']->value)."-".((string)$_smarty_tpl->tpl_vars['idOption']->value), null, 0);?>
													<option optionPrice="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idOption']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'][$_smarty_tpl->tpl_vars['demand_key']->value])) {?>selected<?php }?> key="<?php echo $_smarty_tpl->tpl_vars['demand_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
													<?php if (isset($_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'][$_smarty_tpl->tpl_vars['demand_key']->value])) {?>
														<?php $_smarty_tpl->tpl_vars['selected_adv_option'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['idOption']->value), null, 0);?>
													<?php }?>
												<?php } ?>
											</select>
										<?php } else { ?>
											<input type="hidden" class="id_option" value="0" />
										<?php }?>
									</div>
								</div>
							</div>
							<div class="col-xs-6">
								<p><span class="pull-right extra_demand_option_price"><?php if (isset($_smarty_tpl->tpl_vars['selected_adv_option']->value)&&isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'][$_smarty_tpl->tpl_vars['selected_adv_option']->value]['price'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['adv_option'][$_smarty_tpl->tpl_vars['selected_adv_option']->value]['price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
<?php }?></span></p>
							</div>
						</div>
					<?php } ?>
				<?php }?>
			</div>
		</div>
		<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['roomCount']->value+1, null, 0);?>
	<?php } ?>
<?php }?><?php }} ?>
