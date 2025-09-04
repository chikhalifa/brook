<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'financial-settlements', 'section2' => 'spousal-maintenance'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers5.jpg", "header_name" => "Spousal Maintenance"]); ?>
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
                          >Spousal Maintenance</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                        Spousal maintenance is awarded if one party (commonly the wife but not
                        always) cannot adequately support themselves without payment from the other.
                    </p>
                    <p>
                        The amount paid is dependent on the needs of the awarded party, their own
                        income (actual or potential) and the payer’s income. Spousal
                        maintenance automatically comes to an end if the recipient chooses to
                        remarry or either party dies. Financial support can also be reviewed
                        if a recipient’s circumstances change and a court can adjust the term and
                        the amount of the maintenance order.
                    </p>
                    <h3>Receiving spousal maintenance:</h3>
                    <p>
                        Brookman Solicitors will advise you of your options and will work to secure
                        the best outcome for you. Whether your situation requires a regular
                        payment (normally monthly) or a single lump sum, Brookman Solicitors will
                        ensure that your spousal maintenance is calculated fairly and appropriately.
                    </p>
                    <h3>Paying spousal maintenance:</h3>
                    <p>
                        Brookman Solicitors will seek to resolve your spousal maintenance case and
                        ensure that the payment that you make to your ex-partner is a fair one,
                        considering all aspects of your case. If your financial situation has
                        changed, Brookman Solicitors can facilitate an application on your behalf
                        and, if necessary, request a reduction in your maintenance payments, or to
                        vary the term.
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
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>