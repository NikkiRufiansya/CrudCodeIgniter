<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function forms()
	{
		
		$this->load->view('view_form');
	}
	public function insert()
	{
		$this->load->library('session');
		$d['kodemk'] =$this->input->post('kodemk');
		if (isset($d['kodemk'])) {
			
		$d['namamk'] =$this->input->post('namamk');
		$d['sks']    =$this->input->post('sks');





		$tugas  =$this->input->post('tugas');
		$uts    =$this->input->post('uts');
		$uas    =$this->input->post('uas');

		$uts=30/100*$uts;
		$tugas=20/100*$tugas;
		$uas=50/100*$uas;
		$hasil=$uts+$uas+$tugas;
		if ($hasil<50) {
			$d['nilai'] = "E";
			$d['ip'] =0;
		}
		else if ($hasil<60) {
			$d['nilai'] = "D";
			$d['ip'] =1;
		}
		else if ($hasil<70) {
			$d['nilai'] = "C";
			$d['ip'] =2;
		}
		else if ($hasil<75) {
			$d['nilai'] = "C+";
			$d['ip'] =2.5;
		}
		else if ($hasil<80) {
			$d['nilai'] = "B";
			$d['ip'] =3;
		}
		else if ($hasil<85) {
			$d['nilai'] = "B+";
			$d['ip'] =3.5;
		}
		else  {
			$d['nilai'] = "A";
			$d['ip'] =4;
		}
		
		$jumlahdata = count($this->session->userdata('jml'))+1;


		$this->session->set_userdata('jml',$jumlahdata); 
		$this->session->set_userdata('record'.$jumlahdata, $d); 

		//print_r($this->session->userdata('record'.$jumlahdata));
		echo "record inserted";
		
		// $record = array(
		// 	'kodemk' => 

		// 	);
		// print_r($a) ;
		// $this->session->set_userdata('ale','dog');
		// //$this->session->set_userdata('username','administrator');
					
		}
		$this->printss();

	}
	public function printss(){
		$record;
		$this->load->library('session');
		$index = $this->session->userdata('jml');
		for ($i=0; $i <= $index; $i++) { 
			$record[$i]= $this->session->userdata('record'.$i);
		}
		$a['data']=$record;
		$a['index']=$index;
		$this->load->view('tabel_view',$a);

	}

	public function resets()
	{
		$this->load->library('session');
		$this->session->unset_userdata('jml');
		$this->printss();
	}
}
