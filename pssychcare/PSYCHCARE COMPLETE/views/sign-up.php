<?php require('../controllers/session_controller.php');?>
<?php require('../controllers/accounts_controller.php');?>
<?php unsetSesh();?>
<?php require('header.php');?>
<body>
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
                        <form name="sign-upform" method="POST" action="sign-up.php">
                            <div class="row">
                                <div class="col-sm-8 col-md-6">
                                    <div class="form-group mb-30">
                                        <label>Employee ID </label>
                                            <input class="au-input au-input" type="text" id="idnumber" name="idnumber" placeholder="Ex: 1510ABCD" required/>                                   
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-md-6">
                                    <div class="form-group mb-30">
                                        <label>First Name</label>
                                            <input class="au-input au-input" type="text" id="firstname" name="firstname" placeholder="First Name" required/>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-6">
                                    <div class="form-group mb-30">
                                        <label>Last Name</label>
                                            <input class="au-input au-input" type="text" id="lastname" name="lastname" placeholder="Last Name" required/>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-6">
                                    <div class="form-group mb-30">
                                        <label>Email</label>
                                            <input class="au-input au-input" type="email" id="email" name="email" placeholder="Email" required/>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-6">
                                    <div class="form-group mb-30">
                                    <label>Password</label>
                                    <input class="au-input au-input" type="password" id="password" name="password" placeholder="Password" required/>
                                    </div>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue2" name="btnAddEmp" type="submit">Continue</button>
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