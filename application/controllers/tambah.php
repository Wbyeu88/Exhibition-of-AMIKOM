<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tambah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('tambah_model');
    }

    public function index()
    {
        $this->load->view('tambah');
    }


    public function tambah()
    {
        $artis = $this->input->post('artis');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path']          = './assets/userfile_karya';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            redirect('tambah');
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('karya');
        }
        $gambar = $this->upload->data('file_name');
        $email = $this->session->userdata('email');
        $data = $this->db->get_where('sign_up', ['email' => $email])->row_array();
        $data = array(
            'id_login' => $data['id_login'],
            'artis' => $artis,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
            'status' => '0'
        );
        $this->db->insert('karya', $data);
        redirect('karya');
    }

    // public function delete()
    // {
    //     // $email = $this->session->userdata('email');
    //     // $id = $this->db->get_where('sign_up', ['email' => $email])->row_array();
    //     // $id_login = $id['id_login'];
    //     // $this->db->where('id_login', $id_login);
    //     // $this->db->delete('karya');
    //     // redirect('karya');
    //     $id = $this->input->post('delete');
    //     $this->db->where('id_karya', $id);
    //     $this->db->delete('karya');
    //     redirect('karya');
    //     // $data = array(
    //     //     'status' => '0'
    //     // );
    //     // // var_dump($data);
    //     // // die;
    //     // $this->db->where('id_karya', $id);
    //     // $this->db->update('karya', $data);
    //     // redirect('admin');
    // }



    // public function tambah()
    // {
    //     $artis = $this->input->post('artis');
    //     $judul = $this->input->post('judul');
    //     $deskripsi = $this->input->post('deskripsi');


    //     $config['upload_path']          = './assets/userfile_karya';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['max_size']             = 100;
    //     $config['max_width']            = 1024;
    //     $config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('invoice')) {
    //         redirect('donate');
    //     } else {
    //         $data = array('upload_data' => $this->upload->data());

    //         $this->load->view('home');
    //     }
    //     $invoice = $this->upload->data('file_name');



    //     $data = array(
    //         'email' => $email,
    //         // 'username' => $username,
    //         // 'phone' => $phone,
    //         'amount' => $amount,
    //         'note' => $donateNote,
    //         'confirmation' => $invoice
    //     );
    //     $this->db->insert('donasi', $data);
    // }
}