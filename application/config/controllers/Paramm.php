<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paramm extends CI_Controller {

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
	public function angka($param)
	{
		echo $param;
	}
	public function nilai($par1, $par2, $par3){
		$uts=30/100*$par1;
		$tugas=20/100*$par2;
		$uas=50/100*$par3;
		$hasil=$uts+$uas+$tugas;
		if ($hasil<30) {
			echo "E";
		}
		else if ($hasil<40) {
			echo "D";
		}
		else if ($hasil<50) {
			echo "C";
		}
		else if ($hasil<60) {
			echo "C+";
		}
		else if ($hasil<70) {
			echo "B";
		}
		else if ($hasil<80) {
			echo "B+";
		}
		else  {
			echo "A";
		}
	}

	public function mat($par1, $par2, $par3){
		$hasil=0;
		for ($i=0; $i <$par3 ; $i++) { 
			if ($i%$par1==0) {
				$hasil=$hasil+$i;
			}else if ($i%$par2==0) {
				$hasil=$hasil+$i;
			}
		}
		echo $hasil;
	}
	public function fib($value)
	{
	

		$n1=0;
		$n2=1;
		$n3;
     	$hasil=0;
    
 		for($i=2;;++$i){    
  			$n3=$n1+$n2;    
  			if ($n3>$value) {
  				break;
  			}
  			if ($n3%2==0) {
  				$hasil=$hasil+$n3;
  			}
  			$n1=$n2;    
  			$n2=$n3; 
 		} 
 		echo $hasil;   
	}
}
