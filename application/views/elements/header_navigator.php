<?php
	$controller = $this->uri->segment(1);
	$action = $this->uri->segment(2);
	
	foreach($main_menu['main_menu'] as $k => $v){
		if($k == 'Products'){
			unset($main_menu['main_menu'][$k]['link']);
			foreach($categories as $key => $cat){
				$main_menu['main_menu'][$k][$cat->translations[0]->name] = array(
					'link'=>'products/category/'.$cat->slug,
					'image' => $cat->image);
			}
		}
	}
	
?>
<div class="my-header-nav">
			<div class="my-main-nav scrollingto-fixed">
				<div class="container">
					<nav id="menuzord" class="menuzord blue">
						<a href="<?=base_url()?>" class="menuzord-brand"><img src="<?=site_url('/assets/upload/img/'.$Settings['company_logo'])?>" alt=""></a>
						<ul class="menuzord-menu">
							<?php
								foreach($main_menu['main_menu'] as $k => $v):
									
									if(isset($v['link'])):
							?>
								<li class=""> <a href="<?=base_url().$v['link']?>"><?=__(ucwords($k),$this)?></a></li>
							<?php
									else:
										
							?>
								<li><a href="" onclick='return false'><?=__($k,$this)?></a>
									<?php 
										// Check to make Mega menu
										if($k == 'Products'):
									?>
										<ul class="megamenu clearfix">
											<?php
												foreach($v as $subk=>$subv):
												?>
												<li class='col-md-4'>
													<h4><a class='brand_color' href="<?=base_url().$subv['link']?>#category"><?=__($subk,$this)?></a></h4>
													<a href="<?=base_url().$subv['link']?>">
													<img style='border:1px solid #ddd' class='crop' src="<?=base_url()?>assets/upload/img/<?=$subv['image']?>" height="300" /></a>
												</li>
											<?php
												endforeach;
												?>
												<br style='clear:left' />
										</ul>
									<?php
										else:
									?>
										<ul class="dropdown">
											<?php
												foreach($v as $subk=>$subv):
												?>
												<li><a href="<?=base_url().$subv['link']?>"><?=__($subk,$this)?></a></li>
											<?php
												endforeach;
												?>
										</ul>
									<?php
										endif;
										// End check megamenu
										?>
								</li>
								
							<?php
									endif;
								endforeach;
							?>
							<!--
							<li><a href="#">About Us</a>
								<ul class="dropdown">
									<li><a href="page-about.html">About one</a></li>
									<li><a href="page-about2.html">About Two</a></li>
								</ul>
							</li>
							<li><a href="#">Capability</a>
								<ul class="dropdown">
									<li><a href="page-services.html">Capbility 1</a></li>
									<li><a href="page-services2.html">Capbility 2</a></li>
								</ul>
							</li>
							<li><a href="#">Products</a>
								<ul class="dropdown">
									<li style=''><img src="images/resource/mega_menu.jpg" /></li>
								</ul>
							</li>
							<li><a href="#">Services</a>
								<ul class="dropdown">
									<li><a href="page-portfolio-4col.html">Service One</a></li>
									<li><a href="page-portfolio-3col.html">Projects Two</a></li>
									<li><a href="page-portfolio-dynamic.html">Projects Three</a></li>
								</ul>
							</li>
							<li><a href="#">Recruitment</a>
								<ul class="dropdown">
									<li><a href="#">Blog Classic</a>
										<ul class="dropdown">
											<li><a href="blog-classic-left-sidebar.html">Blog Left Sidebar</a></li>
											<li><a href="blog-classic-right-sidebar.html">Blog Right Sidebar</a></li>
										</ul>
									</li>
									<li><a href="#">Blog Single</a>
										<ul class="dropdown">
											<li><a href="blog-single-left-sidebar.html">Blog Left Sidebar</a></li>
											<li><a href="blog-single-right-sidebar.html">Blog Right Sidebar</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="page-contact.html">Contact Us</a></li>
							-->
						</ul>
<?php
	if(!empty($brochuce)):
	?>
						<ul class="quote-btn pull-right hidden-xs hidden-sm">
			                <li>
			                  	<a class="btn btn-lg my-get-btn" target="blank" href="<?=base_url()?>assets/upload/file/<?=$brochuce->file?>"><i class="fa fa-book"></i><?=__('Brochuce',$this)?></a>
			                </li>
			            </ul>
<?php
	endif;
?>
					</nav>
				</div>
			</div>
		</div>