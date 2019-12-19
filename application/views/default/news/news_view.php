<?php 
	$this->load->view('elements/page_header_view',$item);
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
						<?php
							if(!empty($items)):
								foreach($items as $k => $v):
								
									$date = new DateTime($v->created_at);
									$month = $date->format('M');
									$day = $date->format('d');
							?>
							<div class="my-blog-box">
							<img class="img-responsive my-img-fluided crop-img-news" alt=""  src="<?=base_url().'assets/upload/img/'.$v->thumbnail?>" >
							<div class="my-blog-heading-row clearfix">
								<div class="my-blog-date">
			                   		<h2><?=$day?><br><span><?=$month?></span></h2>
			                   	</div>
			                   	<div class="my-post clearfix">
			                   		<!--<ul class="">
			                   			<li><i class="icon fa fa-user"></i> <a href="#"> Oceanthemes</a></li>
			                   			<li><i class="icon fa fa-tags"></i> <a href="#"> Business, Coorporate,Tips</a></li>
			                   			<li><i class="icon fa fa-comment"></i><a href="#"> Comments: 5</a></li>
			                   		</ul>
			                   		<br>-->
			                   		<h2><a href="<?=base_url()?>news/<?=$v->slug?>"><?=$v->translations[0]->title?></a></h2>
			                   	</div>
							</div>
							<p><?=$v->translations[0]->teaser?></p>
							<a class="btn btn-default my-btn-black" href="#">read more</a>
						</div>
						
							<?php
								endforeach;
							endif;
								?>
						<!--
						<div class="my-blog-box">
							<div class="post-entry-heading">
			                    <div class="owl-carousel-grid-one blog-img-carousel post-main-thumb owl-carousel owl-theme owl-loaded"> 
				                    
				                    
				                    
			                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1560px, 0px, 0px); transition: 0s; width: 5460px;"><div class="owl-item cloned" style="width: 750px; margin-right: 30px;"><div class="item">
				                    	<img src="images/resource/blog2.jpg" alt="2.jpg">
				                    </div></div><div class="owl-item cloned" style="width: 750px; margin-right: 30px;"><div class="item">
				                    	<img src="images/resource/blog2.jpg" alt="2.jpg">
				                    </div></div><div class="owl-item active" style="width: 750px; margin-right: 30px;"><div class="item">
				                    	<img src="images/resource/blog2.jpg" alt="2.jpg">
				                    </div></div><div class="owl-item" style="width: 750px; margin-right: 30px;"><div class="item">
				                    	<img src="images/resource/blog2.jpg" alt="2.jpg">
				                    </div></div><div class="owl-item" style="width: 750px; margin-right: 30px;"><div class="item">
				                    	<img src="images/resource/blog2.jpg" alt="2.jpg">
				                    </div></div><div class="owl-item cloned" style="width: 750px; margin-right: 30px;"><div class="item">
				                    	<img src="images/resource/blog2.jpg" alt="2.jpg">
				                    </div></div><div class="owl-item cloned" style="width: 750px; margin-right: 30px;"><div class="item">
				                    	<img src="images/resource/blog2.jpg" alt="2.jpg">
				                    </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="lnr lnr-arrow-left"></i></div><div class="owl-next" style=""><i class="lnr lnr-arrow-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
			                </div>
							<div class="my-blog-heading-row clearfix">
								<div class="my-blog-date">
			                   		<h2>03<br><span>Dec</span></h2>
			                   	</div>
			                   	<div class="my-post clearfix">
			                   		<ul class="">
			                   			<li><i class="icon fa fa-user"></i> <a href="#"> Oceanthemes</a></li>
			                   			<li><i class="icon fa fa-tags"></i> <a href="#"> Business, Coorporate,Tips</a></li>
			                   			<li><i class="icon fa fa-comment"></i><a href="#"> Comments: 5</a></li>
			                   		</ul>
			                   		<br>
			                   		<h2><a href="#">BEST EMAIL MARKETING CAMPAIGNS</a></h2>
			                   	</div>
							</div>
							<p>Laborum voluptas nemo aperiam culpa dignissimos dolores placeat ipsam eligendi! Adipisci atque neque veniam excepturi, in ipsam ipsum similique commodi dolor dolore asperiores! Nihil pariatur quis ducimus sequi illum eum, inventore recusandae obcaecati ipsam, tempora repellendus consequuntur eius sed deserunt voluptatum omnis nulla culpa quidem magni facilis asperiores ullam! Cum dicta nulla suscipit veniam consequuntur, qui quaerat illo voluptatum ipsum eveniet in placeat possimus doloribus dolorum? Tenetur impedit repellat veritatis itaque qui ratione placeat totam quos quaerat vitae quod excepturi.</p>
							<a class="btn btn-default my-btn-black" href="#">read more</a>
						</div>

												<div class="my-blog-box">
							<iframe width="770" height="440" src="http://www.youtube.com/embed/Vqp86WWxUIo?autoplay=0" allowfullscreen=""></iframe>
							<div class="my-blog-heading-row clearfix">
								<div class="my-blog-date">
			                   		<h2>03<br><span>Dec</span></h2>
			                   	</div>
			                   	<div class="my-post clearfix">
			                   		<ul class="">
			                   			<li><i class="icon fa fa-user"></i> <a href="#"> Oceanthemes</a></li>
			                   			<li><i class="icon fa fa-tags"></i> <a href="#"> Business, Coorporate,Tips</a></li>
			                   			<li><i class="icon fa fa-comment"></i><a href="#"> Comments: 5</a></li>
			                   		</ul>
			                   		<br>
			                   		<h2><a href="#">BEST EMAIL MARKETING CAMPAIGNS</a></h2>
			                   	</div>
							</div>
							<p>Laborum voluptas nemo aperiam culpa dignissimos dolores placeat ipsam eligendi! Adipisci atque neque veniam excepturi, in ipsam ipsum similique commodi dolor dolore asperiores! Nihil pariatur quis ducimus sequi illum eum, inventore recusandae obcaecati ipsam, tempora repellendus consequuntur eius sed deserunt voluptatum omnis nulla culpa quidem magni facilis asperiores ullam! Cum dicta nulla suscipit veniam consequuntur, qui quaerat illo voluptatum ipsum eveniet in placeat possimus doloribus dolorum? Tenetur impedit repellat veritatis itaque qui ratione placeat totam quos quaerat vitae quod excepturi.</p>
							<a class="btn btn-default my-btn-black" href="#">read more</a>
						</div>
						<div class="my-pagination">
							<nav>
			                    <ul class="pagination efinance-color">
				                    <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">« Previous</span></a> </li>
				                    <li><a href="#">1</a></li>
				                    <li><a href="#">2</a></li>
				                    <li class="active"><a href="#">3</a></li>
				                    <li><a href="#">4</a></li>
				                    <li><a href="#">5</a></li>
				                    <li><a href="#">6</a></li>
				                    <li><a href="#">7</a></li>
				                    <li><a href="#">8</a></li>
				                    <li><a href="#">9</a></li>
				                    <li><a href="#">10</a></li>
				                    <li><a aria-label="Next" href="#"> <span aria-hidden="true">Next »</span> </a> </li>
			                    </ul>
			                </nav>
						</div>-->
					</div> 
			</div>
		</div>

	</div>
</section>