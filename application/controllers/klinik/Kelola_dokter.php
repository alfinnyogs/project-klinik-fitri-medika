<?php  
class Kelola_dokter extends CI_Controller{
	public function index()
	{
		$data['dokter'] = $this->Models_klinik->get_data('dokter')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_dokter/kelola_dokter', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_dokter()
	{
		$data['kode_dokter'] = $this->Models_klinik->kode_dokter();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_dokter/tambah_dokter', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_dokter_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_data_dokter();
		}else{
			$kode_dokter	=	$this->input->post('kode_dokter');
			$nama_dokter	=	$this->input->post('nama_dokter');			
			$jenis_kelamin	=	$this->input->post('jenis_kelamin');

			$data 			=	array(
								'kode_dokter'		=> $kode_dokter,
								'nama_dokter'		=> $nama_dokter,
								'jenis_kelamin'		=> $jenis_kelamin );

			$this->Models_klinik->insert_data('dokter', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Dokter Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/kelola_dokter');
		}
	}
	public function edit_data_dokter($id)
	{
		$where			= array('id_dokter' => $id);
		$data['dokter'] = $this->db->query("SELECT * FROM dokter WHERE id_dokter = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_dokter/edit_dokter', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_data_dokter_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->edit_data_dokter();
		}else{
			$id 			=	$this->input->post('id_dokter');
			$nama_dokter	=	$this->input->post('nama_dokter');			
			$jenis_kelamin	=	$this->input->post('jenis_kelamin');

			$data 			=	array(
								'nama_dokter'		=> $nama_dokter,
								'jenis_kelamin'		=> $jenis_kelamin );

			$where = array('id_dokter' => $id);
			$this->Models_klinik->update_data('dokter', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Dokter Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_dokter');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('kode_dokter','Kode Dokter','required');
		$this->form_validation->set_rules('nama_dokter','Nama Dokter','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
	}
	public function detail_data_dokter($id)
	{
		$data['dokter'] = $this->Models_klinik->ambil_id_dokter($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_dokter/detail_dokter', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function hapus_data_dokter($id)
	{
		$where = array('id_dokter' => $id);
		$this->Models_klinik->delete_data('dokter', $where);
		$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Dokter Berhasil Dihapus.
								                </div>
							                </div>');
		redirect('klinik/kelola_dokter');
	}
}
?>