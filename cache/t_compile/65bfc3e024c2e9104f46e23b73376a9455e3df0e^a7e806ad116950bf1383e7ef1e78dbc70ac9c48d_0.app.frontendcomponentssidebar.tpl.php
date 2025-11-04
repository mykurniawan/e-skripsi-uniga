<?php
/* Smarty version 4.5.5, created on 2025-11-04 13:45:26
  from 'app:frontendcomponentssidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6909a1062dfe40_90673940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7e806ad116950bf1383e7ef1e78dbc70ac9c48d' => 
    array (
      0 => 'app:frontendcomponentssidebar.tpl',
      1 => 1761796461,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6909a1062dfe40_90673940 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
    <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));
$_prefixVariable1=ob_get_clean();
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['material_menu'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['material_menu'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyMaterialMenu'))) {
throw new SmartyException('block tag \'material_menu\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('material_menu', array('aria-label'=>$_prefixVariable1));
$_block_repeat=true;
echo $_block_plugin2->smartyMaterialMenu(array('aria-label'=>$_prefixVariable1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
      <?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>

    <?php $_block_repeat=false;
echo $_block_plugin2->smartyMaterialMenu(array('aria-label'=>$_prefixVariable1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><!-- pkp_sidebar.left -->
  <?php }
}
}
}
