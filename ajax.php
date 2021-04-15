<?php 
    include "connection.php";
    $sql = 'SELECT name, message FROM message';

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)){
        echo "{$row['name']}: {$row['message']}  \n";
    }
    mysqli_close($conn);
?>