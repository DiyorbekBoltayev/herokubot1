<?php
require_once "connect.php";

$chat_id=1707;
$massa=1;
$phone="+998883621700";
$latitude="41.570206";
$longitude="60.6315755";
$step='start';
$address="";
$created_at='2022-08-15';
$sql = "SELECT chat_id from users WHERE chat_id=$chat_id";
$result=mysqli_query($conn,$sql);
if($result->num_rows == 0){
    $sql="insert into users (chat_id) values ('$chat_id')";
    mysqli_query($conn,$sql);
    echo "yangi user yaratildi";
}else{
    echo "bunday user bor";
}
//if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
//
//$sql = "UPDATE users SET created_at='2022-08-00' ,step='foo' WHERE chat_id=1701";
$sql="select step from users where chat_id=1701";
$result=mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
var_dump($row['step']);
//if ($result) {
//    echo "Record updated successfully";
//} else {
//    echo "Error updating record: " . mysqli_error($conn);
//}

mysqli_close($conn);
