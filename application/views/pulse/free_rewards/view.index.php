<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.header');
?> 
<div class="row">
  <div class="col-lg-12">
    <div class="row justify-content-between">
      <div class="col-md-auto text-center text-md-start">
        <h2 class="sec-title2 text-white font-theme3 mb-0">Free Rewards</h2>
        <p> Unlock free rewards by participating in events and completing challenges! A rewarding way to enhance your gaming experience with exclusive items and special benefits. </p>
      </div>
    </div>
    <div class="vs-blog row">
      <div class="col-lg-4">
        <div class="blog-meta has-border bg-major-black">
          <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
            <a>Battle Pass</a>
          </h2>
        </div>
        <div class="blog-content bg-major-black">
          <div class="row">
            <div class="col-lg-12 pt-10">
              <table class="mt-15-off mb-0 w-100 fs-15 text-left">
                <tr>
                  <td class="clean py-0 border-bt-1 text-center">
                    <img src="<?php echo $this->config->base_url; ?>assets/<?php echo $this->config->config_entry("main|template"); ?>/images/icons/battlepass-img.png" width="120">
                  </td>
                </tr>
                <tr>
                  <td class="clean py-0 border-bt-1 ping"> Complete daily missions and claim various rewards; </td>
                </tr>
                <tr>
                  <td class="clean py-0 border-bt-1 ping"> Upgrade your Battle Pass to receive even more rewards; </td>
                </tr>
                <tr>
                  <td class="clean py-0 border-bt-1 ping"> Totally free prizes; <br />
                    <br />
                  </td>
                </tr>
                <tr>
                  <td class="clean border-bt-0 text-center pt-20">
                    <a href="<?php echo $this->config->base_url;?>battle-pass" class="vs-btn gradient-btn"> Go to Battle Pass </a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog-meta has-border bg-major-black">
          <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
            <a>Mystery Box</a>
            <br />
          </h2>
        </div>
        <div class="blog-content bg-major-black">
          <div class="row">
            <div class="col-lg-12 pt-10">
              <table class="mt-15-off mb-0 w-100 fs-15 text-left">
                <tr>
                  <td class="clean py-0 border-bt-1 text-center">
                    <img src="<?php echo $this->config->base_url; ?>assets/<?php echo $this->config->config_entry("main|template"); ?>/images/icons/reward-img.png" width="120">
                  </td>
                </tr>
                <tr>
                  <td class="clean py-0 border-bt-1 ping"> Try your luck by opening one of our mystery boxes; </td>
                </tr>
                <tr>
                  <td class="clean py-0 border-bt-1 ping"> Crates are only available at certain times of the year; </td>
                </tr>
                <tr>
                  <td class="clean py-0 border-bt-1 ping"> Some rewards are exclusive and only found in Mystery Boxes; </td>
                </tr>
                <tr>
                  <td class="clean border-bt-0 text-center pt-20">
                    <a href="<?php echo $this->config->base_url;?>mystery-box" class="vs-btn gradient-btn"> Go to Mystery Box </a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog-meta has-border bg-major-black">
          <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
            <a>Giveaways</a>
          </h2>
        </div>
        <div class="blog-content bg-major-black">
          <div class="row">
            <div class="col-lg-12 pt-10">
              <table class="mt-15-off mb-0 w-100 fs-15 text-left">
                <tr>
                  <td class="clean py-0 border-bt-1 text-center">
                    <img src="<?php echo $this->config->base_url; ?>assets/<?php echo $this->config->config_entry("main|template"); ?>/images/icons/giveways-img.png" width="120">
                  </td>
                </tr>
                <tr>
                  <td class="clean py-0 border-bt-1 ping"> Visit the #giveaways channel to participate in regular giveaways; </td>
                </tr>
                <tr>
                  <td class="clean py-0 border-bt-1 ping"> Join the #rewards channel to receive free WCoins; </td>
                </tr>
                <tr>
                  <td class="clean py-0 border-bt-1 ping"> Join our community on Discord; <br />
                    <br />
                  </td>
                </tr>
                <tr>
                  <td class="clean border-bt-0 text-center pt-20">
                    <a href="<?php echo REALMU_V2_VARS['discord_link'];?>" target="_blank" class="vs-btn gradient-btn"> Go to Giveways </a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 space-40">&nbsp;</div>
</div>
<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.right_sidebar');
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.footer');
?>