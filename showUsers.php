<?php
require_once "connect.php";
if($conn){
    $sql="select * from tajriba;";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
}
