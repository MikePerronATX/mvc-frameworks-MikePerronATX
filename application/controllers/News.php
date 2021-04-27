<!--
Name: Michael Perron
Coding 08
Purpose: based on tutorial for controllers
-->
<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }
        public function view($slug = NULL)
		{
        $data['news_item'] = $this->news_model->get_news($slug);
        $data['servertime'] = date('l jS \of F Y h:i:s A');//server time

        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
		}
		public function index()
		{
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';
        $data['servertime'] = date('l jS \of F Y h:i:s A');//server time

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
		}
}