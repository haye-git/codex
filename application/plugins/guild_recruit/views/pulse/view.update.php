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
						?>
							<?php if(isset($js)){ ?>
							<script src="<?php echo $js; ?>"></script>
							<?php } ?>
							<?php if(!empty($guilds)){ ?>
                            <div class="form">
								<form method="post" action="" id="discord_form">
									<div class="form-group">
										<label class="control-label"><?php echo __('Guild'); ?></label>
										<?php echo $gname;?>
									</div>
									<div class="form-group">
										<label class="control-label"><?php echo __('Discord Link'); ?></label>
										<input type="text" id="discord_link" name="discord_link" value="<?php if($found != false && $found['discord_link'] != null){ echo $found['discord_link']; } ?>" class="form-control bg-light-dark text-white py-15" />
									</div>
									<div class="mb-5">
										<div class="d-flex justify-content-center align-items-center">
											<button type="submit" class="vs-btn gradient-btn h4"><?php echo __('Submit'); ?></button>
										</div>
									</div>
								</form>
							</div>
                            <?php } else { ?>
                            <?php echo __('You don\'t have any guilds.'); ?>
                            <?php } ?>
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