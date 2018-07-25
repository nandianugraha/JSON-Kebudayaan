<?php
include_once("../Koneksi/config.php");

$query = "select * from Umum";
//untuk menjalankan perinta sql
$result = $mysqli->query($query);
//untuk mendapatkan jumlah bari dari table
$num_results = $result->num_rows;
//cek jika data tidak 0
if( $num_results > 0){ 
$array = array();
$status = "status";
$message = "message";
while( $row = $result->fetch_assoc() ){
//untuk mengektrak data
extract($row);
$array[] = $row;
}
echo json_encode($array);
}else{
//jika data kosong maka akan menampilkan data berikutnya
echo "Data Kosong";
}
//menutup koneksi ke database
$result->free();
$mysqli->close();

?>