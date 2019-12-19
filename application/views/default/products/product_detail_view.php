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
                <!--Start of Featured Property Area-->
                <div class="property-area ptb-120">
                	<div class="container">
                		<div class="row">
                			<div class="col-md-8">
								<div class="property-image mb-57">
									<!--<img src="<?=base_url()?>assets/upload/product/<?=$item->image?>" alt="">-->
								<img src="<?=$item->image?>" alt="">
								</div>
                				<div class="property-desc mb-56">
                					<h4 class="details-title mb-22"><?=$item->name?></h4>
                					<p class="mb-24"><?=$item->description?></p>
                				</div>
                				<!-- -->
<?php
	$this->load->view('elements/modules/video_module_view');
	?>
<!-- -->
                				<!--
                				<div class="property-details">
                					<div class="row">
                						<div class="col-md-6">
                							<h4 class="details-title mb-38">Condition</h4>
                							<div class="bg-gray fix pl-35 pt-42 pr-35 pb-39 left-column mb-56">
                								<div class="desc-info mb-37">
                									<img src="images/icons/g-floor.png" alt="" class="pr-8">
                									<span>Area 450 sqft</span>
                								</div>
                								<div class="desc-info mb-37">
                									<img src="images/icons/g-bed.png" alt="" class="pr-8">
                									<span>Bedroom 5</span>
                								</div>
                								<div class="desc-info mb-37">
                									<img src="images/icons/g-shower.png" alt="" class="pr-8">
                									<span>Bathroom 3</span>
                								</div>
                								<div class="desc-info mb-37">
                									<img src="images/icons/g-garage.png" alt="" class="pr-8">
                									<span>Garage 2</span>
                								</div>
                								<div class="desc-info mb-35">
                									<img src="images/icons/kitchen.png" alt="" class="pr-8">
                									<span>Kitchen 2</span>
                								</div>
                								<div class="desc-info mb-35">
                									<span class="price">$52,350</span>
                								</div>
                								<div class="desc-info">
                									<img src="images/icons/g-map.png" alt="" class="pr-8">
                									<span class="location">568 E 1st Ave, Ney Jersey, USA</span>
                								</div>
                							</div>
                						</div>
                						<div class="col-md-6">
                							<h4 class="details-title mb-38">Amenities</h4>
                							<div class="bg-gray fix pl-50 pr-50 pt-44 pb-38 right-column mb-56">
                								<div class="desc-info mb-26">
                									<i class="fa fa-check-square-o mr-9"></i>
                									<span>Air Conditioning</span>
                								</div>
                								<div class="desc-info mb-26">
                									<i class="fa fa-check-square-o mr-9"></i>
                									<span>Bedding</span>
                								</div>
                								<div class="desc-info mb-26">
                									<i class="fa fa-check-square-o mr-9"></i>
                									<span>Balcony</span>
                								</div>
                								<div class="desc-info mb-26">
                									<i class="fa fa-check-square-o mr-9"></i>
                									<span>Cable TV</span>
                								</div>
                								<div class="desc-info mb-26">
                									<i class="fa fa-check-square-o mr-9"></i>
                									<span>Internet</span>
                								</div>
                								<div class="desc-info mb-26">
                									<i class="fa fa-check-square-o mr-9"></i>
                									<span>Parking</span>
                								</div>
                								<div class="desc-info mb-26">
                									<i class="fa fa-check-square-o mr-9"></i>
                									<span>Lift</span>
                								</div>
                								<div class="desc-info mb-26">
                									<i class="fa fa-check-square-o mr-9"></i>
                									<span>Pool</span>
                								</div>
                								<div class="desc-info">
                									<i class="fa fa-check-square-o mr-9"></i>
                									<span>Dishwasher</span>
                								</div>
                								<div class="desc-info">
                									<i class="fa fa-check-square-o mr-9"></i>
                									<span>Toaster</span>
                								</div>
                							</div>
                						</div>
                					</div>
                					
                					<div class="row">
                						<div class="col-4 pl-15">
                							<h4 class="details-title mb-37">Floor Plan</h4>
                							<div class="desc-images">
                								<img src="images/banner/plan.jpg" alt="">
                							</div>
                						</div>
                						<div class="col-6 pr-15">
                							<h4 class="details-title mb-37">Video Presentation</h4>
                							<div class="desc-video">
                                    			<iframe src="https://player.vimeo.com/video/63953556?title=0&byline=0&portrait=0" width="475" height="267"></iframe>
                							</div>
                						</div>
                					</div>
									<div class="comments fix pt-50">
										<h4 class="details-title pb-8 mb-27">3 Feedback</h4>
										<div class="single-comment fix mb-18">
											<div class="author-image pull_left mr-23">
												<img alt="" src="images/comment/1.jpg">
											</div>
											<div class="comment-text fix">
												<div class="author-info">
													<h5 class="mb-8"><a href="#">David Backhum</a></h5>
													<span class="block mb-11">6 hour ago</span>
												</div>
												<p class="mb-18">There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
											</div>
										</div>
										<div class="single-comment fix mb-18">
											<div class="author-image pull_left mr-23">
												<img alt="" src="images/comment/2.jpg">
											</div>
											<div class="comment-text fix">
												<div class="author-info">
													<h5 class="mb-8"><a href="#">Saniya Mirza</a></h5>
													<span class="block mb-11">8 hour ago</span>
												</div>
												<p class="mb-18">There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
											</div>
										</div>
										<div class="single-comment fix">
											<div class="author-image pull_left mr-23">
												<img alt="" src="images/comment/3.jpg">
											</div>
											<div class="comment-text fix">
												<div class="author-info">
													<h5 class="mb-8"><a href="#">Lionel Messi</a></h5>
													<span class="block mb-11">10 hour ago</span>
												</div>
												<p class="mb-18">There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
											</div>
										</div>
									</div>
                					<div class="new-comment-post mt-35">
										<h4 class="details-title pb-8 mb-27">Leave a Review</h4>
                						<form action="#" method="post">
                							<div class="comment-form">
                								<div class="col-5 pr-8">
                									<input type="text" name="name" placeholder="Your name" class="mb-28 bg-light">
                								</div>
                								<div class="col-5 pl-8">
                									<input type="email" name="email" placeholder="Your email" class="mb-28 bg-light">
                								</div>
                								<input type="email" name="subject" placeholder="Subject" class="mb-28 bg-light">
                								<textarea name="post-comment"  cols="30" rows="10" placeholder="Write here" class="mb-34 bg-light"></textarea>
                								<button class="button text-uppercase lemon pl-30 pr-30" type="submit" value="">Submit review</button>
                							</div>
                						</form>
                					</div>
                				</div>
                				-->
                					
                			</div>
                			
                			<div class="col-md-4 pl-35">
	                			<?php $this->load->view('elements/modules/contact_me_view')?>
                				<?php //$this->load->view('elements/modules/search_property_view')?>
                				<?php //$this->load->view('elements/modules/popular_property_view')?>
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Featured Property Area-->
               
            </div>   
            <!--End of Bg White--> 
            
		