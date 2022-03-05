<?php

class karya extends  CI_Controller
{

	public function index()
	{
		$email = $this->session->userdata('email');
		$id = $this->db->get_where('sign_up', ['email' => $email])->row_array();
		// var_dump($id['id_login']);
		$data1 = $this->db->get_where('karya', ['id_login' => $id['id_login']])->result();
		$karya['data'] = $data1;
		// var_dump($karya);
		$this->load->view('karya', $karya);
		// $data['content'] = $this->db->get_where('karya', 'id_login' = data['id_lgoin']);
		// $this->load->view('karya', $data['content']);
		// var_dump($data['id_login']);
		// die;
	}
	// public function getByEmail()
	// {
	// 	$email = $this->session->userdata('email');
	// 	$data = $this->db->get_where('sign_up', ['email' => $email])->row_array();
	// 	var_dump($data);
	// 	die;
	// }
}
