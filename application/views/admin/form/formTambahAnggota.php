<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-mid">
                    <div class="display-mid">
                        <div class="card">
                            <div class="header bg-red" style="text-align: center">
                                <h2><b>Tambahkan Anggota Tim</b></h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <form id="sign_up" method="POST" >
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                            <label class="check" style="color: red; text-align: center;">

                                                <?php
                                                    $info = $this->session->flashdata('error');
                                                    if(!empty($info)){
                                                    echo $info;
                                                    }
                                                ?>

                                            </label>
                                            <label class="check" style="color: green; text-align: center;">

                                                <?php
                                                    $info = $this->session->flashdata('success');
                                                    if(!empty($info)){
                                                    echo $info;
                                                    }
                                                ?>

                                            </label>
                                            <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">TAMBAH</button>
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