<?php 
    class Export_csv extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->helper('url');
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

            $path = base_url(). "index.php/admin/export/csv";
            $file =  file_get_contents($path) ;


            $handle = fopen('files/'.$filename.".csv", "w");
            fwrite($handle, $file);
            fclose($handle);

            header('Content-Type: application/octet-stream');
            header("Content-Disposition: attachment; filename=$filename.csv ");
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('files/'.$filename.'.csv'));
            readfile('files/'.$filename.'.csv');
            exit;
 
        }
    }