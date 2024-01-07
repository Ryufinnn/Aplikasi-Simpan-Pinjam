<?php 
  include "connect.php";

  $sql=mysql_query("select * from pengajuan where id_anggota='$_GET[username]'");  
  $data=mysql_fetch_array($sql);                
  
?>
 <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Data Pengajuan</h5>
                                <hr>
                            </div>
                            <div class="card-body">
                                <form method="POST">
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
                                                <input type="text" name="status" class="form-control" readonly value="<?php echo $data['status']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>

 <?php 

include"connect.php";
if(isset($_POST['simpan'])){

  $update=mysql_query("UPDATE anggota SET   
    nama_anggota='$_POST[nama_anggota]',
    tgl_lahir='$_POST[tgl_lahir]',
    jekel='$_POST[jekel]',
    no_ktp='$_POST[no_ktp]',
    telepon='$_POST[telepon]',
    alamat='$_POST[alamat]',
    pekerjaan='$_POST[pekerjaan]',
    password='$_POST[password]'
    WHERE id_anggota='$_GET[username]'");

  $edit=mysql_query("UPDATE user SET
    password='$_POST[password]'
    WHERE username='$_GET[username]'");

  if($update) {
  echo"<script language=javascript>
        window.alert('Data Berhasil Diubah');
        window.location='?p=anggota&username=".$_GET[username]."';
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


                   