<?php  
class Kelola_pasien extends CI_Controller{
	public function index()
	{
		$data['pasien'] = $this->Models_klinik->get_data('pasien')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_pasien/kelola_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_pasien()
	{
		$data['nomor_pasien'] = $this->Models_klinik->nomor_pasien();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_pasien/tambah_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_pasien_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_data_pasien();
		}else{
			$nomor_pasien	=	$this->input->post('nomor_pasien');
			$tanggal_regist	=	$this->input->post('tanggal_regist');
			$nama_pasien	=	$this->input->post('nama_pasien');
			$tempat_lahir	=	$this->input->post('tempat_lahir');
			$tanggal_lahir	=	$this->input->post('tanggal_lahir');
			$jenis_kelamin	=	$this->input->post('jenis_kelamin');
			$alamat			=	$this->input->post('alamat');
			$desa			=	$this->input->post('desa');
			$kecamatan		=	$this->input->post('kecamatan');
			$kabupaten		=	$this->input->post('kabupaten');
			$status			=	$this->input->post('status');
			$no_bpjs		=	$this->input->post('no_bpjs');
			$no_hp			=	$this->input->post('no_hp');
			$nik			=	$this->input->post('nik');

			$data 			=	array(
								'nomor_pasien'		=> $nomor_pasien,
								'tanggal_regist' 	=> $tanggal_regist,
								'nama_pasien'		=> $nama_pasien,
								'tempat_lahir'		=> $tempat_lahir,
								'tanggal_lahir'		=> $tanggal_lahir,
								'jenis_kelamin'		=> $jenis_kelamin,
								'alamat'			=> $alamat,
								'desa'				=> $desa,
								'kecamatan'			=> $kecamatan,
								'kabupaten'			=> $kabupaten,
								'status'			=> $status,
								'no_bpjs'			=> $no_bpjs,
								'no_hp'				=> $no_hp,
								'nik'				=> $nik );

			$this->Models_klinik->insert_data('pasien', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Pasien Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/kelola_pasien');
		}
	}
	public function edit_data_pasien($id)
	{
		$where			= array('id_pasien' => $id);
		$data['pasien'] = $this->db->query("SELECT * FROM pasien WHERE id_pasien = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_pasien/edit_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_data_pasien_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->edit_data_pasien();
		}else{
			$id				=	$this->input->post('id_pasien');
			$nomor_pasien	=	$this->input->post('nomor_pasien');
			$tanggal_regist	=	$this->input->post('tanggal_regist');
			$nama_pasien	=	$this->input->post('nama_pasien');
			$tempat_lahir	=	$this->input->post('tempat_lahir');
			$tanggal_lahir	=	$this->input->post('tanggal_lahir');
			$jenis_kelamin	=	$this->input->post('jenis_kelamin');
			$alamat			=	$this->input->post('alamat');
			$desa			=	$this->input->post('desa');
			$kecamatan		=	$this->input->post('kecamatan');
			$kabupaten		=	$this->input->post('kabupaten');
			$status			=	$this->input->post('status');
			$no_bpjs		=	$this->input->post('no_bpjs');
			$no_hp			=	$this->input->post('no_hp');
			$nik			=	$this->input->post('nik');

			$data 			=	array(
								'nomor_pasien'		=> $nomor_pasien,
								'tanggal_regist' 	=> $tanggal_regist,
								'nama_pasien'		=> $nama_pasien,
								'tempat_lahir'		=> $tempat_lahir,
								'tanggal_lahir'		=> $tanggal_lahir,
								'jenis_kelamin'		=> $jenis_kelamin,
								'alamat'			=> $alamat,
								'desa'				=> $desa,
								'kecamatan'			=> $kecamatan,
								'kabupaten'			=> $kabupaten,
								'status'			=> $status,
								'no_bpjs'			=> $no_bpjs,
								'no_hp'				=> $no_hp,
								'nik'				=> $nik );

			$where = array('id_pasien' => $id);
			$this->Models_klinik->update_data('pasien', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Pasien Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_pasien');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('nomor_pasien','Nomor Pasien','required');
		$this->form_validation->set_rules('tanggal_regist','Tanggal Registrasi','required');
		$this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('desa','Desa','required');
		$this->form_validation->set_rules('kecamatan','Kecamatan','required');
		$this->form_validation->set_rules('kabupaten','Kabupaten','required');
		$this->form_validation->set_rules('status','Jenis Status','required');
		$this->form_validation->set_rules('no_bpjs','No BPJS','required');
		$this->form_validation->set_rules('no_hp','No Telepon','required');
		$this->form_validation->set_rules('nik','NIK','required');
	}
	public function detail_data_pasien($id)
	{
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_pasien/detail_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function hapus_data_pasien($id)
	{
		$where = array('id_pasien' => $id);
		$this->Models_klinik->delete_data('pasien', $where);
		$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Pasien Berhasil Dihapus.
								                </div>
							                </div>');
		redirect('klinik/kelola_pasien');
	}
}
?>