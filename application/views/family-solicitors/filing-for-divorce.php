<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'filing-for-divorce'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Applying For Divorce"]); ?>
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
                          ><a href="<?= base_url('family-solicitors'); ?>"
                            >Divorce &#038; No-Fault Divorce</a
                          ></span
                        >
                        <span class="breadcrumb_last" aria-current="page"
                          >Applying For Divorce</span
                        ></span
                      >
                    </div>
                  </div>
                </div>                
                 <div class="container-inner">
                    <div class="entry-content">
                    <p>
                        A <a href="<?= base_url('family-solicitors'); ?>">divorce</a
                        > application is sent to the Family Court’s
                        Divorce and Dissolution service on Form D84. The
                        application can be signed by one spouse or civil
                        partner (a sole application) or by both parties (a
                        joint application). The application form contains
                        personal details of the parties to the marriage or
                        civil partnership and states that the relationship
                        has irretrievably broken down.
                    </p>
                    <p>
                        If the parties have legal representation then the
                        solicitor lodging the application form should also
                        include a ‘statement of reconciliation’ confirming
                        that he or she has discussed the  possibility of a
                        reconciliation with the applicant(s) and given him
                        or her the names and addresses of persons
                        qualified to help facilitate a reconciliation.
                    </p>
                    <p>
                        The applicant decides whether the court is to post
                        or email the application out to the other spouse
                        (the ‘respondent’) or whether he or she will
                        arrange for the respondent to receive it.  This is
                        called “service”. In a joint application there is
                        no need to serve the application in each other but
                        under the procedural rules each side should
                        receive a notice of proceedings
                    </p>
                    <p>
                        The respondent must confirm receipt of the
                        application by completing an acknowledgment of
                        service form (this should accompany the
                        application paperwork). He or she must return the
                        acknowledgment of service form to the court within
                        14 days of the date of service. Different time
                        limits apply if the application for divorce has to
                        be served on a respondent outside of England and
                        Wales.
                    </p>
                    <p>
                        If a respondent wishes to dispute the application
                        for divorce he or she needs to file and serve an
                        ‘answer’ to the application within 21 days
                        beginning from when the acknowledgment of service
                        was required. The application may only be disputed
                        on specific and limited grounds, including
                        procedural non-compliance, validity of the
                        marriage or partnership and issues over the
                        English court’s jurisdiction or power to rule on
                        the divorce application.
                    </p>
                    <p>
                        If the respondent does not send the
                        acknowledgement of service, and the court is
                        satisfied that the respondent has nevertheless
                        received the application, the court may make a
                        ruling that the application is deemed to be
                        served. This enables the applicant to proceed with
                        the
                        <a
                        href="<?= base_url('guide-to-divorce-steps'); ?>"
                        >next steps in an application</a
                        >
                        for a divorce or dissolution order.
                    </p>
                    <p>&nbsp;</p>

                    <p>
                        <a
                        class="btn btn-lg"
                        href="#modalAskQuestion"
                        data-modal=""
                        >Enquire Now</a
                        >
                    </p>

                    <p class="entry-content-phone">
                        Or call us:
                        <a href="tel:+447452347338" rel="nofollow"
                        >+44&nbsp;(0)74&nbsp;5234&nbsp;7338</a
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
    <?php $this->load->view('layout/divorce-scenario'); ?>              
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>