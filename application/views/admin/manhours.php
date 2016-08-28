
    <?php 
        $error_message = $this->session->flashdata('error'); 
        $success_message = $this->session->flashdata('success'); 
        $invalid_message = $this->session->flashdata('invalid'); 
    ?>

    <div class="container-fluid" data-ng-controller="APIManhoursCtrl">
        <div class="col-md-12">
            <h1>Manhours</h1>
        </div>

        <div class="col-md-3 col-md-offset-9 ">
            <div  class="btn-group pull-right">
                <?=form_open('admin/export/csv');?>
                    <button class="btn btn-success">Export as CSV</button>
                </form>
            </div>
            <div  class="btn-group pull-right">
                <a href="#import" data-toggle="modal" role="button" class="btn btn-primary">
                    Import CSV
                </a>
            </div>
        </div>

        <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <i class="fa fa-envelope fa-4x"></i>
                        <h4 class="modal-title" id="myModalLabel"><b>Import CSV</b>
                        <b>Browse CSV file and click upload</b></h4>
                    </div>
                    <div class="modal-body" >
                        <div class="container-fluid">
                            <?php echo form_open_multipart('admin/upload/csv') ?>
                                <div class="col-md-9">
                                    <input type="file" style="height:3em;" class="form-control" name="file">
                                </div>
                                <div class="col-md-3">
                                    <input type="submit" class="btn btn-success" name="btn_submit" value="Upload File" />
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


        <div class="container " style="margin-top:10em;">
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
                        <td>Date</td>
                        <td>Assignee</td>
                        <td>Project Code</td>
                        <td>Project Name</td>
                        <td>Task Type</td>
                        <td>Task Description</td>
                        <td>Time Rendered</td>
                        <td>Status</td>
                    </tr>
                </thead>

                <tbody data-dir-paginate="manhour in manhours|filter:search|itemsPerPage:10">
                    <tr>
                        <td>
                            <span data-ng-bind="manhour.date_created | date:'MMMM d, y'"></span>
                        </td>
                        <td>
                            <span data-ng-bind="manhour.last_name + ' ' + manhour.first_name"></span>
                        </td>
                        <td>
                            <span data-ng-bind="manhour.project_code"></span>
                        </td>
                        <td>
                            <span data-ng-bind="manhour.project_name"></span>
                        </td>
                        <td>
                            <span data-ng-bind="manhour.task_type"></span>
                        </td>
                        <td>
                            <span data-ng-bind="manhour.task_description"></span>
                        </td>
                        <td>
                            <span data-ng-bind="manhour.time_rendered"></span>
                        </td>
                        <td>
                            <span data-ng-bind="manhour.status"></span>
                        </td>
                    </tr>
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