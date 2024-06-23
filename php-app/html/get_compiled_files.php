<?php
echo '<pre>';

$status = opcache_get_status(true);
$compiled_files = array_column($status['scripts'], 'full_path');
print_r($compiled_files);

echo "[\"";
echo implode("\",\n\"", $compiled_files);
echo "\"]";

var_dump($status);
