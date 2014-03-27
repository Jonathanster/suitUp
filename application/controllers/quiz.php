<?php
	class Quiz extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('quiz_model');
		}
		function index()
		{
			$this->load->helper('form');

			$data['title'] = "Suit Up Quiz";
			$this->load->view('templates/header_quiz', $data);
			$this->load->view('quiz_begin_view', $data);
			$this->load->view('templates/footer_quiz', $data);
		}

	}
