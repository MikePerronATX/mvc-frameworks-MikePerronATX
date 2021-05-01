<?php

/*
 *
 * Stories Model
 *
 */
defined('BASEPATH') OR exit('Forbidden');

class Stories_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_story($id) {
    
        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();

        /* this is NOT the way to this, this is just simulating pulling the correct
          story from the database. This is where you normally write your db query*/
        if($id == 1) {
            $story = $this->story1;
        } else if($id == 2){
            $story = $this->story2;
        } else {
            $story = $this->story3;
        }
        
        // send the story array back to the controller
        return $story;
    }

    public function get_stories() {

        $query = $this->db->get('news');
        return $query->result_array();

        return $stories;
   }
}
