<?php /* Smarty version Smarty-3.1.19, created on 2020-01-28 16:36:29
         compiled from "/home/tilbae/Projects/hotelcommerce/modules/wkhotelfiltersearchblock/views/templates/hook/htlfiltersearchblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10218380575e2ff28d18f406-71779272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dce6d3d992a4aa5db71327e112970f0679086393' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/modules/wkhotelfiltersearchblock/views/templates/hook/htlfiltersearchblock.tpl',
      1 => 1580196143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10218380575e2ff28d18f406-71779272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'location_enable' => 0,
    'search_data' => 0,
    'totalActiveHotels' => 0,
    'show_only_active_htl' => 0,
    'all_hotels_info' => 0,
    'max_order_date' => 0,
    'htl_v' => 0,
    'link' => 0,
    'booking_date_to' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e2ff28d22f164_76476675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2ff28d22f164_76476675')) {function content_5e2ff28d22f164_76476675($_smarty_tpl) {?>

<div class="row margin-lr-0 block" id="filter_search_block">
    <div class="filter_header">
        <div class="col-sm-12">
            <p><?php echo smartyTranslate(array('s'=>'Search Rooms','mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
</p>
            <hr class="theme-text-underline">
        </div>
    </div>
    <div class="col-sm-12 category_page_search_block clear-both">
        <form method="POST" autocomplete="on" autofill="on">

            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&($_smarty_tpl->tpl_vars['error']->value==1)) {?>
                <p class="error_msg"><i class="icon-times-circle-o"></i>&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'All Fields are mandatory.','mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
</p>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&$_smarty_tpl->tpl_vars['location_enable']->value) {?>
                <div class="form-group hotel_location_div">
                    <label class="control-label" for=""><?php echo smartyTranslate(array('s'=>'Hotel Location','mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
</label>
                    <input class="form-control" placeholder="<?php echo smartyTranslate(array('s'=>'Enter a city, state, country name','mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
" type="text" id="hotel_location" name="hotel_location" autocomplete="off" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['location'];?>
" city_cat_id="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['parent_data']['id_category'];?>
"<?php }?>/>
                    <div class="dropdown">
                        <ul class="location_search_results_ul"></ul>
                    </div>
                </div>
            <?php }?>

            <div class="form-group htl_nm_cont <?php if ($_smarty_tpl->tpl_vars['totalActiveHotels']->value<=1&&!$_smarty_tpl->tpl_vars['show_only_active_htl']->value) {?>hidden<?php }?>">
                <label class="control-label" for=""><?php echo smartyTranslate(array('s'=>'Hotel Name','mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
</label>
                <?php if (isset($_smarty_tpl->tpl_vars['all_hotels_info']->value)&&$_smarty_tpl->tpl_vars['totalActiveHotels']->value) {?>
                    <div class="dropdown">
                        <button class="btn btn-default hotel_cat_id_btn dropdown-toggle" type="button" data-toggle="dropdown">
                            <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>
                                <span id="hotel_cat_name" class="pull-left"><?php echo $_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['hotel_name'];?>
</span>
                            <?php } else { ?>
                                <span id="hotel_cat_name" class="pull-left"><?php echo smartyTranslate(array('s'=>'Select Hotel','mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
</span>
                            <?php }?>
                            <input type="hidden" id="hotel_cat_id" name="hotel_cat_id" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['id_category'];?>
"<?php }?>>
                            <input type="hidden" id="id_hotel" name="id_hotel" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['id'];?>
"<?php }?>>
                            <input type="hidden" id="max_order_date" name="max_order_date" value="<?php if (isset($_smarty_tpl->tpl_vars['max_order_date']->value)) {?><?php echo $_smarty_tpl->tpl_vars['max_order_date']->value;?>
<?php }?>">
                            <span class="arrow_span">
                                <i class="icon icon-angle-down"></i>
                            </span>
                        </button>
                        <ul class="dropdown-menu hotel_dropdown_ul">
                            <?php if (isset($_smarty_tpl->tpl_vars['all_hotels_info']->value)&&$_smarty_tpl->tpl_vars['all_hotels_info']->value) {?>
                                <?php  $_smarty_tpl->tpl_vars['htl_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['htl_v']->_loop = false;
 $_smarty_tpl->tpl_vars['htl_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_hotels_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['htl_v']->key => $_smarty_tpl->tpl_vars['htl_v']->value) {
$_smarty_tpl->tpl_vars['htl_v']->_loop = true;
 $_smarty_tpl->tpl_vars['htl_k']->value = $_smarty_tpl->tpl_vars['htl_v']->key;
?>
                                    <li class="hotel_name" data-id-hotel="<?php echo $_smarty_tpl->tpl_vars['htl_v']->value['id'];?>
" data-hotel-cat-id="<?php echo $_smarty_tpl->tpl_vars['htl_v']->value['id_category'];?>
" data-max_order_date="<?php echo $_smarty_tpl->tpl_vars['htl_v']->value['max_order_date'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['htl_v']->value['hotel_name'];?>

                                    </li>
                                <?php } ?>
                            <?php }?>
                        </ul>
                    </div>
                <?php }?>
                <p class="error_msg" id="select_htl_error_p"></p>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <label class="control-label" for="check_in_time"><?php echo smartyTranslate(array('s'=>'Check In Time','mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
</label>
                        <div class="input-group">
                            <input class="form-control" type="text" id="check_in_time" name="check_in_time" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['date_from'];?>
"<?php }?>/>
                            <label class="input-group-addon" for="check_in_time"><i class="icon-calendar"></i></label>
                        </div>
                        <p class="error_msg" id="check_in_time_error_p"></p>
                    </div>
                    <div class="col-xs-12 col-sm-12 margin-top-10">
                        <label class="control-label" for="check_out_time"><?php echo smartyTranslate(array('s'=>'Check Out Time','mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
</label>
                        <div class="input-group">
                            <input class="form-control" type="text" id="check_out_time" name="check_out_time" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['date_to'];?>
"<?php }?> />
                            <label class="input-group-addon" for="check_out_time"><i class="icon-calendar"></i></label>
                        </div>
                        <p class="error_msg" id="check_out_time_error_p"></p>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" name="filter_search_btn" class="btn btn-default button button-medium exclusive" id="filter_search_btn">
                    <span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
</span>
                </button>
            </div>
        </form>
    </div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'no_results_found_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'no_results_found_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No results found for this search','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'no_results_found_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'hotel_loc_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_loc_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter a hotel location','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_loc_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'hotel_name_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_name_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select a hotel name','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_name_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'check_in_time_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_in_time_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter Check In time','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_in_time_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'check_out_time_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_out_time_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter Check Out time','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_out_time_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'num_adults_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'num_adults_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter number of adults.','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'num_adults_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'num_children_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'num_children_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter number of children.','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'num_children_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'some_error_occur_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'some_error_occur_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Some error occured. Please try again.','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'some_error_occur_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'less_checkin_date')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'less_checkin_date'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Check In date can not be before current date.','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'less_checkin_date'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'more_checkout_date')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_checkout_date'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Check Out date must be greater than Check In date.','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_checkout_date'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('autocomplete_search_url'=>$_smarty_tpl->tpl_vars['link']->value->getModuleLink('wkroomsearchblock','autocompletesearch')),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'hotel_name_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_name_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select a hotel name','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_name_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'check_in_time_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_in_time_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter Check In time','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_in_time_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'check_out_time_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_out_time_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter Check Out time','js'=>1,'mod'=>'wkhotelfiltersearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_out_time_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('max_order_date'=>$_smarty_tpl->tpl_vars['max_order_date']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('booking_date_to'=>$_smarty_tpl->tpl_vars['booking_date_to']->value),$_smarty_tpl);?>
<?php }} ?>
