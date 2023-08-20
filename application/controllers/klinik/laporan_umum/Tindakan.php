<?php  
class Tindakan extends CI_Controller{
    public function index()
    {
    	$dari = $this->input->post('dari');
    	$sampai = $this->input->post('sampai');
    	$this->_rules();

    	if($this->form_validation->run() == FALSE){
        	$this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
            $this->load->view('klinik/laporan_umum/laporan_tindakan/tindakan');
            $this->load->view('templates_klinik/footer');
    	}else{
    		$data['tindakan'] = $this->db->query("SELECT * FROM tindakan_umum tu, pasien pn where tu.nomor_pasien=pn.nomor_pasien AND date(tanggal_tindakan) >= '$dari' AND date(tanggal_tindakan) <= '$sampai'")->result();
        	$this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
	        $this->load->view('klinik/laporan_umum/laporan_tindakan/tampilkan_laporan_tindakan', $data);
	        $this->load->view('templates_klinik/footer');
    	}
    }
    public function print_laporan_tindakan()
    {
    	$dari = $this->input->get('dari');
    	$sampai = $this->input->get('sampai');

    	$data['tindakan'] = $this->db->query("SELECT * FROM tindakan_umum tu, pasien pn where tu.nomor_pasien=pn.nomor_pasien AND date(tanggal_tindakan) >= '$dari' AND date(tanggal_tindakan) <= '$sampai'")->result();

        $this->load->view('klinik/laporan_umum/laporan_tindakan/print_laporan_tindakan', $data);
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
    	$this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
?>