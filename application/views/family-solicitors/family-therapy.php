<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'family-therapy'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Family Therapy"]); ?>
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
                          >Family Therapy</span
                        ></span
                      >
                    </div>
                  </div>
                </div>                
                <div class="container-inner">
                    <div class="entry-content">
                    <p>
                        Counsellors tell us that sometimes, a relationship
                        that appears to be dwindling simply needs some TLC
                        to get it back on track. Time, effort and a caring
                        attitude can easily end up at the bottom of the
                        ‘to do’ list for those with hectic and demanding
                        lifestyles. Many couples find that the best way
                        through an increasingly distant or contentious
                        relationship is to invest time in your partner by
                        discussing your problems in a third party
                        environment. These days, an increasingly common
                        option chosen by couples in need is family
                        therapy.
                    </p>
                    <p>
                        Family therapy provides a safe environment in
                        which couples can discuss their issues in the
                        presence of a third party. The mediator is not
                        there to take sides or assert their opinion on
                        your scenario; instead, a mediator works to
                        encourage shared understanding and to help the
                        couple see each other’s side of the story. They
                        are present to keep anger or disputes from
                        bubbling up, and to encourage partners to see ways
                        of moving forward in their relationship.
                    </p>
                    <p>
                        Meetings tend to last around an hour and are not
                        necessarily just for couples in contentious
                        marriages. Family therapy can be used to address
                        issues between children and parents,
                        <a href="<?= base_url('childrens-issues'); ?>"
                        >parenting issues</a
                        >, family structures and any other issue between
                        <a
                        href="<?= base_url('grandparents-rights'); ?>"
                        >different family members</a
                        >. For example, many step-children issues are the
                        subject of family therapy.
                    </p>
                    <p>
                        In situations where one partner is keen for family
                        therapy and the other is resisting, it is
                        advisable to discuss the best steps forward with
                        <a href="<?= base_url('about'); ?>">a solicitor</a>, who
                        can discuss
                        <a href="<?= base_url('mediation'); ?>"
                        >alternative approaches</a
                        >
                        to encourage the other and the possible options if
                        that does not work.
                    </p>
                    <p>
                        Where serious issues have arisen, family therapy
                        may not ‘fix’ a marriage but almost always
                        improves the chances of a relatively amicable
                        divorce. Of course, it depends on each couples’
                        scenario but in all cases of unhappy marriages, it
                        is always advisable to seek third party assistance
                        from a solicitor, mediator or both.
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