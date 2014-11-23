<?php

namespace Frontend;

use Phalcon\Loader,
    Phalcon\Mvc\Dispatcher,
    Phalcon\Mvc\View,
    Phalcon\Mvc\View\Engine\Volt,
    Phalcon\Mvc\ModuleDefinitionInterface,
    Phalcon\Events\Manager,
    Frontend\Models\Auth as Auth;


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
            $Events=new \Phalcon\Events\Manager();
            $Events->attach("dispatch:beforeDispatchLoop", function($event, $dispatcher) {
                // if(!Auth::getAuth($dispatcher->getControllerName().":".$dispatcher->getActionName())){
                //     return false;
                // };
            });
            
            $dispatcher->setDefaultNamespace("Frontend\Controllers");
            $dispatcher->setEventsManager($Events);
            

            return $dispatcher;
    },true);


	

	$di->set('voltService', function($view, $di) {

    	$volt = new Volt($view, $di);



    	$volt->setOptions(array(
        	"compiledPath" =>'../cache/',
    		"stat"=>true,
    		"compileAlways"=>true,
        	"compiledExtension" => ".compiled"
    	));


        

        $compiler = $volt->getCompiler();

        $compiler->addFunction('hash', 'md5'); 


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
        $di->set('db', function() {




                $connection = new \Phalcon\Db\Adapter\Pdo\Mysql(array(
                    "host" => "127.0.0.1",
                    "username" => "root",
                    "password" => "866025",
                    "dbname" => "jtrunk"
                ));

                //Assign the eventsManager to the db adapter instance


                return $connection;
        });

        $di->setShared('session', function() {
            $session = new \Phalcon\Session\Adapter\Files();
            $session->start();
            return $session;
        });



    }

}
