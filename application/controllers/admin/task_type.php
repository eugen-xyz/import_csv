<?php 
    class Task_type extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->model('task_type_model');
        }

        public function task_types_api(){

            $task_types = $this->task_type_model->get_task_types();

            print json_encode($task_types, JSON_PRETTY_PRINT);
        }
    }