<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    View Profile
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container" style="margin-bottom: 5rem;">
        <form>
            <div class="row d-flex flex-row">
                <div class="col-md text-center">
                    <div style="margin-top: 2rem;margin-left: 1rem;margin-right: 1rem;"><h1>Profile</h1></div>
                </div>
            </div>
            <hr style="border-top: 3px solid #bbb;">
            <div class="row" style="margin-left: 1rem;margin-right: 1rem;">
                <div class="col-md-6" style="margin-top: 1rem;">
                    <label class="form-label">Fullname:</label>
                    <input disabled class="form-control" type="text" name="fullname" value="<?php echo $profile->fullname; ?>">
                </div>
                <div class="col-md-6" style="margin-top: 1rem;">
                    <label class="form-label">Date of Birth:</label>
                    <input disabled class="form-control" type="date" name="date_of_birth" value="<?php echo $profile->date_of_birth; ?>">
                </div>
            </div>
            <div class="row" style="margin-left: 1rem;margin-right: 1rem;">
                <div class="col accordion" id="accordionExample" style="margin-top: 2rem;">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <label class="form-label"><h3>Contact</h3></label>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 1rem;">
                                        <label class="form-label">Address:</label>
                                        <input disabled class="form-control" type="text" name="address" value="<?php echo $profile->address; ?>">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 1rem;">
                                        <label class="form-label">Phone Number:</label>
                                        <input disabled class="form-control" type="text" name="phone_number" value="<?php echo $profile->phone_number; ?>">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 1rem;">
                                        <label class="form-label">Email:</label>
                                        <input disabled class="form-control" type="email" name="email" value="<?php echo $profile->email; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <label class="form-label"><h3>Biography</h3></label>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 1rem;">
                                        <label class="form-label">Nationality:</label>
                                        <input disabled class="form-control" type="text" name="nationality" value="<?php echo $profile->nationality; ?>">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 1rem;">
                                        <label class="form-label">UBD Programme:</label>
                                        <input disabled class="form-control" type="text" name="ubd_programme" value="<?php echo $profile->ubd_programme; ?>">
                                    </div>
                                    <div class="col-md-4" style="margin-top: 1rem;">
                                        <label class="form-label">Hobby:</label>
                                        <input disabled class="form-control" type="text" name="hobby" value="<?php echo $profile->hobby; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 1rem;position: fixed;left: 0;right: 0;bottom: 0;width: 100%;background-color: grey;justify-content: right;align-items: center;z-index: 10;">
                <div class="col-md-3">
                    <div class="d-grid">
                        <button class="btn btn-dark" type="button" onclick="location.href='<?php echo site_url('Profile/Edit'); ?>'">Edit Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>