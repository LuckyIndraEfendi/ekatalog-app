<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_Controller.php';
class Buku extends Base_Controller {
//field tabel
var $data = [
'isbn' => '',
'judul' => '',
'pengarang' => '',
'tanggal_rilis' => '',
'jumlah_halaman' => '',
'sinopsis' => '',
'id_penerbit' => '',
'gambar' => '',
'nama_penerbit' => '',
'tersedia' => 1,
];

//nama model
var $context = 'buku';
public function __construct(){
    parent::__construct();
    $this->load->model('penerbit_model','penerbit');
    if (!$this->ion_auth->logged_in()){
    redirect('auth/login');
    }
}
function form(){
$id = $this->uri->segment(3);
if($id){
$this->data = $this->buku->find_by_id($id);
}
$this->data['penerbits'] = $this->penerbit->find_all();
$this->load->view('buku/form',$this->data);
}

function save(){
    $id = $this->input->post('id');
    $file_name = $this->input->post('gambar_lama');
    $this->form_validation->set_rules('isbn','isbn','required');
    $this->form_validation->set_rules('judul','judul','required');
    $this->form_validation->set_rules('pengarang','pengarang','required');
    $this->data = [
    'isbn' => $this->input->post('isbn'),
    'judul' => $this->input->post('judul'),
    'pengarang' => $this->input->post('pengarang'),
    'tanggal_rilis' => $this->input->post('tanggal_rilis'),
    'jumlah_halaman' => $this->input->post('jumlah_halaman'),
    'sinopsis' => $this->input->post('sinopsis'),
    'id_penerbit' => $this->input->post('id_penerbit'),
    'tersedia' => $this->input->post('tersedia')
    ];

//handling upload
if($_FILES['gambar']['name'] != ""){
    $config = array(
    'upload_path' => "./assets/uploads/",
    'allowed_types' => "*"
    ,
    'overwrite' => TRUE,
    'file_name' => "gambar_".date('YmdHis'),
    'max_size' => "2048000" // Can be set to particular file size , here it is 2 MB(2048 Kb)
    );
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar')) {
    $upload_data = $this->upload->data(); //Returns array of containing all of the data
    // related to the file you uploaded.
    $file_name = $upload_data['file_name'];
    } else {
    log_message('ERROR','error');
    }
    }
    $this->data['gambar'] = $file_name;

    if($this->form_validation->run() == FALSE){
        $this->form();
        }else{
        if($id == ''){
        $this->buku->insert($this->data);
        }else{
        $this->buku->update($id,$this->data);
        }
        redirect(base_url('buku'));
        }
        }
        }