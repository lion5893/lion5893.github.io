<?php

$term = trim($_GET['term']);

$listCity = [
    'Hà Nội',
    'TP HCM',
    'Đà Nẵng',
    'Hải Dương',
    'Thái Nguyên',
    'Ninh Bình',
    'Quảng Ninh',
    'Hải Phòng',
    'Vũng Tàu',
    'Hưng Yên',
    'Quảng Ngãi',
    'Yên Bái'
];
$results = [];

foreach($listCity as $city) {
    if (strstr($city, $term)) $results[] = $city;
}

echo json_encode($results);