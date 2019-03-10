<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 16/01/2019
 * Time: 21:00
 */
class User extends CI_Controller
{
    var $namaUser;
    var $id_user;
    var $tb_pengaduan = "tb_pengaduan";
    var $tb_user= "tb_user";
    var $tb_saksi = "tb_saksi";

    public function __construct()
    {
        parent::__construct();
        //  $this->load->helper(array('url','form'));
        // $this->load->library(array('session','encryption'));

        $this->navbarTitle = "Dashboard User";

        $this->load->model('The_Model');

        $idUser = $this->The_Model->generateIdUser();

        $session['id_user'] = $idUser;
        $this->session->set_userdata($session);

        $idUser = $this->session->userdata('id_user');

        $this->id_user = $idUser;


    }

    function index(){

        print_r($this->id_user);
        /*$data['pengaduanku'] = $this->The_Model->getDataPengaduan($this->id_user)->result();

        $this->load->view('header');
        $this->load->view('user/dashboard_user',$data);
        $this->load->view('footer');*/
    }

    public function pengaduan(){

        $data['kejahatan'] = $this->The_Model->getDataKejahatan()->result();
        $data['kodePengaduan'] = chr(rand(65,90)).chr(rand(65,90)).rand(10,100).rand(10,100);

        $this->load->view('header');
        $this->load->view('pengaduan/pengaduan',$data);
        $this->load->view('footer');
    }

    function pengaduan_simpan(){

        $user['id_user'] = $this->id_user;
        $user['email'] = $this->input->post('txt_email');
        $user['nama_user'] = $this->input->post('txt_nama');
        $user['pekerjaan'] = $this->input->post('txt_pekerjaan');
        $user['alamat'] = $this->input->post('txt_alamat');
        $user['suku'] = $this->input->post('txt_suku');
        $user['agama'] = $this->input->post('txt_agama');
        $user['warga_negara'] = $this->input->post('txt_warga_negara');
        $user['publish'] = "T";

        $in['kode_pengaduan'] = $this->input->post('txt_kode');
        $in['barang_bukti'] = $this->input->post('txt_bukti');
        $in['id_user'] = $this->id_user;
        $in['nama_pengaduan'] = $this->input->post('nama_pengaduan');
        $in['id_kejahatan'] = $this->input->post('jenis_kejahatan');
        $in['kecamatan'] = $this->input->post('kecamatan');
        $in['tempat_kejadian'] = $this->input->post('txt_tempatkejadian');
        $in['tanggal'] = $this->input->post('date_waktu_kejadian');
        $in['pukul'] = $this->input->post('date_pukul');
        $in['isKorban'] = $this->input->post('optradio_korban');
        $in['orang_dilaporkan'] = $this->input->post('txt_terlapor');
        $in['tanggal_laporan'] = date('Y-m-d');
        if ($in['orang_dilaporkan'] == null || $in['orang_dilaporkan'] == ""){
            $in['orang_dilaporkan'] = null;
        }
        $in['deskripsi'] = $this->input->post('txt_deskripsi');
        $in['status'] = "M";

        $this->db->insert($this->tb_pengaduan,$in);
        $this->db->insert($this->tb_user,$user);

        $this->session->set_flashdata("success_2","Tambah Data Pengaduan Berhasil");

        redirect('User/detailPengaduan/'.$in['kode_pengaduan']);

    }

    function detailPengaduan($kodePengaduan){
        $data['pengaduan'] = $this->The_Model->getDetailPengaduan($kodePengaduan)->result();

        foreach ($data['pengaduan'] as $d) {
            $idUser = $d->id_user;
            $idPengaduan = $d->id_pengaduan;
        }

        $data['user'] = $this->The_Model->getDataUser($idUser)->result();
        $data['saksi'] = $this->The_Model->getDataSaksi($kodePengaduan)->result();
        $data['tanggapan'] = $this->The_Model->getTanggapanByIdPengaduan($idPengaduan)->result();

        $this->load->view('header');
        $this->load->view('pengaduan/detail_pengaduan',$data);
        $this->load->view('footer');
    }

    function saksi_simpan(){
        $kodePengaduan = $this->input->post('kodepengaduan');
        $in['id_pengaduan'] = $this->input->post('idpengaduan');
        $in['nama_saksi'] = $this->input->post('namasaksi');
        $in['umur_saksi'] = $this->input->post('umursaksi');
        $in['pekerjaan_saksi'] = $this->input->post('pekerjaansaksi');
        $in['alamat_saksi'] = $this->input->post('alamatsaksi');

        $this->db->insert($this->tb_saksi,$in);
        $this->session->set_flashdata("success","Pendaftaran Berhasil");

        redirect('User/detailPengaduan/'.$kodePengaduan);
    }

}