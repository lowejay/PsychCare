<!-- Modal Add Dreams -->
<div class="modal fade" id="dreamModal" tabindex="-1" role="dialog" aria-labelledby="dreamModalLable" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
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
                    <label for="dream-name">Name</label>
                    <input type="text" class="form-control" name="dream-name" aria-describedby="dream-name" placeholder="Name">
            </div>
            <div class="form-group">
                    <label for="dream-meaning">Meaning</label>
                    <textarea class="form-control" name="dream-meaning" rows="3"></textarea>
            </div>
          <button type="submit" name="dream-submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add Dreams -->

<!-- Modal Add Learner -->
<div class="modal fade" id="learnerModal" role="dialog" aria-labelledby="learnerModalLable" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="learnerModal">Types Of Learners</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="../controllers/survey_controller.php">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                  <label for="learner-question">Add new Types of Learner question</label>
                  <textarea class="form-control" name="learner-question" rows="3"></textarea>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                  <label for="learner-section">Learner Section #</label>
                  <select name="learner-section" id="learner-section" class="form-control" required>
                      <option value=""></option>
                      <option value="1">Section 1 (Visual)</option>
                      <option value="2">Section 2 (Auditory)</option>
                      <option value="3">Section 3 (Kinesthetic)</option>
                  </select>
              </div>
            </div>
          </div>
          <button type="submit" name="learner-submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add Learner -->

<!-- Modal Add Personality -->
<div class="modal fade" id="personalityModal" tabindex="-1" role="dialog" aria-labelledby="personalityModalLable" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
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
                    <label for="personality-question">Add new personality question</label>
                    <textarea class="form-control" name="personality-question" rows="3"></textarea>
            </div>
          <button type="submit" name="personality-submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add Personality -->

<!-- Modal Add Disorder -->
<div class="modal fade" id="disorderModal" tabindex="-1" role="dialog" aria-labelledby="disorderModalLable" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="disorderModal">Psychological Disorder Test</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="../controllers/survey_controller.php">
            <div class="form-group">
                    <label for="disorder-question">Add new Psychological Test question</label>
                    <textarea class="form-control" name="disorder-question" rows="3"></textarea>
            </div>
          <button type="submit" name="disorder-submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add Disorder -->