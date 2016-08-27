    
    <div class="container-fluid" data-ng-controller="APIManhoursCtrl">
        <div class="col-md-12">
            <h1>Manhours</h1>
        </div>

        <div class="col-md-3 col-md-offset-9 ">
            <div  class="btn-group pull-right">
                <form action="save/csv" method="post">
                    <button class="btn btn-success">Export as CSV</button>
                </form>
            </div>
            <div  class="btn-group pull-right">
                <form action="#" method="post">
                    <button class="btn btn-primary">Import CSV</button>
                </form>
            </div>
        </div>


        <div class="form-group col-md-3 col-md-offset-9">
            <br />
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="glyphicon glyphicon-search"></i>
                </span>

                <input type="text" ng-model="search" style="height:3em;"  id="search" class="form-control" placeholder="Search here...">

                <span class="input-group-addon">
                    <button  class="btn btn-xs" data-ng-click="search = null"> 
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
                        <td>First Name</td>
                        <td>Last Name</td>
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
                            <span data-ng-bind="manhour.first_name"></span>
                        </td>
                        <td>
                            <span data-ng-bind="manhour.last_name"></span>
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