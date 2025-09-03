<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'divorce-right'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">    
    <?php $this->load->view('layout/home-banner', ["header_name" => "Divorce Rights"]); ?>        
    <div class="bg-grey">
      <div class="container">
        <section class="main-content">
          <div class="row row-flex no-gutter">
            <?php $this->load->view('layout/sidebar-section', $data); ?>

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
                          >Divorce Rights</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                      In England and Wales you do not require the consent of the
                      other party to divorce. Either spouse or civil partner or
                      both jointly can indicate to the court that the marriage
                      or civil partnership has broken down irretrievably.
                    </p>
                    <p>
                      Both the partners have potential rights arising from the
                      marriage, such as spousal maintenance (in addition to any
                      child maintenance), transfer of property, or lump sum
                      payments.
                    </p>
                    <p>
                      Custody issues are not covered by divorce, and any
                      disputes concerning custody or contact are dealt with by
                      separate proceedings under the Children Act 1989.
                    </p>
                    <p>
                      However, occupation orders, domestic restraint orders,
                      freezing orders and disclosure orders may be part of
                      divorce proceedings. Passport control orders can be part
                      of either divorce proceedings or Children Act proceedings.
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
    <?php $this->load->view('layout/divorce-scenario'); ?> 
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>
