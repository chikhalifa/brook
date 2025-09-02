<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{		
		 		
		$this->load->view('home/header');
		$this->load->view('home/index');
		$this->load->view('home/footer');
	}
	public function about()
	{  		
		$this->load->view('home/header');		
		$this->load->view('home/about');
		$this->load->view('home/footer');
	}
	public function team()
	{ 		
		$this->load->view('home/header');		
		$this->load->view('home/team');
		$this->load->view('home/footer');
	}
	public function blog()
	{		
		$this->load->view('home/header');		
		$this->load->view('home/blog');
		$this->load->view('home/footer');
	}
	public function contact()
	{ 		
		$this->load->view('home/header');		
		$this->load->view('home/contact');
		$this->load->view('home/footer');
	}
	public function reviews()
	{
		$this->load->view('home/header');
		$this->load->view('home/reviews');
		$this->load->view('home/footer');
	}
	public function reviews_summary()
	{
		$this->load->view('home/header');
		$this->load->view('home/reviews-summary');
		$this->load->view('home/footer');
	}
	public function lexcel_accreditation()
	{
		$this->load->view('home/header');
		$this->load->view('home/lexcel-accreditation');
		$this->load->view('home/footer');
	}
	public function henry_brookman()
	{
		$this->load->view('home/header');
		$this->load->view('home/henry-brookman');
		$this->load->view('home/footer');
	}
	public function accreditations_associations()
	{
		$this->load->view('home/header');
		$this->load->view('home/accreditations-associations');
		$this->load->view('home/footer');
	}
	public function our_fees()
	{
		$this->load->view('home/header');
		$this->load->view('home/our-fees');
		$this->load->view('home/footer');
	}
	public function where_to_start()
	{
		$this->load->view('home/header');
		$this->load->view('home/where-to-start');
		$this->load->view('home/footer');
	}
	public function pay_for_my_divorce()
	{
		$this->load->view('home/header');
		$this->load->view('home/pay-for-my-divorce');
		$this->load->view('home/footer');
	}
	public function website_visitor_guarantees()
	{
		$this->load->view('home/header');
		$this->load->view('home/website-visitor-guarantees');
		$this->load->view('home/footer');
	}	
	
	public function terms_of_website_use()
	{
		$this->load->view('home/header');
		$this->load->view('home/terms-of-website-use');
		$this->load->view('home/footer');
	}	
	public function regulatory_information()
	{
		$this->load->view('home/header');
		$this->load->view('home/regulatory-information');
		$this->load->view('home/footer');
	}	
	public function disclaimer2()
	{
		$this->load->view('home/header');
		$this->load->view('home/disclaimer2');
		$this->load->view('home/footer');
	}	
	public function accessibility()
	{
		$this->load->view('home/header');
		$this->load->view('home/accessibility');
		$this->load->view('home/footer');
	}	
	public function privacy_notices()
	{
		$this->load->view('home/header');
		$this->load->view('home/privacy-notices');
		$this->load->view('home/footer');
	}	
	public function cookies_policy()
	{
		$this->load->view('home/header');
		$this->load->view('home/cookies-policy');
		$this->load->view('home/footer');
	}	
}
