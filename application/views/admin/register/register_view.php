<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <style type="text/css">
        .signup-page{
            max-width: 800px !important;
            margin-top: 32px !important; 
            margin-bottom: 10px !important;
        }
    </style>
    <!-- Meta tag Keywords -->
    <title>Daftar | AndiVivinNAH</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


    <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Dropzone Css -->
    <!-- <link href="<?php echo base_url() ?>/assets/plugins/dropzone/dropzone.css" rel="stylesheet"> -->

    <link href="<?php echo base_url() ?>/assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url() ?>/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url() ?>/assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url() ?>/assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">
</head>

<body class="signup-page">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- <div class="logo">
            <a href="javascript:void(0);">AndiVivin<b>NAH</b></a>
            <small>Dari Rakyat - Bagi Rakyat - Untuk Rakyat</small>
        </div> -->
        <div class="card">
            <div class="header bg-red" style="text-align: center">
                <h2><b>DAFTAR SEBAGAI TIM SUKSES</b></h2>
            </div>
            <div class="body">
                <!-- <form id="sign_up" method="POST">
                    <div class="msg">Daftar Menjadi Tim Sukses</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="no_ktp" placeholder="No. KTP" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="alamat" minlength="6" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="no_hp" minlength="6" placeholder="No. HP" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="username" minlength="6" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm_pasword" minlength="6" placeholder="Konfirmasi Password" required>
                        </div>
                    </div>
                    <div class="input-group form-group form-float">
                        <label class="form-label">Kecamatan</label>
                        <select class="form-control show-tick" name="pilih_kecamatan">
                            <option>-- Pilih Kecamatan--</option>
                            <option>Kecamatan Mamajang</option>
                            <option>Kecamatan Mariso</option>
                            <option>Kecamatan Tamalate</option>
                        </select>
                    </div>
                    <div class="input-group form-group form-float">
                        <label class="form-label">Kelurahan</label>
                        <select class="form-control show-tick" name="pilih_kelurahan">
                            <option>-- Pilih Kelurahan--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">Saya Bersedia Mengikuti Aturan Yang Ada.<a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">DAFTAR</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.html">Sudah Mendaftar ?</a>
                    </div>
                </form> -->
                <div class="row clearfix">
                    <form id="sign_up" method="POST" action="<?php echo base_url('Register/tambahAnggota'); ?>">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h4>Informasi Pribadi</h4>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="no_ktp_anggota" placeholder="No. KTP" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nama_anggota" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="alamat_anggota" minlength="6" placeholder="Alamat" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="no_hp_anggota" minlength="6" placeholder="No. HP" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h4>Informasi Akun</h4>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="username_anggota" minlength="6" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password_anggota" minlength="6" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="confirm_pasword" minlength="6" placeholder="Konfirmasi Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="input-group form-group form-float">
                                <h4>Kecamatan</h4>
                                <select class="form-control show-tick" name="pilih_kecamatan">
                                    <option>-- Pilih Kecamatan--</option>
                                    <option>Kecamatan Mamajang</option>
                                    <option>Kecamatan Mariso</option>
                                    <option>Kecamatan Tamalate</option>
                                </select>
                            </div>
                            <div class="input-group form-group form-float">
                                <h4>Kelurahan</h4>
                                <select class="form-control show-tick" name="pilih_kelurahan">
                                    <option>-- Pilih Kelurahan--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                                <label for="terms">Saya Bersedia Mengikuti Aturan Yang Ada. <!-- <a href="javascript:void(0);">terms of usage</a>.</label> -->
                            </div>

                            <label class="check" style="color: #e5d895; text-align: center;">

                                <?php
                                    $info = $this->session->flashdata('info');
                                    if(!empty($info)){
                                    echo $info;
                                    }
                                ?>

                            </label>

                            <button class="btn btn-block btn-lg bg-orange waves-effect" type="submit">DAFTAR</button>

                            <div class="m-t-25 m-b--5 align-center">
                                <a href="sign-in.html">Sudah Mendaftar ?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url() ?>/assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>/assets/js/admin.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/pages/examples/sign-up.js"></script>


    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('assets/')?>plugins/bootstrap/js/bootstrap.js"></script>

    
    <!-- Select Plugin Js -->
    <script src="<?=base_url('assets/')?>plugins/bootstrap-select/js/bootstrap-select.js"></script>


    <!-- <?php if ($dataScript) $this->load->view($dataScript); ?> -->
</body>

</html>