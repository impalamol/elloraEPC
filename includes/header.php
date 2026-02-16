<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index">
            <img src="assets/media/ellora-logo.png" alt="Ellora EPC" title="Ellora EPC" width="140">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>" aria-current="page"
                        href="index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'about') ? 'active' : ''; ?>" href="about">About
                        Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class=" nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Projects
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu">
                            <a href="#" class="dropdown-item">Completed Projects</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="dropdown-item">Industrial</a></li>
                                <li><a href="#" class="dropdown-item">Commercial</a></li>
                                <li><a href="#" class="dropdown-item">Infrastructure</a></li>
                                <li><a href="#" class="dropdown-item">Interior</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu">
                            <a href="#" class="dropdown-item">Ongoing Projects</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="dropdown-item">Industrial</a></li>
                                <li><a href="#" class="dropdown-item">Commercial</a></li>
                                <li><a href="#" class="dropdown-item">Infrastructure</a></li>
                                <li><a href="#" class="dropdown-item">Interior</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'blogs') ? 'active' : ''; ?>" href="blogs">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'careers') ? 'active' : ''; ?>"
                        href="careers">Career</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0 gap-3">
                <!-- <li class="nav-item">
                    <a class="nav-link circleLink" href="blogs" title="Blogs"><i
                            class="ph-duotone ph-read-cv-logo"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link circleLink" href="careers" title="Careers"><i
                            class="ph-duotone ph-users-three"></i></a>
                </li> -->
                <li class="nav-item">
                    <a class=" btn btn-light" href="contact" title="Contact Us"><i class="ph-duotone ph-phone"></i>
                        Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>