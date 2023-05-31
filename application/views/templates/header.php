<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-jSNXwXpPf+kP5K7M1jpJy9j/UgBj+lkgje7jwdd2u+wCm3pBsl0SfuD58iKuAvLEhQqF1c+f8yW2XJ38OzUK1Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

  <title><?php echo $judul; ?>
  </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="<?= base_url(); ?>assets/logo.png" style="width:40px;height:40px>
    <div class=" container">

    <a class="navbar-brand" href="#">POSPEN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mr-auto">
        <a class="nav-item nav-link" href="<?= base_url(); ?>home">My Profile<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?= base_url(); ?>pensiunan">Pensiunan</a>
        <a class="nav-item nav-link" href="#">About</a>
      </div>
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="logoutDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="logoutDropdown">
          <a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
    </div>
  </nav>