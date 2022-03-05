<?php
class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('login');
    }

    public function prosesLogin()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('sign_up', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $email,
                    'password' => $password
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'admin') {
                    redirect('admin');
                } else {
                    redirect('home');
                }
                redirect('home');
            } else {
                $this->session->set_flashdata('flash', 'Login failed');
                redirect('login');
                
            }
            // if (password_verify($password, $user['password'])) {
            //     $this->load->view('home');
            // } else {
            //     $this->load->view('login');
            // }
        } else {
            $this->session->set_flashdata('flash', 'Login failed');
            redirect('login');
        }
    }
}