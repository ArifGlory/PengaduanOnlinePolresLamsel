<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 01/01/2019
 * Time: 21:00
 */
class Master extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $hakAkses = $this->session->userdata('hak_akses');
        if ($hakAkses != ""){

           // $this->load->model('M_Akun');
            $this->navbarTitle = "Master";

        }else{
            redirect('Login');
        }
    }

}