<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'separation'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Separation"]); ?>     
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
                          >Separation</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                    <p>
                        Separation is one basis for divorce.  However,
                        many divorces are brought on different <a
                        href="<?= base_url('/')?>"
                        >grounds of divorce</a
                        > while a couple are still living in the same
                        house.  It may be necessary to prove a date of
                        separation particularly in financial proceedings. 
                        This is simply a matter of evidence, for example
                        proof that one party took up a new tenancy in
                        their sole name on a particular date.
                    </p>
                    <p>
                        However, English law does not have a set rule that
                        assets acquired after separation are ignored for
                        settlement purposes.  One party can seek a Court
                        Order for sole occupation of a dwelling which will
                        force a separation.  This may be granted if
                        behaviour is aggressive or unacceptable on any
                        reasonable standards.
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
        <h2 class="section-title center">Separation Scenario</h2>

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
                Mr M consulted us concerning his wife's behaviour. She
                had a long-standing drug problem and would come and go
                without warning from their home. She had spent large
                amounts on drugs emptying bank accounts and incurring
                debt to pay for them. He and their children were very
                upset.
                </p>
            </div>

            <div class="inner reply">
                <h4>Our Solution</h4>

                <p>
                We advised him that he could seek a sole occupation
                order which would keep her away from the home. He was
                anticipating a substantial bonus in the next six months
                and asked whether excluding her sooner would mean this
                was not taken into account in any financial settlement.
                We advised that a Court would need to include it as an
                asset but that did not neccessarily then mean that it
                would then be equally divided. The question of what was
                a fair division of property was a second stage
                calculation. In view of his wife?s waste of their
                resources an equal division would not be appropriate.
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