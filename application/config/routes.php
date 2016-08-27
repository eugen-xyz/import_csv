<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['admin'] = "admin/admin";
$route['admin/system_users'] = "admin/admin/system_users";
$route['admin/task_types'] = "admin/admin/task_types";
$route['admin/projects'] = "admin/admin/projects";
$route['admin/manhours'] = "admin/admin/manhours";
$route['admin/track_projects'] = "admin/admin/track_projects";

$route['admin/system_users/api'] = "admin/users/system_users_api";
$route['admin/task_types/api'] = "admin/task_type/task_types_api";
$route['admin/projects/api'] = "admin/projects/projects_api";
$route['admin/manhours/api'] = "admin/manhours/manhours_api";

$route['admin/resource/csv'] = "admin/export_csv/csv_resource";
$route['admin/export/csv'] = "admin/export_csv/save";
$route['admin/upload/csv'] = "admin/export_csv/upload_csv";


$route['employee'] = "employee/employee"; 
$route['employee/track_projects'] = "employee/employee/track_projects"; 


$route['default_controller'] = "welcome";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */