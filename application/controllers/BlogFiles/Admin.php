<?php
	class admin extends CI_Controller {
		public function __construct() //[SPACE] double underscore...why?
		{
			parent::__construct();
			$this->load->model('blog_model');
		}

		function create()
		{
			$this->load->helper('form');

			$data['title'] = "Jonathan Young Blog";
			$this->blog_model->create_post();
			$this->load->view('templates/header_admin', $data);
			$this->load->view('admin_success_view');
			$this->load->view('templates/footer_admin', $data);


		}

		function index()
		{
			$this->load->helper('form');
			
			$data['title'] = "Jonathan Young Blog";
			$data['posts'] = $this->blog_model->getPosts();
			$this->load->view('templates/header_admin', $data);
			$this->load->view('admin_view', $data);
			$this->load->view('templates/footer_admin', $data);
		}

		function update($id)
		{
			$this->load->helper('form');

			$data['title'] = "Jonathan Young Blog";
			$data['post'] = $this->blog_model->getPost($id);
			$this->load->view('templates/header_admin', $data);
			$this->load->view('admin_update', $data);
			$this->load->view('templates/footer_admin', $data);

		}

		function update_post($id)
		{
			$this->load->helper('form');

			$data['title'] = "Jonathan Young Blog";
			$this->blog_model->update_post($id);
			$this->load->view('templates/header_admin', $data);
			$this->load->view('admin_update_success_view', $data);
			$this->load->view('templates/footer_admin', $data);

		}
		function delete($id)
		{
			$this->load->helper('form');

			$data['title'] = "Jonathan Young Blog";
			$this->blog_model->delete_post($id);
			$this->load->view('templates/header_admin', $data);
			$this->load->view('admin_post_deleted_view');
			$this->load->view('templates/footer_admin', $data);

		}
	}