<?php  
class Kelola_admin extends CI_Controller{
	public function index()
	{
		$data['admin'] = $this->Models_klinik->get_data('admin')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_admin/kelola_admin', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_admin()
	{
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_admin/tambah_admin');
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_admin_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_data_admin();
		}else{
			$nama		=	$this->input->post('nama');			
			$username	=	$this->input->post('username');
			$password	=	md5($this->input->post('password'));
			$data 		=	array(
							'nama'		=> $nama,
							'username'	=> $username,
							'password'	=> $password );

			$this->Models_klinik->insert_data('admin', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Admin Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/kelola_admin');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama','Nama Admin','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
	}
	public function hapus_data_admin($id)
	{
		$where = array('id_admin' => $id);
		$this->Models_klinik->delete_data('admin', $where);
		$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Admin Berhasil Dihapus.
								                </div>
							                </div>');
		redirect('klinik/kelola_admin');
	}
}
?>