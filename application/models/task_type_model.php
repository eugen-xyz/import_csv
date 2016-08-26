<?php 
    class Task_type_model extends CI_Model{

        public function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
        }

        public function get_task_types(){

            $this->db->select('
                                task_type_id, 
                                task_type
                            ')
                ->from('task_type')
                ->order_by("task_type_id", "ASC");

            $query = $this->db->get();

            return $query->result_array();
            $query->free_result();
        }
    }