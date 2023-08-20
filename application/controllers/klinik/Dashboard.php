<?php  
class Dashboard extends CI_Controller{
	public function index()
	{
		$total_pasien = $this->db->query("SELECT * FROM pasien");
    	$total_rawat_inap_umum = $this->db->query("SELECT * FROM rawat_inap_umum");
    	$total_rawat_inap_bpjs = $this->db->query("SELECT * FROM rawat_inap_bpjs");
    	$total_rawat_jalan_umum = $this->db->query("SELECT * FROM rawat_jalan_umum");
    	$total_rawat_jalan_bpjs = $this->db->query("SELECT * FROM rawat_jalan_bpjs");
    	$total_rapid_test = $this->db->query("SELECT * FROM rapid_test");
    	$total_antigen = $this->db->query("SELECT * FROM antigen");
    	$total_dokter = $this->db->query("SELECT * FROM dokter");
        $total_tindakan_umum = $this->db->query("SELECT * FROM tindakan_umum");
        $total_tindakan_bpjs = $this->db->query("SELECT * FROM tindakan_bpjs");
        $total_obat = $this->db->query("SELECT * FROM obat");

    	$data['total_pasien'] = $total_pasien->num_rows();
    	$data['total_rawat_inap_umum'] = $total_rawat_inap_umum->num_rows();
    	$data['total_rawat_inap_bpjs'] = $total_rawat_inap_bpjs->num_rows();
    	$data['total_rawat_jalan_umum'] = $total_rawat_jalan_umum->num_rows();
    	$data['total_rawat_jalan_bpjs'] = $total_rawat_jalan_bpjs->num_rows();
    	$data['total_rapid_test'] = $total_rapid_test->num_rows();
    	$data['total_antigen'] = $total_antigen->num_rows();
    	$data['total_dokter'] = $total_dokter->num_rows();
        $data['total_tindakan_umum'] = $total_tindakan_umum->num_rows();
        $data['total_tindakan_bpjs'] = $total_tindakan_bpjs->num_rows();
        $data['total_obat'] = $total_obat->num_rows();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/dashboard', $data);
		$this->load->view('templates_klinik/footer');
	}
}
?>