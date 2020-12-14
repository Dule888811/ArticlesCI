<?php


class Users extends CI_Controller
{

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->library('session');

	}

	public function index()
	{

			$this->load->view('Users/login');


	}
	public function login()
	{

		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('email','E-mail','trim|required');
		if($this->form_validation->run() == FALSE){

			$data = array(
				'errors' => validation_errors(),
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		}else {
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$this->load->model('User_model');
			$user_data = $this->User_model->login_user($email, $password);
			var_dump($user_data);
			if($user_data){
				$user_data = array(
					'email' => $email,
					'logged_in' => true
				);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('success', 'You are now logged in. Good for you.');
				$this->load->view('Users/home',$user_data);
			}else {
				$this->session->set_flashdata('false', 'Wrong data');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}
