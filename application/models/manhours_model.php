<?php 
    class Manhours_model extends CI_Model{

        public function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
        }

        public function get_manhours(){
            
            $this->db->select('
                            date_created,
                            users.first_name,
                            users.last_name,
                            projects.project_code,
                            projects.project_name,
                            task_type.task_type,
                            task_description,
                            time_rendered,
                            status
                        ')
                ->from('manhours')
                ->join('users', 'users.user_id = manhours.user_id')
                ->join('task_type', 'task_type.task_type_id = manhours.task_type_id')
                ->join('projects', 'projects.project_id = manhours.project_id')
                ->where('manhours.is_active', '1')
                ->order_by("manhours_id", "ASC");

            $query = $this->db->get();
           

            return $query->result_array();
            $query->free_result();
        }


    }