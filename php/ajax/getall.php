<?php
// Nhánh kết nối thành công
try {
    // Kết nối
    $conn = new PDO("mysql:host=localhost;dbname=test", 'root', '');

    // Thiết lập chế độ lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thông báo thành công
    echo "Kết nối thành công";
}
// Nhánh kết nối thất bại
catch (PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}




//$listUser = [
//    'chungvh',
//    'huynt',
//    'namnv',
//    'vuongmanh',
//    'antam',
//    'binhtm',
//    'duongtranmanh',
//    'trangtt',
//    'robin',
//    'jolly',
//    'quyennt',
//    'manhhai'
//];

//echo json_encode($listUser);