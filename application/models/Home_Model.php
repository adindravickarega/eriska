<?php 
   class Home_Model extends CI_Model {
	
	function __construct() { 
		parent::__construct(); 
	} 

	public function login_user($data){
		$countdata 	= 0;
		$username		= $data['username'];
		$password	= $data['password'];
		$query	= $this->db->query("SELECT COUNT(*) as total FROM rmtb_users WHERE username = '$username' AND password = '$password'");
		foreach($query->result() as $row){
			$countdata = $row->total;
		}
		return $countdata;
	}
	
	public function insert_proses($data) { 
		$this->db->insert("rmtb_proses", $data);
	}
	
	public function insert_produk($data) { 
		$this->db->insert("rmtb_produk", $data);
	}
	
	public function update_proses($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_proses", $data); }
		 
	public function update_produk($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_produk", $data); }
	
	public function insert_proses_risiko($data) { 
		$this->db->insert("rmtb_risiko_proses", $data);
	}
	
	public function insert_produk_risiko($data) { 
		$this->db->insert("rmtb_risiko_produk", $data);
	}
	
	public function update_risiko_proses($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_risiko_proses", $data); }
		 
	public function update_risiko_produk($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_risiko_produk", $data); }
	
	public function insert_proses_sod($data) { 
		$this->db->insert("rmtb_sod_proses", $data);
	}
	
	public function insert_produk_sod($data) { 
		$this->db->insert("rmtb_sod_produk", $data);
	}
	
	public function update_sod_proses($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_sod_proses", $data); }
		 
	public function update_sod_produk($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_sod_produk", $data); }
	
	public function update_skala_penyebab($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_skala_penyebab", $data); }
		 
	public function update_skala_penyebab_laporan($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_skala_penyebab_laporan", $data); }
		 
	public function update_skala_dampak($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_skala_dampak", $data); }
		 
	public function update_skala_dampak_laporan($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_skala_dampak_laporan", $data); }
		 
	public function update_skala_metode_deteksi($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_skala_metode_deteksi", $data); }
		 
	public function update_skala_metode_deteksi_laporan($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_skala_metode_deteksi_laporan", $data); }
		 
	public function update_selera_risiko($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_selera_risiko", $data); }
		 
	public function update_selera_risiko_laporan($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_selera_risiko_laporan", $data); }
		 
	public function update_pembobotan_sod($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_pembobotan_sod", $data); }
		 
	public function delete_proses_sod($id) { 
         $this->db->where("id", $id); 
         $this->db->delete("rmtb_sod_proses"); }
		 
	public function delete_produk_sod($id) { 
         $this->db->where("id", $id); 
         $this->db->delete("rmtb_sod_produk"); }
		 
	public function delete_proses_risiko($id) { 
         $this->db->where("id", $id); 
         $this->db->delete("rmtb_risiko_proses"); }
		 
	public function delete_produk_risiko($id) { 
         $this->db->where("id", $id); 
         $this->db->delete("rmtb_risiko_produk"); }
		 
	public function delete_proses($id) { 
         $this->db->where("id", $id); 
         $this->db->delete("rmtb_proses"); }
		 
	public function delete_produk($id) { 
         $this->db->where("id", $id); 
         $this->db->delete("rmtb_produk"); }
		 
	public function update_penilai_proses($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_users", $data); }
		 
	public function update_penilai_produk($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_users", $data); }
	
	public function cek_nilai_sod_proses($data){
		$countdata 	= 0;
		$id_user		= $data['id_user'];
		$id_sod_proses	= $data['id_sod_proses'];
		$query	= $this->db->query("SELECT COUNT(*) as total FROM rmtb_penilaian_proses WHERE id_user = '$id_user' AND id_sod_proses = '$id_sod_proses'");
		foreach($query->result() as $row){
			$countdata = $row->total;
		}
		return $countdata;
	}
	
	public function cek_nilai_sod_produk($data){
		$countdata 	= 0;
		$id_user		= $data['id_user'];
		$id_sod_produk	= $data['id_sod_produk'];
		$query	= $this->db->query("SELECT COUNT(*) as total FROM rmtb_penilaian_produk WHERE id_user = '$id_user' AND id_sod_produk = '$id_sod_produk'");
		foreach($query->result() as $row){
			$countdata = $row->total;
		}
		return $countdata;
	}
	
	public function insert_penilaian_proses($data) { 
		$this->db->insert("rmtb_penilaian_proses", $data);
	}
	
	public function insert_penilaian_produk($data) { 
		$this->db->insert("rmtb_penilaian_produk", $data);
	}
	
	public function update_penilaian_proses($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_penilaian_proses", $data); }
		 
	public function update_penilaian_produk($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("rmtb_penilaian_produk", $data); }
		 
	public function cek_id_proses(){
		$countdata 	= 0;
		$query	= $this->db->query("SELECT COUNT(*) as total FROM rmtb_proses");
		foreach($query->result() as $row){
			$countdata = $row->total;
		}
		return $countdata;
	}
	
	public function cek_id_produk(){
		$countdata 	= 0;
		$query	= $this->db->query("SELECT COUNT(*) as total FROM rmtb_produk");
		foreach($query->result() as $row){
			$countdata = $row->total;
		}
		return $countdata;
	}
	
	public function insert_riwayat_laporan_awal($data) { 
		$this->db->insert("rmtb_riwayat_laporan_awal", $data);
	}
	
	public function insert_riwayat_laporan_mitigasi($data) { 
		$this->db->insert("rmtb_riwayat_laporan_mitigasi", $data);
	}
	
	public function insert_riwayat_laporan_total($data) { 
		$this->db->insert("rmtb_riwayat_laporan_total", $data);
	}
	
   } 
?> 