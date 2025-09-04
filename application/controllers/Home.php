<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{		
		 		
		$this->load->view('layout/header');
		$this->load->view('home/index');
		$this->load->view('layout/footer');
	}
	public function about()
	{  		
		$this->load->view('layout/header');		
		$this->load->view('home/about');
		$this->load->view('layout/footer');
	}
	public function team()
	{ 		
		$this->load->view('layout/header');		
		$this->load->view('home/team');
		$this->load->view('layout/footer');
	}
	public function blog()
	{		
		$this->load->view('layout/header');		
		$this->load->view('home/blog');
		$this->load->view('layout/footer');
	}
	public function contact()
	{ 		
		$this->load->view('layout/header');		
		$this->load->view('home/contact');
		$this->load->view('layout/footer');
	}
	public function reviews()
	{
		$this->load->view('layout/header');
		$this->load->view('home/reviews');
		$this->load->view('layout/footer');
	}
	public function reviews_summary()
	{
		$this->load->view('layout/header');
		$this->load->view('home/reviews-summary');
		$this->load->view('layout/footer');
	}
	public function lexcel_accreditation()
	{
		$this->load->view('layout/header');
		$this->load->view('home/lexcel-accreditation');
		$this->load->view('layout/footer');
	}
	public function henry_brookman()
	{
		$this->load->view('layout/header');
		$this->load->view('home/henry-brookman');
		$this->load->view('layout/footer');
	}
	public function accreditations_associations()
	{
		$this->load->view('layout/header');
		$this->load->view('home/accreditations-associations');
		$this->load->view('layout/footer');
	}
	public function our_fees()
	{
		$this->load->view('layout/header');
		$this->load->view('home/our-fees');
		$this->load->view('layout/footer');
	}
	public function where_to_start()
	{
		$this->load->view('layout/header');
		$this->load->view('home/where-to-start');
		$this->load->view('layout/footer');
	}
	public function pay_for_my_divorce()
	{
		$this->load->view('layout/header');
		$this->load->view('home/pay-for-my-divorce');
		$this->load->view('layout/footer');
	}
	public function website_visitor_guarantees()
	{
		$this->load->view('layout/header');
		$this->load->view('home/website-visitor-guarantees');
		$this->load->view('layout/footer');
	}	
	
	public function terms_of_website_use()
	{
		$this->load->view('layout/header');
		$this->load->view('home/terms-of-website-use');
		$this->load->view('layout/footer');
	}	
	public function regulatory_information()
	{
		$this->load->view('layout/header');
		$this->load->view('home/regulatory-information');
		$this->load->view('layout/footer');
	}	
	public function disclaimer2()
	{
		$this->load->view('layout/header');
		$this->load->view('home/disclaimer2');
		$this->load->view('layout/footer');
	}	
	public function accessibility()
	{
		$this->load->view('layout/header');
		$this->load->view('home/accessibility');
		$this->load->view('layout/footer');
	}	
	public function privacy_notices()
	{
		$this->load->view('layout/header');
		$this->load->view('home/privacy-notices');
		$this->load->view('layout/footer');
	}	
	public function cookies_policy()
	{
		$this->load->view('layout/header');
		$this->load->view('home/cookies-policy');
		$this->load->view('layout/footer');
	}			
	
	public function ask_question_form()
	{
		$this->load->helper(['form', 'url']);
		$this->load->library('form_validation');
		$referrer = $this->input->server('HTTP_REFERER');

		// Validation rules
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
		$this->form_validation->set_rules('comment', 'Comment', 'required|trim');
		$this->form_validation->set_rules('location', 'Location', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect($referrer ? $referrer : 'contact');
		} else {
			// Sanitize input
			$name     = $this->input->post('name', TRUE);
			$email    = $this->input->post('email', TRUE);
			$comment  = $this->input->post('comment', TRUE);
			$phone    = $this->input->post('phone', TRUE);
			$location = $this->input->post('location', TRUE);

			$data = [
				'name'     => $name,
				'email'    => $email,
				'phone'    => $phone,
				'location' => $location,
				'comment'  => nl2br($comment),
			];
			
			$message = $this->load->view('emails/ask_question_template', $data, TRUE);

			$this->load->library('email');			
			$this->email->from('contact@joshmcpherson.co.uk', 'Josh Mcpherson');
			$this->email->to('jacknelsonxxx@gmail.com');
			$this->email->subject('Enquiry Now');
			$this->email->message($message);

			if ($this->email->send()) {
				$this->session->set_flashdata(
					'success',
					'<strong>Thank you for contacting us!</strong> One of our solicitors will contact you shortly to discuss how we can assist you.'
				);
			} else {
				$error = $this->email->print_debugger();
				log_message('error', $error); 
				$this->session->set_flashdata('error', 'There was a problem sending your message. Please try again later.');
			}
			redirect($referrer ? $referrer : 'contact');
		}
	}
	public function consultation_form()
	{
		$this->load->helper(['form', 'url']);
		$this->load->library('form_validation');
		$referrer = $this->input->server('HTTP_REFERER');

		// Validation rules
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
		$this->form_validation->set_rules('comment', 'Comment', 'required|trim');
		$this->form_validation->set_rules('location', 'Location', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect($referrer ? $referrer : 'contact');
		} else {
			// Sanitize input
			$name     = $this->input->post('name', TRUE);
			$email    = $this->input->post('email', TRUE);
			$comment  = $this->input->post('comment', TRUE);
			$phone    = $this->input->post('phone', TRUE);
			$location = $this->input->post('location', TRUE);
			$appointment = $this->input->post('appointment', TRUE);

			$data = [
				'name'     => $name,
				'email'    => $email,
				'phone'    => $phone,
				'location' => $location,
				'comment'  => nl2br($comment),
				'appointment'  => $appointment,
			];
			
			$message = $this->load->view('emails/consultation_template', $data, TRUE);

			$this->load->library('email');			
			$this->email->from('contact@joshmcpherson.co.uk', 'Josh Mcpherson');
			$this->email->to('jacknelsonxxx@gmail.com');
			$this->email->subject('Consultation Request');
			$this->email->message($message);

			if ($this->email->send()) {
				$this->session->set_flashdata(
					'success',
					'<strong>Thank you for contacting us!</strong> One of our solicitors will contact you shortly to discuss how we can assist you.'
				);
			} else {
				$error = $this->email->print_debugger();
				log_message('error', $error); 
				$this->session->set_flashdata('error', 'There was a problem sending your message. Please try again later.');
			}
			redirect($referrer ? $referrer : 'contact');
		}
	}
}
