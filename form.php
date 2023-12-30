<?php include ("./includes/header.php"); ?>
<!-- form page -->
<div class="page-title-section">
    <figure>
        <img src="./images/about-page-bg.png" alt="page background image">
        <figcaption>
            <h1 class="page-title">Application Form</h1>
        </figcaption>
    </figure>
</div>

<div class="breadcrumb-section py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="job.php">Jobs</a></li>
                <li class="breadcrumb-item"><a href="#">Heavy Driver</a></li>
                <li class="breadcrumb-item active" aria-current="page">Application Form</li>
            </ol>
        </nav>
    </div>
</div>

<div class="form-detail">
    <div class="container">
        <div class="section-sub-heading-after text-center mb-4">Start Your Job Application Process</div>
        <form action="" class="row g-3 needs-validation" novalidate>
            <div class="form-heading text-center mb-4">Personal Information</div>
            <div class="row personal-info pb-5 mb-5">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                        autocomplete="name" enterkeyhint="next" required>
                    <div class="valid-feedback">
                        Name looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your full name.
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"
                        autocomplete="email" enterkeyhint="next" required>
                    <div class="valid-feedback">
                        Email looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your email.
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <input type="tel" class="form-control" id="phone_no" name="phone_no" placeholder="Phone Number"
                        autocomplete="phone_no" enterkeyhint="next" required>
                    <div class="valid-feedback">
                        Phone no looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your phone no.
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <input type="number" class="form-control" id="age" name="age" placeholder="Age" autocomplete="age"
                        enterkeyhint="next" required>
                    <div class="valid-feedback">
                        Age looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your age.
                    </div>
                </div>
            </div>

            <div class="form-heading text-center mb-4">Address Information</div>
            <div class="row address-info pb-5 mb-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <input type="text" class="form-control" id="street-address" name="street-address"
                        placeholder="Street/Village Address" autocomplete="street-address" enterkeyhint="next"
                        required></input>
                    <div class="valid-feedback">
                        Street/Village Address looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please provide a valid Street/Village Address.
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <input type="text" class="form-control" id="city" name="city" placeholder="City/State Address"
                        autocomplete="address-level2" enterkeyhint="next" required>
                    <div class="valid-feedback">
                        City/State Address looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please provide a valid City/State Address.
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <input type="text" class="form-control" id="country" placeholder="Country" value="UAE" required>
                    <div class="valid-feedback">
                        Country looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please provide a valid Country.
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <input class="form-control postal-code" id="postal-code" name="postal-code"
                        placeholder="Zip/Postal-Code (Optional)" autocomplete="postal-code" enterkeyhint="done">
                </div>
            </div>

            <div class="form-heading text-center mb-4">Job Information</div>
            <div class="row job-info pb-5 mb-5">
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <input type="text" class="form-control" name="" id="" value="Heavy Driver" required>
                    <div class="valid-feedback">
                        Job title looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please provide a valid job title.
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <input type="text" class="form-control" name="" id="" value="Company ABC" required>
                    <div class="valid-feedback">
                        Company name looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please provide a valid company name.
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <input type="text" class="form-control" name="" id="" value="UAE" required>
                    <div class="valid-feedback">
                        Country looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please provide a valid Country.
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <input type="file" name="" id="file" required>
                    <label for="file" class="label-for-fileupload">Upload Resume</label>
                    <div class="invalid-feedback">
                        Please provide your resume.
                    </div>
                </div>
            </div>

            <div class="row experience-verification mb-5">
                <div class="col-12 d-flex align-items-center">
                    <div class="Q1">Do you have prior experience in this job field?</div>
                    <div class="radio-boxes d-flex ">
                        <div class="radio-box">
                            <input type="radio" name="radio" id="yes">
                            <div class="radio-tile">
                                <i class="fa-solid fa-check"></i>
                                <label for="yes">Yes</label>
                            </div>
                        </div>

                        <div class="radio-box">
                            <input type="radio" name="radio" id="no">
                            <div class="radio-tile">
                                <i class="fa-solid fa-xmark"></i>
                                <label for="no">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submission-section">
                <button type="submit" class="custom-btn mb-5" value="submit">Submit</button>
                <p>An appointment will be fixed if your submission passes the screening.</p>
            </div>
        </form>
    </div>

</div>

<?php include ("./includes/footer.php"); ?>