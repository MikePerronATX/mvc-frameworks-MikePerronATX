<!--
Name: Michael Perron
Final Project
Purpose: This page is the model for the News stories.
It's functions query the data from the db.
-->
<?php
defined('BASEPATH') OR exit('Forbidden');
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_news($slug = FALSE) {
        if ($slug === FALSE)
        {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
	}
			
}