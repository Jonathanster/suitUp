<?php
  class Quiz_model extends CI_MODEL{
  	function create_profileCA()
  	{
  		$data['name'] = $this->input->post('name');
  		$data['age'] = $this->input->post('age');
  		$data['email'] = $this->input->post('email');
      $resultValue = 'Casual';
      $data['result'] = $resultValue;
      $totalValue = $this->input->post('a') + $this->input->post('b') + $this->input->post('c') + $this->input->post('d') + $this->input->post('e') + $this->input->post('f');
      $data['comment'] = $totalValue;
  		
  		return $this->db->insert('quizData', $data);

  	}

    function create_profileCR()
    {
      $data['name'] = $this->input->post('name');
      $data['age'] = $this->input->post('age');
      $data['email'] = $this->input->post('email');
      $resultValue = 'Creative';
      $data['result'] = $resultValue;
      $totalValue = $this->input->post('a') + $this->input->post('b') + $this->input->post('c') + $this->input->post('d') + $this->input->post('e') + $this->input->post('f');
      $data['comment'] = $totalValue;
      
      return $this->db->insert('quizData', $data);

    }

    function create_profileRU()
    {
      $data['name'] = $this->input->post('name');
      $data['age'] = $this->input->post('age');
      $data['email'] = $this->input->post('email');
      $resultValue = 'Rugged';
      $data['result'] = $resultValue;
      $totalValue = $this->input->post('a') + $this->input->post('b') + $this->input->post('c') + $this->input->post('d') + $this->input->post('e') + $this->input->post('f');
      $data['comment'] = $totalValue;
      
      return $this->db->insert('quizData', $data);

    }

        function create_profileCL()
    {
      $data['name'] = $this->input->post('name');
      $data['age'] = $this->input->post('age');
      $data['email'] = $this->input->post('email');
      $resultValue = 'Classic';
      $data['result'] = $resultValue;
      $totalValue = $this->input->post('a') + $this->input->post('b') + $this->input->post('c') + $this->input->post('d') + $this->input->post('e') + $this->input->post('f');
      $data['comment'] = $totalValue;
      
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
