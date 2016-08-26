<?php 
    class Admin extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->helper('url');
        }

        public function index(){

            $this->load->view('templates/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/index');
            $this->load->view('templates/footer');
        }

        public function system_users(){

            $this->load->view('templates/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/system_users');
            $this->load->view('templates/footer');
        }

        public function task_types(){

            $this->load->view('templates/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/task_types');
            $this->load->view('templates/footer');
        }

        public function projects(){

            $this->load->view('templates/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/projects');
            $this->load->view('templates/footer');
        }

        public function track_projects(){

            $this->load->view('templates/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/track_projects');
            $this->load->view('templates/footer');
        }

        public function manhours(){

            $this->load->view('templates/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/manhours');
            $this->load->view('templates/footer');
        }
        
    }