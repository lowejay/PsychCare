<?php require('../controllers/session_controller.php');?>
<?php unsetSesh();?>
<?php require('header.php');?>
<body class="animsition">
    <div>
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div style="margin: 0px;" class="login-logo">
                            <a href="sign-up.php">
                                <img src="../images/logo-landscape.png" width="250" alt="Psychcare">
                            </a>
                        </div>
                        <form name="sign-upform" method="POST" action="../sign-up_controller.php" >
                             <div class="row">
                                <div class="col-sm-8 col-md-3 col-lg-3"></div>
                            <div class="col-sm-8 col-md-3 col-lg-3">
                            <div class="form-group mb-30">
                                    <label>ID Number</label>
                                    <input class="au-input au-input" type="number" name="idnumber" placeholder="" required>
                            </div>
                            </div>
                                <div class="col-sm-8 col-md-3 col-lg-3"></div>
                            </div>
                                <div class="row">
                                <div class="col-sm-8 col-md-6">
                                    <div class="form-group mb-30">
                                    <label>First Name</label>
                                    <input class="au-input au-input" type="text" name="firstname" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-6">
                                    <div class="form-group mb-30">
                                    <label>Last Name</label>
                                    <input class="au-input au-input" type="text" name="lastname" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-6">
                                    <div class="form-group mb-30">
                                    <label>Email</label>
                                    <input class="au-input au-input" type="email" name="email" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-6">
                                    <div class="form-group mb-30">
                                    <label>Password</label>
                                    <input class="au-input au-input" type="password" name="password" placeholder="" required>
                                    </div>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue2" name="btnSign-up" type="submit">Continue</button>
                            </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="login.php">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require('footer.php');
?>