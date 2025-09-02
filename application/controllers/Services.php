<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }
	// Divorce
	public function divorce()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/divorce');
		$this->load->view('home/footer');
	}	
	public function divorce_rights()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/divorce-rights');
		$this->load->view('home/footer');
	}	
	public function adultery_and_divorce()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/adultery-and-divorce');
		$this->load->view('home/footer');
	}	
	public function contested_divorce()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/contested-divorce');
		$this->load->view('home/footer');
	}	
	public function amicable_divorce()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/amicable-divorce');
		$this->load->view('home/footer');
	}	
	public function annulment()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/annulment');
		$this->load->view('home/footer');
	}	
	public function separation()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/separation');
		$this->load->view('home/footer');
	}	
	public function divorce_paperwork()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/divorce-paperwork');
		$this->load->view('home/footer');
	}	

	// Other services
	public function prenuptial_agreements()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/prenuptial-agreements');
		$this->load->view('home/footer');
	}	
	public function post_nuptial_agreements()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/post-nuptial-agreements');
		$this->load->view('home/footer');
	}	
	public function pensions()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/pensions');
		$this->load->view('home/footer');
	}	
	public function inheritance()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/inheritance');
		$this->load->view('home/footer');
	}	
	public function london_map()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/london-map');
		$this->load->view('home/footer');
	}	
	public function urdu_hindi()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/urdu-hindi');
		$this->load->view('home/footer');
	}	

	// International divorce
	public function international_divorce()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/international-divorce');
		$this->load->view('home/footer');
	}
	public function european_union_law()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/european-union-law');
		$this->load->view('home/footer');
	}
	public function australia_and_new_zealand_law()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/australia-and-new-zealand-law');
		$this->load->view('home/footer');
	}
	public function india_and_pakistan_law()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/india-and-pakistan-law');
		$this->load->view('home/footer');
	}
	public function canada_and_usa_law()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/canada-and-usa-law');
		$this->load->view('home/footer');
	}
	public function china_japan_and_south_east_asia_law()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/china-japan-and-south-east-asia-law');
		$this->load->view('home/footer');
	}
	public function central_and_south_america_law()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/central-and-south-america-law');
		$this->load->view('home/footer');
	}
	public function middle_east_and_persian_gulf_law()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/middle-east-and-persian-gulf-law');
		$this->load->view('home/footer');
	}
	public function south_africa_and_africa_law()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/south-africa-and-africa-law');
		$this->load->view('home/footer');
	}
	public function international_divorce_map()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/international-divorce-map');
		$this->load->view('home/footer');
	}

	// Children Issue
	public function childrens_issues()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/childrens-issues');
		$this->load->view('home/footer');
	}
	public function fathers_and_mothers_rights()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/fathers-and-mothers-rights');
		$this->load->view('home/footer');
	}
	public function grandparents_rights()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/grandparents-rights');
		$this->load->view('home/footer');
	}
	public function parental_abduction_within_uk()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/parental-abduction-within-uk');
		$this->load->view('home/footer');
	}
	public function international_abduction()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/international-abduction');
		$this->load->view('home/footer');
	}
	public function leave_remove()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/leave-remove');
		$this->load->view('home/footer');
	}
	public function surrogacy()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/surrogacy');
		$this->load->view('home/footer');
	}
	// Financial settlements
	public function financial_settlements()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/financial-settlements');
		$this->load->view('home/footer');
	}
	public function financial_dispute_resolution()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/financial-dispute-resolution');
		$this->load->view('home/footer');
	}
	public function spousal_maintenance()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/spousal-maintenance');
		$this->load->view('home/footer');
	}
	public function trusts()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/trusts');
		$this->load->view('home/footer');
	}
	public function hidden_assets()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/hidden-assets');
		$this->load->view('home/footer');
	}
	public function salaries_bonuses_assets()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/salaries-bonuses-assets');
		$this->load->view('home/footer');
	}
	public function international_wealth_and_estate_planning()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/international-wealth-and-estate-planning');
		$this->load->view('home/footer');
	}
	public function offshore_trusts_divorce()
	{
		$this->load->view('home/header');
		$this->load->view('family-solicitors/offshore-trusts-divorce');
		$this->load->view('home/footer');
	}
}
