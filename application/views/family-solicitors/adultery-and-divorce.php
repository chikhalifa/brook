<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'adultery-and-divorce'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["header_name" => "Adultery &#038; Divorce"]); ?>     
    <div class="bg-grey">
      <div class="container">
        <section class="main-content">
          <div class="row row-flex no-gutter">
            <?php $this->load->view('layout/sidebar-section', $data); ?>

            <div class="col-xs-12 col-md-7 col-lg-8">
              <div class="section-padded">
                <div class="container-inner" style="padding-right: 0">
                  <div id="breadcrumbs">
                    <div
                      class="container-inner"
                      style="padding-left: 0"
                    >
                      <span
                        ><span
                          ><a href="<?= base_url('/')?>">Home</a></span
                        >
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
                        <span
                          class="breadcrumb_last"
                          aria-current="page"
                          >Adultery &#038; Divorce</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                      While adultery may be personally devastating and
                      painful, it is not – legally speaking – a ground
                      for divorce in England and Wales. No-fault divorce
                      under the Divorce and Dissolution Act, 2020 (which
                      came into force in England and Wales in April
                      2022) means the sole reason an
                      <a href="<?= base_url('family-solicitors'); ?>"
                        >application for divorce</a
                      >
                      can be made is that the marriage or civil
                      partnership has broken down irretrievably.
                    </p>
                    <p>
                      Of course, if you suspect that your partner is
                      having an affair it may well be that you decide to
                      apply for divorce. Irrespective of any legal or
                      procedural considerations unfaithfulness in a
                      marriage will often lead to separation and
                      divorce.
                    </p>
                    <p>
                      Before starting the divorce process it is usually
                      worth seeking legal advice to find out what your
                      legal options are. An initial discussion with an
                      experienced family lawyer will give you an idea of
                      what the outcome of your divorce might be in terms
                      of finances and child arrangements and support.
                    </p>
                    <p>
                      You might also wish to consider engaging an
                      independent investigator to establish whether or
                      not your fears of an adulterous relationship are
                      warranted. Once you have the facts you will be on
                      solid ground in any discussion you initiate with
                      your spouse about the possibility of a divorce.
                    </p>
                    <p>
                      If you do decide to apply for a divorce your legal
                      representative will discuss the possibility of
                      reconciliation with you and provide you with
                      details of organisations that can help in efforts
                      for you and your spouse to reconcile.
                    </p>
                    <p>
                      If you want to find out more about divorce and the
                      <a
                        href="<?= base_url('guide-to-divorce-steps'); ?>"
                        >various steps in the process</a
                      >, you can get in touch with us for an initial,
                      no-obligation discussion. No-fault divorce means
                      you don’t need to include details of adultery on
                      your divorce application. In our experience this
                      can make it easier to reach agreement on issues
                      like childcare and division of property.
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