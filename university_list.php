<?php include ("./includes/header.php"); ?>

<!-- university or college list page -->
<div class="page-title-section">
    <figure>
        <img src="./images/about-page-bg.png" alt="page background image">
        <figcaption>
            <h1 class="page-title">Universities & Colleges</h1>
        </figcaption>
    </figure>
</div>

<div class="breadcrumb-section py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Universities & Colleges</li>
            </ol>
        </nav>
    </div>
</div>


<div class="university-college-detail">
    <div class="container">
        <div class="section-sub-heading-after mb-5 text-center">Start your Journey With Us</div>
        <div class="row search-section mb-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form class="d-flex search-bar" role="search">
                    <input class="form-control" type="search" placeholder="Search University / College"
                        aria-label="Search">
                    <button class="search-btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <select class="form-select" aria-label="Default select example">
                    <option selected>All Locations</option>
                    <option value="1">Australia</option>
                    <option value="2">USA</option>
                    <option value="3">Canada</option>
                </select>
            </div>
        </div>
        <!-- table that contain university or college list -->
        <div class="table-wrapper">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">Universities / Colleges</th>
                        <th scope="col">Locations</th>
                        <th scope="col" class="text-center">More Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>All The Universities of UAE</td>
                        <td class="location-column">
                            <figure><img src="./images/uae.svg" alt=""></figure>
                            <div class="country-name">UAE</div>
                        </td>
                        <td><a href="#"><i class="fa-solid fa-magnifying-glass-plus"></i></a></td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>All The Universities of Malta</td>
                        <td class="location-column">
                            <figure><img src="./images/malta.svg" alt=""></figure>
                            <div class="country-name">Malta</div>
                        </td>
                        <td><a href="#"><i class="fa-solid fa-magnifying-glass-plus"></i></a></td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td>All The Universities of USA</td>
                        <td class="location-column">
                            <figure><img src="./images/usa.svg" alt=""></figure>
                            <div class="country-name">USA</div>
                        </td>
                        <td><a href="#"><i class="fa-solid fa-magnifying-glass-plus"></i></a></td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td>All The Universities of Canada</td>
                        <td class="location-column">
                            <figure><img src="./images/canada.svg" alt=""></figure>
                            <div class="country-name">Canada</div>
                        </td>
                        <td><a href="#"><i class="fa-solid fa-magnifying-glass-plus"></i></a></td>
                    </tr>
                    <tr>
                        <td scope="row">5</td>
                        <td>All The Universities of United Kingdom</td>
                        <td class="location-column">
                            <figure><img src="./images/uk.svg" alt=""></figure>
                            <div class="country-name">United Kingdom</div>
                        </td>
                        <td><a href="#"><i class="fa-solid fa-magnifying-glass-plus"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include ("./includes/footer.php"); ?>