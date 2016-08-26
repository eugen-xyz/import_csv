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

        public function employee(){

            $this->load->view('templates/header');
            $this->load->view('employee/navbar');
            $this->load->view('admin/index');
            $this->load->view('templates/footer');
        }
    }