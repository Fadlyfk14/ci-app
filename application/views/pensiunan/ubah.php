<body style="background-color:#f6c23e;">

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Form Ubah Data Pensiunan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $pensiunan['id']; ?>">
                            <div class="form-group">
                                <label for="nopen">Nomor Pensiun</label>
                                <input type="text" name="nopen" class="form-control" id="nopen" value="<?= $pensiunan['nopen']; ?>">
                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nama_pensiunan">Nama Pensiunan</label>
                                <input type="text" name="nama_pensiunan" class="form-control" id="nama_pensiunan" value="<?= $pensiunan['nama_pensiunan']; ?>">
                                <small class="form-text text-danger"><?= form_error('nama_pensiunan'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jenis_pensiun">Jenis Pensiun</label>
                                <select class="form-control" id="jenis_pensiun" name="Jenis_pensiun">
                                    <?php foreach ($jenis_pensiun as $j) : ?>
                                        <?php if ($j == $pensiunan['jenis_pensiun']) : ?>
                                            <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j; ?>"><?= $j; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nik_penerima">NIK Penerima Kuasa</label>
                                <input type="text" name="nik_penerima" class="form-control" id="nik_penerima" value="<?= $pensiunan['nik_penerima']; ?>">
                                <small class="form-text text-danger"><?= form_error('nik_penerima'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nama_penerima">Nama Penerima Kuasa</label>
                                <input type="text" name="nama_penerima" class="form-control" id="nama_penerima" value="<?= $pensiunan['nama_penerima']; ?>">
                                <small class="form-text text-danger"><?= form_error('nama_penerima'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="notelp_penerima">No.Telp Penerima Kuasa</label>
                                <input type="text" name="notelp_penerima" class="form-control" id="notelp_penerima" value="<?= $pensiunan['notelp_penerima']; ?>">
                                <small class="form-text text-danger"><?= form_error('notelp_penerima'); ?></small>
                            </div>

                            <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>