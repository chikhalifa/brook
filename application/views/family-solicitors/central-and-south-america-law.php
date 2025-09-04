<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'international-divorce', 'section2' => 'central-and-south-america-law'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Lawyers.jpg", "header_name" => "Central and South America"]); ?>
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
                          >Central and South America</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">                                        
                    <h3>
                        International Divorce &amp; Family Law: Central and South America (including
                        Mexico, Brazil, Argentina, Colombia and the Caribbean)
                    </h3>
                    <p>
                        We specialise in&nbsp;<a
                        href="<?= base_url('international-divorce')?>"
                        >international divorce</a
                        >
                        and related family law matters. Our family law solicitors advise clients
                        from across the globe, including many from Central and South America. In
                        particular we assist individuals who have a legal connection to Latin
                        America in establishing whether or not they have grounds for divorce using
                        the courts of England and Wales. This could be because they are:
                    </p>
                    <ul>
                        <li>South American but live in the UK</li>
                        <li>South American, married to a UK citizen</li>
                        <li>Linked to the UK in some other way</li>
                    </ul>
                    <p>
                        We also have the capability to advise on the law in particular Central and
                        South American countries if it is likely to have any bearing on your divorce
                        settlement or arrangements for your children following your divorce. This
                        could be the case if you are a UK citizen domiciled in South or Central
                        America.
                    </p>
                    <p>
                        The counties that make up this region have varied histories and cultures. In
                        many ways this has informed the way the courts in the region approach family
                        law and divorce. There’s a high level of respect for unmarried relationships
                        across Latin America with a high percentage of children born outside
                        marriage.
                    </p>
                    <p>
                        It’s worth noting that, in general, countries in Central America that are or
                        were part of the Commonwealth echo the laws of England and Wales in some
                        respects in terms of the approach to financial settlements and arrangements
                        for children. South America countries like Chile and Bolivia tend to be more
                        influenced by European Codes, enforcing marital property regimes to a
                        greater or lesser extent. But each country is different: Argentina for
                        example, although it has a Family Code, also relies on previous court
                        rulings to decide financial settlements in much the same way as the courts
                        in England and Wales do.
                    </p>
                    <p>
                        While the family law system of regulations, statutes and adherence to
                        international conventions across South and Central America is well
                        developed, bureaucratic problems often &nbsp;make divorce a difficult area
                        to negotiate. This can especially lead to difficulties in&nbsp;<a
                        href="<?= base_url('childrens-issues')?>"
                        >children matters</a
                        >&nbsp;where often rapid decisions need to be made and respected. One
                        benefit of asking Brookman for advice is that we regularly deal with legal
                        authorities in countries across the region through a network of different
                        agents on the ground. This means we can quickly pick up your case and
                        mitigate the effect of any bureaucratic hurdles or delays.
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