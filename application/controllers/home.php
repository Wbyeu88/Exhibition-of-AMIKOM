<?php
class home extends CI_Controller
{
    /*
    public function __construct(){
        $this->load->library('session');
    } */
    function tampil_data(){
        return $this->db->get('karya');
    }
    public function index()
    {
		$data['karya'] = $this->tampil_data()->result();
        $this->load->view('home', $data);
    }
}