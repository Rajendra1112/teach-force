<?php include ("./includes/header.php"); ?>

<!-- jobs page  -->
<div class="page-title-section">
    <figure>
        <img src="./images/about-page-bg.png" alt="about us page bg image">
        <figcaption>
            <h1 class="page-title">jobs</h1>
        </figcaption>
    </figure>
</div>


<div class="breadcrumb-section py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jobs</li>
            </ol>
        </nav>
    </div>
</div>

<div class="job-detail">
    <div class="container">
        <h2 class="section-sub-heading-after text-center mb-5">Find the job you Are looking for</h2>
        <div class="row">
            <!-- first tabs box -->
            <div class="col-lg-3 col-md-3 col-sm-12 first-tabs-box custom-scrollbar">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <button class="nav-link active" id="uae-tab" data-bs-toggle="pill" data-bs-target="#uae-tab-content"
                        type="button" role="tab" aria-controls="v-pills-uae" aria-selected="true">
                        <figure><img src="./images/uae.svg" alt=""></figure>UAE
                    </button>

                    <button class="nav-link" id="usa-tab" data-bs-toggle="pill" data-bs-target="#usa-tab-content"
                        type="button" role="tab" aria-controls="v-pills-usa" aria-selected="true">
                        <figure><img src="./images/usa.svg" alt=""></figure>USA
                    </button>

                    <button class="nav-link" id="india-tab" data-bs-toggle="pill" data-bs-target="#india-tab-content"
                        type="button" role="tab" aria-controls="v-pills-india" aria-selected="true">
                        <figure><img src="./images/india.svg" alt=""></figure>India
                    </button>
                </div>
            </div>

            <!-- content for first tabs box -->
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="tab-content first-tabs-box-content" id="v-pills-tabContent">

                    <!-- content for uae country -->
                    <div class="tab-pane fade show active" id="uae-tab-content" role="tabpanel"
                        aria-labelledby="uae-tab" tabindex="0">
                        <div class="row main-content">
                            <!-- second tabs box -->
                            <div class="col-lg-4 col-md-12 col-sm-12 second-tabs-box custom-scrollbar">
                                <div class="nav flex-column nav-pills me-3" id="second-tabs-box" role="tablist"
                                    aria-orientation="vertical">

                                    <button class="nav-link active" id="uae-tab-1" data-bs-toggle="pill"
                                        data-bs-target="#uae-content-1" type="button" role="tab"
                                        aria-controls="v-pills-uae" aria-selected="true">
                                        <figure><img src="./images/job icon.svg" alt=""></figure>
                                        <ul>
                                            <li>Heavy Driver</li>
                                            <li>Company ABC
                                            </li>
                                            <li>Sweihan</li>
                                            <li>10 days ago</li>
                                        </ul>
                                    </button>

                                    <button class="nav-link" id="uae-tab-2" data-bs-toggle="pill"
                                        data-bs-target="#uae-content-2" type="button" role="tab"
                                        aria-controls="v-pills-uae" aria-selected="true">
                                        <figure><img src="./images/job icon.svg" alt=""></figure>
                                        <ul>
                                            <li>Waiter</li>
                                            <li>Company Name</li>
                                            <li>Address</li>
                                            <li>10 days ago</li>
                                        </ul>
                                    </button>

                                    <button class="nav-link" id="uae-tab-3" data-bs-toggle="pill"
                                        data-bs-target="#uae-content-3" type="button" role="tab"
                                        aria-controls="v-pills-uae" aria-selected="true">
                                        <figure><img src="./images/job icon.svg" alt=""></figure>
                                        <ul>
                                            <li>Teacher</li>
                                            <li>Company Name</li>
                                            <li>Address</li>
                                            <li>10 days ago</li>
                                        </ul>
                                    </button>
                                </div>
                            </div>

                            <!-- content for second tabs box -->
                            <div class="col-lg-8 col-md-12 col-sm-12 second-tabs-box-content custom-scrollbar">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <!-- uae content 1 -->
                                    <div class="tab-pane fade show active px-4 py-5" id="uae-content-1" role="tabpanel"
                                        aria-labelledby="uae-tab-1" tabindex="0">
                                        <div class="job-title mb-5">Heavy Driver</div>
                                        <section
                                            class="job-apply-section d-flex justify-content-between align-items-center mb-5">
                                            <ul>
                                                <li>Job Name</li>
                                                <li>Company Name
                                                </li>
                                                <li>Address</li>
                                                <li>10 days ago</li>
                                            </ul>
                                            <a class="custom-btn" href="form.php">Apply Now</a>
                                        </section>

                                        <div class="description">
                                            <h3>Job Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis
                                                nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                Duis aute
                                                irure
                                                dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla
                                                pariatur.
                                                Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt
                                                mollit anim
                                                id
                                                est
                                                laborum.</p>



                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>
                                            <h3>Benefits</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>



                                            <h3>Process</h3>
                                            <ol>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>


                                    <!-- uae content 2 -->
                                    <div class="tab-pane fade show  px-4 py-5" id="uae-content-2" role="tabpanel"
                                        aria-labelledby="uae-tab-2" tabindex="0">
                                        <div class="job-title mb-5">Waiter</div>
                                        <section
                                            class="job-apply-section d-flex justify-content-between align-items-center mb-5">
                                            <ul>
                                                <li>Job Name</li>
                                                <li>Company Name
                                                </li>
                                                <li>Address</li>
                                                <li>10 days ago</li>
                                            </ul>
                                            <a class="custom-btn" href="form.php">Apply Now</a>
                                        </section>

                                        <div class="description">
                                            <h3>Job Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis
                                                nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                Duis aute
                                                irure
                                                dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla
                                                pariatur.
                                                Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt
                                                mollit anim
                                                id
                                                est
                                                laborum.</p>



                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>
                                            <h3>Benefits</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>



                                            <h3>Process</h3>
                                            <ol>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>


                                    <!-- uae content 3 -->
                                    <div class="tab-pane fade show  px-4 py-5" id="uae-content-3" role="tabpanel"
                                        aria-labelledby="uae-tab-3" tabindex="0">
                                        <div class="job-title mb-5">Teacher</div>
                                        <section
                                            class="job-apply-section d-flex justify-content-between align-items-center mb-5">
                                            <ul>
                                                <li>Job Name</li>
                                                <li>Company Name
                                                </li>
                                                <li>Address</li>
                                                <li>10 days ago</li>
                                            </ul>
                                            <a class="custom-btn" href="form.php">Apply Now</a>
                                        </section>

                                        <div class="description">
                                            <h3>Job Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis
                                                nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                Duis aute
                                                irure
                                                dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla
                                                pariatur.
                                                Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt
                                                mollit anim
                                                id
                                                est
                                                laborum.</p>



                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>
                                            <h3>Benefits</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>



                                            <h3>Process</h3>
                                            <ol>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- content for use country -->
                    <div class="tab-pane fade" id="usa-tab-content" role="tabpanel" aria-labelledby="usa-tab"
                        tabindex="0">
                        <div class="row main-content">
                            <!-- second tabs box -->
                            <div class="col-lg-4 col-md-12 col-sm-12 second-tabs-box custom-scrollbar">
                                <div class="nav flex-column nav-pills me-3" id="second-tabs-box" role="tablist"
                                    aria-orientation="vertical">

                                    <button class="nav-link active" id="usa-tab-1" data-bs-toggle="pill"
                                        data-bs-target="#usa-content-1" type="button" role="tab"
                                        aria-controls="v-pills-usa" aria-selected="true">
                                        <figure><img src="./images/job icon.svg" alt=""></figure>
                                        <ul>
                                            <li>Software Developer</li>
                                            <li>Company ABC
                                            </li>
                                            <li>Sweihan</li>
                                            <li>10 days ago</li>
                                        </ul>
                                    </button>

                                    <button class="nav-link" id="usa-tab-2" data-bs-toggle="pill"
                                        data-bs-target="#usa-content-2" type="button" role="tab"
                                        aria-controls="v-pills-usa" aria-selected="true">
                                        <figure><img src="./images/job icon.svg" alt=""></figure>
                                        <ul>
                                            <li>Cleaner</li>
                                            <li>Company Name</li>
                                            <li>Address</li>
                                            <li>10 days ago</li>
                                        </ul>
                                    </button>

                                    <button class="nav-link" id="usa-tab-3" data-bs-toggle="pill"
                                        data-bs-target="#usa-content-3" type="button" role="tab"
                                        aria-controls="v-pills-usa" aria-selected="true">
                                        <figure><img src="./images/job icon.svg" alt=""></figure>
                                        <ul>
                                            <li>Health Assistant</li>
                                            <li>Company Name</li>
                                            <li>Address</li>
                                            <li>10 days ago</li>
                                        </ul>
                                    </button>
                                </div>
                            </div>

                            <!-- content for second tabs box -->
                            <div class="col-lg-8 col-md-12 col-sm-12 second-tabs-box-content custom-scrollbar">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <!-- usa content 1 -->
                                    <div class="tab-pane fade show active px-4 py-5" id="usa-content-1" role="tabpanel"
                                        aria-labelledby="usa-tab-1" tabindex="0">
                                        <div class="job-title mb-5">Software Developer</div>
                                        <section
                                            class="job-apply-section d-flex justify-content-between align-items-center mb-5">
                                            <ul>
                                                <li>Job Name</li>
                                                <li>Company Name
                                                </li>
                                                <li>Address</li>
                                                <li>10 days ago</li>
                                            </ul>
                                            <a class="custom-btn" href="form.php">Apply Now</a>
                                        </section>

                                        <div class="description">
                                            <h3>Job Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis
                                                nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                Duis aute
                                                irure
                                                dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla
                                                pariatur.
                                                Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt
                                                mollit anim
                                                id
                                                est
                                                laborum.</p>



                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>
                                            <h3>Benefits</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>



                                            <h3>Process</h3>
                                            <ol>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>


                                    <!-- usa content 2 -->
                                    <div class="tab-pane fade show  px-4 py-5" id="usa-content-2" role="tabpanel"
                                        aria-labelledby="usa-tab-2" tabindex="0">
                                        <div class="job-title mb-5">Cleaner</div>
                                        <section
                                            class="job-apply-section d-flex justify-content-between align-items-center mb-5">
                                            <ul>
                                                <li>Job Name</li>
                                                <li>Company Name
                                                </li>
                                                <li>Address</li>
                                                <li>10 days ago</li>
                                            </ul>
                                            <a class="custom-btn" href="form.php">Apply Now</a>
                                        </section>

                                        <div class="description">
                                            <h3>Job Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis
                                                nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                Duis aute
                                                irure
                                                dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla
                                                pariatur.
                                                Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt
                                                mollit anim
                                                id
                                                est
                                                laborum.</p>



                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>
                                            <h3>Benefits</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>



                                            <h3>Process</h3>
                                            <ol>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>


                                    <!-- usa content 3 -->
                                    <div class="tab-pane fade show  px-4 py-5" id="usa-content-3" role="tabpanel"
                                        aria-labelledby="usa-tab-3" tabindex="0">
                                        <div class="job-title mb-5">Health Assistant</div>
                                        <section
                                            class="job-apply-section d-flex justify-content-between align-items-center mb-5">
                                            <ul>
                                                <li>Job Name</li>
                                                <li>Company Name
                                                </li>
                                                <li>Address</li>
                                                <li>10 days ago</li>
                                            </ul>
                                            <a class="custom-btn href=" form.php"">Apply Now</a>
                                        </section>

                                        <div class="description">
                                            <h3>Job Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis
                                                nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                Duis aute
                                                irure
                                                dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla
                                                pariatur.
                                                Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt
                                                mollit anim
                                                id
                                                est
                                                laborum.</p>



                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>
                                            <h3>Benefits</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>



                                            <h3>Process</h3>
                                            <ol>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- content for india country -->
                    <div class="tab-pane fade" id="india-tab-content" role="tabpanel" aria-labelledby="india-tab"
                        tabindex="0">
                        <div class="row main-content">
                            <!-- second tabs box -->
                            <div class="col-lg-4 col-md-12 col-sm-12 second-tabs-box custom-scrollbar">
                                <div class="nav flex-column nav-pills me-3" id="second-tabs-box" role="tablist"
                                    aria-orientation="vertical">

                                    <button class="nav-link active" id="india-tab-1" data-bs-toggle="pill"
                                        data-bs-target="#india-content-1" type="button" role="tab"
                                        aria-controls="v-pills-india" aria-selected="true">
                                        <figure><img src="./images/job icon.svg" alt=""></figure>
                                        <ul>
                                            <li>Plumber</li>
                                            <li>Company ABC
                                            </li>
                                            <li>Sweihan</li>
                                            <li>10 days ago</li>
                                        </ul>
                                    </button>

                                    <button class="nav-link" id="india-tab-2" data-bs-toggle="pill"
                                        data-bs-target="#india-content-2" type="button" role="tab"
                                        aria-controls="v-pills-india" aria-selected="true">
                                        <figure><img src="./images/job icon.svg" alt=""></figure>
                                        <ul>
                                            <li>GYM Trainer</li>
                                            <li>Company Name</li>
                                            <li>Address</li>
                                            <li>10 days ago</li>
                                        </ul>
                                    </button>

                                    <button class="nav-link" id="india-tab-3" data-bs-toggle="pill"
                                        data-bs-target="#india-content-3" type="button" role="tab"
                                        aria-controls="v-pills-india" aria-selected="true">
                                        <figure><img src="./images/job icon.svg" alt=""></figure>
                                        <ul>
                                            <li>Security Guard</li>
                                            <li>Company Name</li>
                                            <li>Address</li>
                                            <li>10 days ago</li>
                                        </ul>
                                    </button>
                                </div>
                            </div>

                            <!-- content for second tabs box -->
                            <div class="col-lg-8 col-md-12 col-sm-12 second-tabs-box-content custom-scrollbar">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <!-- india content 1 -->
                                    <div class="tab-pane fade show active px-4 py-5" id="india-content-1"
                                        role="tabpanel" aria-labelledby="india-tab-1" tabindex="0">
                                        <div class="job-title mb-5">Plumber</div>
                                        <section
                                            class="job-apply-section d-flex justify-content-between align-items-center mb-5">
                                            <ul>
                                                <li>Job Name</li>
                                                <li>Company india
                                                </li>
                                                <li>Address</li>
                                                <li>10 days ago</li>
                                            </ul>
                                            <a class="custom-btn" href="form.php">Apply Now</a>
                                        </section>

                                        <div class="description">
                                            <h3>Job Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis
                                                nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                Duis aute
                                                irure
                                                dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla
                                                pariatur.
                                                Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt
                                                mollit anim
                                                id
                                                est
                                                laborum.</p>



                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>
                                            <h3>Benefits</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>



                                            <h3>Process</h3>
                                            <ol>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>


                                    <!-- india content 2 -->
                                    <div class="tab-pane fade show  px-4 py-5" id="india-content-2" role="tabpanel"
                                        aria-labelledby="india-tab-2" tabindex="0">
                                        <div class="job-title mb-5">GYM Trainer</div>
                                        <section
                                            class="job-apply-section d-flex justify-content-between align-items-center mb-5">
                                            <ul>
                                                <li>Job Name</li>
                                                <li>Company Name
                                                </li>
                                                <li>Address</li>
                                                <li>10 days ago</li>
                                            </ul>
                                            <a class="custom-btn" href="form.php">Apply Now</a>
                                        </section>

                                        <div class="description">
                                            <h3>Job Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis
                                                nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                Duis aute
                                                irure
                                                dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla
                                                pariatur.
                                                Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt
                                                mollit anim
                                                id
                                                est
                                                laborum.</p>



                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>
                                            <h3>Benefits</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>



                                            <h3>Process</h3>
                                            <ol>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>


                                    <!-- india content 3 -->
                                    <div class="tab-pane fade show  px-4 py-5" id="india-content-3" role="tabpanel"
                                        aria-labelledby="india-tab-3" tabindex="0">
                                        <div class="job-title mb-5">Security Guard</div>
                                        <section
                                            class="job-apply-section d-flex justify-content-between align-items-center mb-5">
                                            <ul>
                                                <li>Job Name</li>
                                                <li>Company Name
                                                </li>
                                                <li>Address</li>
                                                <li>10 days ago</li>
                                            </ul>
                                            <a class="custom-btn" href="form.php">Apply Now</a>
                                        </section>

                                        <div class="description">
                                            <h3>Job Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis
                                                nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                Duis aute
                                                irure
                                                dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla
                                                pariatur.
                                                Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt
                                                mollit anim
                                                id
                                                est
                                                laborum.</p>



                                            <h3>Requirements</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>
                                            <h3>Benefits</h3>
                                            <ul>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ul>



                                            <h3>Process</h3>
                                            <ol>
                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing.</p>
                                                </li>

                                                <li>
                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit,
                                                        sed do
                                                        eiusmo.</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include ("./includes/footer.php"); ?>