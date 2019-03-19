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
                        .opsi{
                            color: #e56e00;
                        }
                        @media(max-width:412px){
                            .btn{
                                width: 100% !important;
                            }
                        }
                    </style>
                    <div class="body">
                        <form>
                                <!-- <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_kk" placeholder="" value="" maxlength="100" required />
                                            <label class="form-label">Nomor KK*</label>
                                    </div>
                                </div> -->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="" value="" maxlength="20" required />
                                            <label class="form-label">Nomor KTP*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="nama_pemilih" id="nama_pemilih" placeholder="" value="" maxlength="100" required />
                                            <label class="form-label">Nama Lengkap*</label>
                                    </div>
                                </div><br>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="alamat" id="alamat" placeholder="" value="" maxlength="100" required />
                                            <label class="form-label">Alamat*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="" value="" maxlength="20" required />
                                            <label class="form-label">No. HP*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input type="text" class="form-control" name="no_tps" id="no_tps" placeholder="" value="" maxlength="20" required />
                                            <label class="form-label">No. TPS*</label>
                                    </div>
                                </div>
                                <div class="input-group form-group form-float">
                                    <label class="form-label">Kecamatan</label>
                                    <select class="form-control show-tick" id="pilih_kecamatan" name="pilih_kecamatan">
                                        <option>-- Pilih Kecamatan--</option>
                                        <?php foreach ($kec as $key) {?>
                                        <option value="<?= $key->id_kecamatan ?>"><?= $key->nama_kecamatan ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Kelurahan</label>
                                    <select class="form-control show-tick" name="pilih_kelurahan" id="pilih_kelurahan">
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
                                    <button type="button" class="btn bg-orange waves-effect" id="tombol">
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
<script type="text/javascript">
//     $('.dataTable').on('click', 'tbody td', function() {
//         var idEstimasi= $(this).data("row");
//         window.location = "<?php echo base_url();?>Ptm/selectTeam/"+idEstimasi;
  
// })
    // var id_estimasi = '';
    // $('.modalInput').on('click', function(){
    //     $('#defaultModal').modal('show');
    //     id_estimasi = $(this).data('row');
    //     console.log(id_estimasi);
    // });
    $('#tombol').on('click', function(){
            // var id_estimasi = $(this).data('row');
            // var status_estimasi = $(this).data('status');
            var no_ktp         = $('#no_ktp').val();
            var namaPemilih    = $('#nama_pemilih').val();
            var alamat         = $('#alamat').val();
            var no_hp          = $('#no_hp').val();
            var no_tps         = $('#no_tps').val();
            var selectKecamatan= $('#pilih_kecamatan').val();
            var selectKelurahan= $('#pilih_kelurahan').val();
            // console.log(no_wo);
            // console.log(selectTim);
            // console.log(id_estimasi);
            // console.log(status_estimasi);
            // console.log(tgl_janji_penyerahan);
            // if(tgl_janji_penyerahan == ''){
            //     alert("Input tanggal janji penyerahan !");
            //     return false;
            // }
            swal({
                    title: "Apakah Anda Yakin?",
                    text: "Data Yang Sama Tidak Akan Terinput Ke Database!",
                    type: "warning",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true,
                }, function () {
                    var data = {
                    'no_ktp'          : no_ktp,
                    'namaPemilih'     : namaPemilih,
                    'alamat'          : alamat,
                    'no_hp'           : no_hp,
                    'no_tps'          : no_tps,
                    'selectKecamatan' : selectKecamatan,
                    'selectKelurahan' : selectKelurahan
                    };

                    $.ajax({
                        url:"<?php echo base_url();?>Super_admin/ajaxInputSwal",
                        method:"POST",
                        // crossOrigin : false,
                        data : data,
                        // dataType:'json',
                        success: function(result)
                        {
                            console.log(result);
                            if(result == 'success'){
                                swal("Selamat!", "Pemilih Baru Telah Ditambahkan", "success");
                                setTimeout(function(){
                                       window.location.reload(1);
                                    }, 1000);
                            }else{
                                swal("Gagal!", "Anda Memasukkan Data Yang Sama!", "warning");
                                setTimeout(function(){
                                       window.location.reload(1);
                                    }, 1000);
                            }
                            console.log('data');
                            
                        }
                         
                    });
                });
        });
</script>
