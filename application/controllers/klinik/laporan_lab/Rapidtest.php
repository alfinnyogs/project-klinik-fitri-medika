<?php  
class Rapidtest extends CI_Controller{
    public function index()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
            $this->load->view('klinik/laporan_lab/laporan_rapidtest/rapidtest');
            $this->load->view('templates_klinik/footer');
        }else{
            $data['rapid_test'] = $this->db->query("SELECT * FROM rapid_test WHERE date(tanggal_rapidtes) >= '$dari' AND date(tanggal_rapidtes) <= '$sampai'")->result();
            $this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
            $this->load->view('klinik/laporan_lab/laporan_rapidtest/tampilkan_laporan_rapidtest', $data);
            $this->load->view('templates_klinik/footer');
        }
    }
    public function print_laporan_rapidtest()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');

        $data['rapid_test'] = $this->db->query("SELECT * FROM rapid_test WHERE date(tanggal_rapidtes) >= '$dari' AND date(tanggal_rapidtes) <= '$sampai'")->result();

        $this->load->view('klinik/laporan_lab/laporan_rapidtest/print_laporan_rapidtest', $data);
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
?>