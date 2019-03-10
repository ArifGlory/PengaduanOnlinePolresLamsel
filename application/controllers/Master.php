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
    var $tb_tanggapan = "tb_tanggapan";
    var $tb_pengaduan = "tb_pengaduan";
    var $tb_user = "tb_user";

    function __construct()
    {
        parent::__construct();
        $hakAkses = $this->session->userdata('hak_akses');
        if ($hakAkses != ""){

           $this->load->model('The_Model');
            $this->load->library('dompdf_gen');
            $this->navbarTitle = "Master";

        }else{
            redirect('Login');
        }
    }

    function pengaduan(){

        $data['pengaduan'] = $this->The_Model->getAllDataPengaduan()->result();
        $data['jmlBaru'] =  $this->The_Model->getPengaduanBaru()->num_rows();
        $data['jmlProses'] =  $this->The_Model->getPengaduanProses()->num_rows();
        $data['jmlSelesai'] =  $this->The_Model->getPengaduanSelesai()->num_rows();
        $data['jmlSemua'] =  $this->The_Model->getAllDataPengaduan()->num_rows();

        $this->load->view('admin/top');
        $this->load->view('admin/asidebar');
        $this->load->view('pengaduan/pengaduan_admin',$data);
        $this->load->view('admin/bottom');
    }

    function getPengaduanBaru(){
        $data['pengaduan'] = $this->The_Model->getPengaduanBaru()->result();
        $data['jmlBaru'] =  $this->The_Model->getPengaduanBaru()->num_rows();
        $data['jmlProses'] =  $this->The_Model->getPengaduanProses()->num_rows();
        $data['jmlSelesai'] =  $this->The_Model->getPengaduanSelesai()->num_rows();
        $data['jmlSemua'] =  $this->The_Model->getAllDataPengaduan()->num_rows();

        $this->load->view('admin/top');
        $this->load->view('admin/asidebar');
        $this->load->view('pengaduan/pengaduan_admin',$data);
        $this->load->view('admin/bottom');
    }

    function getPengaduanProses(){
        $data['pengaduan'] = $this->The_Model->getPengaduanProses()->result();
        $data['jmlBaru'] =  $this->The_Model->getPengaduanBaru()->num_rows();
        $data['jmlProses'] =  $this->The_Model->getPengaduanProses()->num_rows();
        $data['jmlSelesai'] =  $this->The_Model->getPengaduanSelesai()->num_rows();
        $data['jmlSemua'] =  $this->The_Model->getAllDataPengaduan()->num_rows();

        $this->load->view('admin/top');
        $this->load->view('admin/asidebar');
        $this->load->view('pengaduan/pengaduan_admin',$data);
        $this->load->view('admin/bottom');
    }

    function getPengaduanSelesai(){
        $data['pengaduan'] = $this->The_Model->getPengaduanSelesai()->result();
        $data['jmlBaru'] =  $this->The_Model->getPengaduanBaru()->num_rows();
        $data['jmlProses'] =  $this->The_Model->getPengaduanProses()->num_rows();
        $data['jmlSelesai'] =  $this->The_Model->getPengaduanSelesai()->num_rows();
        $data['jmlSemua'] =  $this->The_Model->getAllDataPengaduan()->num_rows();

        $this->load->view('admin/top');
        $this->load->view('admin/asidebar');
        $this->load->view('pengaduan/pengaduan_admin',$data);
        $this->load->view('admin/bottom');
    }

    function detailPengaduan($idPengaduan){
        $data['pengaduan'] = $this->The_Model->getDetailPengaduanByID($idPengaduan)->result();
        foreach ($data['pengaduan'] as $d){
            $idUser = $d->id_user;
            $kodePengaduan = $d->kode_pengaduan;
            $idPengaduan = $d->id_pengaduan;
        }
        $data['tanggapan'] = $this->The_Model->getTanggapanByIdPengaduan($idPengaduan)->result();



        $data['user'] = $this->The_Model->getDataUser($idUser)->result();
        $data['saksi'] = $this->The_Model->getDataSaksi($kodePengaduan)->result();

        $this->load->view('admin/top');
        $this->load->view('admin/asidebar');
        $this->load->view('pengaduan/admin_detail_pengaduan',$data);
        $this->load->view('admin/bottom');
    }

    function pengaduan_validasi(){
        $idPengaduan = $this->input->post('id_pengaduan');

        $dataUpdateValidasi = array(
            'validasi'=>"T"
        );

        $this->db->where("id_pengaduan",$idPengaduan);
        $this->db->update($this->tb_pengaduan,$dataUpdateValidasi);

        redirect('Master/detailPengaduan/'.$idPengaduan);
    }


    function tanggapan_simpan(){
        $in['isi_tanggapan'] = $this->input->post('isi_tanggapan');
        $in['id_pengaduan'] = $this->input->post('id_pengaduan');
        $in['pasal'] = $this->input->post('txtPasal');
        $in['jenis_kejahatan'] = $this->input->post('jenisKejahatan');
        $publish = $this->input->post('status_pengaduan');
        $kode_pengaduan = $this->input->post('kode_pengaduan');

        $this->db->insert($this->tb_tanggapan,$in);
        $this->session->set_flashdata("success","Tambah Data Tanggapan Berhasil");

        $dataUpdateStatus = array(
            'status'=>$publish
        );

        $this->db->where("id_pengaduan",$in['id_pengaduan']);
        $this->db->update($this->tb_pengaduan,$dataUpdateStatus);

        redirect('Master/detailPengaduan/'.$in['id_pengaduan']);
    }

    function tanggapan_update(){
        $in['isi_tanggapan'] = $this->input->post('isi_tanggapan');
        $in['id_pengaduan'] = $this->input->post('id_pengaduan');
        $publish = $this->input->post('status_pengaduan');
        $kode_pengaduan = $this->input->post('kode_pengaduan');

        $dataUpdateStatus = array(
            'status'=>$publish
        );

        $this->db->where("id_pengaduan",$in['id_pengaduan']);
        $this->db->update($this->tb_pengaduan,$dataUpdateStatus);

        $dataUpdateIsiTanggapan = array(
            'isi_tanggapan'=>$in['isi_tanggapan']
        );

        $this->db->where("id_pengaduan",$in['id_pengaduan']);
        $this->db->update($this->tb_tanggapan,$dataUpdateIsiTanggapan);

        $this->session->set_flashdata("success_update","Update Data Pengaduan Berhasil");
        redirect('Master/detailPengaduan/'.$in['id_pengaduan']);

    }

    function tanggapan_update_statusAduan(){
        $in['id_pengaduan'] = $this->input->post('id_pengaduan');
        $publish = $this->input->post('status_pengaduan');
        $kode_pengaduan = $this->input->post('kode_pengaduan');

        $dataUpdateStatus = array(
            'status'=>$publish
        );

        $this->db->where("id_pengaduan",$in['id_pengaduan']);
        $this->db->update($this->tb_pengaduan,$dataUpdateStatus);

        $this->session->set_flashdata("success_update","Update Data Pengaduan Berhasil");
        redirect('Master/detailPengaduan/'.$in['id_pengaduan']);
    }

    function pelapor(){
        $data['pelapor'] = $this->The_Model->getAllDataPelapor()->result();

        $this->load->view('admin/top');
        $this->load->view('admin/asidebar');
        $this->load->view('pelapor/pelapor',$data);
        $this->load->view('admin/bottom');
    }

    function detailPelapor($idPelapor){
        $data['pelapor'] = $this->The_Model->getDetailPelapor($idPelapor)->result();

        $data['pengaduan'] = $this->The_Model->getDataPengaduanByUser($idPelapor)->result();

        $this->load->view('admin/top');
        $this->load->view('admin/asidebar');
        $this->load->view('pelapor/detail_pelapor',$data);
        $this->load->view('admin/bottom');
    }

    function nonAktifPengguna($idUser){

        $dataUpddateStatus = array(
          'publish'=>"F"
        );

        $this->db->where("id_user",$idUser);
        $this->db->update($this->tb_user,$dataUpddateStatus);

        redirect('Master/detailPelapor/'.$idUser);
    }

    function aktifkanPengguna($idUser){

        $dataUpddateStatus = array(
            'publish'=>"T"
        );

        $this->db->where("id_user",$idUser);
        $this->db->update($this->tb_user,$dataUpddateStatus);

        redirect('Master/detailPelapor/'.$idUser);
    }

    function cetak_pengaduan($idPengaduan){
        $data['pengaduan'] = $this->The_Model->getDetailPengaduanByID($idPengaduan)->result();
        $data['tanggapan'] = $this->The_Model->getTanggapanByIdPengaduan($idPengaduan)->result();

        foreach ($data['pengaduan'] as $d){
            $idUser = $d->id_user;
        }

        $data['user'] = $this->The_Model->getDataUser($idUser)->result();
        $data['saksi'] = $this->The_Model->getDataSaksi($idPengaduan)->result();
        $data['tanggalNow'] =  date('Y-m-d');

        $this->load->view('report/laporan', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'portrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_pengaduan.pdf", array('Attachment'=>0));

    }



}