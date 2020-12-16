<?php


class Articles extends CI_Controller
{
	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('article_model');
		$this->load->library('session');
		$this->load->library('upload');
	}

	public function create()
	{
		$this->load->view('Articles/addArticle');
	}

	public function edit($id)
	{
		$data['article'] = $this->article_model->getArticle($id);
		$this->load->view('Articles/editArticle',$data);


	}



	public function addArticle()
	{
		$this->form_validation->set_rules('title', 'Naslov', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('blog', 'Text', 'trim|required');
		$this->form_validation->set_rules('user_id', 'User', 'required|trim');
		if ($this->form_validation->run() == false) {
			$data['main'] = "articles/articleAdd";
			$this->load->view('layouts/main', $data);
		} else {
			$dataImage[] = '';

				for ($i = 0; $i < count($_FILES['item_image']["name"]); $i++) {
					$title = time() . $_FILES['item_image']["name"][$i];
					$data = $_FILES['item_image']['tmp_name'][$i];
					$content = file_get_contents($data);
					$img = "assetc/images/" . $title;
					file_put_contents($img, json_encode($content));
					$dataImage[] = $title;
				}


			$data = array(
				'headline' => $this->input->post('title'),
				'content' => $this->input->post('blog'),
				'image' => json_encode(implode(',' ,$dataImage)),
				'user_id' => $this->input->post('user_id')
			);
			if ($this->article_model->createArticle($data)) {
				redirect($_SERVER['HTTP_REFERER']);
			}

		}
	}
	public function editArticle($id)
	{

			$dataImage[] = '';

				for ($i = 0; $i < count($_FILES['item_image']["name"]); $i++) {
					$title = time() . $_FILES['item_image']["name"][$i];
					$data = $_FILES['item_image']['tmp_name'][$i];
					if(!empty($data)){
						$content = file_get_contents($data);
						$img = "assetc/images/" . $title;
						file_put_contents($img, json_encode($content));
						$dataImage[] = $title;
					}

				}

			$data = array(
				'headline' => $this->input->post('title'),
				'content' => $this->input->post('blog'),
				'image' => json_encode(implode(',', $dataImage)),
				'id' => $id
			);
			var_dump($id,$data);
			if ($this->article_model->editArticle($id,$data)) {
				echo "succes";
			}
		}

	public function delete($id){
		$this->article_model->delete($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
