<section class="content"> 
       <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <?php foreach ($data as $datas) { ?>
                        <h2>
                            Profil <?= $datas->nama_user ?>
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
                        <form method="POST" action="<?= base_url('Super_admin/selectAnggotaAction/'.$datas->id_user) ?>">
                            <div class="form-group form-float">
                                <div class="form-line disabled">
                                     <input type="text" class="form-control" name="nama_lengkap" placeholder="" value="<?= $datas->no_ktp ?>" maxlength="100" disabled />
                                        <label class="form-label">No. KTP*</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line disabled">
                                     <input type="text" class="form-control" name="nama_lengkap" placeholder="" value="<?= $datas->nama_user ?>" maxlength="100" disabled />
                                        <label class="form-label">Nama Lengkap*</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line disabled">
                                     <input type="text" class="form-control" name="nama_lengkap" placeholder="" value="<?= $datas->alamat ?>" maxlength="100" disabled />
                                        <label class="form-label">Alamat*</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line disabled">
                                     <input type="text" class="form-control" name="nama_lengkap" placeholder="" value="<?= $datas->no_hp ?>" maxlength="100" disabled />
                                        <label class="form-label">No. HP*</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <label class="form-label">Aktivasi Anggota*</label>
                                <select class="form-control show-tick" name="status_approved">
                                    <option value="<?= $datas->status_approved ?>">-- Pilih Aktivasi--</option>
                                    <option value="1">Approved</option>
                                    <option value="NULL">Reject</option>
                                </select>
                            </div>
                            <div class="form-group form-float">
                                <label class="form-label">Status Anggota*</label>
                                <select class="form-control show-tick" name="level">
                                    <option value="<?= $datas->level ?>">-- Pilih Status--</option>
                                    <option value="super admin">Ketua Tim Sukses</option>
                                    <option value="admin kelurahan">Penanggungjawab Kelurahan</option>
                                    <option value="admin anggota">Anggota Biasa</option>
                                </select>
                            </div>
                
                            <!-- HIDDEN -->
                            <div class="form-group form-float">
                                <div class="demo-switch-title">Ganti Password ?</div>
                                    <div class="switch">
                                        <label><input type="checkbox" onclick="add();" id="tombolCek"><span class="lever switch-col-amber"></span></label>
                                    </div>
                            </div>

                            <div class="form-group form-float" id="input1" style="display: none;">
                                <div class="form-line">
                                     <input type="password" class="form-control" name="new_pass" id="pw1" onblur="validatePassword();"  placeholder=""  maxlength="12" />
                                        <label class="form-label">Password Baru*</label>
                                </div>
                            </div>

                            <div class="form-group form-float" id="input2" style="display: none;">
                                <div class="form-line">
                                     <input type="password" class="form-control" name="retype_pass" id="pw2" onchange="validateElement();"  onblur="validatePassword();" placeholder=""  maxlength="12" />
                                        <label class="form-label">Ketik Ulang Password Baru*</label>
                                </div>
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
<!-- FUNCTION JS FOR CLICKABLE ROW DATATABLE -->
<script type="text/javascript">

    $('.dataTable').on('click', 'tbody td', function() {
        var idCustomer= $(this).data("row");
        window.location = "<?php echo base_url();?>service_advisor/customer/"+idCustomer;

})



 function validatePassword(){//fungsi untuk menyamakan input pasword baru dan konfirmasinya
    var y = document.getElementById('pw2').value;
    var x = document.getElementById('pw1').value;

    if (x!=y) {
        document.getElementById('warning').innerHTML = "Pasword Tidak Sama !";
        document.getElementById('tombol').setAttribute("type", "button");
    }else{
        document.getElementById('warning').innerHTML = "";
        document.getElementById('tombol').setAttribute("type", "submit");
    }
}

function add(){//fungsi untuk memunculkan input text
    if(document.getElementById("tombolCek").checked){
        document.getElementById("input1").style.display = "inline-block";
        document.getElementById("input2").style.display = "inline-block";
    }else{
        document.getElementById("input1").style.display = "none";
        document.getElementById("input2").style.display = "none";
    }
}


</script>
