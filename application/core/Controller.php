<?php
namespace application\core;
use application\core\View;

abstract class Controller {

    public $routes;
    public $view;
    public $model;

    public function __construct($route) {
        $this->routes = $route;
        $this->view = new View($this->routes);
        $this->model = $this->loadModel($this->routes['controller']);
    }
    public function loadModel($name) {
        $path = 'application\models\\'.ucfirst($name);
        if(class_exists($path)) {
            return new $path;
        }
    }

}

