<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['user'] = $this->m_data->get_data('tbl_user')->result();
		$data['judul'] = 'bukuinduk';
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_user',$data);
		$this->load->view('admin/v_footer');
	}
	function user_tambah(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_form');
		$this->load->view('admin/v_footer');
	}

	//function menyimpan_user_baru
	function aksi_tambah(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
		'username' => $email,
		'password' => md5($password),
		'level' => $level
		);

		// insert data ke database
		$this->m_data->insert_data($data,'tbl_user');

		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'user');


	}

	function user_edit($id){
		$id=$this->uri->segment(3);
		$where = array('id_user' => $id);
		// mengambil data dari database sesuai id
		$data['tbl_user'] = $this->m_data->edit_data($where,'tbl_user')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_user_edit',$data);
		$this->load->view('admin/v_footer');
		
		}
	


	function user_hapus($id){

		//mendapatkan parameter dari tombol klik
		$id_user=$this->uri->segment(3);
		$where = array(
		'id_user' => $id_user
		);

		// menghapus data petugas dari database sesuai id
		$this->m_data->delete_data($where,'tbl_user');

		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'user');
	}
		// akhir CRUD petugas

	}	
<<<<<<< HEAD

=======
>>>>>>> f4b2b7e448006bb92b9357db947ac20f535f0836
