<?php
	?>
<!--Start of Price Drop Property Area-->
                <div class="property-area pt-55 bg-light pb-75">
                	<div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-38 mt-31 text-center">
                                    <span class="opacity-text text-uppercase center">BẤT ĐỘNG SẢN CẦN GIỜ</span>
                                    <h2 class="uppercase mb-25">BẤT ĐỘNG SẢN CẦN GIỜ</h2>
																		<p class="pb-15">Theo dự kiến, đầu năm 2019 cầu dây văng một trụ tháp với ý tưởng phác họa hình tượng cây đước đặc trưng của huyện Cần Giờ trị giá khoảng <span class='high-light'>5.300 tỷ đồng</span> sẽ được bắt ngang sông, kết nối huyện <span class='high-light'>Cần Giờ</span> với trung tâm của thành phố.<br />
																		Đặc biệt, dự án 2.800 ha lấn biển của <span class='high-light'>Vingroup</span> cùng vốn đầu tư dự kiến lên đến <span class='high-light'>10 tỷ USD</span> hứa hẹn sẽ biến nơi đây thành siêu đô thị biển số 1 Việt Nam.</p>                                </div>
                            </div>
                        </div>
                		<div class="row">
                			<div class="property-carousel">
	                			<?php
		                			if(isset($products)):
		                				foreach($products as $k=>$v):
		                			?>
		                			<div class="col-sm-6 col-md-4">

									<div class="single-property hover-effect-two">
										<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
											<div class="title-left pull_left">
												<h4 class="text-white mb-12"><a href="<?=base_url()?>product/detail/<?=$v->slug?>"><?=getSnippet($v->name,5)?></a></h4>
												<span><span class="mr-10"><i class="fas fa-map-marker-alt"></i></span><?=$v->ward->_name.', '.$v->district->_name?></span>
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
												<img src="<?=base_url()?>assets/upload/product/medium/<?=$v->image?>" alt="<?=$v->name?>" ></div>
												<!--<span class="img-button text-uppercase">More Details</span>-->
											</a>
											<div class="hover-container pl-15 pr-15 pt-16 pb-15">
												<!--<div class="hover-item">
													<img class="mr-10" src="<?=base_url()?>asset/upload/product/medium/<?=$v->image?>" alt="">
													<span>450 sqft</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/bed.png" alt="">
													<span>5</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/shower.png" alt="">
													<span>3</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/garage.png" alt="">
													<span>2</span>
												</div>-->
											</div>
										</div>
										<div class="mb-20 mt-20" style="min-height:72px;"><?=getSnippet(strip_tags($v->description),20)?></div>
									<!--	<div class="hidden-md hidden-lg mb-20 mt-20"><?=$v->description?></div>-->
									</div>
								</div>
		                			<?php
			                			endforeach;
			                		endif;
			                			?>
								<!--<div class="col-sm-6 col-md-4">

									<div class="single-property hover-effect-two">
										<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
											<div class="title-left pull_left">
												<h4 class="text-white mb-12"><a href="properties-details.html">Friuli-Venezia Giulia</a></h4>
												<span><span class="mr-10"><img src="assets/images/icons/map.png" alt=""></span>568 E 1st Ave, Miami</span>
											</div>
											<div class="fix pull_right">
												<h3>$52,354</h3>
											</div>
										</div>
										<div class="property-image">
											<a href="properties-details.html" class="block dark-hover"><img src="assets/images/properties/1.jpg" alt="">
												<span class="img-button text-uppercase">More Details</span>
											</a>
											<div class="hover-container pl-15 pr-15 pt-16 pb-15">
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/floor.png" alt="">
													<span>450 sqft</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/bed.png" alt="">
													<span>5</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/shower.png" alt="">
													<span>3</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/garage.png" alt="">
													<span>2</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="single-property hover-effect-two">
										<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
											<div class="title-left pull_left">
												<h4 class="text-white mb-12"><a href="properties-details.html">Masons de Villa</a></h4>
												<span><span class="mr-10"><img src="assets/images/icons/map.png" alt=""></span>354 D 1st Ave, New Yourk</span>
											</div>
											<div class="fix pull_right">
												<h3>$62,354</h3>
											</div>
										</div>
										<div class="property-image">
											<a href="properties-details.html" class="block dark-hover"><img src="assets/images/properties/2.jpg" alt="">
												<span class="img-button text-uppercase">More Details</span>
											</a>
											<div class="hover-container pl-15 pr-15 pt-16 pb-15">
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/floor.png" alt="">
													<span>550 sqft</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/bed.png" alt="">
													<span>6</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/shower.png" alt="">
													<span>4</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/garage.png" alt="">
													<span>3</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="single-property hover-effect-two">
										<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
											<div class="title-left pull_left">
												<h4 class="text-white mb-12"><a href="properties-details.html">Seraton de Villa</a></h4>
												<span><span class="mr-10"><img src="assets/images/icons/map.png" alt=""></span>568 E 1st Ave, Miami</span>
											</div>
											<div class="fix pull_right">
												<h3>$45,354</h3>
											</div>
										</div>
										<div class="property-image">
											<a href="properties-details.html" class="block dark-hover"><img src="assets/images/properties/3.jpg" alt="">
												<span class="img-button text-uppercase">More Details</span>
											</a>
											<div class="hover-container pl-15 pr-15 pt-16 pb-15">
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/floor.png" alt="">
													<span>350 sqft</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/bed.png" alt="">
													<span>4</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/shower.png" alt="">
													<span>3</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/garage.png" alt="">
													<span>1</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="single-property hover-effect-two">
										<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
											<div class="title-left pull_left">
												<h4 class="text-white mb-12"><a href="properties-details.html">Friuli-Venezia Giulia</a></h4>
												<span><span class="mr-10"><img src="assets/images/icons/map.png" alt=""></span>568 E 1st Ave, Miami</span>
											</div>
											<div class="fix pull_right">
												<h3>$52,354</h3>
											</div>
										</div>
										<div class="property-image">
											<a href="properties-details.html" class="block dark-hover"><img src="assets/images/properties/1.jpg" alt="">
												<span class="img-button text-uppercase">More Details</span>
											</a>
											<div class="hover-container pl-15 pr-15 pt-16 pb-15">
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/floor.png" alt="">
													<span>450 sqft</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/bed.png" alt="">
													<span>5</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/shower.png" alt="">
													<span>3</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/garage.png" alt="">
													<span>2</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-6 col-md-4">
									<div class="single-property hover-effect-two">
										<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
											<div class="title-left pull_left">
												<h4 class="text-white mb-12"><a href="properties-details.html">Friuli-Venezia Giulia</a></h4>
												<span><span class="mr-10"><img src="assets/images/icons/map.png" alt=""></span>568 E 1st Ave, Miami</span>
											</div>
											<div class="fix pull_right">
												<h3>$52,354</h3>
											</div>
										</div>
										<div class="property-image">
											<a href="properties-details.html" class="block dark-hover"><img src="assets/images/properties/1.jpg" alt="">
												<span class="img-button text-uppercase">More Details</span>
											</a>
											<div class="hover-container pl-15 pr-15 pt-16 pb-15">
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/floor.png" alt="">
													<span>450 sqft</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/bed.png" alt="">
													<span>5</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/shower.png" alt="">
													<span>3</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/garage.png" alt="">
													<span>2</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-6 col-md-4">

									<div class="single-property hover-effect-two">
										<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
											<div class="title-left pull_left">
												<h4 class="text-white mb-12"><a href="properties-details.html">Friuli-Venezia Giulia</a></h4>
												<span><span class="mr-10"><img src="assets/images/icons/map.png" alt=""></span>568 E 1st Ave, Miami</span>
											</div>
											<div class="fix pull_right">
												<h3>$52,354</h3>
											</div>
										</div>
										<div class="property-image">
											<a href="properties-details.html" class="block dark-hover"><img src="assets/images/properties/1.jpg" alt="">
												<span class="img-button text-uppercase">More Details</span>
											</a>
											<div class="hover-container pl-15 pr-15 pt-16 pb-15">
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/floor.png" alt="">
													<span>450 sqft</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/bed.png" alt="">
													<span>5</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/shower.png" alt="">
													<span>3</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="assets/images/icons/garage.png" alt="">
													<span>2</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								-->
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Price Drop Property Area-->
