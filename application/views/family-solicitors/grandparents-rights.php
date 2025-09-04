<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'childrens-issues', 'section2' => 'grandparents-rights'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Children-Family-Law.jpg", "header_name" => "Grandparents’ Rights"]); ?>     
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
                          >Grandparents’ Rights</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p>
                            Although research confirms the importance of
                            grandparents&#8217; involvement in children’s
                            lives, the law does not automatically give
                            grandparents a right to participate in custody or
                            contact proceedings. In some cases a grandparent
                            may have to speak for one of the parents if he or
                            she is seriously ill, for example.
                        </p>
                        <p>
                            There is a risk is that any hostility between the
                            mother and the father might extend to the
                            grandparents. Generally, the best role for
                            grandparents to assume is one of support for their
                            grandchildren, without identifying too strongly
                            with the rights and wrongs of the marriage
                            breakdown.
                        </p>
                        <p>
                            Divorce can be an extremely difficult time for the
                            family. Grandparents are advised to be patient and
                            keep in touch and wait until they can participate
                            in the lives of their grandchildren without being
                            seen as subversive by either party in the divorce.
                        </p>
                        <p>
                            Supportive grandparents can be an important source
                            of comfort for a family. Moves to establish a
                            “grandparents charter” suggest that the law may
                            change to recognise this valuable role.
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