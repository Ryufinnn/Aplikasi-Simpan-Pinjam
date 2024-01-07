<?php
include "connect.php";

$query=mysql_query("SELECT max(id_pengajuan) as maxKode FROM pengajuan");
$data=mysql_fetch_array($query);
$id_pengajuan = $data['maxKode'];

$nourut = (int) substr($id_pengajuan, 3, 3);
$nourut++;

$kode = "P";
$kodebaru = $kode . sprintf("%04s", $nourut);

  $sql=mysql_query("select * from anggota where id_anggota='$_GET[username]'");  
  $isi=mysql_fetch_array($sql);

?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="title" style="text-align: center; color: orange;">Form Permohonan Peminjaman</h3>
            <hr>
         </div>
         <div class="card-header">
            <h5 class="title" style=" color: orange;">1. Identitas Peminjam</h5>
         </div>
        <div class="card-body">
            <form method="POST">
        <div class="row">
            <input type="hidden" name="id_pengajuan" class="form-control" value="<?php echo $kodebaru; ?>" >
               <div class="col-md-4 pr-1">
                  <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="id_anggota" class="form-control" readonly value="<?php echo $isi['id_anggota']; ?>" >
                </div>
            </div>
            <div class="col-md-4 px-1">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_anggota" class="form-control" disabled placeholder="Nama" value="<?php echo $isi['nama_anggota']; ?>">
                </div>
            </div>
             <div class="col-md-4 pl-1">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control" disabled placeholder="Tanggal Lahir" value="<?php echo $isi['tgl_lahir']; ?>">
                </div>
            </div>
        </div>  
        <?php 
        if($isi['jekel']=='Perempuan'){
            $sel1='checked';
        }else{
        $sel2='checked';
        }
        ?>
        <div class="row">
            <div class="col-md-4 pr-1">
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" name="jekel" disabled value="Perempuan" <?php echo "$sel1"; ?> /> Perempuan
                </div>
                <div class="form-group">
                    <input type="radio" name="jekel" disabled value="Laki laki" <?php echo "$sel2"; ?> /> Laki laki
                </div>
            </div>
            <div class="col-md-4 px-1">
                <div class="form-group">
                    <label>No. KTP</label>
                    <input type="text" name="no_ktp" class="form-control" disabled placeholder="No. KTP" value="<?php echo $isi['no_ktp']; ?>">
                </div>
            </div>
             <div class="col-md-4 pl-1">
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" disabled placeholder="Telepon" value="<?php echo $isi['telepon']; ?>">
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12">
                 <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" disabled placeholder="Home Address" value="<?php echo $isi['alamat']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
           
            <div class="col-md-4 pr-1">
                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" disabled placeholder="Pekerjaan" value="<?php echo $isi['pekerjaan']; ?>">
                </div>
            </div>
        </div>
        <hr>
    <div class="card-header">
            <h5 class="title" style="color: orange;">2. Suami/ Istri/ Orang tua Peminjam</h5>
    </div>
            <div class="row">
            	<div class="col-md-6 pr-1">
            		<label>Nama</label>
                    <input type="text" name="nama_wali" class="form-control" required="" />
            	</div>
            </div>
            
            <br>            
            <div class="row">
            	<div class="col-md-6">
            		<label>Pekerjaan</label>
                    <input type="text" name="pekerjaan_wali" class="form-control" required="" />
            	</div>
            </div><br>            
            <div class="row">
            	<div class="col-md-6">
            		<label>Alamat tempat kerja</label>
                    <input type="text" name="alamat_kerja_wali" class="form-control" required="" />
            	</div>
            </div>
            <br>            
            <div class="row">
            	<div class="col-md-6">
            		<label>Telepon</label>
                    <input type="text" name="telepon_wali" class="form-control" required="" />
            	</div>
            </div>
    <hr>
    <div class="card-header">
            <h5 class="title" style=" color: orange;">3. Permohonan Pinjaman</h5>
    </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Pinjaman Sebesar</label>
                    <input type="text" name="besar_pinjaman" class="form-control" required="" />
                </div>
            </div>
            
            <br>            
            <div class="row">
                <div class="col-md-6">
                    <label>Lama Pinjaman</label>
                    <input type="text" name="lama_pinjaman" class="form-control" required=""/>
                </div>
            </div>

    <hr>
    <div class="card-header">
            <h5 class="title" style=" color: orange;">4. Jaminan</h5>
    </div>
            <div class="row">
                
                <div class="col-md-2">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="jaminan1" value="BPKB Motor" /> BPKB Motor
                    </label>
                </div>
                <div class="col-md-2">
                    <label class="checkbox-inline">
                        <input type="checkbox"/ name="jaminan2" value="BPKB Mobil"> BPKB Mobil
                    </label>
                </div>
                <div class="col-md-2">
                    <label class="checkbox-inline">
                         <input type="checkbox"/ name="jaminan3" value="Sertifikat"> Sertifikat
                    </label>
                </div>
                <div class="col-md-2">
                    <label class="checkbox-inline">
                         <input type="checkbox"/ name="jaminan4" value="KTP" checked> KTP
                    </label> 
                </div>
            </div>
    <hr>
    <div class="card-header">
            <h5 class="title" style=" color: orange;">5. Tujuan Pinjaman</h5>
    </div>
            <div class="row">
                <div class="col-md-2">
                    <label>
                         <input type="radio" name="tujuan_pinjaman"  value="Pendidikan"  /> Pendidikan
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                         <input type="radio" name="tujuan_pinjaman" value="Tabungan"/> Tabungan
                    </label>
                </div>
                <div class="col-md-2">
                    <label>
                        <input type="radio" name="tujuan_pinjaman" value="Pembangunan" /> Pembangunan
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                        <label>
                            <input type="radio" name="tujuan_pinjaman" value="Tambahan Modal"/> Tambahan Modal
                        </label>
                </div>
                <div class="col-md-2">
                        <label>
                            <input type="radio" name="tujuan_pinjaman" value="Konsumtif"/> Konsumtif
                        </label>
                </div>
                <div class="col-md-2">
                        <label>
                            <input type="radio" name="tujuan_pinjaman" value="Kesehatan"/> Kesehatan
                        </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                        <label>
                            <input type="radio" name="tujuan_pinjaman" value="Lainnya" checked/> Lainnya
                        </label>
                </div>
            </div>
            <input type="hidden" class="form-control" name="status" value="Belum Diproses" readonly />
            <hr>
            <input type="hidden" class="form-control" name="tanggal_pengajuan" value="<?php echo date('Y-m-d'); ?>" readonly />
            <hr>
            <div class="row">
            <div class="col-md-12 pl-2">
                <input type="submit" name="simpan" value="SELESAI" class=" btn btn-default" style="float: right;">
                
            </div>     
        </div>
        </form>

        </div>
</div>
</div>

<?php 

include"connect.php";
if(isset($_POST['simpan'])){


  $save=mysql_query("INSERT into pengajuan(id_pengajuan,id_anggota,nama_wali,pekerjaan_wali,alamat_kerja_wali,telepon_wali,besar_pinjaman,lama_pinjaman,jaminan1,jaminan2,jaminan3,jaminan4,tujuan_pinjaman,tanggal_pengajuan,status) values('$_POST[id_pengajuan]','$_POST[id_anggota]','$_POST[nama_wali]','$_POST[pekerjaan_wali]','$_POST[alamat_kerja_wali]','$_POST[telepon_wali]','$_POST[besar_pinjaman]','$_POST[lama_pinjaman]','$_POST[jaminan1]','$_POST[jaminan2]','$_POST[jaminan3]','$_POST[jaminan4]','$_POST[tujuan_pinjaman]','$_POST[tanggal_pengajuan]','$_POST[status]')");

  if($save) {
  echo"<script language=javascript>
        window.location='?p=home&username=".$_GET[username]."';
        </script>";
        exit;
      }else{
        echo"gagal";
      }
}
?>
