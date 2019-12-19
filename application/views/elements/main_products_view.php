<!-- Products start-->
    <section class="my-choose-field parallax my-layer-black" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="my-sector-topp-two my-title-white clearfix">
						<h3><?=__('OUR <span>PRODUCTS</span>',$this)?></h3>
						
						<div class="my-title-line"> </div><br style='clear:left;'/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<?php
						foreach($categories as $k => $cat):
						
					?>
					<div class="my-choose-box">
						<span class="icon-gears"></span>
						<h4><a href="<?=base_url()?>products/category/<?=$cat->slug?>"><?=$cat->translations[0]->name?></a></h4>
						<!--<p>laudantium magni atque animi, mollitia esse. Est fugit quaerat, harum, possimus facere alias architecto iste fugiat rerum</p>-->
						<ul>
							<?php
								foreach($cat->Products as $key => $pd):
							?>
							<!--<li><a href="<?=base_url()?>products/category/<?=$cat->slug?>"><p><?=$pd->translations[0]->name?></p></a></li>-->
							<?php
								endforeach;
								?>
						</ul>
						
					</div>
					<?php
						endforeach;
					?>
					<!--<div class="my-choose-box">
						<span class="icon-tools"></span>
						<h4><a href="">MACHANING PART </a></h4>
						<p>laudantium magni atque animi, mollitia esse. Est fugit quaerat, harum, possimus facere alias architecto iste fugiat rerum</p>
						<ul>
							<li><a href=""><p>Insert & spare parts for mold</p></a></li>
							<li><a href=""><p>Mechanical spare parts</p></a></li>
						</ul>
					</div>
					<div class="my-choose-box">
						<span class="icon-layers"></span>
						<h4><a href="">PLASTIC INJECTION</a></h4>
						<ul>
							<li><a href=""><p>Automotive Industry</p></a></li>
							<li><a href=""><p>Office Automation</p></a></li>
							<li><a href=""><p>House-hold Appliances</p></a></li>
							<li><a href=""><p>Other fields</p></a></li>
						</ul>
						
					</div>
					-->
				</div>
				<div class="col-sm-6">
					<div class="my-choose-col">
						<img class="img-responsive my-mobile-img" src="<?=base_url()?>assets/upload/product/<?=$categories[0]->Products[0]->image?>" alt="<?=$categories[0]->Products[0]->translations[0]->name?>">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Products end-->