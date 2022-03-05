<?php
class register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('register');
    }

    public function registration()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', true);
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|trim', true);
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[sign_up.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'first_name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'),
                'gender' => $this->input->post('gender'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => 'user'
            ];

            $this->db->insert('sign_up', $data);

            redirect('login');
        }
    }
}
