<?php 
    class Users_model extends CI_Model{

        public function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
        }

        public function get_system_users(){

            $this->db->select('
                                user_id, 
                                access_level, 
                                first_name,
                                last_name,
                                username,
                                is_active,
                                date_registered
                            ')
                ->from('users')
                ->where('is_active', '1')
                ->order_by("last_name", "ASC");

            $query = $this->db->get();

            return $query->result_array();
            $query->free_result();
        }


    }