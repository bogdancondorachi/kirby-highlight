<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2dda93e911ef204dff802e8d92f3cce
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tempest\\Highlight\\' => 18,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tempest\\Highlight\\' => 
        array (
            0 => __DIR__ . '/..' . '/tempest/highlight/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'Tempest\\Highlight\\After' => __DIR__ . '/..' . '/tempest/highlight/src/After.php',
        'Tempest\\Highlight\\Before' => __DIR__ . '/..' . '/tempest/highlight/src/Before.php',
        'Tempest\\Highlight\\CommonMark\\CodeBlockRenderer' => __DIR__ . '/..' . '/tempest/highlight/src/CommonMark/CodeBlockRenderer.php',
        'Tempest\\Highlight\\CommonMark\\InlineCodeBlockRenderer' => __DIR__ . '/..' . '/tempest/highlight/src/CommonMark/InlineCodeBlockRenderer.php',
        'Tempest\\Highlight\\Escape' => __DIR__ . '/..' . '/tempest/highlight/src/Escape.php',
        'Tempest\\Highlight\\Highlighter' => __DIR__ . '/..' . '/tempest/highlight/src/Highlighter.php',
        'Tempest\\Highlight\\Injection' => __DIR__ . '/..' . '/tempest/highlight/src/Injection.php',
        'Tempest\\Highlight\\IsInjection' => __DIR__ . '/..' . '/tempest/highlight/src/IsInjection.php',
        'Tempest\\Highlight\\IsPattern' => __DIR__ . '/..' . '/tempest/highlight/src/IsPattern.php',
        'Tempest\\Highlight\\Language' => __DIR__ . '/..' . '/tempest/highlight/src/Language.php',
        'Tempest\\Highlight\\Languages\\Base\\BaseLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/BaseLanguage.php',
        'Tempest\\Highlight\\Languages\\Base\\Injections\\AdditionInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Injections/AdditionInjection.php',
        'Tempest\\Highlight\\Languages\\Base\\Injections\\BlurInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Injections/BlurInjection.php',
        'Tempest\\Highlight\\Languages\\Base\\Injections\\CustomClassInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Injections/CustomClassInjection.php',
        'Tempest\\Highlight\\Languages\\Base\\Injections\\DeletionInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Injections/DeletionInjection.php',
        'Tempest\\Highlight\\Languages\\Base\\Injections\\EmphasizeInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Injections/EmphasizeInjection.php',
        'Tempest\\Highlight\\Languages\\Base\\Injections\\GutterInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Injections/GutterInjection.php',
        'Tempest\\Highlight\\Languages\\Base\\Injections\\StrongInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Injections/StrongInjection.php',
        'Tempest\\Highlight\\Languages\\Base\\IsHighlightInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/IsHighlightInjection.php',
        'Tempest\\Highlight\\Languages\\Base\\Patterns\\AdditionEndTokenPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Patterns/AdditionEndTokenPattern.php',
        'Tempest\\Highlight\\Languages\\Base\\Patterns\\AdditionStartTokenPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Patterns/AdditionStartTokenPattern.php',
        'Tempest\\Highlight\\Languages\\Base\\Patterns\\DeletionEndTokenPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Patterns/DeletionEndTokenPattern.php',
        'Tempest\\Highlight\\Languages\\Base\\Patterns\\DeletionStartTokenPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Patterns/DeletionStartTokenPattern.php',
        'Tempest\\Highlight\\Languages\\Base\\Patterns\\InjectionTokenPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Base/Patterns/InjectionTokenPattern.php',
        'Tempest\\Highlight\\Languages\\Blade\\BladeLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Blade/BladeLanguage.php',
        'Tempest\\Highlight\\Languages\\Blade\\Injections\\BladeEchoInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Blade/Injections/BladeEchoInjection.php',
        'Tempest\\Highlight\\Languages\\Blade\\Injections\\BladeKeywordInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Blade/Injections/BladeKeywordInjection.php',
        'Tempest\\Highlight\\Languages\\Blade\\Injections\\BladePhpInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Blade/Injections/BladePhpInjection.php',
        'Tempest\\Highlight\\Languages\\Blade\\Injections\\BladeRawEchoInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Blade/Injections/BladeRawEchoInjection.php',
        'Tempest\\Highlight\\Languages\\Blade\\Patterns\\BladeCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Blade/Patterns/BladeCommentPattern.php',
        'Tempest\\Highlight\\Languages\\Blade\\Patterns\\BladeKeywordPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Blade/Patterns/BladeKeywordPattern.php',
        'Tempest\\Highlight\\Languages\\Css\\CssLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Css/CssLanguage.php',
        'Tempest\\Highlight\\Languages\\Css\\Patterns\\CssAttributePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Css/Patterns/CssAttributePattern.php',
        'Tempest\\Highlight\\Languages\\Css\\Patterns\\CssCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Css/Patterns/CssCommentPattern.php',
        'Tempest\\Highlight\\Languages\\Css\\Patterns\\CssFunctionPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Css/Patterns/CssFunctionPattern.php',
        'Tempest\\Highlight\\Languages\\Css\\Patterns\\CssMediaQueryPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Css/Patterns/CssMediaQueryPattern.php',
        'Tempest\\Highlight\\Languages\\Css\\Patterns\\CssSelectorPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Css/Patterns/CssSelectorPattern.php',
        'Tempest\\Highlight\\Languages\\Css\\Patterns\\CssVariablePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Css/Patterns/CssVariablePattern.php',
        'Tempest\\Highlight\\Languages\\DocComment\\DocCommentLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/DocComment/DocCommentLanguage.php',
        'Tempest\\Highlight\\Languages\\DocComment\\Patterns\\DocCommentTagPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/DocComment/Patterns/DocCommentTagPattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\GdscriptLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/GdscriptLanguage.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\AnnotationPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/AnnotationPattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\AsTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/AsTypePattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\ClassNamePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/ClassNamePattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\DoubleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/DoubleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\ExtendsPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/ExtendsPattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\FunctionCallPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/FunctionCallPattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\FunctionNamePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/FunctionNamePattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\KeywordPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/KeywordPattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\OperatorPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/OperatorPattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\PropertyAccessPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/PropertyAccessPattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\ReturnTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/ReturnTypePattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\SingleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/SingleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\SinglelineCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/SinglelineCommentPattern.php',
        'Tempest\\Highlight\\Languages\\Gdscript\\Patterns\\VarTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Gdscript/Patterns/VarTypePattern.php',
        'Tempest\\Highlight\\Languages\\Html\\HtmlLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Html/HtmlLanguage.php',
        'Tempest\\Highlight\\Languages\\Html\\Injections\\CssAttributeInHtmlInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Html/Injections/CssAttributeInHtmlInjection.php',
        'Tempest\\Highlight\\Languages\\Html\\Injections\\CssInHtmlInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Html/Injections/CssInHtmlInjection.php',
        'Tempest\\Highlight\\Languages\\Html\\Injections\\JavaScriptInHtmlInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Html/Injections/JavaScriptInHtmlInjection.php',
        'Tempest\\Highlight\\Languages\\Html\\Injections\\PhpInHtmlInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Html/Injections/PhpInHtmlInjection.php',
        'Tempest\\Highlight\\Languages\\Html\\Injections\\PhpShortEchoInHtmlInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Html/Injections/PhpShortEchoInHtmlInjection.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Injections\\JsDocInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Injections/JsDocInjection.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\JavaScriptLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/JavaScriptLanguage.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\JsDocLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/JsDocLanguage.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsClassNamePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsClassNamePattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsDocParamNamePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsDocParamNamePattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsDocTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsDocTypePattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsDoubleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsDoubleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsKeywordPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsKeywordPattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsMethodPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsMethodPattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsMultilineCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsMultilineCommentPattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsNewObjectPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsNewObjectPattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsObjectPropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsObjectPropertyPattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsPropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsPropertyPattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsSingleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsSingleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsSinglelineCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsSinglelineCommentPattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsStaticClassPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsStaticClassPattern.php',
        'Tempest\\Highlight\\Languages\\JavaScript\\Patterns\\JsStaticPropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/JavaScript/Patterns/JsStaticPropertyPattern.php',
        'Tempest\\Highlight\\Languages\\Json\\JsonLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Json/JsonLanguage.php',
        'Tempest\\Highlight\\Languages\\Json\\Patterns\\JsonAccoladesPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Json/Patterns/JsonAccoladesPattern.php',
        'Tempest\\Highlight\\Languages\\Json\\Patterns\\JsonArrayBracketsPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Json/Patterns/JsonArrayBracketsPattern.php',
        'Tempest\\Highlight\\Languages\\Json\\Patterns\\JsonDoubleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Json/Patterns/JsonDoubleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Json\\Patterns\\JsonPropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Json/Patterns/JsonPropertyPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Injections\\PhpAttributeInstanceInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Injections/PhpAttributeInstanceInjection.php',
        'Tempest\\Highlight\\Languages\\Php\\Injections\\PhpAttributePlainInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Injections/PhpAttributePlainInjection.php',
        'Tempest\\Highlight\\Languages\\Php\\Injections\\PhpDocCommentInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Injections/PhpDocCommentInjection.php',
        'Tempest\\Highlight\\Languages\\Php\\Injections\\PhpFunctionParametersInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Injections/PhpFunctionParametersInjection.php',
        'Tempest\\Highlight\\Languages\\Php\\Injections\\PhpGenericTypeInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Injections/PhpGenericTypeInjection.php',
        'Tempest\\Highlight\\Languages\\Php\\Injections\\PhpHeredocInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Injections/PhpHeredocInjection.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\AttributeTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/AttributeTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\CatchTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/CatchTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\ClassNamePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/ClassNamePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\ClassPropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/ClassPropertyPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\ClassResolutionPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/ClassResolutionPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\ConstantNamePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/ConstantNamePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\ConstantPropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/ConstantPropertyPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\ConstantTypesPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/ConstantTypesPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\DoubleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/DoubleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\EnumBackedTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/EnumBackedTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\EnumCasePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/EnumCasePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\ExtendsPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/ExtendsPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\FunctionCallPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/FunctionCallPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\FunctionNamePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/FunctionNamePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\GenericPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/GenericPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\GroupedTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/GroupedTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\ImplementsPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/ImplementsPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\InstanceOfPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/InstanceOfPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\KeywordPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/KeywordPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\MultilineSingleDocCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/MultilineSingleDocCommentPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\NamedArgumentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/NamedArgumentPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\NamespacePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/NamespacePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\NestedFunctionCallPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/NestedFunctionCallPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\NewObjectPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/NewObjectPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\OperatorPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/OperatorPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PhpDocCommentGenericTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PhpDocCommentGenericTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PhpDocCommentParamTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PhpDocCommentParamTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PhpDocCommentReturnTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PhpDocCommentReturnTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PhpDocCommentTemplateTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PhpDocCommentTemplateTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PhpDocCommentVarTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PhpDocCommentVarTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PhpDocCommentVariablePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PhpDocCommentVariablePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PropertyAccessPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PropertyAccessPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PropertyHookGetPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PropertyHookGetPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PropertyHookSetParameterTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PropertyHookSetParameterTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PropertyHookSetPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PropertyHookSetPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\PropertyTypesPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/PropertyTypesPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\ReturnTypePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/ReturnTypePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\ShortFunctionReferencePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/ShortFunctionReferencePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\SingleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/SingleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\SinglelineCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/SinglelineCommentPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\StaticClassCallPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/StaticClassCallPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\TypeForVariablePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/TypeForVariablePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\UntypedClassPropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/UntypedClassPropertyPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\UseAsPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/UseAsPattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\UsePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/UsePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\Patterns\\VariablePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/Patterns/VariablePattern.php',
        'Tempest\\Highlight\\Languages\\Php\\PhpDocCommentLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/PhpDocCommentLanguage.php',
        'Tempest\\Highlight\\Languages\\Php\\PhpLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/PhpLanguage.php',
        'Tempest\\Highlight\\Languages\\Php\\PhpTypeLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Php/PhpTypeLanguage.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlAsTablePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlAsTablePattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlDoubleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlDoubleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlFromTablePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlFromTablePattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlFunctionPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlFunctionPattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlJoinTablePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlJoinTablePattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlMultilineCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlMultilineCommentPattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlPropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlPropertyPattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlSingleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlSingleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlSinglelineCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlSinglelineCommentPattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlTableAccessPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlTableAccessPattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\Patterns\\SqlTablePropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/Patterns/SqlTablePropertyPattern.php',
        'Tempest\\Highlight\\Languages\\Sql\\SqlLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Sql/SqlLanguage.php',
        'Tempest\\Highlight\\Languages\\Text\\TextLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Text/TextLanguage.php',
        'Tempest\\Highlight\\Languages\\Twig\\Injections\\TwigEchoInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Injections/TwigEchoInjection.php',
        'Tempest\\Highlight\\Languages\\Twig\\Injections\\TwigTagInjection' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Injections/TwigTagInjection.php',
        'Tempest\\Highlight\\Languages\\Twig\\Patterns\\TwigArrayKeyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Patterns/TwigArrayKeyPattern.php',
        'Tempest\\Highlight\\Languages\\Twig\\Patterns\\TwigCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Patterns/TwigCommentPattern.php',
        'Tempest\\Highlight\\Languages\\Twig\\Patterns\\TwigDoubleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Patterns/TwigDoubleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Twig\\Patterns\\TwigFilterPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Patterns/TwigFilterPattern.php',
        'Tempest\\Highlight\\Languages\\Twig\\Patterns\\TwigKeywordPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Patterns/TwigKeywordPattern.php',
        'Tempest\\Highlight\\Languages\\Twig\\Patterns\\TwigMethodPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Patterns/TwigMethodPattern.php',
        'Tempest\\Highlight\\Languages\\Twig\\Patterns\\TwigNamedArgumentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Patterns/TwigNamedArgumentPattern.php',
        'Tempest\\Highlight\\Languages\\Twig\\Patterns\\TwigPropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Patterns/TwigPropertyPattern.php',
        'Tempest\\Highlight\\Languages\\Twig\\Patterns\\TwigSingleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Patterns/TwigSingleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Twig\\Patterns\\TwigTokenPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/Patterns/TwigTokenPattern.php',
        'Tempest\\Highlight\\Languages\\Twig\\TwigEchoLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/TwigEchoLanguage.php',
        'Tempest\\Highlight\\Languages\\Twig\\TwigLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/TwigLanguage.php',
        'Tempest\\Highlight\\Languages\\Twig\\TwigTagLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Twig/TwigTagLanguage.php',
        'Tempest\\Highlight\\Languages\\Xml\\Patterns\\XmlAttributePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Xml/Patterns/XmlAttributePattern.php',
        'Tempest\\Highlight\\Languages\\Xml\\Patterns\\XmlCloseTagPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Xml/Patterns/XmlCloseTagPattern.php',
        'Tempest\\Highlight\\Languages\\Xml\\Patterns\\XmlCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Xml/Patterns/XmlCommentPattern.php',
        'Tempest\\Highlight\\Languages\\Xml\\Patterns\\XmlOpenTagPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Xml/Patterns/XmlOpenTagPattern.php',
        'Tempest\\Highlight\\Languages\\Xml\\XmlLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Xml/XmlLanguage.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlArrayBracketsPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlArrayBracketsPattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlColonPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlColonPattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlCommentPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlCommentPattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlDashPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlDashPattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlDoubleAccoladesValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlDoubleAccoladesValuePattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlDoubleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlDoubleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlObjectBracketsPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlObjectBracketsPattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlPipePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlPipePattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlPropertyPattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlPropertyPattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlSingleQuoteValuePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlSingleQuoteValuePattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\Patterns\\YamlVariablePattern' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/Patterns/YamlVariablePattern.php',
        'Tempest\\Highlight\\Languages\\Yaml\\YamlLanguage' => __DIR__ . '/..' . '/tempest/highlight/src/Languages/Yaml/YamlLanguage.php',
        'Tempest\\Highlight\\ParsedInjection' => __DIR__ . '/..' . '/tempest/highlight/src/ParsedInjection.php',
        'Tempest\\Highlight\\Pattern' => __DIR__ . '/..' . '/tempest/highlight/src/Pattern.php',
        'Tempest\\Highlight\\PatternTest' => __DIR__ . '/..' . '/tempest/highlight/src/PatternTest.php',
        'Tempest\\Highlight\\TerminalTheme' => __DIR__ . '/..' . '/tempest/highlight/src/TerminalTheme.php',
        'Tempest\\Highlight\\Theme' => __DIR__ . '/..' . '/tempest/highlight/src/Theme.php',
        'Tempest\\Highlight\\Themes\\CssTheme' => __DIR__ . '/..' . '/tempest/highlight/src/Themes/CssTheme.php',
        'Tempest\\Highlight\\Themes\\EscapesTerminalTheme' => __DIR__ . '/..' . '/tempest/highlight/src/Themes/EscapesTerminalTheme.php',
        'Tempest\\Highlight\\Themes\\EscapesWebTheme' => __DIR__ . '/..' . '/tempest/highlight/src/Themes/EscapesWebTheme.php',
        'Tempest\\Highlight\\Themes\\InlineTheme' => __DIR__ . '/..' . '/tempest/highlight/src/Themes/InlineTheme.php',
        'Tempest\\Highlight\\Themes\\LightTerminalTheme' => __DIR__ . '/..' . '/tempest/highlight/src/Themes/LightTerminalTheme.php',
        'Tempest\\Highlight\\Themes\\TerminalStyle' => __DIR__ . '/..' . '/tempest/highlight/src/Themes/TerminalStyle.php',
        'Tempest\\Highlight\\Tokens\\DynamicTokenType' => __DIR__ . '/..' . '/tempest/highlight/src/Tokens/DynamicTokenType.php',
        'Tempest\\Highlight\\Tokens\\GroupTokens' => __DIR__ . '/..' . '/tempest/highlight/src/Tokens/GroupTokens.php',
        'Tempest\\Highlight\\Tokens\\IgnoreTokenType' => __DIR__ . '/..' . '/tempest/highlight/src/Tokens/IgnoreTokenType.php',
        'Tempest\\Highlight\\Tokens\\ParseTokens' => __DIR__ . '/..' . '/tempest/highlight/src/Tokens/ParseTokens.php',
        'Tempest\\Highlight\\Tokens\\RenderTokens' => __DIR__ . '/..' . '/tempest/highlight/src/Tokens/RenderTokens.php',
        'Tempest\\Highlight\\Tokens\\Token' => __DIR__ . '/..' . '/tempest/highlight/src/Tokens/Token.php',
        'Tempest\\Highlight\\Tokens\\TokenType' => __DIR__ . '/..' . '/tempest/highlight/src/Tokens/TokenType.php',
        'Tempest\\Highlight\\Tokens\\TokenTypeEnum' => __DIR__ . '/..' . '/tempest/highlight/src/Tokens/TokenTypeEnum.php',
        'Tempest\\Highlight\\WebTheme' => __DIR__ . '/..' . '/tempest/highlight/src/WebTheme.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2dda93e911ef204dff802e8d92f3cce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2dda93e911ef204dff802e8d92f3cce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2dda93e911ef204dff802e8d92f3cce::$classMap;

        }, null, ClassLoader::class);
    }
}
