<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'annulment'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Annulment"]); ?>     
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
                          >Annulment</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                    <p>
                        Annulment of marriage is the legal process to
                        declare that a true marriage never took place. 
                        This is different to a divorce which dissolves an
                        existing marriage.
                    </p>
                    <p>
                        Some religions make no provision for divorce, and
                        in these cases religious annulments may be granted
                        when marriages fail.  The grounds for religious
                        annulments are different to those of English law.
                    </p>
                    <p>
                        Some marriages can be void altogether if, for
                        example, one party was already married.  After a
                        couple is married certain facts may subsequently
                        emerge to qualify the marriage as voidable.  One
                        reason could be a wilful refusal to consummate the
                        marriage, that is, have sexual intercourse.
                    </p>
                    <p>
                        Invalid consent is also grounds for annulment if
                        it is found that one party consented to the
                        marriage under duress or unsoundness of mind. 
                        Forced marriages are both illegal and voidable and
                        can therefore also be annulled.
                    </p>
                    <p>
                        The courts do not allow annulments where a divorce
                        is applicable.  Annulment is more complicated and
                        costly than divorce and sound <a
                        href="<?= base_url('legal-advice')?>"
                        >legal advice</a
                        > is recommended to anyone considering this
                        option.
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