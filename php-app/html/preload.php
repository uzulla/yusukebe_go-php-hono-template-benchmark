<?php

$pre_compile_files = ["/app/vendor/smarty/smarty/src/Cacheresource/Base.php",
"/app/vendor/smarty/smarty/src/Template.php",
"/app/vendor/smarty/smarty/src/Extension/Base.php",
"/app/vendor/smarty/smarty/src/Runtime/ForeachRuntime.php",
"/usr/share/nginx/html/index.php",
"/app/vendor/smarty/smarty/src/TemplateBase.php",
"/usr/share/nginx/html/get_compiled_files.php",
"/app/vendor/smarty/smarty/src/Extension/DefaultExtension.php",
"/app/vendor/smarty/smarty/src/Data.php",
"/app/vendor/smarty/smarty/src/Smarty.php",
"/app/vendor/smarty/smarty/libs/Smarty.class.php",
"/app/vendor/smarty/smarty/src/Extension/ExtensionInterface.php",
"/app/vendor/smarty/smarty/src/Resource/FilePlugin.php",
"/app/vendor/smarty/smarty/src/Variable.php",
"/app/vendor/smarty/smarty/src/Template/Compiled.php",
"/app/vendor/smarty/smarty/src/Template/GeneratedPhpFile.php",
"/app/vendor/smarty/smarty/src/Resource/BasePlugin.php",
"/app/vendor/smarty/smarty/src/Cacheresource/File.php",
"/tmp/70888f800e7adf6421cc120691ff1ce1f0a8488c_0.file_app.tpl.php",
"/app/vendor/smarty/smarty/src/Extension/BCPluginsAdapter.php",
"/app/vendor/smarty/smarty/src/UndefinedVariable.php",
"/app/vendor/smarty/smarty/src/functions.php",
"/app/vendor/smarty/smarty/src/Extension/CoreExtension.php",
"/app/vendor/smarty/smarty/src/Template/Source.php"];

foreach ($pre_compile_files as $file) {
    opcache_compile_file($file);
}

error_log("preloaded.");
