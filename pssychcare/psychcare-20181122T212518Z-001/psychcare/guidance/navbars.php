        <header class="header-mobile d-block d-lg-none" style="z-index: 4;">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../guidance/dashboard.php">
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
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="#cat" id="mbtnCategory">
                                <i class="fas fa-pencil-square-o"></i>Categories</a>
                        </li>
                        <li>
                            <a href="#app" id="mbtnAppointment">
                                <i class="fas fa-calendar"></i>Appointments</a>
                        </li>
                        <li>
                            <a href="#stat" id="mbtnData">
                                <i class="fas fa-tachometer-alt"></i>Statistics</a>
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
            <div id="menubar" class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="navbar__list list-unstyled">
                        <li>
                            <a href="#cat" id="btnCategory">
                                <i class="fas fa-pencil-square-o"></i>Categories</a>
                        </li>
                        <li>
                            <a href="#app" id="btnAppointment">
                                <i class="fa fa-calendar"></i>Appointments</a>
                        </li>
                        <li>
                            <a href="#stat" id="btnData">
                                <i class="fas fa-tachometer-alt"></i>Statistics</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
              <div class="container-fluid">
                  <div class="header-wrap">
                          <h2 id="maindesc" class="p-l--30">Dashboard</h2>
                      <div class="header-button">
                          <div class="noti-wrap">
                              <div class="noti__item js-item-menu">
                                  <i class="zmdi zmdi-notifications"></i>
                                  <span class="quantity">3</span>
                                  <div class="notifi-dropdown js-dropdown">
                                      <div class="notifi__title">
                                          <p>You have 3 Notifications</p>
                                      </div>
                                      <div class="notifi__item">
                                          <div class="bg-c1 img-cir img-40">
                                              <i class="zmdi zmdi-email-open"></i>
                                          </div>
                                          <div class="content">
                                              <p>You got a email notification</p>
                                              <span class="date">April 12, 2018 06:50</span>
                                          </div>
                                      </div>
                                      <div class="notifi__item">
                                          <div class="bg-c2 img-cir img-40">
                                              <i class="zmdi zmdi-account-box"></i>
                                          </div>
                                          <div class="content">
                                              <p>Your account has been blocked</p>
                                              <span class="date">April 12, 2018 06:50</span>
                                          </div>
                                      </div>
                                      <div class="notifi__item">
                                          <div class="bg-c3 img-cir img-40">
                                              <i class="zmdi zmdi-file-text"></i>
                                          </div>
                                          <div class="content">
                                              <p>You got a new file</p>
                                              <span class="date">April 12, 2018 06:50</span>
                                          </div>
                                      </div>
                                      <div class="notifi__footer">
                                          <a href="#">All notifications</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="account-wrap">
                              <div class="account-item clearfix js-item-menu">
                                  <div class="image">
                                      <img src="../images/icon/avatar-01.jpg" alt="Guidance-one" />
                                  </div>
                                  <div class="content">
                                      <a class="js-acc-btn" href="#"><?php echo $_SESSION['emp_FN']?></a>
                                  </div>
                                  <div class="account-dropdown js-dropdown">
                                      <div class="info clearfix">
                                          <div class="image">
                                              <a href="#">
                                                  <img src="../images/icon/avatar-01.jpg" alt="Guidance-one" />
                                              </a>
                                          </div>
                                          <div class="content">
                                              <h5 class="name">
                                                  <a href="#"><?php echo $_SESSION['emp_FN']." ".$_SESSION['emp_LN'];?></a>
                                              </h5>
                                              <span class="email"><?php echo $_SESSION['emp_Email'];?></span>
                                          </div>
                                      </div>
                                      <div class="account-dropdown__body">
                                          <div class="account-dropdown__item">
                                              <a href="profile.php">
                                                  <i class="zmdi zmdi-account-circle"></i>My Profile</a>
                                          </div>
                                      </div>
                                      <div class="account-dropdown__footer">
                                          <a href="../views/logout.php">
                                              <i class="zmdi zmdi-power"></i>Logout</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </header>
        <!-- HEADER DESKTOP-->