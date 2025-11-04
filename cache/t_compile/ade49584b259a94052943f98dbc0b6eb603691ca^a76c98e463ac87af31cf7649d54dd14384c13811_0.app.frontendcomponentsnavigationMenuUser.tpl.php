<?php
/* Smarty version 4.5.5, created on 2025-11-04 13:45:26
  from 'app:frontendcomponentsnavigationMenuUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6909a106341b40_16659558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a76c98e463ac87af31cf7649d54dd14384c13811' => 
    array (
      0 => 'app:frontendcomponentsnavigationMenuUser.tpl',
      1 => 1761796461,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6909a106341b40_16659558 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
" role="list" class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ulClass']->value ));?>
 md:flex hidden space-x-2">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigationMenu']->value->menuTree, 'navigationMenuItemAssignment', false, 'field');
$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value) {
$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->do_else = false;
?>
		<?php if (!$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getIsDisplayed()) {?>
			<?php continue 1;?>
		<?php }?>
		<li class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['liClass']->value ));?>
">
			<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_dropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_dropdown'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyMaterialDropdown'))) {
throw new SmartyException('block tag \'material_dropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_dropdown', array());
$_block_repeat=true;
echo $_block_plugin3->smartyMaterialDropdown(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_dropdown_trigger'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_dropdown_trigger'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyMaterialDropdownTrigger'))) {
throw new SmartyException('block tag \'material_dropdown_trigger\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_dropdown_trigger', array('url'=>((string)$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getUrl())));
$_block_repeat=true;
echo $_block_plugin4->smartyMaterialDropdownTrigger(array('url'=>((string)$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getUrl())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getLocalizedTitle();?>

				<?php $_block_repeat=false;
echo $_block_plugin4->smartyMaterialDropdownTrigger(array('url'=>((string)$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getUrl())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php if ($_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getIsChildVisible()) {?>
					<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_dropdown_body'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_dropdown_body'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyMaterialDropdownBody'))) {
throw new SmartyException('block tag \'material_dropdown_body\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_dropdown_body', array());
$_block_repeat=true;
echo $_block_plugin5->smartyMaterialDropdownBody(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->children, 'childNavigationMenuItemAssignment', false, 'childField');
$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childField']->value => $_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value) {
$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getIsDisplayed()) {?>
								<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['liClass']->value ));
$_prefixVariable2=ob_get_clean();
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_dropdown_item'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_dropdown_item'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyMaterialDropdownItem'))) {
throw new SmartyException('block tag \'material_dropdown_item\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_dropdown_item', array('url'=>((string)$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getUrl()),'class'=>$_prefixVariable2));
$_block_repeat=true;
echo $_block_plugin6->smartyMaterialDropdownItem(array('url'=>((string)$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getUrl()),'class'=>$_prefixVariable2), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
									<?php echo $_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getLocalizedTitle();?>

								<?php $_block_repeat=false;
echo $_block_plugin6->smartyMaterialDropdownItem(array('url'=>((string)$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getUrl()),'class'=>$_prefixVariable2), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php $_block_repeat=false;
echo $_block_plugin5->smartyMaterialDropdownBody(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>
			<?php $_block_repeat=false;
echo $_block_plugin3->smartyMaterialDropdown(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ulClass']->value ));
$_prefixVariable3=ob_get_clean();
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_menu'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_menu'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyMaterialMenu'))) {
throw new SmartyException('block tag \'material_menu\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_menu', array('class'=>$_prefixVariable3." md:hidden"));
$_block_repeat=true;
echo $_block_plugin7->smartyMaterialMenu(array('class'=>$_prefixVariable3." md:hidden"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigationMenu']->value->menuTree, 'navigationMenuItemAssignment', false, 'field');
$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value) {
$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->do_else = false;
?>
		<?php if (!$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getIsDisplayed()) {?>
			<?php continue 1;?>
		<?php }?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['liClass']->value ));
$_prefixVariable4=ob_get_clean();
$_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_menu_item'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_menu_item'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyMaterialMenuItem'))) {
throw new SmartyException('block tag \'material_menu_item\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_menu_item', array('class'=>$_prefixVariable4));
$_block_repeat=true;
echo $_block_plugin8->smartyMaterialMenuItem(array('class'=>$_prefixVariable4), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_menu_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_menu_link'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyMaterialMenuLink'))) {
throw new SmartyException('block tag \'material_menu_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_menu_link', array('url'=>((string)$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getUrl())));
$_block_repeat=true;
echo $_block_plugin9->smartyMaterialMenuLink(array('url'=>((string)$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getUrl())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getLocalizedTitle();?>

			<?php $_block_repeat=false;
echo $_block_plugin9->smartyMaterialMenuLink(array('url'=>((string)$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getUrl())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php if ($_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getIsChildVisible()) {?>
				<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_submenu'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_submenu'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyMaterialSubmenu'))) {
throw new SmartyException('block tag \'material_submenu\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_submenu', array());
$_block_repeat=true;
echo $_block_plugin10->smartyMaterialSubmenu(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->children, 'childNavigationMenuItemAssignment', false, 'childField');
$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childField']->value => $_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value) {
$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getIsDisplayed()) {?>
							<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['liClass']->value ));
$_prefixVariable5=ob_get_clean();
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_submenu_item'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_submenu_item'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyMaterialSubmenuItem'))) {
throw new SmartyException('block tag \'material_submenu_item\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_submenu_item', array('class'=>$_prefixVariable5));
$_block_repeat=true;
echo $_block_plugin11->smartyMaterialSubmenuItem(array('class'=>$_prefixVariable5), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_submenu_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_submenu_link'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyMaterialSubmenuLink'))) {
throw new SmartyException('block tag \'material_submenu_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_submenu_link', array('url'=>((string)$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getUrl())));
$_block_repeat=true;
echo $_block_plugin12->smartyMaterialSubmenuLink(array('url'=>((string)$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getUrl())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
									<?php echo $_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getLocalizedTitle();?>

								<?php $_block_repeat=false;
echo $_block_plugin12->smartyMaterialSubmenuLink(array('url'=>((string)$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getUrl())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
							<?php $_block_repeat=false;
echo $_block_plugin11->smartyMaterialSubmenuItem(array('class'=>$_prefixVariable5), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php $_block_repeat=false;
echo $_block_plugin10->smartyMaterialSubmenu(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>
		<?php $_block_repeat=false;
echo $_block_plugin8->smartyMaterialMenuItem(array('class'=>$_prefixVariable4), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin7->smartyMaterialMenu(array('class'=>$_prefixVariable3." md:hidden"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
