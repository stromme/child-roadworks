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
				<h4><a href=""><?=get_phone_number()?></a></h4>
			</li>
			<li class="headline-link hidden-phone hidden-tablet">
				<h4><a href="" class="quick-estimate">Quick Estimate</a></h4>
			</li>
		</ul>
	</div>
</section>
<!-- / Headline -->
