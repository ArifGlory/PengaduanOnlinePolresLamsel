<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 06/01/2019
 * Time: 21:02
 */
class The_Model extends CI_Model
{

    var $mst_admin = "tb_admin";
    var $mst_user = "tb_user";
    var $mst_pengaduan = "tb_pengaduan";
    var $mst_tanggapan = "tb_tanggapan";
    var $mst_kejahatan  = "tb_kejahatan";

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','encryption'));

    }

    public function cekLoginAdmin($data){

        $username = $data['username'];
        $password = $data['password'];

        $cek = $this->db->get_where($this->mst_admin,array('email'=>$username))->num_rows();
        $result = $this->db->get_where($this->mst_admin,array('email'=>$username))->result();

        if ($cek != 0){


            //   $pass_didb = $this->encryption->decrypt($result[0]->password);
            $pass_didb = $result[0]->password;

            if ($pass_didb == $password){
                /* $data_session = array(
                     'id'=>$result[0]->id_user,
                     'nama'=>$result[0]->nm_lengkap ,
                     'bagian'=>"admin"
                 );*/
                $session['id_admin'] = $result[0]->id;
                $session['username'] = $result[0]->nama;
                $session['hak_akses'] = $result[0]->hak_akses;
                $session['nama'] = $result[0]->nama;

                $this->session->set_userdata($session);

                redirect('Dashboard');
            }else{

                $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
                redirect('Login/loginAdmin');
            }

        }else{
            $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
            redirect('Login/loginAdmin');
        }
    }

    public function cekLoginUser($data){

        $username = $data['username'];
        $password = $data['password'];

        $cek = $this->db->get_where($this->mst_user,array('email'=>$username))->num_rows();
        $result = $this->db->get_where($this->mst_user,array('email'=>$username))->result();

        if ($cek != 0){


            //   $pass_didb = $this->encryption->decrypt($result[0]->password);
            $pass_didb = $result[0]->password;

            if ($pass_didb == $password){
                /* $data_session = array(
                     'id'=>$result[0]->id_user,
                     'nama'=>$result[0]->nm_lengkap ,
                     'bagian'=>"admin"
                 );*/
                $session['id_user'] = $result[0]->id_user;
                $session['username'] = $result[0]->email;
                $session['nama'] = $result[0]->nama_user;

                $this->session->set_userdata($session);

                redirect('User');
            }else{

                $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
                redirect('Login');
            }

        }else{
            $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
            redirect('Login');
        }
    }

    function getDataKejahatan(){
        $data =  $this->db->get($this->mst_kejahatan);
        return $data;
    }

    function getDetailPengaduan($idPengaduan){
        $q = $this->db->query("SELECT * FROM tb_pengaduan 
								    INNER JOIN tb_kejahatan 
								        ON (tb_pengaduan.id_kejahatan = tb_kejahatan.id_kejahatan)
								           WHERE id_pengaduan = '$idPengaduan'");
        return $q;
    }

    function getDataSaksi($idPengaduan){
        $q = $this->db->query("SELECT * FROM tb_saksi INNER JOIN tb_pengaduan ON (tb_pengaduan.id_pengaduan = tb_saksi.id_pengaduan)
        WHERE tb_pengaduan.id_pengaduan = '$idPengaduan'");
        return $q;
    }

    function getDataPengaduan($idUser){
        $q = $this->db->query("SELECT * FROM tb_pengaduan 
								    INNER JOIN tb_kejahatan 
								        ON (tb_pengaduan.id_kejahatan = tb_kejahatan.id_kejahatan)
								           WHERE tb_pengaduan.id_user = $idUser");
        return $q;
    }

    function getDataUser($idUser){
        $this->db->where('id_user',$idUser);
        $data =  $this->db->get($this->mst_user);
        return $data;
    }

    function getAllDataPengaduan(){
        $q = $this->db->query("SELECT * FROM tb_pengaduan 
								    INNER JOIN tb_kejahatan 
								        ON (tb_pengaduan.id_kejahatan = tb_kejahatan.id_kejahatan)
								         INNER JOIN tb_user 
								        ON (tb_pengaduan.id_user = tb_user.id_user)");
        return $q;
    }

    function getPengaduanBaru(){
        $q = $this->db->query("SELECT * FROM tb_pengaduan 
								    INNER JOIN tb_kejahatan 
								        ON (tb_pengaduan.id_kejahatan = tb_kejahatan.id_kejahatan)
								         INNER JOIN tb_user 
								        ON (tb_pengaduan.id_user = tb_user.id_user) WHERE status = 'M' ");
        return $q;
    }

    function getPengaduanProses(){
        $q = $this->db->query("SELECT * FROM tb_pengaduan 
								    INNER JOIN tb_kejahatan 
								        ON (tb_pengaduan.id_kejahatan = tb_kejahatan.id_kejahatan)
								         INNER JOIN tb_user 
								        ON (tb_pengaduan.id_user = tb_user.id_user) WHERE status = 'P' ");
        return $q;
    }

    function getPengaduanSelesai(){
        $q = $this->db->query("SELECT * FROM tb_pengaduan 
								    INNER JOIN tb_kejahatan 
								        ON (tb_pengaduan.id_kejahatan = tb_kejahatan.id_kejahatan)
								         INNER JOIN tb_user 
								        ON (tb_pengaduan.id_user = tb_user.id_user) WHERE status = 'S' ");
        return $q;
    }

    function getTanggapanByIdPengaduan($idPengaduan){
        $this->db->where('id_pengaduan',$idPengaduan);
        $data =  $this->db->get($this->mst_tanggapan);
        return $data;
    }

    function getDataAkunAdmin(){
        $data =  $this->db->get($this->mst_admin);
        return $data;
    }

    function getPengaduanByKode($kodePengaduan){
        $this->db->where('kode_pengaduan',$kodePengaduan);
        $data =  $this->db->get($this->mst_pengaduan);
        return $data;
    }

    function getAllDataPelapor(){
        $data =  $this->db->get($this->mst_user);
        return $data;
    }

    function getDetailPelapor($idPelapor){
        $this->db->where('id_user',$idPelapor);
        $data =  $this->db->get($this->mst_user);
        return $data;
    }

    function getDataPengaduanByUser($idUser){
        $q = $this->db->query("SELECT * FROM tb_pengaduan 
								    INNER JOIN tb_kejahatan 
								        ON (tb_pengaduan.id_kejahatan = tb_kejahatan.id_kejahatan)
								         INNER JOIN tb_user 
								        ON (tb_pengaduan.id_user = tb_user.id_user) WHERE tb_pengaduan.id_user = $idUser");
        return $q;
    }


}