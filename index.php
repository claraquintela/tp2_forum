<?php
require_once('config/config.php');
require_once('lib/core.php');

$controller = isset($_REQUEST['controller']) ? safe($_REQUEST['controller']) : $config['default_controller'];
$function = isset($_REQUEST['function']) ? safe($_REQUEST['function']) : $config['default_function'];

$controller_file = "controllers/" . ucfirst($controller) . "Controller.php";

if (!file_exists($controller_file)) {
    trigger_error('Invalid controller');
    echo '<br>invalid controller1';
    exit;
}

//note to self: pour recevoir le contenu du fichier controller demandé, on fait un require
require_once($controller_file);

$controller_function = strtolower($function);

if (!function_exists($controller_function)) {
    trigger_error('Invalid function');
    echo '<br>invalid controller2';
    exit;
}

call_user_func($function, $_REQUEST);
