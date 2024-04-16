<?php
require_once 'contacts.php';

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

Contacts::setKoneksi($conn);

$idToUpdate = 5; 
$new_no_telepon = '085006728344';
$new_nama = 'Devi'; 
$new_alamat = 'Surabaya';

$resUpdate = Contacts::update($idToUpdate, $new_no_telepon, $new_nama, $new_alamat);
echo $resUpdate;

mysqli_close($conn);

?>