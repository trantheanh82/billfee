<div class='form-group'>
	 <div class='col-sm-12'>
		<p style="padding-bottom:10px;" id='product'><img src='' /></p>
 	 	<?php	
			$this->load->view('admin/elements/upload_view.php',array('file'=>'product_image','id'=>'product_image','value'=>$value,'type_file'=>'product','multiple'=>true));
		?>
	 </div>
</div> 
