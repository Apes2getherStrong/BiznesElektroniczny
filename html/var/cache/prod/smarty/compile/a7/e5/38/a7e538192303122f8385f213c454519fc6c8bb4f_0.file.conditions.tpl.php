<?php
/* Smarty version 3.1.48, created on 2023-11-21 17:08:24
  from '/var/www/html/admin1/themes/default/template/controllers/cart_rules/conditions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_655cd5f8cf2d58_78242944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7e538192303122f8385f213c454519fc6c8bb4f' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/controllers/cart_rules/conditions.tpl',
      1 => 1700573886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655cd5f8cf2d58_78242944 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
			title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional: The cart rule will be available to everyone if you leave this field blank.','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limit to a single customer','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

		</span>
	</label>
	<div class="col-lg-9">
		<div class="input-group col-lg-12">
			<span class="input-group-addon"><i class="icon-user"></i></span>
			<input type="hidden" id="id_customer" name="id_customer" value="<?php echo intval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'id_customer'));?>
" />
			<input type="text" id="customerFilter" class="input-xlarge" name="customerFilter" value="<?php if ($_smarty_tpl->tpl_vars['customerFilter']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customerFilter']->value,'html','UTF-8' ));
} elseif ((isset($_POST['customerFilter']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['customerFilter'] ));
}?>" />
			<span class="input-group-addon"><i class="icon-search"></i></span>
		</div>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
			title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The default period is one month.','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valid','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

		</span>
	</label>
	<div class="col-lg-9">
		<div class="row">
			<div class="col-lg-6">
				<div class="input-group">
					<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
					<input type="text" class="datepicker input-medium" name="date_from"
					value="<?php if ($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'date_from')) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'date_from') ));
} else {
echo $_smarty_tpl->tpl_vars['defaultDateFrom']->value;
}?>" />
					<span class="input-group-addon"><i class="icon-calendar-empty"></i></span>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="input-group">
					<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
					<input type="text" class="datepicker input-medium" name="date_to"
					value="<?php if ($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'date_to')) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'date_to') ));
} else {
echo $_smarty_tpl->tpl_vars['defaultDateTo']->value;
}?>" />
					<span class="input-group-addon"><i class="icon-calendar-empty"></i></span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
			title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can choose a minimum amount for the cart either with or without the taxes and shipping.','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minimum amount','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

		</span>
	</label>
	<div class="col-lg-9">
		<div class="row">
			<div class="col-lg-3">
				<input type="text" name="minimum_amount" value="<?php echo floatval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'minimum_amount'));?>
" />
			</div>
			<div class="col-lg-2">
				<select name="minimum_amount_currency">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
					<option value="<?php echo intval($_smarty_tpl->tpl_vars['currency']->value['id_currency']);?>
"
					<?php if ($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'minimum_amount_currency') == $_smarty_tpl->tpl_vars['currency']->value['id_currency'] || (!$_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'minimum_amount_currency') && $_smarty_tpl->tpl_vars['currency']->value['id_currency'] == $_smarty_tpl->tpl_vars['defaultCurrency']->value)) {?>
						selected="selected"
					<?php }?>
					>
						<?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>

					</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<div class="col-lg-3">
				<select name="minimum_amount_tax">
					<option value="0" <?php if ($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'minimum_amount_tax') == 0) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'minimum_amount_tax') == 1) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
				</select>
			</div>
			<div class="col-lg-4">
				<select name="minimum_amount_shipping">
					<option value="0" <?php if ($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'minimum_amount_shipping') == 0) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping excluded','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'minimum_amount_shipping') == 1) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping included','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
			title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The cart rule will be applied to the first "X" customers only.','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total available','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

		</span>
	</label>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="quantity" value="<?php echo intval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'quantity'));?>
" />
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
			title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A customer will only be able to use the cart rule "X" time(s).','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total available for each user','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

		</span>
	</label>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="quantity_per_user" value="<?php echo intval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'quantity_per_user'));?>
" />
	</div>
</div>



<div class="form-group">
	<label class="control-label col-lg-3">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Restrictions','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

	</label>
	<div class="col-lg-9">
		<?php if ((count($_smarty_tpl->tpl_vars['countries']->value['unselected']))+(count($_smarty_tpl->tpl_vars['countries']->value['selected'])) > 1) {?>
			<p class="checkbox">
				<label>
					<input type="checkbox" id="country_restriction" name="country_restriction" value="1" <?php if (count($_smarty_tpl->tpl_vars['countries']->value['unselected'])) {?>checked="checked"<?php }?> />
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country selection','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

				</label>
			</p>
			<span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This restriction applies to the country of delivery.','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
</span>
			<div id="country_restriction_div">
				<br />
				<table class="table">
					<tr>
						<td>
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unselected countries','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</p>
							<select id="country_select_1" multiple>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value['unselected'], 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
									<option value="<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['country']->value['name'] ));?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<a id="country_select_add" class="btn  btn-default btn-block clearfix"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
 <i class="icon-arrow-right"></i></a>
						</td>
						<td>
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected countries','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</p>
							<select name="country_select[]" id="country_select_2" class="input-large" multiple>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value['selected'], 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
									<option value="<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['country']->value['name'] ));?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<a id="country_select_remove" class="btn btn-default btn-block clearfix"><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
 </a>
						</td>
					</tr>
				</table>
			</div>
		<?php }?>

		<?php if ((count($_smarty_tpl->tpl_vars['carriers']->value['unselected']))+(count($_smarty_tpl->tpl_vars['carriers']->value['selected'])) > 1) {?>
			<p class="checkbox">
				<label>
					<input type="checkbox" id="carrier_restriction" name="carrier_restriction" value="1" <?php if (count($_smarty_tpl->tpl_vars['carriers']->value['unselected'])) {?>checked="checked"<?php }?> />
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier selection','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

				</label>
			</p>
			<div id="carrier_restriction_div">
				<br />
				<table class="table">
					<tr>
						<td>
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unselected carriers','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</p>
							<select id="carrier_select_1" class="input-large" multiple>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value['unselected'], 'carrier');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
									<option value="<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_reference']);?>
">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carrier']->value['name'] ));?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<a id="carrier_select_add" class="btn btn-default btn-block clearfix" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
 <i class="icon-arrow-right"></i></a>
						</td>
						<td>
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected carriers','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</p>
							<select name="carrier_select[]" id="carrier_select_2" class="input-large" multiple>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value['selected'], 'carrier');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
									<option value="<?php echo intval($_smarty_tpl->tpl_vars['carrier']->value['id_reference']);?>
">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carrier']->value['name'] ));?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<a id="carrier_select_remove" class="btn btn-default btn-block clearfix"><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
 </a>
						</td>
					</tr>
				</table>
			</div>
		<?php }?>

		<?php if ((count($_smarty_tpl->tpl_vars['groups']->value['unselected']))+(count($_smarty_tpl->tpl_vars['groups']->value['selected'])) > 1) {?>
			<p class="checkbox">
				<label>
					<input type="checkbox" id="group_restriction" name="group_restriction" value="1" <?php if (count($_smarty_tpl->tpl_vars['groups']->value['unselected'])) {?>checked="checked"<?php }?> />
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer group selection','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

				</label>
			</p>
			<div id="group_restriction_div">
				<br />
				<table class="table">
					<tr>
						<td>
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unselected groups','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</p>
							<select id="group_select_1" class="input-large" multiple>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value['unselected'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
									<option value="<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_group']);?>
">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['name'] ));?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<a id="group_select_add" class="btn btn-default btn-block clearfix" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
 <i class="icon-arrow-right"></i></a>
						</td>
						<td>
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected groups','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</p>
							<select name="group_select[]" class="input-large" id="group_select_2" multiple>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value['selected'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
									<option value="<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_group']);?>
">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['name'] ));?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<a id="group_select_remove" class="btn btn-default btn-block clearfix" ><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a>
						</td>
					</tr>
				</table>
			</div>
		<?php }?>

		<?php if ((count($_smarty_tpl->tpl_vars['cart_rules']->value['unselected']))+(count($_smarty_tpl->tpl_vars['cart_rules']->value['selected'])) > 0) {?>
			<p class="checkbox">
				<label>
					<input type="checkbox" id="cart_rule_restriction" name="cart_rule_restriction" value="1" <?php if (count($_smarty_tpl->tpl_vars['cart_rules']->value['unselected'])) {?>checked="checked"<?php }?> />
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compatibility with other cart rules','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

				</label>
			</p>
			<div id="cart_rule_restriction_div">
				<br />
				<table  class="table">
					<tr>
						<td>
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uncombinable cart rules','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</p>
							<input id="cart_rule_select_1_filter" autocomplete="off" class="form-control uncombinable_search_filter" type="text" name="uncombinable_filter" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
" value="">
							<select id="cart_rule_select_1" class="jscroll" multiple="">
							</select>
							<a class="jscroll-next btn btn-default btn-block clearfix" href=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</a>
							<a id="cart_rule_select_add" class="btn btn-default btn-block clearfix"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
 <i class="icon-arrow-right"></i></a>
						</td>
						<td>
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Combinable cart rules','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</p>
							<input id="cart_rule_select_2_filter" autocomplete="off" class="form-control combinable_search_filter" type="text" name="combinable_filter" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
" value="">
							<select name="cart_rule_select[]" class="jscroll" id="cart_rule_select_2" multiple>
							</select>
							<a class="jscroll-next btn btn-default btn-block clearfix" href=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</a>
							<a id="cart_rule_select_remove" class="btn btn-default btn-block clearfix" ><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a>
						</td>
					</tr>
				</table>
			</div>
		<?php }?>

			<p class="checkbox">
				<label>
					<input type="checkbox" id="product_restriction" name="product_restriction" value="1" <?php if (count($_smarty_tpl->tpl_vars['product_rule_groups']->value)) {?>checked="checked"<?php }?> />
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product selection','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

				</label>
			</p>
			<div id="product_restriction_div">
				<br />
				<table id="product_rule_group_table" class="table">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_rule_groups']->value, 'product_rule_group');
$_smarty_tpl->tpl_vars['product_rule_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_rule_group']->value) {
$_smarty_tpl->tpl_vars['product_rule_group']->do_else = false;
?>
						<?php echo $_smarty_tpl->tpl_vars['product_rule_group']->value;?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</table>
				<a href="javascript:addProductRuleGroup();" class="btn btn-default ">
					<i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product selection','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

				</a>
			</div>

		<?php if ((count($_smarty_tpl->tpl_vars['shops']->value['unselected']))+(count($_smarty_tpl->tpl_vars['shops']->value['selected'])) > 1) {?>
			<p class="checkbox">
				<label>
					<input type="checkbox" id="shop_restriction" name="shop_restriction" value="1" <?php if (count($_smarty_tpl->tpl_vars['shops']->value['unselected'])) {?>checked="checked"<?php }?> />
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop selection','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>

				</label>
			</p>
			<div id="shop_restriction_div">
				<br/>
				<table class="table">
					<tr>
						<td>
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unselected shops','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</p>
							<select id="shop_select_1" multiple>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value['unselected'], 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
									<option value="<?php echo intval($_smarty_tpl->tpl_vars['shop']->value['id_shop']);?>
">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'] ));?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<a id="shop_select_add" class="btn btn-default btn-block clearfix" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
 <i class="icon-arrow-right"></i></a>
						</td>
						<td>
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected shops','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</p>
							<select name="shop_select[]" id="shop_select_2" multiple>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value['selected'], 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
									<option value="<?php echo intval($_smarty_tpl->tpl_vars['shop']->value['id_shop']);?>
">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'] ));?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<a id="shop_select_remove" class="btn btn-default btn-block clearfix" ><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a>
						</td>
					</tr>
				</table>
			</div>
		<?php }?>
	</div>
</div>
<?php }
}
