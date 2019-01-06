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

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','encryption'));

    }

    public function cekLoginUser($data){

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
                redirect('Login');
            }

        }else{
            $this->session->set_flashdata("error","Login Gagal, cek kembali Username dan password anda");
            redirect('Login');
        }
    }

}