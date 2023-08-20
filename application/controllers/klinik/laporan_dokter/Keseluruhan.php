<?php  
class Keseluruhan extends CI_Controller{
    public function index()
    {
    	$dari = $this->input->post('dari');
    	$sampai = $this->input->post('sampai');
    	$this->_rules();

    	if($this->form_validation->run() == FALSE){
        	$this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
            $this->load->view('klinik/laporan_dokter/keseluruhan/keseluruhan');
            $this->load->view('templates_klinik/footer');
    	}else{
    		$data['dokter'] = $this->db->query("SELECT * FROM kwitansi_dokter kd, dokter dt where kd.kode_dokter=dt.kode_dokter AND date(tanggal_kwitansi) >= '$dari' AND date(tanggal_kwitansi) <= '$sampai'")->result();
        	$this->load->view('templates_klinik/header');
            $this->load->view('templates_klinik/sidebar');
	        $this->load->view('klinik/laporan_dokter/keseluruhan/tampilkan_laporan_kwitansi', $data);
	        $this->load->view('templates_klinik/footer');
    	}
    }
    public function print_laporan_kwitansi()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');

        $data['dokter'] = $this->db->query("SELECT * FROM kwitansi_dokter WHERE date(tanggal_kwitansi) >= '$dari' AND date(tanggal_kwitansi) <= '$sampai'")->result();
        $data['total_inventori'] = $this->Models_klinik->total_kwitansi_dokter();
        $this->load->view('klinik/laporan_dokter/keseluruhan/print_laporan_kwitansi', $data);
    }
    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
?>