<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="<?php echo base_url('bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('style.css'); ?>" rel="stylesheet">
    <title><?= $this->renderSection('title') ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Chat App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo site_url('/')?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo site_url('/Profile')?>">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('/Chat')?>">Live Chat</a>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-outline-light">
                    <a class="nav-link active" href="<?php echo site_url('/logout')?>">Logout</a>
                </button>
            </div>
        </div>
        </div>
    </nav>
  
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>