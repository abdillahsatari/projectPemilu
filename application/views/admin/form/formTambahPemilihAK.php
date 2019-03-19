<section class="content"> 
       <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambahkan Data Pemilih
                        </h2>
                        <h6 style="color: orange;">
                            <?php
                                $info = $this->session->flashdata('update_sukses');
                                if(!empty($info)){
                                echo $info;
                            }
                            ?>
                        </h6>

                    </div>
                     <style type="text/css">
                        /*hilangkan exportable dan menyisakan input search di tabel*/
                        .dt-buttons {
                            display: none;
                        }
                    </style>
                    <div class="body">
                        <form method="POST" action="<?= base_url('Admin_kelurahan/tambahPemilihAction') ?>">
                                <!-- <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_kk" placeholder="" value="" maxlength="100" required />
                                            <label class="form-label">Nomor KK*</label>
                                    </div>
                                </div> -->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_ktp" placeholder="" value="" maxlength="20" required />
                                            <label class="form-label">Nomor KTP*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="nama_pemilih" placeholder="" value="" maxlength="100" required />
                                            <label class="form-label">Nama Lengkap*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="alamat" placeholder="" value="" maxlength="100" required />
                                            <label class="form-label">Alamat*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_hp" placeholder="" value="" maxlength="20" required />
                                            <label class="form-label">No. HP*</label>
                                    </div>
                                </div>
                                
                                <h6 id="warning" style="color: orange"></h6>
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
                                <div class="form-group">
                                    <button type="submit" class="btn bg-orange btn-block waves-effect" id="tombol">
                                        <i class="material-icons">save</i>
                                            <span>SIMPAN</span>
                                    </button>
                                </div>

                                <div id="tes"></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
</section>