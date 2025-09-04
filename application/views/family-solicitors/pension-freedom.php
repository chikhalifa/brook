<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'other-services', 'section2' => 'pension-freedom'];
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Pension Freedom & Divorce"]); ?>
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
                          >Pension Freedom & Divorce</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                  <div class="entry-content">
                    <p>
                        The new pension freedom rules introduced from&nbsp;2015 have a profound
                        effect on financial settlements in divorce and separation&nbsp;cases.
                        However, the complexity of pension legislation demands an enhanced level of
                        due diligence which could test the most technically adept members of the
                        legal profession, not to mention their lay clients.
                    </p>
                    <p>
                        For those at or approaching retirement age, the new pension rules will turn
                        previously inaccessible income-bearing assets into cash, but the temptation
                        to use the proceeds to broker a separation could have disastrous
                        irreversible consequences.
                    </p>
                    <p>
                        The most complex legislation surrounds Final Salary pensions of which there
                        are 11 million members in the UK, excluding those in Superannuation. At the
                        last reckoning in April, these schemes were only 67% funded on a wind-up
                        basis, which means that one-third of Cash Equivalent Transfer Values (CETVs)
                        offered by scheme trustees are likely to have been discounted and will not
                        reflect the true value of the preserved benefits.
                    </p>
                    <p>
                        Even if a scheme is fully funded, the CETV will still often be discounted to
                        reflect the likely out-performance of the underlying assets and to protect
                        the benefits of the remaining scheme members.
                    </p>
                    <p>
                        Finally, the bulk-buying annuity deals struck by pension trustees are likely
                        to mean that any CETV is unlikely to purchase the equivalent income in the
                        open market.
                    </p>
                    <p>
                        In the case of company Defined Contribution schemes accumulated pre-A Day
                        (6/4/06), there can exist protect retirement ages (from age 50) and enhanced
                        tax-free lump sums which will be lost on transfer. There is also the
                        distinct possibility that scheme trustees will be unable or unwilling to
                        facilitate pension freedom, especially if the member is still an employee.
                    </p>
                    <p>
                        Personal pensions are not exempt: guaranteed annuity rates, market value
                        reductions on with-profits funds and transfer penalties on some
                        commission-based schemes mean that an early exit could have punitive
                        consequences.
                    </p>
                    <p>
                        The other main areas of concern revolve around the tax consequences of
                        liberating pension monies and the effect on state benefits.
                    </p>
                    <p>
                        Barring the tax-free lump sum, all other withdrawals from a pension are
                        taxed as income. Therefore, a significant withdrawal could attract income
                        tax at a higher rate than the relief on the original contribution,
                        especially where the total income for the year exceeds £100,000, resulting
                        in the loss of a personal allowance. A withdrawal that pushes income over
                        £50,000 in a tax year will cause the loss of Child Benefit.
                    </p>
                    <p>
                        The final matter to be aware of is if a client uses the new rules to access
                        a lump sum from their pension, their annual allowance could be reduced from
                        the current £40,000 to £10,000, which will have a significant effect on
                        their ability to place future monies into a tax-advantaged wrapper.
                    </p>
                    <p>
                        So, whilst pension freedom will be seen by some to be the new panacea in
                        resolution, the interest of the client will rarely be served without a new
                        level of due diligence and plain English advice from a fully qualified
                        professional.
                    </p>
                    <p>
                        <em
                        >(With thanks and acknowledgement to Ross Glanfield, Chartered Financial
                        Planner)</em
                        >
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
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>