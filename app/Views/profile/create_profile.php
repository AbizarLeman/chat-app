<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
    Create Profile
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container" style="margin-bottom: 20vh;">
        <div class="row d-flex flex-row">
            <div class="col-md text-center">
                <div style="margin: 2vh;"><h1>Create Profile</h1></div>
            </div>
        </div>
        <hr style="border-top: 3px solid #bbb;">
        <form method="post" action="<?php echo site_url('Profile/Save'); ?>">
            <div class="row" style="margin-left: 1rem;margin-right: 1rem;">
                <div class="col-md-6" style="margin-top: 1rem;">
                    <label class="form-label">Fullname:</label>
                    <input class="form-control" type="text" name="fullname">
                </div>
                <div class="col-md-6" style="margin-top: 1rem;">
                    <label class="form-label">Date of Birth:</label>
                    <input class="form-control" type="date" name="date_of_birth" value="<?php echo date('Y-m-d');?>">
                </div>
            </div>
            <hr style="border-top: 1px solid #bbb;">
            <div class="row" style="margin-left: 1rem;margin-right: 1rem;">
                <div class="col-md-6" style="margin-top: 1rem;">
                    <div class="accordion" id="contactAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Contact
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#contactAccordion">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-12" style="margin-top: 1rem;">
                                            <label class="form-label">Address:</label>
                                            <input class="form-control" type="text" name="address">
                                        </div>
                                        <div class="col-12" style="margin-top: 1rem;">
                                            <label class="form-label">Phone Number:</label>
                                            <input class="form-control" type="text" name="phone_number">
                                        </div>
                                        <div class="col-12" style="margin-top: 1rem;">
                                            <label class="form-label">Email:</label>
                                            <input class="form-control" type="email" name="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: 1rem;">
                    <div class="accordion" id="biographyAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Biography
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#biographyAccordion">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-12" style="margin-top: 1rem;">
                                            <label class="form-label">Nationality:</label>
                                            <input class="form-control" type="text" name="nationality">
                                        </div>
                                        <div class="col-12" style="margin-top: 1rem;">
                                            <label class="form-label">UBD Programme:</label>
                                            <input class="form-control" type="text" name="ubd_programme">
                                        </div>
                                        <div class="col-12" style="margin-top: 1rem;">
                                            <label class="form-label">Hobby:</label>
                                            <input class="form-control" type="text" name="hobby">
                                        </div>
                                        <div class="col-12" style="margin-top: 1rem;">
                                            <label class="form-label">Self Description:</label>
                                            <input class="form-control" type="text" name="self_description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 1rem;position: fixed;left: 0;right: 0;bottom: 0;width: 100%;background-color: black;justify-content: left;align-items: center;z-index: 10;">
                <div class="col-md-2 mt-1">
                    <div class="d-grid">
                        <button class="btn btn-dark" type="submit">Create Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>