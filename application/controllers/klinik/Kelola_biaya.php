<?php  
class Kelola_biaya extends CI_Controller{
	public function index()
	{
		$data['biaya_rawatjalan_umum'] = $this->Models_klinik->get_data('biaya_rawatjalan_umum')->result();
		$data['biaya_rawatinap_umum'] = $this->Models_klinik->get_data('biaya_rawatinap_umum')->result();
		$data['biaya_rawatjalan_bpjs'] = $this->Models_klinik->get_data('biaya_rawatjalan_bpjs')->result();
		$data['biaya_rawatinap_bpjs'] = $this->Models_klinik->get_data('biaya_rawatinap_bpjs')->result();
		$data['biaya_antigen'] = $this->Models_klinik->get_data('biaya_antigen')->result();
		$data['biaya_rapidtes'] = $this->Models_klinik->get_data('biaya_rapidtes')->result();
		$data['visite_umum'] = $this->Models_klinik->get_data('biaya_visite_umum')->result();
		$data['visite_bpjs'] = $this->Models_klinik->get_data('biaya_visite_bpjs')->result();
		$data['biaya_dokter'] = $this->Models_klinik->get_data('biaya_dokter')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_biaya/kelola_biaya', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_biaya_rawatjalan_umum($id)
	{
		$where			= array('id_biaya' => $id);
		$data['biaya_rawatjalan_umum'] = $this->db->query("SELECT * FROM biaya_rawatjalan_umum WHERE id_biaya = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_biaya/edit_biaya_rawatjalan_umum', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_biaya_rawatjalan_umum_aksi()
	{
		$this->_rules_umum();
		if($this->form_validation->run() == FALSE){
			$this->edit_biaya_rawatjalan_umum();
		}else{
			$id 			= 	$this->input->post('id_biaya');
			$biaya_dokter	=	$this->input->post('biaya_dokter');
			$biaya_klinik	=	$this->input->post('biaya_klinik');
			$total			=	$this->input->post('total');

			$data 			=	array(
								'biaya_dokter'	=> $biaya_dokter,
								'biaya_klinik' 	=> $biaya_klinik,
								'total'			=> $total );

			$where = array('id_biaya' => $id);
			$this->Models_klinik->update_data('biaya_rawatjalan_umum', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Biaya Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_biaya');
		}
	}
	public function edit_biaya_rawatinap_umum($id)
	{
		$where			= array('id_biaya' => $id);
		$data['biaya_rawatinap_umum'] = $this->db->query("SELECT * FROM biaya_rawatinap_umum WHERE id_biaya = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_biaya/edit_biaya_rawatinap_umum', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_biaya_rawatinap_umum_aksi()
	{
		$this->_rules_umum();
		if($this->form_validation->run() == FALSE){
			$this->edit_biaya_rawatinap_umum();
		}else{
			$id 			= 	$this->input->post('id_biaya');
			$biaya_dokter	=	$this->input->post('biaya_dokter');
			$biaya_klinik	=	$this->input->post('biaya_klinik');
			$total			=	$this->input->post('total');

			$data 			=	array(
								'biaya_dokter'	=> $biaya_dokter,
								'biaya_klinik' 	=> $biaya_klinik,
								'total'			=> $total );

			$where = array('id_biaya' => $id);
			$this->Models_klinik->update_data('biaya_rawatinap_umum', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Biaya Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_biaya');
		}
	}
	public function _rules_umum()
	{
		$this->form_validation->set_rules('biaya_klinik','biaya_klinik','required');
		$this->form_validation->set_rules('biaya_dokter','biaya_dokter','required');
	}
	public function edit_biaya_rawatjalan_bpjs($id)
	{
		$where			= array('id_biaya' => $id);
		$data['biaya_rawatjalan_bpjs'] = $this->db->query("SELECT * FROM biaya_rawatjalan_bpjs WHERE id_biaya = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_biaya/edit_biaya_rawatjalan_bpjs', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_biaya_rawatjalan_bpjs_aksi()
	{
		$this->_rules_bpjs();
		if($this->form_validation->run() == FALSE){
			$this->edit_biaya_rawatjalan_bpjs();
		}else{
			$id 			= 	$this->input->post('id_biaya');
			$biaya_dokter	=	$this->input->post('biaya_dokter');
			$biaya_klinik	=	$this->input->post('biaya_klinik');
			$total			=	$this->input->post('total');

			$data 			=	array(
								'biaya_dokter'	=> $biaya_dokter,
								'biaya_klinik' 	=> $biaya_klinik,
								'total'			=> $total );

			$where = array('id_biaya' => $id);
			$this->Models_klinik->update_data('biaya_rawatjalan_bpjs', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Biaya Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_biaya');
		}
	}
	public function edit_biaya_rawatinap_bpjs($id)
	{
		$where			= array('id_biaya' => $id);
		$data['biaya_rawatinap_bpjs'] = $this->db->query("SELECT * FROM biaya_rawatinap_bpjs WHERE id_biaya = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_biaya/edit_biaya_rawatinap_bpjs', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_biaya_rawatinap_bpjs_aksi()
	{
		$this->_rules_bpjs();
		if($this->form_validation->run() == FALSE){
			$this->edit_biaya_rawatinap_bpjs();
		}else{
			$id 			= 	$this->input->post('id_biaya');
			$biaya_dokter	=	$this->input->post('biaya_dokter');
			$biaya_klinik	=	$this->input->post('biaya_klinik');
			$total			=	$this->input->post('total');

			$data 			=	array(
								'biaya_dokter'	=> $biaya_dokter,
								'biaya_klinik' 	=> $biaya_klinik,
								'total'			=> $total );

			$where = array('id_biaya' => $id);
			$this->Models_klinik->update_data('biaya_rawatinap_bpjs', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Biaya Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_biaya');
		}
	}
	public function _rules_bpjs()
	{
		$this->form_validation->set_rules('biaya_klinik','biaya_klinik','required');
		$this->form_validation->set_rules('biaya_dokter','biaya_dokter','required');
	}
	

	public function edit_biaya_antigen($id)
	{
		$where			= array('id_biaya' => $id);
		$data['biaya_antigen'] = $this->db->query("SELECT * FROM biaya_antigen WHERE id_biaya = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_biaya/edit_biaya_antigen', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_biaya_antigen_aksi()
	{
		$this->_rules_antigen();
		if($this->form_validation->run() == FALSE){
			$this->edit_biaya_antigen();
		}else{
			$id 			= 	$this->input->post('id_biaya');
			$biaya_dokter	=	$this->input->post('biaya_dokter');
			$biaya			=	$this->input->post('biaya');

			$data 			=	array(
								'biaya_dokter'	=> $biaya_dokter,
								'biaya' 		=> $biaya );

			$where = array('id_biaya' => $id);
			$this->Models_klinik->update_data('biaya_antigen', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Biaya Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_biaya');
		}
	}
	public function _rules_antigen()
	{
		$this->form_validation->set_rules('biaya','biaya','required');
		$this->form_validation->set_rules('biaya_dokter','biaya_dokter','required');
	}

	public function edit_biaya_rapidtes($id)
	{
		$where		  			= array('id_biaya' => $id);
		$data['biaya_rapidtes'] = $this->db->query("SELECT * FROM biaya_rapidtes WHERE id_biaya = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_biaya/edit_biaya_rapidtes', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_biaya_rapidtes_aksi()
	{
		$this->_rules_rapid_tes();
		if($this->form_validation->run() == FALSE){
			$this->edit_biaya_rapidtes();
		}else{
			$id 			= 	$this->input->post('id_biaya');
			$biaya_dokter	=	$this->input->post('biaya_dokter');
			$biaya			=	$this->input->post('biaya');

			$data 			=	array(
								'biaya_dokter'		=> $biaya_dokter,
								'biaya' 			=> $biaya );

			$where = array('id_biaya' => $id);
			$this->Models_klinik->update_data('biaya_rapidtes', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Biaya Rapid Tes Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_biaya');
		}

	}

	public function _rules_rapid_tes()
	{
		$this->form_validation->set_rules('biaya','biaya','required');
		$this->form_validation->set_rules('biaya_dokter','biaya_dokter','required');
	}
	public function edit_biaya_visiteumum($id)
	{
		$where		  			= array('id_biaya' => $id);
		$data['visite_umum'] = $this->db->query("SELECT * FROM biaya_visite_umum WHERE id_biaya = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_biaya/edit_biaya_visiteumum', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_biaya_visiteumum_aksi()
	{
		$this->_rulesvisiteumum();
		if($this->form_validation->run() == FALSE){
			$this->edit_biaya_visiteumum();
		}else{
			$id 			= 	$this->input->post('id_biaya');
			$biaya_visite	=	$this->input->post('biaya_visite');

			$data 			=	array(
								'biaya_visite'		=> $biaya_visite );

			$where = array('id_biaya' => $id);
			$this->Models_klinik->update_data('biaya_visite_umum', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Biaya Visite Umum Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_biaya');
		}

	}
	public function _rulesvisiteumum()
	{
		$this->form_validation->set_rules('biaya_visite','Biaya Visite','required');
	}
	public function edit_biaya_visitebpjs($id)
	{
		$where		  			= array('id_biaya' => $id);
		$data['visite_bpjs'] = $this->db->query("SELECT * FROM biaya_visite_bpjs WHERE id_biaya = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_biaya/edit_biaya_visitebpjs', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_biaya_visitebpjs_aksi()
	{
		$this->_rulesvisitebpjs();
		if($this->form_validation->run() == FALSE){
			$this->edit_biaya_visitebpjs();
		}else{
			$id 			= 	$this->input->post('id_biaya');
			$biaya_visite	=	$this->input->post('biaya_visite');

			$data 			=	array(
								'biaya_visite'		=> $biaya_visite );

			$where = array('id_biaya' => $id);
			$this->Models_klinik->update_data('biaya_visite_bpjs', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Biaya Visite BPJS Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_biaya');
		}

	}
	public function _rulesvisitebpjs()
	{
		$this->form_validation->set_rules('biaya_visite','Biaya Visite','required');
	}
	public function edit_biaya_dokter($id)
	{
		$where		  		 = array('id_biaya' => $id);
		$data['dokter'] = $this->db->query("SELECT * FROM biaya_dokter WHERE id_biaya = '$id'")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/kelola_biaya/edit_biaya_dokter', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function edit_biaya_dokter_aksi()
	{
		$this->_rulesdokter();
		if($this->form_validation->run() == FALSE){
			$this->edit_biaya_dokter();
		}else{
			$id 			= 	$this->input->post('id_biaya');
			$uang_makan		=	$this->input->post('uang_makan');
			$uang_duduk		=	$this->input->post('uang_duduk');

			$data 			=	array(
								'uang_makan'		=> $uang_makan,
								'uang_duduk'		=> $uang_duduk );

			$where = array('id_biaya' => $id);
			$this->Models_klinik->update_data('biaya_dokter', $data, $where);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Biaya Dokter Berhasil Diupdate.
								                </div>
							                </div>');
			redirect('klinik/kelola_biaya');
		}

	}
	public function _rulesdokter()
	{
		$this->form_validation->set_rules('uang_duduk','Uang Duduk','required');
		$this->form_validation->set_rules('uang_makan','Uang Makan','required');
	}

}
?>