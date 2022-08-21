<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    View Profile
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container" style="margin-bottom: 20vh;">
        <form method="post" action="<?php echo site_url('Profile/Create'); ?>">
            <div class="row d-flex flex-row">
                <div class="col-4">
                    <div class="text-center" style="margin: 10vh;"><h1>Profile</h1></div>
                </div>
            </div>
            <div class="row" style="margin: 2vh;">
                <div class="col-6">
                    <label class="form-label">Fullname:</label>
                    <input disabled class="form-control" type="text" name="fullname" value="<?php echo $profile->fullname; ?>">
                </div>
                <div class="col-6">
                    <label class="form-label">Date of Birth:</label>
                    <input disabled class="form-control" type="date" name="date_of_birth" value="<?php echo $profile->date_of_birth; ?>">
                </div>
            </div>
            <div class="row" style="margin: 2vh;"><div class="col-4"></div></div>
            <div class="row" style="margin: 2vh;">
                <div class="col text-center">
                    <label class="form-label"><h3>Contact</h3></label>
                </div>
            </div>
            <div class="row" style="margin: 2vh;"><div class="col-4"></div></div>
            <div class="row" style="margin: 2vh;">
                <div class="col-4">
                    <label class="form-label">Address:</label>
                    <input disabled class="form-control" type="text" name="address" value="<?php echo $profile->address; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">Phone Number:</label>
                    <input disabled class="form-control" type="text" name="phone_number" value="<?php echo $profile->phone_number; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">Email:</label>
                    <input disabled class="form-control" type="email" name="email" value="<?php echo $profile->email; ?>">
                </div>
            </div>
            <div class="row" style="margin: 2vh;"><div class="col-4"></div></div>
            <div class="row" style="margin: 2vh;">
                <div class="col text-center">
                    <label class="form-label"><h3>Biography</h3></label>
                </div>
            </div>
            <div class="row" style="margin: 2vh;"><div class="col-4"></div></div>
            <div class="row" style="margin: 2vh;">
                <div class="col-4">
                    <label class="form-label">Nationality:</label>
                    <input disabled class="form-control" type="text" name="nationality" value="<?php echo $profile->nationality; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">UBD Programme:</label>
                    <input disabled class="form-control" type="text" name="ubd_programme" value="<?php echo $profile->ubd_programme; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">Hobby:</label>
                    <input disabled class="form-control" type="text" name="hobby" value="<?php echo $profile->hobby; ?>">
                </div>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>