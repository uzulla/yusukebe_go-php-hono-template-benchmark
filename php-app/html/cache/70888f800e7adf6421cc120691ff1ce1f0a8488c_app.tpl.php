<?php
/* Smarty version 5.3.1, created on 2024-06-23 15:41:37
  from 'file:app.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66784231b52c65_60154568',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '70888f800e7adf6421cc120691ff1ce1f0a8488c' => 
    array (
      0 => 'app.tpl',
      1 => 1719117658,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
))) {
function content_66784231b52c65_60154568 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/usr/share/nginx/html';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'foo');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('foo')->value) {
$foreach0DoElse = false;
?><li><?php echo $_smarty_tpl->getValue('foo');?>
</li><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
