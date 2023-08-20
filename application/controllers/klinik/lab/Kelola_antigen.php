<?php  
class kelola_antigen extends CI_Controller{
	public function index()
	{
		$data['antigen'] = $this->db->query("SELECT * FROM antigen ORDER BY id_antigen DESC")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/lab/antigen/kelola_antigen', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function data_pasien()
	{
		$data['pasien'] = $this->Models_klinik->get_data('pasien')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/lab/antigen/data_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function detail_data_pasien($id)
	{
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/lab/antigen/detail_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
    public function tambah_data_antigen($id)
	{
		$data['biaya_antigen'] = $this->Models_klinik->get_data('biaya_antigen')->result();
		$data['dokter'] = $this->Models_klinik->get_data('dokter')->result();
		$data['nomor_antigen'] = $this->Models_klinik->kode_antigen();
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/lab/antigen/tambah_data_antigen', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_antigen_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_data_antigen();
		}else{
			$admin_pengelola	=	$this->input->post('admin_pengelola');
            $nomor_antigen     	=   $this->input->post('nomor_antigen');
			$nik        	    =	$this->input->post('nik');
            $nama	            =	$this->input->post('nama');
            $tanggal_lahir	    =	$this->input->post('tanggal_lahir');
            $pekerjaan	        =	$this->input->post('pekerjaan');
            $dokter_pemeriksa	=	$this->input->post('dokter_pemeriksa');
            $jenis_kelamin	    =	$this->input->post('jenis_kelamin');
			$alamat     	    =	$this->input->post('alamat');
			$no_hp	            =	$this->input->post('no_hp');
            $tanggal_antigen   	=   $this->input->post('tanggal_antigen');
            $hasil_antigen     	=   $this->input->post('hasil_antigen');
            $biaya_antigen     	=   $this->input->post('biaya_antigen');

			$data 			=	array(
								'admin_pengelola'	=> $admin_pengelola,
                                'nomor_antigen'     => $nomor_antigen,
								'nik'		        => $nik,
								'nama' 	            => $nama,
								'tanggal_lahir'		=> $tanggal_lahir,
								'pekerjaan' 	    => $pekerjaan,
								'dokter_pemeriksa' 	=> $dokter_pemeriksa,
                                'jenis_kelamin'     => $jenis_kelamin,
								'alamat'	        => $alamat,
								'no_hp'		        => $no_hp,
                                'tanggal_antigen'  	=> $tanggal_antigen,
                                'hasil_antigen'    	=> $hasil_antigen,
                            	'biaya_antigen'   => $biaya_antigen);


			$this->Models_klinik->insert_data('antigen', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Rapid Tes Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/lab/kelola_antigen');
		}
	}
	public function _rules()
    {
        $this->form_validation->set_rules('nomor_antigen','Nomor antigen','required');
        $this->form_validation->set_rules('nik','nik','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('tanggal_lahir','Nama','required');
        $this->form_validation->set_rules('pekerjaan','Nama','required');
        $this->form_validation->set_rules('dokter_pemeriksa','Dokter Pemeriksa','required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_hp','no_hp','required');
        $this->form_validation->set_rules('tanggal_antigen','tanggal_antigen','required');
        $this->form_validation->set_rules('hasil_antigen','hasil_antigen','required');
        $this->form_validation->set_rules('biaya_antigen','Biaya Antigen','required');
    }
	public function hapus_data_antigen($id)
	{
		$where = array('id_antigen' => $id);
		$this->Models_klinik->delete_data('antigen', $where);
		$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Antigen Berhasil Dihapus.
								                </div>
							                </div>');
		redirect('klinik/lab/kelola_antigen');
	}
    public function detail_data_antigen($id)
	{
		$data['antigen'] = $this->Models_klinik->ambil_id_antigen($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/lab/antigen/detail_data_antigen', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function print_hasil($id)
	{
		$data['antigen'] = $this->Models_klinik->ambil_id_antigen($id);
		$this->load->view('klinik/lab/antigen/print_hasil', $data);
	}
}
?>