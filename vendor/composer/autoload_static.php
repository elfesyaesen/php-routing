<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa7c753830eb16783fa4a8a1cfaf3706
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controller' => __DIR__ . '/../..' . '/config/controller.php',
        'IndexController' => __DIR__ . '/../..' . '/controller/IndexController.php',
        'IndexModel' => __DIR__ . '/../..' . '/model/IndexModel.php',
        'Model' => __DIR__ . '/../..' . '/config/model.php',
        'ProductController' => __DIR__ . '/../..' . '/controller/ProductController.php',
        'ProductModel' => __DIR__ . '/../..' . '/model/ProductModel.php',
        'Routing' => __DIR__ . '/../..' . '/config/routing.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitfa7c753830eb16783fa4a8a1cfaf3706::$classMap;

        }, null, ClassLoader::class);
    }
}
