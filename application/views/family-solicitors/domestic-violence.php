<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'domestic-violence'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Domestic Violence and Domestic Abuse"]); ?>
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
                          >Domestic Violence and Domestic Abuse</span
                        ></span
                      >
                    </div>
                  </div>
                </div>                               
               <div class="container-inner">
                <div class="entry-content">
                  <p>
                    Domestic abuse invokes thoughts of a thuggish man
                    beating his whimpering wife. But domestic abuse is
                    far more common and widely dispersed than we
                    realise, and happens in relationships in far more
                    ways than punches and blows. What, then, is
                    domestic abuse?
                  </p>
                  <p>
                    Whilst it can happen to anyone, domestic abuse is
                    often excused, denied, belittled and sometimes not
                    even realised. Abuse can be physical but it can
                    also be verbal and psychological. The first step,
                    experts say, is to acknowledge that it is
                    happening. This is something which can be hard for
                    men &#8211; due to the stereotypical alpha male
                    expectation and the assumption that it only
                    happens to women and hard for women who believe
                    that a male is “head of the family” and sometimes
                    “needs to exert control”.
                  </p>
                  <p>
                    Domestic abuse arises when one person in an
                    intimate relationship or marriage tries to control
                    or dominate their partner. An abuser does not
                    ‘play fair’, but strives to gain and maintain
                    control over their spouse. Fear, shame,
                    intimidation and threats can all be used to wear
                    the victim down and keep them under the thumb.
                    Often once control like this has been achieved it
                    does not have to be repeated; the abuser only has
                    to make a warning gesture to keep dominance. It
                    can happen to anyone, with victims spanning across
                    all age ranges, ethnic backgrounds and economic
                    levels; women or men, married or unmarried, young
                    or old: domestic abuse can happen anywhere where
                    control is desired.
                  </p>
                  <p>
                    Getting out in the open and
                    <a href="<?= base_url('mediation')?>">discussing the issue</a>
                    is an essential step in ending this treatment, and
                    helps break down the fear that hold victims back
                    from help more generally.
                  </p>
                  <p>
                    Such behaviour is not acceptable, no matter who it
                    comes from or how nice the person might appear to
                    the outside world. Fear that no one will believe
                    them because their spouse is such a popular person
                    often holds people back from reporting. Often in
                    domestic abuse cases, aggression escalates, with
                    abuse starting with the occasional, derogatory,
                    throwaway comment and ending with full blown
                    physical violence. Whilst injury is the most
                    obvious danger, emotional and psychological
                    attacks can cause long-lasting damage on
                    abuse-targets.
                  </p>
                  <p>
                    Signs of an abusive relationship involve feeling
                    the need to tiptoe around your partner for fear of
                    triggering their ‘blow up’ or your partner making
                    little digs and snide comments that might seem
                    jokey but actually wear you down and cause
                    feelings of helplessness, shame or self-loathing.
                  </p>
                  <p>
                    Whether you consider your spouse to be
                    <a
                      href="<?= base_url('unreasonable-behaviour')?>"
                      >a difficult person</a
                    >
                    or an abuser, the situation is clear: a marriage
                    that causes distress, unhappiness or physical or
                    mental damage must be terminated with
                    <a href="<?= base_url('family-solicitors')?>">help of professionals</a
                    >. Nobody should live in fear of the person they
                    love.
                  </p>
                  <h2>Here are some further sources of help:</h2>
                  <ul>
                    <li>
                      UK: call <a
                        href="http://www.womensaid.org.uk/"
                        target="_blank"
                        rel="noopener"
                        >Women’s Aid</a
                      > on 0808 2000 247.
                    </li>
                    <li>
                      US:
                      <a
                        href="http://www.thehotline.org/"
                        target="_blank"
                        rel="noopener"
                        >National Domestic Violence Hotline</a
                      >
                      on 1-800-799-7233 (SAFE).
                    </li>
                    <li>
                      Australia: call
                      <a
                        href="http://www.1800respect.org.au/"
                        target="_blank"
                        rel="noopener"
                        >1800RESPECT</a
                      >
                      on 1800 737 732.
                    </li>
                    <li>
                      Worldwide: visit
                      <a
                        href="http://www.hotpeachpages.net/"
                        target="_blank"
                        rel="noopener"
                        >International Directory of Domestic Violence
                        Agencies</a
                      >
                      for a global list of helplines and crisis
                      centers.
                    </li>
                  </ul>
                  <h2>Male victims of abuse can call:</h2>
                  <ul>
                    <li>
                      <strong>U.S. and Canada:</strong>
                      <a
                        href="http://dahmw.org/"
                        target="_blank"
                        rel="noopener"
                        >The Domestic Abuse Helpline for Men &amp;
                        Women</a
                      >
                    </li>
                    <li>
                      <strong>UK: </strong
                      ><a
                        href="http://www.mankind.org.uk/"
                        target="_blank"
                        rel="noopener"
                        >ManKind Initiative</a
                      >
                    </li>
                    <li>
                      <strong>Australia: </strong
                      ><a
                        href="http://www.oneinthree.com.au/"
                        target="_blank"
                        rel="noopener"
                        >One in Three Campaign</a
                      >
                    </li>
                  </ul>

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