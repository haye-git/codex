<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.header');
?>
<div class="row">
	<?php $this->load->view($this->config->config_entry('main|template') . DS . 'view.user_menu'); ?>
	<div class="col-lg-9">
		<div class="vs-blog mt-15">
			<?php if(isset($config_not_found)){ ?>
			<div class="alert alert-danger" role="alert"><?php echo $config_not_found; ?></div>
			<?php } else { ?>
			<div class="blog-meta has-border bg-major-black">
				<div class="blog-title font-theme h4 mt-25-sm mb-5-off d-flex justify-content-between">
					<h2><?php echo $this->iteminfo->getNameStyle(true); ?></h2>
					<span>
						<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>muun-market"><?php echo __('Muun Market');?></a>
						<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>muun-market/sell-muun"><?php echo __('Sell Muun');?></a> 
						<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>muun-market/sale-history"><?php echo __('Sale History');?></a>
					</span>
				</div>
			</div>
			<div class="blog-content bg-major-black">
				<?php if(isset($module_disabled)){ ?>
				<div class="alert alert-primary" role="alert"><?php echo $module_disabled; ?></div>
				<?php } else { ?>	
					<div class="mb-4"></div>
					<?php
					if(isset($error)){
						echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
					}
					else{
						if(isset($purchase_error)){
							echo '<div class="alert alert-danger" role="alert">'.$purchase_error.'</div>';
						}
					?>
					<script>
						$(document).ready(function () {
							$('div#item_info').each(function () {
								App.initializeTooltip($(this), true, 'warehouse/item_info_pet');
							});
						});
					</script>
					<div style="margin-bottom:20px;text-align:center;" id="item_info"  data-info="<?php echo $sale_info['item']; ?>">
						<div><img alt="" src="<?php echo $this->itemimage->load($this->iteminfo->id, $this->iteminfo->type, (int)$this->iteminfo->level, 0); ?>"/></div>
						<?php echo $this->iteminfo->getNameStyle(true); ?>
					</div>
					<form method="POST" action="" id="buy_item" name="buy_item">
						<table class="table dmn-rankings-table table-striped">
							<thead>
							<tr>
								<td colspan="2" style="padding-left: 15px;"><?php echo __('Information');?></td>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td style="width: 240px;">
									<table style="width:100%;margin: 0 auto;">
										<tr>
											<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo __('Select Char'); ?>:</td>
											<td style="width:30%;text-align: left;padding-left: 15px;">
												<select name="character" class="form-control bg-dark text-white has-border py-10 register">
													<?php foreach($char_list AS $key => $value){ ?>
													<option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>	
													<?php } ?>
												</select>
											</td>
										</tr>
										<tr>
											<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo __('Merchant'); ?>:</td>
											<td style="width:30%;text-align: left;padding-left: 15px;"><a href="<?php echo $this->config->base_url; ?>info/character/<?php echo bin2hex($sale_info['seller']); ?>/<?php echo $this->session->userdata(['user' => 'server']); ?>"><?php echo htmlspecialchars($sale_info['seller']); ?></a></td>
										</tr>
										<tr>
											<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo __('Start Time'); ?>:</td>
											<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo date(DATETIME_FORMAT, strtotime($sale_info['add_date'])); ?></td>
										</tr>
										<tr>
											<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo __('End Time'); ?>:</td>
											<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo date(DATETIME_FORMAT, strtotime($sale_info['active_till'])); ?></td>
										</tr>
										<tr>
											<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo __('Price'); ?>: </td>
											<td style="width:30%;text-align: left;padding-left: 15px;"><?php echo $sale_info['price'];?> <?php echo $this->website->translate_credits($sale_info['price_type'], $this->session->userdata(['user' => 'server']));?></td>
										</tr>
									</table>					
								</td>
							</tr>
							</tbody>
						</table>
						 <div class="text-center">
							<button type="submit" value="buy" name="buy" class="vs-btn gradient-btn h4"><?php echo __('Buy Now'); ?></button>
						</div>
					</form>
					<?php
					}
					?>
				<?php } ?>
			</div>
			<?php } ?>		
		</div>	
	</div>	
</div>	
<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.right_sidebar');
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.footer');
?>