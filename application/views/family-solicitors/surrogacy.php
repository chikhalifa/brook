<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'childrens-issues', 'section2' => 'surrogacy'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Children-Family-Law.jpg", "header_name" => "Surrogacy"]); ?>     
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
                          ><a href="<?= base_url('childrens-issues'); ?>"
                            >Children’s Issues</a
                          ></span
                        >
                        <span class="breadcrumb_last" aria-current="page"
                          >Surrogacy</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p>
                            In the last 20 years the availability of surrogacy
                            has brought happiness to many families. Surrogacy
                            law is complex and evolving. The medical science
                            is also growing fast and some aspects may be
                            leaving the law behind.
                        </p>
                        <p>
                            Surrogacy arrangements in England are not illegal
                            provided they are altruistic. No commercial
                            arrangements are permitted although it is not an
                            offence to pay reasonable expenses and the court
                            can retroactively approve payments.
                        </p>
                        <p>
                            There are three organisations in the United
                            Kingdom which match applicants with potential
                            surrogates, and as they are not-for-profit
                            organisations this is perfectly legal. They also
                            provide support for applicants through the
                            process. However, at the time of writing, they
                            either have closed their books or have excessively
                            long waiting lists due to scarcity of potential
                            surrogates.
                        </p>
                        <p>
                            For this reason many intending parents either find
                            surrogates through informal networks or look
                            abroad. Both of these avenues carry certain risks
                            and it is prudent to
                            <a href="<?= base_url('contact')?>">speak to us</a> at
                            an early stage if you are pursuing these avenues.
                            However, regardless of where the surrogacy
                            arrangement takes place, the intending parents
                            must apply for a parental order to obtain legal
                            parenthood for the resulting child/children.
                        </p>
                        <p>
                            The criteria for obtaining a parenting order,
                            whichever route is followed, are numerous and
                            include that there must be a surrogacy arrangement
                            in place, one of the intending parents must have
                            provided genetic material for the child, and the
                            application must be made during the six-month
                            period after the child is born but not in the
                            first six weeks after birth. (This time limit is
                            currently being reviewed and it may become
                            possible for applications to be made prior to
                            birth if the legislation is amended. You need to
                            speak to us if this timing has not been met.)
                        </p>
                        <p>
                            Legal problems can arise for foreign citizens who
                            are living in the UK who are seeking a surrogacy
                            arrangement, or potentially for dual citizens of
                            the UK and elsewhere. Another issue of potential
                            concern is where the surrogacy has taken place
                            abroad when the parties were living there, but now
                            need recognition of the child for the purposes of
                            English law. For example, in relation to
                            inheritance or residency issues.
                        </p>
                        <p>
                            If you would like further advice,
                            <a href="<?= base_url('contact')?>"
                            >please get in touch with us now</a
                            >.
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
    <?php $this->load->view('layout/children-scenario'); ?>                     
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>