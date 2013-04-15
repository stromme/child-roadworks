<?php
/**
 * Template Name: Headline
 * Description: Fixed to top page headline and call to action
 *
 * @package 
 * @subpackage 
 * @since 
 */

$seo = get_location_seo();
?>

<!-- Headline - Fixed to top of page
==================================================
-->
<section class="fixed-top">
	<div class="container headline">
		<ul>
			<li class="headline-title">
				<h1 class="multi-line"><?php echo get_bloginfo ( 'description' ) ?> </h1>
			</li>
			<li class="headline-phone">
				<?php $tb_company = get_option('tb_company'); ?>
				<h2 class="white"><span class="visible-phone-portrait"><?=esc_html( stripslashes($tb_company['name']))?> | </span><a href="">Call <?=get_phone_number()?></a></h2>
			</li>
			<li class="headline-link hidden-phone hidden-tablet">
				<h2><a href="" class="quick-estimate">Quick Estimate</a></h2>
			</li>
		</ul>
	</div>
</section>
<!-- / Headline -->
