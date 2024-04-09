<?php

class Controller
{
    var $factory;

    //load the model
    public function model($model)
    {

        //require model factory
        require_once '../app/models/ModelFactory.php';
        //instantiate model factory

        $this->factory = new ModelFactory();
        // require_once '../app/models/' . $model . '.php';

        //get instantiated model
        return $this->factory->getModel($model);
        //instantiate model
        // return $model::getInstance();
    }

    //checks for the view file and load
    public function view($view, $data = [])
    {

        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die("View does not exists.");
        }
    }
}
