<?php
class admin extends CI_Controller
{
    /*
    public function __construct(){
        $this->load->library('session');
    } */

    public function index()
    {
        $data = $this->db->get('karya')->result();
        $karya['data'] = $data;
        // var_dump($karya);
        // die;
        $this->load->view('admin/admin', $karya);
    }
    public function approval()
    {
        if ($this->input->post('approve')) {
            $this->approveKarya();
        } else {
            $this->rejectKarya();
        }
    }
    public function approveKarya()
    {
        $id = $this->input->post('approve');
        $data = array(
            'status' => '1'
        );
        // var_dump($data);
        // die;
        $this->db->where('id_karya', $id);
        $this->db->update('karya', $data);
        redirect('admin');
    }
    public function rejectKarya()
    {
        $id = $this->input->post('reject');
        $data = array(
            'status' => '0'
        );
        // var_dump($data);
        // die;
        $this->db->where('id_karya', $id);
        $this->db->update('karya', $data);
        redirect('admin');
    }

    public function admDonation()
    {
        $data = $this->db->get('donasi')->result();
        $karya['data'] = $data;
        $this->load->view('admin/admDonation', $karya);
    }
}
