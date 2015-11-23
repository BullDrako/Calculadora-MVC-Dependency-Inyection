<?php

chdir(dirname(__DIR__));
require 'application/controllers/IndexController.php';
require 'application/controllers/CalculatorController.php';
require 'application/models/CalculatorModel.php';
if (!isset($_GET['controller']))
{
    $controllerName = 'controllers\\IndexController';
    $action         = 'indexAction';
    $controller = new $controllerName();
    $controller->$action();
}
else
{
    $controllerName     = 'controllers\\' . ucfirst($_GET['controller']) . 'Controller';
    $action             = $_GET['action'] . 'Action';

    // Dependeny
    $model = new models\CalculatorModel();

    //Dependency Inyection
    $controller = new $controllerName($model);
    $controller->$action();
}
