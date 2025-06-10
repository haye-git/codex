<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.header');
?>
<div class="row">
	<?php $this->load->view($this->config->config_entry('main|template') . DS . 'view.user_menu'); ?>
	<div class="col-lg-9">
		<div class="vs-blog mt-15">
			<div class="blog-meta has-border bg-major-black">
				<div class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
					<h2><?php echo __($about['name']); ?></h2>
				</div>
			</div>
			<div class="blog-content bg-major-black">
				<div class="row">
					<div class="col-12">   
						<?php 
						if(isset($config_not_found)){
							echo '<div class="alert alert-danger" role="alert">'.$config_not_found.'</div>';
						} 
						else{
							if(isset($module_disabled)){
								echo '<div class="alert alert-danger" role="alert">'.$module_disabled.'</div>';
							} 
							else{
						?>	
						<h2 class="title"><?php echo __($about['user_description']); ?></h2>
						<div class="mb-5">
						<?php
						if(isset($error)){
							echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
						}
						if(isset($success)){
							echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
						}
						if(isset($char_list) && $char_list != false){		
						?>
							<form method="post" action="" id="redeem_coupon">
								<div class="form-group">
									<label class="control-label"><?php echo __('Code'); ?></label>
									<input type="text" name="coupon" id="coupon" value="" class="form-control bg-light-dark text-white py-15 validate[required,maxSize[10]]" />
								</div>
								<div class="form-group">
									<label class="control-label"><?php echo __('Character');?></label>
									<select class="form-control bg-light-dark text-white has-border py-18 register" name="character" id="character">
									<?php foreach($char_list as $char): ?>
										<option value="<?php echo $char['id'];?>"><?php echo $char['name'];?></option>
									<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<div class="d-flex justify-content-center align-items-center"><button type="submit" name="redeem_coupon" class="vs-btn gradient-btn h4"><?php echo __('Redeem'); ?></button></div>
								</div>	
							</form>
						<?php
						}
						else{
						?>
						<div class="alert alert-danger" role="alert"><?php echo __('No characters found.');?></div>
						<?php
						}
						?>
						</div>
						<?php
							}
						}
						?>
					</div>	
				</div>
			</div>
		</div>	
	</div>	
</div>		
<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.right_sidebar');
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.footer');
?>