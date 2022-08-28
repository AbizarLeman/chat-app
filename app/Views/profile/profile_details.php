<form>
    <div class="row" style="margin-left: 1rem;margin-right: 1rem;">
        <div class="col-md-6" style="margin-top: 1rem;">
            <label class="form-label secondary-color">Fullname:</label>
            <input style="background-color: #f7f7f5;" disabled class="form-control text-field-color" type="text" name="fullname" value="<?php echo $profile->fullname; ?>">
        </div>
        <div class="col-md-6" style="margin-top: 1rem;">
            <label class="form-label secondary-color">Date of Birth:</label>
            <input style="background-color: #f7f7f5;" disabled class="form-control text-field-color" type="date" name="date_of_birth" value="<?php echo $profile->date_of_birth; ?>">
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
                                    <input style="background-color: #f7f7f5;" disabled class="form-control text-field-color" type="text" name="address" value="<?php echo $profile->address; ?>">
                                </div>
                                <div class="col-12" style="margin-top: 1rem;">
                                    <label class="form-label secondary-color">Phone Number:</label>
                                    <input style="background-color: #f7f7f5;" disabled class="form-control text-field-color" type="text" name="phone_number" value="<?php echo $profile->phone_number; ?>">
                                </div>
                                <div class="col-12" style="margin-top: 1rem;">
                                    <label class="form-label secondary-color">Email:</label>
                                    <input style="background-color: #f7f7f5;" disabled class="form-control text-field-color" type="email" name="email" value="<?php echo $profile->email; ?>">
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
                                    <select style="background-color: #f7f7f5;" id="nationalityInput" disabled class="form-control text-field-color" name="nationality" value="<?php echo $profile->nationality; ?>">
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="The Philippines">The Philippines</option>
                                    </select>
                                </div>
                                <div class="col-12" style="margin-top: 1rem;">
                                    <label class="form-label secondary-color">UBD Programme:</label>
                                    <select style="background-color: #f7f7f5;" id="programmeInput" disabled class="form-control text-field-color" name="ubd_programme" value="<?php echo $profile->ubd_programme; ?>">
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
                                    <input style="background-color: #f7f7f5;" disabled class="form-control text-field-color" type="text" name="hobby" value="<?php echo $profile->hobby; ?>">
                                </div>
                                <div class="col-12" style="margin-top: 1rem;">
                                    <label class="form-label secondary-color">Self Description:</label>
                                    <input style="background-color: #f7f7f5;" disabled class="form-control text-field-color" type="text" name="self_description" value="<?php echo $profile->self_description; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        const nationalityInput = document.getElementById('nationalityInput')
        const programmeInput = document.getElementById('programmeInput')

        nationalityInput.value = "<?php echo $profile->nationality; ?>"
        programmeInput.value = "<?php echo $profile->ubd_programme; ?>"
    })
</script>