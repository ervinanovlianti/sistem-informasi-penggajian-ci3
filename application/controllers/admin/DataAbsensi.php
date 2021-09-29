<?php 
    class DataAbsensi extends CI_Controller{
        public function index()
        {
            $data['title'] = "Data Absensi Pegawai";
            $data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();
            $this->load->view('templates_admin/header',$data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/dataAbsensi', $data);
            $this->load->view('templates_admin/footer');
        }
    }
?>
<?php 
    
?>