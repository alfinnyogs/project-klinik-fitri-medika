<?php  
class Antigen extends CI_Controller{
    public function index()
    {
    	$dari = $this->input->post('dari');
    	$sampai = $this->input->post('sampai');
    	$this->_rules();

    	if($this->form_validation->run() == FALSE){
        	$this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
            $this->load->view('klinik/laporan_lab/laporan_antigen/antigen');
            $this->load->view('templates_klinik/footer');
    	}else{
    		$data['antigen'] = $this->db->query("SELECT * FROM antigen WHERE date(tanggal_antigen) >= '$dari' AND date(tanggal_antigen) <= '$sampai'")->result();
        	$this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
	        $this->load->view('klinik/laporan_lab/laporan_antigen/tampilkan_laporan_antigen', $data);
	        $this->load->view('templates_klinik/footer');
    	}
    }
    public function print_laporan_antigen()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');

        $data['antigen'] = $this->db->query("SELECT * FROM antigen WHERE date(tanggal_antigen) >= '$dari' AND date(tanggal_antigen) <= '$sampai'")->result();
        $data['total_pembayaran'] = $this->Models_klinik->hitung_jumlah_invoice();

        $this->load->view('klinik/laporan_lab/laporan_antigen/print_laporan_antigen', $data);
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
?>