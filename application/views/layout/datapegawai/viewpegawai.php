<div class="row detail">
    <div class="col-md-2 col-sm-4 col-6 p-2">
        <img class="img-thumbnail" src="<?= ($datapegawai['image'] == 'default.png' ? base_url('assets/img/default-profile.png') : base_url('storage/profile/' . $datapegawai['image'])); ?>" class="card-img">
    </div>
    <div class="col-md-10 col-sm-8 col-6">
        <dl class="row">
            <dt class="col-sm-5">Nama Lengkap:</dt>
            <dd class="col-sm-7"><?= $datapegawai['nama_lengkap'] ?></dd>
            <dt class="col-sm-5">Jenis Kelamin:</dt>
            <dd class="col-sm-7"><?= $datapegawai['jenis_kelamin'] ?></dd>
            <dt class="col-sm-5">NIK:</dt>
            <dd class="col-sm-7"><?= $datapegawai['npwp'] ?></dd>
            <dt class="col-sm-5">Jabatan:</dt>
            <dd class="col-sm-7"><?= $datapegawai['jabatan'] ?></dd>
            <dt class="col-sm-5">Status Pegawai:</dt>
            <dd class="col-sm-7"><?= $datapegawai['npwp'] ?></dd>
        </dl>
    </div>
</div>
<!-- <div class="text-center">
    <h4 class="my-2">Barcode Pegawai</h4>
    <img class="img my-2 img-rounded" src="<?= ($datapegawai['qr_code_image'] == 'no-qrcode.png' ? base_url('assets/img/no-qrcode.png') : base_url('storage/qrcode_pegawai/' . $datapegawai['qr_code_image'])); ?>" style="width:15%;">
</div> -->