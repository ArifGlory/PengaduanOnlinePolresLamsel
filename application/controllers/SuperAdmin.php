<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 08/02/2019
 * Time: 1:18
 */
class SuperAdmin extends CI_Controller
{

    var $tb_admin = "tb_admin";

    function __construct()
    {
        parent::__construct();
        $hakAkses = $this->session->userdata('hak_akses');
        if ($hakAkses == "S"){

            $this->load->model('The_Model');
            $this->navbarTitle = "Master";

        }else{
            redirect('Login');
        }
    }


    function index(){
        echo "page restricted, only verified user can acces this page";
    }

    function akunAdmin(){

        $data['admin'] = $this->The_Model->getDataAkunAdmin()->result();

        $this->load->view('admin/top');
        $this->load->view('admin/asidebar');
        $this->load->view('admin/akun_admin',$data);
        $this->load->view('admin/bottom');
    }

    function akunAdmin_simpan(){
        $in['nama'] = $this->input->post('nama_admin');
        $in['email'] = $this->input->post('email');
        $in['password'] = $this->input->post('password');
        $confirm = $this->input->post('password_confirm');
        $in['hak_akses'] = $this->input->post('jabatan');

        if ($in['password'] == $confirm){
            $this->db->insert($this->tb_admin,$in);
            $this->session->set_flashdata("success","Tambah Data Admin Berhasil");

            redirect('SuperAdmin/akunAdmin');
        }else{
            $this->session->set_flashdata("error_pass","Konfirmasi Passwod tidak valid");

            redirect('SuperAdmin/akunAdmin');
        }
    }

    function akunAdmin_nonAktif($idAdmin){
        $in['status'] = "F";

        $this->db->where('id_admin',$idAdmin);
        $this->db->update($this->tb_admin,$in);

        $this->session->set_flashdata("success_update","NonAktifkan akun berhasil");
        redirect('SuperAdmin/akunAdmin');
    }

    function akunAdmin_aktif($idAdmin){
        $in['status'] = "T";

        $this->db->where('id_admin',$idAdmin);
        $this->db->update($this->tb_admin,$in);

        $this->session->set_flashdata("success_active","NonAktifkan akun berhasil");
        redirect('SuperAdmin/akunAdmin');
    }
}