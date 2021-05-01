<?php
/*
 *
 * Stories Contoller
 *
 */
class Stories extends CI_Controller {


    public function __construct() {
        parent::__construct();
        
        // load the stories model here so it's available everywhere in this controller
        $this->load->model('stories_model');
        
        // load the parser to format the model's output
        // normally you would have this autoloaded if you use it a lot
        $this->load->library('parser');
    }


    public function story($id) {
        // this is the general method to show all stories
        $data['title'] = "Story";

        // get the story by id from the model
        $story = $this->stories_model->get_story($id);
        
        /* use the parser to turn the story into formatted html
         * the parser will combine the story_template and the
         * associative array into formatted HTML which will be
         * passed to the view through $data
         */
        // notice the TRUE at the end, it tells the parser to return and not print
        $data['story'] = $this->parser->parse('templates/story_template', $story, TRUE);
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/story');
        $this->load->view('templates/footer');
    }

    public function index() {
        // this is the general method to show all stories
        $data['title'] = "Stories";
        $data['servertime'] = date('l jS \of F Y h:i:s A');//server time

        // get the stories by from the model
        /* notice how we have to wrap it in an extra layer of array.
         * this is so we can send it to the parser which will loop
         * through all the stories (see the template for more notes)*/
        $stories['stories'] = $this->stories_model->get_stories();

         /* use the parser to turn the stories into formatted html
         * the parser will combine the stories_template and the
         * array of associative arrays into formatted HTML which will be
         * passed to the view through $data
         */
        // notice the TRUE at the end, it tells the parser to return and not print
        $data['stories'] = $this->parser->parse('templates/stories_template', $stories, TRUE);
        $data['servertime'] = date('l jS \of F Y h:i:s A');//server time

        $this->load->view('templates/header', $data);
        $this->load->view('pages/stories');
        $this->load->view('templates/footer');
    }
}
