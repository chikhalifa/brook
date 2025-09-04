<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'other-services', 'section2' => 'inheritance'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Inheritance"]); ?>
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
                          >Inheritance</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p>
                            Under English law, and in most common law
                            countries, a testator has a very wide power to
                            dispose of his or her property by Will. Even if in
                            countries applying civil law systems, there is
                            scope for some devolution of property according to
                            Wills.
                        </p>
                        <p>
                            Where a testator has died making little or no
                            provision for their surviving spouse, or other
                            persons to whom they may have proper obligations,
                            then the estate may be contested.
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
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>