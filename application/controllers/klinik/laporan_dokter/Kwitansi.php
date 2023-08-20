<?php  
class Kwitansi extends CI_Controller{
	public function index()
	{
		$data['dokter'] = $this->Models_klinik->get_data('kwitansi_dokter')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/laporan_dokter/kwitansi/kwitansi', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function data_dokter()
	{
		$data['dokter'] = $this->Models_klinik->get_data('dokter')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/laporan_dokter/kwitansi/data_dokter', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function data_kwitansi($id)
	{
		$data['dokter'] = $this->Models_klinik->ambil_id_dokter($id);
		$data['biaya_dokter'] = $this->Models_klinik->get_data('biaya_dokter')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/laporan_dokter/kwitansi/data_kwitansi', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function data_kwitansi_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->data_kwitansi();
		}else{
			$admin_pengelola		=	$this->input->post('admin_pengelola');
			$kode_dokter			=	$this->input->post('kode_dokter');
			$nama_dokter			=	$this->input->post('nama_dokter');
			$tanggal_kwitansi		=	$this->input->post('tanggal_kwitansi');
			$uang_duduk				=	$this->input->post('uang_duduk');
			$uang_makan				=	$this->input->post('uang_makan');
			$rawat_jalan_umum		=	$this->input->post('rawat_jalan_umum');
			$rawat_jalan_bpjs		=	$this->input->post('rawat_jalan_bpjs');
			$rawat_inap_umum		=	$this->input->post('rawat_inap_umum');
			$rawat_inap_bpjs		=	$this->input->post('rawat_inap_bpjs');
			$antigen				=	$this->input->post('antigen');
			$rapidtest				=	$this->input->post('rapidtest');
			$tindakan_umum			=	$this->input->post('tindakan_umum');
			$tindakan_bpjs			=	$this->input->post('tindakan_bpjs');
			$visite_umum			=	$this->input->post('visite_umum');
			$visite_bpjs			=	$this->input->post('visite_bpjs');
			$observasi				=	$this->input->post('observasi');
			$home_visite			=	$this->input->post('home_visite');
			$total_bayar			=	$this->input->post('total_bayar');

			$data 			=	array(
								'admin_pengelola'		=> $admin_pengelola,
								'kode_dokter'			=> $kode_dokter,
								'nama_dokter'			=> $nama_dokter,
								'tanggal_kwitansi'		=> $tanggal_kwitansi,
								'uang_duduk'			=> $uang_duduk,
								'uang_makan'			=> $uang_makan,
								'rawat_jalan_umum'		=> $rawat_jalan_umum,
								'rawat_jalan_bpjs'		=> $rawat_jalan_bpjs,
								'rawat_inap_umum'		=> $rawat_inap_umum,
								'rawat_inap_bpjs'		=> $rawat_inap_bpjs,
								'antigen'				=> $antigen,
								'rapidtest'				=> $rapidtest,
								'tindakan_umum'			=> $tindakan_umum,
								'tindakan_bpjs'			=> $tindakan_bpjs,
								'visite_umum'			=> $visite_umum,
								'visite_bpjs'			=> $visite_bpjs,
								'observasi'				=> $observasi,
								'home_visite'			=> $home_visite,
								'total_bayar'			=> $total_bayar );

			$this->Models_klinik->insert_data('kwitansi_dokter', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Kwitansi Dokter Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/laporan_dokter/kwitansi');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('admin_pengelola','Admin Pengelola','required');
		$this->form_validation->set_rules('kode_dokter','Kode Dokter','required');
		$this->form_validation->set_rules('nama_dokter','Nama Dokter','required');
		$this->form_validation->set_rules('tanggal_kwitansi','Tanggal Kwitansi','required');
		$this->form_validation->set_rules('uang_makan','Uang Makan','required');
		$this->form_validation->set_rules('uang_duduk','Uang Duduk','required');
		$this->form_validation->set_rules('rawat_jalan_umum','Rawat Jalan Umum','required');
		$this->form_validation->set_rules('rawat_jalan_bpjs','Rawat Jalan BPJS','required');
		$this->form_validation->set_rules('rawat_inap_bpjs','Rawat Inap BPJS','required');
		$this->form_validation->set_rules('rawat_inap_umum','Rawat Inap Umum','required');
		$this->form_validation->set_rules('antigen','Antigen','required');
		$this->form_validation->set_rules('rapidtest','Rapid Test','required');
		$this->form_validation->set_rules('tindakan_umum','Tindakan Umum','required');
		$this->form_validation->set_rules('tindakan_bpjs','Tindakan BPJS','required');
		$this->form_validation->set_rules('visite_umum','Visite Umum','required');
		$this->form_validation->set_rules('visite_bpjs','Visite BPJS','required');
		$this->form_validation->set_rules('observasi','Observasi','required');
		$this->form_validation->set_rules('home_visite','Home Visite','required');
		$this->form_validation->set_rules('total_bayar','Total Pembayaran','required');
	}
	public function detail_kwitansi($id)
	{
		$data['dokter'] = $this->db->query("SELECT * FROM dokter dr, kwitansi_dokter kd WHERE dr.kode_dokter=kd.kode_dokter AND kd.id_kwitansi='$id' ORDER BY id_kwitansi")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/laporan_dokter/kwitansi/detail_kwitansi', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function print_kwitansi($id)
	{
		$data['dokter'] = $this->db->query("SELECT * FROM dokter dr, kwitansi_dokter kd WHERE dr.kode_dokter=kd.kode_dokter AND kd.id_kwitansi='$id' ORDER BY id_kwitansi")->result();
		$this->load->view('klinik/laporan_dokter/kwitansi/print_kwitansi', $data);
	}
}
?>