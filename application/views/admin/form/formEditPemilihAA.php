<section class="content"> 
       <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Ubah Data Pemilih
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
                        <?php foreach ($data as $datas) {
                        ?>
                        <form method="POST" action="<?= base_url('Admin_anggota/selectPemilihAction/'.$datas->id_pemilih) ?>">
                                <!-- <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_kk" placeholder="" value="<?= $datas->no_kk_pemilih ?>" maxlength="100" required />
                                            <label class="form-label">Nomor KK*</label>
                                    </div>
                                </div> -->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_ktp" placeholder="" value="<?= $datas->no_ktp_pemilih ?>" maxlength="20" required />
                                            <label class="form-label">Nomor KTP*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="nama_pemilih" placeholder="" value="<?= $datas->nama_pemilih ?>" maxlength="100" required />
                                            <label class="form-label">Nama Lengkap*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="alamat" placeholder="" value="<?= $datas->alamat_pemilih ?>" maxlength="100" required />
                                            <label class="form-label">Alamat*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_hp" placeholder="" value="<?= $datas->no_hp_pemilih ?>" maxlength="20" required />
                                            <label class="form-label">No. HP*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_tps" placeholder="" value="" maxlength="20" required />
                                            <label class="form-label">No. TPS*</label>
                                    </div>
                                </div>
                                <div class="input-group form-group form-float">
                                    <label class="form-label">Kecamatan</label>
                                    <select class="form-control show-tick" id="kecamatan" name="pilih_kecamatan">
                                        <option>-- Pilih Kecamatan--</option>
                                        <?php foreach ($kec as $key) {?>
                                        <option value="<?= $key->id_kecamatan ?>"><?= $key->nama_kecamatan ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Kelurahan</label>
                                    <select class="form-control show-tick" name="pilih_kelurahan">
                                        <option>-- Pilih Kelurahan--</option>
                                        <optgroup label="Mamajang" class="opsi">
                                            <?php foreach ($kel1 as $datas2) { ?>
                                            <option value="<?= $datas2->id_kelurahan ?>"><?= $datas2->nama_kelurahan ?></option>
                                            <?php } ?>
                                        </optgroup>
                                        <optgroup label="Mariso" class="opsi">
                                            <?php foreach ($kel2 as $datas2) { ?>
                                            <option value="<?= $datas2->id_kelurahan ?>"><?= $datas2->nama_kelurahan ?></option>
                                            <?php } ?>
                                        </optgroup>
                                        <optgroup label="Tamalate" class="opsi">
                                            <?php foreach ($kel3 as $datas2) { ?>
                                            <option value="<?= $datas2->id_kelurahan ?>"><?= $datas2->nama_kelurahan ?></option>
                                            <?php } ?>
                                        </optgroup>
                                    </select>    
                                </div>
                                
                                <h6 id="warning" style="color: orange"></h6>

                                <div class="form-group">
                                    <button type="submit" class="btn bg-orange btn-block waves-effect" id="tombol">
                                        <i class="material-icons">save</i>
                                            <span>SIMPAN</span>
                                    </button>
                                </div>

                                <div id="tes"></div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
</section>