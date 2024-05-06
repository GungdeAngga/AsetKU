<?php
session_start();
require_once '../helper/connection.php';

$namaJenisAset = $_POST['namaJenisAset'];


$query = mysqli_query($connection, "UPDATE masteradmin SET namaJenisAset = 'namaJenisAset', WHERE id_jenisAset = '$id_jenisAset'");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
