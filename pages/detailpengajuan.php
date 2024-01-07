<?php 
  include "connect.php";

  $sql=mysql_query("select * from pengajuan,anggota where anggota.id_anggota=pengajuan.id_anggota and pengajuan.id_pengajuan='$_GET[id_pengajuan]'");  
  $data=mysql_fetch_array($sql);                
  
?>
 <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Data Pengajuan</h5>
                                <hr>
                            </div>
                            <div class="card-body">
                                
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Nama Peminjam</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="nama_anggota" class="form-control" readonly value="<?php echo $data['nama_anggota']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="tgl_lahir" class="form-control" readonly value="<?php echo $data['tgl_lahir']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="jekel" class="form-control" readonly value="<?php echo $data['jekel']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>No. KTP</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="no_ktp" class="form-control" readonly value="<?php echo $data['no_ktp']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="alamat" class="form-control" readonly value="<?php echo $data['alamat']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Telepon</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="telepon" class="form-control" readonly value="<?php echo $data['telepon']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="pekerjaan" class="form-control" readonly value="<?php echo $data['pekerjaan']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Nama Wali</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="nama_wali" class="form-control" readonly value="<?php echo $data['nama_wali']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Pekerjaan Wali</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="pekerjaan_wali" class="form-control" readonly value="<?php echo $data['pekerjaan_wali']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>ALamat Kerja Wali</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="alamat_kerja_wali" class="form-control" readonly value="<?php echo $data['alamat_kerja_wali']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Telepon Wali</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="telepon_wali" class="form-control" readonly value="<?php echo $data['telepon_wali']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Besar Pinjaman</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="besar_pinjaman" class="form-control" readonly value="<?php echo $data['besar_pinjaman']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Lama Pinjaman</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="lama_pinjaman" class="form-control" readonly value="<?php echo $data['lama_pinjaman']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Jaminan 1</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="jaminan1" class="form-control" readonly value="<?php echo $data['jaminan1']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Jaminan 2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="jaminan2" class="form-control" readonly value="<?php echo $data['jaminan2']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Jaminan 3</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="jaminan3" class="form-control" readonly value="<?php echo $data['jaminan3']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Jaminan 4</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="jaminan1" class="form-control" readonly value="<?php echo $data['jaminan4']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Tujuan Pinjaman</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="tujuan_pinjaman" class="form-control" readonly value="<?php echo $data['tujuan_pinjaman']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Tanggal Pengajuan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" name="tanggal_pengajuan" class="form-control" readonly value="<?php echo $data['tanggal_pengajuan']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Status</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control" readonly value="<?php echo $data['status']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="">
                                    <div class="row">                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                            <button name="terima"  class="btn btn-primary btn-icon btn-round btn-lg" type="submit" title="Diterima">
                                              <i class="now-ui-icons ui-2_like"></i>
                                            </button>
                                            <button name="tolak" class="btn btn-primary btn-icon btn-round btn-lg" type="submit" title="Tidak Diterima">
                                              <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>

 <?php 

include"connect.php";
if(isset($_POST['terima'])){

  $update=mysql_query("UPDATE pengajuan SET
    status='Diterima'
    WHERE id_pengajuan='$_GET[id_pengajuan]'");

  if($update) {
  echo"<script language=javascript>
        window.alert('Status Berhasil Diubah');
        window.location='?p=aksespengajuan';
        </script>";
        exit;
      }else{
        echo"gagal";
      }
}

if(isset($_POST['tolak'])){

  $update=mysql_query("UPDATE pengajuan SET
    status='Tidak diterima'
    WHERE id_pengajuan='$_GET[id_pengajuan]'");

  if($update) {
  echo"<script language=javascript>
        window.alert('Status Berhasil Diubah');
        window.location='?p=aksespengajuan';
        </script>";
        exit;
      }else{
        echo"gagal";
      }
}
?>

                            </div>
                        </div>
 </div>


                   