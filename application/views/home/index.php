<!-- Begin Page Content -->



<body style="background-color:#f6c23e;">
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"></h1>   
    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="h5 mb-4 text-gray-500"><?= $judul; ?></h1>
                    <h5 class="card-title"><?= $user['name']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 