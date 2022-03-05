<?php
class donate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('donate');
    }

    public function prosesDonasi()
    {
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $phone = $this->input->post('phone');
        $amount = $this->input->post('amount');
        $donateNote = $this->input->post('donationNote');


        $config['upload_path']          = './assets/donation_files';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('invoice')) {
            redirect('donate');
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('home');
        }
        $invoice = $this->upload->data('file_name');
        $email = $this->session->userdata('email');


        $data = array(
            // 'email' => $email,
            // 'username' => $username,
            // 'phone' => $phone,
            'email' => $email,
            'amount' => $amount,
            'note' => $donateNote,
            'confirmation' => $invoice
        );
        // var_dump($data);
        // die;
        $this->db->insert('donasi', $data);
    }
}
