<?php  
class Rawat_jalan extends CI_Controller{
    public function index()
    {
    	$dari = $this->input->post('dari');
    	$sampai = $this->input->post('sampai');
    	$this->_rules();

    	if($this->form_validation->run() == FALSE){
        	$this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
            $this->load->view('klinik/laporan_umum/laporan_jalan/rawat_jalan');
            $this->load->view('templates_klinik/footer');
    	}else{
    		$data['rawat_jalan'] = $this->db->query("SELECT * FROM rawat_jalan_umum rj, pasien pn where rj.nomor_pasien=pn.nomor_pasien AND date(tanggal_pendaftaran) >= '$dari' AND date(tanggal_pendaftaran) <= '$sampai'")->result();
        	$this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
	        $this->load->view('klinik/laporan_umum/laporan_jalan/tampilkan_laporan_rawatjalan', $data);
	        $this->load->view('templates_klinik/footer');
    	}
    }
    public function print_laporan_rawatjalan()
    {
    	$dari = $this->input->get('dari');
    	$sampai = $this->input->get('sampai');

    	$data['rawat_jalan'] = $this->db->query("SELECT * FROM rawat_jalan_umum rj, pasien pn where rj.nomor_pasien=pn.nomor_pasien AND date(tanggal_pendaftaran) >= '$dari' AND date(tanggal_pendaftaran) <= '$sampai'")->result();
        $data['total_pembayaran'] = $this->Models_klinik->hitung_jumlah_invoice();

        $this->load->view('klinik/laporan_umum/laporan_jalan/print_laporan_rawatjalan', $data);
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
    	$this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
?>