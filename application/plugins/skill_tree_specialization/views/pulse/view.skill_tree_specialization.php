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
						<h2 class="title">
							<?php echo __($about['user_description']); ?>
						</h2>
						<div class="mb-5">
							<?php
							 if(isset($module_disabled)){
								echo '<div class="alert alert-danger" role="alert">' . $module_disabled . '</div>';
							} 
							else{
								if(isset($error)){
									echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
								}
								if(isset($success)){
									echo '<div class="alert alert-success" role="alert">' . $success . '</div>';
								}
								if(isset($js)){
								?>
								<script src="<?php echo $js; ?>"></script>
								<?php } ?>
								<script>
								var statsSpecialization = new statsSpecialization();
								statsSpecialization.setUrl('<?php echo $this->config->base_url . $this->request->get_controller();?>');
								$(document).ready(function () {
									$('a[id^="specialization**"]').each(function () {
										App.initializeTooltip($(this), false);
									});
									$('a[id^="specialization**"]').on('click', function (e) {
										e.preventDefault();
										var name = $(this).attr("id").split("**")[1];
										var char_id = $(this).attr("id").split("**")[2];
										var id = $(this).attr("id").split("**")[3];
										e.preventDefault();
										if (App.confirmMessage(App.lc.translate('This function will save your current stats into this specialization and load stats from specialization to your character.').fetch())) {
											statsSpecialization.load(name, char_id, id);
										}
									});
									
									$('a[id^="remove**"]').on('click', function (e) {
										e.preventDefault();
										var name = $(this).attr("id").split("**")[1];
										var char_id = $(this).attr("id").split("**")[2];
										var id = $(this).attr("id").split("**")[3];
										e.preventDefault();
										if (App.confirmMessage(App.lc.translate('This function will remove stats specialization').fetch())) {
											statsSpecialization.remove(name, char_id, id);
										}
									});
								});
								</script>
								<?php
								if (!empty($char_list)){
									foreach ($char_list as $chars){
								?>
									<table class="table dmn-rankings-table table-striped">
										<thead>
											<tr>
												<th colspan="2" style="text-align:center;"><?php echo $chars['Name']; ?></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo __('Level');?></td>
												<td><?php echo $chars['cLevel']; ?></td>
											</tr>
											<tr>
												<td><?php echo __('Master Level'); ?></td>
												<td><?php echo $chars['mLevel']; ?></td>
											</tr>
											<tr>
												<td colspan="2" style="text-align:center;"><a href="<?php echo $this->config->base_url;?>skill-tree-specialization/save/<?php echo $chars['Name']; ?>-<?php echo $chars['id']; ?>" class="vs-btn gradient-btn h4"><?php echo __('Save Current SkillTree');?></a></td>
											</tr>
											<tr>
												<th colspan="2" style="text-align:center;"><?php echo __('Saved Specializations');?></th>
											</tr>
											<?php if(empty($chars['specializations'])){ ?>
											<tr>
												<td colspan="2" ><div class="alert alert-primary" role="alert"><?php echo __('No specializations found.');?></div></td>
											</tr>	
											<?php 
											} else {
												foreach($chars['specializations'] AS $spec){
													$info = '<div style=\'text-align:left;\'><p>'.__('Level').': '.$spec['level'].'</p>';
													$info .= '<p>'.__('Master Level').': '.$spec['mlevel'].'</p>';
													$info .= '</div>';
											?>
												<tr id="<?php echo $spec['id'];?>">
													<td><?php echo $spec['title']; ?></td>
													<td>
														<a id="specialization**<?php echo $chars['Name'];?>**<?php echo $chars['id'];?>**<?php echo $spec['id'];?>" href="<?php echo $this->config->base_url;?>skill-tree-specialization/load/<?php echo $spec['id'];?>" class="vs-btn gradient-btn h4" data-info="<?php echo $info;?>"><?php echo __('Load Specialization');?></a>
														<a id="remove**<?php echo $chars['Name'];?>**<?php echo $chars['id'];?>**<?php echo $spec['id'];?>" href="#" class="vs-btn gradient-btn h4"><?php echo __('Remove');?></a>
													</td>
												</tr>
											<?php 
												}
											}
											?>
										</tbody>
									</table>
									<br />
								<?php	
										}
									}
									else{
										echo '<div class="alert alert-primary" role="alert">'.__('No characters found.').'</div>';	
									}
								?>
							<?php } ?>
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