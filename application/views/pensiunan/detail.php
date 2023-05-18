<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <body style="background-color:#f6c23e;">
            <div class="card">
                <div class="card-header">
                    Detail Data Pensiunan
                </div>
                <div class="card-body">
                    <h5 class="card-text"><?= $pensiunan['nopen']; ?></h5>
                    <h6 class="card-text"><?= $pensiunan['nama_pensiunan']; ?></h6>
                    <p class="card-text"><?= $pensiunan['nik_penerima']; ?></p>
                    <p class="card-text"><?= $pensiunan['nama_penerima']; ?></p>
                    <p class="card-text"><?= $pensiunan['notelp_penerima']; ?></p>
                    <a href="<?= base_url(); ?>pensiunan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>