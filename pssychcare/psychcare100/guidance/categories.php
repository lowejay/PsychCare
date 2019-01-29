<!-- Modal Add Sched -->
<div class="modal fade" id="modalAddData" tabindex="-1" role="dialog" aria-labelledby="addButtonModal" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-xl modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addButtonModal">New Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="../controllers/teacher_controller.php" method="POST">
            <div class="modal-body" id="modal-body">
                <div class="row">
                    <div class="col-5 types" id="PD">
                        <div class="form-group">
                            <label for="psy-dis" class="control-label mb-1">Psychological Disorder</label>
                                <input id="psy-dis" name="psy-dis" type="text" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-5 types" id="TL">
                        <div class="form-group">
                            <label for="t-learn" class="control-label mb-1">Types of Learner</label>
                                <input id="t-learn" name="t-learn" type="text" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-5 types" id="PT">
                        <div class="form-group">
                            <label for="p-test" class="control-label mb-1">Personality Test</label>
                                <input id="p-test" name="p-test" type="text" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="row types" id="IDr">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="dr-key" class="control-label mb-1">Dream Keyword</label>
                                <input id="dr-key" name="dr-key" type="text" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="dr-desc" class="control-label mb-1">Description</label>
                                <textarea id="dr-desc" name="dr-desc" type="text" class="form-control" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn au-btn--orange" name="btnConfirmData">Confirm</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Add Sched -->

<!-- Modal Add Dreams -->
<div class="modal fade" id="dreamModal" tabindex="-1" role="dialog" aria-labelledby="dreamModalLable" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dreamModal">Interpretation Of Dreams</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="../controllers/survey_controller.php">
            <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Name">
            </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Meaning</label>
                    <input type="text" class="form-control" name="meaning" aria-describedby="emailHelp" placeholder="Meaning">
            </div>
          <button type="submit" value="dreamPost" name="dreamPost" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add Dreams -->

<!-- Modal Add Learner -->
<div class="modal fade" id="learnerModal" tabindex="-1" role="dialog" aria-labelledby="learnerModalLable" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="learnerModal">Types Of Learners</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="../controllers/survey_controller.php">
            <div class="form-group">
                    <label for="exampleInputEmail1">Add new learner question</label>
                    <textarea class="form-control" name="learner_question" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <hr>
            <div class="form-group">
                    <label for="exampleInputEmail1">Add new learner Choices</label>
                     <input type="text" class="form-control" name="answer1" id="exampleFormControlInput1" placeholder="answer">
            </div>
            <div class="form-group">
                     <input type="text" class="form-control" name="answer2" id="exampleFormControlInput1" placeholder="answer">
            </div>
            <div class="form-group">
                     <input type="text" class="form-control" name="answer3" id="exampleFormControlInput1" placeholder="answer">
            </div>
          <button type="submit" value="learnerPost" name="learnerPost" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add Learner -->

<!-- Modal Add Personality -->
<div class="modal fade" id="personalityModal" tabindex="-1" role="dialog" aria-labelledby="personalityModalLable" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="personalityModal">Personality Test</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="../controllers/survey_controller.php">
            <div class="form-group">
                    <label for="exampleInputEmail1">Add new personality question</label>
                    <textarea class="form-control" name="personality_question" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          <button type="submit" value="personalityPost" name="personalityPost" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add Personality -->

<!-- Modal Add Disorder -->
<div class="modal fade" id="disorderModal" tabindex="-1" role="dialog" aria-labelledby="disorderModalLable" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="disorderModal">Psychological Disorder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="../controllers/survey_controller.php">
            <div class="form-group">
                    <label for="exampleInputEmail1">Add new disorder question</label>
                    <textarea class="form-control" name="disorder_question" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          <button type="submit" value="disorderPost" name="disorderPost" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add Disorder -->