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
						<h2 class="title"><?php echo __($about['user_description']); ?></h2>
						<div class="mb-5">
						<?php
						if(isset($error)){
							echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
						}
						if(isset($success)){
							echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
						}	
						?>
							<?php if(isset($js)){ ?>
							<script src="<?php echo $js; ?>"></script>
							<?php } ?>
							<?php if(!empty($guilds)){ ?>
                            <table class="table dmn-rankings-table table-striped">
                                <thead>
                                    <tr>
                                        <th><?php echo __('Guild'); ?></th>
                                        <th><?php echo __('Discord'); ?></th>
                                        <th><?php echo __('Action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($guilds AS $guild){ ?>
                                    <tr>
                                        <td><?php echo $guild[0];?></td>
                                        <td><?php if($guild[1] != false){ echo $guild[1]['discord_link']; } else { echo '-'; } ?></td>
                                        <td><a href="<?php echo $this->config->base_url;?>guild-recruit/update/<?php echo $guild[0];?>"><?php echo __('Update');?></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php } else { ?>
                            <?php echo __('You don\'t have any guilds.'); ?>
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