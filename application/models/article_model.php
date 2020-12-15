<?php


class article_model  extends CI_Model
{
	public function createArticle($data)
	{
		$input_data = $this->db->insert('article', $data);
		return $input_data;
	}
}
