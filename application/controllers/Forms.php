<?php
class Forms extends CI_Controller{
    function __construct(){
        parent::__construct();
        //cek session apakah sudah login, jika belum maka ke halaman login
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
        $this->load->model('forms_model');
    }

    function index(){
        
        $ambildata['data'] = $this->forms_model->show_produk();

        if($this->session->userdata('level')==='1'){
            $this->load->view('hrd/header');
            $this->load->view('hrd/forms', $ambildata);
            $this->load->view('hrd/footer');
        }else{
            echo "Access Denied";
        }
    }

    function Tambahproduk(){

        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $this->forms_model->add_produk();
        redirect('forms');
    }

    function Ubahproduk(){
        
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $this->forms_model->change_produk();
        redirect('forms');
    }

    function Hapusproduk(){

        $id = $_POST['id'];

        $this->forms_model->delete_produk();
        redirect('forms');
    }

    function Cetak(){

        if($level == '1'){
            $this->load->view('admin/cetak');
        }
    }

}