<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Halaman Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Halaman login tim pemenangan andi vivin" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/homepage/css/style_login.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="<?php echo base_url(); ?>assets/homepage/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- //web-fonts -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url() ?>/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url() ?>/assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url() ?>/assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">

</head>

<body class="login-page">
    <!-- title -->
    <div class="login-box div-body">
        <div class="logo">
            <!-- //title -->
            <!-- <a href="javascript:void(0);">AndiVivin<b>NAH</b></a> -->
            <small>Dari Rakyat - Bagi Rakyat - Untuk Rakyat</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?php echo base_url('login/cekLogin'); ?>">
                    <div class="msg">Masukkan Username Dan Password Anda</div>
                    <!-- <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div> -->
                    <div class="input">
                        <input type="text" placeholder="Username...." name="username" maxlength="20" required />
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Password...." name="password" maxlength="12" required />
                        <span class="fa fa-lock"></span>
                    </div>
                    <label class="check" style="color: #e5d895;text-align: center;">

                        <?php
                            $info = $this->session->flashdata('info');
                            if(!empty($info)){
                            echo $info;
                            }
                        ?>

                    </label>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-block bg-pink waves-effect" id="button_sign_in" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div>
                        <!-- <div class="col-xs-6" class="regist">
                            <a href="<?php echo base_url('register'); ?>">Daftar!</a>
                        </div> -->
                        <!-- <div>
                            <a href="javascript:void(0);">Forgot Password?</a>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- content -->
        <!-- <div class="sub-main-w3">
            <form action="<?php echo base_url('login/cekLogin'); ?> " method="post">
                <p class="legend">Login Here<span class="fa fa-hand-o-down"></span></p>
                <div class="input">
                    <input type="text" placeholder="Username...." name="username" maxlength="20" required />
                    <span class="fa fa-user"></span>
                </div>
                <div class="input">
                    <input type="password" placeholder="Password...." name="password" maxlength="12" required />
                    <span class="fa fa-lock"></span>
                </div>
                <label class="check" style="color: yellow;text-align: center;">

                    <?php
                        $info = $this->session->flashdata('info');
                        if(!empty($info)){
                        echo $info;
                        }
                    ?>

                </label>
                <button type="submit" class="submit">
                    <span class="fa fa-sign-in"></span>
                </button>
            </form>
        </div> -->
        <!-- //content -->  

        <!-- Jquery Core Js -->
        <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="<?php echo base_url() ?>/assets/plugins/node-waves/waves.js"></script>

        <!-- Validation Plugin Js -->
        <script src="<?php echo base_url() ?>/assets/plugins/jquery-validation/jquery.validate.js"></script>

        <!-- Custom Js -->
        <script src="<?php echo base_url() ?>/assets/js/admin.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/pages/examples/sign-in.js"></script>
        <script type="text/javascript">
            $('#button_sign_in').on('click' , function(e) {
                e.preventdefault();
            })
        </script>
</body>

</html>

<style type="text/css">
    body{
        /*background-image: url('<?php echo base_url(); ?>/assets/homepage/img/coba.jpg');
        background-repeat: no-repeat;
        background-size: inherit;*/
        background: #e01414 !important;
    }
    .card{
        background: rgba(25, 24, 24, 0.32) !important;
        box-shadow: 0px 1px 13px 2px #a09a9a;
        /*rgba(251, 251, 251, 0.09)*/
    }
    .msg{
        color: white !important;
    }
    .regist{
        color: white !important;
    }

    /*-- //copyright --*/

    /*-- responsive --*/

    /*--responsive--*/
    @media(max-width:800px) {
        .div-body {
            float: none !important;
        }
    }

    /*@media(max-width:480px) {
        .div-body form {
            padding: 7.5vw !important;
        }
    }*/

   /* @media(max-width:360px) {
        h1 {
            font-size: 1.8em;
        }

        .div-body form {
            padding: 25px 4px !important;
        }
    }*/

    @media(max-width:320px) {
        h1 {
            font-size: 1.8em;
        }

        .div-body form {
            padding: 25px 8px !important;
        }
    }

    /*--//responsive--*/
</style>