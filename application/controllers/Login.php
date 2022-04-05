<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()

	{
		$this->load->view('admin/v_login');
	}
	//validasi login
	function login_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$sebagai = $this->input->post('sebagai');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() !=false) {
			$where = array(
				'username' => $username,
				'password' => md5($password)
			);

			if($sebagai == "admin"){
				$cek = $this->m_data->cek_login('tbl_user','$where')->num_rows();

				$data = $this->m_data->cek_login('tbl_user','$where')->row();
				
				if($cek > 0) {
					$data_session = array(
						'id' => $data->id,
						'username' => $data->username,
						'status' => 'admin login' 
					);

					$this->session->set_userdata($data_session);

					redirect (base_url().'admin');
				}else{
					redirect(base_url().'login?alert=gagal');
				}

			}elseif ($sebagai == "petugas") {
				$cek = $this->m_data->cek_login('tbl_user',$where)->num_rows();

				$data = $this->m_data->cek_login('tbl_user',$where)->row();

				if($cek > 0) {
					$data_session = array(
						'id' => $data->id,
						'username' => $data->username,
						'status' => 'petugas_login' 
					);

					$this->session->set_userdata($data_session);

					redirect (base_url().'petugas');
				}else{
					redirect(base_url().'login?alert=gagal');
				}
				}
			}else{
				$this->load->view('admin/v_login');
			}
		}
	}	