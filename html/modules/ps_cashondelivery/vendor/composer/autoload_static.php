<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f4d39aa537b2a7f580a4d3b6036f4dc
{
    public static $classMap = array (
        'Ps_Cashondelivery' => __DIR__ . '/../..' . '/ps_cashondelivery.php',
        'Ps_CashondeliveryValidationModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/validation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0f4d39aa537b2a7f580a4d3b6036f4dc::$classMap;

        }, null, ClassLoader::class);
    }
}