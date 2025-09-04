<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'financial-settlements', 'section2' => 'city-professionals-and-their-spouses'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers5.jpg", "header_name" => "City Professionals & Their Spouses"]); ?>
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
                          ><a href="<?= base_url('london-clients'); ?>"
                            >London Clients</a
                          ></span
                        >                                                  
                        <span class="breadcrumb_last" aria-current="page"
                          >City Professionals & Their Spouses</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                        The City of London and London generally is home to some of the most
                        profitable businesses on earth. These businesses employ a significant number
                        of the most talented and best paid people. However, considering the
                        pressures on such professionals these days, it is not surprising to learn
                        that these pressures often place a great strain on their personal lives, and
                        indeed on their spouses’ lives.
                    </p>
                    <p>
                        We have a great deal of experience in dealing with financial settlements
                        upon the breakdown of marriage for City Professionals, acting for both them
                        and their spouses.
                    </p>
                    <h3>Remuneration Packages</h3>
                    <p>
                        Many City Professionals have much more complex remuneration packages than
                        simple salaries. Remuneration packages can include share options which vest
                        over a period of time, cash retention awards, sign-on bonuses, partner
                        drawings/distributions, dividends, employee benefit trusts and offshore
                        pension plans.
                    </p>
                    <p>
                        The founders and key players of start-up firms often take relatively low
                        starting remuneration. Instead they anticipate an advantageous sale once the
                        firm is a fully running concern. Such sales may involve significant tax
                        issues.
                    </p>
                    <p>
                        Sometimes spouses believe that a sale is being negotiated but the city
                        spouse denies it, which of course means a large discrepancy in valuations of
                        assets.
                    </p>
                    <p>
                        When acting for the spouse of the City Professional, we make careful
                        enquiries about the precise package that the City Professional is employed
                        on, together with their expectations.
                    </p>
                    <p>
                        When acting for a City Professional, particularly bankers, we carefully
                        consider that our client is not boxed into a position where they are paying
                        such a high proportion of their assets or income that there is no allowance
                        for the risks that they carry at the same time. This is particularly
                        important when the market is volatile.
                    </p>
                    <p>
                        We have extensive experience dealing with many varied city occupations and
                        businesses, ranging from banking, hedge funds and publishing to real estate
                        and professional practices.
                    </p>
                    <p>
                        We use a full range of experts, including expert Counsel, forensic
                        accountants, pension actuaries and other advisers to ensure that our clients
                        receive the best possible advice in order to project their case in its best
                        possible light.
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
    <section class="section-scenarios section-padded bg-grey">
        <div class="container">
            <h2 class="section-title center">City Professionals &amp; Their Spouses</h2>

            <div class="section-intro">
            <p>
                The scenario below does not relate to any individual clients of ours but
                the facts and the outcomes relate to some similar experiences in our
                practice.
            </p>
            </div>

            <div class="reviews-grid reviews-grid-slider">
            <div class="item item-scenario item-scenario-1 col-span-2">
                <div class="inner">
                <h4>The Scenario</h4>

                <p>
                    Mr A and Mrs B were married for 20 years. &nbsp;Mr A was German, but
                    residing in England. &nbsp;Mr A had been working as a successful
                    trader in the City. &nbsp;Unfortunately, the marriage came to an
                    end. &nbsp;At that point, Mr A claimed that all funds that he had
                    previously accrued in an offshore employee benefit trust were
                    subject to UK income tax at 50%. &nbsp;Further, Mr A claimed that
                    his bonuses were paid in shares, which would vest over a period of
                    three years and he did not know how much those bonuses would be
                    worth because they would be related to stock market performance.
                </p>
                </div>

                <div class="inner reply">
                <h4>Our Solution</h4>

                <p>
                    We advised Mrs B that structures could be put in place in relation
                    to the employee benefit trust whereby Mr A could be lent money from
                    the trustees of the employee benefit trust, ie 50% of the value.
                    &nbsp;These funds could then be remitted to Mrs B. &nbsp;Mr A would
                    not have to pay any tax if he moved out of the United Kingdom and
                    the funds from the employee benefit trust never came “on shore”.
                    &nbsp;In relation to the bonuses, we advised Mrs B that there was a
                    simple solution in that she could simply take 50% of the bonuses
                    when the shares are delivered to Mr A. &nbsp;On that basis, she
                    would equally share the risk with Mr A, but she would equally share
                    the gain.
                </p>
                </div>
            </div>
            </div>

            <div class="reviews-grid mobile-videos"></div>
        </div>
    </section>
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>