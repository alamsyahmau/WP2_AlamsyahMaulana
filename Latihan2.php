<?php
class Latihan2 extends CI_Controller
{
 public function index()
 {
 echo "Selamat Datang.. selamat belajar Web Programming";
 //$this->load->view('view-latihan2');
 }
 public function luaskelilingpersegipanjang($n1, $n2)
 {
 $this->load->model('Model_latihan2');
 $data['nilai1'] = $n1;
 $data['nilai2'] = $n2;
 $data['keliling'] = $this->Model_latihan2->keliling($n1, $n2);
 $data['luas'] = $this->Model_latihan2->luas($n1, $n2);

 $this->load->view('view-latihan2', $data);
 }
}
