    
     <?php 
        $error_message = $this->session->flashdata('error'); 
        $success_message = $this->session->flashdata('success'); 
        $invalid_message = $this->session->flashdata('invalid'); 
    ?>

    <div class="container-fluid" data-ng-controller="APIProjectsCtrl">
        <div class="container-fluid">
            <h1>Projects</h1>
        </div>

        <div class="col-md-3 col-md-offset-9 ">
            <div  class="btn-group pull-right">
                <a href="#add_project" data-toggle="modal" role="button" class="btn btn-primary">
                    Add Project
                </a>
            </div>
        </div>

        <div class="modal fade" id="add_project" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <i class="fa fa-envelope fa-4x"></i>
                        <h4 class="modal-title" id="myModalLabel"><b>Add Project</b></h4>
                    </div>
                    <div class="modal-body" >
                        <div class="container-fluid">
                            <?= form_open('admin/projects/add_project'); ?>
                                <div class="col-md-6">
                                    <label for="project_code">Project Code:</label>
                                    <input type="text" style="height:3em; text-transform:uppercase;" name="project_code"  class="form-control" maxlength="3">
                                </div>
                                <div class="col-md-6">
                                    <label for="project_name">Project Name:</label>
                                    <input type="text" style="height:3em;" class="form-control" name="project_name">
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
                        <td>Project Code</td>
                        <td>Project Name</td>
                    </tr>
                </thead>

                <tbody data-dir-paginate="project in projects|filter:search|itemsPerPage:10">
                    <tr>
                        <td>
                            <span data-ng-bind="project.project_code"></span>
                        </td>
                        <td>
                            <span data-ng-bind="project.project_name"></span>
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
    