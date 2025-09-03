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
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/divorce');
		$this->load->view('layout/footer');
	}	
	public function divorce_rights()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/divorce-rights');
		$this->load->view('layout/footer');
	}	
	public function adultery_and_divorce()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/adultery-and-divorce');
		$this->load->view('layout/footer');
	}	
	public function contested_divorce()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/contested-divorce');
		$this->load->view('layout/footer');
	}	
	public function amicable_divorce()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/amicable-divorce');
		$this->load->view('layout/footer');
	}	
	public function annulment()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/annulment');
		$this->load->view('layout/footer');
	}	
	public function separation()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/separation');
		$this->load->view('layout/footer');
	}	
	public function divorce_paperwork()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/divorce-paperwork');
		$this->load->view('layout/footer');
	}	
	public function bankruptcy_and_divorce()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/bankruptcy-and-divorce');
		$this->load->view('layout/footer');
	}	
	public function civil_partnership()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/civil-partnership');
		$this->load->view('layout/footer');
	}	
	public function co_habitation()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/co-habitation');
		$this->load->view('layout/footer');
	}	
	public function domestic_violence()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/domestic-violence');
		$this->load->view('layout/footer');
	}	
	public function divorce_family_businesses()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/divorce-family-businesses');
		$this->load->view('layout/footer');
	}	
	public function family_therapy()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/family-therapy');
		$this->load->view('layout/footer');
	}	
	public function filing_for_divorce()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/filing-for-divorce');
		$this->load->view('layout/footer');
	}	
	public function mediation()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/mediation');
		$this->load->view('layout/footer');
	}	
	public function guide_to_divorce_steps()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/guide-to-divorce-steps');
		$this->load->view('layout/footer');
	}	
	public function legal_advice()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/legal-advice');
		$this->load->view('layout/footer');
	}	
	public function unreasonable_behaviour()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/unreasonable-behaviour');
		$this->load->view('layout/footer');
	}	
	

	// Other services
	public function prenuptial_agreements()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/prenuptial-agreements');
		$this->load->view('layout/footer');
	}	
	public function post_nuptial_agreements()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/post-nuptial-agreements');
		$this->load->view('layout/footer');
	}	
	public function pensions()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/pensions');
		$this->load->view('layout/footer');
	}	
	public function inheritance()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/inheritance');
		$this->load->view('layout/footer');
	}	
	public function london_map()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/london-map');
		$this->load->view('layout/footer');
	}	
	public function urdu_hindi()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/urdu-hindi');
		$this->load->view('layout/footer');
	}	

	// International divorce
	public function international_divorce()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/international-divorce');
		$this->load->view('layout/footer');
	}
	public function european_union_law()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/european-union-law');
		$this->load->view('layout/footer');
	}
	public function australia_and_new_zealand_law()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/australia-and-new-zealand-law');
		$this->load->view('layout/footer');
	}
	public function india_and_pakistan_law()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/india-and-pakistan-law');
		$this->load->view('layout/footer');
	}
	public function canada_and_usa_law()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/canada-and-usa-law');
		$this->load->view('layout/footer');
	}
	public function china_japan_and_south_east_asia_law()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/china-japan-and-south-east-asia-law');
		$this->load->view('layout/footer');
	}
	public function central_and_south_america_law()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/central-and-south-america-law');
		$this->load->view('layout/footer');
	}
	public function middle_east_and_persian_gulf_law()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/middle-east-and-persian-gulf-law');
		$this->load->view('layout/footer');
	}
	public function south_africa_and_africa_law()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/south-africa-and-africa-law');
		$this->load->view('layout/footer');
	}
	public function international_divorce_map()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/international-divorce-map');
		$this->load->view('layout/footer');
	}

	// Children Issue
	public function childrens_issues()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/childrens-issues');
		$this->load->view('layout/footer');
	}
	public function fathers_and_mothers_rights()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/fathers-and-mothers-rights');
		$this->load->view('layout/footer');
	}
	public function grandparents_rights()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/grandparents-rights');
		$this->load->view('layout/footer');
	}
	public function parental_abduction_within_uk()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/parental-abduction-within-uk');
		$this->load->view('layout/footer');
	}
	public function international_abduction()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/international-abduction');
		$this->load->view('layout/footer');
	}
	public function leave_remove()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/leave-remove');
		$this->load->view('layout/footer');
	}
	public function surrogacy()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/surrogacy');
		$this->load->view('layout/footer');
	}
	// Financial settlements
	public function financial_settlements()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/financial-settlements');
		$this->load->view('layout/footer');
	}
	public function financial_dispute_resolution()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/financial-dispute-resolution');
		$this->load->view('layout/footer');
	}
	public function spousal_maintenance()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/spousal-maintenance');
		$this->load->view('layout/footer');
	}
	public function trusts()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/trusts');
		$this->load->view('layout/footer');
	}
	public function hidden_assets()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/hidden-assets');
		$this->load->view('layout/footer');
	}
	public function salaries_bonuses_assets()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/salaries-bonuses-assets');
		$this->load->view('layout/footer');
	}
	public function international_wealth_and_estate_planning()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/international-wealth-and-estate-planning');
		$this->load->view('layout/footer');
	}
	public function offshore_trusts_divorce()
	{
		$this->load->view('layout/header');
		$this->load->view('family-solicitors/offshore-trusts-divorce');
		$this->load->view('layout/footer');
	}
}
