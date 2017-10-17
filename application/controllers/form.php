<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('form_model');
	}

	public function index(){
		$this->load->view('view_form');
	}
	public function forms(){
		$this->load->view('view_form');
	}
	public function insert(){

		$kodemk =preg_replace('/[^A-Za-z0-9\  ]/', '', $this->input->post('kodemk'));
		if (isset($kodemk)) {
			
		$namamk =preg_replace('/[^A-Za-z0-9\  ]/', '', $this->input->post('namamk'));
		$sks    =preg_replace('/[^A-Za-z0-9\  ]/', '', $this->input->post('sks'));





		$tugas  = preg_replace('/[^A-Za-z0-9\  ]/', '', $this->input->post('tugas'));
		$uts    = preg_replace('/[^A-Za-z0-9\  ]/', '', $this->input->post('uts'));
		$uas    =preg_replace('/[^A-Za-z0-9\  ]/', '', $this->input->post('uas'));
		$semester    =preg_replace('/[^0-9\  ]/', '', $this->input->post('semester'));

		$futs=30/100*$uts;
		$ftugas=20/100*$tugas;
		$fuas=50/100*$uas;
		$hasil=$futs+$fuas+$ftugas;
		if ($hasil<50) {
			$nilai = "E";
			$ip =0;
		}
		else if ($hasil<60) {
			$nilai = "D";
			$ip =1;
		}
		else if ($hasil<70) {
			$nilai = "C";
			$ip =2;
		}
		else if ($hasil<75) {
			$nilai = "C+";
			$ip =2.5;
		}
		else if ($hasil<80) {
			$nilai = "B";
			$ip =3;
		}
		else if ($hasil<85) {
			$nilai = "B+";
			$ip =3.5;
		}
		else  {
			$nilai = "A";
			$ip =4;
		}

		$data=array(
			"kodemk"=>$kodemk,
			"namamk"=>$namamk,
			"sks"=>$sks,
			"tugas"=>$tugas,
			"uts"=>$uts,
			"uas"=>$uas,
			"ip"=>$ip,
			"nilai"=>$nilai,
			"semester"=>$semester);
		$this->form_model->insert($data);

		//echo "record inserted";
		$this->printss();
		}	
	}
	public function hapus($kode,$print='yes'){
		$this->form_model->delete($kode);
		echo "record deleted";

		if ($print=='yes') {
			$this->printss();
		}
	}
	public function hapusbanyak(){
		
		$hapus = $this->input->post('kode');
		for ($i=0; $i < count($hapus); $i++) { 
			$this->hapus($hapus[$i],'no');
		}
		$this->printss();
	}
	public function printss(){
		

		// $this->load->helper('file');
		// $data = file('data/data.txt');

		for ($k=1; $k <= 8; $k++) { 
			$string ='';
			$record=array();
			$jml=0;

			$data =$this->form_model->select($k)->result();
			foreach ($data as $key ) {

				$record[$jml] = array('kodemk' => $key->kodeMK,
									'namamk' => $key->namaMK,
									'sks' => $key->sks,
									'tugas' => $key->tugas,
									'uts' => $key->uts,
									'uas' => $key->uas,
									'ip' => $key->ip,
									'nilai' => $key->nilai,
									'semester' => $key->semester);

				$jml++;
			}
	
			

			$a['data']=$record;
			$a['index']=count($record);
			$a['sem']=$k;
			if (!(count($record)<1)) {

				$this->load->view('tabel_view',$a);
				
			}
			
		}
	}

	

	public function resets()
	{
		$this->load->helper('file');

		$data = '';
		write_file('data/data.txt', $data);
		$this->printss();
	}
}
