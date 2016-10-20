<?php
$result = [
    "error" => [], // lưu các lỗi khi upload file
    "path" => "" // lưu đường dẫn tới file nếu upload thành công lên server
];
$result["error"][] = [
    'msg' => 'File vượt quá kích thước'
];
print_r($result["error"][0]);
?>

