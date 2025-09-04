<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'childrens-issues', 'section2' => 'leave-remove'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Children-Family-Law.jpg", "header_name" => "Leave to Remove"]); ?>     
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
                          ><a href="<?= base_url('childrens-issues'); ?>"
                            >Children’s Issues</a
                          ></span
                        >
                        <span class="breadcrumb_last" aria-current="page"
                          >Leave to Remove</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p>
                            After a separation or
                            <a href="<?= base_url('family-solicitors'); ?>">divorce</a>, parents can
                            feel isolated. If the parent originates from
                            another country, this can in turn lead them to
                            consider moving back to the country where they
                            originally came from and back to their immediate
                            family.  But choosing this significantly separate
                            path to your ex-spouse can be complicated
                            when children are involved.
                        </p>
                        <p>
                            Automatically, both the child’s
                            <a href="<?= base_url('fathers-and-mothers-rights')?>"
                            >mother and father</a
                            >
                            have parental responsibility, regardless of where
                            the child mainly resides.
                        </p>
                        <p>
                            For parents with sole responsibility of their
                            child, where there is no disagreement with the
                            party, there is no problem moving the child
                            abroad. However, for parents with joint
                            responsibility and joint interest in the children,
                            it is essential that they communicate to reach an
                            agreement regarding the possible relocation and
                            on-going arrangements for the child. Ultimately,
                            oral or preferably written consent must be
                            obtained from the party remaining in the country
                            where the child originally resided (often referred
                            to as the “left-behind parent”).
                        </p>
                        <p>
                            In an ideal world, conversations between parties
                            would be smooth,
                            <a href="<?= base_url('amicable-divorce')?>"
                            >the relationship amicable</a
                            >
                            and an appropriate agreement reached. However, it
                            is often the case that one parent disputes the
                            idea of their children moving overseas and
                            withholds their consent. The reason is usually the
                            loss of contact with the left-behind parent. This
                            is not fanciful; many studies have shown that
                            without clear practical arrangements being
                            established from the start, contact often falls
                            away quickly.
                        </p>
                        <p>
                            If the dispute did escalate and was taken to
                            Court, the person seeking to relocate would need
                            to provide legitimate reasons as to why they
                            wanted the child to be taken abroad; and for the
                            parent at risk of being “left-behind”, why the
                            child should stay put. The Court will base its
                            decision on the best interests of the child. The
                            strength of feeling of the parent wanting to “go
                            home” is not necessarily a guide to what is best
                            for the child, although it can be.
                        </p>
                        <p>
                            To properly understand your legal rights, discuss
                            your situation with
                            <a href="<?= base_url('about')?>">a solicitor</a> with
                            knowledge and familiarity with issues regarding
                            relocation, and can advise you of the best way to
                            pursue your case, both for your good and the good
                            of your child.
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
    <?php $this->load->view('layout/children-scenario'); ?>                     
    <?php $this->load->view('layout/free-consultation'); ?>	
    <?php $this->load->view('layout/team-container'); ?>
  </div>
</div>