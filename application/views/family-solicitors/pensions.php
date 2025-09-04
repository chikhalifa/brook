<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'other-services', 'section2' => 'pensions'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/About-Brookman-Solicitors2.jpg", "header_name" => "Pensions &#038; Divorce"]); ?>
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
                        <span class="breadcrumb_last" aria-current="page"
                          >Pensions &#038; Divorce</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p>
                            Pension entitlements (also called
                            “superannuation”) are usually the main security
                            for a couple&#8217;s retirement. Therefore if a
                            couple divorce it is important to consider whether
                            both can be secure in the future. English law
                            allows pensions to be shared (or “split”), or to
                            “earmark” the income (that is to secure a set
                            percentage of the payment).
                        </p>
                        <p>
                            Because there is such a variety of pensions,
                            including state pensions and the State Earnings
                            Related Pension Scheme (SERPS) as well as the
                            issue of
                            <a
                            href="<?= base_url('pension-freedom'); ?>"
                            >pension freedom</a
                            >, expert guidance is needed to ensure a fair
                            arrangement. Foreign pensions also have to be
                            considered.
                        </p>
                        <p>
                            Second to the matrimonial home, pensions are often
                            one of the biggest assets in divorce, which is why
                            it is so important to properly consider the most
                            sensible way to split it.
                        </p>
                        <p>
                            In England, Wales and Northern Ireland, the Courts
                            must take into account both parties’ pensions and
                            pension rights in a divorce scenario. These
                            include state pensions, workplace schemes and the
                            personal pension plans of each party. In Scotland,
                            a more mathematical approach applies; any increase
                            in the value of your pension(s) from the date of
                            marriage to the date of separation will also be
                            considered by the Court when evaluating pension
                            positions.
                        </p>
                        <p>
                            For a fair pension split, the first step is to
                            find out the values of each party’s pensions. This
                            requires asking your pension provider for a
                            pension valuation, checking your latest annual
                            statement for your pensions’ ‘transfer value’ (the
                            amount you would get if you were to move your
                            pension elsewhere) or, for more complex pensions,
                            getting assistance from a solicitor and pensions
                            actuary.
                        </p>
                        <p>
                            Current rules stipulate that basic state pensions
                            cannot be split at divorce, although you may be
                            entitled to claim a basic state pension using your
                            ex-partner’s national insurance records. However,
                            upon your remarriage, you will lose this pension
                            entitlement. The additional state pension, which
                            is built up in employment, can be split.
                        </p>
                        <h3>Pensions can be split in three ways:</h3>
                        <ul>
                            <li>
                            <strong>Pension sharing:</strong> This allows
                            you to claim for a percentage share of your
                            ex-partner’s pensions, the amount of which is
                            transferred into a pension of your own name.
                            </li>
                            <li>
                            <strong>Pension attachment:</strong> Otherwise
                            known as ‘earmarking’, you can receive an agreed
                            amount of your ex-partner’s net pension income
                            or lump sum when it starts being paid to them.
                            This option is more favoured by couples closer
                            to retirement age.
                            </li>
                            <li>
                            <strong>Pension offsetting:</strong> The value
                            of any pensions is offset against other assets,
                            so for example, you receive nothing of your
                            ex-partner’s pensions but keep the family home
                            instead.
                            </li>
                        </ul>
                        <p>
                            In England, Wales and Northern Ireland, only a
                            Court can make a Pension Sharing or Attachment
                            Order, whilst in Scotland, a Pensions Sharing
                            Agreement can be set up outside of Court.
                        </p>
                        <p>
                            Pension division can be complicated: there are
                            strict time limits, rules as to how agreements are
                            written and the need to liaise with pension
                            trustees, and therefore attaining guidance from a
                            specialist solicitor such as Brookman is strongly
                            recommended.
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
        <h2 class="section-title center">Pensions Scenarios</h2>

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
                Mrs M consulted us. She was 52. Her husband was 54 and
                Chief Executive of an engineering company. He was likely
                to retire at 60 with a pension of half his final salary.
                He also had a private pension fund from years earlier.
                He argued that he had worked hard for his company
                pension and it was solely entitled to it. He proposed
                sharing the private pension fund.
                </p>
            </div>

            <div class="inner reply">
                <h4>Our Solution</h4>

                <p>
                We obtained a calculation that to replace half the
                future company pension benefit with a private pension
                fund would cost Mrs M £600,000. (This is a calculation
                called a "transfer value") If Mrs M was to keep all the
                benefit she would need not only all the private pension
                fund but also more to provide an investment income. We
                settled the matter with Mr M agreeing to consent orders
                with a pension sharing order giving Mrs M all the
                private scheme and 25% of the company pension.
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