<div class="container">

    <body style="background-color:#f6c23e;">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                <div class="col-md-6 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Pensiun <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <a href="<?= base_url(); ?>pensiunan/tambah" class="btn btn-primary">Tambah Data Penerima Pensiun</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari data pensiunan.." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <h3>Daftar Penerima Pensiun</h3>
                <?php if (empty($pensiunan)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data tidak ditemukan.
                    </div>
                <?php endif; ?>
                <ul class="list-group">
                    <?php foreach ($pensiunan as $pns) : ?>
                        <li class="list-group-item">
                            <?= $pns['nama_pensiunan']; ?>
                            <div class="float-right">
                                <a href="<?= base_url(); ?>pensiunan/hapus/<?= $pns['id']; ?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a>
                                <a href="<?= base_url(); ?>pensiunan/ubah/<?= $pns['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                                <a href="<?= base_url(); ?>pensiunan/detail/<?= $pns['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </body>
</div>