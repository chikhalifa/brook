<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' => 'other-services', 'section2' => 'prenuptial-agreements'];
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2021/02/Divorce-Lawyers.jpg", "header_name" => "بروک مین عائلی قانون"]); ?>
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
                          >بروک مین عائلی قانون</span
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <div class="container-inner">
                    <div class="entry-content">
                        <p align="right">
                            روک مین برطانیہ میں بین الاقوامی طلاق کے مسائل کے
                            لئے ماہر وکلاء اور عائلی صلاح کار کی ایک جماعت سے
                            عبارت ہے۔ ہم بہت سارے ایسے موکلوں کو مشاورتی خدمات
                            فراہم کرتے ہیں جن کے ہندوستان اور پاکستان کے ساتھ
                            ولادت، شہریت، زوجیت یا پراپرٹی کی ملکیت کی وجہ سے
                            روابط ہیں۔ ہمارے سربراہ ہنری بروک مین 30 سالوں سے
                            زائد عرصے سے وکالت کی پریکٹس کر رہے ہیں اور ہماری
                            ٹیم گوناگوں قانونی مہارتوں اور صلاحیتوں کی حامل
                            ہے۔ ہم اپنے موکلوں کو طلاق، بچوں کے مسائل، مالی
                            تصفیے، پنشن اور پراپرٹی کے مسائل سمیت عائلی قانون
                            کے تمام امور پر مشورے فراہم کرتے ہیں۔ ہمارے پاس
                            اپنے کسی بھی غیر انگریزی داں موکل کے لئے ایسا وکیل
                            بھی موجود ہے جو ہندی اور اردو دونوں زبانوں بولتا
                            ہے (اگر چہ تحریری مراسلت لازمی طور پر انگریزی میں
                            ہونی چاہئے)۔
                        </p>
                        <p align="right">
                            اگر آپ محسوس کرتے ہیں کہ آپ کو کوئی قانونی مسئلہ
                            درپیش ہے اور آپ کو صلاح کی ضرورت ہے تو، ہم آپ کے
                            ساتھ کوئی پہلا انٹرویو (ٹیلی فون پر یا ملاقات
                            کرکے) کریں گے تاکہ ہم آپ کی حالت کو خوب اچھی طرح
                            سمجھ سکیں، اور تاکہ ہم آپ کو اپنے سامنے موجود تمام
                            حقائق کے بارے میں زیادہ سے زیادہ بتا سکیں۔ ممکن ہے
                            اس وقت آپ کا کام صرف پہلے انٹرویو ہی سے چل جائے۔
                            اگر مزید کارروائیوں کی ضرورت ہوئی تو، ہم ان
                            کارروائیوں نیز ممکنہ اخراجات کی وضاحت کریں گے۔
                            ہماری ہمیشہ کوشش ہوگی کہ سستے سے سستا حل تلاش کریں
                            اور ساتھ ہی ساتھ ایسے مشورے فراہم کریں جس سے آپ کو
                            اپنی حالت کے لئے بہترین نتائج حاصل کرنے میں مدد
                            حاصل ہو۔
                        </p>
                        <p align="right">
                            اگر آپ اپنے مسئلے سے متعلق بروک مین سے رابطہ کرنا
                            چاہتے ہیں یا ہماری خدمات سے متعلق آپ کا کوئی سوال
                            ہے تو، براہ کرم ذیل کے فارم کا استعمال کرتے ہوئے
                            ہم سے رابطہ کریں یا ہمیں +44 20 7430 8470 پر (بین
                            الاقوامی) یا 020 7430 8470 پر (مملکت متحدہ) کال
                            کریں۔
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