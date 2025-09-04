<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'international-divorce', 'section2' => 'middle-east-and-persian-gulf-law'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Lawyers.jpg", "header_name" => "Middle East & Persian Gulf"]); ?>
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
                          >Middle East & Persian Gulf</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">                    
                    <h3>
                        International Divorce &amp; Family Law: Middle East &amp; Persian Gulf
                        (including Iran, Saudi Arabia, Turkey and Egypt)
                    </h3>
                    <p>
                        This region has a wide range of judicial systems, ranging from pure Sharia
                        courts as in Saudi Arabia to wholly secular civil courts. Some countries
                        like the United Arab Emirates (UAE) where there is a large Western and
                        British expat community permit English law to be applied to some aspects of
                        a couple’s divorce if they are non-Muslim.
                    </p>
                    <p>
                        In 2021 Abu Dhabi, one of seven countries that make up the UAE introduced
                        The Family Law for Non-Muslim Expatriates. The legislation, aimed at expats,
                        allows for no-fault divorce and civil marriage to take place for the first
                        time in the country outside of religious codes. It also allows non-Muslim
                        judges to preside over family issues for the first time anywhere in the
                        Persian Gulf and permits the concept of joint custody of children following
                        divorce.
                    </p>
                    <p>
                        Often the interaction of religious law with the kind of civil law as
                        administered in England and Wales leads to particular questions of
                        interpretation. We deal with complex questions between England and a range
                        of Middle Eastern countries and have clients across the region. Several
                        countries in the region, including the UAE aren’t signed up to the Hague
                        Convention on International Aspects of Child Abduction which can often lead
                        to complexities when dealing with disputes over children where one party
                        wishes to reside in the UK and the other wishes to reside in the Gulf.
                    </p>
                    <p>
                        We have often advised on a range of issues involving citizens of Palestine,
                        Egypt, Lebanon, Jordan, Iran and
                        Turkey including Israeli divorce, UAE divorce, and Saudi Arabia divorce.
                    </p>
                    <p>
                        As specialist international divorce and family solicitors, we advise clients
                        who are either UK-based but originate from the Middle East and Persian Gulf
                        countries, or are living on the Gulf but have a connection to England or
                        Wales. Many of our clients are expats (usually the financially weaker
                        spouse) keen to explore the possibility of divorcing under the laws of
                        England and Wales, despite residing in the Gulf. If this is something you
                        are considering it’s vital
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