<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'co-habitation'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["header_name" => "Co-Habitation"]); ?>
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
                          >Co-Habitation</span
                        ></span
                      >
                    </div>
                  </div>
                </div>                               
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                      Not all unmarried fathers have automatic joint
                      parental responsibility. They may need to take
                      legal steps to obtain that so as to have a say in
                      their child’s upbringing. In relation to finances
                      many countries have laws regulating division of an
                      unmarried couple’s property but not England.
                      Instead there is a complex set of rules deriving
                      from case–law.
                    </p>
                    <p>
                      If property is in one partner’s sole name, even
                      though both put money in, the Courts may decide
                      there was an agreement to share ownership. This
                      can be through an express or an implied trust or
                      contract. The rules are technical and the outcome
                      often depends on small points of detail.
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
    <section class="section-scenarios section-padded bg-grey">
      <div class="container">
        <h2 class="section-title center">Co–Habitation Scenario</h2>

        <div class="section-intro">
          <p>
            The scenario below does not relate to any individual clients
            of ours but the facts and the outcomes relate to some
            similar experiences in our practice.
          </p>
        </div>

        <div class="reviews-grid reviews-grid-slider">
          <div class="item item-scenario item-scenario-1 col-span-2">
            <div class="inner">
              <h4>The Scenario</h4>

              <p>
                Mr R separated from his partner of 10 years with whom he
                had a five year old son. Their apartment was in her
                name. This came about because he was working abroad when
                they began their relationship. He paid half the purchase
                price into his partner's account and she completed the
                purchase paying the other half. Now she had the property
                up for sale.
              </p>
            </div>

            <div class="inner reply">
              <h4>Our Solution</h4>

              <p>
                We took detailed instructions and put a block on the
                title. We then located the evidence to prove his claim.
                He offered to buy out his partner but she then insisted
                the apartment was worth more than the price she had been
                offering it for sale. We issued an application following
                which the property was professionally valued and Mr R
                bought the remaining half share. She then refused to let
                Mr R see their son. We obtained a declaration of
                parental responsibility and visiting rights for Mr R.
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