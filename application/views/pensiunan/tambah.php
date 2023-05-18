<body style="background-color:#f6c23e;">

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Pensiunan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nopen">NOMOR PENSIUN</label>
                                <input type="number" name="nopen" class="form-control" id="nopen">
                                <small class="form-text text-danger"><?= form_error('nopen'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nama_pensiunan">NAMA PENSIUNAN</label>
                                <input type="text" name="nama_pensiunan" class="form-control" id="nama_pensiunan">
                                <small class="form-text text-danger"><?= form_error('nama_pensiunan'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jenis_pensiun">Jenis Pensiunan</label>
                                <select class="form-control" id="jenis_pensiun" name="jenis_pensiun">
                                    <option value="TASPEN">TASPEN</option>
                                    <option value="ASABRI">ASABRI</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nik_penerima">NIK PENERIMA</label>
                                <input type="number" name="nik_penerima" class="form-control" id="nik_penerima">
                                <small class="form-text text-danger"><?= form_error('nik_penerima'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nama_penerima">NAMA PENERIMA KUASA</label>
                                <input type="text" name="nama_penerima" class="form-control" id="nama_penerima">
                                <small class="form-text text-danger"><?= form_error('nama_penerima'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="notelp_penerima">NO TELPON PENERIMA KUASA</label>
                                <input type="number" name="notelp_penerima" class="form-control" id="notelp_penerima">
                                <small class="form-text text-danger"><?= form_error('notelp_penerima'); ?></small>
                            </div>

                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>