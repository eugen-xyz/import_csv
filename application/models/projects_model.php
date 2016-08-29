<?php 
    class Projects_model extends CI_Model{

        public function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
        }

        public function get_projects(){

            $this->db->select('
                                project_id, 
                                project_code, 
                                project_name
                            ')
                ->from('projects')
                ->order_by("project_code", "ASC");

            $query = $this->db->get();

            return $query->result_array();
            $query->free_result();
        }

        public function add_project($data){

            $data = array(
                    'project_code'          => $data[0],
                    'project_name'          => $data[1] 
                );

            return $this->db->insert('projects', $data);

        }


    }