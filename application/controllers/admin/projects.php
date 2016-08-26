<?php 
    class Projects extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->model('projects_model');
        }

        public function projects_api(){

            $projects = $this->projects_model->get_projects();

            print json_encode($projects, JSON_PRETTY_PRINT);
        }
    }