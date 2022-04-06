<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()

	{
		$this->load->view('admin/v_login');
	}
	//validasi login
	function login_aksi(){

//deklarasi
		/*$email = $this->input->post('email');
		$password = $this->input->post('password');
		//$_POST['variable'];
		echo $email.'<br>'.$password;
		*/
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		//$sebagai = $this->input->post('sebagai');

		$this->form_validation->set_rules('email','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() !=false) {
			$where = array(
				'username' => $email,
				'password' => md5($password)
			);

			//if($sebagai == "admin"){
				$cek = $this->m_data->cek_login('tbl_user',$where)->num_rows();

				$data = $this->m_data->cek_login('tbl_user',$where)->row();
				
				if($cek > 0) {
					$data_session = array(
						'id' => $data->id_user,
						'username' => $data->username,
						'status' => 'admin login' 
					);

					$this->session->set_userdata($data_session);

					redirect (base_url().'home');
				}else{
					redirect(base_url().'login?alert=gagal');
				}

			//}
			}else{
				$this->load->view('admin/v_login');
			}
			
		}
	}	