<?php  
class Rawat_inap extends CI_Controller{
    public function index()
    {
    	$dari = $this->input->post('dari');
    	$sampai = $this->input->post('sampai');
    	$this->_rules();

    	if($this->form_validation->run() == FALSE){
        	$this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
            $this->load->view('klinik/laporan_bpjs/laporan_inap/rawat_inap');
            $this->load->view('templates_klinik/footer');
    	}else{
    		$data['rawat_inap'] = $this->db->query("SELECT * FROM rawat_inap_bpjs ri, pasien pn where ri.nomor_pasien=pn.nomor_pasien AND date(tanggal_pendaftaran) >= '$dari' AND date(tanggal_pendaftaran) <= '$sampai'")->result();
        	$this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
	        $this->load->view('klinik/laporan_bpjs/laporan_inap/tampilkan_laporan_rawatinap', $data);
	        $this->load->view('templates_klinik/footer');
    	}
    }
    public function print_laporan_rawatinap()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');

        $data['rawat_inap'] = $this->db->query("SELECT * FROM rawat_inap_bpjs ri, pasien pn where ri.nomor_pasien=pn.nomor_pasien AND date(tanggal_pendaftaran) >= '$dari' AND date(tanggal_pendaftaran) <= '$sampai'")->result();
        $data['total_pembayaran'] = $this->Models_klinik->hitung_jumlah_invoice();

        $this->load->view('klinik/laporan_bpjs/laporan_inap/print_laporan_rawatinap', $data);
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
?>