<?php
$users = array(
    [
        "name" => "john",
        "age" => 20,
        "avatar" => "assets_search/img/avatar/1.jpg"
    ],
    [
        "name" => "mary",
        "age" => 24,
        "avatar" => "assets_search/img/avatar/2.jpg"
    ],
    [
        "name" => "lynda",
        "age" => 15,
        "avatar" => "assets_search/img/avatar/3.jpg"
    ],
    [
        "name" => "scott",
        "age" => 18,
        "avatar" => "assets_search/img/avatar/4.jpg"
    ],
    [
        "name" => "lina",
        "age" => 21,
        "avatar" => "assets_search/img/avatar/5.jpg"
    ],
    [
        "name" => "michael",
        "age" => 17,
        "avatar" => "assets_search/img/avatar/6.jpg"
    ]
);
foreach ($users as $u){
    echo '$u["name"]'   ;
}

?>