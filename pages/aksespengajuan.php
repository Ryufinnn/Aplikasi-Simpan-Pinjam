
<?php
include "connect.php";

?><div class="col-md-12">
<div class="card">    
                            <div class="card-header">
                                <h4 class="card-title" > Data Pengajuan Pinjaman</h4><hr>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th width="29" style="text-align: center;">
                                                No.
                                            </th>
                                            <th width="29" style="text-align: center;">
                                                Kode Pengajuan
                                            </th>
                                            <th width="50" style="text-align: center;">
                                                Nama Peminjam
                                            </th>
                                            <th  style="text-align: center;">
                                                Nama Wali
                                            </th>
                                            <th style="text-align: center;">
                                                Besar Pinjaman
                                            </th>
                                            <th width="50" style="text-align: center;">
                                                Lama Pinjaman
                                            </th>
                                            <th width="50" style="text-align: center;">
                                                Tujuan Pinjaman
                                            </th>
                                            <th  style="text-align: center;">
                                                Status
                                            </th>
                                            <th style="text-align: center;">
                                                Aksi
                                            </th>
                                        </thead>
                    <?php
                      $no=1;
                      $tampil=mysql_query("select * from pengajuan,anggota where anggota.id_anggota=pengajuan.id_anggota");
                      while($data=mysql_fetch_array($tampil)){  
                        $besar=$data['besar_pinjaman'];
                    ?> 
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['id_pengajuan']; ?>
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
                                                <td width="50"style="text-align: center;">
                                                    <?php echo $data['status']; ?>
                                                </td>
                                                <td class="text-right">
                            <a href="?p=detailpengajuan&id_pengajuan=<?php echo $data['id_pengajuan']; ?>">
                                <button class="btn btn-primary btn-icon btn-round" type="button" title="Konfirmasi">
                                    <i class="now-ui-icons files_paper"></i>
                                </button>
                            </a>
                            <a href="?p=hapuspengajuan&id_pengajuan=<?php echo $data['id_pengajuan']; ?>">
                                <button class="btn btn-primary btn-icon btn-round" type="button" title="Hapus">
                                    <i class="now-ui-icons shopping_basket"></i>
                                </button>
                            </a>
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