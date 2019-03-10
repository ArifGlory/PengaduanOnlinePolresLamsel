<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 22/11/2018
 * Time: 13:51
 */
class Utama extends CI_Controller
{
    var $gallerypath;
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('The_Model');
        $this->load->library(array('form_validation','pagination','session'));
    }

    function index(){
        $this->load->view('beranda');
    }

    public function aboutUs(){
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
    }

    function dataPengaduan(){
        $this->load->view('header');
        $this->load->view('product');
        $this->load->view('footer');
    }

    function cekPengaduan(){
        $this->load->view('header');
        $this->load->view('cek_pengaduan');
        $this->load->view('footer');
    }


    function showResultCekPengaduan(){
        $kodePengaduan = $this->input->post('txt_kode');

        $pengaduan = $this->The_Model->getPengaduanByKode($kodePengaduan)->result();

        if ($pengaduan != null){
            foreach ($pengaduan as $item) {
                $idPengaduan = $item->id_pengaduan;
            }

            $data['pengaduan'] = $this->The_Model->getDetailPengaduan($kodePengaduan)->result();

            foreach ($data['pengaduan'] as $c){
                $idUser = $c->id_user;
            }

            $data['user'] = $this->The_Model->getDataUser($idUser)->result();
            $data['saksi'] = $this->The_Model->getDataSaksi($kodePengaduan)->result();
            $data['tanggapan'] = $this->The_Model->getTanggapanByIdPengaduan($idPengaduan)->result();

            $this->load->view('header');
            $this->load->view('result_cek',$data);
            $this->load->view('footer');
        }else{
            $this->session->set_flashdata("error_cek","Pengaduan tidak ditermukan");
            redirect('Utama/cekPengaduan');
        }



    }

    function register(){
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }

    function register_simpan(){
        $in['email'] = $this->input->post('txt_email');
        $in['password'] = $this->input->post('txt_password');
        $confirm = $this->input->post('txt_password_confirm');
        $in['nama_user'] = $this->input->post('txt_nama');
        $in['pekerjaan'] = $this->input->post('txt_pekerjaan');
        $in['alamat'] = $this->input->post('txt_alamat');

        if ($in['password'] == $confirm){
            $this->db->insert("tb_user",$in);
            $this->session->set_flashdata("success","Pendaftaran Berhasil");

            redirect('Login');
        }else{
            $this->session->set_flashdata("error_pass","Konfirmasi Passwod tidak valid");

            redirect('Utama/register');
        }
    }
}