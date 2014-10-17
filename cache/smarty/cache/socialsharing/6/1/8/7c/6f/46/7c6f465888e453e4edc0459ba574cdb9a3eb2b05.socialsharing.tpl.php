<?php /*%%SmartyHeaderCode:15202543cb89ac62086-19776460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c6f465888e453e4edc0459ba574cdb9a3eb2b05' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1406810560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15202543cb89ac62086-19776460',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543ce6b8c50fa7_86821901',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543ce6b8c50fa7_86821901')) {function content_543ce6b8c50fa7_86821901($_smarty_tpl) {?>	<p class="socialsharing_product list-inline no-print">
					<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('Robe d\&#039;été imprimée http://127.0.0.1/prestashop/index.php?id_product=6&controller=product');">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="http://127.0.0.1/prestashop/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> Partager
				<!-- <img src="http://127.0.0.1/prestashop/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://127.0.0.1/prestashop/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
					</p>
<?php }} ?>
