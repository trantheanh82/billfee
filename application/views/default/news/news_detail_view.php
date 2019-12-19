<?php 
	$this->load->view('elements/page_header_view',$item);
	
	$date = new DateTime($news->created_at);
	$month = $date->format('M');
	$day = $date->format('d');
?>
<section class="my-inner-blog-field my-about-two">
	<div class="container">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="my-sector-topp">
					<span class="icon-newspaper"></span>
	                <h2><span><?=$item->translations[0]->name?></span></h2>
	                <p><?=$item->translations[0]->content?></p>
				</div>
			</div>
		
		<div class='row'>
			<div class='col-sm-3'>
				<?php $this->load->view('elements/news_left_view',$cats);
				?>
			</div>
			<div class='col-sm-9'>
				<div class="my-blog-col clearfix">
						<!-- blog main content start -->
						<div class="my-blog-box my-blog-single-col">
							<img class="img-responsive my-img-fluided" style='max-width:848px;' alt="" src="<?=base_url().'assets/upload/img/'.$news->thumbnail?>">
							<div class="my-blog-heading-row clearfix">
								<div class="my-blog-date">
			                   		<h2><?=$day?><br><span><?=$month?></span></h2>
			                   	</div>
			                   	<!--<div class="my-post clearfix">
			                   		<ul class="">
			                   			<li><i class="icon fa fa-user"></i> <a href="#"> Oceanthemes</a></li>
			                   			<li><i class="icon fa fa-tags"></i> <a href="#"> Business, Coorporate,Tips</a></li>
			                   			<li><i class="icon fa fa-comment"></i><a href="#"> Comments: 5</a></li>
			                   		</ul>
			                   		-->
			                   		<br>
			                   		<h2><a href="#"><?=$news->translations[0]->title?></a></h2>
			                   	</div>
							</div>
							<?=$news->translations[0]->content?>
							<div style='margin-top:5%'></div>
							<?php
								if(!empty($other_news)):
								?>
							<div class="my-silgle-comments">
								<div class="my-single-heading">
									<h3><?=__('Other News',$this)?></h3>
									<div class="my-under-border"></div>
								</div>
								<?php
									foreach($other_news as $k => $v):
									//pr($v);
									?>
								<div class="my-single-comment-item clearfix">
									<a href="<?=base_url()?>news/<?=$v->slug?>">
								        <img class="img-thumbnail thumbnail img-responsive" src="<?=base_url().'assets/upload/img/'.$v->thumbnail?>" alt="">
								    </a>
								    <h4><a href='<?=base_url()?>news/<?=$v->slug?>'><span><?=$v->translations[0]->title?></span></a></h4>
								    <p>Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</p>
								</div>
								<?php
									endforeach;
									?>
								<div class='clearfix'></div>
							</div>
							<?php
								endif;
								?>
						</div>
					</div>
			</div>
		</div>
	</div>
	
</section>
<?=$this->output->enable_profiler(TRUE);?>