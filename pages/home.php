<?php 
  include "connect.php";

  $sql=mysql_query("select nama_anggota from anggota where id_anggota='$_GET[username]'");  
  $data=mysql_fetch_array($sql);                
  
?>
<div class="content col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 style="color: orange;">Aplikasi Simpan Pinjam</h4>
                                <h7>Welcome <?php echo $data['nama_anggota'];?> , Love to see you back. </h7> 
                            </div>
                            <hr>
                            <div class="card-body ">
                                <div id="map" class="map">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
