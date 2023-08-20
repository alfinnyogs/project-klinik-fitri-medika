<?php 
class Auth extends CI_Controller{
	public function login()
	{
		$this->_rules();
		if($this->form_validation->run() == false){
			$this->load->view('login');
		}else{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$cek = $this->Models_klinik->cek_login($username, $password);

			if($cek == false){
				$this->session->set_flashdata('pesan',
										  '<div class="alert alert-danger alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Username Dan Password Salah!
								                </div>
							                </div>');
				redirect('auth/login');
			}else{
				$this->session->set_userdata('username', $cek->username);
				$this->session->set_userdata('nama', $cek->nama);
				redirect('klinik/dashboard');
			}
		}
	}
	public function _rules(){
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}

?>