<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageCtrl extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->model('VisitorModel','visitor');
    }

	public function index()
	{
		$this -> load -> library('Mobile_Detect');
		$detect = new Mobile_Detect();
		$data['visitor'] = $this->visitor->getAllvisitor();
		$ip_me    = $this->input->ip_address(); // Mendapatkan IP user
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		$waktu = time(); //
		$timeinsert = date("Y-m-d H:i:s");
		$s = $this->db->query("SELECT * FROM visitor WHERE ip='".$ip_me."' AND date='".$date."'")->num_rows();
		$ss = isset($s)?($s):0;
		if($ss == 0){
			$this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('".$ip_me."','".$date."','1','".$waktu."','".$timeinsert."')");
		}
		else{
			$hits = $this->db->query("SELECT hits FROM visitor")->row(); 
			$hits= json_decode( json_encode($hits), true);
		}
		$this->db->query("UPDATE visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip_me."' AND date='".$date."'");
		$this->session->set_userdata('ip', $ip_me);
		
		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
			header("Location: ".$this->config->item('base_url')."/mobile"); exit;
		}
		else{
			redirect('LANDING-PAGE');
		}
	}
	public function landing()
    {
		$this->load->view('page_landing');
    }
	public function home()
    {
		$this->load->view('template/header');
		$this->load->view('page_index');
		$this->load->view('template/footer');
    }
}
