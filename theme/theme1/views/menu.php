<section class="navbar-section">
    <div class="top-bar" id="top-bar">
        <nav class="navbar">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-4">
                        <a class="navbar-brand logo mx-auto" href="<?php echo $site_url; ?>">
                            <?php site_logo(); ?>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="main-bar" id="main-bar">
        <nav class="navbar navbar-expand-lg custom-nav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item" id="index">
                            <a class="nav-link" href="<?php echo $site_url; ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown" id="about">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> About Us </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="<?php echo $site_url; ?>about/">About College</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $site_url; ?>chairmans-message/"> Chairman's Message </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $site_url; ?>principals-desk/"> From Principal's Desk </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $site_url; ?>vission-mission/"> Vission & Mission </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $site_url; ?>recognition/"> Recognition </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" id="student">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Student Corner </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="<?php echo $site_url; ?>academic-calendar/">Academic Calender</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $site_url; ?>courses/">Courses</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $site_url; ?>admission-notification/">Admission Notification</a>
                                </li>
                                <li>
                                    <a target="_blank" class="dropdown-item" href="http://www.bilaspuruniversity.ac.in/syllabus.php">Syllabus</a>
                                </li>
                                <li>
                                    <a target="_blank" class="dropdown-item" href="http://www.bilaspuruniversity.ac.in/results.php">Result</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $site_url; ?>sports-department/">Sports Department</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $site_url; ?>alumni/">Alumni</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" id="faculty">
                            <a class="nav-link" href="<?php echo $site_url; ?>faculty/">Faculty</a>
                        </li>
                        <li class="nav-item" id="gallery">
                            <a class="nav-link" href="<?php echo $site_url; ?>gallery/">Gallery</a>
                        </li>
                        <li class="nav-item" id="facilities">
                            <a class="nav-link" href="<?php echo $site_url; ?>facilities/">Facilities</a>
                        </li>
                        <li class="nav-item" id="notification">
                            <a class="nav-link" href="<?php echo $site_url; ?>notification/">Notification</a>
                        </li>
                        <li class="nav-item" id="contact">
                            <a class="nav-link" href="<?php echo $site_url; ?>contact/">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>