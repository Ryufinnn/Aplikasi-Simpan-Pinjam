<?php

$page=isset($_GET['p']) ? $_GET['p'] : 'home';
if($page=='home'){
	include 'home.php';
}elseif ($page=='anggota') {
	include 'anggota.php';
}elseif ($page=='pengajuan') {
	include 'pengajuan.php';
}elseif ($page=='datapengajuan') {
	include 'datapengajuan.php';
}elseif ($page=='aksespengajuan') {
	include 'aksespengajuan.php';
}elseif ($page=='detailpengajuan') {
	include 'detailpengajuan.php';
}elseif ($page=='hapuspengajuan') {
	include 'hapuspengajuan.php';
}elseif ($page=='laporan') {
	include 'laporan.php';
}

?>