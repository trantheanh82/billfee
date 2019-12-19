<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!--Start of Banner Area-->
<div class="banner-area bg-2 bg-overlay-2 ptb-165">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-title text-center">
					<h1 class="text-uppercase text-white">Bất động sản cần giờ</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End of Banner Area-->
<div class="property-area ptb-120 property-page">
	<div class="container">
		<div class="row">
			<?php
				if(!empty($items)):
					foreach($items as $k => $v):
				?>
			<div class="col-lg-4 col-md-6 mb-40 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="<?=base_url()?>product/detail/<?=$v->slug?>"><?=getSnippet($v->name,5)?></a></h4>
							<span><span class="mr-5"><!--<img src="images/icons/map.png" alt="">--><i class="fas fa-map-marker-alt"></i></span>						<span><?=$v->ward->_name.', '.$v->district->_name?></span>

						</div>
						<div class='row'>
							<div class="fix pull_right">
								<h3><?=$v->price?></h3>
							</div>
						</div>

					</div>
					<div class="property-image">
						<a href="<?=base_url()?>product/detail/<?=$v->slug?>" class="block dark-hover">
							<div class='product-img-overlay'>
								<img src="<?=base_url()?>assets/upload/product/<?=$v->image?>" alt="<?=$v->name?>">
							</div>
						<span class="img-button text-uppercase">Chi tiết</span>
							<!--<span class="p-tag bg-lemon">FOR SALE</span>-->
						</a>
						<!--<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>450 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>5</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>3</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>2</span>
							</div>
						</div>-->
					</div>
					<div class="mb-20 mt-20" style="min-height:72px;"><?=getSnippet(strip_tags($v->description),20)?></div>
				<!--	<div class="hidden-md hidden-lg mb-20 mt-20"><?=$v->description?></div>-->

				</div>
			</div>
			<?php
					endforeach;
				endif;
				?>
			<!--<div class="col-lg-4 col-md-6 mb-40 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">Masons de Villa</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>354 D 1st Ave, New Yourk</span>
						</div>
						<div class="fix pull_right">
							<h3>$62,354</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/5.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>550 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>6</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>4</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>3</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-40 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">Seraton de Villa</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E 1st Ave, Miami</span>
						</div>
						<div class="fix pull_right">
							<h3>$45,354</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/6.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
							<span class="p-tag bg-light-violet">FOR RENT</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>350 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>4</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>3</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>1</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-40 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">Hastech de House</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>457 E New Town, Colorado</span>
						</div>
						<div class="fix pull_right">
							<h3>$78,322</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/7.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>450 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>5</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>3</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>2</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-40 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">Zacsion De Villa</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>23 A 3rd Bra, Dence</span>
						</div>
						<div class="fix pull_right">
							<h3>$22,876</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/8.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
							<span class="p-tag bg-light-violet">FOR RENT</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>550 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>6</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>4</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>3</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-40 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">Radsion de Villa</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>254 1st Ave, Hawaii</span>
						</div>
						<div class="fix pull_right">
							<h3>$90,654</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/9.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
							<span class="p-tag bg-lemon">FOR SALE</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>350 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>4</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>3</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>1</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-40 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">Seraton de Villa</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>568 E 1st Ave, Miami</span>
						</div>
						<div class="fix pull_right">
							<h3>$45,354</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/10.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
							<span class="p-tag bg-light-violet">FOR RENT</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>350 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>4</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>3</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>1</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-40 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">Hastech de House</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>457 E New Town, Colorado</span>
						</div>
						<div class="fix pull_right">
							<h3>$78,322</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/11.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>450 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>5</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>3</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>2</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-40 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">Seraton de Villa</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>65 A 3rd Bra, Miami</span>
						</div>
						<div class="fix pull_right">
							<h3>$87,888</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/12.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
							<span class="p-tag bg-light-violet">FOR RENT</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>789 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>3</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>4</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>3</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">Beninja-Venezia Zanar</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>657 1st Ave, Hawaii</span>
						</div>
						<div class="fix pull_right">
							<h3>$89,980</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/13.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
							<span class="p-tag bg-violet">FOR RENT</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>900 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>3</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>2</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>1</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">Dom-Inno Plaza</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>254 1st New Work</span>
						</div>
						<div class="fix pull_right">
							<h3>$90,654</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/14.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
							<span class="p-tag bg-lemon">FOR SALE</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>850 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>6</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>2</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>3</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-property hover-effect-two">
					<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
						<div class="title-left pull_left">
							<h4 class="text-white mb-12"><a href="properties-details.html">La Casanda Plaza</a></h4>
							<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>546 6th Ave, Miami</span>
						</div>
						<div class="fix pull_right">
							<h3>$56,787</h3>
						</div>
					</div>
					<div class="property-image">
						<a href="properties-details.html" class="block dark-hover"><img src="images/properties/15.jpg" alt="">
							<span class="img-button text-uppercase">More Details</span>
						</a>
						<div class="hover-container pl-15 pr-15 pt-16 pb-15">
							<div class="hover-item">
								<img class="mr-10" src="images/icons/floor.png" alt="">
								<span>950 sqft</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/bed.png" alt="">
								<span>7</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/shower.png" alt="">
								<span>6</span>
							</div>
							<div class="hover-item">
								<img class="mr-10" src="images/icons/garage.png" alt="">
								<span>5</span>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			<!--<div class="col-md-12">
                <div class="pagination-content text-center block">
                    <ul class="pagination fix mt-40 mb-0">
                        <li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="current"><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
                    </ul>
                </div>
			</div>-->
		</div>
	</div>
</div>
