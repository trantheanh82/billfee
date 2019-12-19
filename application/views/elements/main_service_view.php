<!-- Our Services -->
	<section class="my-project-field">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="my-sector-topp">
						<span class='icon-genius'></span>
		                <h2><?=__("OUR <span>SERVICES</span>",$this)?></h2>
		                <p><?=$service->translations[0]->teaser?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
						$length = count($departments);
		            
			            $col = 'col-md-4 col-lg-4';
			            
			            if($length < 3){
				            $col= 'col-md-6 col-lg-6';
			            }

						foreach($services as $k => $v):
					?>
	            <div class="col-xs-12 col-sm-6 <?=$col?>">
	                <div class="my-about-col">
	                    <div class="my-about-col-content">
	                    	<div class="my-about-col-title">
		                  		<h4><?=$v->translations[0]->name?></h4>
	                    	</div>
		                  	<p><?=$v->translations[0]->content?></p>
	                    </div>
	                    <div class="about-img-column">
                        	<img class="img-responsive my-img-fluided" src="<?=base_url()?>assets/upload/img/<?=$v->image?>" alt="">
                    	</div>
	                </div>
	            </div>
	            <?php
		            endforeach;
		        ?>
	            
            </div>
			<!-- <div class="row">
				 <?php
						foreach($services as $k => $v):
					?>
                <div class="col-xs-12 col-sm-6 <?=$col?>">
                    <div class="about-img-column">
                        <img class="img-responsive my-img-fluided" src="<?=base_url()?>assets/upload/img/<?=$v->image?>" alt="">
                    </div>
                </div>
                <?php
	                	endforeach;
	                ?>
            </div>-->
		</div>
	</section>
	<!-- Our Services End -->