<?php  
class Rawat_inap extends CI_Controller{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['rawat_inap'] = $this->db->query("SELECT * FROM pasien ps, rawat_inap_umum riu WHERE ps.nomor_pasien=riu.nomor_pasien AND ps.status='Umum' ORDER BY id_rawat_inap DESC")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/umum/inap/rawat_inap', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function data_pasien()
	{
		$data['pasien'] = $this->Models_klinik->data_pasien_umum()->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/umum/inap/data_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function detail_rawat_inap($id)
	{
		$data['rawat_inap'] = $this->db->query("SELECT * FROM pasien ps, datapasien_rawat_inap dri, rawat_inap_umum riu WHERE ps.nomor_pasien=riu.nomor_pasien AND dri.id_rawat_inap=riu.id_rawat_inap AND dri.id_rawat_inap='$id' AND dri.kategori_pasien ='Umum' ORDER BY dri.id_rawat_inap")->result();
		$data['tindakan'] = $this->db->query("SELECT * FROM pasien ps, tindakan_rawatinap tru, rawat_inap_umum riu WHERE ps.nomor_pasien=riu.nomor_pasien AND tru.id_rawat_inap=riu.id_rawat_inap AND tru.id_rawat_inap='$id' AND tru.kategori_pasien ='Umum' ORDER BY tru.id_rawat_inap")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/umum/inap/detail_pasien_rawat_inap', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function detail_data_pasien($id)
	{
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/umum/inap/detail_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function pendataan_rawat_inap($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$data['obat'] = $this->Models_klinik->get_data('obat')->result();
		$data['dokter'] = $this->Models_klinik->get_data('dokter')->result();
		$data['biaya_rawatinap_umum'] = $this->Models_klinik->get_data('biaya_rawatinap_umum')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/umum/inap/pendataan_rawat_inap', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function pendataan_rawat_inap_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->pendataan_rawat_inap();
		}else{
			$admin_pengelola		=	$this->input->post('admin_pengelola');
			$nomor_pasien			=	$this->input->post('nomor_pasien');
			$nama_pasien			=	$this->input->post('nama_pasien');
			$tanggal_pendaftaran	=	$this->input->post('tanggal_pendaftaran');
			$waktu_pendaftaran		=	$this->input->post('waktu_pendaftaran');
			$biaya_pendaftaran		=	$this->input->post('biaya_pendaftaran');
			$status					=	$this->input->post('status');

			$data 			=	array(
								'admin_pengelola'		=> $admin_pengelola,
								'nomor_pasien'			=> $nomor_pasien,
								'nama_pasien'			=> $nama_pasien,
								'tanggal_pendaftaran'	=> $tanggal_pendaftaran,
								'waktu_pendaftaran'		=> $waktu_pendaftaran,
								'biaya_pendaftaran'		=> $biaya_pendaftaran,
								'status'				=> $status );

			$this->Models_klinik->insert_data('rawat_inap_umum', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Pendaftaran Rawat Inap Berhasil!.
								                </div>
							                </div>');
			redirect('klinik/umum/rawat_inap');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('nomor_pasien','Nomor Pasien','required');
		$this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
		$this->form_validation->set_rules('tanggal_pendaftaran','Tanggal Pendaftaran','required');
		$this->form_validation->set_rules('waktu_pendaftaran','Waktu Pendaftaran','required');
		$this->form_validation->set_rules('biaya_pendaftaran','Total Pembayaran','required');
		$this->form_validation->set_rules('status','Status Pasien','required');
	}
	public function data_pasien_rawat_inap($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['pasien'] = $this->Models_klinik->ambil_id_datapasien($id);
		$data['obat'] = $this->Models_klinik->get_data('obat')->result();
		$data['dokter'] = $this->Models_klinik->get_data('dokter')->result();
		$data['biaya_visite_umum'] = $this->Models_klinik->get_data('biaya_visite_umum')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/umum/inap/data_pasien_rawat_inap', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function data_pasien_rawat_inap_aksi()
	{
		$this->_rulesdata();
		if($this->form_validation->run() == FALSE){
			$this->data_pasien_rawat_inap();
		}else{
			$id_rawat_inap			=	$this->input->post('id_rawat_inap');
			$nomor_pasien			=	$this->input->post('nomor_pasien');
			$nama_pasien			=	$this->input->post('nama_pasien');
			$admin_pengelola		=	$this->input->post('admin_pengelola');
			$kategori_pasien		=	$this->input->post('kategori_pasien');
			$tanggal_pendataan		=	$this->input->post('tanggal_pendataan');
			$kondisi_pasien			=	$this->input->post('kondisi_pasien');
			$dokter_pemeriksa		=	$this->input->post('dokter_pemeriksa');
			$obat_1					=	$this->input->post('obat_1');
			$obat_2					=	$this->input->post('obat_2');
			$obat_3					=	$this->input->post('obat_3');
			$obat_4					=	$this->input->post('obat_4');
			$obat_5					=	$this->input->post('obat_5');
			$obat_6					=	$this->input->post('obat_6');
			$biaya_visite			=	$this->input->post('biaya_visite');
			$jumlah_biaya			=	$this->input->post('jumlah_biaya');
			$total_biaya			=	$this->input->post('total_biaya');

			$data 			=	array(
								'id_rawat_inap'			=> $id_rawat_inap,
								'nomor_pasien'			=> $nomor_pasien,
								'nama_pasien'			=> $nama_pasien,
								'admin_pengelola'		=> $admin_pengelola,
								'kategori_pasien'		=> $kategori_pasien,
								'tanggal_pendataan'		=> $tanggal_pendataan,
								'kondisi_pasien'		=> $kondisi_pasien,
								'dokter_pemeriksa'		=> $dokter_pemeriksa,
								'obat_1'				=> $obat_1,
								'obat_2'				=> $obat_2,
								'obat_3'				=> $obat_3,
								'obat_4'				=> $obat_4,
								'obat_5'				=> $obat_5,
								'obat_6'				=> $obat_6,
								'biaya_visite'			=> $biaya_visite,
								'jumlah_biaya'			=> $jumlah_biaya,
								'total_biaya'			=> $total_biaya );

			$this->Models_klinik->insert_data('datapasien_rawat_inap', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Rawat Inap Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/umum/rawat_inap');
		}
	}
	public function _rulesdata()
	{
		$this->form_validation->set_rules('nomor_pasien','Nomor Pasien','required');
		$this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
		$this->form_validation->set_rules('kategori_pasien','Nama Pasien','required');
		$this->form_validation->set_rules('tanggal_pendataan','Tanggal Pendaftaran','required');
		$this->form_validation->set_rules('kondisi_pasien','Dokter Pemeriksa','required');
		$this->form_validation->set_rules('dokter_pemeriksa','Total Pembayaran','required');
		$this->form_validation->set_rules('biaya_visite','Biaya Visite','required');
		$this->form_validation->set_rules('jumlah_biaya','Jumlah Biaya','required');
		$this->form_validation->set_rules('total_biaya','Biaya Kamar','required');
	}
	public function rawat_inap_selesai($id)
	{
		$where = array('id_rawat_inap' => $id);
    	$data['selesai'] = $this->db->query("SELECT * FROM pasien ps, rawat_inap_umum riu WHERE ps.nomor_pasien=riu.nomor_pasien AND riu.id_rawat_inap='$id' ORDER BY riu.id_rawat_inap")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/umum/inap/rawat_inap_selesai', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function rawat_inap_selesai_aksi()
    {
    	$id = $this->input->post('id_rawat_inap');
    	$status = $this->input->post('status');
    	$data = array('status' => $status);
    	$where = array('id_rawat_inap' => $id);
    	$this->Models_klinik->update_data('rawat_inap_umum', $data, $where);
    	redirect('klinik/umum/rawat_inap');
    }
    public function print_rawat_inap($id)
	{
		$data['pasien'] = $this->db->query("SELECT * FROM pasien ps, datapasien_rawat_inap dri, rawat_inap_umum riu WHERE ps.nomor_pasien=riu.nomor_pasien AND dri.id_rawat_inap=riu.id_rawat_inap AND dri.id_rawat_inap='$id' ORDER BY dri.id_rawat_inap")->result();
		$data['tindakan'] = $this->db->query("SELECT * FROM pasien ps, tindakan_rawatinap tru, rawat_inap_umum riu WHERE ps.nomor_pasien=riu.nomor_pasien AND tru.id_rawat_inap=riu.id_rawat_inap AND tru.id_rawat_inap='$id' ORDER BY tru.id_rawat_inap")->result();
		$data['rawat_inap'] = $this->db->query("SELECT * FROM pasien ps, rawat_inap_umum riu WHERE ps.nomor_pasien=riu.nomor_pasien AND riu.id_rawat_inap='$id' ORDER BY id_rawat_inap")->result();
		$data['total_inventori'] = $this->Models_klinik->total_rawatinap($id);
		$data['total_tindakan'] = $this->Models_klinik->total_tindakanrawatinap($id);
		$data['total_pendaftaran'] = $this->Models_klinik->total_pendaftaranrawatinap_umum($id);
		$this->load->view('klinik/umum/inap/print_rawat_inap', $data);
	}
	public function tindakan_rawat_inap($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['pasien'] = $this->Models_klinik->ambil_id_datapasien($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/umum/inap/tindakan_rawat_inap', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tindakan_rawat_inap_aksi()
	{
		$this->_rulestindakan();
		if($this->form_validation->run() == FALSE){
			$this->tindakan_rawat_inap();
		}else{
			$id_rawat_inap			=	$this->input->post('id_rawat_inap');
			$nomor_pasien			=	$this->input->post('nomor_pasien');
			$nama_pasien			=	$this->input->post('nama_pasien');
			$kategori_pasien		=	$this->input->post('kategori_pasien');
			$admin_pengelola		=	$this->input->post('admin_pengelola');
			$tanggal_tindakan		=	$this->input->post('tanggal_tindakan');	
			$tindakan_1				=	$this->input->post('tindakan_1');
			$tindakan_2				=	$this->input->post('tindakan_2');
			$tindakan_3				=	$this->input->post('tindakan_3');
			$tindakan_4				=	$this->input->post('tindakan_4');
			$tindakan_5				=	$this->input->post('tindakan_5');
			$biaya_tindakan			=	$this->input->post('biaya_tindakan');

			$data 			=	array(
								'id_rawat_inap'			=> $id_rawat_inap,
								'nomor_pasien'			=> $nomor_pasien,
								'nama_pasien'			=> $nama_pasien,
								'kategori_pasien'		=> $kategori_pasien,
								'admin_pengelola'		=> $admin_pengelola,
								'tanggal_tindakan'		=> $tanggal_tindakan,
								'tindakan_1'			=> $tindakan_1,
								'tindakan_2'			=> $tindakan_2,
								'tindakan_3'			=> $tindakan_3,
								'tindakan_4'			=> $tindakan_4,
								'tindakan_5'			=> $tindakan_5,
								'biaya_tindakan'		=> $biaya_tindakan);

			$this->Models_klinik->insert_data('tindakan_rawatinap', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Tindakan Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/umum/rawat_inap');
		}
	}
	public function _rulestindakan()
	{
		$this->form_validation->set_rules('nomor_pasien','Nomor Pasien','required');
		$this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
		$this->form_validation->set_rules('tanggal_tindakan','Tanggal Tindakan','required');
		$this->form_validation->set_rules('biaya_tindakan','Biaya Tindakan','required');
	}
}
?>