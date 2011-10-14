<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function index()
	{
		if($this->input->post('sub_input') != '') {
		
			if($this->input->post('state_input') > 0)
			{
				// This field is hidden, must have been completed by a bot.  Don't send the email.
				header('Location: /index.php');
				exit();
			}
			
			$this->load->library('form_validation');
	            
            $this->form_validation->set_rules('email_input','email','trim|valid_email|required');
            $this->form_validation->set_rules('sub_input','subject','trim|min_length[3]|max_length[150]|required');
            $this->form_validation->set_rules('message_area','message','trim|min_length[5]|required');
            
            if ($this->form_validation->run() === TRUE) {
			
				$headers		= "From: ".$this->input->post('email_input');
				$subject		= $this->filter_email_injection($this->input->post('sub_input'));
				$message		= $this->filter_email_injection($this->input->post('message_area'));
			
				mail('paulsilvis@gmail.com',$subject,$message,$headers);
				
				$this->smarty->setSuccess("Email Sent!");
			
			} else {
	            // Form validation failed
	        	foreach ($this->form_validation->_error_array as $key => $value) {
	            	$this->smarty->setError($value);
	        	}
	        }
		}
		$this->smarty->addOnload('$("#toplevel_contact").addClass("active");');
		$this->smarty->assign('large_header_text','Contact Me');
		$this->smarty->assign('small_header_text','');
		$this->smarty->assign('page_content','toplevel/contact.tpl');
		$this->smarty->view();
	}
	function filter_email_injection($string)
	{
		$string = str_ireplace(array("\r","\n","%0a","%0d","Content-Type:","bcc:","to:","cc:"),"",$string);
		$string = strip_tags($string); // also remove html
		
		return $string;
	}
}

/* End of file adventures.php */
/* Location: ./application/controllers/adventures.php */