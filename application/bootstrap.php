
<?php
class Bootstrap extends Yaf_Bootstrap_Abstract{

    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config", $config);
    }
    public function _initDefaultName(Yaf_Dispatcher $dispatcher) {

        $dispatcher->setDefaultModule("Index")->setDefaultController("Index")->setDefaultAction("index");
    }
    public  function _initTwig(Yaf_Dispatcher $dispatcher){
//        $config = Yaf_Application::app()->getConfig();
//        $dispatcher->setView(new Twig(APP_PATH.'views', $config->twig->toArray()));
    }
    public function _initView(){

    }
}