<?php

class C_SMasuk extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("Login"));
        }
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_SMasuk');
        $this->load->library('upload');
    }

    function index()
    {
        $suratDB = $this->M_SMasuk->cekIdSurat();
        $nourutSuratMasuk = substr($suratDB, 5, 4);
        $Id_SuratMasukSekarang = $nourutSuratMasuk + 1;

        $data = array('Id_SMasuk' => $Id_SuratMasukSekarang);
        $data['suratmasuk'] = $this->M_SMasuk->tampil_data()->result();
        $this->load->view('Template/Header');
        $this->load->view('Template/Navbar');
        $this->load->view('SMasuk/T_SMasuk', $data);
        $this->load->view('Template/Created');
        $this->load->view('Template/Footer');
    }

    function Upload()
    {
        $Id_SMasuk   = $this->input->post('Id_SMasuk');
        $Tgl_Penerimaan = $this->input->post('Tgl_Penerimaan');
        $No_SMasuk = $this->input->post('No_SMasuk');
        $Tanggal    = $this->input->post('Tanggal');
        $Pengirim = $this->input->post('Pengirim');
        $IsiSingkat = $this->input->post('IsiSingkat');

        // get foto
        $config['upload_path'] = './assets/fileSMasuk';
        $config['allowed_types'] = 'jpg|png|jpeg|gif|pdf|docx';
        $config['max_size'] = '3048';  //2MB max
        $config['max_width'] = '4480'; // pixel 
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['fotopost']['name'])) {
            if ($this->upload->do_upload('fotopost')) {
                $foto = $this->upload->data();
                $data = array(

                    'foto'           => $foto['file_name'],
                    'Id_SMasuk'         => $Id_SMasuk,
                    'Tgl_Penerimaan'    => $Tgl_Penerimaan,
                    'No_SMasuk'         => $No_SMasuk,
                    'Tanggal'           => $Tanggal,
                    'Pengirim'          => $Pengirim,
                    'IsiSingkat'        => $IsiSingkat,
                );
                $this->M_SMasuk->insert($data);
                $this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('C_SMasuk');
            } else {
                $this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data gagal di tambahkan, mohon perhatikan ukuran file<b>(2mb)</b> dan jenis filenya<b>(pdf/docx)</b></strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            }
        } else {
            echo "tidak masuk";
        }
    }





    function Edit($Id_SMasuk)
    {
        $where = array('Id_SMasuk' => $Id_SMasuk);
        $data['suratmasuk'] = $this->M_SMasuk->Edit($where, 'suratmasuk')->result();
        $this->load->view('Template/Header');
        $this->load->view('Template/Navbar');
        $this->load->view('SMasuk/E_SMasuk', $data);
        $this->load->view('Template/Created');
        $this->load->view('Template/Footer');
    }

    function Update()
    {
        $Id_SMasuk   = $this->input->post('Id_SMasuk');
        $Tgl_Penerimaan = $this->input->post('Tgl_Penerimaan');
        $No_SMasuk = $this->input->post('No_SMasuk');
        $Tanggal    = $this->input->post('Tanggal');
        $Pengirim = $this->input->post('Pengirim');
        $IsiSingkat = $this->input->post('IsiSingkat');
        $path = './assets/FileSMasuk/';

        $kondisi = array('Id_SMasuk' => $Id_SMasuk);

        // get foto
        $config['upload_path']          = './assets/FileSMasuk';
        $config['allowed_types']        = 'pdf|docx';
        $config['max_size']             = '2048';  //2MB max
        $config['file_name']            = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['fotopost']['name'])) {
            if ($this->upload->do_upload('fotopost')) {
                $foto = $this->upload->data();
                $data = array(
                    'Id_SMasuk'         => $Id_SMasuk,
                    'foto'               => $foto['file_name'],
                    'Tgl_Penerimaan'    => $Tgl_Penerimaan,
                    'No_SMasuk'         => $No_SMasuk,
                    'Tanggal'           => $Tanggal,
                    'Pengirim'          => $Pengirim,
                    'IsiSingkat'        => $IsiSingkat,

                );
                // hapus file pada direktori
                unlink($path . $this->input->post('filelama'));

                $this->M_SMasuk->Update($data, $kondisi);
                $this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di Update</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('C_SMasuk');
            } else {
                $this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data gagal di tambahkan, mohon perhatikan ukuran file<b>(2mb)</b> dan jenis filenya<b>(pdf/docx)</b></strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            }
        } elseif (empty($_FILES['filepost']['name'])) {
            $this->M_SMasuk->update_smasuk_noimage($Id_SMasuk, $Tgl_Penerimaan, $No_SMasuk, $Tanggal, $Pengirim, $IsiSingkat);
            $this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('C_SMasuk');
        } else {
            echo "tidak masuk";
        }
    }

    function Delete($Id_SMasuk, $foto)
    {
        $path = './assets/fileSMasuk/';
        unlink($path . $foto);

        $where = array('Id_SMasuk' => $Id_SMasuk);
        $this->M_SMasuk->Delete($where, 'suratmasuk');
        $this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('C_SMasuk');
    }
}
