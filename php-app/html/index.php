<html><body><ul>
<?php
require_once('/app/vendor/smarty/smarty/libs/Smarty.class.php');
$smarty = new Smarty\Smarty();
$smarty->setCompileDir('/tmp');

$smarty->caching = Smarty\Smarty::CACHING_LIFETIME_SAVED;
$smarty->cache_lifetime = 3600; // 1 hour
$smarty->compile_check = false;
$smarty->force_compile = false;

$data = [];
for ($i = 0; $i < 1000; $i++) {
    $data[] = "ほげ";
}
$smarty->assign('data', $data, true);
$smarty->display("app.tpl");
?></ul></body></html>
