<?php
/* Smarty version 4.5.5, created on 2025-11-04 13:45:24
  from 'app:frontendcomponentsbreadcrumbs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6909a1043bd198_24423107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a10722600ebbc8779bdec4d1016d43fd016d5a0d' => 
    array (
      0 => 'app:frontendcomponentsbreadcrumbs.tpl',
      1 => 1761796461,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6909a1043bd198_24423107 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="text-slate-500" role="navigation">
	<ol class="not-prose flex space-x-1 list-none overflow-none">
		<li class="truncate">
			<a class="hover:text-slate-700 dark:hover:text-slate-400" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>\PKP\core\PKPApplication::ROUTE_PAGE),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.homepageNavigationLabel"),$_smarty_tpl ) );?>

			</a>
			<span class="separator">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbSeparator"),$_smarty_tpl ) );?>

			</span>
		</li>
		<li class="current text-<?php echo $_smarty_tpl->tpl_vars['activeTheme']->value->getOption('baseColour');?>
-500 truncate">
			<span aria-current="page">
				<?php if ($_smarty_tpl->tpl_vars['currentTitleKey']->value) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['currentTitleKey']->value),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTitle']->value ));?>

				<?php }?>
			</span>
		</li>
	</ol>
</nav>

<?php }
}
