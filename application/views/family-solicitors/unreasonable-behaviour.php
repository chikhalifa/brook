<?php defined('BASEPATH') OR exit('No direct script access allowed');
$data = ['section1' =>
'divorce', 'section2' => 'guide-to-divorce-steps']; ?>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<?php $this->load->view('layout/home-banner', ["banner_path"=>"./wp-content/uploads/2024/06/Divorce-Solicitors-Lawyers4-1.jpg", "header_name" => "What is
		Unreasonable Behaviour?"]); ?>
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
													><a href="<?= base_url('family-solicitors'); ?>"
														>Divorce &#038; No-Fault Divorce</a
													></span
												>
												<span class="breadcrumb_last" aria-current="page"
													>What is Unreasonable Behaviour?</span
												></span
											>
										</div>
									</div>
								</div>
								<div class="container-inner">
									<div class="entry-content">
										<p>
											No-fault divorce in England and Wales means anyone seeking
											a divorce has to establish one thing: that the marriage or
											civil partnership has broken down irretrievably. Contrary
											to fault-based systems there is no requirement for a
											person
											<a href="<?= base_url('family-solicitors'); ?>"
												>seeking a divorce</a
											>
											to blame his or her spouse or civil partner for the
											breakdown in the marriage. As a result, allegations of
											unreasonable behaviour have no place in the procedural
											aspect of securing a divorce in England and Wales.
										</p>
										<p>
											In reality however, behaviour that a spouse or civil
											partner finds unreasonable or unacceptable will very often
											be the catalyst for divorce.
										</p>
										<p>
											Before the Divorce and Dissolution Act (no-fault divorce)
											came into force in 2022, unreasonable behaviour was the
											most common ground for divorce. That doesn’t mean that
											England is full of unreasonable people. Allegations of
											unreasonable behaviour under the fault-based system of
											divorce that existed before 2022 meant simply that in all
											the circumstances of the marriage, it was not reasonable
											for the person seeking a divorce to stay living with his
											or her spouse or partner.
										</p>
										<p>
											What constituted unreasonable behaviour was an entirely
											subjective matter. Some spouses or civil partners might
											feel aggrieved if their partner goes for a drink with his
											work mates before coming home every night of the working
											week; others might regard it as perfectly normal and
											acceptable.
										</p>
										<p>
											If you are thinking about beginning divorce proceedings
											you can get in touch with us for an initial, no-obligation
											discussion. No-fault divorce means that, if your spouse or
											civil partner is behaving in a way that you find
											intolerable you can apply for a divorce without having to
											formally describe the behaviour in your divorce
											application. This could make it more straightforward for
											you to reach agreement on divorce-related matters like
											finances and child arrangements.
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
