<?php  
class Kelola_rapidtes extends CI_Controller{
	public function index()
	{
		$data['rapidtest'] = $this->db->query("SELECT * FROM rapid_test ORDER BY id_rapidtes DESC")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/lab/rapidtes/kelola_rapidtes', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function data_pasien()
	{
		$data['pasien'] = $this->Models_klinik->get_data('pasien')->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/lab/rapidtes/data_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function detail_data_pasien($id)
	{
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/lab/rapidtes/detail_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
    public function tambah_data_rapidtes($id)
	{
		$data['biaya_rapidtes'] = $this->Models_klinik->get_data('biaya_rapidtes')->result();
		$data['nomor_rapidtes'] = $this->Models_klinik->kode_rapidtest();
		$data['dokter'] = $this->Models_klinik->get_data('dokter')->result();
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/lab/rapidtes/tambah_data_rapidtes', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function tambah_data_rapidtes_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_data_rapidtes();
		}else{
			$admin_pengelola	=	$this->input->post('admin_pengelola');
            $nomor_rapidtes     =   $this->input->post('nomor_rapidtes');
			$nik        	    =	$this->input->post('nik');
            $nama	            =	$this->input->post('nama');
            $tanggal_lahir	    =	$this->input->post('tanggal_lahir');
            $jenis_kelamin	    =	$this->input->post('jenis_kelamin');
            $pekerjaan	        =	$this->input->post('pekerjaan');
			$alamat     	    =	$this->input->post('alamat');
			$no_hp	            =	$this->input->post('no_hp');
            $tanggal_rapidtes   =   $this->input->post('tanggal_rapidtes');
            $dokter_pemeriksa	=	$this->input->post('dokter_pemeriksa');
            $hasil_rapidtes     =   $this->input->post('hasil_rapidtes');
            $biaya_rapidtest     =   $this->input->post('biaya_rapidtest');

			$data 			=	array(
								'admin_pengelola'	=> $admin_pengelola,
                                'nomor_rapidtes'    => $nomor_rapidtes,
								'nik'		        => $nik,
								'nama' 	            => $nama,
								'tanggal_lahir' 	=> $tanggal_lahir,
                                'jenis_kelamin'     => $jenis_kelamin,
                                'pekerjaan' 	    => $pekerjaan,
								'alamat'	        => $alamat,
								'no_hp'		        => $no_hp,
                                'tanggal_rapidtes'  => $tanggal_rapidtes,
                                'dokter_pemeriksa' 	=> $dokter_pemeriksa,
                                'hasil_rapidtes'    => $hasil_rapidtes,
                            	'biaya_rapidtest'    => $biaya_rapidtest);


			$this->Models_klinik->insert_data('rapid_test', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Rapid Tes Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/lab/kelola_rapidtes');
		}
	}
	public function _rules()
    {
        $this->form_validation->set_rules('nomor_rapidtes','Nomor Rapidtes','required');
        $this->form_validation->set_rules('nik','nik','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_hp','No HP','required');
        $this->form_validation->set_rules('tanggal_rapidtes','Tanggal Rapid Test','required');
        $this->form_validation->set_rules('dokter_pemeriksa','Dokter Pemeriksa','required');
        $this->form_validation->set_rules('hasil_rapidtes','Hasil Rapid Test','required');
        $this->form_validation->set_rules('biaya_rapidtest','Biaya Rapid Test','required');
    }
	public function hapus_data_rapidtes($id)
	{
		$where = array('id_rapidtes' => $id);
		$this->Models_klinik->delete_data('rapid_test', $where);
		$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Data Rapid Test Berhasil Dihapus.
								                </div>
							                </div>');
		redirect('klinik/lab/kelola_rapidtes');
	}
    public function detail_data_rapidtes($id)
	{
		$data['rapidtest'] = $this->Models_klinik->ambil_id_rapidtes($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/lab/rapidtes/detail_data_rapidtes', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function print_hasil($id)
	{
		$data['rapidtest'] = $this->Models_klinik->ambil_id_rapidtes($id);
		$this->load->view('klinik/lab/rapidtes/print_hasil', $data);
	}
}
?>