<?php
$currentPage = 'careers';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="Leading turnkey EPC solutions provider in India. We guarantee schedule certainty and quality delivery for large-scale factories, logistics parks, and industrial infrastructure.">
    <meta property="og:title" content="EPC Contractor India | Industrial Construction - Ellora">
    <meta property="og:description"
        content="Leading turnkey EPC solutions provider in India, specializing in factories, warehouses, and logistics parks.">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPC Contractor India | Industrial Construction & Warehouses - Ellora EPC | Career</title>
    <?php include 'includes/styles.php'; ?>
</head>

<body>
    <!-- <?php include 'includes/loader.php'; ?> -->
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="breadcrumbs" style="background: url(assets/media/breadcrumbs/career.jpg)">
            <div class="container">
                <div class="row">
                    <div class="breadcrumbContent">
                        <h2>Career</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index"><i
                                            class="ph-duotone ph-house-simple"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Career</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="career">
            <div class="container">
                <div class="row">
                    <div class="pgHeader">
                        <div class="pgTitle">
                            <h2>Work With Us</h2>
                            <h6>Connect with us to help you address your queries faster.</h6>
                        </div>
                        <form action="">
                            <div class="dropdown w-100" id="customSelect">
                                <button class="form-control text-start dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Select option
                                </button>
                                <div class="dropdown-menu w-100 p-0">
                                    <div class="sticky-top bg-white p-2 border-bottom">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            onkeyup="filterOptions(this)" />
                                    </div>
                                    <div class="options" style="max-height: 220px; overflow-y: auto;">
                                        <button class="dropdown-item" type="button">About</button>
                                        <button class="dropdown-item" type="button">Base</button>
                                        <button class="dropdown-item" type="button">Blog</button>
                                        <button class="dropdown-item" type="button">Contact</button>
                                        <button class="dropdown-item" type="button">Custom</button>
                                        <button class="dropdown-item" type="button">Support</button>
                                        <button class="dropdown-item" type="button">Tools</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-4">
                        <div class="vacancyCard">
                            <figure class="vacancyMedia">
                                <img src="assets/media/career/project-manager.jpg" alt="">
                            </figure>
                            <div class="vacancyHeader">
                                <h3>Senior Project Manager</h3>
                                <div class="vacancyMeta">
                                    <small class="experience">Exp. 1-3 Yrs</small>
                                    <small class="location">Nashik (MH), IND</small>
                                </div>
                            </div>
                            <div class="vacancyBody">
                                <p>Lead multi-million dollar EPC projects for manufacturing and logistics clients.
                                    Responsible for schedule certainty, budget control, and seamless delivery from
                                    contract signing to commissioning.</p>
                                <a class="btn btn-primary stretched-link" href="#" data-bs-toggle="modal"
                                    data-bs-target="#careerModal">Apply <i
                                        class="ph-duotone ph-arrow-bend-right-up"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="cta">
            <div class="container">
                <div class="row">
                    <div class="ctaCard">
                        <div class="ctaContent">
                            <div class="ctaText">
                                <h2>Get in touch with us</h2>
                                <p>Connect with us with any query or any idea</p>
                            </div>
                            <a href="contact" class="btn btn-light roundedBtn">
                                <span class="icon"><i class="ph-duotone ph-phone"></i></span> Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="modal fade" id="careerModal" tabindex="-1" aria-labelledby="careerPopupLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="careerPopupLabel">Applying For : Senior Project Manager</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-7 col-xl-7 col-xxl-7">
                            <div class="careerPopupContent">
                                <h4>About the Role:</h4>
                                <p>Lead multi-million dollar EPC projects for manufacturing and logistics clients.
                                    Responsible for schedule certainty, budget control, and seamless delivery from
                                    contract signing to commissioning.</p>
                                <h4>Key Requirements:</h4>
                                <p>10+ years of experience managing full-cycle EPC or Design-Build industrial projects
                                    (factories, warehouses).</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-5 col-xxl-5">
                            <div class="careerForm">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-floating">
                                                <input type="text" id="fname" name="fname" class="form-control"
                                                    placeholder="What is your name? *" required autocomplete="off">
                                                <label for="fname">Full Name *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-floating">
                                                <input type="email" id="email" name="email" class="form-control"
                                                    placeholder="Tell us your Email ID" autocomplete="off">
                                                <label for="email">Email Address</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-floating">
                                                <input name="mobile" id="mobile" type="tel" class="form-control"
                                                    placeholder="Enter your mobile number" maxlength="10"
                                                    autocomplete="off">
                                                <label for="mobile">Phone Number</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-floating">
                                                <input type="text" id="education" name="education" class="form-control"
                                                    placeholder="Education" autocomplete="off">
                                                <label for="education">Education</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="experience"
                                                    id="experienced" value="Experienced">
                                                <label class="form-check-label" for="experienced">I am
                                                    Experienced</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="experience"
                                                    id="fresher" value="Fresher">
                                                <label class="form-check-label" for="fresher">I am Fresher</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-floating">
                                                <input type="number" id="lastSalary" name="last_salary"
                                                    class="form-control" placeholder="Last Salary" autocomplete="off">
                                                <label for="lastSalary">Last Salary (₹)</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-floating">
                                                <input type="number" id="expectedSalary" name="expected_salary"
                                                    class="form-control" placeholder="Expected Salary"
                                                    autocomplete="off">
                                                <label for="expectedSalary">Expected Salary (₹)</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>