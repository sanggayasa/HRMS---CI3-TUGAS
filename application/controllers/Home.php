<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		$this->load->model('m_user');
		$this->load->model('m_absen');
	}


	public function index()
	{
		$data['profil'] = $this->session->userdata();

		$queryAllUser = $this->m_user->getDataUser();
		$data['queryUser'] = $queryAllUser;
		$this->load->view('template/header', $data);
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}

	public function halaman_tambah()
	{
		$data['profil'] = $this->session->userdata();
		$this->load->view('template/header', $data);
		$this->load->view('adduser');
		$this->load->view('template/footer');
	}

	public function halaman_edit($id)
	{
		$data['profil'] = $this->session->userdata();
		$queryUser = $this->m_user->getDetail($id);
		$data['querydetail'] =  $queryUser;
		$this->load->view('template/header', $data);
		$this->load->view('edituser', $data);
		$this->load->view('template/footer');
	}

	public function prosesTambah()
	{
		$name = $this->input->post("name");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$role = $this->input->post("role");
		$departemen = $this->input->post("departemen");
		$position = $this->input->post("position");

		$arrInsert = array(
			'name' => $name,
			'username' => $username,
			'password' => $password,
			'role' => $role,
			'departemen' => $departemen,
			'position' => $position
		);

		$this->m_user->insertDataUser($arrInsert);
		redirect(base_url('home'));
	}

	public function prosesEdit()
	{
		$id = $this->input->post("id");
		$name = $this->input->post("name");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$role = $this->input->post("role");
		$departemen = $this->input->post("departemen");
		$position = $this->input->post("position");

		$arrInsert = array(
			'name' => $name,
			'username' => $username,
			'password' => $password,
			'role' => $role,
			'departemen' => $departemen,
			'position' => $position
		);

		$this->m_user->updateUser($id, $arrInsert);
		redirect(base_url('home'));
	}

	public function prosesDelete($id)
	{
		$this->m_user->deleteUser($id);
		redirect(base_url('home'));
	}

	public function absen()
	{
		$data['profil'] = $this->session->userdata();
		$queryAllUser = $this->m_absen->getDataAbsen();
		$data['queryAbsen'] = $queryAllUser;

		$this->load->view('template/header', $data);
		$this->load->view('absen', $data);
		$this->load->view('template/footer');
	}
}
