<?php /* Smarty version Smarty-3.1.19, created on 2020-01-28 16:33:46
         compiled from "/home/tilbae/Projects/hotelcommerce/modules/blocknavigationmenu/views/templates/hook/navigationMenuBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13001164845e2ff1eaaef0d7-16591445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf07a0f7589bdb4cb503868d93e71647da8c105' => 
    array (
      0 => '/home/tilbae/Projects/hotelcommerce/modules/blocknavigationmenu/views/templates/hook/navigationMenuBlock.tpl',
      1 => 1580196142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13001164845e2ff1eaaef0d7-16591445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation_links' => 0,
    'navigationLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e2ff1eabb92b7_67843372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2ff1eabb92b7_67843372')) {function content_5e2ff1eabb92b7_67843372($_smarty_tpl) {?>

<div class="pull-right clearfix nav_menu_padding">
	<button type="button" class="nav_toggle">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
</div>

<div id="menu_cont" class="menu_cont_right">
	<div class="row margin-lr-0">
		<div class="col-xs-12 col-sm-12">
			<div class="row margin-lr-0">
				<span class="pull-right close_navbar"><i class="icon-close"></i></span>
			</div>
			<div class="row">
				<ul class="nav nav-pills nav-stacked wk-nav-style">
					<?php if (isset($_smarty_tpl->tpl_vars['navigation_links']->value)&&$_smarty_tpl->tpl_vars['navigation_links']->value) {?>
						<?php  $_smarty_tpl->tpl_vars['navigationLink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navigationLink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navigationLink']->key => $_smarty_tpl->tpl_vars['navigationLink']->value) {
$_smarty_tpl->tpl_vars['navigationLink']->_loop = true;
?>
							<li>
								<a class="navigation-link" href="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
</a>
							</li>
						<?php } ?>
					<?php }?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayDefaultNavigationHook"),$_smarty_tpl);?>

				</ul>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayExternalNavigationHook"),$_smarty_tpl);?>

			</div>
		</div>
	</div>
</div><?php }} ?>
