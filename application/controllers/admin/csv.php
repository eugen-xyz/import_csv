<?php 
    class Csv extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
        }

        public function csv_resource(){
            //getting resource and convert to csv

            $jsonResource = base_url(). "index.php/admin/manhours/api";
            $json = file_get_contents($jsonResource);
            $array = json_decode($json, true);
            $f = fopen('php://output', 'w');
            $firstLineKeys = false;
            foreach ($array as $line)
            {
                if (empty($firstLineKeys))
                {
                    $firstLineKeys = array_keys($line);
                    fputcsv($f, $firstLineKeys);
                    $firstLineKeys = array_flip($firstLineKeys);
                }
                  fputcsv($f, array_merge($firstLineKeys, $line));
            }
        }

        public function save(){

            $json_resource = base_url(). "index.php/admin/manhours/api";
            $get_json_resource =  file_get_contents($json_resource) ;
            $decode_json_resource = json_decode($get_json_resource, true);

            //get the api for the filename
            // must be the user_id from session
            $first =  $decode_json_resource[0]['first_name'];
            $last =  $decode_json_resource[0]['last_name'];

            $filename = $first.$last;

            $path = base_url(). "index.php/admin/resource/csv";
            $file =  file_get_contents($path) ;


            $handle = fopen('csv_download/'.$filename.".csv", "w+");
            fwrite($handle, $file);
            fclose($handle);

            header('Content-Type: application/octet-stream');
            header("Content-Disposition: attachment; filename=$filename.csv ");
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('csv_download/'.$filename.'.csv'));
            readfile('csv_download/'.$filename.'.csv');
            unlink('csv_download/'.$filename.'.csv');
            exit;
 
        }

        public function upload_csv($delimiter=','){
            // csv to json resource

            $header = NULL;
            $data = array();
            if (($handle = fopen($_FILES['file']['tmp_name'], 'r+')) !== FALSE)
            {
                while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
                {
                    if(!$header)
                        $header = $row;
                    else{
                        if(!array_combine($header, $row)){
                            $this->session->set_flashdata('error','Oops! You are trying to upload an invalid csv file.');
                            redirect(base_url()."index.php/admin/manhours");
                        }
                        else{
                            $data[] = array_combine($header, $row);
                        }
                    }
                }
                fclose($handle);
            }
   
            $counter =  count($data);
            $num = 0;
            do{
                foreach ($data as $out){
                    if(!isset($out['project_code']) && !isset($out['date_created']) && !isset($out['task_type']) && !isset($out['task_description']) && !isset($out['time_rendered'])){
                            $this->session->set_flashdata('invalid','Ohhh!! The CSV file you\'re trying to upload has an invalid column.');
                            redirect(base_url()."index.php/admin/manhours");
                    }
                    else{
                        $data = array(
                            $project_code =  $out['project_code'],
                            $date_created =  $out['date_created'],
                            $task_type =  $out['task_type'],
                            $task_description = $out['task_description'],
                            $time_rendered = $out['time_rendered'],
                            $status = $out['status']
                        );
                        $this->save_csv($data);
                        $num++;
                    }
                }
            }while($num != $counter);
            $this->session->set_flashdata('success','CSV file was uploaded succesfully.');
            redirect(base_url()."index.php/admin/manhours");
        }

        public function save_csv($data){

            $this->load->model('manhours_model');
            return $this->manhours_model->save_csv($data);
        }
    }

 