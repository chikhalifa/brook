<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' =>
'divorce', 'section2' => 'legal-advice']; ?>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "Legal Advice and Information"]); ?>
		<div class="bg-grey">
			<div class="container">
				<section class="main-content">
					<div class="row row-flex no-gutter">
						<?php $this->load->view('layout/sidebar-section', $data); ?>
						<div class="col-xs-12 col-md-7 col-lg-8">
							<div class="section-padded">
                                <div class="container-inner" style="padding-right: 0">
                                    <div id="breadcrumbs">
                                        <div class="container-inner" style="padding-left: 0">
                                            <span>
                                                <span><a href="<?= base_url('/')?>">Home</a></span>
                                                <span class="breadcrumb_last" aria-current="page"
                                                    >Legal Advice and Information</span
                                                >
                                            </span>
                                        </div>
                                    </div>
                                </div>
								<div class="container-inner">
									<div class="entry-content">
										<div class="cta">
											<div class="item">
												<div
													class="image"
													data-src="./wp-content/uploads/2013/11/advice_land.jpg"
												></div>
												<div class="content">
													<h2>
														<a
															title="Where to Start"
															href="<?= base_url('where-to-start')?>"
															>Where to Start</a
														>
													</h2>
												</div>
											</div>
										</div>
										<p>
											Any legal proceeding can be a stressful, confusing and
											emotional experience.  Amidst your own personal
											circumstances, you will be faced with choosing an
											appropriate solicitor for you and your case.  This
											solicitor should provide you with consistent support to
											guide you through the legal process, with your best
											interests at heart.
										</p>
										<p>
											<a
												title="Read More..."
												href="<?= base_url('where-to-start')?>"
												>Read More…</a
											>
										</p>
										<div class="cta">
											<div class="item">
												<div
													class="image"
													data-src="./wp-content/uploads/2013/11/videos_land.jpg"
												></div>
												<div class="content">
													<h2>Videos</h2>
													<p></p>
												</div>
											</div>
										</div>
										<p>
											Henry Brookman has created several discussion videos in
											order to further explain some areas of family law and also
											so you can learn a little more about Brookman Solicitors.
											Henry discusses topics such as &#8216;<a href="<?= base_url('family-solicitors')?>">divorce</a
											>&#8216;, &#8216;international divorce&#8217;,
											&#8216;children&#8217;s issues&#8217; and &#8216;common
											divorce myths&#8217;.
										</p>										
										<div class="cta">
											<div class="item">
												<div
													class="image"
													data-src="./wp-content/uploads/2013/11/find_land.jpg"
												></div>
												<div class="content">
													<h2>
														<a
															title="Finding A Divorce Lawyer"
															href="<?= base_url('finding-a-solicitor')?>"
															>Finding A Divorce Lawyer</a
														>
													</h2>
													<p></p>
												</div>
											</div>
										</div>
										<p>
											Family proceedings are often a stressful, emotional and
											lonely experience.  As helpful as people try to be
											well-meaning non-professional advice can simply add
											pressure on you.  Your lawyer is there to be a constant
											support to you and to help guide you through the process.
										</p>
										<p>
											<a
												title="Read More..."
												href="<?= base_url('finding-a-solicitor')?>"
												>Read More…</a
											>
										</p>
										<div class="cta">
											<div class="item">
												<div
													class="image"
													data-src="./wp-content/uploads/2013/11/guide-to-divorce.jpg"
												></div>
												<div class="content">
													<h2>
														<a href="<?= base_url('guide-to-divorce-steps')?>"
															>Step by Step Guide to Divorce</a
														>
													</h2>
													<p></p>
												</div>
											</div>
										</div>
										<p>
											It&#8217;s easy to get confused about what the divorce
											entails and in what order the steps in a divorce take.
											Here we have provided a simple explanation of the key
											steps in a divorce.
										</p>
										<p>
											<a
												title="Read More..."
												href="<?= base_url('guide-to-divorce-steps')?>"
												>Read More…</a
											>
										</p>
										<div class="cta">
											<div class="item">
												<div
													class="image"
													data-src="./wp-content/uploads/2013/10/prenuptial_land.jpg"
												></div>
												<div class="content">
													<h2>
														<a href="<?= base_url('pay-for-my-divorce')?>"
															>How Do I Pay For My Divorce</a
														>?
													</h2>
													<p></p>
												</div>
											</div>
										</div>
										<p>
											There is more than one way to pay for your divorce,
											including spreading the cost or in some cases, seeking
											payment from the other side.
										</p>
										<p>
											<a
												title="Read More..."
												href="<?= base_url('pay-for-my-divorce')?>"
												>Read More…</a
											>
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
		<?php $this->load->view('layout/divorce-scenario'); ?>
		<?php $this->load->view('layout/free-consultation'); ?>
		<?php $this->load->view('layout/team-container'); ?>
	</div>
</div>
