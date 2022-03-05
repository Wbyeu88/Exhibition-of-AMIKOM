<?php
defined('BASEPATH') or exit('No direct script access allowed');

class gallery extends CI_Controller
{
    public function index()
    {
        $data = $this->db->get_where('karya', ['status' => '1'])->result();
        $karya['data'] = $data;
        $this->load->view('gallery', $karya);
    }
}
