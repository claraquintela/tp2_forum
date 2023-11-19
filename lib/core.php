<?php

function safe($param)
{
    return addslashes($param);
}


function render($file, $data = null)
{

    $layout_file = VIEW_DIR . "/templates/template.php";

    ob_start();
    error_log("render 3 --- " . $file);
    include_once(VIEW_DIR . $file);
    $content = ob_get_clean();
    include_once($layout_file);
}
