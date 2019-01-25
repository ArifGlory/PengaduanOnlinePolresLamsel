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
                $session['id_admin'] = $result[0]->id_admin;
                $session['username'] = $result[0]->email;
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

    function getDetailPengaduan($kodePengaduan){
        $q = $this->db->query("SELECT * FROM tb_pengaduan 
								    INNER JOIN tb_kejahatan 
								        ON (tb_pengaduan.id_kejahatan = tb_kejahatan.id_kejahatan)
								           WHERE kode_pengaduan = '$kodePengaduan'");
        return $q;
    }

    function getDataSaksi($kodePengaduan){
        $q = $this->db->query("SELECT * FROM tb_saksi INNER JOIN tb_pengaduan ON (tb_pengaduan.id_pengaduan = tb_saksi.id_pengaduan)
        WHERE tb_pengaduan.kode_pengaduan = '$kodePengaduan'");
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



}