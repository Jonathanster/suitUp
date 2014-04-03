<?php
  class Quiz_model extends CI_MODEL{
  	function create_profile()
  	{
  		$data['id'] = $this->input->post('id');
  		$data['name'] = $this->input->post('name');
  		$data['age'] = $this->input->post('age');
  		$data['email'] = $this->input->post('email');
  		//$data['result'] = $this->input->post('result');
  		
  		return $this->db->insert('quizData', $data);

  	}
  	function getResults
  	{
  		$query = $this->db->get('quizData');
  		return $query->result_array()
  	}
  	function save_answers()
	  {
      
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
