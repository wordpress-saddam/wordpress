<?php
/**
 * Template admin/views/dashboard/widgets/widget-dashboard.php
 *
 * @package Forminator
 */

?>

<div class="sui-box <?php echo esc_attr( $this->get_box_summary_classes() ); ?>">
	<div class="forminator-dashboard-no-form-block">
		<div class="forminator-dashboard-create-first-form">
			<svg width="120" height="123" viewBox="0 0 120 123" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M60 120C93.1371 120 120 93.1371 120 60C120 26.8629 93.1371 0 60 0C26.8629 0 0 26.8629 0 60C0 93.1371 26.8629 120 60 120Z" fill="url(#paint0_linear_13765_2376)"/>
				<g filter="url(#filter0_d_13765_2376)">
				<mask id="mask0_13765_2376" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="120" height="120">
				<path d="M60 120C93.1371 120 120 93.1371 120 60C120 26.8629 93.1371 0 60 0C26.8629 0 0 26.8629 0 60C0 93.1371 26.8629 120 60 120Z" fill="url(#paint1_linear_13765_2376)"/>
				</mask>
				<g mask="url(#mask0_13765_2376)">
				<path d="M94.4 28.0002H25.6C23.3909 28.0002 21.6 29.7911 21.6 32.0002V116C21.6 118.209 23.3909 120 25.6 120H94.4C96.6091 120 98.4 118.209 98.4 116V32.0002C98.4 29.7911 96.6091 28.0002 94.4 28.0002Z" fill="white"/>
				</g>
				</g>
				<path d="M52.8 35.9998H32C30.6745 35.9998 29.6 37.0743 29.6 38.3998C29.6 39.7253 30.6745 40.7998 32 40.7998H52.8C54.1255 40.7998 55.2 39.7253 55.2 38.3998C55.2 37.0743 54.1255 35.9998 52.8 35.9998Z" fill="#E1EBFA"/>
				<path d="M52.8 69.5998H32C30.6745 69.5998 29.6 70.6743 29.6 71.9998C29.6 73.3253 30.6745 74.3998 32 74.3998H52.8C54.1255 74.3998 55.2 73.3253 55.2 71.9998C55.2 70.6743 54.1255 69.5998 52.8 69.5998Z" fill="#E1EBFA"/>
				<path d="M86.4 54.3998H33.6C31.8327 54.3998 30.4 55.8325 30.4 57.5998V65.5998C30.4 67.3672 31.8327 68.7998 33.6 68.7998H86.4C88.1673 68.7998 89.6 67.3672 89.6 65.5998V57.5998C89.6 55.8325 88.1673 54.3998 86.4 54.3998Z" stroke="#1485FD" stroke-width="2"/>
				<path d="M86.4 80.7998H33.6C31.3909 80.7998 29.6 82.5907 29.6 84.7998V91.1998C29.6 93.4089 31.3909 95.1998 33.6 95.1998H86.4C88.6091 95.1998 90.4 93.4089 90.4 91.1998V84.7998C90.4 82.5907 88.6091 80.7998 86.4 80.7998Z" fill="#DFEAFB"/>
				<path d="M68.8 70.3998C71.0092 70.3998 72.8 68.6089 72.8 66.3998C72.8 64.1906 71.0092 62.3998 68.8 62.3998C66.5909 62.3998 64.8 64.1906 64.8 66.3998C64.8 68.6089 66.5909 70.3998 68.8 70.3998Z" fill="#DFEAFB"/>
				<path d="M71.9256 83.4958C71.2856 83.4958 70.688 83.4958 70.144 83.4615C69.4739 83.4161 68.8293 83.1868 68.2811 82.7988C67.7329 82.4108 67.3024 81.8791 67.0368 81.2622L63.6616 74.5919C63.4141 74.3036 63.2905 73.9292 63.3177 73.5503C63.345 73.1713 63.521 72.8185 63.8072 72.5687C64.0418 72.3801 64.3343 72.2787 64.6352 72.2815C64.8568 72.2879 65.0742 72.3423 65.2727 72.4409C65.4712 72.5395 65.6459 72.68 65.7848 72.8526L67.3176 74.9447L67.3408 74.9719V67.0239C67.3408 66.6295 67.4975 66.2514 67.7763 65.9725C68.0551 65.6937 68.4333 65.537 68.8276 65.537C69.222 65.537 69.6001 65.6937 69.879 65.9725C70.1578 66.2514 70.3144 66.6295 70.3144 67.0239V72.2239C70.2972 72.0325 70.3199 71.8397 70.3813 71.6576C70.4427 71.4755 70.5413 71.3083 70.6709 71.1664C70.8005 71.0246 70.9583 70.9113 71.1341 70.8338C71.3099 70.7563 71.4999 70.7163 71.692 70.7163C71.8842 70.7163 72.0742 70.7563 72.25 70.8338C72.4258 70.9113 72.5835 71.0246 72.7131 71.1664C72.8427 71.3083 72.9414 71.4755 73.0027 71.6576C73.0641 71.8397 73.0869 72.0325 73.0696 72.2239V73.3078C73.0524 73.1165 73.0751 72.9237 73.1365 72.7416C73.1979 72.5595 73.2965 72.3923 73.4261 72.2504C73.5557 72.1086 73.7135 71.9953 73.8893 71.9178C74.0651 71.8403 74.2551 71.8003 74.4472 71.8003C74.6394 71.8003 74.8294 71.8403 75.0052 71.9178C75.181 71.9953 75.3387 72.1086 75.4683 72.2504C75.5979 72.3923 75.6966 72.5595 75.7579 72.7416C75.8193 72.9237 75.8421 73.1165 75.8248 73.3078V74.1431C75.8076 73.9517 75.8303 73.7589 75.8917 73.5768C75.9531 73.3947 76.0517 73.2275 76.1813 73.0856C76.3109 72.9438 76.4687 72.8305 76.6445 72.753C76.8203 72.6755 77.0103 72.6355 77.2024 72.6355C77.3946 72.6355 77.5846 72.6755 77.7604 72.753C77.9362 72.8305 78.0939 72.9438 78.2235 73.0856C78.3531 73.2275 78.4518 73.3947 78.5131 73.5768C78.5745 73.7589 78.5973 73.9517 78.58 74.1431V79.2127C78.5528 80.7719 77.848 83.4007 75.3688 83.4007C75.1888 83.4087 73.664 83.4966 71.9288 83.4966L71.9256 83.4958Z" fill="#666666" stroke="white"/>
				<defs>
				<filter id="filter0_d_13765_2376" x="15.6" y="19.0002" width="88.8" height="104" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feFlood flood-opacity="0" result="BackgroundImageFix"/>
				<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
				<feOffset dy="-3"/>
				<feGaussianBlur stdDeviation="3"/>
				<feColorMatrix type="matrix" values="0 0 0 0 0.788235 0 0 0 0 0.803922 0 0 0 0 0.85098 0 0 0 0.349 0"/>
				<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_13765_2376"/>
				<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_13765_2376" result="shape"/>
				</filter>
				<linearGradient id="paint0_linear_13765_2376" x1="60" y1="0" x2="60" y2="120" gradientUnits="userSpaceOnUse">
				<stop stop-color="#F1F1F1"/>
				<stop offset="1" stop-color="#F8F8F8"/>
				</linearGradient>
				<linearGradient id="paint1_linear_13765_2376" x1="60" y1="0" x2="60" y2="120" gradientUnits="userSpaceOnUse">
				<stop stop-color="#F8F8F8"/>
				<stop offset="1" stop-color="#F9F9F9"/>
				</linearGradient>
				</defs>
			</svg>
			<h3 class="sui-box-title forminator-create-form-title"><?php esc_html_e( 'You haven’t created any forms yet', 'forminator' ); ?></h3>
			<p><?php esc_html_e( 'With Forminator, you can collect any type of information using Forms, gather opinions with Polls, and boost engagement with Quizzes.', 'forminator' ); ?></p>

			<p>
				<button class="sui-button sui-button-blue wpmudev-open-modal"
					data-modal="custom_forms">
					<i class="sui-icon-plus" aria-hidden="true"></i> <?php esc_html_e( 'Create Your First Form', 'forminator' ); ?>
				</button>
			</p>
		</div>
		<div class="forminator-dashboard-other-form-types">
			<h3 class="sui-box-title forminator-other-form-title"><?php esc_html_e( 'Other form types', 'forminator' ); ?></h3>
			<div class="sui-row">
				<div class="sui-col-md-6">
					<button class="forminator-dashboard-other-form wpmudev-open-modal" data-modal="polls">
						<div class="forminator-dashboard-form-icon">
							<i class="sui-icon-graph-bar" aria-hidden="true"></i>
						</div>
						<div class="forminator-dashboard-form-title">
							<h3 class="sui-box-title"><?php esc_html_e( 'Create Poll', 'forminator' ); ?></h3>
							<p><?php esc_html_e( 'Gather opinions with polls', 'forminator' ); ?></p>
						</div>
					</button>
				</div>
				<div class="sui-col-md-6">
					<button class="forminator-dashboard-other-form wpmudev-open-modal" data-modal="quizzes">
						<div class="forminator-dashboard-form-icon">
							<i class="sui-icon-academy" aria-hidden="true"></i>
						</div>
						<div class="forminator-dashboard-form-title">
							<h3 class="sui-box-title"><?php esc_html_e( 'Create Quiz', 'forminator' ); ?></h3>
							<p><?php esc_html_e( 'Test knowledge with quizzes', 'forminator' ); ?></p>
						</div>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
