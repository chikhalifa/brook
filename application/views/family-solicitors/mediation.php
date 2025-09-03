<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'mediation'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Mediation"]); ?>
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
                          >Mediation</span
                        ></span
                      >
                    </div>
                  </div>
                </div>                
                <div class="container-inner">
                    <div class="entry-content">
                    <p>
                        It is good for everyone if a divorce and <a
                        href="<?= base_url('separation'); ?>"
                        >separation</a
                        > can be resolved <a href="<?= base_url('amicable-divorce'); ?>"
                        >amicably</a
                        >. Wherever possible we try to resolve matters by
                        agreement, whilst making sure that we stand by our
                        clients&#8217; interests.
                    </p>
                    <p>
                        Where matters cannot be easily resolved,
                        litigation in a court is not the only way forward.
                    </p>
                    <p>
                        There is a confusing list of different names for
                        different steps in the process, which are
                        explained below:
                    </p>
                    <ul>
                        <li>
                        <i><strong>Mediation</strong></i
                        > consists of a series of off the record but
                        structured discussions with a trained mediator.
                        Often the mediator is a separate lawyer. Lawyers
                        are not present in the mediation sessions, but
                        they generally give steering advice to their
                        clients while the mediation continues. Mediation
                        can be quite lengthy and for that reason can be
                        moderately expensive.
                        </li>
                        <li>
                        <i><strong>Negotiation</strong></i
                        > is just that. Lawyers always negotiate in
                        divorce disputes and the great majority of
                        matters are settled before any court proceedings
                        at all or at least before court hearings.
                        </li>
                        <li>
                        <i><strong>Collaborative law</strong></i
                        > is a process whereby the lawyers undertake to
                        negotiate a matter to a settlement. They sign an
                        undertaking that if they do not reach a
                        settlement, they will no longer act for the
                        client. The theory is that then the lawyers will
                        have an interest in arriving at a result rather
                        than taking a litigious approach, but there is
                        no evidence that these undertakings have that
                        effect.
                        </li>
                        <li>
                        <i
                            ><strong
                            >&#8220;Collaborative
                            law-lite&#8221;</strong
                            ></i
                        > is where the solicitors do not sign such an
                        agreement, and as such it is, in effect, a
                        meaningless statement of intent only, and no
                        different to ordinary negotiation.
                        </li>
                        <li>
                        <i
                            ><strong
                            >Alternative dispute resolution</strong
                            ></i
                        > is a label that covers all of the above, and
                        also arbitration proceedings.
                        </li>
                        <li>
                        <i><strong>Arbitration</strong></i
                        > is when the parties engage an arbitrator to
                        decide their matter, rather than a judge in
                        court. Although the cost of the arbitrator can
                        be significant, arbitration often saves time and
                        money by condensing the process.
                        </li>
                    </ul>
                    <p>
                        We consider that it is important for a client
                        first to have a good understanding of their
                        position before they enter into one of these
                        processes.
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
    <section class="section-scenarios section-padded bg-grey">
        <div class="container">
        <h2 class="section-title center">Mediation Scenarios</h2>

        <div class="section-intro">
            <p>
            The scenarios below do not relate to any individual clients
            of ours but the facts and the outcomes relate to some
            similar experiences in our practice.
            </p>
        </div>

        <div class="reviews-grid reviews-grid-slider">
            <div class="item item-scenario item-scenario-1 row-span-2">
            <div class="inner">
                <h4>The Scenario</h4>

                <p>
                Mr S lived abroad. His ex-wife lived in England with
                their son now 10. He wanted his son to come to visit his
                country saying he was now old enough to travel. His
                ex-wife did not agree.
                </p>
            </div>

            <div class="inner reply">
                <h4>Our Solution</h4>

                <p>
                We arranged for a trained family counsellor to mediate.
                She held several sessions over 6 months until they
                agreed on a trial visit abroad. Both were very reassured
                by the other's demonstration of good faith and the
                positive atmosphere ensured future successful visits.
                </p>
            </div>
            </div>

            <div class="item item-scenario item-scenario-2 row-span-2">
            <div class="inner">
                <h4>The Scenario</h4>

                <p>
                Mrs A came to us after attending 3 mediation sessions.
                She said "My husband is a good businessman and
                negotiator. Our mediator was a social worker and even
                with his mediation training he was out of his depth.
                I've decided I need someone who can represent my
                interests."
                </p>
            </div>

            <div class="inner reply">
                <h4>Our Solution</h4>

                <p>
                We advised her not to abandon mediation but for us to
                cross-check how it was going and to ensure she had
                ongoing advice. This enabled some issues to be settled.
                We and Mr A's lawyers sorted out the remaining matters
                fairly easily.
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