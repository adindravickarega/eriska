<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
use setasign\Fpdi\Fpdi;

class Home extends CI_Controller {
	function __construct() {
         parent::__construct();
         $this->load->helper('url');
         $this->load->database();
         $this->load->helper('form');
		 $this->load->library('session');
     }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	$username 	= $this->session->userdata('username');
		if(isset($username) && ($username !== '')){
			redirect('homepage');
		}else{
			$this->load->view('login');
		}		
	}
	public function homepage()
	{	$username 	= $this->session->userdata('username');
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			if($info['level'] == 'analis'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}else if($info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}else if($info['level'] == 'penilai'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}
			$info['page'] = '';
			$this->load->view('header', $info);
			$this->load->view('sidebar', $info);
			$this->load->view('home', $info);
			$this->load->view('footer', $info);
		}else{
			redirect('');
		}		
	}
	public function identifikasi()
	{	$username 	= $this->session->userdata('username');
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			if($info['level'] == 'analis'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}else if($info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}else if($info['level'] == 'penilai'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}
			$info['page'] = 'identifikasi';
			$this->load->view('header', $info);
			$this->load->view('sidebar', $info);
			$this->load->view('identifikasi', $info);
			$this->load->view('footer', $info);
		}else{
			redirect('');
		}		
	}
	public function framework()
	{	$username 	= $this->session->userdata('username');
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			if($info['level'] == 'analis'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}else if($info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}else if($info['level'] == 'penilai'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}
			$info['page'] = 'framework';
			$this->load->view('header', $info);
			$this->load->view('sidebar', $info);
			$this->load->view('framework', $info);
			$this->load->view('footer', $info);
		}else{
			redirect('');
		}		
	}
	public function penilaian()
	{	$username 	= $this->session->userdata('username');
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			if($info['level'] == 'analis'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}else if($info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}else if($info['level'] == 'penilai'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}
			$info['page'] = 'penilaian';
			$this->load->view('header', $info);
			$this->load->view('sidebar', $info);
			$this->load->view('penilaian', $info);
			$this->load->view('footer', $info);
		}else{
			redirect('');
		}		
	}
	public function cetak_view()
	{	$username 	= $this->session->userdata('username');
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			if($info['level'] == 'analis'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}else if($info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}else if($info['level'] == 'penilai'){
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
			}
			$info['page'] = 'cetak';
			$this->load->view('header', $info);
			$this->load->view('sidebar', $info);
			$this->load->view('cetak', $info);
			$this->load->view('footer', $info);
		}else{
			redirect('');
		}		
	}
	public function login_user(){
		$this->load->model('Home_Model');
		$loginUser = $this->input->post('loginUser');
		$loginPassword = md5($this->input->post('loginPassword'));
		$data = array(
			'username' => $loginUser,
			'password' => $loginPassword
		);
		if($this->Home_Model->login_user($data) > 0){
			$query = $this->db->get_where('rmtb_users',array("username"=>$data['username']));
			$user = $query->result();
			$this->session->set_userdata('username', $data['username']);
			$this->session->set_userdata('level', $user[0]->level);
			$username = $this->session->userdata('username');
			if(isset($username) && $username !== ''){
				redirect('homepage');
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}
	}
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		redirect('');
	}
	public function webcontent()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis'){
				$webkonten = $this->uri->segment('1');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id_user"=>$user[0]->id));
				$query = $this->db->get('rmtb_'.$webkonten);
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view($webkonten, $info);
				$this->load->view('footer', $info);
			}elseif($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get('rmtb_'.$webkonten);
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view($webkonten, $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function add_proses()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$judul= $_POST['judul'];
		$deskripsi= $_POST['deskripsi'];
		$langkah = $_POST['langkah'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			//$jumlah_id = $this->Home_Model->cek_id_proses() + 1;
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("level"=>"analis"));
				$user = $query->result();
				$data = array(
					'id_user' => $user[0]->id,
					'judul' => $judul,
					'deskripsi' => $deskripsi,
					'langkah' => $langkah
				);
				$this->Home_Model->insert_proses($data);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function add_produk()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$judul= $_POST['judul'];
		$deskripsi= $_POST['deskripsi'];
		$langkah = $_POST['langkah'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			//$jumlah_id = $this->Home_Model->cek_id_produk() + 1;
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("level"=>"analis"));
				$user = $query->result();
				$data = array(
					'id_user' => $user[0]->id,
					'judul' => $judul,
					'deskripsi' => $deskripsi,
					'langkah' => $langkah
				);
				$this->Home_Model->insert_produk($data);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_proses_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id = $this->uri->segment('3');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('proses_edit', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function edit_proses()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_proses= $_POST['id_proses'];
		$judul= $_POST['judul'];
		$deskripsi= $_POST['deskripsi'];
		$langkah = $_POST['langkah'];
		$query = $this->db->get_where('rmtb_proses',array("id"=>$id_proses));
		$proses = $query->result();
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if(($info['level'] == 'analis' && $user[0]->id == $proses[0]->id_user) || $info['level'] == 'manajemen'){
				$data = array(
					//'id_user' => $user[0]->id,
					'judul' => $judul,
					'deskripsi' => $deskripsi,
					'langkah' => $langkah
				);
				$this->Home_Model->update_proses($data,$id_proses);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_produk_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id = $this->uri->segment('3');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('produk_edit', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function edit_produk()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_produk= $_POST['id_produk'];
		$judul= $_POST['judul'];
		$deskripsi= $_POST['deskripsi'];
		$langkah = $_POST['langkah'];
		$query = $this->db->get_where('rmtb_produk',array("id"=>$id_produk));
		$produk = $query->result();
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if(($info['level'] == 'analis' && $user[0]->id == $proses[0]->id_user) || $info['level'] == 'manajemen'){
				$data = array(
					//'id_user' => $user[0]->id,
					'judul' => $judul,
					'deskripsi' => $deskripsi,
					'langkah' => $langkah
				);
				$this->Home_Model->update_produk($data,$id_produk);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function view_proses()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis'){
				$webkonten = $this->uri->segment('1');
				$id = $this->uri->segment('3');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id));
				$info['ident_risiko'] = $query->result();
				if(!isset($info['ident_risiko'][0]->id)){
					$id = 0;
				}
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id_proses"=>$id));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('proses_risiko', $info);
				$this->load->view('footer', $info);
			}elseif($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id = $this->uri->segment('3');
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id));
				$info['ident_risiko'] = $query->result();
				if(!isset($info['ident_risiko'][0]->id)){
					$id = 0;
				}
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id_proses"=>$id));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('proses_risiko', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}
	}
	public function view_produk()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis'){
				$webkonten = $this->uri->segment('1');
				$id = $this->uri->segment('3');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id));
				$info['ident_risiko'] = $query->result();
				if(!isset($info['ident_risiko'][0]->id)){
					$id = 0;
				}
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id_produk"=>$id));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('produk_risiko', $info);
				$this->load->view('footer', $info);
			}elseif($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id = $this->uri->segment('3');
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id));
				$info['ident_risiko'] = $query->result();
				if(!isset($info['ident_risiko'][0]->id)){
					$id = 0;
				}
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id_produk"=>$id));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('produk_risiko', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}
	}
	public function add_proses_risiko()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_proses= $_POST['id_proses'];
		$risiko= $_POST['risiko'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("username"=>$username));
				$user = $query->result();
				$data = array(
					'id_proses' => $id_proses,
					'risiko' => $risiko
				);
				$this->Home_Model->insert_proses_risiko($data);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function add_produk_risiko()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_produk= $_POST['id_produk'];
		$risiko= $_POST['risiko'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("username"=>$username));
				$user = $query->result();
				$data = array(
					'id_produk' => $id_produk,
					'risiko' => $risiko
				);
				$this->Home_Model->insert_produk_risiko($data);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_risiko_proses_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_proses = $this->uri->segment('3');
				$id_risiko = $this->uri->segment('5');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_proses,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_proses));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id"=>$id_risiko,"id_proses"=>$id_proses));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('proses_risiko_edit', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function edit_risiko_produk_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_produk = $this->uri->segment('3');
				$id_risiko = $this->uri->segment('5');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_produk,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_produk));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id"=>$id_risiko,"id_produk"=>$id_produk));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('produk_risiko_edit', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function edit_risiko_proses()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_proses= $_POST['id_proses'];
		$id_risiko_proses= $_POST['id_risiko_proses'];
		$risiko= $_POST['risiko'];
		$query = $this->db->get_where('rmtb_proses',array("id"=>$id_proses));
		$proses = $query->result();
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if(($info['level'] == 'analis' && $user[0]->id == $proses[0]->id_user) || $info['level'] == 'manajemen'){
				$data = array(
					'risiko' => $risiko
				);
				$this->Home_Model->update_risiko_proses($data,$id_risiko_proses);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_risiko_produk()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_produk= $_POST['id_produk'];
		$id_risiko_produk= $_POST['id_risiko_produk'];
		$risiko= $_POST['risiko'];
		$query = $this->db->get_where('rmtb_produk',array("id"=>$id_produk));
		$produk = $query->result();
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if(($info['level'] == 'analis' && $user[0]->id == $produk[0]->id_user) || $info['level'] == 'manajemen'){
				$data = array(
					'risiko' => $risiko
				);
				$this->Home_Model->update_risiko_produk($data,$id_risiko_produk);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function view_risiko_proses() //bikin tombol mitigasi
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis'){
				$webkonten = $this->uri->segment('1');
				$id_proses = $this->uri->segment('3');
				$id_risiko_proses = $this->uri->segment('5');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_proses,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_proses));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id"=>$id_risiko_proses));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_sod_'.$webkonten,array('id_risiko_'.$webkonten=>$id_risiko_proses));
				$info['sod'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('proses_risiko_view', $info);
				$this->load->view('footer', $info);
			}elseif($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_proses = $this->uri->segment('3');
				$id_risiko_proses = $this->uri->segment('5');
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_proses));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id"=>$id_risiko_proses));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_sod_'.$webkonten,array('id_risiko_'.$webkonten=>$id_risiko_proses));
				$info['sod'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('proses_risiko_view', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}
	}
	public function view_risiko_produk() //bikin tombol mitigasi
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis'){
				$webkonten = $this->uri->segment('1');
				$id_produk = $this->uri->segment('3');
				$id_risiko_produk = $this->uri->segment('5');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_produk,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_produk));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id"=>$id_risiko_produk));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_sod_'.$webkonten,array('id_risiko_'.$webkonten=>$id_risiko_produk));
				$info['sod'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('produk_risiko_view', $info);
				$this->load->view('footer', $info);
			}elseif($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_produk = $this->uri->segment('3');
				$id_risiko_produk = $this->uri->segment('5');
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_produk));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id"=>$id_risiko_produk));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_sod_'.$webkonten,array('id_risiko_'.$webkonten=>$id_risiko_produk));
				$info['sod'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('produk_risiko_view', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}
	}
	public function add_proses_sod()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_risiko_proses= $_POST['id_risiko_proses'];
		$dampak= $_POST['dampak'];
		$penyebab= $_POST['penyebab'];
		$metode_deteksi= $_POST['metode_deteksi'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("username"=>$username));
				$user = $query->result();
				$data = array(
					'id_risiko_proses' => $id_risiko_proses,
					'dampak' => $dampak,
					'penyebab' => $penyebab,
					'metode_deteksi' => $metode_deteksi
				);
				$this->Home_Model->insert_proses_sod($data);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function add_produk_sod()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_risiko_produk= $_POST['id_risiko_produk'];
		$dampak= $_POST['dampak'];
		$penyebab= $_POST['penyebab'];
		$metode_deteksi= $_POST['metode_deteksi'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("username"=>$username));
				$user = $query->result();
				$data = array(
					'id_risiko_produk' => $id_risiko_produk,
					'dampak' => $dampak,
					'penyebab' => $penyebab,
					'metode_deteksi' => $metode_deteksi
				);
				$this->Home_Model->insert_produk_sod($data);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_sod_proses_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_proses = $this->uri->segment('3');
				$id_risiko = $this->uri->segment('4');
				$id_sod_proses = $this->uri->segment('7');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_proses,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_proses));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id"=>$id_risiko,"id_proses"=>$id_proses));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_sod_'.$webkonten,array("id"=>$id_sod_proses,'id_risiko_'.$webkonten=>$id_risiko));
				$info['sod'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('proses_sod_edit', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function edit_sod_proses()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_sod_proses= $_POST['id_sod_proses'];
		$id_risiko_proses= $_POST['id_risiko_proses'];
		$dampak= $_POST['dampak'];
		$penyebab= $_POST['penyebab'];
		$metode_deteksi= $_POST['metode_deteksi'];
		$id_proses= $_POST['id_proses'];
		$query = $this->db->get_where('rmtb_proses',array("id"=>$id_proses));
		$proses = $query->result();
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if(($info['level'] == 'analis' && $user[0]->id == $proses[0]->id_user) || $info['level'] == 'manajemen'){
				$data = array(
					'dampak' => $dampak,
					'penyebab' => $penyebab,
					'metode_deteksi' => $metode_deteksi
				);
				$this->Home_Model->update_sod_proses($data,$id_sod_proses);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_sod_produk_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_produk = $this->uri->segment('3');
				$id_risiko = $this->uri->segment('4');
				$id_sod_produk = $this->uri->segment('7');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_produk,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_produk));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id"=>$id_risiko,"id_produk"=>$id_produk));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_sod_'.$webkonten,array("id"=>$id_sod_produk,'id_risiko_'.$webkonten=>$id_risiko));
				$info['sod'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('produk_sod_edit', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function edit_sod_produk()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_sod_produk= $_POST['id_sod_produk'];
		$id_risiko_produk= $_POST['id_risiko_produk'];
		$dampak= $_POST['dampak'];
		$penyebab= $_POST['penyebab'];
		$metode_deteksi= $_POST['metode_deteksi'];
		$id_produk= $_POST['id_produk'];
		$query = $this->db->get_where('rmtb_produk',array("id"=>$id_produk));
		$produk = $query->result();
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if(($info['level'] == 'analis' && $user[0]->id == $produk[0]->id_user) || $info['level'] == 'manajemen'){
				$data = array(
					'dampak' => $dampak,
					'penyebab' => $penyebab,
					'metode_deteksi' => $metode_deteksi
				);
				$this->Home_Model->update_sod_produk($data,$id_sod_produk);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function skala_penyebab()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get('rmtb_skala_penyebab');
				$info['skala_penyebab'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('skala_penyebab', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function skala_dampak()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get('rmtb_skala_dampak');
				$info['skala_dampak'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('skala_dampak', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function skala_metode_deteksi()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get('rmtb_skala_metode_deteksi');
				$info['skala_metode_deteksi'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('skala_metode_deteksi', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function edit_skala_penyebab_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_skala_penyebab = $this->uri->segment('3');
				$query = $this->db->get_where('rmtb_skala_penyebab', array('id'=>$id_skala_penyebab));
				$info['skala_penyebab'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('skala_penyebab_edit', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function edit_skala_penyebab()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_skala_penyebab= $_POST['id_skala_penyebab'];
		$judul_proses= $_POST['judul_proses'];
		$deskripsi_proses= $_POST['deskripsi_proses'];
		$judul_produk= $_POST['judul_produk'];
		$deskripsi_produk= $_POST['deskripsi_produk'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$data = array(
					'judul_proses' => $judul_proses,
					'deskripsi_proses' => $deskripsi_proses,
					'judul_produk' => $judul_produk,
					'deskripsi_produk' => $deskripsi_produk
				);
				$this->Home_Model->update_skala_penyebab($data,$id_skala_penyebab);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_skala_dampak_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_skala_dampak = $this->uri->segment('3');
				$query = $this->db->get_where('rmtb_skala_dampak', array('id'=>$id_skala_dampak));
				$info['skala_dampak'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('skala_dampak_edit', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function edit_skala_dampak()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_skala_dampak= $_POST['id_skala_dampak'];
		$judul_proses= $_POST['judul_proses'];
		$deskripsi_proses= $_POST['deskripsi_proses'];
		$judul_produk= $_POST['judul_produk'];
		$deskripsi_produk= $_POST['deskripsi_produk'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$data = array(
					'judul_proses' => $judul_proses,
					'deskripsi_proses' => $deskripsi_proses,
					'judul_produk' => $judul_produk,
					'deskripsi_produk' => $deskripsi_produk
				);
				$this->Home_Model->update_skala_dampak($data,$id_skala_dampak);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_skala_metode_deteksi_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_skala_metode_deteksi = $this->uri->segment('3');
				$query = $this->db->get_where('rmtb_skala_metode_deteksi', array('id'=>$id_skala_metode_deteksi));
				$info['skala_metode_deteksi'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('skala_metode_deteksi_edit', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function edit_skala_metode_deteksi()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_skala_metode_deteksi= $_POST['id_skala_metode_deteksi'];
		$judul_proses= $_POST['judul_proses'];
		$deskripsi_proses= $_POST['deskripsi_proses'];
		$judul_produk= $_POST['judul_produk'];
		$deskripsi_produk= $_POST['deskripsi_produk'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$data = array(
					'judul_proses' => $judul_proses,
					'deskripsi_proses' => $deskripsi_proses,
					'judul_produk' => $judul_produk,
					'deskripsi_produk' => $deskripsi_produk
				);
				$this->Home_Model->update_skala_metode_deteksi($data,$id_skala_metode_deteksi);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function selera_risiko()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get('rmtb_selera_risiko');
				$info['selera_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('selera_risiko', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function edit_selera_risiko_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_selera_risiko = $this->uri->segment('3');
				if($id_selera_risiko > 1){
					$id_selera_risiko_sebelum = $id_selera_risiko-1;
					$query = $this->db->get_where('rmtb_selera_risiko', array('id'=>$id_selera_risiko_sebelum));
					$nilai_selera_risiko = $query->result();
					$info['nilai_sebelum'] = $nilai_selera_risiko[0]->max;
				}else{
					$info['nilai_sebelum'] = -1;
				}
				$query = $this->db->get_where('rmtb_selera_risiko', array('id'=>$id_selera_risiko));
				$info['selera_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('selera_risiko_edit', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function edit_selera_risiko()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_selera_risiko= $_POST['id_selera_risiko'];
		$min= $_POST['min'];
		$max= $_POST['max'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$data = array(
					'min' => $min,
					'max' => $max
				);
				$this->Home_Model->update_selera_risiko($data,$id_selera_risiko);
				if($id_selera_risiko == 1){
					if($max == 1000 || $max == 999){
						$data2 = array(
							'min' => 1000,
							'max' => 1000
						);
						$this->Home_Model->update_selera_risiko($data2,$id_selera_risiko+1);
						$data3 = array(
							'min' => 1000,
							'max' => 1000
						);
						$this->Home_Model->update_selera_risiko($data3,$id_selera_risiko+2);
					}else{
						$data2 = array(
							'min' => $max+1
						);
						$this->Home_Model->update_selera_risiko($data2,$id_selera_risiko+1);
					}
				}
				if($id_selera_risiko == 2){
					if($max == 1000 || $max == 999){
						$data2 = array(
							'min' => 1000,
							'max' => 1000
						);
						$this->Home_Model->update_selera_risiko($data2,$id_selera_risiko+1);
					}else{
						$data2 = array(
							'min' => $max+1
						);
						$this->Home_Model->update_selera_risiko($data2,$id_selera_risiko+1);
					}
				}
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function delete_proses_sod()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_sod= $_POST['id_sod'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("username"=>$username));
				$user = $query->result();
				$this->Home_Model->delete_proses_sod($id_sod);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function delete_produk_sod()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_sod= $_POST['id_sod'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("username"=>$username));
				$user = $query->result();
				$this->Home_Model->delete_produk_sod($id_sod);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function delete_proses_risiko()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_risiko= $_POST['id_risiko'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("username"=>$username));
				$user = $query->result();
				$this->Home_Model->delete_proses_risiko($id_risiko);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function delete_produk_risiko()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_risiko= $_POST['id_risiko'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("username"=>$username));
				$user = $query->result();
				$this->Home_Model->delete_produk_risiko($id_risiko);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function delete_proses()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_proses= $_POST['id_proses'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("username"=>$username));
				$user = $query->result();
				$this->Home_Model->delete_proses($id_proses);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function delete_produk()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_produk= $_POST['id_produk'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$query = $this->db->get_where('rmtb_users',array("username"=>$username));
				$user = $query->result();
				$this->Home_Model->delete_produk($id_produk);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function penilai_proses()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$webkonten2 = $this->uri->segment('2');
				$id = $this->uri->segment('3');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id));
				$info['ident_risiko'] = $query->result();
				if(isset($info['ident_risiko'][0]->id)){
					$isi_penilai = strlen($info['ident_risiko'][0]->penilai);
					$array_penilai = 0;
					$penilai_dipilih[$array_penilai] = "";
					for ($x = 0; $x < $isi_penilai; $x++) {
					  if(substr($info['ident_risiko'][0]->penilai,$x,1) != ';'){
						  $penilai_dipilih[$array_penilai] =  $penilai_dipilih[$array_penilai].substr($info['ident_risiko'][0]->penilai,$x,1);
					  }else{
						  $array_penilai++;
						  $penilai_dipilih[$array_penilai] = "";
					  }
					}
					if(isset($penilai_dipilih)){
						$info['penilai_dipilih'] = $penilai_dipilih;
					}else{
						$info['penilai_dipilih'] = ["0"];
					}
					$query = $this->db->get_where('rmtb_users', array('level'=>'penilai'));
					$info['penilai'] = $query->result();
					$query = $this->db->get_where('rmtb_users', array('username'=>$username));
					$info['user'] = $query->result();
					$info['page'] = $webkonten;
					$info['page2'] = $webkonten2;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('proses_penilai', $info);
					$this->load->view('footer', $info);
				}else{
					$query = $this->db->get_where('rmtb_users', array('username'=>$username));
					$info['user'] = $query->result();
					$info['page'] = $webkonten;
					$info['page2'] = $webkonten2;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('data_tidak_ditemukan', $info);
					$this->load->view('footer', $info);
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function penilai_produk()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$webkonten2 = $this->uri->segment('2');
				$id = $this->uri->segment('3');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id));
				$info['ident_risiko'] = $query->result();
				if(isset($info['ident_risiko'][0]->id)){
					$isi_penilai = strlen($info['ident_risiko'][0]->penilai);
					$array_penilai = 0;
					$penilai_dipilih[$array_penilai] = "";
					for ($x = 0; $x < $isi_penilai; $x++) {
					  if(substr($info['ident_risiko'][0]->penilai,$x,1) != ';'){
						  $penilai_dipilih[$array_penilai] =  $penilai_dipilih[$array_penilai].substr($info['ident_risiko'][0]->penilai,$x,1);
					  }else{
						  $array_penilai++;
						  $penilai_dipilih[$array_penilai] = "";
					  }
					}
					if(isset($penilai_dipilih)){
						$info['penilai_dipilih'] = $penilai_dipilih;
					}else{
						$info['penilai_dipilih'] = ["0"];
					}
					$query = $this->db->get_where('rmtb_users', array('level'=>'penilai'));
					$info['penilai'] = $query->result();
					$query = $this->db->get_where('rmtb_users', array('username'=>$username));
					$info['user'] = $query->result();
					$info['page'] = $webkonten;
					$info['page2'] = $webkonten2;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('produk_penilai', $info);
					$this->load->view('footer', $info);
				}else{
					$query = $this->db->get_where('rmtb_users', array('username'=>$username));
					$info['user'] = $query->result();
					$info['page'] = $webkonten;
					$info['page2'] = $webkonten2;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('data_tidak_ditemukan', $info);
					$this->load->view('footer', $info);
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function simpan_penilai_proses()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_proses = $_POST['id_proses'];
		$penilai = $_POST['penilai'];
		$penilai = substr($penilai,0,-1);
		$query = $this->db->get('rmtb_users');
		$users = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$data = array(
					'penilai' => $penilai
				);
				$this->Home_Model->update_proses($data,$id_proses);
			}
		}else{
			redirect('');
		}
	}
	public function simpan_penilai_produk()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_produk = $_POST['id_produk'];
		$penilai = $_POST['penilai'];
		$penilai = substr($penilai,0,-1);
		$query = $this->db->get('rmtb_users');
		$users = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$data = array(
					'penilai' => $penilai
				);
				$this->Home_Model->update_produk($data,$id_produk);
			}
		}else{
			redirect('');
		}
	}
	public function pembobotan_sod_proses()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$webkonten2 = $this->uri->segment('2');
				$id = $this->uri->segment('3');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id));
				$info['ident_risiko'] = $query->result();
				if(isset($info['ident_risiko'][0]->id)){
					$info['pembobotan_dipilih'] = $info['ident_risiko'][0]->pembobotan_dipilih;
					if($info['ident_risiko'][0]->so != "" && $info['ident_risiko'][0]->sd != "" && $info['ident_risiko'][0]->od != ""){
						$info['so'] = $info['ident_risiko'][0]->so;
						$info['sd'] = $info['ident_risiko'][0]->sd;
						$info['od'] = $info['ident_risiko'][0]->od;
					}else{
						$info['so'] = 1;
						$info['sd'] = 1;
						$info['od'] = 1;
					}
					$query = $this->db->get_where('rmtb_users', array('username'=>$username));
					$info['user'] = $query->result();
					$info['page'] = $webkonten;
					$info['page2'] = $webkonten2;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('proses_pembobotan_sod', $info);
					$this->load->view('footer', $info);
				}else{
					$query = $this->db->get_where('rmtb_users', array('username'=>$username));
					$info['user'] = $query->result();
					$info['page'] = $webkonten;
					$info['page2'] = $webkonten2;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('data_tidak_ditemukan', $info);
					$this->load->view('footer', $info);
				}
			}
		}else{
			redirect('');
		}
	}
	public function edit_langsung_proses()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_proses= $_POST['id_proses'];
		$s= $_POST['s'];
		$o= $_POST['o'];
		$d= $_POST['d'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$data = array(
					'ps_langsung' => $s,
					'po_langsung' => $o,
					'pd_langsung' => $d
				);
				$this->Home_Model->update_proses($data,$id_proses);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_ahp_proses()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_proses= $_POST['id_proses'];
		$s= $_POST['s'];
		$o= $_POST['o'];
		$d= $_POST['d'];
		$so= $_POST['so'];
		$sd= $_POST['sd'];
		$od= $_POST['od'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$data = array(
					'ps_ahp' => $s,
					'po_ahp' => $o,
					'pd_ahp' => $d,
					'so' => $so,
					'sd' => $sd,
					'od' => $od
				);
				$this->Home_Model->update_proses($data,$id_proses);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_pembobotan_sod_proses()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_proses= $_POST['id_proses'];
		$pembobotan= $_POST['pembobotan'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$data = array(
					'pembobotan_dipilih' => $pembobotan
				);
				$this->Home_Model->update_proses($data,$id_proses);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function pembobotan_sod_produk()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$webkonten2 = $this->uri->segment('2');
				$id = $this->uri->segment('3');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id));
				$info['ident_risiko'] = $query->result();
				if(isset($info['ident_risiko'][0]->id)){
					$info['pembobotan_dipilih'] = $info['ident_risiko'][0]->pembobotan_dipilih;
					if($info['ident_risiko'][0]->so != "" && $info['ident_risiko'][0]->sd != "" && $info['ident_risiko'][0]->od != ""){
						$info['so'] = $info['ident_risiko'][0]->so;
						$info['sd'] = $info['ident_risiko'][0]->sd;
						$info['od'] = $info['ident_risiko'][0]->od;
					}else{
						$info['so'] = 1;
						$info['sd'] = 1;
						$info['od'] = 1;
					}	
					$query = $this->db->get_where('rmtb_users', array('username'=>$username));
					$info['user'] = $query->result();
					$info['page'] = $webkonten;
					$info['page2'] = $webkonten2;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('produk_pembobotan_sod', $info);
					$this->load->view('footer', $info);
				}else{
					$query = $this->db->get_where('rmtb_users', array('username'=>$username));
					$info['user'] = $query->result();
					$info['page'] = $webkonten;
					$info['page2'] = $webkonten2;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('data_tidak_ditemukan', $info);
					$this->load->view('footer', $info);
				}
			}
		}else{
			redirect('');
		}
	}
	public function edit_langsung_produk()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_produk= $_POST['id_produk'];
		$s= $_POST['s'];
		$o= $_POST['o'];
		$d= $_POST['d'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$data = array(
					'ps_langsung' => $s,
					'po_langsung' => $o,
					'pd_langsung' => $d
				);
				$this->Home_Model->update_produk($data,$id_produk);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_ahp_produk()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_produk= $_POST['id_produk'];
		$s= $_POST['s'];
		$o= $_POST['o'];
		$d= $_POST['d'];
		$so= $_POST['so'];
		$sd= $_POST['sd'];
		$od= $_POST['od'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$data = array(
					'ps_ahp' => $s,
					'po_ahp' => $o,
					'pd_ahp' => $d,
					'so' => $so,
					'sd' => $sd,
					'od' => $od
				);
				$this->Home_Model->update_produk($data,$id_produk);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function edit_pembobotan_sod_produk()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_produk= $_POST['id_produk'];
		$pembobotan= $_POST['pembobotan'];
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$data = array(
					'pembobotan_dipilih' => $pembobotan
				);
				$this->Home_Model->update_produk($data,$id_produk);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function penilaian_proses()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				//bikin seperti tentukan_penilai
				$query = $this->db->get('rmtb_proses');
				$proses = $query->result();
				$penilai_ada = 0;
				if($info['user'][0]->level =='penilai'){
					$ke = 0;
					$id_proses_penilai[0]=0;
					foreach($proses as $p){
						if(strpos($p->penilai,$info['user'][0]->id.";")==true || (strpos($p->penilai,$info['user'][0]->id.";")==0 && substr($p->penilai,0,strlen($info['user'][0]->id.";")) == $info['user'][0]->id.";") || substr($p->penilai,-strlen($info['user'][0]->id)) == $info['user'][0]->id){
							$id_proses_penilai[$ke] = $p->id;
							$penilai_ada = 1;
							$ke++;
						}
					}
					$info['id_proses_penilai'] = $id_proses_penilai;
					$query = $this->db->get('rmtb_proses');
					$info['proses'] = $query->result();
					$query = $this->db->get('rmtb_risiko_proses');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_proses');
					$info['sod'] = $query->result();
					$id_user = $info['user'][0]->id;
				}
				elseif($info['user'][0]->level=='manajemen'){
					$query = $this->db->get_where('rmtb_users', array('level'=>'analis')); //karena manajemen dapat menggantikan peran analis
					$info['analis'] = $query->result();
					$id_user = $info['analis'][0]->id;
					$query = $this->db->get('rmtb_proses');
					$info['proses'] = $query->result();
					$query = $this->db->get('rmtb_risiko_proses');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_proses');
					$info['sod'] = $query->result();
					$penilai_ada = 1;
				}elseif($info['user'][0]->level=='analis'){
					$id_user = $info['user'][0]->id;
					$query = $this->db->get('rmtb_proses');
					$info['proses'] = $query->result();
					$query = $this->db->get('rmtb_risiko_proses');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_proses');
					$info['sod'] = $query->result();
					$penilai_ada = 1;
				}
				if($penilai_ada == 1){
					$query = $this->db->get_where('rmtb_penilaian_proses', array('id_user'=>$id_user));
					$info['penilaian_proses'] = $query->result();
					if(!isset($info['penilaian_proses'][0]->id)){
						$info['belum_menilai'] = 1;
					}else{
						$info['belum_menilai'] = 0;
					}
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('proses_penilaian', $info);
					$this->load->view('footer', $info);
				}else{
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('penilai_tidak_dipilih');
					$this->load->view('footer', $info);
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function penilaian_produk()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				//bikin seperti tentukan_penilai
				$query = $this->db->get('rmtb_produk');
				$produk = $query->result();
				$penilai_ada = 0;
				if($info['user'][0]->level =='penilai'){
					$ke = 0;
					$id_produk_penilai[0]=0;
					foreach($produk as $p){
						if(strpos($p->penilai,$info['user'][0]->id.";")==true || (strpos($p->penilai,$info['user'][0]->id.";")==0 && substr($p->penilai,0,strlen($info['user'][0]->id.";")) == $info['user'][0]->id.";") || substr($p->penilai,-strlen($info['user'][0]->id)) == $info['user'][0]->id){
							$id_produk_penilai[$ke] = $p->id;
							$penilai_ada = 1;
							$ke++;
						}
					}
					$info['id_produk_penilai'] = $id_produk_penilai;
					$query = $this->db->get('rmtb_produk');
					$info['produk'] = $query->result();
					$query = $this->db->get('rmtb_risiko_produk');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_produk');
					$info['sod'] = $query->result();
					$id_user = $info['user'][0]->id;
				}
				elseif($info['user'][0]->level=='manajemen'){
					$query = $this->db->get_where('rmtb_users', array('level'=>'analis')); //karena manajemen dapat menggantikan peran analis
					$info['analis'] = $query->result();
					$id_user = $info['analis'][0]->id;
					$query = $this->db->get('rmtb_produk');
					$info['produk'] = $query->result();
					$query = $this->db->get('rmtb_risiko_produk');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_produk');
					$info['sod'] = $query->result();
					$penilai_ada = 1;
				}elseif($info['user'][0]->level=='analis'){
					$id_user = $info['user'][0]->id;
					$query = $this->db->get('rmtb_produk');
					$info['produk'] = $query->result();
					$query = $this->db->get('rmtb_risiko_produk');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_produk');
					$info['sod'] = $query->result();
					$penilai_ada = 1;
				}
				if($penilai_ada == 1){
					$query = $this->db->get_where('rmtb_penilaian_produk', array('id_user'=>$id_user));
					$info['penilaian_produk'] = $query->result();
					if(!isset($info['penilaian_produk'][0]->id)){
						$info['belum_menilai'] = 1;
					}else{
						$info['belum_menilai'] = 0;
					}
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('produk_penilaian', $info);
					$this->load->view('footer', $info);
				}else{
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('penilai_tidak_dipilih');
					$this->load->view('footer', $info);
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function edit_penilaian_proses_view()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$id_proses = $this->uri->segment('3');
				$id_risiko_proses = $this->uri->segment('4');
				$id_sod_proses = $this->uri->segment('6');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen' || ($info['user'][0]->level =='penilai' && $info['user'][0]->penilai_proses == 1)){
					$query = $this->db->get_where('rmtb_proses', array('id'=>$id_proses));
					$info['proses'] = $query->result();
					$query = $this->db->get_where('rmtb_risiko_proses', array('id'=>$id_risiko_proses,'id_proses'=>$id_proses));
					$info['risiko'] = $query->result();
					$query = $this->db->get_where('rmtb_sod_proses', array('id'=>$id_sod_proses));
					$info['sod'] = $query->result();
					$query = $this->db->get('rmtb_skala_dampak');
					$info['skala_dampak'] = $query->result();
					$query = $this->db->get('rmtb_skala_penyebab');
					$info['skala_penyebab'] = $query->result();
					$query = $this->db->get('rmtb_skala_metode_deteksi');
					$info['skala_metode_deteksi'] = $query->result();
					$query = $this->db->get_where('rmtb_penilaian_proses', array('id_user'=>$info['user'][0]->id));
					$info['penilaian_proses'] = $query->result();
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('proses_penilaian_edit', $info);
					$this->load->view('footer', $info);
				}else{
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('penilai_tidak_dipilih');
					$this->load->view('footer', $info);
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function edit_penilaian_proses()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$id_proses = $_POST['id_proses'];
				$id_risiko_proses = $_POST['id_risiko_proses'];
				$id_sod_proses = $_POST['id_sod_proses'];
				$sd = $_POST['sd'];
				$sp = $_POST['sp'];
				$smd = $_POST['smd'];
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen' || ($info['user'][0]->level =='penilai' && $info['user'][0]->penilai_proses == 1)){
					if($info['user'][0]->level=='manajemen'){
						$query = $this->db->get_where('rmtb_users', array('level'=>'analis')); //karena manajemen dapat menggantikan peran analis
						$info['analis'] = $query->result();
						$id_user = $info['analis'][0]->id;
					}else{
						$id_user = $info['user'][0]->id;
					}
					$data_cek = array(
						'id_user' => $id_user,
						'id_sod_proses' => $id_sod_proses
					);
					if($this->Home_Model->cek_nilai_sod_proses($data_cek) > 0){
						$query = $this->db->get_where('rmtb_penilaian_proses', array('id_user'=>$id_user,'id_sod_proses'=>$id_sod_proses));
						$rmtb_penilaian_proses = $query->result();
						$data = array(
							'nilai_s' => $sd,
							'nilai_o' => $sp,
							'nilai_d' => $smd
						);
						$this->Home_Model->update_penilaian_proses($data,$rmtb_penilaian_proses[0]->id);
						echo "berhasil";
					}else{
						$data = array(
							'id_user' => $id_user,
							'id_sod_proses' => $id_sod_proses,
							'nilai_s' => $sd,
							'nilai_o' => $sp,
							'nilai_d' => $smd
						);
						$this->Home_Model->insert_penilaian_proses($data);
						echo "berhasil";
					}
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function edit_penilaian_produk_view()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$id_produk = $this->uri->segment('3');
				$id_risiko_produk = $this->uri->segment('4');
				$id_sod_produk = $this->uri->segment('6');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen' || ($info['user'][0]->level =='penilai' && $info['user'][0]->penilai_produk == 1)){
					$query = $this->db->get_where('rmtb_produk', array('id'=>$id_produk));
					$info['produk'] = $query->result();
					$query = $this->db->get_where('rmtb_risiko_produk', array('id'=>$id_risiko_produk,'id_produk'=>$id_produk));
					$info['risiko'] = $query->result();
					$query = $this->db->get_where('rmtb_sod_produk', array('id'=>$id_sod_produk));
					$info['sod'] = $query->result();
					$query = $this->db->get('rmtb_skala_dampak');
					$info['skala_dampak'] = $query->result();
					$query = $this->db->get('rmtb_skala_penyebab');
					$info['skala_penyebab'] = $query->result();
					$query = $this->db->get('rmtb_skala_metode_deteksi');
					$info['skala_metode_deteksi'] = $query->result();
					$query = $this->db->get_where('rmtb_penilaian_produk', array('id_user'=>$info['user'][0]->id));
					$info['penilaian_produk'] = $query->result();
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('produk_penilaian_edit', $info);
					$this->load->view('footer', $info);
				}else{
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('penilai_tidak_dipilih');
					$this->load->view('footer', $info);
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function edit_penilaian_produk()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$id_produk = $_POST['id_produk'];
				$id_risiko_produk = $_POST['id_risiko_produk'];
				$id_sod_produk = $_POST['id_sod_produk'];
				$sd = $_POST['sd'];
				$sp = $_POST['sp'];
				$smd = $_POST['smd'];
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen' || ($info['user'][0]->level =='penilai' && $info['user'][0]->penilai_produk == 1)){
					if($info['user'][0]->level=='manajemen'){
						$query = $this->db->get_where('rmtb_users', array('level'=>'analis')); //karena manajemen dapat menggantikan peran analis
						$info['analis'] = $query->result();
						$id_user = $info['analis'][0]->id;
					}else{
						$id_user = $info['user'][0]->id;
					}
					$data_cek = array(
						'id_user' => $id_user,
						'id_sod_produk' => $id_sod_produk
					);
					if($this->Home_Model->cek_nilai_sod_produk($data_cek) > 0){
						$query = $this->db->get_where('rmtb_penilaian_produk', array('id_user'=>$id_user,'id_sod_produk'=>$id_sod_produk));
						$rmtb_penilaian_produk = $query->result();
						$data = array(
							'nilai_s' => $sd,
							'nilai_o' => $sp,
							'nilai_d' => $smd
						);
						$this->Home_Model->update_penilaian_produk($data,$rmtb_penilaian_produk[0]->id);
						echo "berhasil";
					}else{
						$data = array(
							'id_user' => $id_user,
							'id_sod_produk' => $id_sod_produk,
							'nilai_s' => $sd,
							'nilai_o' => $sp,
							'nilai_d' => $smd
						);
						$this->Home_Model->insert_penilaian_produk($data);
						echo "berhasil";
					}
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function combine_penilaian_proses()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			//copy isi tabel selera risiko ke selera risiko laporan
			$query = $this->db->get('rmtb_selera_risiko');
			$selera_risiko = $query->result();			
			foreach($selera_risiko as $sr){
				$query = $this->db->get_where('rmtb_selera_risiko_laporan',array('id'=>$sr->id));
				$selera_risiko_laporan = $query->result();
				foreach($selera_risiko_laporan as $srl){
					if($sr->id == $srl->id){
						$data_selera = array(
							'min' => $sr->min,
							'max' => $sr->max
						);
						$this->Home_Model->update_selera_risiko_laporan($data_selera,$sr->id);
					}
				}
			}
			//copy isi tabel skala severity ke skala severity laporan
			$query = $this->db->get('rmtb_skala_dampak');
			$skala_dampak = $query->result();			
			foreach($skala_dampak as $sd){
				$query = $this->db->get_where('rmtb_skala_dampak_laporan',array('id'=>$sd->id));
				$skala_dampak_laporan = $query->result();
				foreach($skala_dampak_laporan as $sdl){
					if($sd->id == $sdl->id){
						$data_dampak = array(
							'judul_proses' => $sd->judul_proses,
							'deskripsi_proses' => $sd->deskripsi_proses
						);
						$this->Home_Model->update_skala_dampak_laporan($data_dampak,$sd->id);
					}
				}
			}
			//copy isi tabel skala occurence ke skala occurence laporan
			$query = $this->db->get('rmtb_skala_penyebab');
			$skala_penyebab = $query->result();			
			foreach($skala_penyebab as $sp){
				$query = $this->db->get_where('rmtb_skala_penyebab_laporan',array('id'=>$sp->id));
				$skala_penyebab_laporan = $query->result();
				foreach($skala_penyebab_laporan as $spl){
					if($sp->id == $spl->id){
						$data_penyebab = array(
							'judul_proses' => $sd->judul_proses,
							'deskripsi_proses' => $sd->deskripsi_proses
						);
						$this->Home_Model->update_skala_penyebab_laporan($data_penyebab,$sp->id);
					}
				}
			}
			//copy isi tabel skala detection ke skala detection laporan
			$query = $this->db->get('rmtb_skala_metode_deteksi');
			$skala_metode_deteksi = $query->result();			
			foreach($skala_metode_deteksi as $smd){
				$query = $this->db->get_where('rmtb_skala_metode_deteksi_laporan',array('id'=>$smd->id));
				$skala_metode_deteksi_laporan = $query->result();
				foreach($skala_metode_deteksi_laporan as $smdl){
					if($smd->id == $smdl->id){
						$data_deteksi = array(
							'judul_proses' => $smd->judul_proses,
							'deskripsi_proses' => $smd->deskripsi_proses
						);
						$this->Home_Model->update_skala_metode_deteksi_laporan($data_deteksi,$smd->id);
					}
				}
			}
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen'){
					$query = $this->db->get('rmtb_proses');
					$info['proses'] = $query->result();
					$memenuhi = 1;
					foreach($info['proses'] as $p){
						$query = $this->db->get_where('rmtb_risiko_proses',array('id_proses'=>$p->id));
						$risiko = $query->result();
						foreach($risiko as $r){
							$query = $this->db->get_where('rmtb_sod_proses',array('id_risiko_proses'=>$r->id));
							$sod = $query->result();
							foreach($sod as $s){								
								$query = $this->db->get_where('rmtb_penilaian_proses',array('id_sod_proses'=>$s->id));
								$penilaian_proses = $query->result();
								
								//tambah filter jumlah penilai yg sdh menilai
								$jumlah_yg_sdh_menilai = count($penilaian_proses);
								$jumlah_yg_hrs_menilai = substr_count($p->penilai,";") + 2;
								if($jumlah_yg_sdh_menilai == $jumlah_yg_hrs_menilai && $memenuhi == 1){
									//simpan tanggal penilaian
									$data_penilaian = array(
										//'id_user' => $user[0]->id,
										'tanggal_penilaian' => date("d/m/Y")
									);
									$this->Home_Model->update_proses($data_penilaian,$p->id);
									$nilai_s = 1;
									$ave_s = 1;
									$nilai_o = 1;
									$ave_o = 1;
									$nilai_d = 1;
									$ave_d = 1;
									$banyak_penilai = 0;
									foreach($penilaian_proses as $pp){
										$nilai_s = $nilai_s * $pp->nilai_s;
										$nilai_o = $nilai_o * $pp->nilai_o;
										$nilai_d = $nilai_d * $pp->nilai_d;
										$banyak_penilai++;
									}
									if($banyak_penilai == 0){
										$banyak_penilai = 1;
									}
									$ave_s = pow($nilai_s,1/$banyak_penilai);
									$ave_o = pow($nilai_o,1/$banyak_penilai);
									$ave_d = pow($nilai_d,1/$banyak_penilai);
									$ave_s = round($ave_s,2); //round 2 AP
									$ave_o = round($ave_o,2); //round 2 AP
									$ave_d = round($ave_d,2); //round 2 AP
									$rpn = $ave_s * $ave_o * $ave_d;
									$rpn = round($rpn,2); //round 2 AP
									if($p->pembobotan_dipilih == 'langsung'){
										$ps = $p->ps_langsung;
										$po = $p->po_langsung;
										$pd = $p->pd_langsung;
									}else{
										$ps = $p->ps_ahp;
										$po = $p->po_ahp;
										$pd = $p->pd_ahp;
									}
									$api = "http://localhost:5000/fmea?ps=".$ps."&po=".$po."&pd=".$pd."&ns=".$ave_s."&no=".$ave_o."&nd=".$ave_d;
									// create curl resource 
									$ch = curl_init(); 
									 // set url 
									curl_setopt($ch, CURLOPT_URL, $api); 

									//return the transfer as a string 
									curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

									// $output contains the output string 
									if($p->pembobotan_dipilih == ""){
										$frpn = "<b style='color: red'>Periksa Pembobotan SOD!</b>"; 
									}else{
										$frpn = curl_exec($ch); 
										$frpn = round($frpn,2); //round 2 AP
									}

									// tutup curl 
									curl_close($ch);      
									
									if($selera_risiko[0]->min <= $frpn && $frpn <= $selera_risiko[0]->max){
										$keterangan =  $selera_risiko[0]->status;
									}elseif($selera_risiko[1]->min <= $frpn && $frpn <= $selera_risiko[1]->max){
										$keterangan =  $selera_risiko[1]->status;
									}elseif($selera_risiko[2]->min <= $frpn && $frpn <= $selera_risiko[2]->max){
										$keterangan =  $selera_risiko[2]->status;
									}

									// menampilkan hasil curl
									$data = array(
										'ave_s' => $ave_s,
										'ave_o' => $ave_o,
										'ave_d' => $ave_d,
										'rpn' => $rpn,
										'frpn' => $frpn,
										'keterangan' => $keterangan
									);
									$this->Home_Model->update_sod_proses($data,$s->id);
								}else{
									$memenuhi = 0;
								}								
								
							}
						}
					}
					if($memenuhi ==1){
						$info['page'] = $webkonten;
						$query = $this->db->get('rmtb_risiko_proses');
						$info['risiko'] = $query->result();
						$query = $this->db->get('rmtb_sod_proses');
						$info['sod'] = $query->result();	
						$this->load->view('header', $info);
						$this->load->view('sidebar', $info);
						$this->load->view('proses_penilaian_combine', $info);
						$this->load->view('footer', $info);
					}else{
						$info['page'] = $webkonten;
						$this->load->view('header', $info);
						$this->load->view('sidebar', $info);
						$this->load->view('penilai_belum_menilai', $info);
						$this->load->view('footer', $info);
					}
					
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function combine_penilaian_produk()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			//copy isi tabel selera risiko ke selera risiko laporan
			$query = $this->db->get('rmtb_selera_risiko');
			$selera_risiko = $query->result();			
			foreach($selera_risiko as $sr){
				$query = $this->db->get_where('rmtb_selera_risiko_laporan',array('id'=>$sr->id));
				$selera_risiko_laporan = $query->result();
				foreach($selera_risiko_laporan as $srl){
					if($sr->id == $srl->id){
						$data_selera = array(
							'min' => $sr->min,
							'max' => $sr->max
						);
						$this->Home_Model->update_selera_risiko_laporan($data_selera,$sr->id);
					}
				}
			}
			//copy isi tabel skala severity ke skala severity laporan
			$query = $this->db->get('rmtb_skala_dampak');
			$skala_dampak = $query->result();			
			foreach($skala_dampak as $sd){
				$query = $this->db->get_where('rmtb_skala_dampak_laporan',array('id'=>$sd->id));
				$skala_dampak_laporan = $query->result();
				foreach($skala_dampak_laporan as $sdl){
					if($sd->id == $sdl->id){
						$data_dampak = array(
							'judul_produk' => $sd->judul_produk,
							'deskripsi_produk' => $sd->deskripsi_produk
						);
						$this->Home_Model->update_skala_dampak_laporan($data_dampak,$sd->id);
					}
				}
			}
			//copy isi tabel skala occurence ke skala occurence laporan
			$query = $this->db->get('rmtb_skala_penyebab');
			$skala_penyebab = $query->result();			
			foreach($skala_penyebab as $sp){
				$query = $this->db->get_where('rmtb_skala_penyebab_laporan',array('id'=>$sp->id));
				$skala_penyebab_laporan = $query->result();
				foreach($skala_penyebab_laporan as $spl){
					if($sp->id == $spl->id){
						$data_penyebab = array(
							'judul_produk' => $sd->judul_produk,
							'deskripsi_produk' => $sd->deskripsi_produk
						);
						$this->Home_Model->update_skala_penyebab_laporan($data_penyebab,$sp->id);
					}
				}
			}
			//copy isi tabel skala detection ke skala detection laporan
			$query = $this->db->get('rmtb_skala_metode_deteksi');
			$skala_metode_deteksi = $query->result();			
			foreach($skala_metode_deteksi as $smd){
				$query = $this->db->get_where('rmtb_skala_metode_deteksi_laporan',array('id'=>$smd->id));
				$skala_metode_deteksi_laporan = $query->result();
				foreach($skala_metode_deteksi_laporan as $smdl){
					if($smd->id == $smdl->id){
						$data_deteksi = array(
							'judul_produk' => $smd->judul_produk,
							'deskripsi_produk' => $smd->deskripsi_produk
						);
						$this->Home_Model->update_skala_metode_deteksi_laporan($data_deteksi,$smd->id);
					}
				}
			}
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen'){
					$query = $this->db->get('rmtb_produk');
					$info['produk'] = $query->result();
					$memenuhi = 1;
					foreach($info['produk'] as $p){
						$query = $this->db->get_where('rmtb_risiko_produk',array('id_produk'=>$p->id));
						$risiko = $query->result();
						foreach($risiko as $r){
							$query = $this->db->get_where('rmtb_sod_produk',array('id_risiko_produk'=>$r->id));
							$sod = $query->result();
							foreach($sod as $s){								
								$query = $this->db->get_where('rmtb_penilaian_produk',array('id_sod_produk'=>$s->id));
								$penilaian_produk = $query->result();
								
								//tambah filter jumlah penilai yg sdh menilai
								$jumlah_yg_sdh_menilai = count($penilaian_produk);
								$jumlah_yg_hrs_menilai = substr_count($p->penilai,";") + 2;
								if($jumlah_yg_sdh_menilai == $jumlah_yg_hrs_menilai && $memenuhi == 1){
									//simpan tanggal penilaian
									$data_penilaian = array(
										//'id_user' => $user[0]->id,
										'tanggal_penilaian' => date("d/m/Y")
									);
									$this->Home_Model->update_produk($data_penilaian,$p->id);
									$nilai_s = 1;
									$ave_s = 1;
									$nilai_o = 1;
									$ave_o = 1;
									$nilai_d = 1;
									$ave_d = 1;
									$banyak_penilai = 0;
									foreach($penilaian_produk as $pp){
										$nilai_s = $nilai_s * $pp->nilai_s;
										$nilai_o = $nilai_o * $pp->nilai_o;
										$nilai_d = $nilai_d * $pp->nilai_d;
										$banyak_penilai++;
									}
									if($banyak_penilai == 0){
										$banyak_penilai = 1;
									}
									$ave_s = pow($nilai_s,1/$banyak_penilai);
									$ave_o = pow($nilai_o,1/$banyak_penilai);
									$ave_d = pow($nilai_d,1/$banyak_penilai);
									$ave_s = round($ave_s,2); //round 2 AP
									$ave_o = round($ave_o,2); //round 2 AP
									$ave_d = round($ave_d,2); //round 2 AP
									$rpn = $ave_s * $ave_o * $ave_d;
									$rpn = round($rpn,2); //round 2 AP
									if($p->pembobotan_dipilih == 'langsung'){
										$ps = $p->ps_langsung;
										$po = $p->po_langsung;
										$pd = $p->pd_langsung;
									}else{
										$ps = $p->ps_ahp;
										$po = $p->po_ahp;
										$pd = $p->pd_ahp;
									}
									$api = "http://localhost:5000/fmea?ps=".$ps."&po=".$po."&pd=".$pd."&ns=".$ave_s."&no=".$ave_o."&nd=".$ave_d;
									// create curl resource 
									$ch = curl_init(); 
									 // set url 
									curl_setopt($ch, CURLOPT_URL, $api); 

									//return the transfer as a string 
									curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

									// $output contains the output string 
									if($p->pembobotan_dipilih == ""){
										$frpn = "<b style='color: red'>Periksa Pembobotan SOD!</b>"; 
									}else{
										$frpn = curl_exec($ch); 
										$frpn = round($frpn,2); //round 2 AP
									}

									// tutup curl 
									curl_close($ch);      
									
									if($selera_risiko[0]->min <= $frpn && $frpn <= $selera_risiko[0]->max){
										$keterangan =  $selera_risiko[0]->status;
									}elseif($selera_risiko[1]->min <= $frpn && $frpn <= $selera_risiko[1]->max){
										$keterangan =  $selera_risiko[1]->status;
									}elseif($selera_risiko[2]->min <= $frpn && $frpn <= $selera_risiko[2]->max){
										$keterangan =  $selera_risiko[2]->status;
									}

									// menampilkan hasil curl
									$data = array(
										'ave_s' => $ave_s,
										'ave_o' => $ave_o,
										'ave_d' => $ave_d,
										'rpn' => $rpn,
										'frpn' => $frpn,
										'keterangan' => $keterangan
									);
									$this->Home_Model->update_sod_produk($data,$s->id);
								}else{
									$memenuhi = 0;
								}								
								
							}
						}
					}
					if($memenuhi ==1){
						$info['page'] = $webkonten;
						$query = $this->db->get('rmtb_risiko_produk');
						$info['risiko'] = $query->result();
						$query = $this->db->get('rmtb_sod_produk');
						$info['sod'] = $query->result();	
						$this->load->view('header', $info);
						$this->load->view('sidebar', $info);
						$this->load->view('produk_penilaian_combine', $info);
						$this->load->view('footer', $info);
					}else{
						$info['page'] = $webkonten;
						$this->load->view('header', $info);
						$this->load->view('sidebar', $info);
						$this->load->view('penilai_belum_menilai', $info);
						$this->load->view('footer', $info);
					}
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function cetak()
	{	require APPPATH."/third_party/fpdf/fpdf.php";
		require_once APPPATH."/third_party/fpdi/src/autoload.php";
		
		date_default_timezone_set("Asia/Jakarta");
		
		// Include autoloader 
		require_once APPPATH.'/third_party/dompdf/autoload.inc.php'; 
		 
		
		$this->db->order_by('id','ASC');
		$query = $this->db->get('rmtb_proses');
		$proses = $query->result();
		
		$this->db->order_by('id','ASC');
		$query = $this->db->get('rmtb_produk');
		$produk = $query->result();
		
		$query = $this->db->get_where('rmtb_users',array('level'=>'manajemen'));
		$manajemen = $query->result();
		$query = $this->db->get_where('rmtb_users',array('level'=>'analis'));
		$analis = $query->result();
		$query = $this->db->get_where('rmtb_users',array('level'=>'penilai'));
		$penilai = $query->result();
		$penilai_dipilih[0]=0;
		
		$ke = 0;
		foreach($penilai as $pe){
			foreach($proses as $p){
				if(strpos($p->penilai,$pe->id.";")==true || (strpos($p->penilai,$pe->id.";")==0 && substr($p->penilai,0,strlen($pe->id.";")) == $pe->id.";") || substr($p->penilai,-strlen($pe->id)) == $pe->id){
					$penilai_dipilih[$ke] = $pe->id;
					$ke++;
					break;
				}
			}
			foreach($produk as $p){
				if(strpos($p->penilai,$pe->id.";")==true || (strpos($p->penilai,$pe->id.";")==0 && substr($p->penilai,0,strlen($pe->id.";")) == $pe->id.";") || substr($p->penilai,-strlen($pe->id)) == $pe->id){
					$penilai_dipilih[$ke] = $pe->id;
					$ke++;
					break;
				}
			}
		}
		
		
		foreach($proses as $p){
			// Instantiate and use the dompdf class 
			$dompdf = new Dompdf();
			// Load content from html file 
			$html = file_get_contents(base_url()."/home/view_data_tabel_proses/".$p->id);
			$dompdf->loadHtml($html); 
			 
			// (Optional) Setup the paper size and orientation 
			$dompdf->setPaper('A4', 'landscape'); 
			 
			// Render the HTML as PDF 
			$dompdf->render(); 
			 
			// Output the generated PDF (1 = download and 0 = preview) 
			//$dompdf->stream("codexworld", array("Attachment" => 0));

			$output = $dompdf->output();
			file_put_contents('assets/laporan/tabel_proses'.$p->id.'.pdf', $output);
		}
		
		
		foreach($produk as $p){
			// Instantiate and use the dompdf class 
			$dompdf = new Dompdf();
			// Load content from html file 
			$html = file_get_contents(base_url()."/home/view_data_tabel_produk/".$p->id);
			$dompdf->loadHtml($html); 
			 
			// (Optional) Setup the paper size and orientation 
			$dompdf->setPaper('A4', 'landscape'); 
			 
			// Render the HTML as PDF 
			$dompdf->render(); 
			 
			// Output the generated PDF (1 = download and 0 = preview) 
			//$dompdf->stream("codexworld", array("Attachment" => 0));

			$output = $dompdf->output();
			file_put_contents('assets/laporan/tabel_produk'.$p->id.'.pdf', $output);
		}
		
		//buat pdf tabel framework part 1
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		// Load content from html file 
		$html = file_get_contents(base_url()."/home/view_data_tabel_framework1/");
		$dompdf->loadHtml($html); 
		 
		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'landscape'); 
		 
		// Render the HTML as PDF 
		$dompdf->render(); 
		 
		// Output the generated PDF (1 = download and 0 = preview) 
		//$dompdf->stream("codexworld", array("Attachment" => 0));

		$output = $dompdf->output();
		file_put_contents('assets/laporan/tabel_framework1.pdf', $output);
		
		//buat pdf tabel framework part 2
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		// Load content from html file 
		$html = file_get_contents(base_url()."/home/view_data_tabel_framework2/");
		$dompdf->loadHtml($html); 
		 
		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'landscape'); 
		 
		// Render the HTML as PDF 
		$dompdf->render(); 
		 
		// Output the generated PDF (1 = download and 0 = preview) 
		//$dompdf->stream("codexworld", array("Attachment" => 0));

		$output = $dompdf->output();
		file_put_contents('assets/laporan/tabel_framework2.pdf', $output);
		
		//buat pdf tabel framework part 3
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		// Load content from html file 
		$html = file_get_contents(base_url()."/home/view_data_tabel_framework3/");
		$dompdf->loadHtml($html); 
		 
		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'landscape'); 
		 
		// Render the HTML as PDF 
		$dompdf->render(); 
		 
		// Output the generated PDF (1 = download and 0 = preview) 
		//$dompdf->stream("codexworld", array("Attachment" => 0));

		$output = $dompdf->output();
		file_put_contents('assets/laporan/tabel_framework3.pdf', $output);


		$pdf = new Fpdi();
		// set the source file
		$pdf->setSourceFile('assets/laporan/cover_blank_clean.pdf');
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		$pdf->addPage('L');
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 0, 0, 297); //size: 210x297
		$pdf->SetFont('Times','B',11);
		$pdf->Ln(40); //bawah
		$pdf->Cell(2);//kanan
		$pdf->Cell(270,8.8,'PUSAT RISET TEKNOLOGI PENGUJIAN DAN STANDAR BRIN',0,0,'C');//dimensi text kasih , 1 untuk ada border, alignment: center
		$pdf->Image('assets/laporan/logobrin.png',134,70,23); //kolom x baris
		$pdf->SetFont('Times','',11);
		$pdf->Ln(53); //bawah
		$pdf->Cell(130);//kanan
		$pdf->Cell(70,9.4,$manajemen[0]->nama);//dimensi text kasih , 1 untuk ada border
		$pdf->Ln(4); //bawah
		$pdf->Cell(130);//kanan
		$pdf->Cell(70,11,$analis[0]->nama);//dimensi text kasih , 1 untuk ada border
		$pdf->Ln(4); //bawah
		$nama_ke = 1;
		foreach($penilai as $p){
			foreach($penilai_dipilih as $pd){
				if($p->id == $pd){
					$pdf->Ln(5); //bawah
					$pdf->Cell(128);//kanan
					$pdf->Cell(70,11,$nama_ke.'. '. $p->nama);//dimensi text kasih , 1 untuk ada border
					$nama_ke++;
					break;
				}
			}
		}
		$pdf->SetFont('Times','',14);
		$pdf->Ln(50); //bawah
		$pdf->Cell(2);//kanan
		$pdf->Cell(270,10,'Tangerang Selatan',0,0,'C');//dimensi text kasih , 1 untuk ada border, alignment: center
		$pdf->Ln(10); //bawah
		$pdf->Cell(2);//kanan
		$pdf->Cell(270,3,date('d/m/Y'),0,0,'C');//dimensi text kasih , 1 untuk ada border
		//tabel proses 
		foreach($proses as $pr){
			$pdf->setSourceFile('assets/laporan/laporan_awal_proses_blank.pdf');
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			$pdf->addPage('L');
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 0, 0, 297); //size: 210x297
			$pdf->SetFont('Times','',8);
			$pdf->Ln(28.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,8.5,'Pusat Riset Teknologi Pengujian dan Standar BRIN');//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,9.4,$manajemen[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.2); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,11,$analis[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Cell(68.5);//kanan
			$pdf->Cell(10,11,date('Y'));//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(0); //bawah
			$nama_ke = 1;
			foreach($penilai as $p){
				if(strpos($pr->penilai,$p->id.";")==true || (strpos($pr->penilai,$p->id.";")==0 && substr($pr->penilai,0,strlen($p->id.";")) == $p->id.";") || substr($pr->penilai,-strlen($p->id)) == $p->id){
					$pdf->Ln(4.9); //bawah
					$pdf->Cell(55.5);//kanan
					$pdf->Cell(70,11,$nama_ke.'. '. $p->nama);//dimensi text kasih , 1 untuk ada border
					if($nama_ke == 1){
						$pdf->Cell(68.5);//kanan
						$pdf->Cell(10,11,$pr->tanggal_penilaian);//dimensi text kasih , 1 untuk ada border
					}
					$nama_ke++;
				}
			}
			$pdf->setSourceFile('assets/laporan/tabel_proses'.$pr->id.'.pdf'); //load PDF dari HTML (DOMPDF)
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 8, 65, 297); //size: 210x297
		}
		
		//tabel produk 
		foreach($produk as $pr){
			$pdf->setSourceFile('assets/laporan/laporan_awal_produk_blank.pdf');
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			$pdf->addPage('L');
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 0, 0, 297); //size: 210x297
			$pdf->SetFont('Times','',8);
			$pdf->Ln(28.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,8.5,'Pusat Riset Teknologi Pengujian dan Standar BRIN');//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,9.4,$manajemen[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.2); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,11,$analis[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Cell(68.5);//kanan
			$pdf->Cell(10,11,date('Y'));//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(0); //bawah
			$nama_ke = 1;
			foreach($penilai as $p){
				if(strpos($pr->penilai,$p->id.";")==true || (strpos($pr->penilai,$p->id.";")==0 && substr($pr->penilai,0,strlen($p->id.";")) == $p->id.";") || substr($pr->penilai,-strlen($p->id)) == $p->id){
					$pdf->Ln(4.9); //bawah
					$pdf->Cell(55.5);//kanan
					$pdf->Cell(70,11,$nama_ke.'. '. $p->nama);//dimensi text kasih , 1 untuk ada border
					if($nama_ke == 1){
						$pdf->Cell(68.5);//kanan
						$pdf->Cell(10,11,$pr->tanggal_penilaian);//dimensi text kasih , 1 untuk ada border
					}
					$nama_ke++;
				}
			}
			$pdf->setSourceFile('assets/laporan/tabel_produk'.$pr->id.'.pdf'); //load PDF dari HTML (DOMPDF)
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 8, 65, 297); //size: 210x297
		}
		//tabel framework SOD part 1
		$pdf->addPage('L');
		$pdf->SetFont('Times','B',8);
		$pdf->Ln(8); //bawah
		$pdf->Cell(8);//kanan
		$pdf->Cell(70,8,'Lampiran Framework Risiko');//dimensi text kasih , 1 untuk ada border
		$pdf->setSourceFile('assets/laporan/tabel_framework1.pdf'); //load PDF dari HTML (DOMPDF)
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 8, 15, 297); //size: 210x297
		//tabel framework SOD part 2
		$pdf->addPage('L');
		$pdf->setSourceFile('assets/laporan/tabel_framework2.pdf'); //load PDF dari HTML (DOMPDF)
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 8, 8, 297); //size: 210x297
		//tabel framework SOD part 3
		$pdf->addPage('L');
		$pdf->setSourceFile('assets/laporan/tabel_framework3.pdf'); //load PDF dari HTML (DOMPDF)
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 8, 8, 297); //size: 210x297
		$namafile = 'assets/laporan/laporan_awal_'.date("Y-m-d-Hisu").'.pdf';
		$this->load->model('Home_Model');
		$data = array(
			'tanggal' => date("Y-m-d H:i:s"),
			'dokumen' => $namafile
		);
		$this->Home_Model->insert_riwayat_laporan_awal($data);
		$pdf->Output('F', $namafile);
		$pdf->Output('I', $namafile);
	}
	public function view_data_tabel_proses()
	{	$id = $this->uri->segment('3');
		$this->db->order_by('id','ASC');
		$query = $this->db->get_where('rmtb_proses',array('id'=>$id));
		$info['proses'] = $query->result();
		$query = $this->db->get('rmtb_risiko_proses');
		$info['risiko'] = $query->result();
		$this->db->order_by('frpn','DESC');
		$query = $this->db->get('rmtb_sod_proses');
		$info['sod'] = $query->result();
		$query = $this->db->get('rmtb_selera_risiko_laporan');
		$info['selera_risiko'] = $query->result();
		$this->load->view('proses_table', $info);
		
	}	
	public function view_data_tabel_produk()
	{	$id = $this->uri->segment('3');
		$this->db->order_by('id','ASC');
		$query = $this->db->get_where('rmtb_produk',array('id'=>$id));
		$info['produk'] = $query->result();
		$query = $this->db->get('rmtb_risiko_produk');
		$info['risiko'] = $query->result();
		$this->db->order_by('frpn','DESC');
		$query = $this->db->get('rmtb_sod_produk');
		$info['sod'] = $query->result();
		$query = $this->db->get('rmtb_selera_risiko_laporan');
		$info['selera_risiko'] = $query->result();
		$this->load->view('produk_table', $info);
		
	}
	public function view_data_tabel_framework1()
	{	$query = $this->db->get('rmtb_skala_dampak_laporan'); //diganti sbg pengganti disable
		$info['skala_dampak'] = $query->result();
		$query = $this->db->get('rmtb_skala_penyebab_laporan');
		$info['skala_penyebab'] = $query->result();
		$query = $this->db->get('rmtb_skala_metode_deteksi_laporan');
		$info['skala_metode_deteksi'] = $query->result();
		$query = $this->db->get('rmtb_selera_risiko_laporan');
		$info['selera_risiko'] = $query->result();
		$this->load->view('framework_table', $info);
		
	}	
	public function view_data_tabel_framework2()
	{	$query = $this->db->get('rmtb_skala_dampak_laporan'); //diganti sbg pengganti disable
		$info['skala_dampak'] = $query->result();
		$query = $this->db->get('rmtb_skala_penyebab_laporan');
		$info['skala_penyebab'] = $query->result();
		$query = $this->db->get('rmtb_skala_metode_deteksi_laporan');
		$info['skala_metode_deteksi'] = $query->result();
		$query = $this->db->get('rmtb_selera_risiko_laporan');
		$info['selera_risiko'] = $query->result();
		$this->load->view('framework_table2', $info);
		
	}
	public function view_data_tabel_framework3()
	{	$query = $this->db->get('rmtb_skala_dampak_laporan'); //diganti sbg pengganti disable
		$info['skala_dampak'] = $query->result();
		$query = $this->db->get('rmtb_skala_penyebab_laporan');
		$info['skala_penyebab'] = $query->result();
		$query = $this->db->get('rmtb_skala_metode_deteksi_laporan');
		$info['skala_metode_deteksi'] = $query->result();
		$query = $this->db->get('rmtb_selera_risiko_laporan');
		$info['selera_risiko'] = $query->result();
		$this->load->view('framework_table3', $info);
		
	}
	public function resume_penilaian_proses()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen'){
					$this->db->order_by('id','ASC');
					$query = $this->db->get('rmtb_proses');
					$info['proses'] = $query->result();
					$query = $this->db->get('rmtb_risiko_proses');
					$info['risiko'] = $query->result();
					$this->db->order_by('frpn','DESC');
					$query = $this->db->get('rmtb_sod_proses');
					$info['sod'] = $query->result();
					$query = $this->db->get('rmtb_selera_risiko_laporan');
					$info['selera_risiko'] = $query->result();	
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('proses_penilaian_resume', $info);
					$this->load->view('footer', $info);
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function resume_penilaian_produk()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen'){
					$this->db->order_by('id','ASC');
					$query = $this->db->get('rmtb_produk');
					$info['produk'] = $query->result();
					$query = $this->db->get('rmtb_risiko_produk');
					$info['risiko'] = $query->result();
					$this->db->order_by('frpn','DESC');
					$query = $this->db->get('rmtb_sod_produk');
					$info['sod'] = $query->result();
					$query = $this->db->get('rmtb_selera_risiko_laporan');
					$info['selera_risiko'] = $query->result();	
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('produk_penilaian_resume', $info);
					$this->load->view('footer', $info);
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function mitigasi_sod_proses_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_proses = $this->uri->segment('3');
				$id_risiko = $this->uri->segment('4');
				$id_sod_proses = $this->uri->segment('7');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_proses,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_proses));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id"=>$id_risiko,"id_proses"=>$id_proses));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_sod_'.$webkonten,array("id"=>$id_sod_proses,'id_risiko_'.$webkonten=>$id_risiko));
				$info['sod'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('proses_sod_mitigasi', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function mitigasi_sod_proses()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_sod_proses= $_POST['id_sod_proses'];
		$id_risiko_proses= $_POST['id_risiko_proses'];
		$usulan_tindakan= $_POST['usulan_tindakan'];
		$penanggung_jawab= $_POST['penanggung_jawab'];
		$tanggal_target= $_POST['tanggal_target'];
		$tindakan_perbaikan= $_POST['tindakan_perbaikan'];
		$id_proses= $_POST['id_proses'];
		$query = $this->db->get_where('rmtb_proses',array("id"=>$id_proses));
		$proses = $query->result();
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if(($info['level'] == 'analis' && $user[0]->id == $proses[0]->id_user) || $info['level'] == 'manajemen'){
				$data = array(
					'usulan_tindakan' => $usulan_tindakan,
					'penanggung_jawab' => $penanggung_jawab,
					'tanggal_target' => $tanggal_target,
					'tindakan_perbaikan' => $tindakan_perbaikan
				);
				$this->Home_Model->update_sod_proses($data,$id_sod_proses);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function mitigasi_sod_produk_view()
	{
		$username 	= $this->session->userdata('username');
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$id_produk = $this->uri->segment('3');
				$id_risiko = $this->uri->segment('4');
				$id_sod_produk = $this->uri->segment('7');
				//$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_produk,"id_user"=>$user[0]->id));
				$query = $this->db->get_where('rmtb_'.$webkonten,array("id"=>$id_produk));
				$info['ident_risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_risiko_'.$webkonten,array("id"=>$id_risiko,"id_produk"=>$id_produk));
				$info['risiko'] = $query->result();
				$query = $this->db->get_where('rmtb_sod_'.$webkonten,array("id"=>$id_sod_produk,'id_risiko_'.$webkonten=>$id_risiko));
				$info['sod'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('produk_sod_mitigasi', $info);
				$this->load->view('footer', $info);
			}
		}else{
			redirect('');
		}
	}
	public function mitigasi_sod_produk()
	{
		$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		$id_sod_produk= $_POST['id_sod_produk'];
		$id_risiko_produk= $_POST['id_risiko_produk'];
		$usulan_tindakan= $_POST['usulan_tindakan'];
		$penanggung_jawab= $_POST['penanggung_jawab'];
		$tanggal_target= $_POST['tanggal_target'];
		$tindakan_perbaikan= $_POST['tindakan_perbaikan'];
		$id_produk= $_POST['id_produk'];
		$query = $this->db->get_where('rmtb_produk',array("id"=>$id_produk));
		$produk = $query->result();
		$query = $this->db->get_where('rmtb_users',array("username"=>$username));
		$user = $query->result();
		if(isset($username) && ($username !== '')){
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if(($info['level'] == 'analis' && $user[0]->id == $produk[0]->id_user) || $info['level'] == 'manajemen'){
				$data = array(
					'usulan_tindakan' => $usulan_tindakan,
					'penanggung_jawab' => $penanggung_jawab,
					'tanggal_target' => $tanggal_target,
					'tindakan_perbaikan' => $tindakan_perbaikan
				);
				$this->Home_Model->update_sod_produk($data,$id_sod_produk);
				echo "berhasil";
			}
		}else{
			redirect('');
		}
	}
	public function cetak_mitigasi()
	{	require APPPATH."/third_party/fpdf/fpdf.php";
		require_once APPPATH."/third_party/fpdi/src/autoload.php";
		
		date_default_timezone_set("Asia/Jakarta");
		
		// Include autoloader 
		require_once APPPATH.'/third_party/dompdf/autoload.inc.php'; 
		 
		
		$this->db->order_by('id','ASC');
		$query = $this->db->get('rmtb_proses');
		$proses = $query->result();
		
		$this->db->order_by('id','ASC');
		$query = $this->db->get('rmtb_produk');
		$produk = $query->result();
		
		$query = $this->db->get_where('rmtb_users',array('level'=>'manajemen'));
		$manajemen = $query->result();
		$query = $this->db->get_where('rmtb_users',array('level'=>'analis'));
		$analis = $query->result();
		$query = $this->db->get_where('rmtb_users',array('level'=>'penilai'));
		$penilai = $query->result();
		$penilai_dipilih[0]=0;
		
		$ke = 0;
		foreach($penilai as $pe){
			foreach($proses as $p){
				if(strpos($p->penilai,$pe->id.";")==true || (strpos($p->penilai,$pe->id.";")==0 && substr($p->penilai,0,strlen($pe->id.";")) == $pe->id.";") || substr($p->penilai,-strlen($pe->id)) == $pe->id){
					$penilai_dipilih[$ke] = $pe->id;
					$ke++;
					break;
				}
			}
			foreach($produk as $p){
				if(strpos($p->penilai,$pe->id.";")==true || (strpos($p->penilai,$pe->id.";")==0 && substr($p->penilai,0,strlen($pe->id.";")) == $pe->id.";") || substr($p->penilai,-strlen($pe->id)) == $pe->id){
					$penilai_dipilih[$ke] = $pe->id;
					$ke++;
					break;
				}
			}
		}
		
		
		foreach($proses as $p){
			// Instantiate and use the dompdf class 
			$dompdf = new Dompdf();
			// Load content from html file 
			$html = file_get_contents(base_url()."/home/view_data_tabel_mitigasi_proses/".$p->id);
			$dompdf->loadHtml($html); 
			 
			// (Optional) Setup the paper size and orientation 
			$dompdf->setPaper('A4', 'landscape'); 
			 
			// Render the HTML as PDF 
			$dompdf->render(); 
			 
			// Output the generated PDF (1 = download and 0 = preview) 
			//$dompdf->stream("codexworld", array("Attachment" => 0));

			$output = $dompdf->output();
			file_put_contents('assets/laporan/tabel_mitigasi_proses'.$p->id.'.pdf', $output);
		}
		
		
		foreach($produk as $p){
			// Instantiate and use the dompdf class 
			$dompdf = new Dompdf();
			// Load content from html file 
			$html = file_get_contents(base_url()."/home/view_data_tabel_mitigasi_produk/".$p->id);
			$dompdf->loadHtml($html); 
			 
			// (Optional) Setup the paper size and orientation 
			$dompdf->setPaper('A4', 'landscape'); 
			 
			// Render the HTML as PDF 
			$dompdf->render(); 
			 
			// Output the generated PDF (1 = download and 0 = preview) 
			//$dompdf->stream("codexworld", array("Attachment" => 0));

			$output = $dompdf->output();
			file_put_contents('assets/laporan/tabel_mitigasi_produk'.$p->id.'.pdf', $output);
		}
		
		//buat pdf tabel framework part 1
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		// Load content from html file 
		$html = file_get_contents(base_url()."/home/view_data_tabel_framework1/");
		$dompdf->loadHtml($html); 
		 
		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'landscape'); 
		 
		// Render the HTML as PDF 
		$dompdf->render(); 
		 
		// Output the generated PDF (1 = download and 0 = preview) 
		//$dompdf->stream("codexworld", array("Attachment" => 0));

		$output = $dompdf->output();
		file_put_contents('assets/laporan/tabel_framework1.pdf', $output);
		
		//buat pdf tabel framework part 2
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		// Load content from html file 
		$html = file_get_contents(base_url()."/home/view_data_tabel_framework2/");
		$dompdf->loadHtml($html); 
		 
		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'landscape'); 
		 
		// Render the HTML as PDF 
		$dompdf->render(); 
		 
		// Output the generated PDF (1 = download and 0 = preview) 
		//$dompdf->stream("codexworld", array("Attachment" => 0));

		$output = $dompdf->output();
		file_put_contents('assets/laporan/tabel_framework2.pdf', $output);
		
		//buat pdf tabel framework part 3
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		// Load content from html file 
		$html = file_get_contents(base_url()."/home/view_data_tabel_framework3/");
		$dompdf->loadHtml($html); 
		 
		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'landscape'); 
		 
		// Render the HTML as PDF 
		$dompdf->render(); 
		 
		// Output the generated PDF (1 = download and 0 = preview) 
		//$dompdf->stream("codexworld", array("Attachment" => 0));

		$output = $dompdf->output();
		file_put_contents('assets/laporan/tabel_framework3.pdf', $output);


		$pdf = new Fpdi();
		// set the source file
		$pdf->setSourceFile('assets/laporan/cover_blank_clean.pdf');
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		$pdf->addPage('L');
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 0, 0, 297); //size: 210x297
		$pdf->SetFont('Times','B',11);
		$pdf->Ln(40); //bawah
		$pdf->Cell(2);//kanan
		$pdf->Cell(270,8.8,'PUSAT RISET TEKNOLOGI PENGUJIAN DAN STANDAR BRIN',0,0,'C');//dimensi text kasih , 1 untuk ada border, alignment: center
		$pdf->Image('assets/laporan/logobrin.png',134,70,23); //kolom x baris
		$pdf->SetFont('Times','',11);
		$pdf->Ln(53); //bawah
		$pdf->Cell(130);//kanan
		$pdf->Cell(70,9.4,$manajemen[0]->nama);//dimensi text kasih , 1 untuk ada border
		$pdf->Ln(4); //bawah
		$pdf->Cell(130);//kanan
		$pdf->Cell(70,11,$analis[0]->nama);//dimensi text kasih , 1 untuk ada border
		$pdf->Ln(4); //bawah
		$nama_ke = 1;
		foreach($penilai as $p){
			foreach($penilai_dipilih as $pd){
				if($p->id == $pd){
					$pdf->Ln(5); //bawah
					$pdf->Cell(128);//kanan
					$pdf->Cell(70,11,$nama_ke.'. '. $p->nama);//dimensi text kasih , 1 untuk ada border
					$nama_ke++;
					break;
				}
			}
		}
		$pdf->SetFont('Times','',14);
		$pdf->Ln(50); //bawah
		$pdf->Cell(2);//kanan
		$pdf->Cell(270,10,'Tangerang Selatan',0,0,'C');//dimensi text kasih , 1 untuk ada border, alignment: center
		$pdf->Ln(10); //bawah
		$pdf->Cell(2);//kanan
		$pdf->Cell(270,3,date('d/m/Y'),0,0,'C');//dimensi text kasih , 1 untuk ada border
		//tabel proses 
		foreach($proses as $pr){
			$pdf->setSourceFile('assets/laporan/laporan_penilaian_risiko_mitigasi_proses.pdf');
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			$pdf->addPage('L');
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 0, 0, 297); //size: 210x297
			$pdf->SetFont('Times','',8);
			$pdf->Ln(28.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,8.5,'Pusat Riset Teknologi Pengujian dan Standar BRIN');//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,9.4,$manajemen[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.2); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,11,$analis[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Cell(68.5);//kanan
			$pdf->Cell(10,11,date('Y'));//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(0); //bawah
			$nama_ke = 1;
			foreach($penilai as $p){
				if(strpos($pr->penilai,$p->id.";")==true || (strpos($pr->penilai,$p->id.";")==0 && substr($pr->penilai,0,strlen($p->id.";")) == $p->id.";") || substr($pr->penilai,-strlen($p->id)) == $p->id){
					$pdf->Ln(4.9); //bawah
					$pdf->Cell(55.5);//kanan
					$pdf->Cell(70,11,$nama_ke.'. '. $p->nama);//dimensi text kasih , 1 untuk ada border
					if($nama_ke == 1){
						$pdf->Cell(68.5);//kanan
						$pdf->Cell(10,11,$pr->tanggal_penilaian);//dimensi text kasih , 1 untuk ada border
					}
					$nama_ke++;
				}
			}
			$pdf->setSourceFile('assets/laporan/tabel_mitigasi_proses'.$pr->id.'.pdf'); //load PDF dari HTML (DOMPDF)
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 8, 65, 297); //size: 210x297
		}
		
		//tabel produk 
		foreach($produk as $pr){
			$pdf->setSourceFile('assets/laporan/laporan_penilaian_risiko_mitigasi_produk.pdf');
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			$pdf->addPage('L');
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 0, 0, 297); //size: 210x297
			$pdf->SetFont('Times','',8);
			$pdf->Ln(28.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,8.5,'Pusat Riset Teknologi Pengujian dan Standar BRIN');//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,9.4,$manajemen[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.2); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,11,$analis[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Cell(68.5);//kanan
			$pdf->Cell(10,11,date('Y'));//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(0); //bawah
			$nama_ke = 1;
			foreach($penilai as $p){
				if(strpos($pr->penilai,$p->id.";")==true || (strpos($pr->penilai,$p->id.";")==0 && substr($pr->penilai,0,strlen($p->id.";")) == $p->id.";") || substr($pr->penilai,-strlen($p->id)) == $p->id){
					$pdf->Ln(4.9); //bawah
					$pdf->Cell(55.5);//kanan
					$pdf->Cell(70,11,$nama_ke.'. '. $p->nama);//dimensi text kasih , 1 untuk ada border
					if($nama_ke == 1){
						$pdf->Cell(68.5);//kanan
						$pdf->Cell(10,11,$pr->tanggal_penilaian);//dimensi text kasih , 1 untuk ada border
					}
					$nama_ke++;
				}
			}
			$pdf->setSourceFile('assets/laporan/tabel_mitigasi_produk'.$pr->id.'.pdf'); //load PDF dari HTML (DOMPDF)
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 8, 65, 297); //size: 210x297
		}
		//tabel framework SOD part 1
		$pdf->addPage('L');
		$pdf->SetFont('Times','B',8);
		$pdf->Ln(8); //bawah
		$pdf->Cell(8);//kanan
		$pdf->Cell(70,8,'Lampiran Framework Risiko');//dimensi text kasih , 1 untuk ada border
		$pdf->setSourceFile('assets/laporan/tabel_framework1.pdf'); //load PDF dari HTML (DOMPDF)
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 8, 15, 297); //size: 210x297
		//tabel framework SOD part 2
		$pdf->addPage('L');
		$pdf->setSourceFile('assets/laporan/tabel_framework2.pdf'); //load PDF dari HTML (DOMPDF)
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 8, 8, 297); //size: 210x297
		$pdf->addPage('L');
		$pdf->setSourceFile('assets/laporan/tabel_framework3.pdf'); //load PDF dari HTML (DOMPDF)
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 8, 8, 297); //size: 210x297

		$namafile = 'assets/laporan/laporan_mitigasi_'.date("Y-m-d-Hisu").'.pdf';
		$this->load->model('Home_Model');
		$data = array(
			'tanggal' => date("Y-m-d H:i:s"),
			'dokumen' => $namafile
		);
		$this->Home_Model->insert_riwayat_laporan_mitigsi($data);
		$pdf->Output('F', $namafile);
		$pdf->Output('I', $namafile);
	}
	public function view_data_tabel_mitigasi_proses()
	{	$id = $this->uri->segment('3');
		$this->db->order_by('id','ASC');
		$query = $this->db->get_where('rmtb_proses',array('id'=>$id));
		$info['proses'] = $query->result();
		$query = $this->db->get('rmtb_risiko_proses');
		$info['risiko'] = $query->result();
		$this->db->order_by('frpn','DESC');
		$query = $this->db->get('rmtb_sod_proses');
		$info['sod'] = $query->result();
		$query = $this->db->get('rmtb_selera_risiko_laporan');
		$info['selera_risiko'] = $query->result();
		$this->load->view('proses_table_mitigasi', $info);
		
	}	
	public function view_data_tabel_mitigasi_produk()
	{	$id = $this->uri->segment('3');
		$this->db->order_by('id','ASC');
		$query = $this->db->get_where('rmtb_produk',array('id'=>$id));
		$info['produk'] = $query->result();
		$query = $this->db->get('rmtb_risiko_produk');
		$info['risiko'] = $query->result();
		$this->db->order_by('frpn','DESC');
		$query = $this->db->get('rmtb_sod_produk');
		$info['sod'] = $query->result();
		$query = $this->db->get('rmtb_selera_risiko_laporan');
		$info['selera_risiko'] = $query->result();
		$this->load->view('produk_table_mitigasi', $info);
		
	}
	public function cetak_total()
	{	require APPPATH."/third_party/fpdf/fpdf.php";
		require_once APPPATH."/third_party/fpdi/src/autoload.php";
		
		date_default_timezone_set("Asia/Jakarta");
		
		// Include autoloader 
		require_once APPPATH.'/third_party/dompdf/autoload.inc.php'; 
		 
		
		$this->db->order_by('id','ASC');
		$query = $this->db->get('rmtb_proses');
		$proses = $query->result();
		
		$this->db->order_by('id','ASC');
		$query = $this->db->get('rmtb_produk');
		$produk = $query->result();
		
		$query = $this->db->get_where('rmtb_users',array('level'=>'manajemen'));
		$manajemen = $query->result();
		$query = $this->db->get_where('rmtb_users',array('level'=>'analis'));
		$analis = $query->result();
		$query = $this->db->get_where('rmtb_users',array('level'=>'penilai'));
		$penilai = $query->result();
		$penilai_dipilih[0]=0;
		
		$ke = 0;
		foreach($penilai as $pe){
			foreach($proses as $p){
				if(strpos($p->penilai,$pe->id.";")==true || (strpos($p->penilai,$pe->id.";")==0 && substr($p->penilai,0,strlen($pe->id.";")) == $pe->id.";") || substr($p->penilai,-strlen($pe->id)) == $pe->id){
					$penilai_dipilih[$ke] = $pe->id;
					$ke++;
					break;
				}
			}
			foreach($produk as $p){
				if(strpos($p->penilai,$pe->id.";")==true || (strpos($p->penilai,$pe->id.";")==0 && substr($p->penilai,0,strlen($pe->id.";")) == $pe->id.";") || substr($p->penilai,-strlen($pe->id)) == $pe->id){
					$penilai_dipilih[$ke] = $pe->id;
					$ke++;
					break;
				}
			}
		}
		
		
		foreach($proses as $p){
			// Instantiate and use the dompdf class 
			$dompdf = new Dompdf();
			// Load content from html file 
			$html = file_get_contents(base_url()."/home/view_data_tabel_total_proses/".$p->id);
			$dompdf->loadHtml($html); 
			 
			// (Optional) Setup the paper size and orientation 
			$dompdf->setPaper('Tabloid', 'landscape'); 
			 
			// Render the HTML as PDF 
			$dompdf->render(); 
			 
			// Output the generated PDF (1 = download and 0 = preview) 
			//$dompdf->stream("codexworld", array("Attachment" => 0));

			$output = $dompdf->output();
			file_put_contents('assets/laporan/tabel_total_proses'.$p->id.'.pdf', $output);
		}
		
		
		foreach($produk as $p){
			// Instantiate and use the dompdf class 
			$dompdf = new Dompdf();
			// Load content from html file 
			$html = file_get_contents(base_url()."/home/view_data_tabel_total_produk/".$p->id);
			$dompdf->loadHtml($html); 
			 
			// (Optional) Setup the paper size and orientation 
			$dompdf->setPaper('Tabloid', 'landscape'); 
			 
			// Render the HTML as PDF 
			$dompdf->render(); 
			 
			// Output the generated PDF (1 = download and 0 = preview) 
			//$dompdf->stream("codexworld", array("Attachment" => 0));

			$output = $dompdf->output();
			file_put_contents('assets/laporan/tabel_total_produk'.$p->id.'.pdf', $output);
		}
		
		//buat pdf tabel framework part 1
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		// Load content from html file 
		$html = file_get_contents(base_url()."/home/view_data_tabel_framework1/");
		$dompdf->loadHtml($html); 
		 
		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'landscape'); 
		 
		// Render the HTML as PDF 
		$dompdf->render(); 
		 
		// Output the generated PDF (1 = download and 0 = preview) 
		//$dompdf->stream("codexworld", array("Attachment" => 0));

		$output = $dompdf->output();
		file_put_contents('assets/laporan/tabel_framework1.pdf', $output);
		
		//buat pdf tabel framework part 2
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		// Load content from html file 
		$html = file_get_contents(base_url()."/home/view_data_tabel_framework2/");
		$dompdf->loadHtml($html); 
		 
		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'landscape'); 
		 
		// Render the HTML as PDF 
		$dompdf->render(); 
		 
		// Output the generated PDF (1 = download and 0 = preview) 
		//$dompdf->stream("codexworld", array("Attachment" => 0));

		$output = $dompdf->output();
		file_put_contents('assets/laporan/tabel_framework2.pdf', $output);
		
		//buat pdf tabel framework part 3
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		// Load content from html file 
		$html = file_get_contents(base_url()."/home/view_data_tabel_framework3/");
		$dompdf->loadHtml($html); 
		 
		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'landscape'); 
		 
		// Render the HTML as PDF 
		$dompdf->render(); 
		 
		// Output the generated PDF (1 = download and 0 = preview) 
		//$dompdf->stream("codexworld", array("Attachment" => 0));

		$output = $dompdf->output();
		file_put_contents('assets/laporan/tabel_framework3.pdf', $output);


		$pdf = new Fpdi();
		// set the source file
		$pdf->setSourceFile('assets/laporan/cover_blank_clean.pdf');
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		$pdf->addPage('L');
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 0, 0, 297); //size: 210x297
		$pdf->SetFont('Times','B',11);
		$pdf->Ln(40); //bawah
		$pdf->Cell(2);//kanan
		$pdf->Cell(270,8.8,'PUSAT RISET TEKNOLOGI PENGUJIAN DAN STANDAR BRIN',0,0,'C');//dimensi text kasih , 1 untuk ada border, alignment: center
		$pdf->Image('assets/laporan/logobrin.png',134,70,23); //kolom x baris
		$pdf->SetFont('Times','',11);
		$pdf->Ln(53); //bawah
		$pdf->Cell(130);//kanan
		$pdf->Cell(70,9.4,$manajemen[0]->nama);//dimensi text kasih , 1 untuk ada border
		$pdf->Ln(4); //bawah
		$pdf->Cell(130);//kanan
		$pdf->Cell(70,11,$analis[0]->nama);//dimensi text kasih , 1 untuk ada border
		$pdf->Ln(4); //bawah
		$nama_ke = 1;
		foreach($penilai as $p){
			foreach($penilai_dipilih as $pd){
				if($p->id == $pd){
					$pdf->Ln(5); //bawah
					$pdf->Cell(128);//kanan
					$pdf->Cell(70,11,$nama_ke.'. '. $p->nama);//dimensi text kasih , 1 untuk ada border
					$nama_ke++;
					break;
				}
			}
		}
		$pdf->SetFont('Times','',14);
		$pdf->Ln(50); //bawah
		$pdf->Cell(2);//kanan
		$pdf->Cell(270,10,'Tangerang Selatan',0,0,'C');//dimensi text kasih , 1 untuk ada border, alignment: center
		$pdf->Ln(10); //bawah
		$pdf->Cell(2);//kanan
		$pdf->Cell(270,3,date('d/m/Y'),0,0,'C');//dimensi text kasih , 1 untuk ada border
		//tabel proses 
		foreach($proses as $pr){
			$pdf->setSourceFile('assets/laporan/rekapitulasi_laporan_penilaian_risiko_proses.pdf');
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			$pdf->addPage('L');
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 0, 0, 297); //size: 210x297
			$pdf->SetFont('Times','',8);
			$pdf->Ln(28.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,8.5,'Pusat Riset Teknologi Pengujian dan Standar BRIN');//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,9.4,$manajemen[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.2); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,11,$analis[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Cell(68.5);//kanan
			$pdf->Cell(10,11,date('Y'));//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(0); //bawah
			$nama_ke = 1;
			$cek_nama_ke = 0;
			foreach($penilai as $p){
				if(strpos($pr->penilai,$p->id.";")==true || (strpos($pr->penilai,$p->id.";")==0 && substr($pr->penilai,0,strlen($p->id.";")) == $p->id.";") || substr($pr->penilai,-strlen($p->id)) == $p->id){
					$pdf->Ln(4.9); //bawah
					$pdf->Cell(55.5);//kanan
					$pdf->Cell(70,11,$nama_ke.'. '. $p->nama);//dimensi text kasih , 1 untuk ada border
					if($nama_ke == 1){
						$pdf->Cell(68.5);//kanan
						$pdf->Cell(10,11,$pr->tanggal_penilaian);//dimensi text kasih , 1 untuk ada border
					}elseif($nama_ke == 2){
						$pdf->Cell(68.5);//kanan
						$pdf->Cell(10,11,$pr->tanggal_evaluasi);//dimensi text kasih , 1 untuk ada border
					}
					$nama_ke++;
					$cek_nama_ke++;
				}
			}
			if($nama_ke == 1){
				$pdf->Ln(4.9); //bawah
				$pdf->Cell(194);//kanan: 55.5+70+68.5 = 194
				$pdf->Cell(10,11,$pr->tanggal_penilaian);//dimensi text kasih , 1 untuk ada border
				$pdf->Ln(4.9); //bawah
				$pdf->Cell(194);//kanan: 55.5+70+68.5 = 194
				$pdf->Cell(10,11,$pr->tanggal_evaluasi);//dimensi text kasih , 1 untuk ada border
			}
			if($nama_ke == 2){
				$pdf->Ln(4.9); //bawah
				$pdf->Cell(194);//kanan: 55.5+70+68.5 = 194
				$pdf->Cell(10,11,$pr->tanggal_evaluasi);//dimensi text kasih , 1 untuk ada border
			}
			$pdf->setSourceFile('assets/laporan/tabel_total_proses'.$pr->id.'.pdf'); //load PDF dari HTML (DOMPDF)
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 0, 65, 297); //size: 210x297
		}
		
		//tabel produk 
		foreach($produk as $pr){
			$pdf->setSourceFile('assets/laporan/rekapitulasi_laporan_penilaian_risiko_produk.pdf');
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			$pdf->addPage('L');
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 0, 0, 297); //size: 210x297
			$pdf->SetFont('Times','',8);
			$pdf->Ln(28.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,8.5,'Pusat Riset Teknologi Pengujian dan Standar BRIN');//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.5); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,9.4,$manajemen[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(4.2); //bawah
			$pdf->Cell(55.5);//kanan
			$pdf->Cell(70,11,$analis[0]->nama);//dimensi text kasih , 1 untuk ada border
			$pdf->Cell(68.5);//kanan
			$pdf->Cell(10,11,date('Y'));//dimensi text kasih , 1 untuk ada border
			$pdf->Ln(0); //bawah
			$nama_ke = 1;
			foreach($penilai as $p){
				if(strpos($pr->penilai,$p->id.";")==true || (strpos($pr->penilai,$p->id.";")==0 && substr($pr->penilai,0,strlen($p->id.";")) == $p->id.";") || substr($pr->penilai,-strlen($p->id)) == $p->id){
					$pdf->Ln(4.9); //bawah
					$pdf->Cell(55.5);//kanan
					$pdf->Cell(70,11,$nama_ke.'. '. $p->nama);//dimensi text kasih , 1 untuk ada border
					if($nama_ke == 1){
						$pdf->Cell(68.5);//kanan
						$pdf->Cell(10,11,$pr->tanggal_penilaian);//dimensi text kasih , 1 untuk ada border
					}elseif($nama_ke == 2){
						$pdf->Cell(68.5);//kanan
						$pdf->Cell(10,11,$pr->tanggal_evaluasi);//dimensi text kasih , 1 untuk ada border
					}
					$nama_ke++;
				}				
			}
			if($nama_ke == 1){
				$pdf->Ln(4.9); //bawah
				$pdf->Cell(194);//kanan: 55.5+70+68.5 = 194
				$pdf->Cell(10,11,$pr->tanggal_penilaian);//dimensi text kasih , 1 untuk ada border
				$pdf->Ln(4.9); //bawah
				$pdf->Cell(194);//kanan: 55.5+70+68.5 = 194
				$pdf->Cell(10,11,$pr->tanggal_evaluasi);//dimensi text kasih , 1 untuk ada border
			}
			if($nama_ke == 2){
				$pdf->Ln(4.9); //bawah
				$pdf->Cell(194);//kanan: 55.5+70+68.5 = 194
				$pdf->Cell(10,11,$pr->tanggal_evaluasi);//dimensi text kasih , 1 untuk ada border
			}
			$pdf->setSourceFile('assets/laporan/tabel_total_produk'.$pr->id.'.pdf'); //load PDF dari HTML (DOMPDF)
			$tplId = $pdf->importPage(1);
			$specs = $pdf->getTemplateSize($tplId);
			// use the imported page and place it at point 10,10 with a width of 100 mm
			$pdf->useTemplate($tplId, 0, 65, 297); //size: 210x297
		}
		//tabel framework SOD part 1
		$pdf->addPage('L');
		$pdf->SetFont('Times','B',8);
		$pdf->Ln(8); //bawah
		$pdf->Cell(8);//kanan
		$pdf->Cell(70,8,'Lampiran Framework Risiko');//dimensi text kasih , 1 untuk ada border
		$pdf->setSourceFile('assets/laporan/tabel_framework1.pdf'); //load PDF dari HTML (DOMPDF)
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 8, 15, 297); //size: 210x297
		//tabel framework SOD part 2
		$pdf->addPage('L');
		$pdf->setSourceFile('assets/laporan/tabel_framework2.pdf'); //load PDF dari HTML (DOMPDF)
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 8, 8, 297); //size: 210x297
		//tabel framework SOD part 3
		$pdf->addPage('L');
		$pdf->setSourceFile('assets/laporan/tabel_framework3.pdf'); //load PDF dari HTML (DOMPDF)
		$tplId = $pdf->importPage(1);
		$specs = $pdf->getTemplateSize($tplId);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplId, 8, 8, 297); //size: 210x297

		$namafile = 'assets/laporan/laporan_total_'.date("Y-m-d-Hisu").'.pdf';
		$this->load->model('Home_Model');
		$data = array(
			'tanggal' => date("Y-m-d H:i:s"),
			'dokumen' => $namafile
		);
		$this->Home_Model->insert_riwayat_laporan_total($data);
		$pdf->Output('F', $namafile);
		$pdf->Output('I', $namafile);
	}
	public function view_data_tabel_total_proses()
	{	$id = $this->uri->segment('3');
		$this->db->order_by('id','ASC');
		$query = $this->db->get_where('rmtb_proses',array('id'=>$id));
		$info['proses'] = $query->result();
		$query = $this->db->get('rmtb_risiko_proses');
		$info['risiko'] = $query->result();
		$this->db->order_by('frpn','DESC');
		$query = $this->db->get('rmtb_sod_proses');
		$info['sod'] = $query->result();
		$query = $this->db->get('rmtb_selera_risiko_laporan');
		$info['selera_risiko'] = $query->result();
		$this->load->view('proses_table_total', $info);
		
	}	
	public function view_data_tabel_total_produk()
	{	$id = $this->uri->segment('3');
		$this->db->order_by('id','ASC');
		$query = $this->db->get_where('rmtb_produk',array('id'=>$id));
		$info['produk'] = $query->result();
		$query = $this->db->get('rmtb_risiko_produk');
		$info['risiko'] = $query->result();
		$this->db->order_by('frpn','DESC');
		$query = $this->db->get('rmtb_sod_produk');
		$info['sod'] = $query->result();
		$query = $this->db->get('rmtb_selera_risiko_laporan');
		$info['selera_risiko'] = $query->result();
		$this->load->view('produk_table_total', $info);
		
	}
	public function evaluasi_penilaian_proses()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				//bikin seperti tentukan_penilai
				$query = $this->db->get('rmtb_proses');
				$proses = $query->result();
				$penilai_ada = 0;
				if($info['user'][0]->level =='penilai'){
					$ke = 0;
					$id_proses_penilai[0]=0;
					foreach($proses as $p){
						if(strpos($p->penilai,$info['user'][0]->id.";")==true || (strpos($p->penilai,$info['user'][0]->id.";")==0 && substr($p->penilai,0,strlen($info['user'][0]->id.";")) == $info['user'][0]->id.";") || substr($p->penilai,-strlen($info['user'][0]->id)) == $info['user'][0]->id){
							$id_proses_penilai[$ke] = $p->id;
							$penilai_ada = 1;
							$ke++;
						}
					}
					$info['id_proses_penilai'] = $id_proses_penilai;
					$query = $this->db->get('rmtb_proses');
					$info['proses'] = $query->result();
					$query = $this->db->get('rmtb_risiko_proses');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_proses');
					$info['sod'] = $query->result();
					$id_user = $info['user'][0]->id;
				}
				elseif($info['user'][0]->level=='manajemen'){
					$query = $this->db->get_where('rmtb_users', array('level'=>'analis')); //karena manajemen dapat menggantikan peran analis
					$info['analis'] = $query->result();
					$id_user = $info['analis'][0]->id;
					$query = $this->db->get('rmtb_proses');
					$info['proses'] = $query->result();
					$query = $this->db->get('rmtb_risiko_proses');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_proses');
					$info['sod'] = $query->result();
					$penilai_ada = 1;
				}elseif($info['user'][0]->level=='analis'){
					$id_user = $info['user'][0]->id;
					$query = $this->db->get('rmtb_proses');
					$info['proses'] = $query->result();
					$query = $this->db->get('rmtb_risiko_proses');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_proses');
					$info['sod'] = $query->result();
					$penilai_ada = 1;
				}
				if($penilai_ada == 1){
					$query = $this->db->get_where('rmtb_penilaian_proses', array('id_user'=>$id_user));
					$info['penilaian_proses'] = $query->result();
					if(!isset($info['penilaian_proses'][0]->id)){
						$info['belum_menilai'] = 1;
					}else{
						$info['belum_menilai'] = 0;
					}
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('proses_penilaian_evaluasi', $info);
					$this->load->view('footer', $info);
				}else{
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('penilai_tidak_dipilih');
					$this->load->view('footer', $info);
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function edit_evaluasi_proses_view()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$id_proses = $this->uri->segment('3');
				$id_risiko_proses = $this->uri->segment('4');
				$id_sod_proses = $this->uri->segment('6');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen' || ($info['user'][0]->level =='penilai' && $info['user'][0]->penilai_proses == 1)){
					$query = $this->db->get_where('rmtb_proses', array('id'=>$id_proses));
					$info['proses'] = $query->result();
					$query = $this->db->get_where('rmtb_risiko_proses', array('id'=>$id_risiko_proses,'id_proses'=>$id_proses));
					$info['risiko'] = $query->result();
					$query = $this->db->get_where('rmtb_sod_proses', array('id'=>$id_sod_proses));
					$info['sod'] = $query->result();
					$query = $this->db->get('rmtb_skala_dampak_laporan'); //skala dampak sesuai penilaian awal
					$info['skala_dampak'] = $query->result();
					$query = $this->db->get('rmtb_skala_penyebab_laporan');
					$info['skala_penyebab'] = $query->result();
					$query = $this->db->get('rmtb_skala_metode_deteksi_laporan');
					$info['skala_metode_deteksi'] = $query->result();
					$query = $this->db->get_where('rmtb_penilaian_proses', array('id_user'=>$info['user'][0]->id));
					$info['penilaian_proses'] = $query->result();
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('proses_penilaian_evaluasi_edit', $info);
					$this->load->view('footer', $info);
				}else{
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('penilai_tidak_dipilih');
					$this->load->view('footer', $info);
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function edit_evaluasi_proses()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$id_proses = $_POST['id_proses'];
				$id_risiko_proses = $_POST['id_risiko_proses'];
				$id_sod_proses = $_POST['id_sod_proses'];
				$sd = $_POST['sd'];
				$sp = $_POST['sp'];
				$smd = $_POST['smd'];
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen' || ($info['user'][0]->level =='penilai' && $info['user'][0]->penilai_proses == 1)){
					if($info['user'][0]->level=='manajemen'){
						$query = $this->db->get_where('rmtb_users', array('level'=>'analis')); //karena manajemen dapat menggantikan peran analis
						$info['analis'] = $query->result();
						$id_user = $info['analis'][0]->id;
					}else{
						$id_user = $info['user'][0]->id;
					}
					$data_cek = array(
						'id_user' => $id_user,
						'id_sod_proses' => $id_sod_proses
					);
					if($this->Home_Model->cek_nilai_sod_proses($data_cek) > 0){
						$query = $this->db->get_where('rmtb_penilaian_proses', array('id_user'=>$id_user,'id_sod_proses'=>$id_sod_proses));
						$rmtb_penilaian_proses = $query->result();
						$data = array(
							'nilai_s_eval' => $sd,
							'nilai_o_eval' => $sp,
							'nilai_d_eval' => $smd
						);
						$this->Home_Model->update_penilaian_proses($data,$rmtb_penilaian_proses[0]->id);
						echo "berhasil";
					}else{
						$data = array(
							'id_user' => $id_user,
							'id_sod_proses' => $id_sod_proses,
							'nilai_s_eval' => $sd,
							'nilai_o_eval' => $sp,
							'nilai_d_eval' => $smd
						);
						$this->Home_Model->insert_penilaian_proses($data);
						echo "berhasil";
					}
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function evaluasi_penilaian_produk()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				//bikin seperti tentukan_penilai
				$query = $this->db->get('rmtb_produk');
				$produk = $query->result();
				$penilai_ada = 0;
				if($info['user'][0]->level =='penilai'){
					$ke = 0;
					$id_produk_penilai[0]=0;
					foreach($produk as $p){
						if(strpos($p->penilai,$info['user'][0]->id.";")==true || (strpos($p->penilai,$info['user'][0]->id.";")==0 && substr($p->penilai,0,strlen($info['user'][0]->id.";")) == $info['user'][0]->id.";") || substr($p->penilai,-strlen($info['user'][0]->id)) == $info['user'][0]->id){
							$id_produk_penilai[$ke] = $p->id;
							$penilai_ada = 1;
							$ke++;
						}
					}
					$info['id_produk_penilai'] = $id_produk_penilai;
					$query = $this->db->get('rmtb_produk');
					$info['produk'] = $query->result();
					$query = $this->db->get('rmtb_risiko_produk');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_produk');
					$info['sod'] = $query->result();
					$id_user = $info['user'][0]->id;
				}
				elseif($info['user'][0]->level=='manajemen'){
					$query = $this->db->get_where('rmtb_users', array('level'=>'analis')); //karena manajemen dapat menggantikan peran analis
					$info['analis'] = $query->result();
					$id_user = $info['analis'][0]->id;
					$query = $this->db->get('rmtb_produk');
					$info['produk'] = $query->result();
					$query = $this->db->get('rmtb_risiko_produk');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_produk');
					$info['sod'] = $query->result();
					$penilai_ada = 1;
				}elseif($info['user'][0]->level=='analis'){
					$id_user = $info['user'][0]->id;
					$query = $this->db->get('rmtb_produk');
					$info['produk'] = $query->result();
					$query = $this->db->get('rmtb_risiko_produk');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_produk');
					$info['sod'] = $query->result();
					$penilai_ada = 1;
				}
				if($penilai_ada == 1){
					$query = $this->db->get_where('rmtb_penilaian_produk', array('id_user'=>$id_user));
					$info['penilaian_produk'] = $query->result();
					if(!isset($info['penilaian_produk'][0]->id)){
						$info['belum_menilai'] = 1;
					}else{
						$info['belum_menilai'] = 0;
					}
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('produk_penilaian_evaluasi', $info);
					$this->load->view('footer', $info);
				}else{
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('penilai_tidak_dipilih');
					$this->load->view('footer', $info);
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function edit_evaluasi_produk_view()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$id_produk = $this->uri->segment('3');
				$id_risiko_produk = $this->uri->segment('4');
				$id_sod_produk = $this->uri->segment('6');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen' || ($info['user'][0]->level =='penilai' && $info['user'][0]->penilai_produk == 1)){
					$query = $this->db->get_where('rmtb_produk', array('id'=>$id_produk));
					$info['produk'] = $query->result();
					$query = $this->db->get_where('rmtb_risiko_produk', array('id'=>$id_risiko_produk,'id_produk'=>$id_produk));
					$info['risiko'] = $query->result();
					$query = $this->db->get_where('rmtb_sod_produk', array('id'=>$id_sod_produk));
					$info['sod'] = $query->result();
					$query = $this->db->get('rmtb_skala_dampak_laporan'); //skala dampak sesuai penilaian awal
					$info['skala_dampak'] = $query->result();
					$query = $this->db->get('rmtb_skala_penyebab_laporan');
					$info['skala_penyebab'] = $query->result();
					$query = $this->db->get('rmtb_skala_metode_deteksi_laporan');
					$info['skala_metode_deteksi'] = $query->result();
					$query = $this->db->get_where('rmtb_penilaian_produk', array('id_user'=>$info['user'][0]->id));
					$info['penilaian_produk'] = $query->result();
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('produk_penilaian_evaluasi_edit', $info);
					$this->load->view('footer', $info);
				}else{
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('penilai_tidak_dipilih');
					$this->load->view('footer', $info);
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function edit_evaluasi_produk()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$id_produk = $_POST['id_produk'];
				$id_risiko_produk = $_POST['id_risiko_produk'];
				$id_sod_produk = $_POST['id_sod_produk'];
				$sd = $_POST['sd'];
				$sp = $_POST['sp'];
				$smd = $_POST['smd'];
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen' || ($info['user'][0]->level =='penilai' && $info['user'][0]->penilai_produk == 1)){
					if($info['user'][0]->level=='manajemen'){
						$query = $this->db->get_where('rmtb_users', array('level'=>'analis')); //karena manajemen dapat menggantikan peran analis
						$info['analis'] = $query->result();
						$id_user = $info['analis'][0]->id;
					}else{
						$id_user = $info['user'][0]->id;
					}
					$data_cek = array(
						'id_user' => $id_user,
						'id_sod_produk' => $id_sod_produk
					);
					if($this->Home_Model->cek_nilai_sod_produk($data_cek) > 0){
						$query = $this->db->get_where('rmtb_penilaian_produk', array('id_user'=>$id_user,'id_sod_produk'=>$id_sod_produk));
						$rmtb_penilaian_produk = $query->result();
						$data = array(
							'nilai_s_eval' => $sd,
							'nilai_o_eval' => $sp,
							'nilai_d_eval' => $smd
						);
						$this->Home_Model->update_penilaian_produk($data,$rmtb_penilaian_produk[0]->id);
						echo "berhasil";
					}else{
						$data = array(
							'id_user' => $id_user,
							'id_sod_produk' => $id_sod_produk,
							'nilai_s_eval' => $sd,
							'nilai_o_eval' => $sp,
							'nilai_d_eval' => $smd
						);
						$this->Home_Model->insert_penilaian_produk($data);
						echo "berhasil";
					}
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function evaluasi_combine_penilaian_proses()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');			
			$query = $this->db->get('rmtb_selera_risiko_laporan'); //agar selera risiko sama dengan saat penilaian awal
			$selera_risiko = $query->result();	
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen'){
					$query = $this->db->get('rmtb_proses');
					$info['proses'] = $query->result();
					foreach($info['proses'] as $p){
						$query = $this->db->get_where('rmtb_risiko_proses',array('id_proses'=>$p->id));
						$risiko = $query->result();
						foreach($risiko as $r){
							$query = $this->db->get_where('rmtb_sod_proses',array('id_risiko_proses'=>$r->id));
							$sod = $query->result();
							foreach($sod as $s){
								//simpan tanggal evaluasi
								$data_penilaian = array(
									//'id_user' => $user[0]->id,
									'tanggal_evaluasi' => date("d/m/Y")
								);
								$this->Home_Model->update_proses($data_penilaian,$p->id);
								$query = $this->db->get_where('rmtb_penilaian_proses',array('id_sod_proses'=>$s->id));
								$penilaian_proses = $query->result();
								$nilai_s_eval = 1;
								$ave_s_eval = 1;
								$nilai_o_eval = 1;
								$ave_o_eval = 1;
								$nilai_d_eval = 1;
								$ave_d_eval = 1;
								$banyak_penilai = 0;
								foreach($penilaian_proses as $pp){
									$nilai_s_eval = $nilai_s_eval * $pp->nilai_s_eval;
									$nilai_o_eval = $nilai_o_eval * $pp->nilai_o_eval;
									$nilai_d_eval = $nilai_d_eval * $pp->nilai_d_eval;
									$banyak_penilai++;
								}
								if($banyak_penilai == 0){
									$banyak_penilai = 1;
								}
								$ave_s_eval = pow($nilai_s_eval,1/$banyak_penilai);
								$ave_o_eval = pow($nilai_o_eval,1/$banyak_penilai);
								$ave_d_eval = pow($nilai_d_eval,1/$banyak_penilai);
								$ave_s_eval = round($ave_s_eval,2); //round 2 AP
								$ave_o_eval = round($ave_o_eval,2); //round 2 AP
								$ave_d_eval = round($ave_d_eval,2); //round 2 AP
								$rpn_eval = $ave_s_eval * $ave_o_eval * $ave_d_eval;
								$rpn_eval = round($rpn_eval,2); //round 2 AP
								if($p->pembobotan_dipilih == 'langsung'){
									$ps = $p->ps_langsung;
									$po = $p->po_langsung;
									$pd = $p->pd_langsung;
								}else{
									$ps = $p->ps_ahp;
									$po = $p->po_ahp;
									$pd = $p->pd_ahp;
								}
								$api = "http://localhost:5000/fmea?ps=".$ps."&po=".$po."&pd=".$pd."&ns=".$ave_s_eval."&no=".$ave_o_eval."&nd=".$ave_d_eval;
								// create curl resource 
								$ch = curl_init(); 
								 // set url 
								curl_setopt($ch, CURLOPT_URL, $api); 

								//return the transfer as a string 
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

								// $output contains the output string 
								if($p->pembobotan_dipilih == ""){
									$frpn_eval = "<b style='color: red'>Periksa Pembobotan SOD!</b>"; 
								}else{
									$frpn_eval = curl_exec($ch); 
									$frpn_eval = round($frpn_eval,2); //round 2 AP
								}

								// tutup curl 
								curl_close($ch);      
								
								if($selera_risiko[0]->min <= $frpn_eval && $frpn_eval <= $selera_risiko[0]->max){
									$keterangan_eval =  $selera_risiko[0]->status;
								}elseif($selera_risiko[1]->min <= $frpn_eval && $frpn_eval <= $selera_risiko[1]->max){
									$keterangan_eval =  $selera_risiko[1]->status;
								}elseif($selera_risiko[2]->min <= $frpn_eval && $frpn_eval <= $selera_risiko[2]->max){
									$keterangan_eval =  $selera_risiko[2]->status;
								}

								// menampilkan hasil curl
								$data = array(
									'ave_s_eval' => $ave_s_eval,
									'ave_o_eval' => $ave_o_eval,
									'ave_d_eval' => $ave_d_eval,
									'frpn_eval' => $frpn_eval,
									'keterangan_eval' => $keterangan_eval
								);
								$this->Home_Model->update_sod_proses($data,$s->id);
							}
						}
					}
					$info['page'] = $webkonten;
					$query = $this->db->get('rmtb_risiko_proses');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_proses');
					$info['sod'] = $query->result();	
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('proses_penilaian_evaluasi_combine', $info);
					$this->load->view('footer', $info);
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function evaluasi_combine_penilaian_produk()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');			
			$query = $this->db->get('rmtb_selera_risiko_laporan'); //agar selera risiko sama dengan saat penilaian awal
			$selera_risiko = $query->result();	
			if($info['level'] == 'analis' || $info['level'] == 'manajemen' || $info['level'] == 'penilai'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen'){
					$query = $this->db->get('rmtb_produk');
					$info['produk'] = $query->result();
					foreach($info['produk'] as $p){
						$query = $this->db->get_where('rmtb_risiko_produk',array('id_produk'=>$p->id));
						$risiko = $query->result();
						foreach($risiko as $r){
							$query = $this->db->get_where('rmtb_sod_produk',array('id_risiko_produk'=>$r->id));
							$sod = $query->result();
							foreach($sod as $s){
								//simpan tanggal evaluasi
								$data_penilaian = array(
									//'id_user' => $user[0]->id,
									'tanggal_evaluasi' => date("d/m/Y")
								);
								$this->Home_Model->update_produk($data_penilaian,$p->id);
								$query = $this->db->get_where('rmtb_penilaian_produk',array('id_sod_produk'=>$s->id));
								$penilaian_produk = $query->result();
								$nilai_s_eval = 1;
								$ave_s_eval = 1;
								$nilai_o_eval = 1;
								$ave_o_eval = 1;
								$nilai_d_eval = 1;
								$ave_d_eval = 1;
								$banyak_penilai = 0;
								foreach($penilaian_produk as $pp){
									$nilai_s_eval = $nilai_s_eval * $pp->nilai_s_eval;
									$nilai_o_eval = $nilai_o_eval * $pp->nilai_o_eval;
									$nilai_d_eval = $nilai_d_eval * $pp->nilai_d_eval;
									$banyak_penilai++;
								}
								if($banyak_penilai == 0){
									$banyak_penilai = 1;
								}
								$ave_s_eval = pow($nilai_s_eval,1/$banyak_penilai);
								$ave_o_eval = pow($nilai_o_eval,1/$banyak_penilai);
								$ave_d_eval = pow($nilai_d_eval,1/$banyak_penilai);
								$ave_s_eval = round($ave_s_eval,2); //round 2 AP
								$ave_o_eval = round($ave_o_eval,2); //round 2 AP
								$ave_d_eval = round($ave_d_eval,2); //round 2 AP
								$rpn_eval = $ave_s_eval * $ave_o_eval * $ave_d_eval;
								$rpn_eval = round($rpn_eval,2); //round 2 AP
								if($p->pembobotan_dipilih == 'langsung'){
									$ps = $p->ps_langsung;
									$po = $p->po_langsung;
									$pd = $p->pd_langsung;
								}else{
									$ps = $p->ps_ahp;
									$po = $p->po_ahp;
									$pd = $p->pd_ahp;
								}
								$api = "http://localhost:5000/fmea?ps=".$ps."&po=".$po."&pd=".$pd."&ns=".$ave_s_eval."&no=".$ave_o_eval."&nd=".$ave_d_eval;
								// create curl resource 
								$ch = curl_init(); 
								 // set url 
								curl_setopt($ch, CURLOPT_URL, $api); 

								//return the transfer as a string 
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

								// $output contains the output string 
								if($p->pembobotan_dipilih == ""){
									$frpn_eval = "<b style='color: red'>Periksa Pembobotan SOD!</b>"; 
								}else{
									$frpn_eval = curl_exec($ch); 
									$frpn_eval = round($frpn_eval,2); //round 2 AP
								}

								// tutup curl 
								curl_close($ch);      
								
								if($selera_risiko[0]->min <= $frpn_eval && $frpn_eval <= $selera_risiko[0]->max){
									$keterangan_eval =  $selera_risiko[0]->status;
								}elseif($selera_risiko[1]->min <= $frpn_eval && $frpn_eval <= $selera_risiko[1]->max){
									$keterangan_eval =  $selera_risiko[1]->status;
								}elseif($selera_risiko[2]->min <= $frpn_eval && $frpn_eval <= $selera_risiko[2]->max){
									$keterangan_eval =  $selera_risiko[2]->status;
								}

								// menampilkan hasil curl
								$data = array(
									'ave_s_eval' => $ave_s_eval,
									'ave_o_eval' => $ave_o_eval,
									'ave_d_eval' => $ave_d_eval,
									'frpn_eval' => $frpn_eval,
									'keterangan_eval' => $keterangan_eval
								);
								$this->Home_Model->update_sod_produk($data,$s->id);
							}
						}
					}
					$info['page'] = $webkonten;
					$query = $this->db->get('rmtb_risiko_produk');
					$info['risiko'] = $query->result();
					$query = $this->db->get('rmtb_sod_produk');
					$info['sod'] = $query->result();	
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('produk_penilaian_evaluasi_combine', $info);
					$this->load->view('footer', $info);
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function evaluasi_resume_penilaian_proses()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen'){
					$this->db->order_by('id','ASC');
					$query = $this->db->get('rmtb_proses');
					$info['proses'] = $query->result();
					$query = $this->db->get('rmtb_risiko_proses');
					$info['risiko'] = $query->result();
					$this->db->order_by('frpn','DESC');
					$query = $this->db->get('rmtb_sod_proses');
					$info['sod'] = $query->result();
					$query = $this->db->get('rmtb_selera_risiko_laporan');
					$info['selera_risiko'] = $query->result();	
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('proses_penilaian_evaluasi_resume', $info);
					$this->load->view('footer', $info);
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function evaluasi_resume_penilaian_produk()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'analis' || $info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				if($info['user'][0]->level == 'analis' || $info['user'][0]->level == 'manajemen'){
					$this->db->order_by('id','ASC');
					$query = $this->db->get('rmtb_produk');
					$info['produk'] = $query->result();
					$query = $this->db->get('rmtb_risiko_produk');
					$info['risiko'] = $query->result();
					$this->db->order_by('frpn','DESC');
					$query = $this->db->get('rmtb_sod_produk');
					$info['sod'] = $query->result();
					$query = $this->db->get('rmtb_selera_risiko_laporan');
					$info['selera_risiko'] = $query->result();	
					$info['page'] = $webkonten;
					$this->load->view('header', $info);
					$this->load->view('sidebar', $info);
					$this->load->view('produk_penilaian_evaluasi_resume', $info);
					$this->load->view('footer', $info);
				}else{
					redirect('');
				}
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	
	public function riwayat_laporan_awal()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get('rmtb_riwayat_laporan_awal');
				$info['riwayat_laporan_awal'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('riwayat_laporan_awal', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function riwayat_laporan_mitigasi()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get('rmtb_riwayat_laporan_mitigasi');
				$info['riwayat_laporan_mitigasi'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('riwayat_laporan_mitigasi', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}
	public function riwayat_laporan_total()
	{	$username 	= $this->session->userdata('username');
		$this->load->model('Home_Model');
		if(isset($username) && ($username !== '')){
			$query = $this->db->get_where('rmtb_users',array("username"=>$username));
			$user = $query->result();
			$info['level'] = $this->session->userdata('level');
			$info['status'] = $this->session->userdata('status');
			if($info['status'] == null || $info['status'] == ""){
				$info['status'] = "";
			}
			$this->session->unset_userdata('status');
			if($info['level'] == 'manajemen'){
				$webkonten = $this->uri->segment('1');
				$query = $this->db->get('rmtb_riwayat_laporan_total');
				$info['riwayat_laporan_total'] = $query->result();
				$query = $this->db->get_where('rmtb_users', array('username'=>$username));
				$info['user'] = $query->result();
				$info['page'] = $webkonten;
				$this->load->view('header', $info);
				$this->load->view('sidebar', $info);
				$this->load->view('riwayat_laporan_total', $info);
				$this->load->view('footer', $info);
			}else{
				redirect('');
			}
		}else{
			redirect('');
		}		
	}	
	
}
