<?php include_once 'db.php';
$movie=$_GET['id'];
$ondate=strtotime($Movie->find($movie)['ondate']);
$end=strtotime("+2days",($ondate));
$today=strtotime(date("Y-m-d"));
$diff=($end-$today)/(60*60*24);
// ondate  0   today  3
// ondate +1  today  2
// ondate +2  today  1


for($i=0;$i<=$diff;$i++){
    $date=date("Y-m-d",strtotime("+$i days"));
    echo "<option value='$date'>$date</option>";
}

?>