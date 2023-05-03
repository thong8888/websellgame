<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbgames";

//taocau lenh ket noi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

//kiem tra cau lenh ket noi voimysql
    if(!$conn){
        die("Ket noi that bai:".mysqli_connect_error());
    }else{
        // echo"Ket noi thanh cong";
}

