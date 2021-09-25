<?php 
    class dataPegawai extends CI_Controller{
        public function index()
        {
            $data = $this->db->query("SELECT * FROM data_pegawai")->result();
            var_dump($data);
        }
    }
?>