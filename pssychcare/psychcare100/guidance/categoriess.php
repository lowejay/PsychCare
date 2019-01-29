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
                            <label for="psy-dis" class="control-label mb-1">Physical Disorder</label>
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