<?php
require ('config.php');
require ('database.php');

$db = new Database();

//$sql = "INSERT INTO todo (title) VALUES ('Công việc cần làm')";
//$sql = "INSERT INTO todo (title, created_at) VALUES (:title, :created_at) ";
//$db->query($sql);
//$db -> bind([':title'=> 'việc làm 1',':created_at'=> 'NOW()']);
//if($db->execute()){
//    echo $db-> lastInsertId('todo_id_seq');
//}else {
//    echo "Insert Fail";
//};
//$db->execute();
// Insert
//$res = $db->insert('todo',[
//    'title' => 'công việc cần làm',
//    'status' => 1
//]);
//
//if ($res ===true){
//    echo $db->lastInsertId('todo_id_seq');
//}else{
//    echo $res;
//}

//Update
//$sql = "UPDATE todo SET title=:title, status=:status WHERE id=:id";
$res = $db -> update('todo',
    [
        'title' => 'Viec moi',
        'status' => 0
    ],
    [
     'id' => 7
    ]
);
if ($res ===true){
//    echo $db->lastInsertId('todo_id_seq');
    echo "Success";
}else{
    echo $res;
}
