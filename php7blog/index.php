<?php
/**
 * Created by PhpStorm.
 * User: namsida
 * Date: 10/19/16
 * Time: 5:13 PM
 */

require_once (__DIR__ . '/libs/bootstrap.php');

$admin_pattern = "/^(\/admin)(\/)*((.)*)*/";
if(preg_match($admin_pattern, $_SERVER["REQUEST_URI"])){
    include (getcwd() . '/app/backend/index.php');
} else {
    $templateDir = getcwd() . "/app/frontend/views";
    $cacheDir = getcwd() . '/caches';
//    Cấu hình Twig để load view cho phần frontend, tạo thư mục cache view
    $loader = new Twig_Loader_Filesystem($templateDir);
    $twig = new Twig_Environment($loader, array('cache' => $cacheDir, 'auto_reload' => true, 'debug' => true));

    include_once ('router.php');
}

?>