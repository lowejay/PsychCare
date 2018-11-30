<?php 
require('../controllers/session_controller.php');if($_SESSION['emp_Privilege']!=2){header('Location: ../index.php');}
require('../views/header.php');require('navbars.php');require('../views/alert.php');
require('../controllers/teacher_controller.php');
    $emp_ID = $_SESSION['emp_ID'];
    $classid = $_GET['classid'];
    $student = loadClassStudent($emp_ID);if (($student)==0) {$nostudent = 0;}
    $class = loadClassSched($emp_ID);if (($class)==0) {$noclass = 0;}?>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                                <h1 id="maindesc">Students</h1>
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
                                            <img src="../images/icon/avatar-01.jpg" alt="Teacher-one" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['emp_FN']." ".$_SESSION['emp_LN'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/icon/avatar-01.jpg" alt="Teacher-one" />
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
                                                    <a href="../views/profile.php">
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
    		<!-- END HEADER DESKTOP-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        	<div class="col-12">
                            	<h4>Subject: &nbsp;<h3><?php echo $class[1]." ".$class[6];?></h3></h4>
                            	<h4><br>Schedule:</h4><h3 class="m-b-30"><?php echo $class[2]. " " .date('h:i A ',strtotime($class[3]))." - ".date('h:i A ', strtotime($class[4])); ?></h3>
                        	</div>
                            <div class="col-12">
                                <div class="table-data__tool">
                                    <div class="table-data__tool-right">
                                        <a href="classlist.php">
	                                        <button class="au-btn au-btn-icon au-btn--orange au-btn--small" style="color: white;">
                                                <i class="fas fa-arrow-left"></i>Back
	                                        </button>
	                                    </a>
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="<?php $studentmodal = loadStudentsModal($emp_ID,$classid);?>" data-toggle="modal" data-target="#modalAddStud">
                                            <i class="fas fa-plus"></i>Add Student
                                        </button>     
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                    	<?php if (isset($nostudent)){ ?>
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-times">&nbsp;&nbsp;</i><strong>No student data found.</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                        <?php
                                        }else{ ?> 
                                        <thead>
                                            <tr>
                                                <th>id number</th>
                                                <th>Name</th>
                                                <th>course</th>
                                                <th>year</th>
                                                <th>Email</th>
                                            </tr>      
                                        </thead>
                                        <tbody>
                                        <?php foreach($student as $row){?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $id = $row['student_ID'] ?></td>
                                                <td><?php echo $row['student_LN'].", ".$row['student_FN'] ?></td>
                                                <td><?php echo $row['course_code'] ?></td>
                                                <td><?php echo $row['year_code'] ?></td>
                                                <td><?php echo $row['student_Email'] ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="History" type="button" onclick="location.href='history.php?studentid=<?php echo $id?>&classid=<?php echo $_GET['classid']?>'">
                                                            <i class="zmdi zmdi-time-restore"></i>
                                                        </button>
                                                        <button class="item edit_student" data-toggle="tooltip" data-placement="top" title="Edit" type="button" id="<?php echo $id;?>">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Remove" type="button" onclick="removethisStudent(<?php echo $classid;?>, <?php echo $id;?>);">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php }} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 PsychCare. All rights reserved.</p>
                    </div>
                </div>
            </div>
	    </div>
	    <!-- Modal Add Student -->
	        <div class="modal fade" id="modalAddStud" tabindex="-1" role="dialog">
	            <div class="modal-dialog modal-xl modal-md" role="document">
	                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Student</h5>
                        </div>
	                    <div class="modal-body p-t-0">
	                        <div class="row">
	                            <table class="table data-table">
	                            	<?php if(($studentmodal)==0){$nomstudent = 0;}if (isset($nomstudent)){ ?>
                                    <tbody>
                                        <tr>
                                            <td><i class="fas fa-times">&nbsp;&nbsp;</i><strong>No student data found.</strong></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <?php }else{ ?> 
	                                <thead>
	                                    <tr>
	                                        <th>ID</th>
	                                        <th>Name</th>
	                                        <th>Course</th>
	                                        <th>Year</th>
	                                        <th>Email</th>
	                                        <th>Actions</th> 
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <?php foreach($studentmodal as $u){ ?>
	                                    <tr>
	                                        <td><?php $id=$u['student_ID']; echo $id;?></td>
	                                        <td><?php echo $u['student_LN'].", ".$u['student_FN'];?></td>
	                                        <td><?php echo $u['course_code'];?></td>
	                                        <td><?php echo $u['year_code'];?></td>
	                                        <td><?php echo $u['student_Email'];?></td>
	                                        <td><button type="button" id="addButtonmodal" class="btn btn-primary" onclick="addthisStudent(<?php echo $id;?>, <?php echo $emp_ID;?>, <?php echo $classid;?>)">
                                                <i class="icon-pencil icon-white"></i> Add
                                            </button></td>
	                                    </tr>
	                                    <?php } }?>
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    <!-- End Modal Add Student -->
	    <!-- Modal Edit Button -->
	        <div class="modal fade" id="modalEditStudent" tabindex="-1" role="dialog" aria-labelledby="aditButtonModal" aria-hidden="true">
	            <div class="modal-dialog modal-lg modal-md" role="document">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <h5 class="modal-title" id="editButtonModal">Edit Student Infromation</h5>
	                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                <span aria-hidden="true">&times;</span>
	                            </button>
	                    </div>
	                    <div class="modal-body" >
	                        <form action="../controllers/teacher_controller.php" method="POST">
	                            <div class="row">
	                                <div class="col-4">
	                                    <div class="form-group">
	                                        <label for="student_ID" class="control-label mb-1">ID Number</label>
	                                        <input id="student_ID" name= "student_ID" type="text" class="form-control" value="" data-val-required="Please enter the Class Schedule"/>
	                                                <span class="help-block" data-valmsg-for="student_ID" data-valmsg-summary="true"></span>
	                                    </div>
	                                </div>
	                            	<div class="col-4">
	                                    <div class="form-group">
	                                        <label for="student_LN" class="control-label mb-1">Last Name</label>
	                                            <input id="student_LN" value="2" name="student_LN" type="text" class="form-control" value"" data-val-required="Please enter the Class Schedule"/>
	                                                <span class="help-block" data-valmsg-for="student_LN" data-valmsg-summary="true"></span>
	                                    </div>
	                                </div>
	                                <div class="col-4">
	                                    <div class="form-group">
	                                        <label for="student_FN" class="control-label mb-1">First Name</label>
	                                            <input id="student_FN" value="3" name="student_FN" type="text" class="form-control" value="" data-val-required="Please enter the Class Schedule"/>
	                                                <span class="help-block" data-valmsg-for="student_FN" data-valmsg-summary="true"></span>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-4">
	                                    <div class="form-group">
	                                        <label for="select-course" class="control-label mb-1">Course</label>
                                            <select name="select-course" id="select-course" class="form-control">
                                                <option value="ICT">ICT</option>
                                                <option value="IT">IT</option>
                                                <option value="IS">IS</option>
                                                <option value="CS">CS</option>
                                            </select>
	                                    </div>
	                                </div>
	                                <div class="col-4">
	                                    <div class="form-group">
	                                        <label for="year_code" class="control-label mb-1">Year</label>
	                                            <input id="year_code" name="year_code" type="text" class="form-control" value="true" data-val-required="Please enter the Class Schedule"/>
	                                                <span class="help-block" data-valmsg-for="year_code" data-valmsg-summary="true"></span>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="modal-footer">
	                                
	                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	                                <button type="submit" name="btnEditStudent" class="btn au-btn--orange" style="color: white;">Confirm</button>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    <!-- End Modal Edit Button -->
	</div>
</body>


<?php require('../views/footer.php');
?>
<script>
$(document).ready(function(){
    // $('#btnloadAdd').click(function(){
    //     var studentdata = $(this).data('loadstudent');
    //     $.ajax({
    //         url: "../controllers/teacher_controller.php",
    //         method: "GET",
    //         data: {classid:studentdata},
    //         success: function(data){
    //             $('#edit_fetch_result').html(data);
    //             $('#modalEditSchedule').modal('show');
    //         }
    //     });
    // });
    $("select").select2({
        placeholder: "Select below"
    });
});
</script>