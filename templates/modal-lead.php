<?php
/**
 * Description: New lead modal.
 *
 * @package 
 * @subpackage 
 * @since 
 */
?>

<!-- Lead Modal -->
<div class="modal hide fade bg-slate" id="new-lead">
	<div class="modal-header center bumper-top bumper-bottom">
		<h3>Get a free estimate</h3>
	</div>
	<div class="modal-body center bumper-top">
    <div>
      <div class="input-prepend">
          <span class="add-on"><i class="icon-user"></i></span>
          <input id="lead-name" validation="not-empty" data-field-name="Name" placeholder="Your Name" type="text" value="" />
      </div>
    </div>
    <div>
      <div class="input-prepend">
        <span class="add-on"><i class="icon-briefcase"></i></span>
        <input id="lead-company" validation="not-empty min-length-3" placeholder="Company Name" type="text" value="" />
      </div>
    </div>
    <div>
      <div class="input-prepend">
          <span class="add-on"><i class="icon-envelope"></i></span>
          <input id="lead-email" validation="not-empty email" placeholder="Email Address" type="text" value="" />
      </div>
    </div>
    <div>
      <div class="input-prepend">
          <span class="add-on"><i class="icon-phone-halfling"></i></span>
          <input id="lead-phone" validation="not-empty phone" placeholder="Phone Number" type="text" value="" />
      </div>
    </div>
    <div>
      <div class="input-prepend">
        <span class="add-on"><i class="icon-map-marker"></i></span>
        <input id="lead-city" validation="not-empty" placeholder="Job Location" type="text" value="" />
      </div>
    </div>
    <div>
      <div class="input-prepend">
        <span class="add-on"><i class="icon-checkbox-halfling"></i></span>
        <span class="checkboxes">
          <span class="checkboxes-title">Select Services</span>
          <?php
          $tb_industry = get_option('tb_industry');
          $suggestions = $tb_industry['services'];
          if($suggestions && is_array($suggestions)) {
            foreach ($suggestions as $key => $value) { ?>
            <span><input id="service-<?=$key?>" class="lead-services" type="checkbox" value="<?=$value?>" /><label for="service-<?=$key?>"><?=$value?></label></span>
            <? }
          }
          ?>
        </span>
      </div>
    </div>
		<p class="page-left page-right">We receive your request instantly via SMS and usually <strong><u>respond within minutes!</u></strong></p>
	</div>
	
	<div class="modal-footer center">
		<a href="" class="btn btn-large btn-success save">Quick free estimate</a>
	</div>
</div>

<!-- / modal -->