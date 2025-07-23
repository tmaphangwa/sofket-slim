<nav class="navbar navbar-dark navbar-expand-md sticky-top" style="clear: both;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"> <img style="height: 30px;" src="images/SOFKETLogo.png"/> </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Our Services
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="website-design-development.php">Website Development</a>
                                <a class="dropdown-item" href="mobile-app-design-development.php">Application Development</a>
                                <a class="dropdown-item" href="graphic-design.php">Graphic Design</a>
                                <a class="dropdown-item" href="search-engine-optimization.php">Search Engine Optimisation</a>
                                <a class="dropdown-item" href="email-marketing-automation.php">Email Marketing</a>
                            </div>
                        </li>
                
                <!--li class="nav-item">
                    <a class="nav-link" href="portfolio.php">Portfolio</a>
                </li-->
                <li class="nav-item">
                    <a class="nav-link" href="articles.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vacancies.php">Vacancies</a>
                </li>
            </ul>
        </div>

        <div>
            <ul class="navbar-nav me-auto">
                <?php
                    if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    echo '<li class="nav-item"> <a class="nav-link" href="client-profile.php">'. $_SESSION['name'] .'</a> </li>';
                    echo '<li class="nav-item"> <a class="nav-link" href="logout.php"> Logout </a> </li>';
                    }
                    else{
                    echo '<li class="nav-item"> <a class="nav-link" href="login.php">Login / Register</a> </li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>