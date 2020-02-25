<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	//Flash Message View
	$this->load->view('admin/elements/flash_message_view');
	
	$this->load->view('admin/elements/section_header_view');
	
	$tabs = array('Thông tin chung','Hình ảnh');
?>
	<!-- Main Content -->
<form class="form-horizontal" role="form" action="<?=site_url('admin/products/submit')?>" method="post" id='main_form_submit'>

<?php
	echo form_hidden('id',$item->id);
	echo form_hidden('has_many','images');
?>		
	
	<?=content_open_tabs($page_name,$tabs)?>

		
	<div class="tab-content">
				<div class='tab-pane active' id='tab_1'>
			<div class='form-group'>
	            <label class='control-label col-sm-2' for='active'><?=__('Active',$this)?></label>
	            <div class='col-sm-9'>

	            <?php 
		            echo "<input name='active'  id='active' type='hidden'  value='N'/>";
		     	 	echo form_checkbox('active','Y','checked');
	            ?>
	            </div>
            </div>
            
            <div class='form-group'>
	            <label class='control-label col-sm-2' for='active'><?=__('For Sell',$this)?></label>
	            <div class='col-sm-9'>

	            <?php 
		     	 	echo form_dropdown('for_sell',$for_sells,"",'class="form-control select2"');

	            ?>
	            </div>
            </div>
                        
            <div class="form-group">
				 <label class="control-label col-sm-2" for="pwd"><?=__('Name',$this)?></label>
				 <div class='col-sm-9'>
					<?php
						 echo form_input('name',value($item->name),'class="form-control make_slug"');
					?>
				 </div>
            </div>
            
            <div class="form-group">
				 <label class="control-label col-sm-2" for="pwd"><?=__('Slug',$this)?></label>
				 <div class='col-sm-9'>
					<?php
						 echo form_input('slug',value($item->slug),'class="form-control" id="slug"');
					?>
				 </div>
            </div>
            
            <div class="form-group">
				 <label class="control-label col-sm-2" for="pwd"><?=__('Price',$this)?></label>
				 <div class='col-sm-9'>
					<?php
						echo form_hidden('price',value($item->price),"id='simple_price");
						echo form_input('makeup_price',value($item->price),"id='makeup_price' class='form-control currency'");
					?>
				 </div>
            </div>
            
           <!-- <div class="form-group">
				 <label class="control-label col-sm-2" for="pwd"><?=__('Price (m2)',$this)?></label>
				 <div class='col-sm-9'>
					<?php
						echo form_hidden('price_by_m2',value($item->price_by_m2),"id='simple_price");
						echo form_input('makeup_price_m2',value($item->price_by_m2),"id='makeup_price_m2' class='form-control currency'");
					?>
				 </div>
            </div>-->
            
            <div class='form-group'>
	            <label class="control-label col-sm-2" for="pwd"><?=__('Description',$this)?></label>
				 <div class='col-sm-9 col-md-10'>
					<textarea class="form-control product-editor" id="description" name="description"><?=value($item->description)?></textarea>
				 </div>
            </div>
            
            
            
           <!-- <div class="form-group">
				 <label class="control-label col-sm-2" for="pwd"><?=__('Province',$this)?></label>
				 <div class='col-sm-9'>
					<?php
						 echo form_dropdown('province_id',$list_province,$item->province_id,'class="form-control"');
					?>
				 </div>
            </div>
            
            <div class="form-group">
				 <label class="control-label col-sm-2" for="pwd"><?=__('District',$this)?></label>
				 <div class='col-sm-9'>
					<?php
						 echo form_dropdown('district_id',$list_district,$item->district_id,'class="form-control"');
					?>
				 </div>
            </div>
            
             <div class="form-group">
				 <label class="control-label col-sm-2" for="pwd"><?=__('Ward',$this)?></label>
				 <div class='col-sm-9'>
					<?php
						 echo form_dropdown('ward_id',$list_ward,$item->ward_id,'class="form-control"');
					?>
				 </div>
            </div>-->
            
	          <div class='form-group'>
	            <label class="control-label col-sm-2" for="pwd">Sort</label>
				 <div class='col-sm-9'>
					<?php
						 echo form_input('sort',value($item->sort),'class="form-control" style="width:10%"');
					?>
				 </div>
            </div>
            
           <div class="form-group">
				 <label class="control-label col-sm-2" for="pwd"><?=__('Page title',$this)?></label>
				 <div class='col-sm-9'>
					<?php
						 echo form_input('page_title',value($item->page_title),'class="form-control" id="slug"');
					?>
				 </div>
            </div>
	        <div class="form-group">
					 <label class="control-label col-sm-2" for="pwd"><?=__("Page Description",$this)?></label>
					 <div class='col-sm-9'>
						<textarea class="form-control" id="page_title" name="page_description"><?=value($item->page_description)?></textarea>
					 </div>
	            </div>
            
            <div class="form-group">
	            <label class="control-label col-sm-2" for="pwd"></label>        
		      <div class="col-sm-9">
		        <button type="submit" class="btn btn-primary cmd-save">Save</button>
		      </div>
	    	</div>
		</div>
		
		<div class='tab-pane' id='tab_2'>
			<?=$this->load->view('/elements/');
		</div>
		
	</div>
	
	<?php
	/*
		./end-box
		*/
	?>
<?php $this->load->view('admin/elements/ui/box_content/box_footer',array('command_tools'=>array('save','cancel')));
?>
		
<?php
	//$this->load->view('admin/elements/ckeditor_view');
?>

<?=content_close_tabs()?>

</form>	