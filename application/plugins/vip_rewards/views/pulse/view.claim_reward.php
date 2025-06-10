<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.header');
?>
<div class="row">
	<?php $this->load->view($this->config->config_entry('main|template') . DS . 'view.user_menu'); ?>
	<div class="col-lg-9">
		<div class="vs-blog mt-15">
			<div class="blog-meta has-border bg-major-black">
				<div class="blog-title font-theme h4 mt-25-sm mb-5-off d-flex justify-content-between">
					<h2><?php echo __($about['name']); ?></h2>
					<span>
						<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>vip-rewards"><?php echo __($about['name']); ?></a>
					</span>
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
						<div class="mb-5">
							<?php
							if(isset($error)){
								echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
							}
							if(isset($success)){
								echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
							}
							?>
							<form method="post" action="" id="claim_reward">
								<div class="form-group">
									<label class="control-label"><?php echo __('Character');?></label>
									<select class="form-control bg-light-dark text-white has-border py-18 register" name="character" id="character">
									<?php foreach($characters as $char): ?>
										<option value="<?php echo $char['id'];?>"><?php echo $char['name'];?></option>
									<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<div class="d-flex justify-content-center align-items-center"><button type="submit" id="claim" name="claim" class="vs-btn gradient-btn h4"><?php echo __('Redeem'); ?></button></div>
								</div>	
							</form>
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