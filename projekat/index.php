<?php

define('DIR_ROOT', './');
define('DIR_CORE', DIR_ROOT.'core/');
define('DIR_MODULES', DIR_ROOT . 'modules/');
define('DIR_VIEW', DIR_ROOT . 'view/');

include(DIR_CORE . "constants.php");
include(DIR_MODULES . "include_config.php");

$page = isset($_GET['page']) ?  $_GET['page'] : '';

switch ($page){
    case '' :
    case 'main':
        $module_name = $page == '' ? "main" : 'error404';
        break;
    default:
        $module_name = $page;
        break;
}

$module_name =DIR_MODULES . "include_{$module_name}.php";
if (file_exists($module_name)){
    include $module_name;

}
else{
    header('Location:' . URL_E404);
}

exit;
?>