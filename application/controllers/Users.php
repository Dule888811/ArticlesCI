<?php


class Users extends CI_Controller
{

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->model('article_model');
		$this->load->library('pagination');

	}

	public function index()
	{

			$this->load->view('Users/login');


	}
	public function login()
	{
		if($this->session->userdata('id')){
			$this->load->model('article_model');
			$id = $this->session->userdata('id');
			//	$articles = $this->article_model->getArticleByUserId($id);
			$config['base_url'] = base_url('index.php/Users/login/');
			$config['total_rows'] = count($this->article_model->getArticleByUserId($id));
			$config['per_page'] = 3;
			$config["uri_segment"] = 3;
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['articles'] = $this->article_model->getArticleByUserId($id,$config["per_page"], $page);
			$this->pagination->initialize($config);
				$this->session->set_userdata($data);
				$this->session->set_flashdata('success', 'You are now logged in. Good for you.');
				$this->load->view('Users/home',$data);
		}else{
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
				$data = $this->User_model->login_user($email, $password);
				$first_name = $data->first_name;
				$last_name = $data->last_name;
				$id = $data->id;
				$this->load->model('article_model');
				//	$articles = $this->article_model->getArticleByUserId($id);
				$config['base_url'] = base_url('index.php/Users/login/');
				$config['total_rows'] = count($this->article_model->getArticleByUserId($id));
				$config['per_page'] = 3;
				$config["uri_segment"] = 3;
				$page = ($this->uri->segment(3)) ? $this->uri->segment(2) : 0;
				$articles = $this->article_model->getArticleByUserId($id,$config["per_page"], $page);
				$this->pagination->initialize($config);

				if($data){
					$data = array(
						'articles'	=> $articles,
						'email' 	 => $email,
						'first_name' => $first_name,
						'last_name'  => $last_name,
						'id' 		 => $id,
						'logged_in'  => true
					);
					$this->session->set_userdata($data);
					$this->session->set_flashdata('success', 'You are now logged in. Good for you.');
					$this->load->view('Users/home',$data);
				}else {
					$this->session->set_flashdata('false', 'Wrong data');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}


	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Users');
	}
}
