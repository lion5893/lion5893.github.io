<?php
$dsn_prefix = 'pgsql:';
$host = 'localhost';
$port = '5432';
$dbname = 'tododb';
$user = 'postgres';
$password = 'lion0508';
$dsn = $dsn_prefix . "host = $host; port = $port; dbname = $dbname; user = $user; password = $password";

try {
    $db = new PDO($dsn);
    echo "Kết nối thành công" . PHP_EOL;
} catch (PDOException $e) {
    echo $e->getMessage(); // Nếu kết nối không thành công thì in ra lỗi
}

$ar = ['viec lam 10', 'viec lam 11', 'viec lam 12'];


if (isset($db)) {
    $stmt = NULL;
    // INSERT dữ liệu
//    $sql = "INSERT INTO todo (title, created_at) VALUES ";
//    foreach ($ar as $item) {
//        $sql .= "( '$item', 'NOW()'),";
//        if($item == $ar[count($ar)-1]){ //nếu item bằng phần tử cuối thì cắt , cuối đi
//            $sql = substr($sql,0,-1);
//        }
//    }
// $sql = "INSERT INTO todo (title) VALUES ('Việc số 13')";
////    $sql = "INSERT INTO todo (title, created_at) VALUES (:title, :created_at)";
//      $stmt = $db->prepare($sql);
////    var_dump($sql); exit();
////    $stmt -> bindValue(':title', 'Việc làm số 5');
////    $stmt -> bindValue(':created_at', 'NOW()');
//    if($stmt->execute()){
//        $lastId = $db -> lastInsertId('todo_id_seq');
//        var_dump($lastId);
//    } else {
//        echo "False to insert";
//    }
    // UPDATE dữ liệu
//    $sql = "UPDATE todo SET title=:title WHERE id=:id";
//    $stmt = $db -> prepare($sql);
//    $stmt -> bindValue(':title','viec lam moi');
//    $stmt -> bindValue(':id',24 );
//    $stmt -> execute();
//    DELETE dữ liệu
//    $sql = "DELETE FROM todo WHERE id =23";
//    $stmt = $db -> prepare($sql);
//    $stmt -> execute();
    // Đọc dữ liệu
//    $sql = "SELECT * FROM todo ";
//    $stmt = $db -> prepare($sql);
//    $stmt -> execute();
//    $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
//    print_r($row);
//    $sql = "SELECT * FROM todo WHERE id = :id";
//    $stmt = $db -> prepare($sql);
//    $stmt -> bindValue(':id', 2);
//    $stmt -> execute();
//    $row = $stmt -> fetchAll(PDO::FETCH_ASSOC);
//    print_r($row);

    $lastId = $db -> lastInsertId('todo_id_seq');
    var_dump($lastId);

}
?>