<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_absen');
	}

	public function index()
	{
		$data['profil'] = $this->session->userdata();
		$this->load->view('user', $data);
	}


	public function prosesIn()
	{
		$user = $this->session->userdata();
		$timestamp = date('Y-m-d H:i:s');
		$arrInsert = array(
			'user_id' => $user['id'],
			'in' => $timestamp,
		);
		$this->m_absen->insertDataAbsen($arrInsert);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">BERHASIL MASUK ' . $timestamp . '</div>');
		redirect(base_url('user'));
	}

	public function prosesOut()
	{
		$user = $this->session->userdata();
		$id = $user['id'];
		$timestamp = date('Y-m-d H:i:s');

		$arrInsert = array(
			'out' => $timestamp,
		);

		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">BERHASIL KELUAR ' . $timestamp . '</div>');

		$this->m_absen->outDataAbsen($id, $arrInsert);
		redirect(base_url('user'));
	}
}
