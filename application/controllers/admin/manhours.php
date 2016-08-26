<?php 
    class Manhours extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->model('manhours_model');
        }

        public function manhours_api(){

            $manhours = $this->manhours_model->get_manhours();

            print json_encode($manhours, JSON_PRETTY_PRINT);
        }
    }