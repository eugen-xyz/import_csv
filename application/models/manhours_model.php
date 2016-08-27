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

        public function save_csv($data){


            $project_code = $data[0];
            $this->db->select('project_id')
                    ->from('projects')
                    ->where('project_code', $project_code);
            $project_id_query = $this->db->get();

            if ($project_id_query->num_rows() > 0) {
                $proj_id =  $project_id_query->row()->project_id;
             }


            $task_type = $data[2];
            $this->db->select('task_type_id')
                    ->from('task_type')
                    ->where('task_type', $task_type);
            $task_type_id_query = $this->db->get();
            
            if ($task_type_id_query->num_rows() > 0) {
                $task_id =  $task_type_id_query->row()->task_type_id;
             }

            $data = array(
                    'user_id'            => '1',
                    'project_id'         =>  $proj_id,
                    'project_code'       =>  '',
                    'project_name'       =>  '',
                    'date_created'       =>  $data[1],
                    'task_type_id'       =>  $task_id,
                    'task_type'          =>  '',
                    'task_description'   =>  $data[3],
                    'time_rendered'      =>  $data[4],
                    'status'             =>  $data[5],
                    'is_active'          =>  '1'
                    
                );

            return $this->db->insert('manhours', $data);
        }


    }