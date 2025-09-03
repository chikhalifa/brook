<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'bankruptcy-and-divorce'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["header_name" => "Bankruptcy &#038; Divorce"]); ?>
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
                          >Bankruptcy &#038; Divorce</span
                        ></span
                      >
                    </div>
                  </div>
                </div>                
                <div class="container-inner">
                    <div class="entry-content">
                    <p>
                        Financial hardship often leads to <a
                        href="<?= base_url('family-solicitors'); ?>"
                        >divorce</a
                        >, but divorce does not solve the financial
                        problems.
                    </p>
                    <p>
                        In English law the husband and wife are each
                        responsible for their own debts, and not
                        responsible for the other’s.  Therefore, one can
                        become bankrupt without necessarily bringing the
                        other one down.  Very often however, in the
                        attempt to stave off increasing hardship, the
                        husband or wife may have borrowed money themselves
                        to help their spouse.  It may not be an easy task
                        to get that money back, if it is possible at all. 
                        In the worst case, if the spouse has taken full
                        joint indebtedness, say, in respect of a mortgage,
                        their property will go as well.  A solicitor
                        dealing with a divorce and bankruptcy has to look
                        closely at whether the circumstances of any joint
                        indebtedness were coerced, or even arose from
                        forgery.
                    </p>
                    <p>
                        The spouse of a bankrupt has a right of occupation
                        in their home for a year, but after that, the
                        trustee in bankruptcy can sell it regardless of
                        any divorce proceedings.
                    </p>
                    <p>
                        Sometimes the spouse can establish that he or she
                        has a share in a property even if they are not on
                        the title.  That requires a solicitor to carefully
                        analyse the past financial arrangements to see if
                        there is such a claim.  Alternatively, the spouse
                        of the bankrupt may also have the possibility of
                        negotiating to buy out the bankrupt’s share of the
                        property.
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