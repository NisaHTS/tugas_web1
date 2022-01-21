<?php
$id_siswa=$_POST['id_siswa'];
$nama_siswa=$_POST['nama_siswa'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$hoby=$_POST=['hoby'];

include_once("koneksi.php");
$result=mysqli_query($koneksi, "INSERT INTO tabel_siswa values ('$id_siswa','$nama_siswa','$jenis_kelamin','$alamat','$hoby')");

if($result){
 echo "<script>alert('Data Successfully');window.location.href='index.php';</script>";
}

?>