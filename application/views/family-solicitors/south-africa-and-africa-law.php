<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'international-divorce', 'section2' => 'south-africa-and-africa-law'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Lawyers.jpg", "header_name" => "Africa & South Africa Law"]); ?>
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
                          >Africa & South Africa Law</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <h3>International Divorce &amp; Family Law: Africa and South Africa</h3>
                    <p>
                      We regularly deal with South and East Africa. In 2012 we successfully
                      concluded a ground breaking
                      <a href="<?= base_url('childrens-issues')?>"
                        >Child Support</a
                      >
                      case. We are regularly consulted regarding South African prenuptial
                      contracts and their effect under English law. We have also dealt with cases
                      involving citizens of Botswana, Zimbabwe, Zambia, Kenya, Tanzania, Ethiopia,
                      Eritrea and Uganda.
                    </p>
                    <p>
                      South African family law is based on the Roman – Dutch code, whereas East
                      Africa derives its systems from the earlier English legislation. In many
                      respects, the courts work in similar ways to those in England and Wales, and
                      we frequently advise clients in relation to matters connected with those
                      countries.
                    </p>
                    <p>
                      We are specialist
                      <a href="<?= base_url('international-divorce')?>"
                        >international divorce</a
                      >
                      lawyers and <a href="<?= base_url('/')?>">family solicitors</a> and
                      we advise clients who are either UK–based but originate from South or East
                      Africa, or are living outside of the UK but have connection with England or
                      Wales.
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
    <?php $this->load->view('layout/divorce-video'); ?>
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>