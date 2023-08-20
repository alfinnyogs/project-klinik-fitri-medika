<?php  
class Kelola_pegawai extends CI_Controller{
	public function index()
	{
		$data['pegawai'] = $this->Models_klinik->get_data('pegawai')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_pegawai/kelola_pegawai', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_pegawai()
	{
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_pegawai/tambah_pegawai');
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_pegawai_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_data_pegawai();
		}else{
			$nama_pegawai	=	$this->input->post('nama_pegawai');			
			$tempat_lahir	=	$this->input->post('tempat_lahir');
			$tanggal_lahir	=	$this->input->post('tanggal_lahir');
			$jenis_kelamin	=	$this->input->post('jenis_kelamin');
			$alamat			=	$this->input->post('alamat');
			$desa			=	$this->input->post('desa');
			$kecamatan		=	$this->input->post('kecamatan');
			$kabupaten		=	$this->input->post('kabupaten');
			$jabatan		=	$this->input->post('jabatan');
			$gambar			=	$_FILES['gambar']['name'];
								if($gambar=''){}else{
									$config['upload_path'] = './assets/upload/pegawai';
									$config['allowed_types'] = 'jpg|jpeg|png|tiff';

									$this->load->library('upload',$config);
									if(!$this->upload->do_upload('gambar')){
										echo "Gambar Pegawai Gagal Diupload";
									}else{
										$gambar=$this->upload->data('file_name');
									}
								}

			$data 			=	array(
								'nama_pegawai'		=> $nama_pegawai,
								'tempat_lahir'		=> $tempat_lahir,
								'tanggal_lahir'		=> $tanggal_lahir,
								'jenis_kelamin'		=> $jenis_kelamin,
								'alamat'			=> $alamat,
								'desa'				=> $desa,
								'kecamatan'			=> $kecamatan,
								'kabupaten'			=> $kabupaten,
								'jabatan'			=> $jabatan,
								'gambar'			=> $gambar );

			$this->Models_klinik->insert_data('pegawai', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Pegawai Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/kelola_pegawai');
		}
	}
	public function edit_data_pegawai($id)
	{
		$where 			 = array('id_pegawai' => $id);
		$data['pegawai'] = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_pegawai/edit_pegawai', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_data_pegawai_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->edit_data_pegawai();
		}else{
			$id 			=	$this->input->post('id_pegawai');
			$nama_pegawai	=	$this->input->post('nama_pegawai');			
			$tempat_lahir	=	$this->input->post('tempat_lahir');
			$tanggal_lahir	=	$this->input->post('tanggal_lahir');
			$jenis_kelamin	=	$this->input->post('jenis_kelamin');
			$alamat			=	$this->input->post('alamat');
			$desa			=	$this->input->post('desa');
			$kecamatan		=	$this->input->post('kecamatan');
			$kabupaten		=	$this->input->post('kabupaten');
			$jabatan		=	$this->input->post('jabatan');
			$gambar			=	$_FILES['gambar']['name'];
								if($gambar=''){}else{
									$config['upload_path'] = './assets/upload/dokter';
									$config['allowed_types'] = 'jpg|jpeg|png|tiff';

									$this->load->library('upload',$config);
									if(!$this->upload->do_upload('gambar')){
										echo "Gambar Pegawai Gagal Diupload";
									}else{
										$gambar=$this->upload->data('file_name');
									}
								}

			$data 			=	array(
								'nama_pegawai'		=> $nama_pegawai,
								'tempat_lahir'		=> $tempat_lahir,
								'tanggal_lahir'		=> $tanggal_lahir,
								'jenis_kelamin'		=> $jenis_kelamin,
								'alamat'			=> $alamat,
								'desa'				=> $desa,
								'kecamatan'			=> $kecamatan,
								'kabupaten'			=> $kabupaten,
								'jabatan'			=> $jabatan,
								'gambar'			=> $gambar );

			$where = array('id_pegawai' => $id);
			$this->Models_klinik->update_data('pegawai', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Pegawai Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_pegawai');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama_pegawai','Nama Pegawai','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('desa','Desa','required');
		$this->form_validation->set_rules('kecamatan','Kecamatan','required');
		$this->form_validation->set_rules('kabupaten','Kabupaten','required');
		$this->form_validation->set_rules('jabatan','Jabatan','required');
	}
	public function detail_data_pegawai($id)
	{
		$data['pegawai'] = $this->Models_klinik->ambil_id_pegawai($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_pegawai/detail_pegawai', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function hapus_data_pegawai($id)
	{
		$where = array('id_pegawai' => $id);
		$this->Models_klinik->delete_data('pegawai', $where);
		$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Pegawai Berhasil Dihapus.
								                </div>
							                </div>');
		redirect('klinik/kelola_pegawai');
	}
}
?>