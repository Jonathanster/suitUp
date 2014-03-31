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
			$this->load->view('profile_begin_view', $data);
			$this->load->view('templates/footer_quiz', $data);
		}
		function create()
		{
			$this->load->helper('form');

			$data['title'] = "Suit Up Quiz";
			$this->quiz_model->create_profile();
			$this->load->view('templates/header_quiz', $data);
			$this->load->view('scorequiz');
			$this->load->view('templates/footer_quiz', $data);
		}

	}
