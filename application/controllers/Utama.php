<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 22/11/2018
 * Time: 13:51
 */
class Utama extends CI_Controller
{
    var $gallerypath;
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('form_validation','pagination','session'));
    }

    function index(){
        $this->load->view('beranda');
    }

    public function aboutUs(){
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
    }

    public function pengaduan(){
        $this->load->view('header');
        $this->load->view('pengaduan');
        $this->load->view('footer');
    }

    function dataPengaduan(){
        $this->load->view('header');
        $this->load->view('product');
        $this->load->view('footer');
    }

    function cekPengaduan(){
        $this->load->view('header');
        $this->load->view('cek_pengaduan');
        $this->load->view('footer');
    }
}