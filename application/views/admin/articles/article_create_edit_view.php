<?php defined('BASEPATH') OR exit('No direct script access allowed');

	$this->load->view('admin/elements/section_header_view');
?>
<?=content_open($page_name,$this)?>
<form class="form-horizontal" role="form" action="<?=site_url('admin/articles/submit')?>" method="post" id='main_form_submit'>
<?php
	echo form_hidden("id",value(isset($item->id)?$item->title:""));
?>
	<div class='box-body'>
		<!-- ./col left -->
		<div class='col-sm-9'>
			<div class='form-group'>
                    <!--<input type="input" name='title' class="form-control make_slug" id="title" placeholder="<?=__("Title",$this)?>">-->
                    <?=form_input('title',value(isset($item->title)?$item->title:""),array('id'=>'title','class'=>'form-control make_slug editor cke_editable cke_editable_inline cke_contents_ltr cke_show_borders','placeholder'=>__("Title",$this)))?>
			</div>
            
            <div class='form-group'>
				<label for="inputEmail3" class="control-label"><?=__("Slug",$this)?></label>
				<div class="">
	                   <!-- <input type="input" name='slug' class="form-control slug" id="slug" placeholder="<?=__("Slug",$this)?>">-->
	                    <?=form_input('slug',value(isset($item->slug)?$item->slug:""),array('class'=>'form-control slug','placeholder'=>__("Slug",$this)))?>
	            </div>
			</div>
            
            <div class='form-group'>
				<?php echo form_textarea('content',value(isset($item->content)?$item->content:""),array('class'=>'article-editor','id'=>'content','contenteditable'=>true,'style'=>'width:100%;border:1px solid #333'));?>
            </div>
            
            <div class='form-group'>
			<label for="inputEmail3" class="control-label"><?=__("Description",$this)?></label>
			<div class="">
				<?php echo form_textarea('description',value(isset($item->description)?$item->description:""),array('class'=>'form-control'));?>
            </div>
		</div>
            
            
		</div>
		<!-- ./col right -->
		<div class='col-sm-3'>
			
			<div class="form-group">
				<label for="inputEmail3" class="control-label"><?=__("Active",$this)?></label>
	          <div class="checkbox">
	            <label>
	              <input type="checkbox" checked value="Y">
	            </label>
	          </div>
	        </div>
	        
	        <?php
			if(isset($list_cats)):
			?>
				<!-- Checkbox Categories -->
				<div class='form-group'>
					<label for='' class='control-label'><?=__("Categories",$this)?></label>
					<div class=''>
						<div style="padding:5px;max-height:100px;overflow: scroll;border:1px solid #d2d6de;">
						<?php 
							foreach($list_cats as $key=>$value):
								$check = "";
								if(!empty($item->article_category)){
									foreach($item->article_category as $k => $v){
										if($v->category_id == $key){
											$check = "checked";
											unset($item->article_category[$k]);
										}
									}
								}
						?>
						<div class="checkbox">
		                    <label>
		                      <input type="checkbox" <?=$check?> name="category_ids[<?=$key?>]" value="<?=$value?>">
		                      <?=$value?>
		                    </label>
		                  </div>
						<?php
							endforeach;
						?>
						</div>
					</div>
				</div>	
				<?php
					endif;
					?>
				<div class='form-group'>
							<label for="inputEmail3" class="control-label"><?=__("Image",$this)?></label>
				     	 	<div class=''>
					 	 		<p style='padding-bottom:10px;' id='img'><img src="" onerror="this.src='http://localhost/billfee/assets/images/images-empty.png';" style='max-width:150px;'></a>
					 	 		</p></div>
				     	 	<div class=''>
				    			<?php $this->load->view("admin/elements/fileupload_view",array('file'=>"image",'id'=>"img",'value'=>"",'multiple'=>false));?>
							</div>
						</div>

		</div>
		
	</div>
<?php
	/*
		./end-box
		*/
	$this->load->view('admin/elements/ui/box_content/box_footer',array('command_tools'=>array('save','cancel')));
?>
</form>
	
<?=content_close()?>