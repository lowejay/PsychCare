<?php require('header.php');?>
    <button type="button" name="autoclick"  id="autoclick" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#staticModal" hidden></button>
    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-md m-t-100" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">Confirm Account</h5>
                    <a href="../"><button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </a>
                </div>
                <div class="modal-body">
                    <p>Awaiting account confirmation.</p>
                </div>
                <div class="modal-footer">
                    <a href="../"><button type="button" class="btn btn-success">Dismiss</button></a>
                </div>
            </div>
        </div>
    </div>
<?php require('footer.php');?>
   <script type="text/javascript">
    $(document).ready(function() {
      $("#autoclick").click();
        });
    </script>
