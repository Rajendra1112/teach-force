<?php include("./includes/header.php"); ?>

<!-- book appoinment page -->
<div class="page-title-section">
    <figure>
        <img src="./images/about-page-bg.png" alt="page background image">
        <figcaption>
            <h1 class="page-title">BOOK APPOINTMENT</h1>
        </figcaption>
    </figure>
</div>

<div class="breadcrumb-section py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Book Appoinment</li>
            </ol>
        </nav>
    </div>
</div>


<div class="book-appoinment-detail">
    <div class="container">
        <div class="section-sub-heading-after text-center mb-5">Start your Journey With Us</div>
        <form action="" class="row g-3 needs-validation" novalidate>
            <div class="form-heading text-center mb-5">Personal Information</div>
            <div class="row personal-info pb-5 mb-5">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" autocomplete="fname"
                        enterkeyhint="next" required>
                    <div class="valid-feedback">
                        First name looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your first name.
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" autocomplete="lname"
                        enterkeyhint="next" required>
                    <div class="valid-feedback">
                        Last name looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your last name.
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" autocomplete="email"
                        enterkeyhint="next" required>
                    <div class="valid-feedback">
                        Email looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your email.
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="phone_no">Phone Number</label>
                    <input type="tel" class="form-control" id="phone_no" name="phone_no" autocomplete="phone_no"
                        enterkeyhint="next" required>
                    <div class="valid-feedback">
                        Phone no looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your phone no.
                    </div>
                </div>
            </div>

            <!-- appointment information -->
            <div class="form-heading text-center mb-5">Appointment Information</div>
            <div class="row appoinment-info pb-5 mb-5">
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <label for="date">Appoinment Date</label>
                    <input type="date" name="" id="date" required>
                    <div class="valid-feedback">
                        Date looks valid!
                    </div>
                    <div class="invalid-feedback">
                        Please choose date for appoinment.
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <label for="time">Appoinment Duration</label>
                    <select id="time" class="form-select" aria-label="Default select example">
                        <option value="1" selected>11:00am - 11:30 am</option>
                        <option value="2">11:30am - 12:00 pm</option>
                        <option value="3">14:00pm - 14:30 pm</option>
                        <option value="3">14:30pm - 15:00 pm</option>
                    </select>
                    <div class="valid-feedback">
                        Time looks valid!
                    </div>
                </div>
            </div>

            <div class="book-appoinment-section">
                <button type="submit" value="book_now" class="custom-btn">Book Now</button>
            </div>
        </form>
    </div>
</div>

<?php include("./includes/footer.php"); ?>