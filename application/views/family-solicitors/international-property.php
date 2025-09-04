<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'financial-settlements', 'section2' => 'international-property'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Lawyers.jpg", "header_name" => "International Property"]); ?>
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
                          ><a href="<?= base_url('international-divorce'); ?>"
                            >International Divorce</a
                          ></span
                        >                                                  
                        <span class="breadcrumb_last" aria-current="page"
                          >International Property</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <p>International assets require specialist skill to identify and secure.</p>
                    <p>
                        A fair and just outcome for our clients requires analysing which legal
                        system gives them the right result and also that the judgment can be
                        enforced against assets. Frequently it is difficult to locate assets if they
                        are hidden behind corporations or trusts. We have extensive experience in
                        choice of law issues, enforcement and understanding camouflage arrangements.
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
    <section class="section-scenarios section-padded bg-grey">
        <div class="container">
            <h2 class="section-title center">International Property Scenario</h2>

            <div class="section-intro">
            <p>
                The scenario below does not relate to any individual clients of ours but
                the facts and the outcomes relate to some similar experiences in our
                practice.
            </p>
            </div>

            <div class="reviews-grid reviews-grid-slider">
            <div class="item item-scenario item-scenario-1 col-span-2">
                <div class="inner">
                <h4>The Scenario</h4>

                <p>
                    Mr &amp; Mrs A had a home in England where she mostly lived. She and
                    her husband owned a villa in Spain where he now lived. He had a
                    pension income from his former U.K employer and about £500,000 with
                    a bank in Jersey. Mrs A thought there was a trust involved. She
                    relied on his maintaining her. He was about to receive perhaps up to
                    £1,000,000 from a buy-out of his former U.K employer.
                </p>
                </div>

                <div class="inner reply">
                <h4>Our Solution</h4>

                <p>
                    The short-term step was to apply to the court to freeze the payment
                    from the buy-out. Then whatever happened beyond our control Mrs A
                    was likely to be fairly well safeguarded. That probably would be
                    enough to ensure that her husband would co-operate with the English
                    Courts process of disclosure. It gave us time to fully locate the
                    assets, and to advise on a sensible proposal to try to resolve the
                    matter by agreement.
                </p>
                </div>
            </div>
            </div>

            <div class="reviews-grid mobile-videos"></div>
        </div>
    </section>
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>