<?= form_open_multipart('#', ['id' => 'editpegawai']) ?>
<input type="hidden" name="id_pegawai_edit" id="id_pegawai_edit" value="<?= $datapegawai['id_pegawai'] ?>">
<div class="form-group row">
    <label for="nama_pegawai_edit" class="col-sm-4 col-form-label">Nama Pegawai</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="nama_pegawai_edit" name="nama_pegawai_edit" value="<?= $datapegawai['nama_lengkap'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="username_pegawai_edit" class="col-sm-4 col-form-label">NIK Pegawai</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="username_pegawai_edit" name="username_pegawai_edit" value="<?= $datapegawai['username'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="password_pegawai_edit" class="col-sm-4 col-form-label">Password Pegawai</label>
    <div class="col-sm-8">
        <div class="input-group" id="sh_hd_pass">
            <input type="password" class="form-control" id="password_pegawai_edit" name="password_pegawai_edit">
            <div class="input-group-append">
                <button class="input-group-text" type="button" tabindex="-1"><span class="fas fa-eye-slash" aria-hidden="false"></span></button>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="jabatan_pegawai_edit" class="col-sm-4 col-form-label">Jabatan</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="jabatan_pegawai_edit" name="jabatan_pegawai_edit" value="<?= $datapegawai['jabatan'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="npwp_pegawai_edit" class="col-sm-4 col-form-label">NPWP</label>
    <div class="col-sm-8">
        <div class="form-check form-check-inline">
            <?= form_radio('npwp_pegawai_edit', 'THL', set_value('npwp_pegawai_edit[]', ($datapegawai['npwp'] == "THL") ? true : false), 'id="npwp_pegawai_edit" class="form-check-input"'); ?>
            <label class="form-check-label" for="npwp_pegawai_edit1">THL</label>
        </div>
        <div class="form-check form-check-inline">
            <?= form_radio('npwp_pegawai_edit', 'Kontrak', set_value('npwp_pegawai_edit[]', ($datapegawai['npwp'] == "Kontrak") ? true : false), 'class="form-check-input"'); ?>
            <label class="form-check-label" for="npwp_pegawai_edit2">Kontrak</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="role_pegawai_edit" class="col-sm-4 col-form-label">Role Akun</label>
    <div class="col-sm-8">
        <?= form_dropdown('role_pegawai_edit', ['' => 'Select Role', 1 => 'Administrator', 3 => 'Pegawai'], set_value('role_pegawai_edit', $datapegawai['role_id']), 'class="form-control" id="role_pegawai_edit"'); ?>
    </div>
</div>
<div class="form-group row">
    <label for="jenis_kelamin_pegawai" class="col-sm-4 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-8">
        <div class="form-check form-check-inline">
            <?= form_radio('jenis_kelamin_pegawai_edit', 'Laki - Laki', set_value('jenis_kelamin_pegawai_edit[]', ($datapegawai['jenis_kelamin'] == "Laki - Laki") ? true : false), 'id="jenis_kelamin_pegawai_edit" class="form-check-input"'); ?>
            <label class="form-check-label" for="jenis_kelamin_pegawai_edit1">Laki - Laki</label>
        </div>
        <div class="form-check form-check-inline">
            <?= form_radio('jenis_kelamin_pegawai_edit', 'Perempuan', set_value('jenis_kelamin_pegawai_edit[]', ($datapegawai['jenis_kelamin'] == "Perempuan") ? true : false), 'class="form-check-input"'); ?>
            <label class="form-check-label" for="jenis_kelamin_pegawai_edit2">Perempuan</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="verifikasi_pegawai_edit" class="col-sm-4 col-form-label">Verifikasi Pegawai</label>
    <div class="col-sm-8">
        <div class="form-check form-check-inline">
            <?= form_radio('verifikasi_pegawai_edit', 0, set_value('verifikasi_pegawai_edit[]', ($datapegawai['is_active'] == 0) ? true : false), 'id="verifikasi_pegawai_edit" class="form-check-input"'); ?>
            <label class="form-check-label" for="verifikasi_pegawai_edit1">Belum Terverifikasi</label>
        </div>
        <div class="form-check form-check-inline">
            <?= form_radio('verifikasi_pegawai_edit', 1, set_value('verifikasi_pegawai_edit[]', ($datapegawai['is_active'] == 1) ? true : false), 'class="form-check-input"'); ?>
            <label class="form-check-label" for="verifikasi_pegawai_edit2">Terverifikasi</label>
        </div>
    </div>
</div>
<!-- <div class="form-group row">
    <label for="barcode_pegawai" class="col-sm-4 col-form-label">Buat Barcode Pegawai</label>
    <div class="col-sm-8">
        <div class="custom-control custom-checkbox"><?= form_checkbox('barcode_pegawai_edit', 1, ($datapegawai['qr_code_use'] == 1) ? true : false, 'id="barcode_pegawai_edit" class="custom-control-input"'); ?><label class="custom-control-label" for="barcode_pegawai_edit">Dengan Barcode</label></div>
    </div>
</div> -->
<div class="form-group row">
    <div class="col-sm-2">Pas Foto Pegawai</div>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-3">
                <img src="<?= $foto_source = (empty($datapegawai['image'])) ? base_url('assets/img/default-profile.png') : (($datapegawai['image'] == 'default.png') ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $datapegawai['image'])); ?>" class="img-thumbnail">
            </div>
            <div class="col-sm-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input edit-pas-pegawai" id="foto_pegawai_edit" name="foto_pegawai_edit">
                    <label class="custom-file-label edit-pas-pegawai-label" for="foto_pegawai_edit">Choose file. Max 2 MB</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="my-2" id="info-edit"></div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Batal</button>
    <button type="submit" class="btn btn-primary" id="editpgw-btn"><span class="fas fa-pen mr-1"></span>Edit</button>
</div>
</form>

<script>
    $("#sh_hd_pass button").on('click', function(event) {
        event.preventDefault();
        if ($('#sh_hd_pass input').attr("type") == "text") {
            $('#sh_hd_pass input').attr('type', 'password');
            $('#sh_hd_pass span').addClass("fa-eye-slash");
            $('#sh_hd_pass span').removeClass("fa-eye");
        } else if ($('#sh_hd_pass input').attr("type") == "password") {
            $('#sh_hd_pass input').attr('type', 'text');
            $('#sh_hd_pass span').removeClass("fa-eye-slash");
            $('#sh_hd_pass span').addClass("fa-eye");
        }
    });

    $('.edit-pas-pegawai').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.edit-pas-pegawai-label').addClass("selected").html(fileName);
    });
</script>