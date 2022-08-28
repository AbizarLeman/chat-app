<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    Chat App - View Profile
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container primary-color" style="margin-bottom: 5rem;">
        <div class="row d-flex flex-row">
            <div class="col-md text-center">
                <div style="margin-top: 2rem;margin-left: 1rem;margin-right: 1rem;"><h1>Profile</h1></div>
            </div>
        </div>
        <hr style="border-top: 3px solid #bbb;">
        <?php echo view('profile\profile_details'); ?>
        <div class="row" style="padding: 1rem;position: fixed;left: 0;right: 0;bottom: 0;width: 100%;background-color: #14A275;justify-content: left;align-items: center;z-index: 10;">
            <div class="col-md-2">
                <div class="d-grid">
                    <button style="background-color: #A21441;color: white;" class="btn" type="button" onclick="location.href='<?php echo site_url('Profile/Edit'); ?>'">Edit Profile</button>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>