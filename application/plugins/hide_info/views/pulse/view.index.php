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
						<h2 class="title"><?php echo __($about['user_description']); ?></h2>
						<div class="mb-5">
							<?php if(isset($js)){ ?>
							<script src="<?php echo $js;?>"></script>
							<?php } ?>
							<script>
								var pluginJs = new pluginJs();
								pluginJs.setUrl('<?php echo $this->config->base_url . $this->request->get_controller();?>');
								$(document).ready(function () {
									$('#hide_info').on("submit", function (e) {
										e.preventDefault();
										pluginJs.submit($(this));
									});
								});
							</script>
							<form method="post" action="" id="hide_info">
								<table class="table dmn-rankings-table table-striped">
									<thead>
									<tr>
										<th style="text-align: left;padding-left: 15px;" colspan="3"><?php echo __('Details'); ?></th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo __('Hide Till'); ?></td>
										<td style="width:70%;text-align: left;padding-left: 15px;" id="hide_time"><?php echo ($hide_time == false) ? __('None') : $hide_time; ?></td>
									</tr>
									<tr>
										<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo __('Hide Info'); ?></td>
										<td style="width:70%;text-align: left;padding-left: 15px;"><?php echo __('Everyone can\'t see location or inventory items on all chars'); ?></td>
									</tr>
									<tr>
										<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo __('Hide Price'); ?></td>
										<td style="width:70%;text-align: left;padding-left: 15px;">
											<?php
												$price = $plugin_config['price'];
												if($this->session->userdata('vip')){
													$price -= ($price / 100) * $this->session->userdata(['vip' => 'hide_info_discount']);
												}
												echo $price; ?> <?php echo $this->website->translate_credits($plugin_config['payment_method'], $this->session->userdata(['user' => 'server'])); ?>
											, <?php echo $plugin_config['days']; ?> <?php echo __('days'); ?>
										</td>
									</tr>
									</tbody>
								</table>
								<div class="text-center">
									<button type="submit" class="vs-btn gradient-btn h4"><?php echo __('Buy Now'); ?></button>
								</div>
							</form>
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