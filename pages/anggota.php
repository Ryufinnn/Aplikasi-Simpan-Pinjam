<?php 
  include "connect.php";

  $sql=mysql_query("select * from anggota where id_anggota='$_GET[username]'");  
  $data=mysql_fetch_array($sql);                
  
?>
 <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Profile</h5>
                                <hr>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Username </label>
                                                <input type="text" name="id_anggota" class="form-control" disabled="" value="<?php echo $data['id_anggota']; ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama_anggota" class="form-control" placeholder="Nama" value="<?php echo $data['nama_anggota']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                                <input type="text" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $data['tgl_lahir']; ?>">
                                            </div>
                                        </div>
                                    </div>  
                                    <?php 
                                       if($data['jekel']=='Perempuan'){
                                           $sel1='checked';
                                       }else{
                                           $sel2='checked';
                                       }
                                     ?>
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label><br>
                                                <input type="radio" name="jekel" value="Perempuan" <?php echo "$sel1"; ?> /> Perempuan
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" name="jekel" value="Laki laki" <?php echo "$sel2"; ?> /> Laki laki
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>No. KTP</label>
                                                <input type="text" name="no_ktp" class="form-control" placeholder="No. KTP" value="<?php echo $data['no_ktp']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Telepon</label>
                                                <input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $data['telepon']; ?>">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control" placeholder="Home Address" value="<?php echo $data['alamat']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                      
                                        
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?php echo $data['pekerjaan']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $data['password']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="row">
                                       <div class="col-md-12">
                                           <input type="submit" name="simpan" value="EDIT" class=" btn btn-default" style="float: right;">
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


                   