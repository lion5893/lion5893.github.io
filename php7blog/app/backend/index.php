<?php
$partern = "/^(\/admin)(\/)*((.)*)*/";
if(preg_match($admin_pattern, $_SERVER["REQUEST_URI"])){
    include_once (getcwd() . '/app/backend/router.php');
}else{
    include (getcwd() . '/app/frontend/index.php');
}
?>