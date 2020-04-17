<?php
class Email extends CI_Controller {
    public function _construct()
    {
        parent::_construct();
        
        $vars['headAndFoot'] = 'yes'; 
      
    }
    
    public function index($hf='yes')
    { 
    	$vars['headAndFoot'] = 'yes';
	    if($hf == 'no')
	         $vars['headAndFoot'] = 'no';
        $vars['whichPage'] = 'emailForm';
        $this->fuel->pages->render('emailForm',$vars);
    }
    
    
	function processEmail()
	{  
	        
	        
			$this->load->helper('form');
			$this->load->library('email');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nameField', 'Your Name', 'required');
			$this->form_validation->set_rules('toField', 'Send To', 'required');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
			$this->form_validation->set_rules('mess', 'Message', 'required');
			    
            $name = $this->input->post('nameField');
			$from = $this->input->post('fromField');
			$to = $this->input->post('toField');
            $bcc = $this->input->post('bccFielsd');
            $cc = $this->input->post('ccField');
            $subject = $this->input->post('subject');    
            $message = $this->input->post('mess');
			$emailType = $this->input->post('emailType');
		
			$this->email->from($name, 'Your Name');
			$url = 'email';
			
			if($emailType == 'email1')
				{
					$this->email->to('Rsypertjr@hotmail.com'); 
					echo "<h2>Email Sent to rsypertjr@hotmail.com</h2><div style='font-size:3em'><a  href=".$url.">Click Here to Go Back!!</a></div>";
				}
			else if($emailType == 'email2')
				{
					$this->email->to('rsypertjr@gmail.com'); 
					echo "<h2>Email Sent to rsypertjr@gmail.com</h2><div style='font-size:3em'><a href=".$url.">Click Here to Go Back!!</a></div>";
				}
			else
				{
					$this->email->to('Rsypertjr@hotmail.com'); 
					echo "<div><h2>Email Sent to rsypertjr@hotmail.com</h2><div style='font-size:3em'><a href=".$url.">Click Here to Go Back!!</a></div>";
				}
				
			$this->email->cc($cc); 
			$this->email->bcc($bcc); 

			$this->email->subject($subject);
			$this->email->message($message);	

			$this->email->send();
			//echo $this->email->print_debugger();
	}
	
   
}