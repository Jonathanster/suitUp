<?php
	class Blog extends CI_Controller {
		public function __construct() //[SPACE] double underscore...why?
		{
			parent::__construct();
			$this->load->model('blog_model');
		}
		function index()
		{
			$this->load->helper('form');

			$data['title'] = "Jonathan Young's Blog";
			$data['posts'] = $this->blog_model->getPosts();
			$this->load->view('templates/header_blog', $data);
			$this->load->view('blog_single_view', $data);
			<!--testing123-->
			$this->load->view('templates/footer_blog', $data);
		}

		function search()
		{
			$this->load->helper('form');
			$data['title'] = "My Blog";
			$data['posts'] = $this->blog_model->search_post();
			$this->load->view('blog_search_view', $data);
		}

		function post($id)
		{
			$this->load->helper('form');

			$data['title'] = "Jonathan Young's Blog";
			$data['post'] = $this->blog_model->getPost($id);
			$data['comments'] = $this->blog_model->get_comments($id);
			//Save this in the data comments variable WAT!?
			$this->load->view('templates/header_blog', $data);
			$this->load->view('blog_single_view', $data);
			$this->load->view('templates/footer_blog', $data);
		}

		function comment($post_id)
		{
			$this->load->helper('form');

			$data['title'] = "Jonathan Young's Blog Admin";
			$this->blog_model->create_comment($post_id);
			$this->post($id);
		}

		function create()
		{
			$this->load->helper('form');

			$data['title'] = "Jonathan Young's Blog Admin";
			$this->blog_model->create_post();
			$this->load->view('templates/header_blog', $data);
			$this->load->view('blog_success_view');
			$this->load->view('templates/footer_blog', $data);
		}

	}
