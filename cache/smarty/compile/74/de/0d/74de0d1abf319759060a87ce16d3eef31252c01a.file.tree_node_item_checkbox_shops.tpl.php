<?php /* Smarty version Smarty-3.1.19, created on 2014-10-11 09:47:02
         compiled from "C:\wamp\www\prestashop\admin\themes\default\template\helpers\tree\tree_node_item_checkbox_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186465438fc967c6b32-81979144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74de0d1abf319759060a87ce16d3eef31252c01a' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item_checkbox_shops.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186465438fc967c6b32-81979144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'table' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5438fc968949d1_61793268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5438fc968949d1_61793268')) {function content_5438fc968949d1_61793268($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<label class="tree-item-name">
		<input type="checkbox" name="checkBoxShopAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>
