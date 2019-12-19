<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
	<div class="col-sm-3 col-md-3">
		<?php $this->load->view('admin/elements/left_menu_view');?>
	</div>
	<div class="col-right col-sm-9 col-md-9">
		<h3 class="text-capitalize"><?php echo $page_name ?></h3>
		<!-- Languages Selection -->
		<?php
			$this->load->view('admin/elements/language_selection_view');
		?>
		<!-- End Language Selection -->
		
		<form class="form-horizontal" action="<?=site_url('admin/services/create')?>" method="post" id='main_form_submit'>
			<div class='form-group'>
	            <label class='control-label col-sm-2' for='active'>Active</label>
	            <div class='col-sm-9'>

	            <?php 
		            echo "<input name='active'  id='active' type='hidden'  value='N'/>";
		     	 		echo form_checkbox('active','Y','checked');

	            ?>
	            </div>
            </div>
            
			<div class="form-group">
				 <label class="control-label col-sm-2" for="pwd">Name	</label>
				 <div class='col-sm-9'>
					<?php
						 echo form_input('name',set_value('name'),'class="form-control"');
					?>
				 </div>
            </div>
            
            
            <div class='form-group'>
	            <label class="control-label col-sm-2" for="pwd">Images (1280x720)</label>
				 <div class='col-sm-9'>
					<p style="padding-bottom:10px;"></p>
		     	 	<?php	
		    			$this->load->view('admin/elements/fileupload_view.php',array('file'=>'image','id'=>'Service_image','value'=>'','multiple'=>false));
		    		?>
				 </div>
            </div> 
            
            <div class='form-group'>
	            <label class="control-label col-sm-2" for="pwd">Content Images (1280x720)</label>
				 <div class='col-sm-9'>
					<p style="padding-bottom:10px;"></p>
		     	 	<?php	
		    			$this->load->view('admin/elements/fileupload_view.php',array('file'=>'content_image','id'=>'Service_content_image','value'=>'','multiple'=>false));
		    		?>
				 </div>

            
            <div class='form-group'>
	            <label class="control-label col-sm-2" for="pwd">Content</label>
				 <div class='col-sm-9'>
					<textarea class="form-control editor" id="content" name="content"></textarea>
				 </div>
            </div>
            
              <div class='form-group'>
	            <label class="control-label col-sm-2" for="pwd">Sort</label>
				 <div class='col-sm-9'>
					<?php
						 echo form_input('sort','5','class="form-control" style="width:10%"');
						 //echo form_hidden('position','main_top_banner');
					?>
				 </div>
            </div>
            
            <div class="form-group">
	            <label class="control-label col-sm-2" for="pwd"></label>        
		      <div class="col-sm-9">
		        <button type="submit" class="btn btn-primary cmd-save">Save</button>
		      </div>
	    	</div>
		</form>
	</div>
</div>