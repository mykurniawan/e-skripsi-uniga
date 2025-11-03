<?php
/* Smarty version 4.5.5, created on 2025-11-03 10:20:52
  from 'app:frontendcomponentsnavigationMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69081f94e88d83_41868060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc18a7bbca2985eb7be7cdb004989925d5981ed' => 
    array (
      0 => 'app:frontendcomponentsnavigationMenu.tpl',
      1 => 1761796461,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/navigationMenuPrimary.tpl' => 1,
    'app:frontend/components/navigationMenuUser.tpl' => 1,
  ),
),false)) {
function content_69081f94e88d83_41868060 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['navigationMenu']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['id']->value == "navigationPrimary") {?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/navigationMenuPrimary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'ulClass'=>$_smarty_tpl->tpl_vars['ulClass']->value,'liClass'=>$_smarty_tpl->tpl_vars['liClass']->value,'navigationMenu'=>$_smarty_tpl->tpl_vars['navigationMenu']->value), 0, false);
?>
	<?php } elseif ($_smarty_tpl->tpl_vars['id']->value == "navigationUser") {?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/navigationMenuUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'ulClass'=>$_smarty_tpl->tpl_vars['ulClass']->value,'liClass'=>$_smarty_tpl->tpl_vars['liClass']->value,'navigationMenu'=>$_smarty_tpl->tpl_vars['navigationMenu']->value), 0, false);
?>
	<?php }
}
}
}
