<?php  
class Penjualan extends CI_Controller{
	public function index()
	{
        $data['obat'] = $this->Models_klinik->get_data('obat')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/umum/penjualan', $data);
		$this->load->view('templates_klinik/footer');
	}
}
?>