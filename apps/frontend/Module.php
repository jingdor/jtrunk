<?php

namespace Frontend;

use Phalcon\Loader,
    Phalcon\Mvc\Dispatcher,
    Phalcon\Mvc\View,
    Phalcon\Mvc\View\Engine\Volt,
    Phalcon\Mvc\ModuleDefinitionInterface;


class Module implements ModuleDefinitionInterface
{

    public function registerAutoloaders()
    {

        $loader = new Loader();

        $loader->registerNamespaces(
            array(
                'Frontend\Controllers' => '../apps/frontend/controllers/',
                'Frontend\Models'      => '../apps/frontend/models/',
            )
        );

        $loader->register();
    }


    public function registerServices($di)
    {

        //Registering a dispatcher
        $di->set('dispatcher', function() {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace("Frontend\Controllers");
            return $dispatcher;
        });
	

	$di->set('voltService', function($view, $di) {

    	$volt = new Volt($view, $di);

    	$volt->setOptions(array(
        	"compiledPath" => "../cache/",
        	"compiledExtension" => ".compiled"
    	));

    return $volt;
	});
        //Registering the view component
        $di->set('view', function() {
            $view = new View();
            $view->setViewsDir('../apps/frontend/views/');
            //注册模板引擎
            $view->registerEngines(array(
                ".html" =>"voltService"
			));		
           
            return $view;
        });


    }

}
