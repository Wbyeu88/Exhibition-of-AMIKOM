<?php
defined('BASEPATH') or exit('No direct script access allowed');

class edit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index($id)
    {
        $data['karya'] = $this->db->get_where('karya', array('id_karya' => $id))->row_object();
        $this->load->view('edit', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $artis = $this->input->post('artis');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path']          = './assets/userfile_karya';
        $config['allowed_types']        = 'gif|jpg|png';


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            redirect('edit/index/' . $id);
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
            // 'status' => '0'
        );
        $this->db->where('id_karya', $id);
        $this->db->update('karya', $data);
        redirect('karya/index/' . $id);
    }
    public function delete($id)
    {
        $this->db->where('id_karya', $id);
        $this->db->delete('karya');
        redirect('karya');
    }
}
