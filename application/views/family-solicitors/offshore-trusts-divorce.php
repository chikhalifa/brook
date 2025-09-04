<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'financial-settlements', 'section2' => 'offshore-trusts-divorce'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers5.jpg", "header_name" => "Offshore Trusts and Divorce"]); ?>
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
                          >Offshore Trusts and Divorce</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                     <p>
                        Offshore trusts are designed to be hard to examine, including when they
                        feature in divorce. That does not stop English Courts doing so.
                    </p>
                    <p>
                        The typical offshore arrangement nominates a trustee, often managed by a
                        corporate trustee based say in the Channel Islands, or Isle of Man, or
                        Gibraltar. Because the concept of a trust is unique to English and Scottish
                        law and countries that derive their law from England and Scotland, they are
                        not usually based in countries such as Liechtenstein or Andorra. However
                        there other entities may be used e.g. an Anstalt.
                    </p>
                    <p>
                        Then assets are put into the trust to shelter the income and capital gain
                        from domestic taxes, and potentially, from claims by disaffected spouses.
                        Often the trust can serve a dual purpose.
                    </p>
                    <p>
                        Often, the true beneficial owner of the assets is hidden by this device. In
                        fact for taxation reasons often the point of the trust is to separate
                        control of the assets from the people who are ultimately meant to benefit.
                    </p>
                    <p>
                        English law has long experience of examining the reality behind the trust
                        and corporate veil. This does not mean that it rides roughshod over genuine
                        arrangements. It does however often arrive at a pragmatic assessment of an
                        individual’s wealth even when it is offshore.
                    </p>
                    <p>
                        Henry Brookman has extensive experience in this field, on both sides of the
                        argument. His experience in complex estate planning means he has up to date
                        knowledge of the variety of such situations.
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