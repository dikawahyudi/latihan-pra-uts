<?php
include "koneksi.php";
$sql=mysqli_query($koneksi, "select a_nama1 from table_1");
$data=mysqli_fetch_array($sql);
$nama=$data['a_nama1'];
$potongannama = substr($nama,0,3);
echo "Output 1 = ".ucwords(substr($nama,0,3))."<br>";
echo "Output 2 = ".ucwords(substr($nama,1))."<br>";
echo "Output 1 = ".ucwords(substr($nama,0,3))."$potongannama<br>";
?>