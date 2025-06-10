<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.header');
?>
<div class="col-md-12">
	<div style="background: url('<?php echo $this->config->base_url; ?>assets/plugins/images/battle_pass/header.png') no-repeat top center; height: 1419px!important;"></div>
</div>
<div class="col-md-12 col-sm-12">
	<div class="bg-light-dark">
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
		<link rel="stylesheet" href="<?php echo $this->config->base_url; ?>assets/plugins/css/battle_pass_realv2.css">
		<link rel="stylesheet" href="<?php echo $this->config->base_url; ?>assets/plugins/css/jquery.alertable.css">
		<script type="text/javascript" src="<?php echo $this->config->base_url; ?>assets/plugins/js/jquery.alertable.min.js" /></script>
		<div style="background-image: url('<?php echo $this->config->base_url; ?>assets/plugins/images/battle_pass/dot.png')!important;">
			<div style="padding:60px;">
				<div class="container-battlepass bg-major-black hidden-xs hidden-sm">
					<div class="row">
						<div class="col-md-12 col-lg-7">
							<div class="container-bp-info bg-light-dark">
								<div class="row">
									<div class="col-md-8 pt-10">
										<table class="tbl-battlepass simple">
											<tr>
												<td>
													<?php echo __('Purchase Date');?>:
													<span>
													<?php if(in_array($pass['pass_type'], [1, 2])){ ?>
													<?php 
													try{
														$datePurchased = new DateTime($pass['date']);
														$timeStamp = $datePurchased->getTimestamp();
													} catch (Exception $e) {
														$datePurchased = DateTime::createFromFormat('M d Y H:i:s:A', $pass['date']);
														$timeStamp = $datePurchased->getTimestamp();
													}
													echo date('Y/m/d', $timeStamp);
													?>
													<?php } else { ?>
													-
													<?php } ?>
													</span>
												</td>
											</tr>
											<tr>
												<td style="line-height: 120%;">
													<br/>
													<?php echo __('Time Left');?>: 
													<span>
													<?php 
													if(strtotime($plugin_config['battle_pass_end_time']) < time()){
														$countDown = '';
													}
													else{
														$countDown = $this->website->date_diff(date('Y-m-d', time()), $plugin_config['battle_pass_end_time']);
													}
													if($countDown != ''){ 
													?>
													<?php echo $countDown;?>
													<?php } else { ?>
													<?php echo __('Season Ended');?>
													<?php } ?>
													</span>
												</td>
											</tr>
											<tr>
												<td class="time" style="line-height: 120%;"><br/>(<?php echo __('Closing date');?>: <?php echo $plugin_config['battle_pass_end_time'];?>)</td>
											</tr>
										</table>
									</div>
									<div class="col-md-4 text-center">
										<br/>
										<?php if(!$is_logged_in){ ?>
										<a href="<?php echo $this->config->base_url;?>login?return=battle-pass" class="vs-btn2 outline3"><?php echo __('Login');?></a>	
										<br/><br/>
										<a href="#" class="vs-btn2 outline3">-</a>
										<br/>
										<?php } else { ?>
										<a href="#" class="vs-btn2 outline3"><?php echo $this->session->userdata(['user' => 'username']);?></a>	
										<br/><br/>
										<a href="<?php echo $this->config->base_url;?>support" class="vs-btn2 outline3"><?php echo __('Support');?></a>
										<br/>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-12 col-lg-4 hidden-xs hidden-sm">
							<a <?php if(in_array($pass['pass_type'], [1, 2]) || !$is_logged_in){ ?><?php } else { ?>href="<?php echo $this->config->base_url;?>battle-pass/upgrade"<?php } ?> class="vs-btn gradient-btn h4 mt-15 mb-0 btn-download <?php if(in_array($pass['pass_type'], [1, 2]) || !$is_logged_in){ ?>disabled<?php } ?>"><?php echo __('Purchase BattlePass');?></a>
							<br>
							<a <?php if(in_array($pass['pass_type'], [0, 2]) || !$is_logged_in){ ?><?php } else { ?>href="<?php echo $this->config->base_url;?>battle-pass/upgrade"<?php } ?> class="vs-btn gradient-btn h4 mt-15 mb-0 btn-download <?php if(in_array($pass['pass_type'], [0, 2]) || !$is_logged_in){ ?>disabled<?php } ?>"><?php echo __('Upgrade BattlePass');?></a>
						</div>
					</div>
				</div>
				<div class="container-bp-info hidden-lg hidden-md">
					<div class="row">
						<div class="col-md-12">
							<table class="tbl-battlepass simple">
								<tr>
									<td style="line-height: 80%;">
										<br/>
										<?php echo __('Purchase Date');?>:
										<span>
										<?php if(in_array($pass['pass_type'], [1, 2])){ ?>
										<?php 
										try{
											$datePurchased = new DateTime($pass['date']);
											$timeStamp = $datePurchased->getTimestamp();
										} catch (Exception $e) {
											$datePurchased = DateTime::createFromFormat('M d Y H:i:s:A', $pass['date']);
											$timeStamp = $datePurchased->getTimestamp();
										}
										echo date('Y/m/d', $timeStamp);
										?>
										<?php } else { ?>
										-
										<?php } ?>
										</span>
									</td>
								</tr>
							</table>
						</div>
						<div class="col-md-8 col-sm-8">
							<table class="tbl-battlepass simple">
								<tr>
								<td style="line-height: 120%;">
								<br/>
								<?php echo __('Time Left');?>: 
								<span>
								<?php 
								if(strtotime($plugin_config['battle_pass_end_time']) < time()){
									$countDown = '';
								}
								else{
									$countDown = $this->website->date_diff(date('Y-m-d', time()), $plugin_config['battle_pass_end_time']);
								}
								if($countDown != ''){ 
								?>
								<?php echo $countDown;?>
								<?php } else { ?>
								<?php echo __('Season Ended');?>
								<?php } ?>
								</span>
								</td>
								</tr>
								<tr>
									<td class="time" style="line-height: 120%;"><br/>(<?php echo __('Closing date');?>: <?php echo $plugin_config['battle_pass_end_time'];?>)</td>
								</tr>
							</table>
						</div>
						<div class="col-md-4 col-sm-4">
							<br/>
							<?php if(!$is_logged_in){ ?>
							<a href="<?php echo $this->config->base_url;?>login?return=battle-pass" class="login-button hidden-sm hidden-xs"><?php echo __('Login');?></a>	
							<br/><br/><br/><br/>
							<a href="#" class="info-button hidden-sm hidden-xs">-</a>
							<br/>
							<?php } else { ?>
							<a href="#" class="login-button hidden-sm hidden-xs"><?php echo $this->session->userdata(['user' => 'username']);?></a>	
							<br/><br/><br/><br/>
							<a href="<?php echo $this->config->base_url;?>support" class="info-button hidden-sm hidden-xs"><?php echo __('Support');?></a>
							<br/>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="battlepass-rewards">
				<div class="row px-battlepass">
				<?php
					if($progress['pass_level'] == -1)
						$progress['pass_level'] = $last_completed_level;
				?>
					<div class="col-sm-1">
						<table class="hidden-xs hidden-sm hidden-md">
							<thead style="height: 186px;">
								<tr><td></td></tr>
							</thead>
							<tbody>
								<?php
								if(!empty($pass_levels)){
								$i = 1;
								foreach($pass_levels AS $key => $dayData){
								?>
								<tr>
									<td style="height: 108px!important; text-align: right; vertical-align: middle;"><?php echo __('Level');?> <b><?php echo $i;?></b></td>
								</tr> 
								<?php	
									$i++;
								}
								}
								?>
							</tbody>
						</table>
					</div>
					<div class="col-lg-3 col-md-6" style="min-width: 330px!important; max-width: 350px!important;">
						<table style="border-collapse: collapse !important;" class="simple">
							<thead class="battlepass-ticket-top">
								<tr>
									<td style="padding: 0px; width: 75px; text-align: center;">
										<img src="<?php echo $this->config->base_url;?>assets/plugins/images/battle_pass/free_pass.png" style="margin-top: -20px;">
									</td>
								</tr>
							</thead>
							<tbody class="battlepass-ticket-mid">
							<?php
							if(!empty($pass_levels)){
							$i = 1;
							$rewardStatus = false;
							foreach($pass_levels AS $key => $dayData){
							?>
							<tr>
								<td style="padding-left: 50%; padding-top: 8px; padding-bottom: 8px;">
								<div class="tooltip-bp">
									<div class="battlepass-ticket-reward">
										<div class="battlepass-ticket-reward-top" style="text-align: center;">
											<img src="<?php echo $dayData['free_pass_image'];?>" style="width: 60px; height: 60px; margin-top: 10px !important;">
										</div>
										<div class="battlepass-ticket-reward-bot">
											<?php
												$fr1 = '';
												$fr2 = '';
												$rewardStatus = $this->Mbattle_pass->checkLevelStatus($this->session->userdata(['user' => 'username']), $this->session->userdata(['user' => 'server']), $plugin_config['battle_pass_start_time'], $dayData['id']);
												if($rewardStatus == false){
													$rewardStatus = [];
													$rewardStatus['is_completed'] = 0;
													$rewardStatus['is_free_reward_taken'] = 0;
													$rewardStatus['is_silver_reward_taken'] = 0;
													$rewardStatus['is_platinum_reward_taken'] = 0;
												}
												if(!empty($pass_rewards[$dayData['id']])){
													$a = 0;
													foreach($pass_rewards[$dayData['id']] AS $fKey => $fRewardData){
														if($fRewardData['pass_type'] == 0){
															if($a == 0){
																if(!in_array($fRewardData['reward_type'], [8,9,10,11])){
																	if(in_array($fRewardData['reward_type'], [5,6,7])){
																		$fRewardData['amount'] = $this->website->zen_format($fRewardData['amount']);
																	}
																	$fr1 = $fRewardData['amount'].' '.$this->Mbattle_pass->getRewardTypeData($fRewardData['reward_type'], $this->session->userdata(['user' => 'server']));
																}
																else{
																	if($fRewardData['reward_type'] == 11){
																		$fr1 = $fRewardData['title'];
																	}
																	else{
																		if($fRewardData['reward_type'] == 8 && $fRewardData['vip_type'] != ''){
																			$vipData = $this->Mbattle_pass->get_vip_package_title($fRewardData['vip_type']);
																			$fr1 = $vipData['package_title'].' ['.$this->website->seconds2days($vipData['vip_time']).']';
																		}
																		else{
																			if(!empty($fRewardData['item_data'])){
																				if(isset($fRewardData['display_item_title']) && $fRewardData['display_item_title'] == 1){
																					$fr1 = $fRewardData['title'];
																				}
																				else{
																					$fr1 = '<span id="main_ritem_free_'.$i.'_0" data-info="'.$fRewardData['item_data'][0]['hex'].'">'.strip_tags($fRewardData['item_data'][0]['name']).'</span>';
																				}
																			}
																		}
																	}
																}
															}

															if($a == 1){
																if(!in_array($fRewardData['reward_type'], [8,9,10,11])){
																	if(in_array($fRewardData['reward_type'], [5,6,7])){
																		$fRewardData['amount'] = $this->website->zen_format($fRewardData['amount']);
																	}
																	$fr2 = $fRewardData['amount'].' '.$this->Mbattle_pass->getRewardTypeData($fRewardData['reward_type'], $this->session->userdata(['user' => 'server']));
																}
																else{
																	if($fRewardData['reward_type'] == 11){
																		$fr2 = $fRewardData['title'];
																	}
																	else{
																		if($fRewardData['reward_type'] == 8 && $fRewardData['vip_type'] != ''){
																			$vipData = $this->Mbattle_pass->get_vip_package_title($fRewardData['vip_type']);
																			$fr2 = $vipData['package_title'].' ['.$this->website->seconds2days($vipData['vip_time']).']';
																		}
																		else{
																			if(!empty($fRewardData['item_data'])){
																				if(isset($fRewardData['display_item_title']) && $fRewardData['display_item_title'] == 1){
																					$fr2 = $fRewardData['title'];
																				}
																				else{
																					$fr2 = '<span id="main_ritem_free_'.$i.'_1" data-info="'.$fRewardData['item_data'][0]['hex'].'">'.strip_tags($fRewardData['item_data'][0]['name']).'</span>';
																				}
																			}
																		}
																	}
																}
															}
															$a++;
														}
													}
												}
											?>	
											<div style="height: 50px; margin-top: -5px; margin-bottom: -23px; margin-left: -8px; width: calc(100% + 16px); color: #696868;">
												<?php echo $fr1;?>
												<?php if($fr2 != '') { ?><br /><span class="gold">+<?php echo $fr2;?></span><?php } ?>
											</div>
											<br>
											<?php if($rewardStatus['is_completed'] == 0){ ?>
												<span class="login-button battlepass-claim required-button"><?php echo __('Incomplete');?></span>
											<?php } else { ?>
												<?php if($rewardStatus['is_free_reward_taken'] == 0){ ?>
													<span class="login-button battlepass-claim required-button"><a class="get_reward" href="javascript:;" id="reward_free_<?php echo $i; ?>" data-action="<?php echo  $this->config->base_url.'battle-pass/claim/'.$dayData['id']; ?>/0"><?php echo __('Claim reward');?></a></span>
												<?php } else { ?>
													<span class="battlepass-claim required-button"><?php echo __('Completed');?></span>
												<?php } ?>
											<?php } ?>
										</div>
									</div>
									<table class="tooltiptext simple">
										<tbody>
											<?php if(!$is_logged_in){ ?>
											<tr>
											<td>
											<b style="color: #f5c870;"><?php echo __('Quests');?></b>
											</td>
											</tr>
											<tr>
											<td style="padding-left: 8px; padding-right: 8px; text-align: left!important;">
											<div style="line-height: 100%!important; padding-left: 5px;">
											<i style="font-size: 12px;">- <?php echo __('To be able to see the quests, log in');?>.</i><br><br>
											</div>
											</td>
											</tr>
											<?php } else {
											$b = 0;
											$afr = '';
											if(isset($pass_rewards[$dayData['id']])){
												foreach($pass_rewards[$dayData['id']] AS $fKey => $fRewardData){
													if($fRewardData['pass_type'] == 0){
														if($b >= 0){
															if(!in_array($fRewardData['reward_type'], [8,9,10,11])){
																if(in_array($fRewardData['reward_type'], [5,6,7])){
																	$fRewardData['amount'] = $this->website->zen_format($fRewardData['amount']);
																}
																$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$fRewardData['amount'].' '.$this->Mbattle_pass->getRewardTypeData($fRewardData['reward_type'], $this->session->userdata(['user' => 'server'])).'</i><br /></div></td></tr>';
															}
															else{
																if($fRewardData['reward_type'] == 11){
																	$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$fRewardData['title'].'</i><br /></div></td></tr>';
																}
																else{
																	if($fRewardData['reward_type'] == 8 && $fRewardData['vip_type'] != ''){
																		$vipData = $this->Mbattle_pass->get_vip_package_title($fRewardData['vip_type']);
																		$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$vipData['package_title'].' ['.$this->website->seconds2days($vipData['vip_time']).']'.'</i><br /></div></td></tr>';
																	}
																	else{
																		if(!empty($fRewardData['item_data'])){
																			if(isset($fRewardData['display_item_title']) && $fRewardData['display_item_title'] == 1){
																				$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$fRewardData['title'].'</i><br /></div></td></tr>';
																			}
																			else{
																				$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- <span id="additional_ritem_free_'.$i.'_'.$b.'" data-info="'.$fRewardData['item_data'][0]['hex'].'">'.strip_tags($fRewardData['item_data'][0]['name']).'</span></i><br /></div></td></tr>';
																			}
																		}
																	}
																}
															}
														}
														$b++;
													}	
												}
											}
											if($afr != ''){
											?>
											<tr>
												<td style="padding-top: 7px;">
												<b style="color: #70c8f5;"><?php echo __('Rewards');?></b>
												</td>
											</tr>
											<?php echo $afr;?>

											<?php } ?>
											<tr>
												<td style="padding-top: 25px;">
													<b style="color: #f5c870;"><?php echo __('Requirements');?></b>
												</td>
											</tr>
											<tr>
											<td style="padding-left: 8px; padding-right: 8px;">
											<?php 
											if(!empty($pass_requirements[$dayData['id']])){
												foreach($pass_requirements[$dayData['id']] AS $rkey => $requirement){
													$amount = 0;
													$title = $requirement['title'];
													if($requirement['req_type'] == 1){
														$amount = $requirement['total_votes'];
													}
													if($requirement['req_type'] == 2){
														$amount = $requirement['total_donate'];
													}
													if($requirement['req_type'] == 3){
														$amount = $requirement['mamount'];
														$title = __('Kill').' '.$this->npc->name_by_id($requirement['monsters']);
													}
													if($requirement['req_type'] == 4){
														$amount = $requirement['total_kills'];
													}
													if($requirement['req_type'] == 5 || $requirement['req_type'] == 6 || $requirement['req_type'] == 9){
														$amount = $requirement['total_stats'];
													}
													if($requirement['req_type'] == 7){
														$amount = $requirement['total_items_buy'];
													}
													if($requirement['req_type'] == 8){
														$amount = $requirement['total_items_sell'];
													}
													if($requirement['req_type'] == 10){
														$amount = $requirement['item']['amount'];
														$title = __('Collect').' <span class="collectItem" data-info="'.$requirement['item']['hex'].'">'.strip_tags($requirement['item']['name']).'</span>';
													}
													$completeProgress = 0;
													$progressPerc = 0;
													if($progress['pass_level'] == $dayData['id']){
														if(isset($user_requirement_data[$progress['pass_level']][$rkey]['completed']) && $user_requirement_data[$progress['pass_level']][$rkey]['completed'] == 1){
															$completeProgress = $amount;
															$progressPerc = 100;
														}
														else{
															if(isset($user_requirement_data[$progress['pass_level']][$rkey]['completeProgress'])){
																$completeProgress = $user_requirement_data[$progress['pass_level']][$rkey]['completeProgress'];
																$progressPerc = $user_requirement_data[$progress['pass_level']][$rkey]['progressPerc'];
															}
															else{
																$completeProgress = 0;
																$progressPerc = 0;

															}
														}
													}
													if($rewardStatus['is_completed'] == 1){
														$completeProgress = $amount;
														$progressPerc = 100;
													}
											?>
											<div>
												<i><?php echo $title;?></i>
												<div id="progress-bar">
													<div id="progress-perc" style="width: <?php echo $progressPerc;?>%;" class="progress-red"></div>
												</div>
												<div id="progress-count"><?php echo $completeProgress;?> / <?php echo $amount;?></div>
											</div>
											<?php
												}
											}
											?>
											</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								</td>
							</tr>
							<?php
								$i++;
							}
							}
							?>
							</tbody>
							<tbody class="battlepass-ticket-bot">
								<tr>
									<td style=" height: 115px!important;"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-lg-3 col-md-6" style="min-width: 330px!important; max-width: 350px!important;">
						<table style="border-collapse: collapse !important;" class="simple">
							<thead class="battlepass-ticket-top">
								<tr>
									<td style="padding: 0px; width: 75px; text-align: center;">
										<img src="<?php echo $this->config->base_url;?>assets/plugins/images/battle_pass/silver_pass.png" style="margin-top: -20px;">
									</td>
								</tr>
							</thead>
							<tbody class="battlepass-ticket-mid">
							<?php
							if(!empty($pass_levels)){
							$i = 1;
							foreach($pass_levels AS $key => $dayData){
							?>
							<tr>
								<td style="padding-left: 50%; padding-top: 8px; padding-bottom: 8px;">
								<div class="tooltip-bp">
									<div class="battlepass-ticket-reward">
										<div class="battlepass-ticket-reward-top" style="text-align: center;">
											<img src="<?php echo $dayData['silver_pass_image'];?>" style="width: 60px; height: 60px; margin-top: 10px !important;">
										</div>
										<div class="battlepass-ticket-reward-bot">
											<?php
												$fr1 = '';
												$fr2 = '';
												
												if(!empty($pass_rewards[$dayData['id']])){
													$a = 0;
													foreach($pass_rewards[$dayData['id']] AS $fKey => $fRewardData){
														if($fRewardData['pass_type'] == 1){
															if($a == 0){
																if(!in_array($fRewardData['reward_type'], [8,9,10,11])){
																	if(in_array($fRewardData['reward_type'], [5,6,7])){
																		$fRewardData['amount'] = $this->website->zen_format($fRewardData['amount']);
																	}
																	$fr1 = $fRewardData['amount'].' '.$this->Mbattle_pass->getRewardTypeData($fRewardData['reward_type'], $this->session->userdata(['user' => 'server']));
																}
																else{
																	if($fRewardData['reward_type'] == 11){
																		$fr1 = $fRewardData['title'];
																	}
																	else{
																		if($fRewardData['reward_type'] == 8 && $fRewardData['vip_type'] != ''){
																			$vipData = $this->Mbattle_pass->get_vip_package_title($fRewardData['vip_type']);
																			$fr1 = $vipData['package_title'].' ['.$this->website->seconds2days($vipData['vip_time']).']';
																		}
																		else{
																			if(!empty($fRewardData['item_data'])){
																				if(isset($fRewardData['display_item_title']) && $fRewardData['display_item_title'] == 1){
																					$fr1 = $fRewardData['title'];
																				}
																				else{
																					$fr1 = '<span id="main_ritem_silver_'.$i.'_0" data-info="'.$fRewardData['item_data'][0]['hex'].'">'.strip_tags($fRewardData['item_data'][0]['name']).'</span>';
																				}
																			}
																		}
																	}
																}
															}

															if($a == 1){
																if(!in_array($fRewardData['reward_type'], [8,9,10,11])){
																	if(in_array($fRewardData['reward_type'], [5,6,7])){
																		$fRewardData['amount'] = $this->website->zen_format($fRewardData['amount']);
																	}
																	$fr2 = $fRewardData['amount'].' '.$this->Mbattle_pass->getRewardTypeData($fRewardData['reward_type'], $this->session->userdata(['user' => 'server']));
																}
																else{
																	if($fRewardData['reward_type'] == 11){
																		$fr2 = $fRewardData['title'];
																	}
																	else{
																		if($fRewardData['reward_type'] == 8 && $fRewardData['vip_type'] != ''){
																			$vipData = $this->Mbattle_pass->get_vip_package_title($fRewardData['vip_type']);
																			$fr2 = $vipData['package_title'].' ['.$this->website->seconds2days($vipData['vip_time']).']';
																		}
																		else{
																			if(!empty($fRewardData['item_data'])){
																				if(isset($fRewardData['display_item_title']) && $fRewardData['display_item_title'] == 1){
																					$fr2 = $fRewardData['title'];
																				}
																				else{
																					$fr2 = '<span id="main_ritem_silver_'.$i.'_1" data-info="'.$fRewardData['item_data'][0]['hex'].'">'.strip_tags($fRewardData['item_data'][0]['name']).'</span>';
																				}
																			}
																		}
																	}
																}
															}
															$a++;
														}
													}
												}
											?>	
											<div style="height: 50px; margin-top: -5px; margin-bottom: -23px; margin-left: -8px; width: calc(100% + 16px); color: #696868;">
												<?php echo $fr1;?>
												<?php if($fr2 != '') { ?><br /><span class="gold">+<?php echo $fr2;?></span><?php } ?>
											</div>
											<br>
											<?php if($pass['pass_type'] > 0){ ?>
											<?php if($rewardStatus['is_completed'] == 0){ ?>
												<span class="login-button battlepass-claim required-button"><?php echo __('Incomplete');?></span>
											<?php } else { ?>
												<?php if($rewardStatus['is_silver_reward_taken'] == 0){ ?>
													<span class="login-button battlepass-claim required-button"><a class="get_reward" href="javascript:;" id="reward_silver_<?php echo $i; ?>" data-action="<?php echo  $this->config->base_url.'battle-pass/claim/'.$dayData['id']; ?>/1"><?php echo __('Claim reward');?></a></span>
												<?php } else { ?>
													<span class="battlepass-claim required-button"><?php echo __('Completed');?></span>
												<?php } ?>
											<?php } ?>
											<?php } else { ?>
												<span class="login-button battlepass-claim required-button"><?php echo __('Upgrade pass');?></span>
											<?php } ?>
										</div>
									</div>
									<table class="tooltiptext">
										<tbody>
											<?php if(!$is_logged_in){ ?>
											<tr>
											<td>
											<b style="color: #f5c870;"><?php echo __('Quests');?></b>
											</td>
											</tr>
											<tr>
											<td style="padding-left: 8px; padding-right: 8px; text-align: left!important;">
											<div style="line-height: 100%!important; padding-left: 5px;">
											<i style="font-size: 12px;">- <?php echo __('To be able to see the quests, log in');?>.</i><br><br>
											</div>
											</td>
											</tr>
											<?php } else {
											$b = 0;
											$afr = '';
											if(isset($pass_rewards[$dayData['id']])){
												foreach($pass_rewards[$dayData['id']] AS $fKey => $fRewardData){
													if($fRewardData['pass_type'] == 1){
														if($b >= 0){
															if(!in_array($fRewardData['reward_type'], [8,9,10,11])){
																if(in_array($fRewardData['reward_type'], [5,6,7])){
																	$fRewardData['amount'] = $this->website->zen_format($fRewardData['amount']);
																}
																$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$fRewardData['amount'].' '.$this->Mbattle_pass->getRewardTypeData($fRewardData['reward_type'], $this->session->userdata(['user' => 'server'])).'</i><br /></div></td></tr>';
															}
															else{
																if($fRewardData['reward_type'] == 11){
																	$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$fRewardData['title'].'</i><br /></div></td></tr>';
																}
																else{
																	if($fRewardData['reward_type'] == 8 && $fRewardData['vip_type'] != ''){
																		$vipData = $this->Mbattle_pass->get_vip_package_title($fRewardData['vip_type']);
																		$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$vipData['package_title'].' ['.$this->website->seconds2days($vipData['vip_time']).']'.'</i><br /></div></td></tr>';
																	}
																	else{
																		if(!empty($fRewardData['item_data'])){
																			if(isset($fRewardData['display_item_title']) && $fRewardData['display_item_title'] == 1){
																				$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$fRewardData['title'].'</i><br /></div></td></tr>';
																			}
																			else{
																				$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- <span id="additional_ritem_silver_'.$i.'_'.$b.'" data-info="'.$fRewardData['item_data'][0]['hex'].'">'.strip_tags($fRewardData['item_data'][0]['name']).'</span></i><br /></div></td></tr>';
																			}
																		}
																	}
																}
															}
														}
														$b++;
													}	
												}
											}
											if($afr != ''){
											?>
											<tr>
												<td style="padding-top: 7px;">
												<b style="color: #70c8f5;"><?php echo __('Rewards');?></b>
												</td>
											</tr>
											<?php echo $afr;?>

											<?php } ?>
											<tr>
												<td style="padding-top: 25px;">
													<b style="color: #f5c870;"><?php echo __('Requirements');?></b>
												</td>
											</tr>
											<tr>
											<td style="padding-left: 8px; padding-right: 8px;">
											<div>
												<i><?php echo __('Complete').' '.__('day');?> <?php echo $i;?> <?php echo __('free pass');?></i>
												<div id="progress-bar">
													<div id="progress-perc" style="width: <?php if($rewardStatus['is_completed'] == 1){ echo 100; } else { echo 0; } ?>%;" class="progress-red"></div>
												</div>
												<div id="progress-count"><?php if($rewardStatus['is_completed'] == 1){ echo 1; } else { echo 0; } ?> / 1</div>
											</div>
											</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								</td>
							</tr>
							<?php
								$i++;
							}
							}
							?>
							</tbody>
							<tbody class="battlepass-ticket-bot">
							<tr>
							<td style=" height: 115px!important;"></td>
							</tr>
							</tbody>
						</table>
						<br><br><br><br>
					</div>
					<div class="col-lg-3 col-md-12" style="min-width: 330px!important; max-width: 350px!important;">
						<table class="simple" style="border-collapse: collapse !important;">
							<thead class="battlepass-ticket-top">
								<tr>
									<td style="padding: 0px; width: 75px; text-align: center;">
										<img src="<?php echo $this->config->base_url;?>assets/plugins/images/battle_pass/platinum_pass.png" style="margin-top: -20px;">
									</td>
								</tr>
							</thead>
							<tbody class="battlepass-ticket-mid">
							<?php
							if(!empty($pass_levels)){
							$i = 1;
							foreach($pass_levels AS $key => $dayData){
							?>
							<tr>
								<td style="padding-left: 50%; padding-top: 8px; padding-bottom: 8px;">
								<div class="tooltip-bp">
									<div class="battlepass-ticket-reward">
										<div class="battlepass-ticket-reward-top" style="text-align: center;">
											<img src="<?php echo $dayData['platinum_pass_image'];?>" style="width: 60px; height: 60px; margin-top: 10px !important;">
										</div>
										<div class="battlepass-ticket-reward-bot">
											<?php
												$fr1 = '';
												$fr2 = '';
												if(!empty($pass_rewards[$dayData['id']])){
													$a = 0;
													foreach($pass_rewards[$dayData['id']] AS $fKey => $fRewardData){
														if($fRewardData['pass_type'] == 2){
															if($a == 0){
																if(!in_array($fRewardData['reward_type'], [8,9,10,11])){
																	if(in_array($fRewardData['reward_type'], [5,6,7])){
																		$fRewardData['amount'] = $this->website->zen_format($fRewardData['amount']);
																	}
																	$fr1 = $fRewardData['amount'].' '.$this->Mbattle_pass->getRewardTypeData($fRewardData['reward_type'], $this->session->userdata(['user' => 'server']));
																}
																else{
																	if($fRewardData['reward_type'] == 11){
																		$fr1 = $fRewardData['title'];
																	}
																	else{
																		if($fRewardData['reward_type'] == 8 && $fRewardData['vip_type'] != ''){
																			$vipData = $this->Mbattle_pass->get_vip_package_title($fRewardData['vip_type']);
																			$fr1 = $vipData['package_title'].' ['.$this->website->seconds2days($vipData['vip_time']).']';
																		}
																		else{
																			if(!empty($fRewardData['item_data'])){
																				if(isset($fRewardData['display_item_title']) && $fRewardData['display_item_title'] == 1){
																					$fr1 = $fRewardData['title'];
																				}
																				else{
																					$fr1 = '<span id="main_ritem_platinum_'.$i.'_0" data-info="'.$fRewardData['item_data'][0]['hex'].'">'.strip_tags($fRewardData['item_data'][0]['name']).'</span>';
																				}
																			}
																		}
																	}
																}
															}

															if($a == 1){
																if(!in_array($fRewardData['reward_type'], [8,9,10,11])){
																	if(in_array($fRewardData['reward_type'], [5,6,7])){
																		$fRewardData['amount'] = $this->website->zen_format($fRewardData['amount']);
																	}
																	$fr2 = $fRewardData['amount'].' '.$this->Mbattle_pass->getRewardTypeData($fRewardData['reward_type'], $this->session->userdata(['user' => 'server']));
																}
																else{
																	if($fRewardData['reward_type'] == 11){
																		$fr2 = $fRewardData['title'];
																	}
																	else{
																		if($fRewardData['reward_type'] == 8 && $fRewardData['vip_type'] != ''){
																			$vipData = $this->Mbattle_pass->get_vip_package_title($fRewardData['vip_type']);
																			$fr2 = $vipData['package_title'].' ['.$this->website->seconds2days($vipData['vip_time']).']';
																		}
																		else{
																			if(!empty($fRewardData['item_data'])){
																				if(isset($fRewardData['display_item_title']) && $fRewardData['display_item_title'] == 1){
																					$fr2 = $fRewardData['title'];
																				}
																				else{
																					$fr2 = '<span id="main_ritem_platinum_'.$i.'_1" data-info="'.$fRewardData['item_data'][0]['hex'].'">'.strip_tags($fRewardData['item_data'][0]['name']).'</span>';
																				}
																			}
																		}
																	}
																}
															}
															$a++;
														}
													}
												}
											?>	
											<div style="height: 50px; margin-top: -5px; margin-bottom: -23px; margin-left: -8px; width: calc(100% + 16px); color: #696868;">
												<?php echo $fr1;?>
												<?php if($fr2 != '') { ?><br /><span class="gold">+<?php echo $fr2;?></span><?php } ?>
											</div>
											<br>
											<?php if($pass['pass_type'] > 1){ ?>
											<?php if($rewardStatus['is_completed'] == 0){ ?>
												<span class="login-button battlepass-claim required-button"><?php echo __('Incomplete');?></span>
											<?php } else { ?>
												<?php if($rewardStatus['is_platinum_reward_taken'] == 0){ ?>
													<span class="login-button battlepass-claim required-button"><a class="get_reward" href="javascript:;" id="reward_platinum_<?php echo $i; ?>" data-action="<?php echo  $this->config->base_url.'battle-pass/claim/'.$dayData['id']; ?>/2"><?php echo __('Claim reward');?></a></span>
												<?php } else { ?>
													<span class="battlepass-claim required-button"><?php echo __('Completed');?></span>
												<?php } ?>
											<?php } ?>
											<?php } else { ?>
												<span class="login-button battlepass-claim required-button"><?php echo __('Upgrade pass');?></span>
											<?php } ?>
										</div>
									</div>
									<table class="tooltiptext">
										<tbody>
											<?php if(!$is_logged_in){ ?>
											<tr>
											<td>
											<b style="color: #f5c870;"><?php echo __('Quests');?></b>
											</td>
											</tr>
											<tr>
											<td style="padding-left: 8px; padding-right: 8px; text-align: left!important;">
											<div style="line-height: 100%!important; padding-left: 5px;">
											<i style="font-size: 12px;">- <?php echo __('To be able to see the quests, log in');?>.</i><br><br>
											</div>
											</td>
											</tr>
											<?php } else {
											$b = 0;
											$afr = '';
											if(isset($pass_rewards[$dayData['id']])){
												foreach($pass_rewards[$dayData['id']] AS $fKey => $fRewardData){
													if($fRewardData['pass_type'] == 2){
														if($b >= 0){
															if(!in_array($fRewardData['reward_type'], [8,9,10,11])){
																if(in_array($fRewardData['reward_type'], [5,6,7])){
																	$fRewardData['amount'] = $this->website->zen_format($fRewardData['amount']);
																}
																$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$fRewardData['amount'].' '.$this->Mbattle_pass->getRewardTypeData($fRewardData['reward_type'], $this->session->userdata(['user' => 'server'])).'</i><br /></div></td></tr>';
															}
															else{
																if($fRewardData['reward_type'] == 11){
																	$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$fRewardData['title'].'</i><br /></div></td></tr>';
																}
																else{
																	if($fRewardData['reward_type'] == 8 && $fRewardData['vip_type'] != ''){
																		$vipData = $this->Mbattle_pass->get_vip_package_title($fRewardData['vip_type']);
																		$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$vipData['package_title'].' ['.$this->website->seconds2days($vipData['vip_time']).']'.'</i><br /></div></td></tr>';
																	}
																	else{
																		if(!empty($fRewardData['item_data'])){
																			if(isset($fRewardData['display_item_title']) && $fRewardData['display_item_title'] == 1){
																				$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- '.$fRewardData['title'].'</i><br /></div></td></tr>';
																			}
																			else{
																				$afr .= '<tr><td style="padding-left: 8px; padding-right: 8px; text-align: left!important;"><div style="line-height: 100%!important; padding-left: 5px;"><i style="font-size: 9px;">- <span id="additional_ritem_platinum_'.$i.'_'.$b.'" data-info="'.$fRewardData['item_data'][0]['hex'].'">'.strip_tags($fRewardData['item_data'][0]['name']).'</span></i><br /></div></td></tr>';
																			}
																		}
																	}
																}
															}
														}
														$b++;
													}	
												}
											}
											if($afr != ''){
											?>
											<tr>
												<td style="padding-top: 7px;">
												<b style="color: #70c8f5;"><?php echo __('Rewards');?></b>
												</td>
											</tr>
											<?php echo $afr;?>

											<?php } ?>
											<tr>
												<td style="padding-top: 25px;">
													<b style="color: #f5c870;"><?php echo __('Requirements');?></b>
												</td>
											</tr>
											<tr>
											<td style="padding-left: 8px; padding-right: 8px;">
											<div>
												<i><?php echo __('Complete').' '.__('day');?> <?php echo $i;?> <?php echo __('free pass');?></i>
												<div id="progress-bar">
													<div id="progress-perc" style="width: <?php if($rewardStatus['is_completed'] == 1){ echo 100; } else { echo 0; } ?>%;" class="progress-red"></div>
												</div>
												<div id="progress-count"><?php if($rewardStatus['is_completed'] == 1){ echo 1; } else { echo 0; } ?> / 1</div>
											</div>
											</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								</td>
							</tr>
							<?php
								$i++;
							}
							}
							?>
							</tbody>
							<tbody class="battlepass-ticket-bot">
							<tr>
							<td style=" height: 115px!important;">
							<div style="margin-top: -45px; font-size: 10px; font-style: italic; color: #fff;display:none;">
							</div>
							</td>
							</tr>
							</tbody>
						</table>
						<br><br><br><br>
					</div>
					<div class="col-sm-1">
						<table class="hidden-xs hidden-sm hidden-md">
							<thead style="height: 186px;">
								<tr><td></td></tr>
							</thead>
							<tbody>
								<?php
								if(!empty($pass_levels)){
								$i = 1;
								foreach($pass_levels AS $key => $dayData){
								?>
								<tr>
									<td style="height: 108px!important; text-align: right; vertical-align: middle;"><?php echo __('Level');?> <b><?php echo $i;?></b></td>
								</tr> 
								<?php
									$i++;
								}
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<script>
		$(document).ready(function() {
			$('span[id^="main_ritem_"], span[id^="additional_ritem_"], .collectItem').each(function () {
				App.initializeTooltip($(this), true, 'warehouse/item_info_image');
			});	
			$('.get_reward').on('click', function() {
				if($(this).data('action') != ''){
					var action = $(this).data('action');
					var that = $(this).attr('id');
					$(this).data('action', '');	
					$.alertable.prompt('<?php echo __('Select Character');?>', {
						prompt:
						 '<div class="form-group">' +
						  '<select class="alertable-input" id="sel1" name="character">' +
						  <?php 
						  if($characters != false){ 
							foreach($characters AS $char){
						  ?>
							'<option value="<?php echo $char["id"];?>"><?php echo $char["name"];?></option>' +
						  <?php
							}
						  }
						  ?>
						  '</select>' +
						'</div> ' 
					}).then(function(cdata) {
						if(typeof cdata.character != 'undefined'){
							$.ajax({
								dataType: 'json',
								method: 'post',
								url: action,
								data: {'claim': 1, 'character': cdata.character},
								success: function (data) {
									if (data.error) {
										$('#'+that).data('action', action);	
										$.alertable.alert(data.error, {
											html: true
										});	
									}
									else {
										$('#'+that).parent().html('Claimed');	
										$.alertable.alert(data.success, {
											html: true
										});
									}
								},
								error: function (xhr, ajaxOptions, thrownError){
									$('#'+that).data('action', action);		
									alert(thrownError);
								}
							});
						}
						else{
							$('#'+that).data('action', action);	
							alert('<?php echo __("Invalid character.");?>');
						}
					}, function() {
						$('#'+that).data('action', action);										
					});
				}
			});
		});
		</script>
		<?php }} ?>
	</div>
</div>		
<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.right_sidebar');
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.footer');
?>
	