<div class="col-xs-12 col-sm-6 col-md-3">
	<div class="my-footer-col">
			<div class='my-footer-link clearfix'>
			<h3 class='widget-title'><?=__('Useful Links',$this)?></h3>
			<ul class='list-icon square list-border foter-usful-link'>
				<?php
					foreach($useful_links as $k=>$v):
				?>
                <li><a href="<?=$v->link?>"><?=$v->name?></a></li>
                <?php
	                endforeach;
	                ?>           
            </ul>
			</div>
	</div>
</div>