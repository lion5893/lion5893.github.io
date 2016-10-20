<?php

$term = trim($_GET['term']);

$listUser = [
    'chungvh',
    'huynt',
    'namnv',
    'vuongmanh',
    'antam',
    'binhtm',
    'duongtranmanh',
    'trangtt',
    'robin',
    'jolly',
    'quyennt',
    'manhhai'
];
$results = [];

foreach($listUser as $user) {
    if (strstr($user, $term)) $results[] = $user;
}

echo json_encode($results);