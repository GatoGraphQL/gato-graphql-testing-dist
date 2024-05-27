<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91920bd005f6e091c67c07ceb4932aac
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\' => 41,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Constants\\Actions' => __DIR__ . '/../..' . '/src/Constants/Actions.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Constants\\CustomHeaders' => __DIR__ . '/../..' . '/src/Constants/CustomHeaders.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Constants\\Params' => __DIR__ . '/../..' . '/src/Constants/Params.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Constants\\UserMetaKeys' => __DIR__ . '/../..' . '/src/Constants/UserMetaKeys.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Environment' => __DIR__ . '/../..' . '/src/Environment.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Executers\\BulkPluginActivationDeactivationExecuter' => __DIR__ . '/../..' . '/src/Executers/BulkPluginActivationDeactivationExecuter.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Executers\\GatoGraphQLAdminEndpointsTestExecuter' => __DIR__ . '/../..' . '/src/Executers/GatoGraphQLAdminEndpointsTestExecuter.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Executers\\GraphQLServerTestExecuterTrait' => __DIR__ . '/../..' . '/src/Executers/GraphQLServerTestExecuterTrait.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Hooks\\AddDummyCustomAdminEndpointHook' => __DIR__ . '/../..' . '/src/Hooks/AddDummyCustomAdminEndpointHook.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Plugin' => __DIR__ . '/../..' . '/src/Plugin.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\PluginHelpers' => __DIR__ . '/../..' . '/src/PluginHelpers.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Constants\\ParamValues' => __DIR__ . '/../..' . '/src/RESTAPI/Constants/ParamValues.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Constants\\Params' => __DIR__ . '/../..' . '/src/RESTAPI/Constants/Params.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Constants\\ResponseStatus' => __DIR__ . '/../..' . '/src/RESTAPI/Constants/ResponseStatus.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Constants\\Roles' => __DIR__ . '/../..' . '/src/RESTAPI/Constants/Roles.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Controllers\\AbstractAdminRESTController' => __DIR__ . '/../..' . '/src/RESTAPI/Controllers/AbstractAdminRESTController.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Controllers\\AbstractRESTController' => __DIR__ . '/../..' . '/src/RESTAPI/Controllers/AbstractRESTController.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Controllers\\CPTBlockAttributesAdminRESTController' => __DIR__ . '/../..' . '/src/RESTAPI/Controllers/CPTBlockAttributesAdminRESTController.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Controllers\\ModuleSettingsAdminRESTController' => __DIR__ . '/../..' . '/src/RESTAPI/Controllers/ModuleSettingsAdminRESTController.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Controllers\\ModulesAdminRESTController' => __DIR__ . '/../..' . '/src/RESTAPI/Controllers/ModulesAdminRESTController.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Controllers\\WithFlushRewriteRulesRESTControllerTrait' => __DIR__ . '/../..' . '/src/RESTAPI/Controllers/WithFlushRewriteRulesRESTControllerTrait.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Controllers\\WithModuleParamRESTControllerTrait' => __DIR__ . '/../..' . '/src/RESTAPI/Controllers/WithModuleParamRESTControllerTrait.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Endpoints\\AbstractRESTAPIEndpointManager' => __DIR__ . '/../..' . '/src/RESTAPI/Endpoints/AbstractRESTAPIEndpointManager.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Endpoints\\AdminRESTAPIEndpointManager' => __DIR__ . '/../..' . '/src/RESTAPI/Endpoints/AdminRESTAPIEndpointManager.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\RESTResponse' => __DIR__ . '/../..' . '/src/RESTAPI/RESTResponse.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\RESTAPI\\Response\\ResponseKeys' => __DIR__ . '/../..' . '/src/RESTAPI/Response/ResponseKeys.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Settings\\Options' => __DIR__ . '/../..' . '/src/Settings/Options.php',
        'PHPUnitForGatoGraphQL\\GatoGraphQLTesting\\Utilities\\CustomHeaderAppender' => __DIR__ . '/../..' . '/src/Utilities/CustomHeaderAppender.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91920bd005f6e091c67c07ceb4932aac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91920bd005f6e091c67c07ceb4932aac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91920bd005f6e091c67c07ceb4932aac::$classMap;

        }, null, ClassLoader::class);
    }
}
