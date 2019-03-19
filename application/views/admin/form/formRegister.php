<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-mid">
                    <div class="display-mid">
                        <div class="card">
                            <div class="header bg-red" style="text-align: center">
                                <h2><b>DAFTAR SEBAGAI TIM SUKSES</b></h2>
                            </div>
                            <style type="text/css">
                                    .content {
                                        margin: 0 0 0 0 !important;
                                        background: #00BCD4 !important;
                                    }
                                /*hilangkan exportable dan menyisakan input search di tabel*/
                                    .dt-buttons {
                                        display: none;
                                    }

                                    .text-mid {
                                        text-align: center;
                                    }

                                    .display-mid {
                                        display: inline-block !important;
                                        margin-top: 10px;
                                        background-color: #00BCD4;
                                        padding-left: 0;
                                        /*max-width: 360px;*/
                                        margin: 5% auto;
                                        overflow-x: hidden; }
                                        /*max-width: 900px !important;*/
                                        /*min-width: 400px !important;*/
                                    }
                                </style>
                            <div class="body">
                                <div class="row clearfix">
                                    <form id="sign_up" method="POST">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <h4>Informasi Pribadi</h4>
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
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <h4>Informasi Akun</h4>
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
                                            <label for="terms">Saya Bersedia Mengikuti Aturan Yang Ada. <!-- <a href="javascript:void(0);">terms of usage</a>.</label> -->
                                        </div>

                                        <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">DAFTAR</button>

                                        <div class="m-t-25 m-b--5 align-center">
                                            <a href="sign-in.html">Sudah Mendaftar ?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style type="text/css">

/*    @media(min-width:1920px) {
        
        .display-mid {
            display: inline-block !important;
            margin-top: 90px;
            padding-top: 0px; 
            /*margin-top: -50%;*/
            /*max-width: 900px !important;*/
            /*min-width: 400px !important;*/
      /*  }
    }*/

  /*  @media(min-width:1024px) {
        .display-mid{
            padding-top: 10%;
            margin-top: 50%;
            /*width: 900px;*/
     /*   }
    }
*/
    /*@media(max-width:800px) {*/
        /*.display-mid{
            margin-top: ;
        }*/
    /*}*/
</style>