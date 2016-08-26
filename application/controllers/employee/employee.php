<?php 
    class Employee extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->helper('url');
        }

        public function index(){

            $this->load->view('templates/header');
            $this->load->view('dev/navbar');
            $this->load->view('dev/index');
            $this->load->view('templates/footer');
        }

        public function track_projects(){

            $this->load->view('templates/header');
            $this->load->view('dev/navbar');
            $this->load->view('dev/track_projects');
            $this->load->view('templates/footer');
        }
        
    }