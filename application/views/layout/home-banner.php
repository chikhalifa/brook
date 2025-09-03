<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="bg-grad">
    <div class="container">
        <section
            class="home-banner"
            data-src="<?= $banner_path ?>"           
        >
            <div class="container-inner">
            <div class="row row-flex flex-align-center wide-gutter">
                <div class="col-xs-12 col-sm col-md col-lg-7">
                <div class="banner-content">
                    <h1 class="banner-title"><?= $header_name ?></h1>
                </div>
                </div>
        
                <div
                class="col-xs-12 col-sm-auto col-md-auto col-lg-4 col-lg-offset-1"
                >
                <a
                    href="#modalAskQuestion"
                    class="btn btn-lg hidden-sm"
                    data-modal
                    >Enquire Now</a
                >
        
                <div class="contact-sep hidden-sm">Or</div>
        
                <a
                    href="#modalConsultation"
                    class="btn btn-lg btn-white"
                    data-modal
                    ><span>Request a </span>free consultation</a
                >
                </div>
            </div>
            </div>
        </section>
    </div>
</div>