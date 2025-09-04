<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'financial-settlements', 'section2' => 'foreign-bank-accounts-assets-abroad'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers5.jpg", "header_name" => "Foreign Bank Accounts & Assets Abroad"]); ?>
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
                          >Foreign Bank Accounts & Assets Abroad</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                        Foreign bank accounts and assets abroad can present problems in divorce
                        settlements and these problems have to be considered early on.
                    </p>
                    <p>
                        The first problem is how do you find out about them? The English Courts have
                        extensive powers to order disclosure where there is information to suggest
                        there is a basis to do so. Often this is ordered at the same time as a
                        freezing order is made.
                    </p>
                    <p>
                        The second problem is often how you can enforce a transfer of a foreign
                        asset? This is where early consideration pays off. Different rules apply
                        depending on the types of assets. For example the transfer of land titles is
                        subject to different rules than sharing a foreign pension.
                    </p>
                    <p>
                        A further frequent problem concerns whether the asset should be regarded as
                        matrimonial property. That requires looking at the history of how the asset
                        came in to existence.
                    </p>
                    <p>
                        Valuation of foreign assets can often be difficult. English law again is
                        pretty efficient at ordering prompt accurate valuations, but sometimes
                        locating the right experts to carry them out can be a challenge.
                    </p>
                    <p>
                        Henry Brookman has long experience of dealing with all these questions and
                        would be pleased to help you if your case involves assets abroad.
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