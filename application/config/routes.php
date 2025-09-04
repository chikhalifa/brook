<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['team'] = 'home/team';
$route['about'] = 'home/about';
$route['blog'] = 'home/blog';
$route['contact'] = 'home/contact';
$route['reviews'] = 'home/reviews';
$route['reviews-summary'] = 'home/reviews_summary';
$route['lexcel-accreditation'] = 'home/lexcel_accreditation';
$route['henry-brookman'] = 'home/henry_brookman';
$route['accreditations-associations'] = 'home/accreditations_associations';
$route['our-fees'] = 'home/our_fees';
$route['where-to-start'] = 'home/where_to_start';
$route['pay-for-my-divorce'] = 'home/pay_for_my_divorce';
$route['website-visitor-guarantees'] = 'home/website_visitor_guarantees';
$route['terms-of-website-use'] = 'home/terms_of_website_use';
$route['regulatory-information'] = 'home/regulatory_information';
$route['disclaimer2'] = 'home/disclaimer2';
$route['accessibility'] = 'home/accessibility';
$route['privacy-notices'] = 'home/privacy_notices';
$route['cookies-policy'] = 'home/cookies_policy';

// Divorce
$route['family-solicitors'] = 'services/divorce';
$route['divorce-rights'] = 'services/divorce_rights';
$route['adultery-and-divorce'] = 'services/adultery_and_divorce';
$route['contested-divorce'] = 'services/contested_divorce';
$route['amicable-divorce'] = 'services/amicable_divorce';
$route['annulment'] = 'services/annulment';
$route['separation'] = 'services/separation';
$route['divorce-paperwork'] = 'services/divorce_paperwork';

$route['bankruptcy-and-divorce'] = 'services/bankruptcy_and_divorce';
$route['civil-partnership'] = 'services/civil_partnership';
$route['co-habitation'] = 'services/co_habitation';
$route['domestic-violence'] = 'services/domestic_violence';
$route['divorce-family-businesses'] = 'services/divorce_family_businesses';
$route['family-therapy'] = 'services/family_therapy';
$route['filing-for-divorce'] = 'services/filing_for_divorce';
$route['mediation'] = 'services/mediation';
$route['guide-to-divorce-steps'] = 'services/guide_to_divorce_steps';
$route['legal-advice'] = 'services/legal_advice';
$route['unreasonable-behaviour'] = 'services/unreasonable_behaviour';
$route['finding-a-solicitor'] = 'services/finding_a_solicitor';

// Other services
$route['prenuptial-agreements'] = 'services/prenuptial_agreements';
$route['post-nuptial-agreements'] = 'services/post_nuptial_agreements';
$route['pensions'] = 'services/pensions';
$route['pension-freedom'] = 'services/pension_freedom';
$route['inheritance'] = 'services/inheritance';
$route['london-map'] = 'services/london_map';
$route['urdu-hindi'] = 'services/urdu_hindi';

// International divorce
$route['international-divorce'] = 'services/international_divorce';
$route['european-union-law'] = 'services/european_union_law';
$route['australia-and-new-zealand-law'] = 'services/australia_and_new_zealand_law';
$route['india-and-pakistan-law'] = 'services/india_and_pakistan_law';
$route['canada-and-usa-law'] = 'services/canada_and_usa_law';
$route['china-japan-and-south-east-asia-law'] = 'services/china_japan_and_south_east_asia_law';
$route['central-and-south-america-law'] = 'services/central_and_south_america_law';
$route['middle-east-and-persian-gulf-law'] = 'services/middle_east_and_persian_gulf_law';
$route['south-africa-and-africa-law'] = 'services/south_africa_and_africa_law';
$route['international-divorce-map'] = 'services/international_divorce_map';

// Children Issue
$route['childrens-issues'] = 'services/childrens_issues';
$route['fathers-and-mothers-rights'] = 'services/fathers_and_mothers_rights';
$route['grandparents-rights'] = 'services/grandparents_rights';
$route['parental-abduction-within-uk'] = 'services/parental_abduction_within_uk';
$route['international-abduction'] = 'services/international_abduction';
$route['leave-remove'] = 'services/leave_remove';
$route['surrogacy'] = 'services/surrogacy';

// Financial settlements
$route['financial-settlements'] = 'services/financial_settlements';
$route['financial-dispute-resolution'] = 'services/financial_dispute_resolution';
$route['spousal-maintenance'] = 'services/spousal_maintenance';
$route['trusts'] = 'services/trusts';
$route['hidden-assets'] = 'services/hidden_assets';
$route['salaries-bonuses-assets'] = 'services/salaries_bonuses_assets';
$route['international-wealth-and-estate-planning'] = 'services/international_wealth_and_estate_planning';
$route['offshore-trusts-divorce'] = 'services/offshore_trusts_divorce';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



