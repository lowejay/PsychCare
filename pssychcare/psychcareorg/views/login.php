<?php require('../controllers/session_controller.php');?>
<?php unsetSesh();?>
<?php require('header.php');?>
<body class="animsition">
    <div>
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="login.php">
                                <img src="../images/logo-landscape.png" width="290" alt="Psychcare">
                            </a>
                        </div>
                        <div class="login-form">
                            <form name="loginForm" method="POST" action="../controllers/login_controller.php">
                                <div class="form-group">
                                    <label>ID Number</label>
                                    <input class="au-input au-input--full" type="" name="loginID" placeholder="ID Number" required formnovalidate>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="loginPassword" placeholder="Password" required>
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
                                    Don't you have account?
                                    <a href="sign-up.php">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require('footer.php');
?>