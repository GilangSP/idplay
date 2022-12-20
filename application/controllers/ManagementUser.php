<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManagementUser extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Management_user_model', 'managementuser');
	}

	public function index()
	{
		$data['title'] = 'Data User Admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['User'] = $this->managementuser->getUserRole();
		$data['User_Role'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('managementUser/index', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->input->post('is_active') == null) {
				$is_active = '0';
			} else {
				$is_active = $this->input->post('is_active');
			}
			$data = [
				'name' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'image' => 'default.png',
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('role_id'),
				'is_active' => $is_active,
				'date_created' => time()
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata(
				'message_managementUser',
				'<div class="alert alert-success" role="alert">
            		New User Added!
            	</div>'
			);
			redirect('managementUser');
			// echo json_encode($data);
		}
	}

	public function getUserAdminModal()
	{
		$data = $this->db->get_where('user', ['id' => $_POST['id']])->row_array();
		echo json_encode($data);
	}

	public function editUserAdminModal()
	{
		$data['title'] = 'Data User Admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['User'] = $this->managementuser->getUserRole();
		$data['User_Role'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() ==  false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('managementUser', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->input->post('is_active') == null) {
				$is_active = '0';
			} else {
				$is_active = $this->input->post('is_active');
			}
			if ($this->input->post('password') == null) {
				$data = [
					'name' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'role_id' => $this->input->post('role_id'),
					'is_active' => $is_active
				];
			} else {
				$data = [
					'name' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'role_id' => $this->input->post('role_id'),
					'is_active' => $is_active
				];
			}
			// echo json_encode($data);
			$this->managementuser->editUserAdminById($_POST['id'], $data);
			$this->session->set_flashdata(
				'message_managementUser',
				'<div class="alert alert-success" role="alert">
            			Success Edit User Admin!
            		</div>'
			);
			redirect('managementUser');
		}
	}

	public function deleteUserAdminModal()
	{
		$this->managementuser->deleteUserAdminById($this->input->post('id_s'));

		$this->session->set_flashdata(
			'message_managementUser',
			'<div class="alert alert-success" role="alert">
				Success Delete User Admin!
			</div>'
		);
		redirect('managementUser');
	}

	// Detail User Admin
	public function detailUserAdmin($id)
	{
		$data['title'] = 'User Admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['UserById'] = $this->managementuser->getUserRoleById($id);

		if ($this->form_validation->run() ==  false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('managementUser/detailUserAdmin', $data);
			$this->load->view('templates/footer');
		} else {
		}
	}

	// Data User Petugas
	public function petugas()
	{
		$data['title'] = 'Data User Petugas';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['User'] = $this->managementuser->getUserRolePetugas();
		$data['User_Role'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('managementUser/petugas', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->input->post('is_active') == null) {
				$is_active = '0';
			} else {
				$is_active = $this->input->post('is_active');
			}
			$data = [
				'name' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'image' => 'default.png',
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('role_id'),
				'is_active' => $is_active,
				'date_created' => time()
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata(
				'message_managementUser',
				'<div class="alert alert-success" role="alert">
		        	New User Added!
		        </div>'
			);
			redirect('managementUser/petugas');
			// echo json_encode($data);
		}
	}

	public function editUserPetugasModal()
	{
		$data['title'] = 'Data User Petugas';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['User'] = $this->managementuser->getUserRole();
		$data['User_Role'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('managementUser', $data);
			$this->load->view('templates/footer');
		} else {
			if ($this->input->post('is_active') == null) {
				$is_active = '0';
			} else {
				$is_active = $this->input->post('is_active');
			}
			if ($this->input->post('password') == null) {
				$data = [
					'name' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'role_id' => $this->input->post('role_id'),
					'is_active' => $is_active
				];
			} else {
				$data = [
					'name' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'role_id' => $this->input->post('role_id'),
					'is_active' => $is_active
				];
			}
			// echo json_encode($data);
			$this->managementuser->editUserAdminById($_POST['id'], $data);
			$this->session->set_flashdata(
				'message_managementUser',
				'<div class="alert alert-success" role="alert">
					Success Edit User Admin!
				</div>'
			);
			redirect('managementUser');
		}
	}

	public function deleteUserPetugasModal()
	{
		$this->managementuser->deleteUserAdminById($this->input->post('id_s'));

		$this->session->set_flashdata(
			'message_managementUser',
			'<div class="alert alert-success" role="alert">
				Success Delete User Admin!
			</div>'
		);
		redirect('managementUser');
	}
}
