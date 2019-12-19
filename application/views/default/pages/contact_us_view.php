<?php 
	$this->load->view('elements/page_header_view',$item);
	?>
<section class="my-contact-field">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="my-contact-col">
                        <form id="contact_form" name="contact_form" class="contact-form" action="<?=base_url()?>pages/contact" method="post" novalidate="novalidate">
	                        <?php
		                        if(isset($email_sent)):
		                        ?>
		                        <div class="messages email_sent brand_color"><?=_("Thanks you for contact us. We will reply as soon as possible.",$this)?></div>
		                        <?php
			                        endif;
			                        ?>
                            <div class="messages"><?=$item->translations[0]->content?></div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="form_name"><?=__('Name',$this)?> <small>*</small></label>
                                        <input id="form_name" name="form_name" class="form-control" placeholder="<?=__('enter a name',$this)?>" required="required" data-error="Name is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="form_email"><?=__('Email',$this)?> <small>*</small></label>
                                        <input id="form_email" name="form_email" class="form-control required email" placeholder="<?=__('enter an email',$this)?>" required="required" data-error="<?=_('Email is required',$this)?>." type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="form_phone"><?=__('Phone',$this)?> <small>*</small></label>
                                        <input id="form_phone" name="form_phone" class="form-control required" placeholder="<?=__('enter a phone',$this)?>" required="required" data-error="<?=_('Phone Number is required',$this)?>." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="form_subject"><?=__('Subject',$this)?> <small>*</small></label>
                                        <input id="form_subject" name="form_subject" class="form-control required" placeholder="<?=__('enter a subject',$this)?>" required="required" data-error="<?=_('Subject is required',$this)?>." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>   
                            </div>

                            <div class="form-group">
                                <label for="form_name"><?=__('Message',$this)?></label>
                                <textarea id="form_message" name="form_message" class="form-control style2 required" rows="10" placeholder="<?=__('type in a message',$this)?>" required="required" data-error="Message is required."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group text-right">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
                                <button type="submit" class="btn btn-lg my-btn-black" data-loading-text="Getting Few Sec..."><?=__('Send Message',$this)?></button>
                            </div>
                        </form>
					</div>	
				</div>
			</div>
		</div>
		<div class="container-fluid">
            <div class="row">
                <div class="my-map" id="map-canvas" style="height: 520px;">
                </div>
            </div>
        </div>
	</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVZbQted0ZniDzhu6ROMdluDJAixbolzM&callback=initMap"></script>
