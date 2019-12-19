<!--Start of Blog Area-->
                <div class="blog-area pt-50 pb-100 bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-40 mt-31 text-center">
                                    <span class="opacity-text text-uppercase center">Tin tức</span>
                                    <h2 class="uppercase mb-25">TIN TỨC BẤT ĐỘNG SẢN</h2>
                                    <p class="pb-15">Dự án <span class='high-light'>2.800 ha</span> lấn biển Cần Giờ của Vingroup vốn dự kiến đầu tư khoảng <span class='high-light'>10 tỷ USD</span> siêu dự án lớn nhất Việt Nam! 
<br />Và sẽ biến Cần Giờ thành siêu đô thị giải trí du lịch đẳng cấp nhất Việt Nam!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="blog-carousel carousel-none">
	                            <?php
		                            if(isset($articles)):
		                            	foreach($articles as $k => $v):
		                            ?>
		                            <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="<?=base_url()?>assets/upload/img/<?=$v->image?>" alt="">
                                                <!--<span class="blog-text block bg-lemon pt-4">10 <span class="block pt-2 ">OCT</span></span>-->
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Admin</span>
                                                <!--<span class="pl-35"><i class="fa fa-heart mr-12"></i>15</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>10</span>-->
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href=""><?=substr($v->title,0,50)?></a></h5>
                                            <p class="mb-20"><?=substr($v->description,0,150)?></p>
                                            <a href="#" class="button"><?=__("Read more",$this)?></a>
                                        </div>
                                    </div>
                                </div>
		                        <?php	
			                        	endforeach;
			                        endif; 
			                        ?>
                                <!--<div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="assets/images/blog/1.jpg" alt="">
                                                <span class="blog-text block bg-lemon pt-4">10 <span class="block pt-2 ">OCT</span></span>
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Smith</span>
                                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>15</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>10</span>
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href="blog-details.html">Latest Architectural Design</a></h5>
                                            <p class="mb-20">Lorem must explain to you how all this mistaolt dete    denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                            <a href="blog-details.html" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="assets/images/blog/2.jpg" alt="">
                                                <span class="blog-text block bg-lemon pt-4">05 <span class="block pt-2 ">OCT</span></span>
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Alfred</span>
                                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>18</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>15</span>
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href="blog-details.html">Real Estate Festival - 2016</a></h5>
                                            <p class="mb-20">Lorem must explain to you how all this mistaolt dete    denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                            <a href="blog-details.html" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="assets/images/blog/3.jpg" alt="">
                                                <span class="blog-text block bg-lemon pt-4">01 <span class="block pt-2 ">OCT</span></span>
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Zenefer</span>
                                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>10</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>08</span>
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href="blog-details.html">Visual Design Concept of Real Estate</a></h5>
                                            <p class="mb-20">Lorem must explain to you how all this mistaolt dete    denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                            <a href="blog-details.html" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="assets/images/blog/3.jpg" alt="">
                                                <span class="blog-text block bg-lemon pt-4">01 <span class="block pt-2 ">OCT</span></span>
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Zenefer</span>
                                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>10</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>08</span>
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href="blog-details.html">Visual Design Concept of Real Estate</a></h5>
                                            <p class="mb-20">Lorem must explain to you how all this mistaolt dete    denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                            <a href="blog-details.html" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="assets/images/blog/3.jpg" alt="">
                                                <span class="blog-text block bg-lemon pt-4">01 <span class="block pt-2 ">OCT</span></span>
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Zenefer</span>
                                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>10</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>08</span>
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href="blog-details.html">Visual Design Concept of Real Estate</a></h5>
                                            <p class="mb-20">Lorem must explain to you how all this mistaolt dete    denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                            <a href="blog-details.html" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="single-blog hover-effect-one fix">
                                        <div class="blog-image box-hover block">
                                            <a href="blog-details.html" class="block white-hover">
                                                <img src="assets/images/blog/3.jpg" alt="">
                                                <span class="blog-text block bg-lemon pt-4">01 <span class="block pt-2 ">OCT</span></span>
                                            </a>
                                        </div>
                                        <div class="single-blog-text">
                                            <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                                                <span><i class="fa fa-user mr-12"></i>Zenefer</span>
                                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>10</span>
                                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>08</span>
                                            </div>
                                            <h5 class="pt-22 mb-17"><a href="blog-details.html">Visual Design Concept of Real Estate</a></h5>
                                            <p class="mb-20">Lorem must explain to you how all this mistaolt dete    denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                            <a href="blog-details.html" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Blog Area-->