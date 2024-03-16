<?php

class QuestionModel extends CI_Model
{
	public function findCorrectAnswerBy($question)
	{
		$this->db->where('ques_refrence', $question);
		return $this->db->get('answers')->row()->answer;
	}
}
