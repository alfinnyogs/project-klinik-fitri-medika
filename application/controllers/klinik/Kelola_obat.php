<?php  
class Kelola_obat extends CI_Controller{
	public function index()
	{
		$data['obat'] = $this->Models_klinik->get_data('obat')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_obat/kelola_obat', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_obat()
	{
		$data['kode_obat'] = $this->Models_klinik->kode_obat();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_obat/tambah_obat', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_obat_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_data_obat();
		}else{
			$kode_obat		=	$this->input->post('kode_obat');
			$nama_obat		=	$this->input->post('nama_obat');
			$dosis_obat		=	$this->input->post('dosis_obat');
			$jenis_obat		=	$this->input->post('jenis_obat');
			$harga_obat		=	$this->input->post('harga_obat');

			$data 			=	array(
								'kode_obat'		=> $kode_obat,
								'nama_obat' 	=> $nama_obat,
								'dosis_obat'	=> $dosis_obat,
								'jenis_obat'	=> $jenis_obat,
								'harga_obat'	=> $harga_obat );

			$this->Models_klinik->insert_data('obat', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Obat Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/kelola_obat');
		}
	}
	public function edit_data_obat($id)
	{
		$where			= array('id_obat' => $id);
		$data['obat'] = $this->db->query("SELECT * FROM obat WHERE id_obat = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_obat/edit_obat', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_data_obat_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->edit_data_obat();
		}else{
			$id 		= 	$this->input->post('id_obat');
			$kode_obat		=	$this->input->post('kode_obat');
			$nama_obat		=	$this->input->post('nama_obat');
			$dosis_obat		=	$this->input->post('dosis_obat');
			$jenis_obat		=	$this->input->post('jenis_obat');
			$harga_obat		=	$this->input->post('harga_obat');

			$data 			=	array(
								'kode_obat'		=> $kode_obat,
								'nama_obat' 	=> $nama_obat,
								'dosis_obat'	=> $dosis_obat,
								'jenis_obat'	=> $jenis_obat,
								'harga_obat'	=> $harga_obat );

			$where = array('id_obat' => $id);
			$this->Models_klinik->update_data('obat', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Obat Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_obat');
		}
	}
	public function _rules() 
	{
		$this->form_validation->set_rules('kode_obat','Kode Obat','required');
		$this->form_validation->set_rules('nama_obat','Nama Obat','required');
		$this->form_validation->set_rules('dosis_obat','Dosis Obat','required');
		$this->form_validation->set_rules('jenis_obat','Jenis Obat','required');
		$this->form_validation->set_rules('harga_obat','Harga Obat','required');
	}
	public function hapus_data_obat($id)
	{
		$where = array('id_obat' => $id);
		$this->Models_klinik->delete_data('obat', $where);
		$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Obat Berhasil Dihapus.
								                </div>
							                </div>');
		redirect('klinik/kelola_obat');
	}
}
?>