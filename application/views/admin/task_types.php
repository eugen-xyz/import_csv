    
    <?php 
        $error_message = $this->session->flashdata('error'); 
        $success_message = $this->session->flashdata('success'); 
        $invalid_message = $this->session->flashdata('invalid'); 
    ?>

    <div class="container-fluid" data-ng-controller="APITasksCtrl">
        <div class="container-fluid">
            <h1>Task Types</h1>
        </div>

        <div class="col-md-3 col-md-offset-9 ">
            <div  class="btn-group pull-right">
                <a href="#add_task" data-toggle="modal" role="button" class="btn btn-primary">
                    Add Task Type
                </a>
            </div>
        </div>

        <div class="modal fade" id="add_task" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <i class="fa fa-envelope fa-4x"></i>
                        <h4 class="modal-title" id="myModalLabel"><b>Add Task Type</b></h4>
                    </div>
                    <div class="modal-body" >
                        <div class="container-fluid">
                            <?= form_open('admin/task_type/add_task_type'); ?>
                                <div class="col-md-6">
                                    <label for="task_type">Task Type:</label>
                                    <input type="text" style="height:3em;"" name="task_type"  class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <br />
                                    <button type="submit" class="btn btn-success pull-right">
                                        <span class="glyphicon glyphicon-send"></span>
                                    </button>

                                    <button type="reset" class="btn btn-danger pull-right">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" aria-label="Close" role="button" class="btn btn-default btn-lg">Close</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container " style="margin-top:5em;">
        <?php 
            if(!empty($error_message)){
        ?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p style="text-align:center;">
                        <?= $error_message ?>
                    </p>
                </div>
        <?php
            }
            if(! empty($success_message)){
        ?>
                <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p style="text-align:center;">
                        <?= $success_message ?>
                    </p>
                </div>
        <?php
            }
            if(! empty($invalid_message)){
        ?>
                <div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p style="text-align:center;">
                        <?= $invalid_message ?>
                    </p>
                </div>
        <?php 
            }
        ?>
        </div>

        <div class="form-group col-md-3 col-md-offset-9">
            <br />
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="glyphicon glyphicon-search"></i>
                </span>

                <input type="text" ng-model="search" style="height:3em;"  id="search" class="form-control" placeholder="Search here...">

                <span class="input-group-addon">
                    <button  class="btn btn-xs" data-ng-click="search = ''"> 
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                </span>
            </div>

            <br /><br />
        </div>

         <div class="table-responsive">
            <table class="table table-hover">
                <thead style="font-weight:bold;">
                    <tr>
                        <td>Task Type</td>
                    </tr>
                </thead>

                <tbody data-dir-paginate="task in tasks|filter:search|itemsPerPage:10">
                    <tr>
                        <td>
                            <span data-ng-bind="task.task_type"></span>
                        </td>
                </tbody>
            </table>
            <center>
                <dir-pagination-controls
                   max-size="7"
                   direction-links="true"
                   boundary-links="true">
                </dir-pagination-controls>
            </center>
        </div>
    </div>
    