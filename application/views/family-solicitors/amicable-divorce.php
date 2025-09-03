<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'amicable-divorce'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">

    <?php $this->load->view('layout/home-banner', ["header_name" => "Amicable Divorce"]); ?>     
    
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
                          >Amicable Divorce</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p>
                            Often a divorce is the last step in a long process
                            of uncoupling.  Inevitably there is hurt and
                            regret along the way, but everyone is different as
                            to how and when.  Very often some aspects of a
                            separation and divorce are amicable, while others
                            may produce friction.
                        </p>
                        <p>
                            As lawyers we see our job as being to build on
                            points where there is agreement.  Very often the
                            couple are undecided as to who should initiate the
                            divorce proceedings.  It does not matter much in
                            England who starts the
                            <a href="<?= base_url ('family-solicitors')?>">divorce proceedings</a>,
                            and so deciding which of the couple should take
                            that step is often the first point of agreement.
                        </p>
                        <p>
                            Another matter that is very often amicably sorted
                            out is the practical arrangements as to who might
                            leave home, what property is taken, who is to look
                            after the pets etc.
                        </p>
                        <p>
                            Where there are children, again very often we find
                            that parents can genuinely
                            <a href="<?= base_url ('childrens-issues')?>"
                            >decide what is best for the children</a
                            >
                            regardless of their own feelings about the
                            situation.
                        </p>
                        <p>
                            Money matters inevitably cause the most friction,
                            but again most couples sort them out.  Going to a
                            lawyer helps sort them out, because as lawyers we
                            are used to analysing
                            <a href="<?= base_url ('financial-settlements')?>"
                            >financial arrangements</a
                            >.  Often just identifying the key issues helps,
                            bringing clarity to the process.  We find that
                            once people can understand that actually they are
                            only apart by relatively small issues – whereas
                            they may have thought that they were apart on
                            quite major issues – helps resolves things.
                        </p>
                        <p>
                            But reaching an amicable settlement does not mean
                            that one party gets their own way!  As lawyers we
                            are always conscious of the need to get to an
                            end-solution.  That is why we think in terms of
                            using the court process as a goad to break a
                            deadlock.  We do not encourage people to litigate
                            for the sake of it.  Where we recommend issuing
                            proceedings, it is because we want to put a
                            timeline on the whole process.
                        </p>
                        <p>
                            The very great majority of our matters end up
                            being resolved by agreement.  Talking to us is the
                            first step.
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