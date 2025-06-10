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
						<h2 class="title d-flex justify-content-between">
							<span><?php echo __($about['user_description']); ?></span>
							<span>
								<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>achievements"><?php echo __('Character List');?></a>
								<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>achievements/rankings/<?php echo $this->session->userdata(['user' => 'server']);?>"><?php echo __('Rankings');?></a>
							</span>
						</h2>
						<div class="mb-5">
							<?php
							if(isset($success)){
								echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
							}
							if(isset($error)){
								echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
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