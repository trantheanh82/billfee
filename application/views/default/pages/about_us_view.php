<?php 
	$this->load->view('elements/page_header_view',$item);
	?>
<section class="my-about-field my-about-two">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
					<div class="my-sector-topp">
						<span class="icon-tools"></span>
		                <h2><span><?=$item->translations[0]->teaser?></span></h2>
		                <p><?=$item->translations[0]->content?></p>
					</div>
				</div>
				
		<div class="row">
			<p><img src="<?=base_url()?>assets/upload/img/about_1.jpg?<?=rand(0,999999)?>" class='img-responsive'/></p>
		</div>
		<div class="row">
			<p><img src="<?=base_url()?>assets/upload/img/about_2.jpg" class='img-responsive'/></p>
		</div>

	</div>
</section>