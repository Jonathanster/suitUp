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
			$data['quizs'] = $this->quiz_model->getQuizs();
			$this->load->view('templates/header_quiz', $data);
			$this->load->view('profile_begin_view', $data);
			$this->load->view('templates/footer_quiz', $data);
		}

		function create()
		{
			$this->load->helper('form');


			$data['title'] = "Suit Up Quiz";
			$this->load->view('templates/header_quiz', $data);
			$this->load->view('quiz_view');
			$this->load->view('templates/footer_quiz', $data);	
		}

		function update($id)
		{
			$this->load->helper('form');

			$data['title']="Suit Up Quiz";
			$data['quiz'] = $this->quiz_model->getQuiz($id);
			$this->load->view('templates/header_quiz', $data);
			$this->load->view('quiz_update', $data);
			$this->load->view('templates/footer_quiz', $data);		
		}
		function update_quiz($id)
		{
			$this->load->helper('form');

			$data['title'] = "Suit Up Quiz";
			$this->quiz_model->update_result($id);
			$this->load->view('quiz_update_success_view', $data);
		}

		function viewPast()
		{
			$this->load->helper('form');

			$data['title']="Suit Up Quiz";
			$this->load->view('templates/header_quiz', $data);
			$this->load->view('past_result_view', $data);
			$this->load->view('templates/footer_quiz', $data);		
		}

		function answerquiz()
		{
			$this->load->helper('form');			

			$points = 0;
			foreach($_POST as $quizanswer) {
			    $points = $points + $quizanswer;
			}
			// Now points is the total of all field values.  Let's see where we want to go.

			//Change the quiz_results_view to the results pages

			if ($points >20) {
  			    $data['title'] = "Suit Up Quiz!";
  				
  				$this->quiz_model->create_profileCL();
 -				$this->load->view('templates/header_quiz', $data);
  				$this->load->view('classic');
 -				$this->load->view('templates/footer_quiz', $data);
			} else if ($points >15) {
  			    $data['title'] = "Suit Up Quiz!";
  				  				
  				$this->quiz_model->create_profileRU();
 -				$this->load->view('templates/header_quiz', $data);
  				$this->load->view('rugged');
 -				$this->load->view('templates/footer_quiz', $data);
  			} else if ($points >10) {
  			    $data['title'] = "Suit Up Quiz!";
  				
  				$this->quiz_model->create_profileCR();
 -				$this->load->view('templates/header_quiz', $data);
  				$this->load->view('creative');
 -				$this->load->view('templates/footer_quiz', $data);
  		 	} else if ($points >0) {
			    $data['title'] = "Suit Up Quiz!";

  				$this->quiz_model->create_profileCA();
 -				$this->load->view('templates/header_quiz', $data);
  				$this->load->view('casual');
 -				$this->load->view('templates/footer_quiz', $data);
  			} else {
  				$data['title'] = "Suit Up Quiz!";

 -				$this->load->view('templates/header_quiz', $data);
  				$this->load->view('profile_begin_view');
 -				$this->load->view('templates/footer_quiz', $data);
  			}


			
		}
		function Casual()
		{
			  	$data['title'] = "Suit Up Quiz!";

 -				$this->load->view('templates/header_quiz', $data);
  				$this->load->view('casual');
 -				$this->load->view('templates/footer_quiz', $data);
		}

		function Creative()
		{
			  	$data['title'] = "Suit Up Quiz!";

 -				$this->load->view('templates/header_quiz', $data);
  				$this->load->view('creative');
 -				$this->load->view('templates/footer_quiz', $data);
		}

		function Rugged()
		{
			  	$data['title'] = "Suit Up Quiz!";

 -				$this->load->view('templates/header_quiz', $data);
  				$this->load->view('rugged');
 -				$this->load->view('templates/footer_quiz', $data);
		}

		function Classic()
		{
			  	$data['title'] = "Suit Up Quiz!";

 -				$this->load->view('templates/header_quiz', $data);
  				$this->load->view('classic');
 -				$this->load->view('templates/footer_quiz', $data);
		}

		

	}
