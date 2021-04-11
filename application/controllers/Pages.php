<!--
Name: Michael Perron
Coding 07
Purpose: Created this page based on the tutorial, 
and added a variable for the server time.
-->
<?php
class Pages extends CI_Controller {

    public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
		$data['servertime'] = date('l jS \of F Y h:i:s A');//server time
		
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}
}