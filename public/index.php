<?php

use Phalcon\Mvc\Router,
    Phalcon\Mvc\Application,
    Phalcon\DI\FactoryDefault;

$di = new FactoryDefault();

//Specify routes for modules
$di->set('router', function () {

    $router = new Router();

    $router->setDefaultModule("frontend");

    return $router;
});

try {

    //Create an application
    $application = new Application($di);

    // Register the installed modules
    $application->registerModules(
        array(
            'frontend' => array(
                'className' => 'Frontend\Module',
                'path'      => '../apps/frontend/Module.php',
            ),
            'backend'  => array(
                'className' => 'Backend\Module',
                'path'      => '../apps/backend/Module.php',
            )
        )
    );

    //Handle the request
    echo $application->handle()->getContent();

} catch(\Exception $e){
    echo $e->getMessage();
}
