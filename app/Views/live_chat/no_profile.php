<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container" style="margin-bottom: 20vh;">
        <div class="row d-flex flex-row">
            <div class="col-md text-center">
                <div style="margin: 2vh;"><h1>You have no profile!</h1></div>
                <div style="margin: 2vh;"><a href="<?php echo site_url('Profile'); ?>" class="btn btn-dark">Create profile here!</a></div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>