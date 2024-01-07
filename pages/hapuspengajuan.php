<?php
ob_start();
include "connect.php";

	mysql_query("DELETE FROM pengajuan where id_pengajuan='$_GET[id_pengajuan]'");
	echo"<script language=javascript>
			window.alert('Data Berhasil Di Hapus');
			window.location='?p=aksespengajuan';
			</script>";
			exit;


?>
<?php
	include"library/koneksi.php";
	mysql_query("DELETE FROM rt_rw where id_rtrw='$_GET[id_rtrw]'");
	
	echo"<script language=javascript>
			window.alert('Data Berhasil Di Delete');
			window.location='?module=tampilan_rt_rw';
			</script>";
			exit;
?>