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
								if(isset($error)){
									echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
								}
								if(isset($success)){
									echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
								}
								if(isset($char_list) && $char_list != false){		
								?>
								<form method="post" action="" id="transfer_character">
									<div class="form-group">
										<label class="control-label"><?php echo __('Char'); ?></label>
										<div>
											<select name="character" id="character" class="form-control bg-light-dark text-white has-border py-18 register">
												<?php foreach($char_list as $char){ ?>
													<option value="<?php echo $char['name']; ?>"><?php echo $char['name']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label"><?php echo __('Username'); ?></label>
										<input type="text" class="form-control bg-light-dark text-white" type="text" name="username" id="username" value="">
									</div>
									<?php if($plugin_config['price'] > 0){ ?>
									<div class="form-group">
										<label class="control-label"><?php echo __('Price'); ?></label>
										<input type="text" class="form-control bg-light-dark text-white" type="text" name="price" id="price" value="<?php echo $plugin_config['price'];?> <?php echo $this->website->translate_credits($plugin_config['price_type'], $this->session->userdata(['user' => 'server']));?>" readonly>
									</div>
									<?php } ?>
									<div class="form-group mb-5">
										<div class="d-flex justify-content-center align-items-center"><button type="submit" id="transfer_character" name="transfer_character" class="vs-btn gradient-btn h4"><?php echo __('Submit'); ?></button></div>
									</div>	
								</form>
								<?php
								}
								else{
								?>
								<div class="alert alert-danger" role="alert"><?php echo __('No characters found.');?></div>
								<?php
								}	
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