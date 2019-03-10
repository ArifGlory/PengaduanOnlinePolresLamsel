<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 06/01/2019
 * Time: 20:55
 */
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('url','form'));
        //$this->load->library(array('session','encryption'));
        $this->load->model('The_Model');

    }

    function index(){
        $this->load->view('header');
        $this->load->view('login_user');
        $this->load->view('footer');
    }

    function loginAdmin(){
        $this->load->view('login_admin');
    }

    function signInUser(){
        $in['username'] = $this->input->post('txt_email');
        $in['password'] = $this->input->post('txt_password');
        $this->The_Model->cekLoginUser($in);
    }

    function signInAdmin(){
        $in['username'] = $this->input->post('username');
        $in['password'] = $this->input->post('password');
        $this->The_Model->cekLoginAdmin($in);
    }

    function logout(){
        session_destroy();
        redirect('Login/loginAdmin');
    }

}