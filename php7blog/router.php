<?php
// localhost/?m=post&a=list
// localhost/?a=about
// localhost

$a = $_GET['a']; //action
$m = $_GET['m']; //moudule

if($m){
    if($a){
        $act = 'app/frontend/sites/' . $m . '/' .$a . '.php';
        if(file_exists($act)){
            include ($act);
        }else{
            header("Location: http://" . HOST . "/?a=404");
        }
    }
} else {
    if($a){
        $act = 'app/frontend/sites' . $a . '.php';
        if(file_exists($act)){
            include ($act);
        } else {
            header ("Location: http://" . HOST . "/?a=404");
        }
    }else{
        include ('home.php');
    }
}

?>