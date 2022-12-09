<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Latihan extends CI_Controller {
    public function tampil(){
        $data['nama'] = "Lucky";
        $data['nim'] = "123456";
        $data['nilai'] = "100";
        //mendapatkan variabel $_GET[]
        $data['word'] = $this->input->get('word');
        //passing data ke view
        $this->load->view('v_latihan',$data);
    }
 }
 //http://localhost/ekatalog/index.php/latihan/tampil
 ?>