<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    Chat App - Live Chat
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container primary-color" style="margin-bottom: 20vh;">
        <div class="row d-flex flex-row">
            <div class="col-md text-center">
                <div style="margin: 2vh;"><h1>You have no profile!</h1></div>
                <div style="margin: 2vh;"><a href="<?php echo site_url('Profile'); ?>" style="background-color: #14A275;color: white;" class="btn">Create profile here!</a></div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>