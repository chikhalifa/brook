<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'financial-settlements', 'section2' => 'financial-dispute-resolution'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers5.jpg", "header_name" => "Financial Dispute Resolution"]); ?>
    <div class="bg-grey">
      <div class="container">
        <section class="main-content">
          <div class="row row-flex no-gutter">
            <?php             
            $this->load->view('layout/sidebar-section', $data); ?>
            <div class="col-xs-12 col-md-7 col-lg-8">
              <div class="section-padded">
                <div class="container-inner" style="padding-right: 0">
                  <div id="breadcrumbs">
                    <div class="container-inner" style="padding-left: 0">
                      <span
                        ><span><a href="<?= base_url('/')?>">Home</a></span>
                        <span
                          ><a href="<?= base_url('family-solicitors'); ?>"
                            >Divorce &#038; Family Law Services</a
                          ></span
                        >                                                  
                        <span
                          ><a href="<?= base_url('financial-settlements'); ?>"
                            >Financial Settlements</a
                          ></span
                        >                                                  
                        <span class="breadcrumb_last" aria-current="page"
                          >Financial Dispute Resolution</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                        There are various ways in which a financial dispute during divorce can be
                        negotiated and overcome. Here we explain the primary methods.
                    </p>
                    <h2 id="heading0">Negotiation Between Solicitors</h2>
                    <p>
                        Both parties instruct solicitors who then engage in correspondence. Both
                        parties set out full information as to their capital and income. This can be
                        done by way of basic schedules with some supporting evidence such as bank
                        statements, valuations etc. Alternatively many solicitors require this to be
                        done more formally by using the financial statement that is used by the
                        court, known as Form E. (<a
                        href="<?= base_url('financial-settlements'); ?>"
                        >See our Financial Settlements&nbsp;Page</a
                        >.)
                    </p>
                    <p>
                        The solicitors enter into negotiations with a view to reaching a financial
                        settlement. At any stage either party can make an application to the court,
                        for example if they do not feel the other party is being frank in their
                        disclosure or is not adopting a reasonable stance in negotiations. If an
                        application is made to the court then the case becomes managed by a court
                        process which ultimately culminates in a final contested hearing. However, a
                        case can settle at any stage and most cases do settle before the final
                        hearing. Clearly a court application increases costs and so it is sensible
                        to consider at the outset if a court application is warranted.
                    </p>
                    <h2 id="heading1">Mediation</h2>
                    <p>
                        Both parties are referred to an independent mediator who arranges a series
                        of meetings. Usually it follows after initial meeting with their own lawyers
                        who will agree on the mediator. A mediator is usually a trained lawyer by
                        background. However, their role is to facilitate discussion but not to
                        advise the individual parties in dealing with finances. Both parties would
                        be required to fill out financial statements used by the mediator, which are
                        usually very similar to the court-style Form E. The mediator would
                        facilitate discussion between you with a view to allowing parties to find
                        their own solution.
                    </p>
                    <p>
                        Parties can mediate on individual issues such as finances or children or
                        indeed on all issues. Mediation can reduce legal costs and help in
                        preserving a good relationship between you and your spouse. However it is
                        not a panacea and often can be drawn out and fruitless. It is not
                        recommended where one party is fearful of the other or susceptible to being
                        bullied or pressured into an agreement. It is of course possible for the
                        parties to consult with their solicitors throughout the mediation process
                        and in any event once agreement is reached in mediation it would have to be
                        referred back to lawyers to formalise into a legally binding order.
                    </p>
                    <h2 id="heading2">Collaborative Law</h2>
                    <p>
                        This is a relatively new process initially developed in USA. It is in many
                        ways like negotiation between solicitors. The lawyers arrange a series of
                        4-way meetings with a view to dealing with all the issues and reaching
                        agreement. All parties have to sign up at the outset to a ‘participation
                        agreement’. This would mean that you would both agree not to go to court
                        unless or until the collaborative process failed. Further if the process
                        failed i.e. did not result in resolution, then neither party is allowed to
                        continue to use the same solicitor for the court process. Reference can be
                        made to the
                        <a href="http://www.resolution.org.uk/">Resolution</a>&nbsp;website for more
                        information.
                    </p>
                    <h2 id="heading3">“Collaborative Law-Lite”</h2>
                    <p>
                        This is collaborative law but where the solicitors are not precluded from
                        further acting. It is difficult then to see how it is anything other than a
                        trendy name for negotiation between solicitors.
                    </p>
                    <h2 id="heading4">Timing</h2>
                    <p>
                        In the final analysis the courts are here to achieve a just outcome. The
                        court process encourages negotiation in any case, so if your dispute is not
                        getting resolved by another means, you can and should first get on with
                        putting the matter into the court process. Only the court process can impose
                        a conclusion regardless of the other party’s refusal to reach an agreement.
                        Therefore time spent on alternative dispute resolution can delay a
                        conclusion, and you only achieve a reliable timetable if you issue a court
                        application.
                    </p>
                    <p>
                    <a class="btn btn-lg" href="#modalAskQuestion" data-modal=""
                        >Enquire Now</a
                    >
                    </p>
                    <p class="entry-content-phone">
                      Or call us:
                      <a href="tel:+442074308470" rel="nofollow"
                          >+44&nbsp;(0)20&nbsp;7430&nbsp;8470</a
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php $this->load->view('layout/serving-client'); ?>        
      </div>
    </div>                            
    <?php $this->load->view('layout/financial-scenario'); ?>	
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>