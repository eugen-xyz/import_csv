    
    <div class="container-fluid">
        <h1>Track Projects</h1>
    </div>

    <?= br(2); ?>

    <div class="col-md-6">
        <form>
            <div class="col-md-6">
                <br />
                <label for="project_code">Project Code</label>
                <select class="form-control" name="project_code">Project Code</select>
            </div>


            <div class="col-md-6">
                <br />
                <label for="task_type">Task Type</label>
                <select class="form-control" name="task_type">Task Type</select>
            </div>

            <div class="col-md-12">
                <br />
                <label for="task_description">Task Description</label>
                <textarea name="task_description" rows="8" class="form-control"></textarea>
            </div>

            <div class="col-md-3">
                <br />
                <label for="actual_time">Actual Time</label>
                <input type="text" name="actual_time" class="form-control" disabled="true" />
            </div>

            <div class="col-md-3">
                <br />
                <label for="time_rendered">Time Equivalent</label>
                <input type="text" name="time_rendered" class="form-control" disabled="true" />
            </div>

            <div class="col-md-1">
                <?= br(2); ?>
                <button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-play"></span>
                </button>
            </div>
            <div class="col-md-1">
                <?= br(2); ?>
                <button type="button" class="btn btn-danger">
                    <span class="glyphicon glyphicon-stop"></span>
                </button>
            </div>
            <div class="col-md-1">
                <?= br(2); ?>
                <button type="reset" class="btn btn-warning">
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
            </div>
            <div class="col-md-1">
                <?= br(2); ?>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-send"></span>
                </button>
            </div>
        </form>
    </div>

    <div class="col-md-6">
        Active/Inactive/Deleted    
    </div>
    

    <div class="col-md-12">
        <?= br(8); ?>
    </div>