<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default"><?=__($button_name,$this)?></button>
<br /><br />
<div class='image-placehold mt-10' style='max-width:<?=isset($max_width)?$max_width:"150px";?>'>
	
	<p style='position:absolute;left:<?=isset($max_width)?$max_width:"150px";?>;' class='hide remove-placehold-image' title='<?=__('remove image',$this)?>'><icon class='fa fa-trash red'></icon></p>
	
	<img src="<?=($value != "")?$value:""?>" id='img_<?=$id?>' class='img-responsive profile-avatar border-trans' 
		style='cursor:pointer;width:<?=	isset($max_width)?$max_width:"150px";?>;'
		 data-toggle='modal' data-target='#modal-default'
		onerror="this.src='<?=base_url()?>assets/images/images-empty.png';"/>	
		
<input type='hidden' name='<?=$id?>' id='<?=$id?>' value="<?=$value?>"/>

</div>
<?php
	$this->load->view('admin/elements/modules/modal_filemanager_view',array('modal_title'=>__('Upload Image',$this),'type'=>'image','field_id'=>$field_id,'path'=>$path));
	?>
	
<script>
	function responsive_filemanager_callback(field_id){
		var url=jQuery('#'+field_id).val();
		$('#img_<?=$id?>').attr('src',url);
		
		//your code
	}
	
	$(document).ready(function(){
		$('.image-placehold').hover(
			function(){
				if($('#img_<?=$id?>').attr('src') != "<?=base_url()?>assets/images/images-empty.png"){
					$('.remove-placehold-image').removeClass('hide');
				}
			},
			function(){
				$('.remove-placehold-image').addClass('hide');
			}
		);
		
		$('.remove-placehold-image').on('click',function(){
			$('#<?=$id?>').val('');
			$('#img_<?=$id?>').attr('src','');
			
		})
	})
</script>
