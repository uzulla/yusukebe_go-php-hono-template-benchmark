<?php

$pre_compile_files = 
["/app/vendor/smarty/smarty/src/Cacheresource/Base.php",
"/app/vendor/smarty/smarty/src/Compiler/BaseCompiler.php",
"/app/vendor/smarty/smarty/src/Template.php",
"/app/vendor/smarty/smarty/src/Lexer/TemplateLexer.php",
"/app/vendor/smarty/smarty/src/Extension/Base.php",
"/app/vendor/smarty/smarty/src/Runtime/ForeachRuntime.php",
"/usr/share/nginx/html/index.php",
"/app/vendor/smarty/smarty/src/Parser/TemplateParser.php",
"/app/vendor/smarty/smarty/src/Compile/Base.php",
"/app/vendor/smarty/smarty/src/TemplateBase.php",
"/app/vendor/smarty/smarty/src/ParseTree/Template.php",
"/app/vendor/smarty/smarty/src/Template/Cached.php",
"/app/vendor/smarty/smarty/src/Compile/CompilerInterface.php",
"/app/vendor/smarty/smarty/src/Compiler/CodeFrame.php",
"/usr/share/nginx/html/get_compiled_files.php",
"/app/vendor/smarty/smarty/src/Extension/DefaultExtension.php",
"/app/vendor/smarty/smarty/src/Data.php",
"/app/vendor/smarty/smarty/src/ParseTree/Text.php",
"/app/vendor/smarty/smarty/src/Smarty.php",
"/app/vendor/smarty/smarty/src/Compile/DefaultHandlerFunctionCallCompiler.php",
"/app/vendor/smarty/smarty/libs/Smarty.class.php",
"/app/vendor/smarty/smarty/src/Extension/ExtensionInterface.php",
"/app/vendor/smarty/smarty/src/Runtime/TplFunctionRuntime.php",
"/app/vendor/smarty/smarty/src/Compile/ObjectMethodBlockCompiler.php",
"/app/vendor/smarty/smarty/src/Resource/FilePlugin.php",
"/app/vendor/smarty/smarty/src/Compile/Tag/ForeachSection.php",
"/app/vendor/smarty/smarty/src/Compile/Tag/ForeachTag.php",
"/app/vendor/smarty/smarty/src/Variable.php",
"/app/vendor/smarty/smarty/src/Template/Compiled.php",
"/app/vendor/smarty/smarty/src/Template/GeneratedPhpFile.php",
"/app/vendor/smarty/smarty/src/Compiler/Template.php",
"/app/vendor/smarty/smarty/src/Compile/PrintExpressionCompiler.php",
"/app/vendor/smarty/smarty/src/Compile/Tag/ForeachClose.php",
"/app/vendor/smarty/smarty/src/Resource/BasePlugin.php",
"/app/vendor/smarty/smarty/src/Cacheresource/File.php",
"/usr/share/nginx/html/preload.php",
"/app/vendor/smarty/smarty/src/Compile/ObjectMethodCallCompiler.php",
"/app/vendor/smarty/smarty/src/Extension/BCPluginsAdapter.php",
"/app/vendor/smarty/smarty/src/UndefinedVariable.php",
"/app/vendor/smarty/smarty/src/ParseTree/Tag.php",
"/app/vendor/smarty/smarty/src/Compile/ModifierCompiler.php",
"/app/vendor/smarty/smarty/src/functions.php",
"/app/vendor/smarty/smarty/src/Compile/FunctionCallCompiler.php",
"/app/vendor/smarty/smarty/src/Extension/CoreExtension.php",
"/app/vendor/smarty/smarty/src/Compile/BlockCompiler.php",
"/app/vendor/smarty/smarty/src/Compile/DefaultHandlerBlockCompiler.php",
"/app/vendor/smarty/smarty/src/Template/Source.php",
"/app/vendor/smarty/smarty/src/ParseTree/Base.php",
"/usr/share/nginx/html/cache/70888f800e7adf6421cc120691ff1ce1f0a8488c_app.tpl.php",
]
;

foreach ($pre_compile_files as $file) {
    opcache_compile_file($file);
}

error_log("preloaded.");
