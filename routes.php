<?php

function startsWith($haystack, $needle) {
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

function call($controller, $action) {

    $controllerFile = 'controllers/' . $controller . '_controller.php';
    $modelFile = 'models/' . $controller . '.php';

    require_once($controllerFile);

    if (file_exists($modelFile)) {
        require_once($modelFile);
    }

    switch ($controller) {
        case 'home':
            $controller = new HomeController();
            break;
        case 'rsvp':
            $controller = new RsvpController();
            break;
        case 'about':
            $controller = new AboutController();
            break;
        case 'lodging-transportation':
            $controller = new LodgingTransportationController();
            break;
        case 'registery':
            $controller = new RegisteryController();
            break;
        case 'examples':
            $controller = new ExamplesController();
            break;
    }

    $controller->{ str_replace('-', '_', $action) }();
}

$viewFolder = './views';
$viewPath = realpath($viewFolder);
$controllerFolder = $viewFolder . '/' . $controller;
$controllerPath = realpath($controllerFolder);
$actionFile = $controllerFolder . '/' . $action . '.php';
$actionPath = realpath($actionFile);

if (startsWith($controllerFolder, $viewFolder) && startsWith($actionPath, $controllerPath) && is_dir($controllerFolder) && is_file($actionFile)) {
    call($controller, $action);
} else {
    call('home', 'error');
}

?>
