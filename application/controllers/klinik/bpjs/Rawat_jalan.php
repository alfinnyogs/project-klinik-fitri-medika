<?php  
class Rawat_jalan extends CI_Controller{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['rawat_jalan'] = $this->db->query("SELECT * FROM pasien ps, rawat_jalan_bpjs rju WHERE ps.nomor_pasien=rju.nomor_pasien AND ps.status ='BPJS' ORDER BY id_rawat_jalan DESC")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/bpjs/jalan/rawat_jalan', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function data_pasien()
	{
		$data['pasien'] = $this->Models_klinik->data_pasien_bpjs()->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/bpjs/jalan/data_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function detail_rawat_jalan($id)
	{
		$data['rawat_jalan'] = $this->db->query("SELECT * FROM pasien ps, rawat_jalan_bpjs rju WHERE ps.nomor_pasien=rju.nomor_pasien AND rju.id_rawat_jalan='$id' ORDER BY id_rawat_jalan")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/bpjs/jalan/detail_pasien_rawat_jalan', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function detail_data_pasien($id)
	{
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/bpjs/jalan/detail_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function pendataan_rawat_jalan($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$data['biaya'] = $this->Models_klinik->get_data('biaya_rawatjalan_bpjs')->result();
		$data['obat'] = $this->Models_klinik->get_data('obat')->result();
		$data['dokter'] = $this->Models_klinik->get_data('dokter')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/bpjs/jalan/pendataan_rawat_jalan', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function pendataan_rawat_jalan_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->pendataan_rawat_jalan();
		}else{
			$admin_pengelola		=	$this->input->post('admin_pengelola');
			$nomor_pasien			=	$this->input->post('nomor_pasien');
			$nama_pasien			=	$this->input->post('nama_pasien');
			$jenis_kelamin			=	$this->input->post('jenis_kelamin');
			$tanggal_pendaftaran	=	$this->input->post('tanggal_pendaftaran');
			$waktu_pendaftaran		=	$this->input->post('waktu_pendaftaran');
			$dokter_pemeriksa		=	$this->input->post('dokter_pemeriksa');
			$gejala					=	$this->input->post('gejala');
			$obat_1					=	$this->input->post('obat_1');
			$obat_2					=	$this->input->post('obat_2');
			$obat_3					=	$this->input->post('obat_3');
			$obat_4					=	$this->input->post('obat_4');
			$obat_5					=	$this->input->post('obat_5');
			$obat_6					=	$this->input->post('obat_6');
			$biaya_obat				=	$this->input->post('biaya_obat');
			$biaya_pendaftaran		=	$this->input->post('biaya_pendaftaran');
			$total_pembayaran		=	$this->input->post('total_pembayaran');

			$data 			=	array(
								'admin_pengelola'		=> $admin_pengelola,
								'nomor_pasien'			=> $nomor_pasien,
								'nama_pasien'			=> $nama_pasien,
								'jenis_kelamin'			=> $jenis_kelamin,
								'tanggal_pendaftaran'	=> $tanggal_pendaftaran,
								'waktu_pendaftaran'		=> $waktu_pendaftaran,
								'dokter_pemeriksa'		=> $dokter_pemeriksa,
								'gejala'				=> $gejala,
								'obat_1'				=> $obat_1,
								'obat_2'				=> $obat_2,
								'obat_3'				=> $obat_3,
								'obat_4'				=> $obat_4,
								'obat_5'				=> $obat_5,
								'obat_6'				=> $obat_6,
								'biaya_obat'			=> $biaya_obat,
								'biaya_pendaftaran'		=> $biaya_pendaftaran,
								'total_pembayaran'		=> $total_pembayaran );

			$this->Models_klinik->insert_data('rawat_jalan_bpjs', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Rawat Jalan Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/bpjs/rawat_jalan');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('nomor_pasien','Nomor Pasien','required');
		$this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
		$this->form_validation->set_rules('tanggal_pendaftaran','Tanggal Pendaftaran','required');
		$this->form_validation->set_rules('waktu_pendaftaran','Waktu Pendaftaran','required');
		$this->form_validation->set_rules('dokter_pemeriksa','Dokter Pemeriksa','required');
		$this->form_validation->set_rules('gejala','Gejala','required');
		$this->form_validation->set_rules('biaya_obat','Biaya Obat','required');
		$this->form_validation->set_rules('biaya_pendaftaran','Biaya Pendaftaran','required');
		$this->form_validation->set_rules('total_pembayaran','Total Pembayaran','required');
	}
	public function print_invoice($id)
	{
		$data['pasien'] = $this->db->query("SELECT * FROM pasien ps, rawat_jalan_bpjs rju WHERE ps.nomor_pasien=rju.nomor_pasien AND rju.id_rawat_jalan='$id' ORDER BY id_rawat_jalan")->result();
		$this->load->view('klinik/bpjs/jalan/print_invoice', $data);
	}
}
?>