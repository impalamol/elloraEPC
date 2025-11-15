<nav class="sidebar">
    <div class="sidebarHeader">
        <h3>About Us</h3>
    </div>
    <div class="sidebarContent">
        <ul class="nav flex-column gap-3">
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'about') ? 'active' : ''; ?>" aria-current="page" href="about">
                    <i class="ph-duotone ph-church"></i>
                    <span>Who We Are</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'history') ? 'active' : ''; ?>" href="history">
                    <i class="ph-duotone ph-clock-counter-clockwise"></i>
                    <span>History</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'mission-vision') ? 'active' : ''; ?>" href="mission-vision">
                    <i class="ph-duotone ph-target"></i>
                    <span>Mission & Vision</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'presidents-desk') ? 'active' : ''; ?>" href="presidents-desk">
                    <i class="ph-duotone ph-user"></i>
                    <span>President's Desk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'principals-desk') ? 'active' : ''; ?>" href="principals-desk">
                    <i class="ph-duotone ph-user"></i>
                    <span>Principal's Desk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'school-management') ? 'active' : ''; ?>" href="school-management">
                    <i class="ph-duotone ph-desktop"></i>
                    <span>School Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'student-council') ? 'active' : ''; ?>" href="student-council">
                    <i class="ph-duotone ph-student"></i>
                    <span>Student Council</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'teaching-staff') ? 'active' : ''; ?>" href="teaching-staff">
                    <i class="ph-duotone ph-users"></i>
                    <span>Teaching Staff</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'non-teaching-staff') ? 'active' : ''; ?>" href="non-teaching-staff">
                    <i class="ph-duotone ph-users-four"></i>
                    <span>Non-Teaching Staff</span>
                </a>
            </li>
        </ul>
    </div>
</nav>