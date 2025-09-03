<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'civil-partnership'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["header_name" => "Civil Partnership"]); ?>
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
                          >Civil Partnership</span
                        ></span
                      >
                    </div>
                  </div>
                </div>                
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                      For a long time, same sex couples were ignored by
                      English Family law. The Civil Partnerships Act of
                      2004 brought about legal recognition of same sex
                      unions similar to that of civil marriage. Civil
                      Partners are entitled to the same property rights
                      as married opposite-sex couples and have the same
                      tax and pension benefits. There is the ability to
                      get parental responsibility for a partner&#8217;s
                      children, as well as responsibility for reasonable
                      maintenance of a partner and their children.
                    </p>
                    <p>
                      There is a formal process for dissolving
                      partnerships that is similar to divorce.  As with
                      divorce, the one ground for applying for
                      dissolution of a civil partnership is that the
                      civil partnership has broken down irretrievably.
                    </p>
                    <p>
                      As with divorce, the Court has powers to order
                      financial relief to parties.
                    </p>
                    <h3>Parenting Agreements:</h3>
                    <p>
                      Some same-sex couples may ask a friend to be
                      either a surrogate to have children (in the case
                      of men) or ask a male friend to donate sperm. It
                      makes sense in these situations for parenting
                      agreements to be entered into so that each party
                      knows the extent of their rights and
                      responsibilities (including any financial
                      responsibilities). There should be clear
                      guidelines to avoid any dispute in the future.
                      These can range from full co-parenting, to
                      surrogacy or sperm donation only. Brookman are
                      able to draft such agreements. There are also
                      issues to consider of Parental Responsibility.
                    </p>
                    <p>
                      It might also be worth considering a
                      pre-registration agreement. Please view our <a
                        title="Pre-nuptial Contracts"
                        href="<?= base_url('prenuptial-agreements')?>"
                        >pre-nuptial contracts page</a
                      > for more information.
                    </p>
                    <h3>International Aspects:</h3>
                    <p>
                      Where couples either have assets spread
                      internationally, or one party hails from another
                      country, there may be international aspects to
                      consider. Firstly, existing property must be
                      reviewed, because a same sex union may not be
                      recognised in one partner&#8217;s country of
                      origin. Secondly, the consequences if a possible
                      dissolution of the partnership and any financial
                      settlement must be reviewed. Where a same sex
                      couple has registered a relationship overseas and
                      this meets various criteria, they will be counted
                      as having formed a valid civil partnership in
                      England and Wales and the civil partnership will
                      need to be dissolved in the usual way.
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
        <h2 class="section-title center">Civil Partnership Scenario</h2>

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
                Mr E was looking into entering into a civil partnership
                with Mr F.  Mr E had substantial assets such as a house
                valued at £1 million, investments valued at £3 million
                and a pension worth £1 million.  Although Mr E felt that
                the parties loved one another and that their
                relationship would endure, Mr E wanted to protect his
                position in case there was any change after the parties
                had entered into a civil partnership.
              </p>
            </div>

            <div class="inner reply">
              <h4>Our Solution</h4>

              <p>
                We advised Mr E that the best way to protect the
                position would be for the parties to enter into a
                Pre-Civil Partnership Agreement, which could regulate
                the parties’ finances if the civil partnership came to
                an end.  The Agreement encompassed all aspects such as
                their income, their capital assets and their pension
                assets.  The entire matter was dealt with amicably
                within a few weeks.  The parties signed the Pre-Civil
                Partnership Agreement and subsequently entered into a
                civil partnership.
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