<?php
include "../pages/connect.php";

$query=mysql_query("SELECT max(id_anggota) as maxKode FROM anggota");
$data=mysql_fetch_array($query);
$id_anggota = $data['maxKode'];

$nourut = (int) substr($id_anggota, 5, 5);
$nourut++;

$kode = "AN";
$kodebaru = $kode . sprintf("%04s", $nourut);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Register</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="../index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom"">
                    <p style="color: orange;"><B>Home</B></p>
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="loginpage.html" >
                            
                            <p style="color: orange;"><B>Login</B></p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        
        <div class="main">
            <!-- End .section-navbars  -->
            
            <!-- End Section Tabs -->
            
            <!--  end notifications -->
            <!-- Typography -->
            
            <div class="section section-signup" style="background-image: url('../assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 900px;">
                <div class="container">
                    <div class="row">
                        <div class="card card-signup" data-background-color="orange">
                            <form class="form" method="post" action="">
                                <div class="header text-center">
                                    <h8 class="title title-up">Sign Up</h8>
                                </div>
                            <div class="card-body">
                                <input type="hidden" class="form-control" name="id_anggota" value="<?php echo $kodebaru; ?>" readonly />
                              <input type="hidden" class="form-control" name="level" value="anggota" readonly />
                                <div class="row">
                                    <div class="col-md-4">
                                        <label> Nama</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="nama_anggota" class="form-control" placeholder="Nama...">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label> Tanggal Lahir <br>ex : 1997-05-05</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir...">
                                    </div>
                                </div> <br>                              
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <label> Jenis Kelamin</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="radio" name="jekel" value="Perempuan" checked> Perempuan
                                    <input type="radio" name="jekel" value="Laki laki"> Laki laki
                                </div>
                            </div> <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label> No. KTP</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="no_ktp" placeholder="No KTP..." class="form-control" />
                                </div>
                            </div> <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label> Alamat</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="alamat" placeholder="Alamat..." class="form-control" />
                                </div>
                            </div> <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label> Telepon</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="telepon" placeholder="Telepon..." class="form-control" />
                                </div>
                            </div> <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label> Pekerjaan</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="pekerjaan" placeholder="Pekerjaan..." class="form-control" />
                                </div>
                            </div> <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label> Username</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group form-group-no-border input-lg">
                                    <input type="text" name="username" placeholder="<?php echo $kodebaru; ?>" readonly class="form-control" />
                                </div>
                                </div>
                            </div> <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label> Password</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" name="password" placeholder="Password..." class="form-control" />
                                </div>
                            </div> <br>

                            <div class="footer text-center">
                        <button name="simpan" class="btn btn-primary btn btn-neutral btn-round btn-lg">Sign Up</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sart Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           
        </div>
        <!--  End Modal -->
        <!-- Mini Modal -->
        <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <div class="modal-profile">
                            <i class="now-ui-icons users_circle-08"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Always have an access to your profile</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-neutral">Back</button>
                        <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->
        <footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                MIT License
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.www.mediatamaweb.co.id" target="_blank">CV. MEDIATAMA WEB INDONESIA</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

</html>

<?php 

include"connect.php";
if(isset($_POST['simpan'])){
  $id_anggota=$_POST['id_anggota'];
  $nama_anggota=$_POST['nama_anggota'];
  $tgl_lahir=$_POST['tgl_lahir'];
  $jekel=$_POST['jekel'];
  $no_ktp=$_POST['no_ktp'];
  $alamat=$_POST['alamat'];
  $telepon=$_POST['telepon'];
  $pekerjaan=$_POST['pekerjaan'];  
  $password=$_POST['password'];
  $level=$_POST['level'];

  $save=mysql_query("INSERT INTO anggota (id_anggota,nama_anggota,tgl_lahir,jekel,no_ktp,alamat,telepon,pekerjaan,password) 
    VALUES ('$id_anggota','$nama_anggota','$tgl_lahir','$jekel','$no_ktp','$alamat','$telepon','$pekerjaan','$password')");

  $user=mysql_query("INSERT into user (id_user,username,password,level) VALUES ('','$id_anggota','$password','$level')");

  if($save) {
  echo"<script language=javascript>
  window.alert('Register Berhasil');
        window.location='loginpage.html';
        </script>";
        exit;
      }else{
        echo" Register gagal";
      }
}
?>