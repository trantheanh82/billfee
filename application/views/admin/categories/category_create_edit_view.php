<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Main Content -->
<?php 
		$this->load->view('admin/elements/section_header_view');
	?>
<?=content_open($page_name,$this)?>
<?php
	if(!empty($item->id)){
		$type = 'edit';
		
	}else{
		$type = 'create';
	}
	
	$checked = "checked";

	if(isset($item->active)){
		if($item->active == 'N'){
			$checked = "";
		}
	}
?>
<form class="form-horizontal" action="<?=site_url('admin/category/submit/'.$type)?>" method="post" id='main_form_submit'>

	<div class='box-body'>
		
			<div class='form-group'>
	            <label class='control-label col-sm-2' for='active'>Active</label>
	            <div class='col-sm-9'>

	            <?php 
		            echo "<input name='active'  id='active' type='hidden'  value='N'/>";
		     	 	echo form_checkbox('active','Y',$checked);
		     	 	if(isset($item->id)){
			     	 	echo form_hidden('id',$item->id);
		     	 	}

	            ?>
	            </div>
            </div>
            
			<div class="form-group">
				 <label class="control-label col-sm-2" for="pwd">Name</label>
				 <div class='col-sm-9'>
					<?php
						 echo form_input('name',value(isset($item->name)?$item->name:""),'class="form-control"');
					?>
				 </div>
            </div>
            
            
            <div class='form-group'>
	            <label class="control-label col-sm-2" for="pwd">Images (1280x720)</label>
				 <div class='col-sm-9'>
					<p style="padding-bottom:10px;"></p>
		     	 	<?php	
		    			$this->load->view('admin/elements/fileupload_view.php',array('file'=>'image','id'=>'Banner_image','value'=>'','multiple'=>false));
		    		?>
				 </div>
            </div> 
            
            <div class='form-group'>
	            <label class="control-label col-sm-2" for="pwd">Description</label>
				 <div class='col-sm-9'>
					<textarea class="form-control editor" id="editor1" name="description" placeholder="<?=__("Type your content here",$this)?>"><?=isset($item->description)?$item->description:""?></textarea>
				 </div>
            </div>
            
              <div class='form-group'>
	            <label class="control-label col-sm-2" for="pwd">Sort</label>
				 <div class='col-sm-9'>
					<?php
						 echo form_input('sort',value(isset($item->sort)?$item->sort:""),'class="form-control" style="width:10%"');
					?>
				 </div>
            </div>
                        
            
		
	</div>
	
	<!--./box-footer -->
	<?php $this->load->view('admin/elements/ui/box_content/box_footer',array('command_tools'=>array('save','cancel')));?>
	</form>
<?=content_close()?>
