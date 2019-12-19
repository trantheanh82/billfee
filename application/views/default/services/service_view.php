<?php 
	$this->load->view('elements/page_header_view',$item);
?>
<section class="my-inner-blog-field my-about-two">
	<div class="container">
			<div class="col-sm-8 col-sm-offset-2">
						<div class="my-sector-topp">
							<span class="icon-compass"></span>
			                <h2><span><?=$item->translations[0]->name?></span></h2>
			                <p><?=$item->translations[0]->content?></p>
						</div>
					</div>
		
		<div class='row'>
			<div class='col-sm-3'>
				<?php $this->load->view('elements/service_left_view',$items);
				?>
			</div>
			<div class='col-sm-7'>
				<?php
					foreach($items as $k=>$v):
					?>
					<div class='my-about-col'>
					<h4>
						<span style='color: #0074b6;'><?=$v->translations[0]->name?></span></h4>
						<img src='<?=base_url()?>assets/upload/img/<?=$v->translations[0]->content_image?>' class='img-responsive' />
						<br />
						<?=$v->translations[0]->content?>
					</div>
					
				<?php
					endforeach;
					?>
			</div>
		</div>
	</div>
</section>