<div class="single-sidebar-widget fix mb-40">
	<?php
		?>
		<div class="sidebar-widget-title mb-30">
            <h5>Cần tư vấn về Bất Động Sản Cần Giờ</h5>
        </div> 
        <p class="form-messege"></p>
		<form id="contact_form" action="<?=base_url()?>proccessing/ajax/insert/contact_form" method="post">
			<input type='hidden' name='subject' value='Tôi liên hệ tư vấn đất tại Cần Giờ' />
			<input type='hidden' name='ip' value='<?=$_SERVER['REMOTE_ADDR']?>' />
			<input type="text" id="cname" name="name"  minlength="3"  class="mb-22" placeholder="Họ Tên" required>
			<input type="text" id="cemail" name="email" class="mb-22" placeholder="Email"  required>
			<input type="text" id="cphone" name="phone" class="mb-22" placeholder="Số điện thoại"  required>
			<div class="col-10 fix text-center">
				<button type="submit" class="button submit-btn lemon mt-35">Gửi</button>
			</div>
			
		</form>
</div>
<script>
	$(function(){
		$('#contact_form').validate({
			rules:{
				cname: {
					required: true,
					minlength: 2
				},
				cemail:{
					required: true,
					email: true,
				},
				cphone: {
					required: true,
					digits: true,
					minlength: 10,
					maxlength: 11
				}
				
			},
			messages: {
				cname: {
					required: "Vui lòng nhập Họ Tên",
					minlength: "Tên phải có ít nhất 2 ký tự"
				},
				cemail:{
					required: "Vui lòng nhập email",
					email: "Email phải đúng với định dạng ten@domain.com"
				},
				cphone:{
					required: "Vui lòng nhập số điện thoại",
					digits: "Số điện thoại chỉ được nhập số",
					minlength: "Số điện thoại phải từ 10 đến 11 số",
					maxlength: "Số điện thoại phải từ 10 đến 11 số"
					
				}
			}
		});
		
		$('#contact_form').on('submit',function(){
			if($(this).valid()){
				$.ajax({
					type: 'POST',
					url: $(this).attr('action'),
					data: $(this).serialize()
				})
				.done(function(data){
					if(data == 'done'){
						$('.form-messege').text("Thông tin quý khách đã được cập nhật. Nhân Viên THẢO TÂY LAND sẽ liên hệ với quý khách trong thời gian sớm nhất.");
					}
				});
				
			
			}else{
				console.log('false');
			}
			
			return false;
		})
		
	})
</script>