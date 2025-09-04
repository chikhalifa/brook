<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<body
		style="
			font-family: Arial, sans-serif;
			background-color: #f8f9fa;
			margin: 0;
			padding: 20px;">
		<div
			style="
				max-width: 600px;
				margin: auto;
				background: #fff;
				border-radius: 8px;
				box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
				overflow: hidden;">
			<div style="background: #653465; color: #fff; padding: 15px 20px">
				<h2 style="margin: 0; font-size: 18px"> New Enquiry Received</h2>
			</div>
			<div style="padding: 20px; color: #333">
				<p style="font-size: 15px; margin: 0 0 10px">
					You have received a new inquiry. Details are as follows:
				</p>
				<table style="width: 100%; border-collapse: collapse; margin-top: 15px">
					<tr>
						<td
							style="
								padding: 8px;
								font-weight: bold;
								width: 30%;
								background: #f1f1f1;
							"
						>
							Name:
						</td>
						<td style="padding: 8px">
							<?= $name ?>
						</td>
					</tr>
					<tr>
						<td style="padding: 8px; font-weight: bold; background: #f9f9f9">
							Email:
						</td>
						<td style="padding: 8px">
							<?= $email ?>
						</td>
					</tr>
					<tr>
						<td style="padding: 8px; font-weight: bold; background: #f1f1f1">
							Phone:
						</td>
						<td style="padding: 8px">
							<?= $phone ?>
						</td>
					</tr>
					<tr>
						<td style="padding: 8px; font-weight: bold; background: #f9f9f9">
							Location:
						</td>
						<td style="padding: 8px">
							<?= $location ?>
						</td>
					</tr>
					<tr>
						<td style="padding: 8px; font-weight: bold; background: #f1f1f1">
							Comment:
						</td>
						<td style="padding: 8px">
                            <?= $comment ?>
						</td>
					</tr>
				</table>
				<p style="margin-top: 20px; font-size: 13px; color: #666">
					This email was automatically generated from your website inquiry form.
				</p>
			</div>
			<div
				style="
					background: #f1f1f1;
					padding: 10px 20px;
					text-align: center;
					font-size: 12px;
					color: #777;">
				© <?=  date('Y') ?>" Josh McPherson. All rights reserved.
			</div>
		</div>
	</body>
</html>