<?php
$currentPage = 'blogs';
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
    <title>EPC Contractor India | Industrial Construction & Warehouses - Ellora EPC | Blogs</title>
    <?php include 'includes/styles.php'; ?>
</head>

<body>
    <!-- <?php include 'includes/loader.php'; ?> -->
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="breadcrumbs" style="background: url(assets/media/breadcrumbs/blogs.jpg)">
            <div class="container">
                <div class="row">
                    <div class="breadcrumbContent">
                        <h2>Blogs</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index"><i
                                            class="ph-duotone ph-house-simple"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="blogs">
            <div class="container">
                <div class="row">
                    <div class="pgHeader">
                        <div class="pgTitle">
                            <h2>EPC Insights</h2>
                            <h6>Expert Analysis & Industry Trends.</h6>
                            <p>Stay ahead of the curve with our technical deep dives into project management and
                                industrial infrastructure.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 mb-3">
                        <div class="blogCard">
                            <figure class="blogMedia"><img src="assets/media/blogs/blog1.jpg" alt=""></figure>
                            <div class="blogBody">
                                <h3>One Contract, Total Control: Unpacking the Financial Advantages of Turnkey EPC.</h3>
                                <p>Learn how a single fixed-price EPC contract eliminates risk and guarantees your
                                    industrial project's budget.</p>
                                <a href="blog-details" class="btn btn-link stretched-link">Read Full Article <i
                                        class="ph-duotone ph-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 mb-3">
                        <div class="blogCard">
                            <figure class="blogMedia"><img src="assets/media/blogs/blog2.jpg" alt=""></figure>
                            <div class="blogBody">
                                <h3>The Speed of Steel: Why Modular & PEB Structures are Revolutionizing Warehousing.
                                </h3>
                                <p>Discover how Pre-Engineered Buildings (PEB) cut construction time by 40% for modern
                                    logistics facilities.</p>
                                <a href="blog-details" class="btn btn-link stretched-link">Read Full Article <i
                                        class="ph-duotone ph-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mt-5">
                        <a href="products" class="btn btn-light">View All
                            <i class="ph-duotone ph-arrow-up-right"></i></a>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>