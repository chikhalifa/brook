<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'divorce-family-businesses'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["header_name" => "Family Business Issues"]); ?>
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
                          >Family Business Issues</span
                        ></span
                      >
                    </div>
                  </div>
                </div>                               
                <div class="container-inner">
                    <div class="entry-content">
                    <p>
                        It is not uncommon that in a long relationship,
                        family members will go into business together or
                        even set up a series of businesses. Sometimes
                        these businesses involve the adult children in the
                        family and quite often they involve a complicated
                        web of corporate vehicles.
                    </p>
                    <h3>Simple &amp; complex business structures</h3>
                    <p>
                        Examples of family business structures we have
                        dealt with often include monies invested by the
                        in-laws and also monies invested by the children.
                        At its simplest, this may be a partnership or
                        limited company where different amounts of money
                        have been invested over the years. At its most
                        complicated, ten to forty separate companies in
                        separate countries may have been set up and the
                        various different members of the one family may
                        hold numerous different directorships, interests
                        or shares in the different companies. This makes
                        it all the more important to establish the value
                        and ownership percentages of different members of
                        the family at an early stage.
                    </p>
                    <h3>How to agree a company valuation</h3>
                    <p>
                        Sometimes the correct approach is to use an
                        independent expert to establish an agreed value of
                        the company or corporate group. Coming to an
                        appropriate settlement may involve having other
                        family members “intervene” in proceedings to
                        protect their interests in the family businesses.
                        Similarly, in-laws or other interested parties may
                        do the same. Discretion and confidentiality may
                        also be important if, for example, one of the
                        family businesses is publicly listed or has
                        outside investors or stakeholders. It is possible
                        to obtain orders or agreements on confidentiality
                        if this is required. The Family Court can also
                        make a wide range of orders which extend to and
                        include companies as well. In some proceedings a
                        separate company series of orders and agreements
                        may also be reached in separate specialised courts
                        if it becomes necessary. We recommend considering
                        and weighing up all the options carefully before
                        proceeding.
                    </p>
                    <p>
                        If you have some family business interests that
                        you wish to protect we recommend you contact us.
                        See also our problem scenario below.
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
        <h2 class="section-title center">Family Business Scenario</h2>

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
                Mr B happens to be the brother-in-law of Mrs A who is
                involved in bitterly contested divorce and financial
                proceedings. Mr B is worried because he  invested in one
                of the properties that is part of Mr B’s property
                development business. He understands that Mr and Mrs A
                are negotiating to sell assets from the business to fund
                Mrs A’s settlement. He wants to know what we can do to
                protect his interest in the property.
                </p>
            </div>

            <div class="inner reply">
                <h4>Our Solution</h4>

                <p>
                We recommend to Mr B that he "intervenes" in
                proceedings. Mr B does so and this protects his
                investment. Mr B's intervention provides clarity and
                this narrows the issues in dispute.
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