<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'divorce', 'section2' => 'guide-to-divorce-steps'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Step By Step Guide To Divorce"]); ?>
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
                          ><a href="<?= base_url('legal-advice'); ?>"
                            >Legal Advice and Information</a
                          ></span
                        >
                        <span class="breadcrumb_last" aria-current="page"
                          >Step By Step Guide To Divorce</span
                        ></span
                      >
                    </div>
                  </div> 
                </div>                
                <div class="container-inner">
                    <div class="entry-content">
                    <p>
                        We set out below the main steps you need to take
                        to obtain a final divorce order. You will normally
                        deal with financial issues and matters regarding
                        children separately from this process.
                    </p>
                    <h2>1. Send Divorce Application To Court</h2>
                    <p>
                        Your divorce application is made on Form D8. We
                        can prepare the paperwork for you or you can
                        complete the forms yourself and lodge them with
                        the court by post or online. Form D8 can be signed
                        by one spouse or by both (a joint application).
                        There is no need to include any reasons for the
                        breakdown of your relationship. You simply need to
                        indicate that the marriage or civil partnership
                        has broken down irretrievably. If you are
                        represented by a solicitor he or she must discuss
                        the possibility of a reconciliation with you and
                        include a ‘statement tor reconciliation’ with your
                        application.
                    </p>
                    <h2>2. Service Of Divorce Application</h2>
                    <p>
                        Once the court approves and issues your
                        application a copy is served on any respondent
                        (your spouse or civil partner) together with a
                        form for acknowledging service and a notice of
                        proceedings. If the application is a joint one the
                        court will still send a notice of proceedings to
                        both parties. Service can be carried out by your
                        legal representatives or by the court
                    </p>
                    <h2>
                        <strong>3. Acknowledgement Of Service</strong>
                    </h2>
                    <p>
                        The respondent must file an acknowledgment of
                        service with the court within 14 days of the
                        application being served on him or her. This is a
                        simple form which simply asks the respondent to
                        confirm receipt of the divorce application
                        paperwork.
                    </p>
                    <p>
                        Where a notice of proceedings is sent to joint
                        applicants as described above each joint applicant
                        must acknowledge receipt of the notice of
                        proceedings within 14 days of receipt of the
                        notice.
                    </p>
                    <h2>
                        4. Disputing The Application For A Divorce Order
                    </h2>
                    <p>
                        Under the no-fault system of divorce that exists
                        in England and Wales there are very limited ways
                        for a respondent to dispute the application. But
                        he or she may argue for example that the marriage
                        is invalid or there may be a dispute about the
                        jurisdiction of the English court to hear the
                        divorce application. A respondent who wishes to
                        dispute proceedings must file and serve an
                        ‘answer’ to the application within 21 days
                        beginning from when the acknowledgment of service
                        was required.
                    </p>
                    <h2>
                        5. Application To Court To Make Conditional Order
                        Of Divorce or Dissolution
                    </h2>
                    <p>
                        20 weeks after the court has issued the
                        application (Step 2 above) it is in a position to
                        make the formal conditional order of divorce or
                        dissolution. It can only do so however if the time
                        for filing the acknowledgment of service has
                        expired and there has been no indication that the
                        proceedings will be disputed. When applying for
                        the conditional order the applicant (or
                        applicants) must confirm that none of the
                        information in the original application has
                        changed since it was issued. In this way the
                        applicant(s) verifies that he or she still wishes
                        the divorce or dissolution to proceed. The
                        application is made on Form D84.
                    </p>
                    <h2><strong>6. Conditional Order</strong></h2>
                    <p>
                        Unless the case is disputed the court will issue
                        the first divorce decree, called a conditional
                        order. This confirms that the applicant(s) is
                        entitled to a divorce. There is no need for you to
                        attend court and the order will be sent to you or
                        your legal representatives. If costs have been
                        claimed an order is also made for them to be paid
                        if appropriate.
                    </p>
                    <p>
                        Remember, you are not divorced until you have
                        obtained a final order.
                    </p>
                    <p>
                        If you have not completed a financial settlement
                        by this point you need to think hard (with our
                        advice) as to whether you should proceed to final
                        order stage before a full financial settlement.
                    </p>
                    <h2>7. Final Order</h2>
                    <p>
                        When six weeks have elapsed from the date of the
                        conditional order the spouse or civil partner who
                        applied for the divorce must give notice to the
                        other for the conditional order to be made final
                        (form D36). If the applicant fails to do this
                        within 3 months the respondent may make the
                        application for a final order. If the original
                        application was made jointly then both applicants
                        can seek the final order. If only one of the joint
                        applicants wishes to apply he or she must give
                        notice to the other.
                    </p>
                    <p>
                        Once the final order has been issued the court
                        will send a copy to all parties and/or their legal
                        representatives.
                    </p>
                    <p>
                        You are finally divorced and are free to marry.
                    </p>
                    <p>&nbsp;</p>

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
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>