<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'contested-divorce'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Contested Divorce"]); ?>     
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
                          >Contested Divorce</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                      In England and Wales there is a no-fault divorce
                      regime. This means respondents to a divorce
                      application can’t contest it. This contrasts with
                      countries where divorce is based on the idea of
                      fault. In these jurisdictions, a person seeking
                      divorce can allege that his or her spouse or civil
                      partner has committed adultery, has deserted the
                      marital home or has behaved unreasonably. In such
                      circumstances the respondent has the right to
                      defend the allegations.
                    </p>
                    <p>
                      That said, respondents to a no-fault divorce
                      application do have the ability to dispute the
                      contents of a divorce application on the following
                      grounds:
                    </p>
                    <ul>
                      <li>
                        Nullity – a respondent may bring nullity
                        proceedings by, for example, claiming that the
                        marriage or civil partnership was never
                        consummated or that it was entered into without
                        proper consent.
                      </li>
                      <li>
                        Jurisdiction – it’s possible to argue that the
                        application cannot be brought before an English
                        court because the applicant and/or respondent is
                        not habitually resident in the UK or lacks the
                        required domicile to divorce here. Succeeding in
                        transferring the proceedings to another
                        jurisdiction may have a significant impact on
                        financial proceedings and the child arrangements
                        that are put in place following the divorce.
                      </li>
                      <li>
                        Validity and fraud – if the legal stipulations
                        for a valid marriage were not met, including age
                        and witness requirements or if some kind of
                        fraud induced either party to enter the
                        marriage, then the marriage can be declared
                        invalid
                      </li>
                    </ul>
                    <h2>How Do I Dispute A Divorce Application?</h2>
                    <p>
                      If a respondent wishes to dispute a no-fault
                      divorce application, he or she must indicate his
                      or her intention to do so when returning the
                      acknowledgment of service form to the court. A
                      full explanation of the reasons for disputing the
                      application must then be filed at court. This
                      ‘answer’ to the application must be lodged at
                      court within 21 days, beginning with the date by
                      which the acknowledgment of service is required to
                      be filed under the
                      <a
                        href="<?= base_url ('guide-to-divorce-steps')?>"
                        >procedural steps</a
                      >.
                    </p>
                    <p>
                      It&#8217;s worth noting that the no-fault system
                      of divorce is designed to reduce areas of conflict
                      and dispute that arise when a relationship breaks
                      down. The grounds for disputing a divorce
                      application that we have outlined are, in
                      practical terms, very limited. In our experience
                      instances where a divorce application is disputed
                      are relatively rare.
                    </p>

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