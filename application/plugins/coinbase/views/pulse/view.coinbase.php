<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.header');
?>
<div class="row vs-blog">
	<div class="col-lg-12">
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
					} else{
						if(isset($module_disabled)){
							echo '<div class="alert alert-danger" role="alert">'.$module_disabled.'</div>';
						} else{
					?>	
					<div class="mb-5">
					<?php if(isset($js)){ ?>
					<script src="<?php echo $js;?>"></script>
					<?php } ?>
					<script type="text/javascript">
						var CoinBase = new CoinBase();
						CoinBase.setUrl('<?php echo $this->config->base_url . $this->request->get_controller();?>');
						$(document).ready(function () {
							$('button[id^="buy_coinbase_"]').on('click', function () {
								CoinBase.checkout($(this).attr('id').split('_')[2]);
							});
						});
					</script>
					<?php
						if(isset($error)){
							echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
						} 
						else{
							if(!empty($packages_coinbase)){
								echo '<ul class="list-group" id="paypal-options">';
								foreach($packages_coinbase as $packages){
									echo '<li class="list-group-item">
											<div style="display: flex;align-items: center;">
												<h4>' . $packages['package'] . '</h4>
												<h3><span id="reward_' . $packages['id'] . '">' . $packages['reward'] . '</span> ' . $this->website->translate_credits($plugin_config['reward_type'], $this->session->userdata(array('user' => 'server'))) . ' (<span id="price_' . $packages['id'] . '" data-price="' . number_format($packages['price'], 2, '.', ',') . '">' . number_format($packages['price'], 2, '.', ',') . '</span> <span id="currency_' . $packages['id'] . '">' . $packages['currency'] . '</span>)</h3>
												<button class="vs-btn gradient-btn h4" style="margin-left: auto;" id="buy_coinbase_' . $packages['id'] . '">' . __('Buy Now') . '</button>
											</div>
										</li>';
								}
								echo '</ul>';
							} 
							else{
								echo '<div class="alert alert-primary" role="alert">' . __('No Packages Found.') . '</div>';
							}
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
<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.right_sidebar');
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.footer');
?>