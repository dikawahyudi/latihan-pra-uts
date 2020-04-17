<html>
<table>
<tr>
<td>Pilih Hari</td>
<td>:</td>
<td>
<select name="hari">
<?php
include "koneksi.php";
$qry=mysqli_query($koneksi, "select d_array_hari from table_1");
$data=mysqli_fetch_array($qry);
$kumpulan_hari=$data['d_array_hari'];
$kumpulan_hari_explode = explode(" ",$kumpulan_hari);
foreach($kumpulan_hari_explode as $hari)
{
echo'<option value = "'.$hari.'">'.ucwords($hari).'</option>';
}
?>
</select>
</td>
<td>
<input type="button"value="Ya">
</td>
</tr>
</table>
</html>
