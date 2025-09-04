<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'childrens-issues', 'section2' => 'parental-abduction-within-uk'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Children-Family-Law.jpg", "header_name" => "Parental Abduction within the UK"]); ?>     
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
                          >Parental Abduction within the UK</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p>
                            Removal of a child within the UK is not a wrongful
                            removal, unlike removal to another country
                        </p>
                        <p>
                            A parent proposing to move with a child from
                            England to another area within the UK does not
                            require the consent of anyone else with parental
                            responsibility unless there is already a Child
                            Arrangements Order in place that deals with the
                            issue.
                        </p>
                        <p>
                            The question was dealt with by the Court of Appeal
                            in the case of Re R (child) [2015] EWCA Civ C iv
                            1016. In this case the Mother had moved with the
                            child from Kent to the north east of England and
                            the Father applied for the child to be returned.
                            It was argued in the Court of Appeal that removal
                            to another part of the UK should be treated in the
                            same way as removal to a foreign country. It was
                            argued that there should be an Order for summary
                            return in the same way as would be standard for a
                            foreign abduction, and the presumption should be
                            that the child should be returned to their place
                            of habitual residence for the dispute to be
                            determined there. The Court of Appeal rejected
                            those arguments. It held that a unilateral move of
                            this type will be normally subject to Children Act
                            proceedings and the outcome decided by applying
                            the welfare principle and the welfare checklist
                            contained in the Act.
                        </p>
                        <p>
                            The same position applies for removal to any of
                            the other legal jurisdictions within the United
                            Kingdom e.g. Scotland and Northern Ireland.
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