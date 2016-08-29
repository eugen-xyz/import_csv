<?php 
    class Task_type extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->model('task_type_model');
            $this->load->library('session');
            $this->load->helper('url');
        }

        public function task_types_api(){

            $task_types = $this->task_type_model->get_task_types();

            print json_encode($task_types, JSON_PRETTY_PRINT);
        }

        public function add_task_type(){

            $data = array(
                    $task_type = ucfirst($this->input->post('task_type'))
            );

            if($task_type == NULL){
                $this->session->set_flashdata('error','Oops! Task Type must contain a value.');
                redirect(base_url()."index.php/admin/task_types");
            }
            else{
                $this->session->set_flashdata('success','Alright! Task Type has been added.');
                $this->task_type_model->add_task_type($data);
                redirect(base_url()."index.php/admin/task_types");
            }
        }
    }