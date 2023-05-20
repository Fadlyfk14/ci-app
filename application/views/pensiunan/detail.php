<body style="background-color:#f6c23e;">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-9 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Detail Data Pensiunan
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nopen" class="col-sm-4 col-form-label">Nomor Pensiunan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="nopen" name="nopen" value="<?= $pensiunan['nopen']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_pensiunan" class="col-sm-4 col-form-label">Nama Pensiunan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="nama_pensiunan" name="nama_pensiunan" value="<?= $pensiunan['nama_pensiunan']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_pensiun" class="col-sm-4 col-form-label">Jenis Pensiun</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="jenis_pensiun" name="jenis_pensiun" value="<?= $pensiunan['jenis_pensiun']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik_penerima" class="col-sm-4 col-form-label">NIK Penerima Kuasa</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="nik_penerima" name="nik_penerima" value="<?= $pensiunan['nik_penerima']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_penerima" class="col-sm-4 col-form-label">Nama Penerima Kuasa</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" value="<?= $pensiunan['nama_penerima']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="notelp_penerima" class="col-sm-4 col-form-label">No Telpon</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="notelp_penerima" name="notelp_penerima" value="<?= $pensiunan['notelp_penerima']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url(); ?>pensiunan" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>