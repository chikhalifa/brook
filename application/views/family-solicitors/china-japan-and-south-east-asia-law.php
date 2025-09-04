<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'international-divorce', 'section2' => 'china-japan-and-south-east-asia-law'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Lawyers.jpg", "header_name" => "China, Japan and Asia"]); ?>
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
                          >China, Japan and Asia</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <h3>International Divorce &amp; Family Law: China, Japan and Wider Asia</h3>
                    <p>
                        We regularly deal with clients living in
                        China,
                        >Hong Kong&nbsp;and
                        Japan. In particular, the Kyogi Rikon procedure often involves issues. We also
                        have acted for residents of Vietnam, Singapore, Thailand, Taiwan, the
                        Philippines, Indonesia and Malaysia.
                    </p>
                    <p>
                        The family law systems of these very varied regions reflect their wide range
                        of cultural heritages. This produces complicated issues of enforcement in
                        different countries. It also produces particular problems for foreigners
                        resident in those countries, because there are very different rules as to
                        what level of access they can get to the domestic courts of the country in
                        which they live.
                    </p>
                    <p>
                        We are specialist international divorce lawyers and family solicitors and we
                        advise clients who are either UK–based but originate from China, Japan or
                        South East Asia, or are living outside of the UK but have connection with
                        England or Wales.
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