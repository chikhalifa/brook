<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'other-services', 'section2' => 'post-nuptial-agreements'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers5.jpg", "header_name" => "Post Nuptial Agreements"]); ?>
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
                            ><a href="<?= base_url('financial-settlements'); ?>"
                            >Financial Settlements</a
                            ></span
                        >                       
                        <span class="breadcrumb_last" aria-current="page"
                          >Post Nuptial Agreements</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p>
                            Whether you have been in a short or a long
                            marriage it is almost certain that your
                            circumstances have changed and things have
                            happened during your relationship that nobody
                            could have predicted. So if you want to do
                            something as simple as, for example, protect your
                            inheritance assets from any claims by your spouse
                            , it is worth considering making a Post Nuptial
                            Agreement.
                        </p>
                        <h2>
                            Do post nuptial agreements carry any weight?
                        </h2>
                        <p>
                            In recent years courts have increasingly upheld
                            the terms of Pre-Nuptial and Post Nuptial
                            agreements. Pursuant to the (2008) Privy Council
                            decision in the case of Macleod v Macleod and the
                            later (2010) Supreme Court decision Radmacher -v-
                            Granatino Pre-Nuptial and Post-Nuptial agreements
                            will be given very considerable weight. They will
                            not be enforced as a straight question of
                            contract, and they cannot oust the jurisdiction of
                            the court to examine the circumstances upon a
                            divorce, but provided they comply with the
                            principles of general fairness the effect of them
                            should be upheld.
                        </p>
                        <h2>Protecting your inheritance</h2>
                        <p>
                            Our clients are often concerned about how they can
                            protect their inheritances from future claims from
                            their spouses. Generally, the courts will give
                            some distinction for this in any event. However, a
                            Post Nuptial will add an extra element of security
                            and protection if your family is concerned about
                            the effect of a gift. A Post Nuptial is a
                            personalised document so it can, for example,
                            include a list of gifted assets and a specific
                            definition which may distinguish family wealth
                            from the wealth you have generated during the
                            marriage.
                        </p>
                        <p>
                            Whilst a Post Nuptial Agreement may cost you some
                            fees and negotiation in the short term, it is much
                            better than going to court and having a series of
                            court disputes that drag on for years and where it
                            may be impossible to see what the parties
                            originally intended. A Post Nuptial Agreement will
                            limit the areas open to dispute.
                        </p>
                        <p>
                            We recommend you get in touch and discuss a Post
                            Nuptial Agreement with us if you think it could
                            assist you. See also our problem scenario below.
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
        <h2 class="section-title center">
            Post Nuptial Agreements Scenario
        </h2>

        <div class="section-intro">
            <p>
            The scenario below does not relate to any individual clients
            of ours but the facts and the outcomes relate to some
            similar experiences in our practice.
            </p>
        </div>

        <div class="reviews-grid reviews-grid-slider">
            <div class="item item-scenario item-scenario-1 col-span-2">
            <div class="inner">
                <h4>The Scenario</h4>

                <p>
                Mr and Mrs K have enjoyed a long 25 year marriage and
                have two children of the marriage who are now adult.
                Unfortunately however, after many years, Mrs K had an
                affair with her personal trainer. Mr K finds out about
                this and agrees to forgive the affair provided of course
                that Mrs K terminates the relationship which she does.
                </p>
                <p>
                The parties attend marriage guidance counselling and it
                seems relatively certain that they will be able to go on
                living together in the future. One problem however is
                that, immediately around the time of the affair, Mr K
                received a large and substantial gift from his family as
                part of their inheritance planning. The family know
                about the recent difficulties in the relationship
                between Mr and Mrs K and are anxious to ensure the
                gifted money goes straight to the children. Mrs K agrees
                this.
                </p>
            </div>

            <div class="inner reply">
                <h4>Our Solution</h4>

                <p>
                We draw up a Post Nuptial agreement which records the
                gift from the family and also the precise terms of the
                proposed settlement between the parties.
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