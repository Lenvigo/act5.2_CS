<?php

//L: lo que en los apuntes es el index;
// partimos de la carpeta del proyecto con la variable magica __FILE__, si queremos verlo llamamos a echo __FILE__;

//dirname devuelve  la ruta de un directorio padre subiendo x niveles, en este caso 2 niveles: la carpeta que contiene controller
require_once dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
require_once dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'autoload.php';

//La URL será algo del estilo: http://localhost/FrontController.php?controller=Nota&action=list
//viene el parameto controles definido, sino viene vete a buscarlo por defecto. lo mimsmo para action.

if (!isset($_GET["controller"])) {
    $_GET["controller"] = DEFAULT_CONTROLLER;
}

if (!isset($_GET["action"])) {
    $_GET["action"] = DEFAULT_ACTION;
}

/* Load controller */
//Por convención, nuestros controladores terminar con la palabra Controller y se situarán en carpeta controller
$controllerName = $_GET["controller"] . 'Controller';
$controller_path = $controllerName . '.php';

//Todos los controladores estarán en la carpeta controller. Si no existe, asignamos uno por defecto
if (!file_exists($controller_path)) {
    $controllerName = DEFAULT_CONTROLLER . 'Controller';
}
//Se crea una instancia del controlador que llega como parámetro por $_GET o el controlador por defecto
$controller = new $controllerName();

//Se preparan los datos para que estén disponibles en la vista en un array
$dataToView["data"] = array();

/* Si existe el método que llega por $_GET en la clase de $controller */
if (method_exists($controller, $_GET["action"])) {
    //Se invoca el método y se establecen los datos que devuelve el controlador  para que estén disponibles para la vista
    $dataToView["data"] = $controller->{$_GET["action"]}();
    // L:otra forma de declaralo verlo en github d la profe
}


/* Load views */
//cabecera
require_once dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'header.php';
//
require_once dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . $controller->view . '.php';
//pie
require_once dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'footer.php';
