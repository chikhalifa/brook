<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'divorce-paperwork'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Divorce Paperwork"]); ?>
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
                          >Divorce Paperwork</span
                        ></span
                      >
                    </div>
                  </div>
                </div>                
                <div class="container-inner">
                    <div class="entry-content">
                    <p>
                        The Court needs certain documents when you apply
                        for divorce. You have to file an application
                        stating that your marriage or civil partnership
                        has broken down irretrievably. You can do this on
                        your own or you and your spouse or civil partner
                        can apply jointly. You must also file an official
                        form of marriage certificate. If the certificate
                        is not in English (e.g. you were married abroad),
                        you will need a translation. When a solicitor
                        files the papers, a Certificate Regarding
                        Reconciliation advice must be filed.
                    </p>
                    <p>
                        The Court processes these documents and they are
                        sent (or “served”) on the other party, who has a
                        limited time (14 days) to file an Acknowledgement.
                        Read more about the process involved in
                        <a
                        href="<?= base_url('filing-for-divorce')?>"
                        >applying for divorce</a
                        >.
                    </p>
                    <p>
                        The process is essentially administrative and does
                        not require any personal attendances at Court
                        unless there are special circumstances.
                    </p>
                    <p>
                        From our offices in London we are able to serve
                        clients from the surrounding area including
                        Godalming, Guildford and Woking. You can
                        <a href="<?= base_url('contact')?>">contact us</a> at
                        our central London office.
                    </p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

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