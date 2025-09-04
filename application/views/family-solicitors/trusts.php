<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'financial-settlements', 'section2' => 'trusts'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers5.jpg", "header_name" => "Trusts"]); ?>
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
                          >Trusts</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                        Trusts are common in England and Wales as well as all countries world-wide
                        that derive their law from England and Wales. Divorce settlements frequently
                        involve them.
                    </p>
                    <p>
                        It is said that trusts began at the time of the crusades. Landowners
                        departing from England would entrust their property to a custodian for the
                        benefit of their family. Detailed laws arose setting out the obligations of
                        the custodian – the “trustee,” that is, the person in whose trust you placed
                        the property.
                    </p>
                    <p>
                        Over the centuries it was used as a means of ensuring that an estate could
                        not be frittered away by irresponsible descendants, and in more modern times
                        it became a valuable device to avoid repeated inheritance tax imposts
                        landing on each successive generation, and often to shelter income from tax.
                    </p>
                    <p>
                        The English divorce courts look at the underlying reality as well as
                        carefully studying the documentation. For example if the reality is that the
                        trust does hold family wealth perhaps stretching back for half a century or
                        more, that may lead a Court to decide that on-going maintenance orders are a
                        better solution that trying to force a termination of the trust. In other
                        cases though (see the case of Prest v. Petrodel as a modern example) the
                        trust is just used as the founder’s piggy bank and the Courts can be robust
                        in their approach.
                    </p>
                    <p>
                        Brookman have long experience of trusts both in establishing them in the
                        course of estate planning and dealing with them in divorce settlements.
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
    <?php $this->load->view('layout/financial-scenario'); ?>	
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>