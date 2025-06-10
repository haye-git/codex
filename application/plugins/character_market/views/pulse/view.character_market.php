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
					<h2><?php echo __($about['name']); ?></h2>
					<span>
						<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>character-market/sell-character"><?php echo __('Sell Character');?></a> 
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
							<th><?php echo __('Merchant');?></th>
							<th><?php echo __('Price + Tax');?> (<?php echo $this->config->values('character_market', array($this->session->userdata(array('user'=>'server')), 'sale_tax'));?>%)</th>
							<th><?php echo __('Class');?></th>
						</tr>
						</thead>
						<tbody>
						<?php foreach($chars as $ch){ ?>
						<tr>
							<td><?php echo $ch['icon'];?></td>
							<td><a href="<?php echo $this->config->base_url;?>character-market/buy/<?php echo $ch['id'];?>"><?php echo $ch['name'];?></a></td>
							<td><?php echo htmlspecialchars($ch['seller']);?></td>
							<td><?php echo $ch['price'];?></td>
							<td><?php echo $ch['class'];?></td>
						</tr>
						<?php } ?>
						</tbody>
					</table>
					<?php if(isset($pagination)){ ?>	
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