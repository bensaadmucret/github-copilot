<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ef59ffcab3a00d9dfc7a1e8584df90f
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        'd8554eaad0cebcc565a4fa275d41f2af' => __DIR__ . '/../..' . '/src/Helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mzb\\' => 4,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mzb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Bridges\\FormsDI\\FormsExtension' => __DIR__ . '/..' . '/nette/forms/src/Bridges/FormsDI/FormsExtension.php',
        'Nette\\Bridges\\FormsLatte\\FormMacros' => __DIR__ . '/..' . '/nette/forms/src/Bridges/FormsLatte/FormMacros.php',
        'Nette\\Bridges\\FormsLatte\\Runtime' => __DIR__ . '/..' . '/nette/forms/src/Bridges/FormsLatte/Runtime.php',
        'Nette\\Bridges\\HttpDI\\HttpExtension' => __DIR__ . '/..' . '/nette/http/src/Bridges/HttpDI/HttpExtension.php',
        'Nette\\Bridges\\HttpDI\\SessionExtension' => __DIR__ . '/..' . '/nette/http/src/Bridges/HttpDI/SessionExtension.php',
        'Nette\\Bridges\\HttpTracy\\SessionPanel' => __DIR__ . '/..' . '/nette/http/src/Bridges/HttpTracy/SessionPanel.php',
        'Nette\\ComponentModel\\ArrayAccess' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/ArrayAccess.php',
        'Nette\\ComponentModel\\Component' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/Component.php',
        'Nette\\ComponentModel\\Container' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/Container.php',
        'Nette\\ComponentModel\\IComponent' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/IComponent.php',
        'Nette\\ComponentModel\\IContainer' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/IContainer.php',
        'Nette\\ComponentModel\\RecursiveComponentIterator' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/RecursiveComponentIterator.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Forms\\Container' => __DIR__ . '/..' . '/nette/forms/src/Forms/Container.php',
        'Nette\\Forms\\Control' => __DIR__ . '/..' . '/nette/forms/src/Forms/Control.php',
        'Nette\\Forms\\ControlGroup' => __DIR__ . '/..' . '/nette/forms/src/Forms/ControlGroup.php',
        'Nette\\Forms\\Controls\\BaseControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/BaseControl.php',
        'Nette\\Forms\\Controls\\Button' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/Button.php',
        'Nette\\Forms\\Controls\\Checkbox' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/Checkbox.php',
        'Nette\\Forms\\Controls\\CheckboxList' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/CheckboxList.php',
        'Nette\\Forms\\Controls\\ChoiceControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/ChoiceControl.php',
        'Nette\\Forms\\Controls\\CsrfProtection' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/CsrfProtection.php',
        'Nette\\Forms\\Controls\\HiddenField' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/HiddenField.php',
        'Nette\\Forms\\Controls\\ImageButton' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/ImageButton.php',
        'Nette\\Forms\\Controls\\MultiChoiceControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/MultiChoiceControl.php',
        'Nette\\Forms\\Controls\\MultiSelectBox' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/MultiSelectBox.php',
        'Nette\\Forms\\Controls\\RadioList' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/RadioList.php',
        'Nette\\Forms\\Controls\\SelectBox' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/SelectBox.php',
        'Nette\\Forms\\Controls\\SubmitButton' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/SubmitButton.php',
        'Nette\\Forms\\Controls\\TextArea' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/TextArea.php',
        'Nette\\Forms\\Controls\\TextBase' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/TextBase.php',
        'Nette\\Forms\\Controls\\TextInput' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/TextInput.php',
        'Nette\\Forms\\Controls\\UploadControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/UploadControl.php',
        'Nette\\Forms\\Form' => __DIR__ . '/..' . '/nette/forms/src/Forms/Form.php',
        'Nette\\Forms\\FormFactory' => __DIR__ . '/..' . '/nette/forms/src/Forms/FormFactory.php',
        'Nette\\Forms\\FormRenderer' => __DIR__ . '/..' . '/nette/forms/src/Forms/FormRenderer.php',
        'Nette\\Forms\\Helpers' => __DIR__ . '/..' . '/nette/forms/src/Forms/Helpers.php',
        'Nette\\Forms\\IControl' => __DIR__ . '/..' . '/nette/forms/src/compatibility.php',
        'Nette\\Forms\\IFormRenderer' => __DIR__ . '/..' . '/nette/forms/src/compatibility.php',
        'Nette\\Forms\\ISubmitterControl' => __DIR__ . '/..' . '/nette/forms/src/compatibility.php',
        'Nette\\Forms\\Rendering\\DefaultFormRenderer' => __DIR__ . '/..' . '/nette/forms/src/Forms/Rendering/DefaultFormRenderer.php',
        'Nette\\Forms\\Rule' => __DIR__ . '/..' . '/nette/forms/src/Forms/Rule.php',
        'Nette\\Forms\\Rules' => __DIR__ . '/..' . '/nette/forms/src/Forms/Rules.php',
        'Nette\\Forms\\SubmitterControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/SubmitterControl.php',
        'Nette\\Forms\\Validator' => __DIR__ . '/..' . '/nette/forms/src/Forms/Validator.php',
        'Nette\\HtmlStringable' => __DIR__ . '/..' . '/nette/utils/src/HtmlStringable.php',
        'Nette\\Http\\Context' => __DIR__ . '/..' . '/nette/http/src/Http/Context.php',
        'Nette\\Http\\FileUpload' => __DIR__ . '/..' . '/nette/http/src/Http/FileUpload.php',
        'Nette\\Http\\Helpers' => __DIR__ . '/..' . '/nette/http/src/Http/Helpers.php',
        'Nette\\Http\\IRequest' => __DIR__ . '/..' . '/nette/http/src/Http/IRequest.php',
        'Nette\\Http\\IResponse' => __DIR__ . '/..' . '/nette/http/src/Http/IResponse.php',
        'Nette\\Http\\Request' => __DIR__ . '/..' . '/nette/http/src/Http/Request.php',
        'Nette\\Http\\RequestFactory' => __DIR__ . '/..' . '/nette/http/src/Http/RequestFactory.php',
        'Nette\\Http\\Response' => __DIR__ . '/..' . '/nette/http/src/Http/Response.php',
        'Nette\\Http\\Session' => __DIR__ . '/..' . '/nette/http/src/Http/Session.php',
        'Nette\\Http\\SessionSection' => __DIR__ . '/..' . '/nette/http/src/Http/SessionSection.php',
        'Nette\\Http\\Url' => __DIR__ . '/..' . '/nette/http/src/Http/Url.php',
        'Nette\\Http\\UrlImmutable' => __DIR__ . '/..' . '/nette/http/src/Http/UrlImmutable.php',
        'Nette\\Http\\UrlScript' => __DIR__ . '/..' . '/nette/http/src/Http/UrlScript.php',
        'Nette\\Http\\UserStorage' => __DIR__ . '/..' . '/nette/http/src/Http/UserStorage.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Localization\\Translator' => __DIR__ . '/..' . '/nette/utils/src/Translator.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/StaticClass.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Floats' => __DIR__ . '/..' . '/nette/utils/src/Utils/Floats.php',
        'Nette\\Utils\\Helpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/Helpers.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\ObjectMixin' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectMixin.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ef59ffcab3a00d9dfc7a1e8584df90f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ef59ffcab3a00d9dfc7a1e8584df90f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ef59ffcab3a00d9dfc7a1e8584df90f::$classMap;

        }, null, ClassLoader::class);
    }
}
