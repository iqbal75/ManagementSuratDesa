<?php

class C_SKeluar extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("Login"));
        }
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_SKeluar');
    }

    function index()
    {
        $data['suratkeluar'] = $this->M_SKeluar->tampil_data()->result();
        $this->load->view('Template/Header');
        $this->load->view('Template/Navbar');
        $this->load->view('SKeluar/T_SKeluar', $data);
        $this->load->view('Template/Created');
        $this->load->view('Template/Footer');
    }

    function Edit($Id_Surat)
    {
        $where = array('Id_Surat' => $Id_Surat);
        $data['suratkeluar'] = $this->M_SKeluar->Edit($where, 'suratkeluar')->result();
        $this->load->view('Template/Header');
        $this->load->view('Template/Navbar');
        $this->load->view('SKeluar/D_SKeluar', $data);
        $this->load->view('Template/Created');
        $this->load->view('Template/Footer');
    }
}
