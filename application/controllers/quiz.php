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
			$this->load->view('quiz_view');
			$this->load->view('templates/footer_quiz', $data);		
		}
		function answerquiz()
		{
			$this->load->helper('form');

			
// First, go through all the questions:
$points = 0;
foreach($_POST as $quizanswer) {
    $points = $points + $quizanswer;
}

// Now points is the total of all field values.  Let's see where we want to go.
if ($points > 6) {
    header('http://www.google.com');
} else if ($points > 11) {
    header('http://www.yahoo.com');
} else if ($points > 16) {
    header('http://www.facebook.com');
} else {
    header('http://www.thaiexpress.com');
}


			$data['title'] = "Suit Up Quiz!";
			$this->quiz_model->save_answers();
			$this->load->view('templates/header_quiz', $data);
			$this->load->view('quiz_results_view');
			$this->load->view('templates/footer_quiz', $data);	
		}

	}
