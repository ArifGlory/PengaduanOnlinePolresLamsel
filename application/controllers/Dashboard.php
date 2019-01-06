<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 06/01/2019
 * Time: 21:15
 */
class Dashboard extends CI_Controller
{
    var $userSession;
    var $navbarTitle;
    public function __construct()
    {
        parent::__construct();
        //  $this->load->helper(array('url','form'));
        // $this->load->library(array('session','encryption'));

        $this->navbarTitle = "Dashboard Aplikasi";
        $hakAkses = $this->session->userdata('hak_akses');
        $this->load->model('The_Model');

        if($hakAkses != "") {

        }else {
            redirect("Login");
        }

    }

    public function index(){

        /*$data['jml_aspirasi'] = $this->M_Akun->getDataAspirasi()->num_rows();
        $data['jml_saran'] = $this->M_Akun->getDataSaran()->num_rows();
        $data['jml_opd'] = $this->M_Akun->getDataOPD()->num_rows();
        $data['jml_user'] = $this->M_Akun->listUser()->num_rows();

        $data['aspirasi'] = $this->M_Akun->getJoinAspirasi()->result();

        /* print_r($data['aspirasi'][0]->nm_kategori);*/

       $data['navbarTitle'] = $this->navbarTitle;
        $this->load->view('admin/top',$data);
        $this->load->view('admin/asidebar');
        $this->load->view('dashboard/dashboard_admin');
        $this->load->view('admin/bottom');


    }

}