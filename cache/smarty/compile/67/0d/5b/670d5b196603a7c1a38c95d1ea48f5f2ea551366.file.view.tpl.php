<?php /* Smarty version Smarty-3.1.19, created on 2020-01-28 16:49:10
         compiled from "/home/tilbae/Projects/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/hotel_rooms_booking/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20183431265e2ff586ba22d4-33735299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '670d5b196603a7c1a38c95d1ea48f5f2ea551366' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/hotel_rooms_booking/helpers/view/view.tpl',
      1 => 1580196143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20183431265e2ff586ba22d4-33735299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax_delete' => 0,
    'rms_in_cart' => 0,
    'booking_data' => 0,
    'date_from' => 0,
    'date_to' => 0,
    'hotel_name' => 0,
    'name_val' => 0,
    'hotel_id' => 0,
    'room_type' => 0,
    'all_room_type' => 0,
    'val_type' => 0,
    'book_k' => 0,
    'book_v' => 0,
    'avai_v' => 0,
    'part_v' => 0,
    'sub_part_v' => 0,
    'sub_part_k' => 0,
    'booked_v' => 0,
    'rm_dtl_v' => 0,
    'unavai_v' => 0,
    'cart_bdata' => 0,
    'cart_data' => 0,
    'cart_tamount' => 0,
    'link' => 0,
    'id_cart' => 0,
    'id_guest' => 0,
    'formAction' => 0,
    'currency' => 0,
    'booking_calendar_data' => 0,
    'check_css_condition_var' => 0,
    'check_calender_var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e2ff587054a09_52701338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2ff587054a09_52701338')) {function content_5e2ff587054a09_52701338($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tilbae/Projects/hotelcommerce/tools/smarty/plugins/modifier.date_format.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['ajax_delete']->value)) {?>
<div class="panel col-sm-12">
	<h3 class="tab">
		<i class="icon-info"></i> <?php echo smartyTranslate(array('s'=>'Booking Information','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

		<button type="button" class="btn btn-primary pull-right margin-right-10" id="cart_btn" data-toggle="modal" data-target="#cartModal"><i class="icon-shopping-cart"></i> <?php echo smartyTranslate(array('s'=>'Cart','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
 <span class="badge" id="cart_record"><?php echo $_smarty_tpl->tpl_vars['rms_in_cart']->value;?>
</span></button>
	</h3>
	<div class="panel-body padding-0">
	<?php if (isset($_smarty_tpl->tpl_vars['booking_data']->value)&&$_smarty_tpl->tpl_vars['booking_data']->value) {?>
		<div class="row">
			<div class="col-sm-4">
				<div class="row box-border margin-right-10">
					<form method="post" action="">
						<div class="row">
							<div class="form-group col-sm-12">
								<label for="from_date" class="control-label col-sm-4 required">
									<span title="" data-toggle="tooltip" class="label-tooltip"><?php echo smartyTranslate(array('s'=>'Check-In','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
								</label>
								<div class="col-sm-8">
									<input type="text" name="from_date" class="form-control" id="from_date" <?php if (isset($_smarty_tpl->tpl_vars['date_from']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
									<input type="hidden" name="search_date_from" id="search_date_from" <?php if (isset($_smarty_tpl->tpl_vars['date_from']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
								</div>
							</div>
							<div class="form-group col-sm-12">
								<label for="to_date" class="control-label col-sm-4 required">
									<span title="" data-toggle="tooltip" class="label-tooltip"><?php echo smartyTranslate(array('s'=>'Check-Out','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
								</label>
								<div class="col-sm-8">
									<input type="text" name="to_date" class="form-control" id="to_date" <?php if (isset($_smarty_tpl->tpl_vars['date_to']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
									<input type="hidden" name="search_date_to" id="search_date_to" <?php if (isset($_smarty_tpl->tpl_vars['date_to']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
								</div>
							</div>
							<div class="form-group col-sm-12">
								<label for="hotel_id" class="control-label col-sm-4 required">
									<span title="" data-toggle="tooltip" class="label-tooltip"><?php echo smartyTranslate(array('s'=>'Hotel Name','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
								</label>
								<div class="col-sm-8">
									<select name="hotel_id" class="form-control" id="hotel_id">
										<?php if (isset($_smarty_tpl->tpl_vars['hotel_name']->value)&&$_smarty_tpl->tpl_vars['hotel_name']->value) {?>
											<?php  $_smarty_tpl->tpl_vars['name_val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name_val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotel_name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name_val']->key => $_smarty_tpl->tpl_vars['name_val']->value) {
$_smarty_tpl->tpl_vars['name_val']->_loop = true;
?>
												<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['hotel_id']->value)&&($_smarty_tpl->tpl_vars['name_val']->value['id']==$_smarty_tpl->tpl_vars['hotel_id']->value)) {?>selected<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
											<?php } ?>
										<?php } else { ?>
											<?php echo smartyTranslate(array('s'=>'No hotels available','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

										<?php }?>
									</select>
								</div>
							</div>
							<div class="form-group col-sm-12">
								<label for="room_type" class="control-label col-sm-4">
									<span title="" data-toggle="tooltip" class="label-tooltip"><?php echo smartyTranslate(array('s'=>'Room Type','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
								</label>
								<div class="col-sm-8">
									<select class="form-control" name="room_type" id="room_type">
										<?php if (isset($_smarty_tpl->tpl_vars['room_type']->value)) {?>
											<option value='0' <?php if (($_smarty_tpl->tpl_vars['room_type']->value==0)) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'All Types','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
											<?php if ((isset($_smarty_tpl->tpl_vars['all_room_type']->value)&&$_smarty_tpl->tpl_vars['all_room_type']->value)) {?>
												<?php  $_smarty_tpl->tpl_vars['val_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_room_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val_type']->key => $_smarty_tpl->tpl_vars['val_type']->value) {
$_smarty_tpl->tpl_vars['val_type']->_loop = true;
?>
													<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['val_type']->value['id_product'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['val_type']->value['id_product']==$_smarty_tpl->tpl_vars['room_type']->value)) {?>selected<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['val_type']->value['room_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
												<?php } ?>
											<?php }?>
										<?php }?>
									</select>
									<input type="hidden" name="search_id_prod" id="search_id_prod" value="<?php echo $_smarty_tpl->tpl_vars['room_type']->value;?>
">
								</div>
							</div>
							<div class="col-sm-12">
								<button id="search_hotel_list" name="search_hotel_list" type="submit" class="btn btn-primary pull-right">
									<i class="icon-search"></i>&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Search','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="row margin-lr-0 box-border calender-main-div">
					<div class="hotel_date col-sm-7">
						<div class="row margin-leftrgt-0">
							<div class="col-sm-12 htl_date_header">
								<div class="col-sm-3">
									<p class="htl_date_disp"><?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),"%d");?>
</p>
									<span class="htl_month_disp"><?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),"%b");?>
</span>
								</div>
								<div class="col-sm-1">
									<p class="htl_date_disp">-</p>
								</div>
								<div class="col-sm-3">
									<p class="htl_date_disp"><?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),"%d");?>
</p>
									<span class="htl_month_disp"><?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),"%b");?>
</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-5 htl_room_data_cont">
						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12 htl_room_cat_data">
										<p class="room_cat_header"><?php echo smartyTranslate(array('s'=>'Total Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
										<p class="room_cat_data"><?php if (isset($_smarty_tpl->tpl_vars['booking_data']->value)&&$_smarty_tpl->tpl_vars['booking_data']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking_data']->value['stats']['total_rooms'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>00<?php }?></p>
									</div>
								</div>
								<hr class="hr_style" />
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12 htl_room_cat_data no_border">
										<p class="room_cat_header"><?php echo smartyTranslate(array('s'=>'Partially Available','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
										<p class="room_cat_data" id="num_part"><?php if (isset($_smarty_tpl->tpl_vars['booking_data']->value)&&$_smarty_tpl->tpl_vars['booking_data']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_part_avai'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>00<?php }?></p>
									</div>
								</div>
								<hr class="hr_style" />
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12 htl_room_cat_data">
										<p class="room_cat_header"><?php echo smartyTranslate(array('s'=>'Available Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
										<p class="room_cat_data" id="num_avail"><?php if (isset($_smarty_tpl->tpl_vars['booking_data']->value)&&$_smarty_tpl->tpl_vars['booking_data']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_avail'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>00<?php }?></p>
									</div>
								</div>
								<hr class="hr_style" />
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12 htl_room_cat_data no_border">
										<p class="room_cat_header"><?php echo smartyTranslate(array('s'=>'Booked Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
										<p class="room_cat_data"><?php if (isset($_smarty_tpl->tpl_vars['booking_data']->value)&&$_smarty_tpl->tpl_vars['booking_data']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_booked'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>00<?php }?></p>
									</div>
								</div>
								<hr class="hr_style" />
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12 htl_room_cat_data">
										<p class="room_cat_header"><?php echo smartyTranslate(array('s'=>'Unavailable Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
										<p class="room_cat_data"><?php if (isset($_smarty_tpl->tpl_vars['booking_data']->value)&&$_smarty_tpl->tpl_vars['booking_data']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_unavail'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>00<?php }?></p>
									</div>
								</div>
								<hr class="hr_style" />
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12 htl_room_cat_data">
										<p class="room_cat_header"><?php echo smartyTranslate(array('s'=>'In-Cart Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
										<p class="room_cat_data" id="cart_stats"><?php if (isset($_smarty_tpl->tpl_vars['booking_data']->value)&&$_smarty_tpl->tpl_vars['booking_data']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_cart'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>00<?php }?></p>
									</div>
								</div>
								<hr class="hr_style" />
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6 indi_cont clearfix">
								<div class="color_indicate bg-green"></div>
								<span class="indi_label"><?php echo smartyTranslate(array('s'=>'Available Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
							</div>
							<div class="col-sm-6 indi_cont clearfix">
								<div class="color_indicate bg-yellow"></div>
								<span class="indi_label"><?php echo smartyTranslate(array('s'=>'Partially Available','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
							</div>
							<div class="col-sm-6 indi_cont clearfix">
								<div class="color_indicate bg-red"></div>
								<span class="indi_label"><?php echo smartyTranslate(array('s'=>'Unavailable Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
							</div>
							<!-- <div class="col-sm-6 indi_cont clearfix">
								<div class="color_indicate bg-gray"></div>
								<span class="indi_label"><?php echo smartyTranslate(array('s'=>'Hold For Maintenance','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<p class="alert alert-warning">	<?php echo smartyTranslate(array('s'=>"No booking information found. Please make sure at least one active hotel and room type must be available.",'mod'=>"hotelreservationsystem"),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['booking_data']->value)&&$_smarty_tpl->tpl_vars['booking_data']->value) {?>
		<div class="row margin-div" id="htl_rooms_list">
			<div class="col-sm-12">
				<ul class="nav nav-tabs">
					<?php  $_smarty_tpl->tpl_vars['book_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['book_v']->_loop = false;
 $_smarty_tpl->tpl_vars['book_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['booking_data']->value['rm_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['book_v']->key => $_smarty_tpl->tpl_vars['book_v']->value) {
$_smarty_tpl->tpl_vars['book_v']->_loop = true;
 $_smarty_tpl->tpl_vars['book_k']->value = $_smarty_tpl->tpl_vars['book_v']->key;
?>
						<li <?php if ($_smarty_tpl->tpl_vars['book_k']->value==0) {?>class="active"<?php }?> ><a href="#room_type_<?php echo $_smarty_tpl->tpl_vars['book_k']->value;?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['book_v']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
				<div class="tab-content panel">
					<?php  $_smarty_tpl->tpl_vars['book_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['book_v']->_loop = false;
 $_smarty_tpl->tpl_vars['book_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['booking_data']->value['rm_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['book_v']->key => $_smarty_tpl->tpl_vars['book_v']->value) {
$_smarty_tpl->tpl_vars['book_v']->_loop = true;
 $_smarty_tpl->tpl_vars['book_k']->value = $_smarty_tpl->tpl_vars['book_v']->key;
?>
						<div id="room_type_<?php echo $_smarty_tpl->tpl_vars['book_k']->value;?>
" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['book_k']->value==0) {?>active<?php }?>">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#avail_room_data_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Available Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</a></li>
								<li><a href="#part_room_data_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Partially Available','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</a></li>
								<li><a href="#book_room_data_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Booked Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</a></li>
								<li><a href="#unavail_room_data_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Unavailable Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</a></li>
							</ul>
							<div class="tab-content panel">
								<div id="avail_room_data_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="tab-pane active">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Room No.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Duration','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Message','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Allotment Type','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Action','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
												</tr>
											</thead>
											<tbody>
												<?php  $_smarty_tpl->tpl_vars['avai_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['avai_v']->_loop = false;
 $_smarty_tpl->tpl_vars['avai_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['book_v']->value['data']['available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['avai_v']->key => $_smarty_tpl->tpl_vars['avai_v']->value) {
$_smarty_tpl->tpl_vars['avai_v']->_loop = true;
 $_smarty_tpl->tpl_vars['avai_k']->value = $_smarty_tpl->tpl_vars['avai_v']->key;
?>
													<tr>
														<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['avai_v']->value['room_num'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
														<td><?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%d-%m-%Y');?>
 - <?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%d-%m-%Y');?>
</td>
														<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['avai_v']->value['room_comment'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
														<td>
															<label class="control-label">
																<input type="radio" value="1" name="bk_type_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['avai_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-room="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['avai_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="avai_bk_type" checked>
																<span><?php echo smartyTranslate(array('s'=>'Auto Allotment','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
															</label>
															<label class="control-label">
																<input type="radio" value="2" name="bk_type_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['avai_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-room="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['avai_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="avai_bk_type">
																<span><?php echo smartyTranslate(array('s'=>'Manual Allotment','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
															</label>
															<input type="text" id="comment_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['avai_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="form-control avai_comment">
														</td>
														<td>
															<button type="button" data-id-cart="" data-id-cart-book-data="" data-id-product="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['avai_v']->value['id_product'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-room="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['avai_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-hotel="<?php echo $_smarty_tpl->tpl_vars['avai_v']->value['id_hotel'];?>
" data-date-from="<?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%Y-%m-%d');?>
" data-date-to ="<?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%Y-%m-%d');?>
" class="btn btn-primary avai_add_cart"><?php echo smartyTranslate(array('s'=>'Add To Cart','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</button>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
								<div id="part_room_data_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="tab-pane">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Room No.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th class="text-center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Duration','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th class="text-center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Allotment Type','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th class="text-center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Action','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
												</tr>
											</thead>
											<tbody>
												<?php  $_smarty_tpl->tpl_vars['part_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['part_v']->_loop = false;
 $_smarty_tpl->tpl_vars['part_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['book_v']->value['data']['partially_available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['part_v']->key => $_smarty_tpl->tpl_vars['part_v']->value) {
$_smarty_tpl->tpl_vars['part_v']->_loop = true;
 $_smarty_tpl->tpl_vars['part_k']->value = $_smarty_tpl->tpl_vars['part_v']->key;
?>
													<tr>
														<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['part_v']->value['room_num'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
														<td colspan="3">
															<table class="table">
																<?php  $_smarty_tpl->tpl_vars['sub_part_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_part_v']->_loop = false;
 $_smarty_tpl->tpl_vars['sub_part_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['part_v']->value['avai_dates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_part_v']->key => $_smarty_tpl->tpl_vars['sub_part_v']->value) {
$_smarty_tpl->tpl_vars['sub_part_v']->_loop = true;
 $_smarty_tpl->tpl_vars['sub_part_k']->value = $_smarty_tpl->tpl_vars['sub_part_v']->key;
?>
																	<tr>
																		<td class="text-center">
																			<p><?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sub_part_v']->value['date_from'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%d-%m-%Y');?>
 - <?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sub_part_v']->value['date_to'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%d-%m-%Y');?>
</p>
																		</td>
																		<td class="text-center">
																			<label class="control-label">
																				<input type="radio" value="1" class="par_bk_type" name="bk_type_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['part_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sub_part_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-room="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['part_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-sub-key="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sub_part_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" checked>
																				<span><?php echo smartyTranslate(array('s'=>'Auto Allotment','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
																			</label>
																			<label class="control-label">
																				<input type="radio" value="2" class="par_bk_type" name="bk_type_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['part_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sub_part_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-room="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['part_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-sub-key="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sub_part_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
																				<span><?php echo smartyTranslate(array('s'=>'Manual Allotment','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
																			</label>
																			<input type="text" id="comment_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['part_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sub_part_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="form-control par_comment">
																		</td>
																		<td class="text-center">
																			<button type="button" data-id-cart="" data-id-cart-book-data="" data-id-product="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['part_v']->value['id_product'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-room="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['part_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-hotel="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['part_v']->value['id_hotel'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-date-from="<?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sub_part_v']->value['date_from'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%Y-%m-%d');?>
" data-date-to ="<?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sub_part_v']->value['date_to'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%Y-%m-%d');?>
" data-sub-key="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sub_part_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="btn btn-primary par_add_cart"><?php echo smartyTranslate(array('s'=>'Add To Cart','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</button>
																		</td>
																	</tr>
																<?php } ?>
															</table>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
								<div id="book_room_data_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="tab-pane">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Room No.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th class="text-center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Duration','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th class="text-center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Message','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th class="text-center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Allotment Type','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Reallocate','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
												</tr>
											</thead>
											<tbody>
												<?php  $_smarty_tpl->tpl_vars['booked_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['booked_v']->_loop = false;
 $_smarty_tpl->tpl_vars['booked_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['book_v']->value['data']['booked']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['booked_v']->key => $_smarty_tpl->tpl_vars['booked_v']->value) {
$_smarty_tpl->tpl_vars['booked_v']->_loop = true;
 $_smarty_tpl->tpl_vars['booked_k']->value = $_smarty_tpl->tpl_vars['booked_v']->key;
?>
													<tr>
														<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booked_v']->value['room_num'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
														<td colspan="4">
															<table class="table">
																<?php  $_smarty_tpl->tpl_vars['rm_dtl_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rm_dtl_v']->_loop = false;
 $_smarty_tpl->tpl_vars['rm_dtl_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['booked_v']->value['detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rm_dtl_v']->key => $_smarty_tpl->tpl_vars['rm_dtl_v']->value) {
$_smarty_tpl->tpl_vars['rm_dtl_v']->_loop = true;
 $_smarty_tpl->tpl_vars['rm_dtl_k']->value = $_smarty_tpl->tpl_vars['rm_dtl_v']->key;
?>
																	<tr>
																		<td class="col-xs-3"><?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rm_dtl_v']->value['date_from'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%d-%m-%Y');?>
 - <?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rm_dtl_v']->value['date_to'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%d-%m-%Y');?>
</td>
																		<td class="col-xs-3"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rm_dtl_v']->value['comment'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
																		<td class="col-xs-3">
																			<?php if ($_smarty_tpl->tpl_vars['rm_dtl_v']->value['booking_type']==1) {?><?php echo smartyTranslate(array('s'=>'Auto Allotment','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['rm_dtl_v']->value['booking_type']==2) {?><?php echo smartyTranslate(array('s'=>'Manual Allotment','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php }?>
																		</td>
																		<td>
																			<?php if ($_smarty_tpl->tpl_vars['rm_dtl_v']->value['booking_type']==1) {?>
																				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySwappigModal" data-room_num=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booked_v']->value['room_num'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 data-date_from=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rm_dtl_v']->value['date_from'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 data-date_to=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rm_dtl_v']->value['date_to'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 data-id_room=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booked_v']->value['id_room'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 data-cust_name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rm_dtl_v']->value['alloted_cust_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-cust_email="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rm_dtl_v']->value['alloted_cust_email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-avail_rm_realloc=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['rm_dtl_v']->value['avail_rooms_to_realloc']);?>
 data-avail_rm_swap=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['rm_dtl_v']->value['avail_rooms_to_swap']);?>
>
																					<?php echo smartyTranslate(array('s'=>'Reallocate Room','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

																				</button>
																			<?php } else { ?>
																				--
																			<?php }?>
																		</td>
																	</tr>
																<?php } ?>
															</table>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
								<div id="unavail_room_data_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book_k']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="tab-pane">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Room No.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
													<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Message','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></th>
												</tr>
											</thead>
											<tbody>
												<?php  $_smarty_tpl->tpl_vars['unavai_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unavai_v']->_loop = false;
 $_smarty_tpl->tpl_vars['unavai_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['book_v']->value['data']['unavailable']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unavai_v']->key => $_smarty_tpl->tpl_vars['unavai_v']->value) {
$_smarty_tpl->tpl_vars['unavai_v']->_loop = true;
 $_smarty_tpl->tpl_vars['unavai_k']->value = $_smarty_tpl->tpl_vars['unavai_v']->key;
?>
													<tr>
														<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['unavai_v']->value['room_num'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
														<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['unavai_v']->value['room_comment'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['ajax_delete']->value)) {?>
		</div>
	</div>
</div>
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close margin-right-10" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel"><i class="icon-shopping-cart"></i>&nbsp <?php echo smartyTranslate(array('s'=>'Cart Options','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</h4>
			</div>
			<div class="modal-body">
				<div class="row margin-lr-0">
					<div class="cart_table_container">
						<table class="table table-responsive addtocart-table">
							<thead class="cart-table-thead">
								<tr>
									<th><?php echo smartyTranslate(array('s'=>'Room No.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
									<th><?php echo smartyTranslate(array('s'=>'Room Type','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
									<th><?php echo smartyTranslate(array('s'=>'Duration','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
									<th><?php echo smartyTranslate(array('s'=>'Amount (Tax excl.)','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
									<th></th>
								</tr>
							</thead>
							<tbody class="cart_tbody">
							<?php if (isset($_smarty_tpl->tpl_vars['cart_bdata']->value)) {?>
								<?php  $_smarty_tpl->tpl_vars['cart_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_bdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart_data']->key => $_smarty_tpl->tpl_vars['cart_data']->value) {
$_smarty_tpl->tpl_vars['cart_data']->_loop = true;
?>
									<tr>
										<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart_data']->value['room_num'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
										<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart_data']->value['room_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
										<td>
											<?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart_data']->value['date_from'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%d-%m-%Y');?>
 - <?php echo smarty_modifier_date_format(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart_data']->value['date_to'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'%d-%m-%Y');?>

										</td>
										<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart_data']->value['amt_with_qty']),$_smarty_tpl);?>
</td>
										<td><button class="btn btn-default ajax_cart_delete_data" data-id-product="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart_data']->value['id_product'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-hotel="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart_data']->value['id_hotel'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-cart="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart_data']->value['id_cart'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-cart-book-data="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart_data']->value['id_cart_book_data'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-date-from="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart_data']->value['date_from'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-date-to="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart_data']->value['date_to'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><i class='icon-trash'></i></button></td>
									</tr>
								<?php } ?>
							<?php }?>
							</tbody>
						</table>
					</div>
					<div class="row cart_amt_div">
						<table class="table table-responsive">
							<tr>
								<th colspan="2"><?php echo smartyTranslate(array('s'=>'Total Amount','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
								<th colspan="2" class="text-right" id="cart_total_amt">
									<?php if (isset($_smarty_tpl->tpl_vars['cart_tamount']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart_tamount']->value),$_smarty_tpl);?>
<?php } else { ?>0<?php }?>
								</th>
								<th colspan="1"></th>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders');?>
&amp;addorder&amp;cart_id=<?php echo intval(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id_cart']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
&amp;guest_id=<?php echo intval(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id_guest']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" class="btn btn-primary cart_booking_btn" <?php if (empty($_smarty_tpl->tpl_vars['cart_bdata']->value)) {?>disabled="disabled"<?php }?>>
					<?php echo smartyTranslate(array('s'=>'Book Now','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</a>
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal for reallocation of rooms -->
<div class="modal fade" id="mySwappigModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#reallocate_room_tab" aria-controls="reallocate" role="tab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Room Reallocation','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</a></li>
		    <li role="presentation"><a href="#swap_room_tab" aria-controls="swap" role="tab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Swap Room','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</a></li>
		 </ul>
		<div class="tab-content panel active">
			<div role="tabpanel" class="tab-pane active" id="reallocate_room_tab">
				<form method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['formAction']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="realloc_myModalLabel"><?php echo smartyTranslate(array('s'=>'Reallocate Rooms'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="curr_room_num" class="control-label"><?php echo smartyTranslate(array('s'=>'Current Room Number:','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
							<input type="text" class="form-control modal_curr_room_num" name="modal_curr_room_num" readonly="true">
							<input type="hidden" class="form-control modal_date_from" name="modal_date_from">
							<input type="hidden" class="form-control modal_date_to" name="modal_date_to">
							<input type="hidden" class="form-control modal_id_room" name="modal_id_room">
						</div>
						<div class="form-group">
							<label for="realloc_avail_rooms" class="control-label"><?php echo smartyTranslate(array('s'=>'Available Rooms To Reallocate:','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
							<div style="width: 195px;">
								<select class="form-control" name="realloc_avail_rooms" id="realloc_avail_rooms">
									<option value="0" selected="selected"><?php echo smartyTranslate(array('s'=>'Select Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
								</select>
								<p class="error_text" id="realloc_sel_rm_err_p"></p>
							</div>
						</div>
						<div class="form-group">
							<label style="text-decoration:underline;margin-top:5px;" for="message-text" class="col-sm-12 control-label"><i class="icon-info-circle"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Currently Alloted Customer Information:','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
							<dl class="well list-detail">
								<dt><?php echo smartyTranslate(array('s'=>'Name','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</dt>
								<dd class="cust_name"></dd><br>
								<dt><?php echo smartyTranslate(array('s'=>'Email','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</dt>
								<dd class="cust_email"></dd><br>
							</dl>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>"Close",'mod'=>"hotelreservationsyatem"),$_smarty_tpl);?>
</button>
						<input type="submit" id="realloc_allocated_rooms" name="realloc_allocated_rooms" class="btn btn-primary" value="Reallocate">
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane" id="swap_room_tab">
				<form method="post" action="">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="swap_myModalLabel"><?php echo smartyTranslate(array('s'=>'Swap Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="swap_curr_room_num" class="control-label"><?php echo smartyTranslate(array('s'=>'Current Room Number:','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
							<input type="text" class="form-control modal_curr_room_num" name="modal_curr_room_num" readonly="true">
							<input type="hidden" class="form-control modal_date_from" name="modal_date_from">
							<input type="hidden" class="form-control modal_date_to" name="modal_date_to">
							<input type="hidden" class="form-control modal_id_room" name="modal_id_room">
						</div>
						<div class="form-group">
							<label for="swap_avail_rooms" class="control-label"><?php echo smartyTranslate(array('s'=>'Available Rooms To Swap:','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
							<div style="width: 195px;">
								<select class="form-control" name="swap_avail_rooms" id="swap_avail_rooms">
									<option value="0" selected="selected"><?php echo smartyTranslate(array('s'=>'Select Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
								</select>
								<p class="error_text" id="swap_sel_rm_err_p"></p>
							</div>
						</div>
						<div class="form-group">
							<label style="text-decoration:underline;margin-top:5px;" for="message-text" class="col-sm-12 control-label"><i class="icon-info-circle"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Currently Alloted Customer Information:','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
							<dl class="well list-detail">
								<dt><?php echo smartyTranslate(array('s'=>'Name','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</dt>
								<dd class="cust_name"></dd><br>
								<dt><?php echo smartyTranslate(array('s'=>'Email','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</dt>
								<dd class="cust_email"></dd><br>
							</dl>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>"Close",'mod'=>"hotelreservationsyatem"),$_smarty_tpl);?>
</button>
						<input type="submit" id="swap_allocated_rooms" name="swap_allocated_rooms" class="btn btn-primary" value="Swap">
					</div>
				</form>
			</div>
		</div>
    </div>
  </div>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('rooms_booking_url'=>$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminHotelRoomsBooking')),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'opt_select_all')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'opt_select_all'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'All Types','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'opt_select_all'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'slt_another_htl')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'slt_another_htl'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Select Another Hotel','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'slt_another_htl'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'from_date_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'from_date_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'From date is required','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'from_date_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'to_date_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'to_date_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'To date is required','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'to_date_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'hotel_name_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_name_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Hotel Name is required','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_name_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'num_rooms_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'num_rooms_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Number of Rooms is required','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'num_rooms_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'add_to_cart')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'add_to_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Add To Cart','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'add_to_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'remove')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'remove'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Remove','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'remove'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'noRoomTypeAvlTxt')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'noRoomTypeAvlTxt'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No room type available.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'noRoomTypeAvlTxt'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currency_prefix'=>$_smarty_tpl->tpl_vars['currency']->value->prefix),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currency_suffix'=>$_smarty_tpl->tpl_vars['currency']->value->suffix),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currency_sign'=>$_smarty_tpl->tpl_vars['currency']->value->sign),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currency_format'=>$_smarty_tpl->tpl_vars['currency']->value->format),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currency_blank'=>$_smarty_tpl->tpl_vars['currency']->value->blank),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('booking_calendar_data'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['booking_calendar_data']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('check_css_condition_var'=>$_smarty_tpl->tpl_vars['check_css_condition_var']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('check_calender_var'=>$_smarty_tpl->tpl_vars['check_calender_var']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'no_rm_avail_txt')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'no_rm_avail_txt'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No rooms available.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'no_rm_avail_txt'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'slct_rm_err')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'slct_rm_err'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select a room first.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'slct_rm_err'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>
<script type="text/javascript">

$(document).ready(function()
{
	$('.avai_comment, .par_comment').hide();

    $('.avai_bk_type').on('change', function()
    {
        var id_room = $(this).attr('data-id-room');
        var booking_type = $(this).val();

        if (booking_type == 1)
        {
            $('#comment_'+id_room).hide().val('');
        }
        else if (booking_type == 2)
            $('#comment_'+id_room).show();
    });

    $('.par_bk_type').on('change', function()
    {
        var id_room = $(this).attr('data-id-room');
        var sub_key = $(this).attr('data-sub-key');
        var booking_type = $(this).val();

        if (booking_type == 1)
        {
            $('#comment_'+id_room+'_'+sub_key).hide().val('');
        }
        else if (booking_type == 2)
        {
            $('#comment_'+id_room+'_'+sub_key).show();
        }
    });
});

</script>

<?php }} ?>
