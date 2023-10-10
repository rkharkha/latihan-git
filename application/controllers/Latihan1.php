<?php
class Latihan1 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Latihan1');
	}
	public function index()
	{
		echo "selamat datang.......selamat belajar web programming";
	}

	public function penjumlahan($n1, $n2)
	{
		$hasil = $this->Model_Latihan1->jumlah($n1, $n2);
		echo "hasil penjumlahan dari 	" . $n1 . " + " . $n2 . " = "
			. $hasil;
	}
}
