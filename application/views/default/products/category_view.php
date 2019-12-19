<?php 
	$current_slug = $this->uri->segment(3);
	$this->load->view('elements/page_header_view',$item);
?>
<a name="category"></a>
<section class="my-recent-project-two my-inner-project">
	<div class="container-fluid">
		<div class='row'>
			<div class="col-sm-8 col-sm-offset-2">
				<div class="my-sector-topp">
					
					<span class="icon-tools"></span>
	                <h2><span><?=$item->translations[0]->teaser?></span></h2>
	                <p><?=$item->translations[0]->content?></p>
				</div>
			</div>
		</div>
			<div class="container">
				<div class='row'>
					<div class="col-md-12 my-coll-pad0">
			                <!-- Masonry Filter -->
			                <ul class="list-inline masonry-filter text-center">
				                <?php
					                foreach($items as $k => $v):
					                	$active_class = "";
					                	if($v->slug == $current_slug){
						                	$active_class="class='active'";
					                	}
					            ?>
			                    <li><a href="<?=base_url()?>products/category/<?=$v->slug?>#category" <?=$active_class?>><span><?=$v->translations[0]->name?></span></a></li>
			                    <?php
				                	endforeach;
				                ?>
			                </ul>
			                <!-- End Masonry Filter -->
			        <div class="row">
				        <?php
					        $i = 1;
					        if(isset($products)):
					        	foreach($products as $k => $v):
					        ?>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style='margin-bottom:2%;'>
			                <div class="my-team-col">
				                <div class="thumb">
					                 <a href='<?=base_url()?>assets/upload/product/<?=$v->image?>' ref="prettyPhoto['<?=$v->slug?>']">
				                    <img class="img-responsive my-img-fluided" ref="prettyPhoto['<?=$v->slug?>']" src="<?=base_url()?>assets/upload/product/<?=$v->image?>" alt="<?=$v->translations[0]->name?>">
					                 </a>
				                    <?php
					                    foreach($v->images as $key => $img):
					                    ?>
					                   
					                    <img class="img-responsive my-img-fluided" ref="prettyPhoto['<?=$v->slug?>']" style='display:none;' src="<?=base_url()?>assets/upload/product/<?=$img->image?>" alt="<?=$img->image?>">
					                    
					                    <?php
						                    endforeach;
						                    ?>
				                    <!--<div class="layer"></div>
				                    <div class="thumb-content">
					                    <h4 class="title text-uppercase"><?=$v->translations[0]->name?></h4>
					                    <h5 class="sub-title efinance-color"><?=$v->translations[0]->short_description?></h5>
				                    </div>-->
				                   <!-- <div class="icon">
					                    <i class="icon-plus fa fa-plus"></i>
					                    <ul class="team-icons">
					                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					                        <!--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
					                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
					                    </ul>
				                    </div> -->
				                </div>
				                <div class="content">
				                 <?=$v->translations[0]->description?>
				                 </div>
			                </div>
			            </div>
			            <?php
				            	/*$i++;
				            	if($i > 3){
					            	
					            	echo "<div class='clearfix'></div>";
					            	$i = 1;
					            	
				            	}*/
				            	
				            
				            	endforeach;
				            endif;
				            ?>
			            <!--<div class="col-xs-12 col-sm-6 col-md-4">
			                <div class="my-team-col">
				                <div class="thumb">
				                    <img class="img-responsive my-img-fluided" src="images/resource/mold2.jpg" alt="">
				                    <div class="layer"></div>
				                    <div class="thumb-content">
					                    <h4 class="title text-uppercase">RUBBER MOLD</h4>
					                    <h5 class="sub-title efinance-color">Product short description</h5>
				                    </div>
				                    <div class="icon">
					                    <i class="icon-plus fa fa-plus"></i>
					                    <ul class="team-icons">
					                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
					                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
					                    </ul>
				                    </div>
				                </div>
				                <div class="content">
				                  <p>Commodi dolor dolore asperiores! Nihil pariatur quis ducimus sequi illum eum, inventore recusandae that obcaecati ipsam, tempora repellendus consequuntur eius sed deserunt voluptatum omnis nulla culpa that quidem magni facilis asperiores ullam.</p>
				                </div>
			                </div>
			            </div>
			            <div class="col-xs-12 col-sm-6 col-md-4">
			                <div class="my-team-col">
				                <div class="thumb">
				                    <img class="img-responsive my-img-fluided" src="images/resource/mold3.jpg" alt="">
				                    <div class="layer"></div>
				                    <div class="thumb-content">
					                    <h4 class="title text-uppercase">ALUMINUM DIE CASTING</h4>
					                    <h5 class="sub-title efinance-color">Product short description</h5>
				                    </div>
				                    <div class="icon">
					                    <i class="icon-plus fa fa-plus"></i>
					                    <ul class="team-icons">
					                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
					                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
					                    </ul>
				                    </div>
				                </div>
				                <div class="content">
				                  <p>Commodi dolor dolore asperiores! Nihil pariatur quis ducimus sequi illum eum, inventore recusandae that obcaecati ipsam, tempora repellendus consequuntur eius sed deserunt voluptatum omnis nulla culpa that quidem magni facilis asperiores ullam.</p>
				                </div>
			                </div>
			            </div>-->

					</div>
				</div>      
			</div>
	</div>
</section>

	