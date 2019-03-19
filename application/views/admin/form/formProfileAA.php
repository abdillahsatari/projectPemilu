<section class="content"> 
       <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Profil <?php
                                echo $this->session->userdata('nama_user');
                             ?>
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

                        <form method="POST" action="<?= base_url('Admin_anggota/userUpdateAction') ?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="nama_lengkap" placeholder="" value="<?php echo $this->session->userdata('nama_user'); ?>" maxlength="100" required />
                                            <label class="form-label">Nama Lengkap*</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="username" placeholder="" value="<?php echo $this->session->userdata('username'); ?>" maxlength="20" required />
                                            <label class="form-label">Username*</label>
                                    </div>
                                </div>

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
                                    <button type="submit" class="btn bg-orange waves-effect" id="tombol">
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
