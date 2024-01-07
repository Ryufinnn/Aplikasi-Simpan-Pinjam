<?php
    include "connect.php";
    $page=isset($_GET['page']) ? $_GET['page'] : 'list';
    switch ($page) {
        case 'list':
?>

<div class="col-md-12">
<div class="card">    
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title" > Laporan Permohan Diterima</h4> 
                                    </div>
                                    <div class="col-md-6" style="text-align: right;">
                                        <a href="laporan.php?page=report">
                                <button class="btn btn-primary btn-icon btn-round" type="submit" title="Cetak">
                                    <i class="now-ui-icons files_single-copy-04"></i>
                                </button>
                            </a>
                                    </div>
                                </div>
                                
                                <hr>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th width="29" style="text-align: center;">
                                                No.
                                            </th>
                                            <th  style="text-align: left;">
                                                Nama Peminjam
                                            </th>
                                            <th  style="text-align: center;">
                                                Nama Wali
                                            </th>
                                            <th  style="text-align: center;">
                                                Besar Pinjaman
                                            </th>
                                            <th  style="text-align: center;">
                                                Lama Pinjaman
                                            </th>
                                            <th style="text-align: center;">
                                                Tujuan Pinjaman
                                            </th>
                                        </thead>
                    <?php
                      $no=1;
                      $tampil=mysql_query("select * from pengajuan,anggota where anggota.id_anggota=pengajuan.id_anggota and status='Diterima'");
                      while($data=mysql_fetch_array($tampil)){ 
                        $besar=$data['besar_pinjaman'];


                    ?> 
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['nama_anggota']; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php echo $data['nama_wali']; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php echo "Rp. ".number_format($besar,0,"",'.').",-"; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php echo $data['lama_pinjaman']; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php echo $data['tujuan_pinjaman']; ?>
                                                </td>
                                            </tr>
                                        </tbody>
                        <?php
                        $no++;
                        }
                        ?> 
                                    </table>
                                </div>
                            </div>
</div>
                    </div>


<?php 
break;
case 'report' :
ob_start();
?>

<html>
<head>
  <title>Cetak Laporan Pengajuan Diterima</title> 
</head>
<body>
    <?php $tgl=date("Y-m-d"); ?>

  <h6 style="text-align: right;"><?php echo $tgl; ?></h6>    
  <h3 style="text-align: center;">Data Pengajuan Diterima</h3><hr>
  <table border="1" width="100%" action="" cellspacing="0" align="center">
      <tr>
        <td align="center"><b> No. </b></td>
        <td align="center"><b> Nama  </b></td>
                          <td align="center"><b> Alamat </b></td>
                          <td align="center"><b> No. Telepon </b></td>
                          <td align="center"><b> Pekerjaan </b></td>
                          <td align="center"><b> Nama Wali </b></td>
                          <td align="center"><b> Besar Pinjaman  </b></td>
                          <td align="center"><b> Lama Pinjaman </b></td>
                          <td align="center"><b> Tujuan Pinjaman </b></td>
      </tr>
<?php
include ('connect.php');
    $query=mysql_query("SELECT * FROM pengajuan,anggota where anggota.id_anggota=pengajuan.id_anggota and status='Diterima'");  
    $row = mysql_num_rows($query);   
    if($row > 0){ 
        $no=1;
    while($data = mysql_fetch_array($query)){
        $besar=$data['besar_pinjaman'];
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data['nama_anggota']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['telepon']."</td>";
        echo "<td>".$data['pekerjaan']."</td>";
        echo "<td>".$data['nama_wali']."</td>";
        echo "<td>"."Rp. ".number_format($besar,0,"",'.').",-"."</td>";
        echo "<td>".$data['lama_pinjaman']."</td>";
        echo "<td>".$data['tujuan_pinjaman']."</td>";
        echo "</tr>";
        $no++;
    }
}

?>


</table>
</body>
</html>
    <?php
        $html= ob_get_clean();        
        require_once("html2pdf/html2pdf.class.php");
        $pdf = new HTML2PDF('L','A4','en');
        $pdf->WriteHTML($html);
        ob_end_clean();
        $pdf->Output('Permohonan Diterima.pdf','D');
    ?>

<?php
break;
}
?>