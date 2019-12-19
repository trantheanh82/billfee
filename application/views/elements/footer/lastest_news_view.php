
<div class="col-xs-12 col-sm-6 col-md-3">
	<div class="my-footer-col">
		<h3><?=__('Latest News',$this)?></h3>
		<?php
			if(!empty($latest_news)):
			?>
		<ul class="my-news">
			
			<li>
				<img class="img-responsive" src="<?=base_url()?>assets/upload/img/thumbnail/<?=$latest_news->thumbnail?>" alt="">
				<h4><a href="<?=base_url()?>news/<?=$latest_news->slug?>"><?=$latest_news->translations[0]->title?></a></h4>
				<p><?php //$latest_news->translations[0]->teaser?>
				<?=substr($latest_news->translations[0]->teaser,0,strpos($latest_news->translations[0]->teaser,' ',70))?>
				<!--Phasellus ut condimentum diam, eget tempus lorem. Morbi bibendum est quis arcu...--></p>
				<a href="<?=base_url()?>news/<?=$latest_news->slug?>"" ><?=date('d M Y',strtotime($latest_news->created_at))?></a>
			</li>
		</ul>
		<?php
			endif;
			?>
	</div>
</div>