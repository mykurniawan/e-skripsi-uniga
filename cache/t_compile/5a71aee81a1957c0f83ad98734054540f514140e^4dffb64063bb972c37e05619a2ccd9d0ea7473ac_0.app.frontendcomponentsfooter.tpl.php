<?php
/* Smarty version 4.5.5, created on 2025-11-04 13:45:24
  from 'app:frontendcomponentsfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6909a1043c5e87_44665162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.tpl',
      1 => 1761796461,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/sidebar.tpl' => 1,
  ),
),false)) {
function content_6909a1043c5e87_44665162 (Smarty_Internal_Template $_smarty_tpl) {
?>      </div>
    </article>
	</main><!-- _pkp_structure_main -->

  <?php if ($_smarty_tpl->tpl_vars['requestedPage']->value !== 'login' && $_smarty_tpl->tpl_vars['requestedPage']->value !== 'user') {?>
    <div class="hidden xl:sticky xl:top-[4.75rem] xl:-mr-6 xl:block xl:h-[calc(100vh-4.75rem)] xl:flex-none overflow-y-auto overflow-x-hidden xl:py-16 xl:pr-6 scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200 dark:scrollbar-thumb-gray-600 dark:scrollbar-track-gray-800">
      <nav aria-labelledby="on-this-page-title" class="w-56">
        <!--h2 id="on-this-page-title" class="font-display text-sm font-medium text-slate-900 dark:text-white">On this page</h2-->

        <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </nav>
    </div>
  <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['requestedPage']->value !== 'login' && $_smarty_tpl->tpl_vars['requestedPage']->value !== 'user') {?>
  <!-- ======= Footer ======= -->
  <footer class="footer bg-slate-50 py-5 bottom-0 text-slate-400 dark:bg-transparent" role="contentinfo">
    <div class="w-full justify-center items-center text-center px-4">
      <?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
        <div class="py-5 text-slate-500 dark:text-slate-400">
            <?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

        </div>
      <?php }?>
      <div class="text-sm">
        <p class="copyright">&copy; Platform & Workflow by: <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about",'op'=>"aboutThisPublishingSystem"),$_smarty_tpl ) );?>
" class="hover:text-slate-500">Open Journal Systems</a></p>
        <div class="credits">
          Designed by <a href="https://github.com/madi-nuralin/material" class="hover:text-slate-500">Material Theme</a>
        </div>
      </div>
    </div>
  </footer>
<?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>


</body>
</html>
<?php }
}
