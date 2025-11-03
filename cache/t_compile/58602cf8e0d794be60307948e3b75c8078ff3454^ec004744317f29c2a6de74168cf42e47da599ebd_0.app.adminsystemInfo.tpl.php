<?php
/* Smarty version 4.5.5, created on 2025-11-03 10:21:24
  from 'app:adminsystemInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69081fb43b0fe6_37513844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec004744317f29c2a6de74168cf42e47da599ebd' => 
    array (
      0 => 'app:adminsystemInfo.tpl',
      1 => 1752100232,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69081fb43b0fe6_37513844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120300332769081fb4393e20_76374386', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_120300332769081fb4393e20_76374386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_120300332769081fb4393e20_76374386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemInformation"),$_smarty_tpl ) );?>

	</h1>

	<?php if ($_smarty_tpl->tpl_vars['newVersionAvailable']->value) {?>
		<notification>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"site.upgradeAvailable.admin",'currentVersion'=>$_smarty_tpl->tpl_vars['currentVersion']->value->getVersionString(false),'latestVersion'=>$_smarty_tpl->tpl_vars['latestVersion']->value),$_smarty_tpl ) );?>

		</notification>
	<?php }?>

	<div class="app__contentPanel">

		<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.currentVersion"),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['currentVersion']->value->getVersionString(false);?>
 (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date_format' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentVersion']->value->getDateInstalled(),$_smarty_tpl->tpl_vars['datetimeFormatLong']->value ));?>
)</h2>

		<?php if ($_smarty_tpl->tpl_vars['latestVersionInfo']->value) {?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.latest"),$_smarty_tpl ) );?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['release'] ));?>
 (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date_format' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['date'],$_smarty_tpl->tpl_vars['dateFormatLong']->value ));?>
)</p>
			<?php if ($_smarty_tpl->tpl_vars['currentVersion']->value->compare($_smarty_tpl->tpl_vars['latestVersionInfo']->value['version']) < 0) {?>
				<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.updateAvailable"),$_smarty_tpl ) );?>
</strong>: <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['package'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.downloadPackage"),$_smarty_tpl ) );?>
</a> | <?php if ($_smarty_tpl->tpl_vars['latestVersionInfo']->value['patch']) {?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['patch'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.downloadPatch"),$_smarty_tpl ) );?>
</a><?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.downloadPatch"),$_smarty_tpl ) );
}?> | <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['info'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.moreInfo"),$_smarty_tpl ) );?>
</a></p>
			<?php } else { ?>
				<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.upToDate"),$_smarty_tpl ) );?>
</strong></p>
			<?php }?>
		<?php } else { ?>
		<p><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('versionCheck'=>1),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.checkForUpdates"),$_smarty_tpl ) );?>
</a></p>
		<?php }?>

		<h2 id="versionHistory" class="mt-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.versionHistory"),$_smarty_tpl ) );?>
</h2>

		<pkp-table labelled-by="versionHistory">
			<pkp-table-header>
				<pkp-table-column><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version"),$_smarty_tpl ) );?>
</pkp-table-column>
				<pkp-table-column><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.versionMajor"),$_smarty_tpl ) );?>
</pkp-table-column>
				<pkp-table-column><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.versionMinor"),$_smarty_tpl ) );?>
</pkp-table-column>
				<pkp-table-column><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.versionRevision"),$_smarty_tpl ) );?>
</pkp-table-column>
				<pkp-table-column><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.versionBuild"),$_smarty_tpl ) );?>
</pkp-table-column>
				<pkp-table-column><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.dateInstalled"),$_smarty_tpl ) );?>
</pkp-table-column>
			</pkp-table-header>
			<pkp-table-body>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versionHistory']->value, 'version');
$_smarty_tpl->tpl_vars['version']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['version']->value) {
$_smarty_tpl->tpl_vars['version']->do_else = false;
?>
					<pkp-table-row>
						<pkp-table-cell><?php echo $_smarty_tpl->tpl_vars['version']->value->getVersionString(false);?>
</pkp-table-cell>
						<pkp-table-cell><?php echo $_smarty_tpl->tpl_vars['version']->value->getMajor();?>
</pkp-table-cell>
						<pkp-table-cell><?php echo $_smarty_tpl->tpl_vars['version']->value->getMinor();?>
</pkp-table-cell>
						<pkp-table-cell><?php echo $_smarty_tpl->tpl_vars['version']->value->getRevision();?>
</pkp-table-cell>
						<pkp-table-cell><?php echo $_smarty_tpl->tpl_vars['version']->value->getBuild();?>
</pkp-table-cell>
						<pkp-table-cell><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date_format' ][ 0 ], array( $_smarty_tpl->tpl_vars['version']->value->getDateInstalled(),$_smarty_tpl->tpl_vars['dateFormatShort']->value ));?>
</pkp-table-cell>
					</pkp-table-row>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</pkp-table-body>
		</pkp-table>

		<h2 id="serverInformation" class="mt-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.serverInformation"),$_smarty_tpl ) );?>
</h2>

		<pkp-table labelled-by="serverInformation">
			<pkp-table-header>
				<pkp-table-column><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemInfo.settingName"),$_smarty_tpl ) );?>
</pkp-table-column>
				<pkp-table-column><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemInfo.settingValue"),$_smarty_tpl ) );?>
</pkp-table-column>
			</pkp-table-header>
			<pkp-table-body>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['serverInfo']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
					<pkp-table-row>
						<pkp-table-cell><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl ) );?>
</pkp-table-cell>
						<pkp-table-cell><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value ));?>
</pkp-table-cell>
					</pkp-table-row>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</pkp-table-body>
		</pkp-table>

		<h2 id="systemConfiguration<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="mt-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemConfiguration"),$_smarty_tpl ) );?>
</h2>

		<pkp-table labelled-by="systemConfiguration<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
			<pkp-table-header>
				<pkp-table-column><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemInfo.settingName"),$_smarty_tpl ) );?>
</pkp-table-column>
				<pkp-table-column><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemInfo.settingValue"),$_smarty_tpl ) );?>
</pkp-table-column>
			</pkp-table-header>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configData']->value, 'settings', false, 'category');
$_smarty_tpl->tpl_vars['settings']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['settings']->value) {
$_smarty_tpl->tpl_vars['settings']->do_else = false;
?>
				<pkp-table-body>
					<pkp-table-row>
						<pkp-table-cell colspan="2" class="app--admin__systemInfoGroup"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</pkp-table-cell>
					</pkp-table-row>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
						<pkp-table-row>
							<pkp-table-cell><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
</pkp-table-cell>
							<?php if (\PKP\config\Config::isSensitive($_smarty_tpl->tpl_vars['category']->value,$_smarty_tpl->tpl_vars['name']->value)) {?>
								<pkp-table-cell>**************</pkp-table-cell>
							<?php } else { ?>
								<pkp-table-cell><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value ));?>
</pkp-table-cell>
							<?php }?>
						</pkp-table-row>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</pkp-table-body>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</pkp-table>


		<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"phpinfo"),$_smarty_tpl ) );?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.phpInfo"),$_smarty_tpl ) );?>
</a>
	</div><!-- .pkp_page_content -->
<?php
}
}
/* {/block "page"} */
}
