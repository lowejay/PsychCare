<?php require('../controllers/session_controller.php');if(!$_SESSION){unsetSesh();}else{checkuser();}
require('header.php');?>
<body class="animsition" style="overflow: hidden;">
    <div class="backstretch">
        <div class="page-content">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content" style="background-color: #ffffff2e;color:white;padding-top: 20px;padding-bottom: 20px;border-radius: 5px;margin-bottom: 15px;">
                        <div class="login-logo">
                            <a href="login.php">
                                <img src="../images/logo-landscape.png" width="290" alt="Psychcare">
                            </a>
                            <h3>Login to your account</h3>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="../controllers/login_controller.php">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input class="form-control" type="" name="loginID" placeholder="ID Number" required formnovalidate>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-asterisk"></i>
                                        </div>
                                        <input class="form-control" type="password" name="loginPassword" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--orange" name="btnLoginSubmit" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Faculty and Academic Counselors
                                    <a href="sign-up.php">Sign up here!</a>
                                </p>
                                <p>
                                    Click here to go 
                                    <a href="../pp_survey">to PsychCare.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require('footer.php');require('alert.php');
?>