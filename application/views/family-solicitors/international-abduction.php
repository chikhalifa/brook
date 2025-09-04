<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'childrens-issues', 'section2' => 'international-abduction'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Children-Family-Law.jpg", "header_name" => "International Abduction"]); ?>     
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
                          >International Abduction</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p>
                            When someone (including a parent) removes a child
                            from their country of habitual residence without
                            proper consents or Court approval it may be an
                            abduction. It is important to act promptly. The
                            Hague Convention on the International Aspects of
                            the Abduction of Children may apply.
                        </p>
                        <p>
                            <strong>You will need our advice if:</strong
                            ><br />
                            <strong>a)</strong> you wish to take your child to
                            live abroad;<br />
                            <strong>b)</strong> your child has been taken
                            abroad without your consent, or is about to be;
                            or<br />
                            <strong>c)</strong> if you are facing a claim that
                            you have abducted a child.
                        </p>
                        <p>
                            Please note that there is no
                            &#8216;abduction&#8217; if the parent with
                            responsibility moves to another part of the UK.
                            Read more about <a
                            href="<?= base_url ('parental-abduction-within-uk')?>"
                            >Parental Abduction within the UK</a
                            >.
                        </p>
                        <h2>Explained: &#8216;Leave to remove&#8217;</h2>
                        <p>
                            &#8216;Leave to remove&#8217; is an application
                            made by a parent to the court to remove their
                            child from their current country.
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
                            would be smooth, <a
                            href="<?= base_url ('amicable-divorce')?>"
                            >the relationship amicable</a
                            > and an appropriate agreement reached. However,
                            it is often the case that one parent disputes the
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
                            your situation with <a href="<?= base_url ('about-us')?>"
                            >a solicitor</a
                            > with knowledge and familiarity with issues
                            regarding relocation, and can advise you of the
                            best way to pursue your case, both for your good
                            and the good of your child.
                        </p>
                        <p>
                            <em
                            >You can also listen to a BBC interview with
                            Henry Brookman regarding a case of international
                            abduction:</em
                            >
                        </p>                           
                        <audio
                            class="wp-audio-shortcode"
                            id="audio-441-1"
                            preload="none"
                            style="width: 100%"
                            controls="controls"
                        >
                            <source
                            type="audio/mpeg"
                            src="./wp-content/uploads/2018/05/BEN-PRATER-HENRY-BROOKMAN-INTERVIEW-100518230a.mp3?_=1"
                            />
                            <a
                            href="./wp-content/uploads/2018/05/BEN-PRATER-HENRY-BROOKMAN-INTERVIEW-100518.mp3"
                            >./wp-content/uploads/2018/05/BEN-PRATER-HENRY-BROOKMAN-INTERVIEW-100518.mp3</a
                            >
                        </audio>
                        <p>&nbsp;</p>
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