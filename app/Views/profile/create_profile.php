<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    Create Profile
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container" style="margin-bottom: 20vh;">
        <form method="post" action="<?php echo site_url('Profile/Save'); ?>">
            <div class="row d-flex flex-row">
                <div class="col-md text-center">
                    <div style="margin: 2vh;"><h1>Create Profile</h1></div>
                </div>
            </div>
            <hr style="border-top: 3px solid #bbb;">
            <div class="row" style="margin: 2vh;">
                <div class="col-md-6">
                    <label class="form-label">Fullname:</label>
                    <input class="form-control" type="text" name="fullname">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Date of Birth:</label>
                    <input class="form-control" type="date" name="date_of_birth" value="<?php echo date('Y-m-d');?>">
                </div>
            </div>
            <div class="row" style="margin: 2vh;"><div class="col-md-4"></div></div>
            <div class="row" style="margin: 2vh;">
                <div class="col-md text-center">
                    <label class="form-label"><h3>Contact</h3></label>
                </div>
            </div>
            <div class="row" style="margin: 2vh;"><div class="col-md-4"></div></div>
            <div class="row" style="margin: 2vh;">
                <div class="col-md-4">
                    <label class="form-label">Address:</label>
                    <input class="form-control" type="text" name="address">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Phone Number:</label>
                    <input class="form-control" type="text" name="phone_number">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Email:</label>
                    <input class="form-control" type="email" name="email">
                </div>
            </div>
            <div class="row" style="margin: 2vh;"><div class="col-md-4"></div></div>
            <div class="row" style="margin: 2vh;">
                <div class="col-md text-center">
                    <label class="form-label"><h3>Biography</h3></label>
                </div>
            </div>
            <div class="row" style="margin: 2vh;"><div class="col-md-4"></div></div>
            <div class="row" style="margin: 2vh;">
                <div class="col-md-4">
                    <label class="form-label">Nationality:</label>
                    <input class="form-control" type="text" name="nationality">
                </div>
                <div class="col-md-4">
                    <label class="form-label">UBD Programme:</label>
                    <input class="form-control" type="text" name="ubd_programme">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Hobby:</label>
                    <input class="form-control" type="text" name="hobby">
                </div>
                <div class="col-12">
                    <label class="form-label">Self Description:</label>
                    <input class="form-control" type="text" name="self_description">
                </div>
            </div>
            <div class="row" style="margin: 2vh; margin-top: 5rem;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="submit">Create Profile</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>