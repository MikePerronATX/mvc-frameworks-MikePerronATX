<?php
class Ajax extends CI_Controller {

    public function processnames() {

        // make sure caller is an ajax request
        if ($this->input->is_ajax_request()){
        
            // validate your data!
            $contactName = strip_tags(trim($this->input->post('contactName')));
            $contactFrom = strip_tags(trim($this->input->post('contactFrom')));
            $contactRe_from = strip_tags(trim($this->input->post('contactRe_from')));
            $contactSub = strip_tags(trim($this->input->post('contactSub')));
            $contactMess = strip_tags(trim($this->input->post('contactMess')));

            echo "okay";
            $from = filter_var($from, FILTER_VALIDATE_EMAIL);
           
            // use and/or process your data
            if(!empty($contactName) && !empty($contactFrom) && !empty($contactRe_from) && !empty($contactSub) && !empty($contactMess))
            {
            
                $headers = "From: $from\r\n";
                $headers .= "Reply-To: $from\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    
                $to = $from;
                    
                if (mail($to, $subject, $message, $headers)) {
                    echo "okay";
                } else {
                    echo "error";
                }
            } else {
                echo "error";
            }
        } else {
            // silence is golden
            echo "";
        }
    }

    /*
     * This is a default method. If you don't use it, stub it to give an empty response
     */
    public function index() {
        // silence is golden
        echo "";
    }
}