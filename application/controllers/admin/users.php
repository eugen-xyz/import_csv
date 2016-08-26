<?php 
    class Users extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->model('users_model');
        }

        public function system_users_api(){

            $system_users = $this->users_model->get_system_users();

            print json_encode($system_users, JSON_PRETTY_PRINT);
        }
    }