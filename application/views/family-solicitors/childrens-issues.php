<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'childrens-issues', 'section2' => 'childrens-issues'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Children-Family-Law.jpg", "header_name" => "Children’s Issues"]); ?>     
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
                        <span class="breadcrumb_last" aria-current="page"
                          >Children’s Issues</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p>
                        One of the main roles of the English family courts is to resolve
                        disputes about children when a relationship between parents –
                        married or unmarried – breaks down. One of the most common areas
                        of conflict arises when parents are unable to agree which one of
                        them the child should live with. In these circumstances the courts
                        can make what are known as ‘Child Arrangements Orders’. (These
                        orders used to be called Custody Orders or Residence Orders). The
                        Courts are sensitive to the need to protect children from being
                        pressurised by either parent to take sides or make choices about
                        where they should live.
                        </p>
                        <p>
                        Another common issue that often needs to be resolved concerning
                        children is the question of how much or how little contact the
                        child should have with the parent he or she does not live with
                        (the non-resident parent). Until 2014 details of contact were set
                        out in ‘Contact Orders’. Now contact is regulated as part of a
                        Child Arrangements Order.  Contact was previously termed access
                        and the concept is equivalent to the U.S term ‘visitation’. The
                        Courts consider that regular contact is mostly desirable although
                        the practice of how it is achieved varies depending on
                        circumstances.
                        </p>
                        <p>
                        The courts can also make Prohibied Steps Issues and Specific
                        Issues Orders on other aspects of children’s lives such as
                        schooling, medical treatment and travel although these are less
                        common than Child Arrangements Orders.
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
    <?php $this->load->view('layout/children-faqs'); ?>           
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>