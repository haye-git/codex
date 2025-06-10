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
						<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url; ?>skill-tree-specialization"><?php echo __('My Specializations'); ?></a>
					</span>
				</div>
			</div>
			<div class="blog-content bg-major-black">
				<div class="row">
					<div class="col-12">     
						<h2 class="title">
							<?php echo __($about['user_description']); ?>
						</h2>
						<div class="mb-5">
							<?php
							if(isset($config_not_found)){
								echo '<div class="alert alert-danger" role="alert">' . $config_not_found . '</div>';
							} 
							else{
								if(isset($char_error)){
									echo '<div class="alert alert-danger" role="alert">' .$char_error . '</div>';
								}
								else{
									if(isset($error)){
										echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
									}
									if(isset($success)){
										echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
									}
							?>
							<form method="post" action="" id="stats_specialization_form">
								<div class="form-group">
									<label class="control-label"><?php echo __('Specialization Title'); ?></label>
									<input type="text" name="title" id="title" value="" placeholder="" class="form-control bg-light-dark text-white py-15  validate[required,minSize[2],maxSize[30]]" />
								</div>
								<?php if($plugin_config['price'] > 0){ ?>
								<div class="form-group">
									<label class="control-label"><?php echo __('Price'); ?></label>
									<input type="text" value="<?php echo $plugin_config['price'] . ' ' . $plugin_config['payment_name'];?>" placeholder="" class="form-control bg-light-dark text-white py-15 " readonly />
								</div>
								<?php } ?>
								<div class="form-group mb-5">
									<div class="d-flex justify-content-center align-items-center"><button type="submit" class="vs-btn gradient-btn h4"><?php echo __('Submit'); ?></button></div>
								</div>
							</form>
							<script type="text/javascript">
								$(document).ready(function () {
									$("#stats_specialization_form").validationEngine();
								});
							</script>
							<?php }} ?>
						</div>
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