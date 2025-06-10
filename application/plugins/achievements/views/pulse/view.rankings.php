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
						<?php
							foreach($this->website->server_list() as $key => $servers){
								if($servers['visible'] == 1){
						?>
									<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url . 'achievements/rankings/' . $key; ?>"><?php echo $servers['title']; ?></a>
						<?php
								}
							}
						?>		
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
						?>	
						<h2 class="title d-flex justify-content-between">
							<span><?php echo __($about['user_description']); ?></span>
							<span>
								<a class="vs-btn2 gradient-btn text-white" href="<?php echo $this->config->base_url;?>achievements"><?php echo __('Character List');?></a>
							</span>
						</h2>
						<div class="mb-5">
							<?php if(!empty($rankings)){ ?>
							<table class="table dmn-rankings-table table-striped">
								<thead>
									<tr>
										<th style="text-align:center;">#</th>
										<th style="text-align:center;"><?php echo __('Name');?></th>
										<th style="text-align:center;"><?php echo __('Class');?></th>
										<th style="text-align:center;"><?php echo __('Points');?></th>
										<th style="text-align:center;"><?php echo __('Achievements Completed');?></th>
									</tr>
								</thead>
								<tbody>
								<?php 
								$i = 1;
								foreach($rankings AS $rank){ 
								?>
									<tr>
										<td style="text-align:center;"><?php echo $i; ?></td>
										<td style="text-align:center;"><a href="<?php echo $this->config->base_url . 'info/character/'. bin2hex($rank['char_data']['Name']) .'/' . $server; ?>"><?php echo $rank['char_data']['Name'];?></a></td>
										<td style="text-align:center;"><?php echo $this->website-> get_char_class($rank['char_data']['Class']);?></td>
										<td style="text-align:center;"><?php echo $rank['ranking_points'];?></td>
										<td style="text-align:center;"><?php echo $rank['achievements_completed'];?> / <?php echo $rank['achievements_total'];?></td>
									</tr>
								<?php 
									$i++;
								} 
								?>
								</tbody>
							</table>	
							<?php } else { ?>
							<div class="w_note"><?php echo __('No players found');?></div>
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