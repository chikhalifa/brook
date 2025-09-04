<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<div class="container">
			<section class="home-banner">
				<div class="image-rotator">
					<div class="item rotator-active" data-rotator-id="0">
						<div
							class="image"
							data-src="wp-content/uploads/2024/06/Home-Brookman-Phil-1-1.jpg"
						></div>
					</div>

					<div class="item" data-rotator-id="1">
						<div
							class="image"
							data-src="wp-content/uploads/2024/06/Home-Brookman-Michelle-1.jpg"
						></div>
					</div>

					<div class="item" data-rotator-id="2">
						<div
							class="image"
							data-src="wp-content/uploads/2024/06/Home-Brookman7-1.jpg"
						></div>
					</div>
				</div>

				<div class="container-inner">
					<div class="row row-flex flex-align-center">
						<div class="col-xs-12 col-md-7 col-lg-7">
							<div class="banner-content">
								<h1>
									Specialist <span class="nowrap">divorce lawyers</span>
									<span class="nowrap">&amp; family solicitors</span>, here
									<span class="nowrap"
										>to help <span class="circle">you</span></span
									>.
								</h1>
								<h2>
									Welcome, we are your specialists for
									<a class="nowrap" href="<?= base_url('family-solicitors'); ?>"
										>English Divorce</a
									>,
									<a
										class="nowrap"
										href="<?= base_url('international-divorce'); ?>"
										>International Divorce</a
									>,
									<a class="nowrap" href="<?= base_url('childrens-issues'); ?>"
										>Children Issues</a
									>
									&amp;
									<a href="<?= base_url('prenuptial-agreements'); ?>"
										>Relationship Agreements</a
									>.
								</h2>
							</div>
						</div>

						<div class="hidden-xs hidden-sm col-md-5 col-lg-4 col-lg-offset-1">
							<div class="expanding-form">
								<div class="close show-on-active">
									<svg
										xmlns="http://www.w3.org/2000/svg"
										width="24"
										height="24"
										viewBox="0 0 24 24"
										fill="none"
										stroke="currentColor"
										stroke-width="2"
										stroke-linecap="square"
										stroke-linejoin="round"
										aria-hidden="true"
									>
										<line x1="18" y1="6" x2="6" y2="18"></line>
										<line x1="6" y1="6" x2="18" y2="18"></line>
									</svg>
								</div>

								<div class="inner">
									<h3 class="small-cap-heading center">
										Got a question about divorce or family law?
									</h3>

									<div
										class="gf_browser_unknown gform_wrapper gform_legacy_markup_wrapper gform-theme--no-framework"
										data-form-theme="legacy"
										data-form-index="0"
										id="gform_wrapper_14"
									>
										<div id="gf_14" class="gform_anchor" tabindex="-1"></div>
										<form
										method="post"
										enctype="multipart/form-data"
										method="POST"
										action="<?= base_url ('home/ask_question_form') ?>"
										>
										<div class="gform-body gform_body">
											<ul
											id="gform_fields_14"
											class="gform_fields top_label form_sublabel_below description_below validation_below"
											>
											<li
												id="field_14_11"
												class="gfield gfield--type-text infield-label gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible"
											>
												<label class="gfield_label gform-field-label" for="input_14_11"
												>Your Name<span class="gfield_required"
													><span class="gfield_required gfield_required_asterisk"
													>*</span
													></span
												></label
												>
												<div class="ginput_container ginput_container_text">
												<input
													name="name"
													type="text"
													value=""
													class="medium"            
												/>
												</div>
											</li>
											<li
												id="field_14_2"
												class="gfield gfield--type-email infield-label gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible"
											>
												<label class="gfield_label gform-field-label" for="input_14_2"
												>Email Address<span class="gfield_required"
													><span class="gfield_required gfield_required_asterisk"
													>*</span
													></span
												></label
												>
												<div class="ginput_container ginput_container_email">
												<input
													name="email"            
													type="email"
													value=""
													class="medium"            
												/>
												</div>
											</li>
											<li
												id="field_14_6"
												class="gfield gfield--type-textarea gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label field_validation_below gfield_visibility_visible"
											>
												<label class="gfield_label gform-field-label" for="input_14_6"
												>Your Question or Enquiry<span class="gfield_required"
													><span class="gfield_required gfield_required_asterisk"
													>*</span
													></span
												></label
												>
												<div class="ginput_container ginput_container_textarea">
												<textarea
													name="comment"            
													class="textarea medium"
													placeholder="Your Question or Enquiry*"            
													rows="10"
													cols="50"
												></textarea>
												</div>
											</li>
											<li
												id="field_14_3"
												class="gfield gfield--type-phone infield-label show-on-active field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible"
											>
												<label class="gfield_label gform-field-label" for="input_14_3"
												>Phone Number (Optional)</label
												>
												<div class="ginput_container ginput_container_phone">
												<input
													name="phone"
													type="tel"
													value=""
													class="medium"            
												/>
												</div>
											</li>
											<li
												id="field_14_13"
												class="gfield gfield--type-text gfield--width-full infield-label show-on-active gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible"
											>
												<label class="gfield_label gform-field-label" for="input_14_13"
												>Your Location (e.g. Town/City)<span class="gfield_required"
													><span class="gfield_required gfield_required_asterisk"
													>*</span
													></span
												></label
												>
												<div class="ginput_container ginput_container_text">
												<input
													name="location"            
													type="text"
													value=""
													class="medium"            
												/>
												</div>
											</li>
											<li
												id="field_14_12"
												class="gfield gfield--type-html hide-on-active gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible"
											>
												<button type="button" class="btn btn-lg">Ask Us Now</button>
											</li>
											</ul>
										</div>
										<div class="gform-footer gform_footer top_label">
											<input
											type="submit"
											id="gform_submit_button_14"
											class="gform_button button"      
											value="Send Now"
											/>
										</div>
										</form>
									</div>
									<style>
										.gform_confirmation_wrapper ~ .show-on-active {
											display: none;
										}
									</style>
								</div>
							</div>

							<div class="contact-sep">Or</div>

							<a
								href="#modalConsultation"
								class="btn btn-lg btn-white"
								data-modal
								>Request a free consultation</a
							>
						</div>
					</div>
				</div>

				<div class="home-banner-bottom container-inner">
					<div class="legal500-container">
						<img
							class="legal500"
							src="wp-content/uploads/2024/10/Legal-500-2025.jpg"
							alt="The Legal 500 – The Clients Guide to Law Firms"
							width="97"
							height="107"
							border="0"
						/>

						<div>
							<a href="#modalReviews" data-modal>
								<div class="rating-stars">
									<div class="rating-stars-inner" style="width: 96%"></div>
								</div>
								<b>Google Reviews</b><br />
								<u>Excellent, 4.8/5.0</u> - 220 Reviews
							</a>
						</div>
					</div>
				</div>
			</section>

			<section class="home-banner-contact">
				<a href="#modalAskQuestion" class="btn btn-lg" data-modal
					>Enquire Now</a
				>

				<div class="contact-sep">Or</div>

				<a href="#modalConsultation" class="btn btn-lg btn-white" data-modal
					><span>Request a </span>free consultation</a
				>
			</section>
		</div>

		<section class="cta section-padded">
			<div class="container">
				<div class="row row-flex row-padded wide-gutter">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<a href="<?= base_url('family-solicitors'); ?>" class="item">
							<div
								class="image"
								data-src="wp-content/uploads/2024/06/Dvorce-768x768.jpg"
							></div>

							<div class="content">
								<h3 class="cta-title">Divorce</h3>
								<p>
									We handle all types of divorce case in England, from
									straightforward to complex.
								</p>

								<p><span class="read-more">Find Out More</span></p>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<a href="<?= base_url('international-divorce'); ?>" class="item">
							<div
								class="image"
								data-src="wp-content/uploads/2021/02/Contact-Brookman4.jpg"
							></div>

							<div class="content">
								<h3 class="cta-title">International Divorce</h3>
								<p>
									We are the experts in divorce cases that cross country and
									cultural borders.
								</p>

								<p><span class="read-more">Find Out More</span></p>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<a href="<?= base_url('childrens-issues'); ?>" class="item">
							<div
								class="image"
								data-src="wp-content/uploads/2021/02/Children.jpg"
							></div>

							<div class="content">
								<h3 class="cta-title">Children's Issues</h3>
								<p>
									Know your rights as a parent and take the right steps to
									protect your children.
								</p>

								<p><span class="read-more">Find Out More</span></p>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<a href="<?= base_url('financial-settlements'); ?>" class="item">
							<div
								class="image"
								data-src="wp-content/uploads/2025/04/Ella-768x768.jpg"
							></div>

							<div class="content">
								<h3 class="cta-title">Financial Issues</h3>
								<p>
									Negotiating finances requires a law firm with a record of
									client successes.
								</p>

								<p><span class="read-more">Find Out More</span></p>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<a href="<?= base_url('about'); ?>" class="item">
							<div
								class="image"
								data-src="wp-content/uploads/2024/06/Phil-768x768.jpg"
							></div>

							<div class="content">
								<h3 class="cta-title">About Us</h3>
								<p>A team of very experienced divorce and family lawyers.</p>

								<p><span class="read-more">Find Out More</span></p>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="item">
							<div class="content">
								<h3 class="cta-title">Quick Links</h3>

								<ul class="list-styled cta-links">
									<li>
										<a href="<?= base_url('family-solicitors'); ?>">
											Divorce
										</a>
									</li>
									<li>
										<a href="<?= base_url('financial-settlements'); ?>">
											Marital Finances
										</a>
									</li>
									<li>
										<a href="<?= base_url('childrens-issues'); ?>">
											Children’s Issues
										</a>
									</li>
									<li>
										<a href="<?= base_url('international-divorce'); ?>">
											Overseas Divorce
										</a>
									</li>
									<li>
										<a href="<?= base_url('team'); ?>"> Our Team </a>
									</li>
									<li>
										<a href="<?= base_url('our-fees'); ?>"> Our Fees </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="container contact-cta-container">
			<div class="big-circle"></div>

			<section class="contact-cta-1 lede-lg lede-xl">
				<div class="inner">
					<p>
						If you have a question about your divorce or family law issue,
						<a href="#modalAskQuestion" data-modal class="link-secondary"
							>ask us now</a
						>
					</p>
					<a
						href="#modalAskQuestion"
						data-modal
						class="btn btn-lg btn-outline parallax"
						>Ask your question now</a
					>
				</div>
			</section>
		</div>
		<?php $this->load->view('layout/team-container'); ?>
		<?php $this->load->view('layout/free-consultation'); ?>		
		
		<div class="post-grid-section section-padded">
			<div class="container">
				<div class="inner">
					<h2 class="section-title small-cap-heading center">
						<span> Latest News &amp; Advice </span>
					</h2>

					<div class="post-grid-container post-grid-slider">
						<div class="row">
							<div
								class="col-xs-12 col-sm-6 col-lg-4 post-7594 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-divorce category-home"
							>
								<a href="#" class="post-container">
									<div
										class="post-image"
										data-src="wp-content/uploads/2025/08/pre-nup-pressure-768x480.jpg"
									></div>

									<div class="post">
										<h3 class="post-title">
											Why persuasion, pressure and manipulation can make a
											prenup or postnup invalid
										</h3>

										<div class="post-excerpt">
											<p>
												Prenups and postnups are used widely in England and
												Wales. They provide couples with clarity about financial
												matters and reduce the possibility of prolonged
												discussion&hellip;
											</p>
										</div>

										<span class="post-read-more"> Read More </span>
									</div>
								</a>
							</div>
							<div
								class="col-xs-12 col-sm-6 col-lg-4 post-7592 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-divorce category-home"
							>
								<a href="#" class="post-container">
									<div
										class="post-image"
										data-src="wp-content/uploads/2025/08/heirloom-divorce-768x480.jpg"
									></div>

									<div class="post">
										<h3 class="post-title">
											Are non-matrimonial assets now even more protected in
											divorce?
										</h3>

										<div class="post-excerpt">
											<p>
												Courts in England and Wales have a wide discretion when
												making financial remedy orders in divorce cases. This
												gives judges the leeway to reach decisions&hellip;
											</p>
										</div>

										<span class="post-read-more"> Read More </span>
									</div>
								</a>
							</div>
							<div
								class="col-xs-12 col-sm-6 col-lg-4 post-7587 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-divorce category-home"
							>
								<a href="#" class="post-container">
									<div
										class="post-image"
										data-src="wp-content/uploads/2025/08/confused-couple-768x480.jpg"
									></div>

									<div class="post">
										<h3 class="post-title">
											Divorcing a spouse who’s lost mental capacity: the
											implications for the settlement
										</h3>

										<div class="post-excerpt">
											<p>
												A spouse without mental capacity is still able to get
												divorced. Unsurprisingly there are some differences in
												the way the divorce procedure plays out when&hellip;
											</p>
										</div>

										<span class="post-read-more"> Read More </span>
									</div>
								</a>
							</div>
							<div
								class="col-xs-12 col-sm-6 col-lg-4 post-7537 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-childrens-issues category-home"
							>
								<a href="#" class="post-container">
									<div
										class="post-image"
										data-src="wp-content/uploads/2025/07/divorce-tax-owed-768x480.jpg"
									></div>

									<div class="post">
										<h3 class="post-title">
											My financial order didn’t deal with tax liability. Can I
											change it?
										</h3>

										<div class="post-excerpt">
											<p>
												If you are unhappy with a financial order handed down by
												the court your options for getting it changed are
												limited. Always get expert legal&hellip;
											</p>
										</div>

										<span class="post-read-more"> Read More </span>
									</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<div class="view-all-container">
									<a href="<?= base_url('blog'); ?>" class="view-all">
										<div class="circle">
											<svg
												xmlns="http://www.w3.org/2000/svg"
												width="24"
												height="24"
												viewBox="0 0 24 24"
												fill="none"
												stroke="currentColor"
												stroke-width="2"
												stroke-linecap="round"
												stroke-linejoin="round"
												aria-hidden="true"
												data-reactid="131"
											>
												<line x1="5" y1="12" x2="19" y2="12"></line>
												<polyline points="12 5 19 12 12 19"></polyline>
											</svg>
										</div>

										View All
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .content-area -->
</div>
<!-- .site-content -->
