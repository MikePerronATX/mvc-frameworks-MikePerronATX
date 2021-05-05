<!--
Name: Michael Perron
Final Project
Purpose: This page gathers data submitted in the form, validates it, 
and uses it send an email to the specified (and validated) email address.
-->
<?php
class Ajax extends CI_Controller {

    public function processnames() {

        if ($this->input->is_ajax_request()){
        
            $contactName = strip_tags(trim($this->input->post('contactName')));
            $contactFrom = strip_tags(trim($this->input->post('contactFrom')));
            $contactSub = strip_tags(trim($this->input->post('contactSub')));
            $contactMess = strip_tags(trim($this->input->post('contactMess')));
            
            $contactFrom = filter_var($contactFrom, FILTER_VALIDATE_EMAIL);
           
            if(!empty($contactName) && !empty($contactFrom) && !empty($contactSub) && !empty($contactMess))
            {
            
                $headers = "From: $contactFrom\r\n";
                $headers .= "Reply-To: $contactFrom\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    
                $to = $contactFrom;
                    
                if (mail($to, $contactSub, $contactMess, $headers)) {
                    echo "okay";
                } else {
                    echo "error";
                }
            } else {
                echo "error";
            }
        } else {
            echo "";
        }
    }

    public function index() {
        echo "";
    }
}