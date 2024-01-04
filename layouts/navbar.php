<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="images/new/logo.png" alt="logo" />
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], 'index.php') !== false ? 'active' : '' ?>" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], 'about.php') !== false ? 'active' : '' ?>" href="about.php">About</a>
                </li>

                <li class="nav-item dropdown service-dropdown">
                    <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], 'services') !== false ? 'active' : '' ?>" href="services.php" id="service-dropdown">Services <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu dropdown-menu-right service-dropdown-menu" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="services/chimney-and-stack-emissions-monitoring.php" style="text-transform: uppercase;">Chimney And Stack Emissions Monitoring</a>
                        <a class="dropdown-item" href="services/ambient-and-indoor-air-quality-measurements.php" style="text-transform: uppercase;">Ambient And Indoor Air Quality Measurements</a>
                        <a class="dropdown-item" href="services/noise-pollution-monitoring-and-advisory.php" style="text-transform: uppercase;">Noise Pollution Monitoring And Advisory</a>
                        <a class="dropdown-item" href="services/environmental-health-and-safety-trainings.php" style="text-transform: uppercase;">Environmental, Health And Safety Trainings</a>
                        <a class="dropdown-item" href="services/vibration-monitoring-and-advisory-for-blasting-activities.php" style="text-transform: uppercase;">VVibration Monitoring And Advisory For Blasting Activities </a>
                        <a class="dropdown-item" href="services/wastewater-management-and-treatment.php" style="text-transform: uppercase;">Wastewater Management And Treatment</a>
                        <a class="dropdown-item" href="services/environmental_and_social_impact_assessment.php" style="text-transform: uppercase;"> Environmental and social Impact assessment</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], 'projects.php') !== false ? 'active' : '' ?>"  href="projects.php">Projects</a>
                </li>

                <li class="nav-item dropdown resource" id="resource-list">
                    <a class="nav-link dropdown-toggle <?= strpos($_SERVER['REQUEST_URI'], 'testimonials.php') || strpos($_SERVER['REQUEST_URI'], 'faq.php') !== false ? 'active' : '' ?>" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RESOURCES</a>
                    <div class="dropdown-menu dropdown-menu-right" id="resource-menu" aria-labelledby="resource-menu">
                        <a class="dropdown-item" href="faq.php">FAQ</a>
                        <a class="dropdown-item" href="testimonials.php">TESTIMONIALS</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], 'contact.php') !== false ? 'active' : '' ?>" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>