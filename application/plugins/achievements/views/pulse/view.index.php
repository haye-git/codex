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
							<span><a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>achievements/rankings/<?php echo $this->session->userdata(['user' => 'server']);?>"><?php echo __('Rankings');?></a></span>
						</h2>
						<div class="mb-5">
						<?php if(isset($characters) && $characters != false){ ?>
						<table class="table dmn-rankings-table table-striped">
							<thead>
								<tr>
									<th><?php echo __('Character');?></th>
									<th><?php echo __('Level');?></th>
									<th><?php echo __('Res');?></th>
									<th><?php echo __('Class');?></th>
									<th><?php echo __('Action');?></th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($characters as $ch){ ?>
							<tr>
								<td><?php echo $ch['name'];?></td>
								<td><?php echo $ch['level'];?></td>
								<td><?php echo $ch['resets'];?></td>
								<td><?php echo $this->website->get_char_class($ch['class']);?></td>
								<td>
								<?php if($this->Machievements->checkUnlocked($ch['id'], $this->session->userdata(['user' => 'server'])) != false){ ?>
								<a href="<?php echo $this->config->base_url; ?>achievements/view/<?php echo $ch['id'];?>"><?php echo __('View');?></a>
								<?php } else { ?>
								<a href="<?php echo $this->config->base_url; ?>achievements/unlock/<?php echo $ch['id'];?>"><?php echo __('Unlock');?></a>
								<?php } ?>
								</td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
						<?php } else{ ?>
						<div class="alert alert-danger" role="alert"><?php echo __('No Characters Found.');?></div>
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