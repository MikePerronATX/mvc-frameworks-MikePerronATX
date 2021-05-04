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
            $data['text'] = $data['news_item']['text'];
            $data['slug'] = $data['news_item']['slug'];

            $this->load->view('templates/header', $data);
            $this->parser->parse('news/view', $data);
            $this->load->view('templates/footer');
		}



		public function index()
		{
            $data['title'] = "News Archive";
            $data['stories'] = $this->news_model->get_news();
            $data['servertime'] = date('l jS \of F Y h:i:s A');//server time
            
            $this->load->view('templates/header', $data);
            $this->parser->parse('news/index', $data);
            $this->load->view('templates/footer', $data);
		}
}