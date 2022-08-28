<?= $this->extend('layouts\layout') ?>

<?= $this->section('title') ?>
Chat App - Create Profile
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container primary-color" style="margin-bottom: 20vh;">
    <div class="row d-flex flex-row">
        <div class="col-md text-center">
            <div style="margin: 2vh;">
                <h1>Create Profile</h1>
            </div>
        </div>
    </div>
    <hr style="border-top: 3px solid #bbb;">
    <?php
    if (isset($errors)) {
        foreach ($errors as $error) {
            echo '
                <div class="alert alert-danger" role="alert">
                    ' . $error . '
                </div>
            ';
        }
    }
    ?>
    <form method="post" action="<?php echo site_url('Profile/Save'); ?>">
        <div class="row" style="margin-left: 1rem;margin-right: 1rem;">
            <div class="col-md-6" style="margin-top: 1rem;">
                <label class="form-label secondary-color">Fullname:</label>
                <input class="form-control text-field-color" type="text" name="fullname">
            </div>
            <div class="col-md-6" style="margin-top: 1rem;">
                <label class="form-label secondary-color">Date of Birth:</label>
                <input class="form-control text-field-color" type="date" name="date_of_birth" value="<?php echo date('Y-m-d'); ?>">
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
                                        <label class="form-label secondary-color">Address:</label>
                                        <input class="form-control text-field-color" type="text" name="address">
                                    </div>
                                    <div class="col-12" style="margin-top: 1rem;">
                                        <label class="form-label secondary-color">Phone Number:</label>
                                        <input class="form-control text-field-color" type="text" name="phone_number">
                                    </div>
                                    <div class="col-12" style="margin-top: 1rem;">
                                        <label class="form-label secondary-color">Email:</label>
                                        <input class="form-control text-field-color" type="email" name="email">
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
                                        <label class="form-label secondary-color">Nationality:</label>
                                        <select class="form-control text-field-color" name="nationality">
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="The Philippines">The Philippines</option>
                                        </select>
                                    </div>
                                    <div class="col-12" style="margin-top: 1rem;">
                                        <label class="form-label secondary-color">UBD Programme:</label>
                                        <select class="form-control text-field-color" name="ubd_programme">
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Biology">Biology</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Business Administration">Business Administration</option>
                                            <option value="Dentistry">Dentistry</option>
                                        </select>
                                    </div>
                                    <div class="col-12" style="margin-top: 1rem;">
                                        <label class="form-label secondary-color">Hobby:</label>
                                        <input class="form-control text-field-color" type="text" name="hobby">
                                    </div>
                                    <div class="col-12" style="margin-top: 1rem;">
                                        <label class="form-label secondary-color">Self Description:</label>
                                        <input class="form-control text-field-color" type="text" name="self_description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 1rem;position: fixed;left: 0;right: 0;bottom: 0;width: 100%;background-color: #14A275;justify-content: left;align-items: center;z-index: 10;">
            <div class="col-md-2 mt-1">
                <div class="d-grid">
                    <button style="background-color: #A21441;color: white;" class="btn" type="submit">Create Profile</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>