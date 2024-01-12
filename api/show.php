<?php include_once "db.php";

$row=$Movie->find($_POST['id']);
$row['sh']=($row['sh']==1)?0:1;
//   $row['sh']=($row['sh']+1)%2;
    //  用下面這行對電腦的cpu運算較容易 
    // 三元運算 > 基本判斷式 (if else...)  運算式 > 判斷式 
$Movie->save($row);