<?php  
class models_klinik extends CI_model{
	public function get_data($table)
	{
		return $this->db->get($table);
	}
	public function insert_data($table, $data)
	{
		$this->db->insert($table, $data);
	}
	public function update_data($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}
	public function delete_data($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function cek_login(){
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db->where('username', $username)
						   ->where('password', md5($password))
						   ->limit(1)
						   ->get('admin');

		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return false;
		}
	}
	public function nomor_pasien()
	{
		$this->db->select('RIGHT(pasien.nomor_pasien,7) as nomor_pasien', FALSE);
		$this->db->order_by('nomor_pasien','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('pasien');      //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->nomor_pasien) + 1;    
		}else {      
		   //jika kode belum ada      
		   $kode = 1;    
		}

		$kodemax = str_pad($kode, 7, "0", STR_PAD_LEFT); // angka 5 menunjukkan jumlah digit angka 0
		$kodejadi = "P-".$kodemax;    // hasilnya P-00001 dst.
		return $kodejadi;
	}
	public function kode_obat()
	{
		$this->db->select('RIGHT(obat.kode_obat,7) as kode_obat', FALSE);
		$this->db->order_by('kode_obat','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('obat');      //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode_obat) + 1;    
		}else {      
		   //jika kode belum ada      
		   $kode = 1;    
		}

		$kodemax = str_pad($kode, 7, "0", STR_PAD_LEFT); // angka 5 menunjukkan jumlah digit angka 0
		$kodejadi = "OBT-".$kodemax;    // hasilnya OBT-00001 dst.
		return $kodejadi;
	}
	public function kode_rapidtest()
	{
		$this->db->select('RIGHT(rapid_test.nomor_rapidtes,7) as nomor_rapidtes', FALSE);
		$this->db->order_by('nomor_rapidtes','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('rapid_test');      //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->nomor_rapidtes) + 1;    
		}else {      
		   //jika kode belum ada      
		   $kode = 1;    
		}

		$kodemax = str_pad($kode, 7, "0", STR_PAD_LEFT); // angka 5 menunjukkan jumlah digit angka 0
		$kodejadi = "R-".$kodemax;    // hasilnya P-00001 dst.
		return $kodejadi;
	}
	public function kode_antigen()
	{
		$this->db->select('RIGHT(antigen.nomor_antigen,7) as nomor_antigen', FALSE);
		$this->db->order_by('nomor_antigen','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('antigen');      //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->nomor_antigen) + 1;    
		}else {      
		   //jika kode belum ada      
		   $kode = 1;    
		}

		$kodemax = str_pad($kode, 7, "0", STR_PAD_LEFT); // angka 5 menunjukkan jumlah digit angka 0
		$kodejadi = "A-".$kodemax;    // hasilnya P-00001 dst.
		return $kodejadi;
	}
	public function kode_dokter()
	{
		$this->db->select('RIGHT(dokter.kode_dokter,5) as kode_dokter', FALSE);
		$this->db->order_by('kode_dokter','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('dokter');      //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode_dokter) + 1;    
		}else {      
		   //jika kode belum ada      
		   $kode = 1;    
		}

		$kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT); // angka 5 menunjukkan jumlah digit angka 0
		$kodejadi = "DR-".$kodemax;    // hasilnya P-00001 dst.
		return $kodejadi;
	}
	public function ambil_id_pasien($id)
	{
		$hasil = $this->db->where('id_pasien', $id)->get('pasien');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function ambil_id_datapasien($id)
	{
		$hasil = $this->db->where('id_rawat_inap', $id)->get('rawat_inap_umum');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function ambil_id_pasienbpjs($id)
	{
		$hasil = $this->db->where('id_rawat_inap', $id)->get('rawat_inap_bpjs');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function ambil_id_dokter($id)
	{
		$hasil = $this->db->where('id_dokter', $id)->get('dokter');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function ambil_id_pegawai($id)
	{
		$hasil = $this->db->where('id_pegawai', $id)->get('pegawai');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function ambil_id_obat($id)
	{
		$hasil = $this->db->where('id_obat', $id)->get('obat');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function ambil_id_rapidtes($id)
	{
		$hasil= $this->db->where('id_rapidtes', $id)->get('rapid_test');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function ambil_id_antigen($id)
	{
		$hasil= $this->db->where('id_antigen', $id)->get('antigen');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function data_pasien_umum()
	{
		return $this->db->get_where("pasien",array('status' => 'Umum'));
	}
	public function data_pasien_bpjs()
	{
		return $this->db->get_where("pasien",array('status' => 'BPJS'));
	}
	public function hitung_jumlah_invoice()
	{
	   $this->db->select_sum('total_pembayaran');
	   $query = $this->db->get('rawat_jalan_umum');
	   if($query->num_rows()>0)
	   {
	     return $query->row()->total_pembayaran;
	   }
	   else
	   {
	     return 0;
	   }
	}
	public function total_rawatinap($id)
	{
	   $this->db->select_sum('total_biaya');
	   $query = $this->db->where('id_rawat_inap', $id)->get('datapasien_rawat_inap');
	   if($query->num_rows()>0)
	   {
	     return $query->row()->total_biaya;
	   }
	   else
	   {
	     return 0;
	   }
	}
	public function total_tindakanrawatinap($id)
	{
	   $this->db->select_sum('biaya_tindakan');
	   $query = $this->db->where('id_rawat_inap', $id)->get('tindakan_rawatinap');
	   if($query->num_rows()>0)
	   {
	     return $query->row()->biaya_tindakan;
	   }
	   else
	   {
	     return 0;
	   }
	}
	public function total_pendaftaranrawatinap_umum($id)
	{
	   $this->db->select_sum('biaya_pendaftaran');
	   $query = $this->db->where('id_rawat_inap', $id)->get('rawat_inap_umum');
	   if($query->num_rows()>0)
	   {
	     return $query->row()->biaya_pendaftaran;
	   }
	   else
	   {
	     return 0;
	   }
	}
	public function total_pendaftaranrawatinap_bpjs($id)
	{
	   $this->db->select_sum('biaya_pendaftaran');
	   $query = $this->db->where('id_rawat_inap', $id)->get('rawat_inap_bpjs');
	   if($query->num_rows()>0)
	   {
	     return $query->row()->biaya_pendaftaran;
	   }
	   else
	   {
	     return 0;
	   }
	}
	public function total_kwitansi_dokter()
	{
	   $this->db->select_sum('total_bayar');
	   $query = $this->db->get('kwitansi_dokter');
	   if($query->num_rows()>0)
	   {
	     return $query->row()->total_bayar;
	   }
	   else
	   {
	     return 0;
	   }
	}
}

?>