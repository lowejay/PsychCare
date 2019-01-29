        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard.php">
                            <img src="../images/logo-landscape.png" width="165" height="50"  alt="PsychCare" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a href="dashboard.php" id="mbtnDashboard">
                                <i class="fa fa-bar-chart"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="classlist.php" id="mbtnClasslist">
                                <i class="fas fa-address-card"></i>Class List</a>
                        </li>
                        <li>
                            <a href="result.php" id="mbtnResult">
                                <i class="fas fa-pencil-square-o"></i>Result</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="dashboard.php">
                    <img src="../images/logo-landscape.png" width="175" height="20" alt="PsychCare" />
                </a>
            </div>

            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="nav-item">
                            <a href="dashboard.php" id="btnDashboard">
                                <i class="fa fa-bar-chart"></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="classlist.php" id="btnClasslist">
                                <i class="fa fa-address-card"></i>Class List</a>
                        </li>
                       <li class="nav-item">
                            <a href="history.php" id="btnResult">
                                <i class="fas fa-pencil-square-o"></i>Result</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->