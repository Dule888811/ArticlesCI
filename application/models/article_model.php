<?php


class article_model  extends CI_Model
{
	public function createArticle($data)
	{
		$input_data = $this->db->insert('article', $data);
		return $input_data;
	}

	public function getArticleByUserId($id, $limit = false, $offset = false)
	{
		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		$articles = $this->db->where('user_id', $id)->get('article')->result();
		return $articles;
	}
	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('article');
	}
}
