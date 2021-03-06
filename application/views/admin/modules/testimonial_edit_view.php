<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
	<div class="row">
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
			
			<form class="form-horizontal" action="<?=site_url('admin/modules/testimonials/edit/'.$item->id)?>" id='main_form_submit'  method="post">
				<?php echo form_hidden('id',set_value('id',$item->id));?>
				<div class='form-group'>
		            <label class='control-label col-sm-2' for='active'>Active</label>
		            <div class='col-sm-9'>

		            <?php 
			            echo "<input name='active'  id='active' type='hidden' ".($item->active=="Y" ? 'checked' : '')." value='N'/>";
			     	 		echo form_checkbox('active','Y',($item->active=='Y'?true:false));

		            ?>
		            </div>
	            </div>
	            
				 <div class="form-group">
					 <label class="control-label col-sm-2" for="pwd">Name </label>
					 <div class='col-sm-9'>
						<?php
							echo form_input('name',$item->name ? set_value('name',$item->name):"",'class="form-control"');
						?>
					 </div>
	            </div>
	            
	            <div class='form-group'>
		            <label class="control-label col-sm-2" for="description">Description</label>
					 <div class='col-sm-9'>
						<textarea class="form-control" id="description" name="description"><?php echo (isset($item->translations) ? set_value('description',$item->translations[0]->description):"")?>
						</textarea>
					 </div>
	            </div>
	            
	            <div class='form-group'>
		            <label class="control-label col-sm-2" for="sort">Sort</label>
					<div class='col-sm-9'>
						<?php
							 echo form_input('sort',set_value('sort',$item->sort),'class="form-control" style="width:10%"');
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
</div>