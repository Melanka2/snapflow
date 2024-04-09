<?php 

class ModelFactory{

    //load the model
    public function getModel($model){

        //require model file
        require_once '../app/models/' . $model . '.php';

        return $model::getInstance();

    }
}

?>