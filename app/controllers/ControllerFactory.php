<?php 

class ControllerFactory{

    //load the controller
    public function getController($controller){

        //require controller file
        require_once '../app/controllers/' . $controller . '.php';

        return new $controller();
    }
}

?>