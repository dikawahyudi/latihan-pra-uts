<?php
include "koneksi.php";
$qry=mysqli_query($koneksi,"select a_nama2 from table_1");
$data=array();
while ($data[]=mysqli_fetch_array($qry));
$namalengkap=$data[3]['a_nama2'];
$explode=explode(" ",$namalengkap);
$nama_awal=$explode[0];
$nama_tengah=$explode[1];
$nama_akhir=$explode[2];
$potongannama = ucwords(substr($nama_akhir,0,1));
$potongannama2 = ucwords(substr($namalengkap,0,14));
echo "Output 1 = ".ucwords(substr($namalengkap,0,10)).".$potongannama<br>";
echo "Output 2 = ".ucwords(substr($namalengkap,15,19)).", $potongannama2<br>";
?>