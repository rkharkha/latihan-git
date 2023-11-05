<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->library('session');
        $item = [
            'nama',
            'nis',
            'kelas',
            'tanggal_lahir',
            'jenis_kelamin',
            'agama',

        ];
        $this->session->unset_userdata($item);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'Nis', 'required|numeric');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'TanggalLahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'TempatLahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');


        $this->form_validation->set_rules('jenis_kelamin', 'JenisKelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layouts/header');
            $this->load->view('siswa/index2');
            $this->load->view('layouts/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'alamat' => $this->input->post('alamat'),


            ];
            $this->session->set_userdata($data);

            return redirect('siswa/detail');
        }
    }
    public function create()
    {
        $this->load->view('layouts/header');
        $this->load->view('siswa/detail');
        $this->load->view('layouts/footer');
    }
    public function detail()
    {
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->view('layouts/header');
        $this->load->view('siswa/detail2');
        $this->load->view('layouts/footer');
    }
}
