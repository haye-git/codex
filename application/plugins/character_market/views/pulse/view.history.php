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
					<h2><?php echo  __('Character History');?></h2>
					<span>
						<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>character-market"><?php echo __('Character Market');?></a>
						<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>character-market/sale-history"><?php echo __('Sale History');?></a>
					</span>
				</div>
			</div>
			<div class="blog-content bg-major-black">
				<?php if(isset($module_disabled)){ ?>
				<div class="alert alert-primary" role="alert"><?php echo $module_disabled; ?></div>
				<?php } else { ?>	
					<div class="mb-4"></div>
					<?php if(isset($chars) && !empty($chars)){ ?>
					<table class="table dmn-rankings-table table-striped">
						<thead>
						<tr>
							<th>#</th>
							<th><?php echo __('Character');?></th>
							<th><?php echo __('Status');?></th>
						</tr>
						</thead>
						<tbody>
						<?php
						$i = 0;
						foreach($chars as $ch){
						$i++;
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $this->Mcharacter_market->get_char_name_by_id($ch['mu_id'], $this->session->userdata(['user' => 'server']))['Name'];?></td>
							<td>
								<?php
									if($ch['is_sold'] == 1){
										echo 'Sold';
									}
									elseif($ch['removed'] == 1){
										echo 'Removed';
									}
									else{
										echo '<a href="'.$this->config->base_url.'character-market/remove/'.$ch['id'].'">Remove</a>';
									}
								?>
							</td>
						</tr>
						<?php } ?>
						</tbody>
					</table>
					<?php  if(isset($pagination)){ ?>	
					<div class="text-center;"><?php echo $pagination; ?></div>	
					<?php } ?>
					<?php } else { ?>
					<div class="alert alert-primary" role="alert"><?php echo __('No Characters Found.');?></div>
					<?php } ?>
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