<?php
$servername = "172.17.0.2:3306";
$username = "root";
$password = "lalalla";
$dbname = "Redlock";

$dbs = new mysqli($servername, $username, $password, $dbname);

if($dbs->connect_error){
    die("Connection failed: " . $dbs->connect_error);
}

$sql = "SELECT * FROM users";
$result = $dbs->query($sql);

while($row = $result->fetch_assoc()){
    echo $row["ID"].". ".$row["Nama"].", ".$row["Alamat"].", ".$row["Jabatan"]."<br>";
}

$dbs->close();
?>