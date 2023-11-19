<?php

function safe($param)
{
    return addslashes($param);
}


function render($file, $data = null)
{
    error_log("render 1");
    $layout_file = VIEW_DIR . "/templates/template.php";
    error_log("render 2");
    ob_start();
    error_log("render 3 --- " . $file);
    include_once(VIEW_DIR . $file);
    error_log("render 4");
    $content = ob_get_clean();
    error_log("render 5");
    include_once($layout_file);
    error_log("render 6");
}
