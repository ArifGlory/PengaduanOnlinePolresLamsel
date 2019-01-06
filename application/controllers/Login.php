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
        $this->load->view('login_admin');
    }

    function signInAdmin(){
        $in['username'] = $this->input->post('username');
        $in['password'] = $this->input->post('password');
        $this->The_Model->cekLoginUser($in);
    }

    function logout(){
        session_destroy();
        redirect(base_url());
    }

}