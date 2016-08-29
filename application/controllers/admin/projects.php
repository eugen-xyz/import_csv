<?php 
    class Projects extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->model('projects_model');
            $this->load->library('session');
            $this->load->helper('url');
        }

        public function projects_api(){

            $projects = $this->projects_model->get_projects();

            print json_encode($projects, JSON_PRETTY_PRINT);
        }

        public function add_projects(){

           
            $data = array(
                    $proj_code = strtoupper($this->input->post('project_code')),
                    $project_name = ucwords($this->input->post('project_name'))
            );

            if($proj_code == NULL OR $project_name == NULL){
                $this->session->set_flashdata('error','Oops! fields must contain a value.');
                redirect(base_url()."index.php/admin/projects");
            }
            else{
                
                $this->session->set_flashdata('success','Alright! Project has been added.');
                $this->projects_model->add_project($data);
                redirect(base_url()."index.php/admin/projects");
            }
        }
    }