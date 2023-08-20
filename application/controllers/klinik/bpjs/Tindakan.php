<?php  
class Tindakan extends CI_Controller{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['tindakan'] = $this->db->query("SELECT * FROM pasien ps, tindakan_bpjs tu WHERE ps.nomor_pasien=tu.nomor_pasien AND ps.status ='BPJS' ORDER BY id_tindakan DESC")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/bpjs/tindakan/tindakan', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function data_pasien()
	{
		$data['pasien'] = $this->Models_klinik->data_pasien_bpjs()->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/bpjs/tindakan/data_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function detail_tindakan($id)
	{
		$data['tindakan'] = $this->db->query("SELECT * FROM pasien ps, tindakan_bpjs tu WHERE ps.nomor_pasien=tu.nomor_pasien AND tu.id_tindakan='$id' ORDER BY id_tindakan")->result();
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/bpjs/tindakan/detail_tindakan', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function detail_data_pasien($id)
	{
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/bpjs/tindakan/detail_pasien', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function print_invoice($id)
	{	
		$data['tindakan'] = $this->db->query("SELECT * FROM pasien ps, tindakan_bpjs tu WHERE ps.nomor_pasien=tu.nomor_pasien AND tu.id_tindakan='$id' AND tu.kategori_pasien ='bpjs' ORDER BY id_tindakan")->result();
		$this->load->view('klinik/bpjs/tindakan/print_invoice', $data);
	}
	public function form_tindakan_bpjs($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['pasien'] = $this->Models_klinik->ambil_id_pasien($id);
		$this->load->view('templates_klinik/header');
		$this->load->view('templates_klinik/sidebar');
		$this->load->view('klinik/bpjs/tindakan/form_tindakan', $data);
		$this->load->view('templates_klinik/footer');
	}
	public function form_tindakan_bpjs_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tindakan_bpjs();
		}else{
			$nomor_pasien		= $this->input->post('nomor_pasien');
			$nama_pasien		= $this->input->post('nama_pasien');
			$kategori_pasien	= $this->input->post('kategori_pasien');
			$tanggal_tindakan	= $this->input->post('tanggal_tindakan');
			$tindakan_1			= $this->input->post('tindakan_1');
			$tindakan_2 		= $this->input->post('tindakan_2');
			$tindakan_3 		= $this->input->post('tindakan_3');
			$tindakan_4 		= $this->input->post('tindakan_4');
			$tindakan_5 		= $this->input->post('tindakan_5');
			$biaya_tindakan		= $this->input->post('biaya_tindakan');

			$data 				= array(
								'nomor_pasien' 		=> $nomor_pasien,
								'nama_pasien'		=> $nama_pasien,
								'kategori_pasien'	=> $kategori_pasien,
								'tanggal_tindakan'	=> $tanggal_tindakan,
								'tindakan_1' 		=> $tindakan_1,
								'tindakan_2' 		=> $tindakan_2,
								'tindakan_3'		=> $tindakan_3,
								'tindakan_4'		=> $tindakan_4,
								'tindakan_5'		=> $tindakan_5,
								'biaya_tindakan'	=> $biaya_tindakan );

			$this->Models_klinik->insert_data('tindakan_bpjs', $data);
			$this->session->set_flashdata('pesan',
										  '<div class="alert alert-success alert-dismissible show fade">
								                <div class="alert-body">
								                    <button class="close" data-dismiss="alert">
								                      	<span>&times;</span>
								                    </button>
								                    Tindakan Rawat Jalan Berhasil Ditambahkan.
								                </div>
							                </div>');
			redirect('klinik/bpjs/tindakan');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('nomor_pasien','Nomor Pasien','required');
		$this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
		$this->form_validation->set_rules('kategori_pasien','Kategori Pasien','required');
		$this->form_validation->set_rules('biaya_tindakan','Biaya Tindakan','required');
	}
}
?>