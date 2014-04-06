<?php
  class Quiz_model extends CI_MODEL{
  	function create_profile()
  	{
  		$data['id'] = $this->input->post('id');
  		$data['name'] = $this->input->post('name');
  		$data['age'] = $this->input->post('age');
  		$data['email'] = $this->input->post('email');
  		$data['result'] = $this->input->post('result');
  		
  		return $this->db->insert('quizData', $data);

  	}
    function getQuizs()
    {
      $query = $this->db->get('quizData');
      return $query->result_array();
    }
    function getQuiz($id)
    {
      $query = $this->db->get_where('quizData', array('id' => $id));
      return $query->result_array();
    }
    function update_result($id)
    {
      $data['name'] = $this->input->post('name');
      $data['age'] = $this->input->post('age');
      $data['email'] = $this->input->post('email');
      $data['result'] = $this->input->post('result');
      $this->db->where('id', $id);
      $this->db->update('quizData', $data);
    }
  	//Fix this function, not fully functional
  	function search_result()
  	{
  		$search_term = $this->input->post('searchquery');
  		$sql = "SELECT * FROM quizData WHERE MATCH (id) AGAINST ('" . $search_term . "')";
		$query = $this->db->query($sql);
		return $query->result_array();
  	}
  
  	

  }
