<?php
define('URL_SCRIPT_NAME', $_SERVER['PHP_SELF']);
define('URL_SCRIPT' , $_SERVER ['REQUEST_URI']);
define('URL_E404', URL_SCRIPT_NAME . '?page=error404');
define('DIR_404'  , DIR_VIEW . '404/');
define('DIR_CONTACT' , DIR_VIEW  .'contact/');
define('DIR_GALLERY' , DIR_VIEW .'gallery/');
define('DIR_KDR' , DIR_VIEW  .'kdr/');
define('DIR_NEWS' , DIR_VIEW . 'news/');
define('DIR_TEMPLATE' , DIR_VIEW. 'template/');



define('DIR_PUBLIC', DIR_ROOT . 'public/');
define('DIR_ASSETS', DIR_PUBLIC . 'assets/');
define('DIR_IMAGES', DIR_ASSETS.'images/');
define('DIR_CSS', DIR_PUBLIC . 'css/');
define('DIR_BOOTSTRAP', DIR_PUBLIC . 'bootstrap/');
define('DIR_JS', DIR_PUBLIC . 'javascript/');

?>