<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.header');
?>
<div class="col-md-12">
	<div style="background: url('<?php echo $this->config->base_url; ?>assets/plugins/images/battle_pass/header.png') no-repeat top center; height: 1419px!important;"></div>
</div>
<div class="row vs-blog">
	<div class="col-lg-12">
		<div class="blog-meta has-border bg-major-black">
			<div class="blog-title font-theme h4 mt-25-sm mb-5-off d-flex justify-content-between">
				<h2><?php echo __('Upgrade BattlePass'); ?></h2>
				<span>
					<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url; ?>battle-pass"><?php echo __('BattlePass');?></a>	
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
						if(isset($success)){
							echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
						}
						if(isset($error)){
							echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
						}
						?>
						<form method="post" action="">
							<div class="form-group">
								<?php if($pass['pass_type'] < 1){ ?>
								<input type="radio" name="pass_type" value="1"/> <?php echo __('Silver'); ?> (<?php echo $plugin_config['silver_pass_upgrade_price'];?> <?php echo $this->website->translate_credits($plugin_config['silver_pass_payment_type'], $this->session->userdata(['user' => 'server']));?>)
								<br/>
								<?php } ?>
								<?php 
								if($pass['pass_type'] == 1 && $plugin_config['silver_pass_payment_type'] == $plugin_config['platinum_pass_payment_type']){
									$plugin_config['platinum_pass_upgrade_price'] -= $plugin_config['silver_pass_upgrade_price'];
								}
								?>
								<input type="radio" name="pass_type" value="2"/> <?php echo __('Platinum'); ?>  (<?php echo $plugin_config['platinum_pass_upgrade_price'];?> <?php echo $this->website->translate_credits($plugin_config['platinum_pass_payment_type'], $this->session->userdata(['user' => 'server']));?>)
							</div>
							<div class="form-group mb-5">
								<div class="d-flex justify-content-center align-items-center"><button type="submit" class="vs-btn gradient-btn h4"><?php echo __('Submit'); ?></button></div>
							</div>
						</form>
					<?php
						}
					}
					?>
				</div>	
			</div>		
		</div>	
	</div>	
</div>	
<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.right_sidebar');
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.footer');
?>