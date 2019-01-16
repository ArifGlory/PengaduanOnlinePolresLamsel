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
    public function __construct()
    {
        parent::__construct();
        //  $this->load->helper(array('url','form'));
        // $this->load->library(array('session','encryption'));

        $this->navbarTitle = "Dashboard User";
        $idUser = $this->session->userdata('id_user');
        $this->namaUser = $this->session->userdata('nama');
        $this->load->model('The_Model');

        if($idUser != "") {

        }else {
            redirect("Login");
        }

    }

    function index(){
        $this->load->view('header');
        $this->load->view('user/dashboard_user');
        $this->load->view('footer');
    }

}