<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.header');
?>
<div class="row">
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3">Summary</h2>
                </div>
            </div>
        </div>
        <div class="vs-blog row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <a>General</a>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <ul class="ul-list">
                        <li>Version: Season 19 Part 1-3</li>
                        <li>Dynamic experience (semi-hard)</li>
                        <li>Bug Bless: OFF</li>
                        <li>Drop: 20%</li>
                        <li>Zen: 20%</li>
                        <li>Max Connections: 10</li>
                        <li>Offlevel 18h</li>
                        <li>Offtrade (WCoins as currency)</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <a>Exclusive Features</a>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <ul class="ul-list">
                        <li><a href="<?php echo $this->config->base_url; ?>battle-pass">Battle Pass <span class="click-box"> click </span> </a></li>
                        <li><a href="<?php echo $this->config->base_url; ?>mystery-box">Mystery Box <span class="click-box"> click </span> </a></li>
                        <li><a href="<?php echo $this->config->base_url; ?>free-rewards">Free WCoins <span class="click-box"> click </span> </a></li>
                        <li><a href="<?php echo $this->config->base_url; ?>character-market">Character Market <span class="click-box"> click </span> </a></li>
                        <li>In-game Tutorials (Press F1) </li>
                        <li>Dashboard Side-App while you play </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <a>Main Commands</a>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <ul class="ul-list">
                        <li>F1: Guides & Tutorials</li>
                        <li>CTRL+F: Switch Mode (less lag)</li>
                        <li>F6: 3D Camera Switch</li>
                        <li>F7: Reset 3D Camera</li>
                        <li>/offlevel & /offtrade</li>
                        <li>/ware</li>
                        <li>/lock & /unlock</li>
                        <li id="journey">/add(str/agi/ene/vit/cmd)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Farm Maps</h2>
                    <p>Explore our meticulously crafted farm maps to discover the best spots for harvesting resources, ensuring efficient gathering and maximizing your yield.</p>
                </div>
            </div>
        </div>
        <div class="vs-blog row">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <table class="mb-0 w-100">
                            <tr>
                                <td class="clean py-0 w-40 order-0">
                                    <a>Map</a>
                                </td>
                                <td class="clean py-0 w-60 border-0">
                                    <a class="dh-xs-none">Main Drop</a>
                                </td>
                            </tr>
                        </table>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <table class="table-responsive">
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Map"> Maps Lv 1 ~ 400</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Main Drop"> Silver Medal <a href="#"> <span class="tag-link">check</span></a></td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Map"> Icarus</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Main Drop"> Loch's Feather</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Map"> Barracks</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Main Drop"> Condor Flame <a href="#"> <span class="tag-link">check</span></a></td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Map"> Deep Dungeon 5</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Main Drop"> Golden Sentence</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Map"> Kubera Mines</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Main Drop"> Highest Jewel of Bless Drop</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Map"> Abyss of Atlans 1</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Main Drop"> Garuda's Flame</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Map"> Abyss of Atlans 3</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Main Drop"> <b>Elite Monsters:</b> Elemental Rune</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Map"> Scorched Canyon</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Main Drop"><b>Elite Monsters:</b> Sealed Armor Sculpture</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Map"> Red Smoke Icarus</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Main Drop"> <b>Elite Monsters:</b> Guardian Elite Opt Change Pcs</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Map"> Arenil Temple</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Main Drop"> <b>Elite Monsters:</b> Necklace 1~2 Sock 1~2 Opt</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <table class="mb-0 w-100">
                            <tr>
                                <td class="clean py-0 w-40 order-0">
                                    <a>Map</a>
                                </td>
                                <td class="clean py-0 w-60 border-0">
                                    <a class="dh-xs-none">Main Drop</a>
                                </td>
                            </tr>
                        </table>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <table class="table-responsive">
                        <tr>
                            <td class="clean py-0 border-bt-1 w-30 ping" data-label="Map"> Gray Aida</td>
                            <td class="clean py-0 border-bt-1 w-70" data-label="Main Drop"> <b>Elite Monsters:</b> Excellent Rings / Pendants</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-30 ping" data-label="Map"> Burning Ketothum</td>
                            <td class="clean py-0 border-bt-1 w-70 fs-12" data-label="Main Drop"> <b>Nomal Monsters:</b> Ability Crystal [Bound] (4/day) <span class="tag-link-red"><a href="#" class="text-white">new</a></span><br/> <b>Elite Monsters:</b> Elite Guardian Enhanced, Ability Crystal (6/day)</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-30 ping" data-label="Map"> Burning Ketothum</td>
                            <td class="clean py-0 border-bt-1 w-70 fs-12" data-label="Main Drop"> <b>Nomal Monsters:</b> Ability Crystal [Bound] (4/day) <span class="tag-link-red"><a href="#" class="text-white">new</a></span><br/> <b>Elite Monsters:</b> Elite Guardian Enhanced, Ability Crystal (6/day)</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-30 ping" data-label="Map"> Kanturu Undergrounds</td>
                            <td class="clean py-0 border-bt-1 w-70 fs-12" data-label="Main Drop"> <b>Nomal Monsters:</b> Ability Crystal [Bound] (4/day) <span class="tag-link-red"><a href="#" class="text-white">new</a></span><br/> <b>Elite Monsters:</b> Guardian Enhanced Stone, Ability Crystal (6/day)</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-30 ping" data-label="Map"> Ignis Volcano</td>
                            <td class="clean py-0 border-bt-1 w-70 fs-12" data-label="Main Drop"> <b>Nomal Monsters:</b> Ability Crystal [Bound] (4/day) <span class="tag-link-red"><a href="#" class="text-white">new</a></span><br/> <b>Elite Monsters:</b> Gemstone, Ability Crystal (6/day)</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-30 ping" data-label="Map"> Bloody Tarkan</td>
                            <td class="clean py-0 border-bt-1 w-70 fs-12" data-label="Main Drop"> <b>Nomal Monsters:</b> Ability Crystal [Bound] (4/day) <span class="tag-link-red"><a href="#" class="text-white">new</a></span><br/> <b>Elite Monsters:</b> Spider Artifact Fragment, Ability Crystal (6/day)</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-30 ping" data-label="Map"> Tormenta Island</td>
                            <td class="clean py-0 border-bt-1 w-70 fs-12" data-label="Main Drop"> <b>Nomal Monsters:</b> Ability Crystal [Bound] (4/day) <span class="tag-link-red"><a href="#" class="text-white">new</a></span><br/> <b>Elite Monsters:</b> Uriel's Feather, Ability Crystal (6/day)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Battle Pass</h2>
                    <p>Complete simple quests every day and earn lots of rewards! You can do your Battle Pass as many times as you like while the season lasts! Each season we bring new rewards and new quests! Check out the types of passes below. For more information <a class="color-orange" href="<?php echo $this->config->base_url; ?>battle-pass">click here</a>.</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <a>Battle Pass Info</a>
                </h2>
            </div>
            <div class="bg-major-black pt-40 pb-10 pl-60 pr-60 pb-60 text-center">
                <a href="<?php echo $this->config->base_url; ?>battle-pass">
                <img src="https://images.realmu.net/uploads/20240301/165e14a733c343.png" class="w-100">
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Boxes Drop</h2>
                    <p>Check out detailed information on the box drops, including item rarities and sources of acquisition. Ideal for players who are planning their collection strategies and seeking to maximize their achievements in the game..</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100">
                        <tr>
                            <td class="clean py-0 w-30 order-0">
                                <a>Box</a>
                            </td>
                            <td class="clean py-0 w-30 border-0">
                                <a class="dh-xs-none">Rewards</a>
                            </td>
                            <td class="clean py-0 w-20 border-0">
                                <a class="dh-xs-none">Source</a>
                            </td>
                            <td class="clean py-0 w-20 border-0">
                                <a class="dh-xs-none">MuHelper Word</a>
                            </td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 mt-15-off lh-base fs-13">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Hunter Box <span class="tag-link-red"><a href="#"><b>new</b></a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> [3] Mysterious Stone<br/> [35] Guardian Enhanced Stone<br/> [50] Lapidary Stone<br/> [25] Jewel of Harmony<br/> [1] Ring/Necklace PvP (1~5 options)<br/> [1] Exc-Socket Necklace (1~3 Opt/Socket)<br/> [1] Jewel of Luck [rare]
                            <br/> [1] Jewel of Excess [rare]<br/> [30] Jewel of Bless<br/> [50] Jewel of Soul<br/> [50] Jewel of Creation<br/> [15] Bless of Light (Greater)
                            <br/> [25] Bless of Light (Middle)<br/> [1] Battle Shard<br/> [5] Jack O'Lantern Buff<br/> [5] Cherry Blossom Petal Buff
                        </td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Boss Emblem Exchange </td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> -</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Silver Medal <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Normal Item +8~+11<br/> Excellent Item +0 1~2 Opt</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Maps Lv 1~400 </td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> "medal"</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Box of Kundun +1 <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Item Exc. +7~+9 (T1-T2) <br/> Ring/Pendant Exc 1~2opt</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Golden Invasion & Devil Square</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> Excellent Items</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Box of Kundun +2 <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Item Exc. +7~+9 (T2-T3) <br/> Ring/Pendant Exc 1~2opt</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Golden Invasion & Devil Square</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> Excellent Items</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Box of Kundun +3 <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Item Exc. +7~+9 (T4-T5) <br/> Ring/Pendant Exc 1~2opt</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Golden Invasion & Devil Square</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> Excellent Items</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Box of Kundun +4 <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Bloodangel Exc. +0<br/> Darkangel Exc. +0</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Golden Invasion & Devil Square</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> Excellent Items</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Box of Kundun +5 <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Holyangel Exc. +0<br/> Awakening Exc. +0<br/> Blue Eye Exc. +0</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Golden Invasion & Devil Square</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> Excellent Items</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Mastery Box (Minor) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> 1600~3000 RUUD</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Blood Castle<br/> Devil Square<br/> Chaos Castle<br/> Doppel Ganger<br/> Illusion Temple<br/> Imperial Guardian</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> -</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Mastery Box (Standard) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> 3000~4000 RUUD</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Blood Castle<br/> Devil Square<br/> Chaos Castle<br/> Doppel Ganger<br/> Illusion Temple<br/> Imperial Guardian</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> -</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Mastery Box (Greater) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> 4000~4500 RUUD</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Blood Castle<br/> Devil Square<br/> Chaos Castle<br/> Doppel Ganger<br/> Illusion Temple<br/> Imperial Guardian</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> -</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Labyrinth Box (Lower) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> 1600~3000 RUUD</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Elena's Letter (X)</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> -</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Labyrinth Box (Medium) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> 3000~4000 RUUD</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Elena's Letter (X)</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> -</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Labyrinth Box (Higher) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> 4000~4500 RUUD</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Source"> Elena's Letter (X)</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="MuHelper Word"> -</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Daily Events</h2>
                    <p>Explore daily events with unique challenges and attractive rewards, perfect for those seeking continuous action and progression in the game.</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100">
                        <tr>
                            <td class="clean py-0 w-30 order-0">
                                <a>Event</a>
                            </td>
                            <td class="clean py-0 w-30 border-0">
                                <a class="dh-xs-none">Rewards</a>
                            </td>
                            <td class="clean py-0 w-20 border-0">
                                <a class="dh-xs-none">Schedule<sup>(GMT-3)</sup></a>
                            </td>
                            <td class="clean py-0 w-20 border-0">
                                <a class="dh-xs-none">Information</a>
                            </td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 mt-15-off lh-base fs-13">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Blood Castle <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Mastery Box (RUUD) <br/> Mastery Talisman of Chaos Assembly</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> Every minute 00<br/> Every minute 30</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> 3 entries / day</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Devil Square <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Mastery Box (RUUD) <br/> +100~300% EXP<br/> Box of Kundun +1~+5</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> Every minute 10</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> 3 entries / day</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Doppel Ganger <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Mastery Box (RUUD) <br/> 15 RUUD / mob<br/> 1kk Zen / mob<br/> Jewels</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> Every minute 40</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> 3 entries / day</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Chaos Castle <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Mastery Box (RUUD) <br/> Ancient Item (T1-T2)<br/> Jewels</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> Every minute 55</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> 3 entries / day</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Illusion Temple <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Mastery Box (RUUD) <br/> Seed Lv1~Lv5<br/> 1500 GP</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 08:00<br/> 18:00<br/> 22:00</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> 2 entries / day</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Battle Boss Together <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Mastery Box (RUUD) <br/> Spider Artifact Fragment<br/> Jewel of Creation</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 13:00<br/> 18:00<br/> 20:40<br/> 1:00</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> 1 entry / day</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Varka (Gaion) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Mastery Box (RUUD) <br/> Spider Artifact Fragment</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> Anytime</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> 1 entry / day</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Unlimited Events</h2>
                    <p>Explore unlimited events with ever-changing challenges and enticing rewards, perfect for those seeking endless action and ongoing progression in the game..</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100">
                        <tr>
                            <td class="clean py-0 w-30 order-0">
                                <a>Event</a>
                            </td>
                            <td class="clean py-0 w-30 border-0">
                                <a class="dh-xs-none">Rewards</a>
                            </td>
                            <td class="clean py-0 w-20 border-0">
                                <a class="dh-xs-none">Schedule<sup>(GMT-3)</sup></a>
                            </td>
                            <td class="clean py-0 w-20 border-0">
                                <a class="dh-xs-none">Information</a>
                            </td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 mt-15-off lh-base fs-13">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Tigers Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> 500 RUUD<br/>[1~3] Jewels<br/>[1] Errtel +1~+3 (Random)</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> Every minute 00<br/>Every minute 30</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x20 Tigers / channel<br/> Random Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Blue Dragon Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Mysterious Reward</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> Every 18h - Random Respawn</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x1 Blue Dragon / channel<br/> Random Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Balrog Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Ancient Item (T1-T2)</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 01:40 <br/> 13:40</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x5 Balrogs / channel<br/> LostTower Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Hydra Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> [10] Lapidary Stone</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 08:00 <br/> 20:00</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x5 Hydra / channel<br/> Atlans Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Zaikan Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> [15] Guardian Enhanced Stone</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 09:00 <br/> 20:30</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x5 Zaikan / channel<br/> Tarkan Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Gorgon Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> [15] Elite Guardian Enhanced</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 04:00 <br/> 16:00</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x5 Gorgon / channel<br/> Dungeon Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Ice Queen Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> [10] Jewel of Creation</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 05:50 <br/> 17:50</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x5 Ice Queen / channel<br/> Devias Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Skeleton King Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> [6] Bless of Light (Greater)</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 06:25 <br/> 18:25</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x5 Skeleton King / channel<br/> Random Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Red Dragon Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Talisman of Luck 10%<br/> Talisman of Chaos Assembly</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 07:15 <br/> 19:15</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x5 Red Dragon / channel<br/> Random Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Golden Dragon Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Box of Kundun +1~+5</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 00:00 <br/> 12:00</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x5 Golden Mobs / maps<br/> Multiple Maps</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Ubaid Elemental Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Elemental Talisman of Chaos Assembly</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 00:00 <br/> 12:00</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x5 Elemental Elites / channel<br/> Ubaid Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Debenter Elemental Invasion <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Elemental Talisman of Luck</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 11:00 <br/> 23:00</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> x5 Elemental Elites / channel<br/> Debenter Map</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Acheron Guardian <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> [5] Mysterious Stone</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Schedule (GMT-3)"> 01:00 <br/> 13:00<br/> 18:00</td>
                        <td class="clean py-0 border-bt-1 w-20" data-label="Information"> Join through Arka War NPC</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Weekly Events Schedule</h2>
                    <p>Check out our Weekly Event Schedule, packed with a variety of activities and exclusive prizes. A perfect opportunity to plan your gaming week and ensure maximum fun and rewards!</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100 fs-18 text-center">
                        <tr>
                            <td class="clean py-0 w-15 order-0 text-left">
                                <a>Event</a>
                            </td>
                            <td class="clean py-0 w-10 border-0">
                                <a class="dh-xs-none">Monday</a>
                            </td>
                            <td class="clean py-0 w-10 border-0">
                                <a class="dh-xs-none">Tuesday</a>
                            </td>
                            <td class="clean py-0 w-10 border-0">
                                <a class="dh-xs-none">Wednesday</a>
                            </td>
                            <td class="clean py-0 w-10 border-0">
                                <a class="dh-xs-none">Thursday</a>
                            </td>
                            <td class="clean py-0 w-10 border-0">
                                <a class="dh-xs-none">Friday</a>
                            </td>
                            <td class="clean py-0 w-10 border-0">
                                <a class="dh-xs-none">Saturday</a>
                            </td>
                            <td class="clean py-0 w-10 border-0">
                                <a class="dh-xs-none">Sunday</a>
                            </td>
                            <td class="clean py-0 w-15 border-0">
                                <a class="dh-xs-none">Information</a>
                            </td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 mt-15-off lh-base fs-13 text-center">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Castle Siege <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> 16:00</td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> Land of Trials</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Arka War <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> 21:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> 16:00 <span class="tag-link-red"><a href="#" class="text-white">new</a></span> </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> - </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> +50% EXP (7D)</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Throne Conquest <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> 21:30</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> - </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> +50% EXP (7D)</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Happy Hour <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> Start 18:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> Ends 23:00</td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> +15% EXP</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Erohim <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> 03:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> 12:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> 14:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> 21:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> 18:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> 09:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> 20:00</td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> Loren Deep</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Erohim (LoT) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> 18:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> 13:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> 09:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> 18:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> 13:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> 09:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> 23:00</td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> Land of Trial</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Medusa <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> 13:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> 09:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> 05:00 <span class="tag-link-red"><a href="#" class="text-white">new</a></span><br/>18:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> 13:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> 09:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> 22:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> 13:00</td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> Swamp of Calmness</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Kundun <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> 09:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> 18:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> 13:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> 09:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> 18:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> 13:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> 09:00</td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> Kalima 7</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Crywolf <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> 21:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> 15:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> - </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> Crywolf</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> G. of Darkness (x4) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> 11:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> 15:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> 22:00 </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> PVP Square</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Cursed Kundun (x4) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> 22:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> 11:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> 15:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> - </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> PVP Square</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Lord Silvester <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> 11:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> 23:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> 05:00 <span class="tag-link-red"><a href="#" class="text-white">new</a></span> </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> - </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> Uruk</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Core Magriffy <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> 04:00 <span class="tag-link-red"><a href="#" class="text-white">new</a></span> </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> 22:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> 23:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> - </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> Nass </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> D. D. Gorgon <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> 15:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> 11:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> 05:00 <span class="tag-link-red"><a href="#" class="text-white">new</a></span><br/>23:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> 23:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> - </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> Deep Dungeon 5</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Cursed Phoenix <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> 22:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> -</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> 21:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> 18:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> 11:00 </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> PVP Square</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Metal Balrog <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> 21:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> 11:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> 04:00 <span class="tag-link-red"><a href="#" class="text-white">new</a></span><br/>21:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> 19:00 </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> PVP Square</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Cursed Hydra <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> 15:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> 21:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> 11:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> 05:00 <span class="tag-link-red"><a href="#" class="text-white">new</a></span><br/>21:00 </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> PVP Square</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-15 ping fs-15 text-left" data-label="Event"> Great Golden Dragon (World Boss) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Monday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Tuesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Wednesday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Thursday"> - </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Friday"> 22:00 </td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Saturday"> 15:00</td>
                        <td class="clean py-0 border-bt-1 w-10" data-label="Sunday"> 10:00 </td>
                        <td class="clean py-0 border-bt-1 w-15" data-label="Information"> PVP Square - Kanturu Ruins</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Boss Rewards</h2>
                    <p>Face off against mighty Bosses and unlock epic rewards! Each victory brings exclusive items, enhancing your arsenal for future battles. Ideal for adventurers seeking challenges and legendary treasures.</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100">
                        <tr>
                            <td class="clean py-0 w-30 order-0">
                                <a>Boss</a>
                            </td>
                            <td class="clean py-0 w-40 border-0">
                                <a class="dh-xs-none">Rewards</a>
                            </td>
                            <td class="clean py-0 w-30 border-0">
                                <a class="dh-xs-none">Information</a>
                            </td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 mt-15-off lh-base fs-13">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Kundun <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [50] Goblin Points<br/>[10] Mastery Box (Greater)<br/>[1] Boss Emblem (I)</td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> Daily <br/>+ Random Spawns </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Erohim <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [50] Goblin Points <br/> [100] Jewel of Creation <br/>[1] Boss Emblem (I) </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> Daily </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Medusa <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [50] Goblin Points <br/> [3] Talisman of Chaos Assembly <br/> [3] Excellent Weapons <br/> [1] Boss Emblem (I) </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> Daily <br/>+ Random Spawns </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Selupan <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [5] Mastery Box (Greater) <br/> [5] Socket Sets 380 <br/> [5] Socket Weapons 380 <br/> [3] Excellent Weapon (High Tier) </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> Every 32h </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Nightmare (Kanturu) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [5] Elemental Talisman of Chaos </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> Every 42h </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Maya Hand (Kanturu) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [2] Elemental Talisman of Luck </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> Every 42h </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Balgass <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [150] Goblin Points<br/>[15] Boss Emblem (II)</td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 2 Spawns / Week <br/> Crywolf Event</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Dark Elf <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [10] Goblin Points <br/> [5] Jewel of Creation<br/>[2] Ancient Item<br/>[1] Boss Emblem (II)</td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 2 Spawns / Week <br/> Crywolf Event</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Core Magriffy <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [150] Goblin Points <br/> [1] Mount (Evolved)<Br>[5] Mastery Box (Greater)<Br/>[3] Boss Emblem (I) (chance)<br/>[1] Boss Emblem (II) (chance) </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 3 Spawns / Week <br/>+ Random Spawns </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Lord Silvester <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [50] Goblin Points <br/> [5] Socket Sets 400 <br/> [3] Socket Weapons 400<br/>[5] Mastery Box (Greater)<Br/>[3] Boss Emblem (I) (chance)<br/>[1] Boss Emblem (II) (chance) </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 3 Spawns / Week <br/>+ Random Spawns </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Lord Ferea <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [5] Mastery Box (Greater) <br/> [4] Sealed Bloodangel </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> Every 72h ~ 76h </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Nix <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [2000] Goblin Points <br/> [1] Seed (Level 2~5) / party member*<br/>[1] Boss Emblem (II) / party member* </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 3 Spawns / Week <br/>+ Every 72h </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Cursed Kundun <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [2000] Goblin Points <br/> [2~3] Seed (Level 2~5)<br/>[1] Boss Emblem (II) </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 3 Spawns / Week <br/>+ Every 72h </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Deep Dungeon Gorgon <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [150] Goblin Points<br/>[2] Mysterious Stone<br/>[2] Boss Emblem (II)<br/>[2] Boss Emblem (III) </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 4 Spawns / Week <br/>+ Random Spawns </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> God of Darkness <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [2000] Goblin Points<br>[12] Artifact Enchantment Stone<br/>[5] Boss Emblem (II) </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> Every 72h ~ 76h </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Metal Balrog <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [200] Guardian Enhanced Stone <br>[1] Ring/Necklace PvP (1~5 Opt) <br/>[25] Boss Emblem (III)</td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 4 Spawns / Week </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Cursed Hydra <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [300] Lapidary Stone<br>[1] Jewel of Excess (chance)<br/>[25] Boss Emblem (III) </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 4 Spawns / Week </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Cursed Phoenix <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [5] Mysterious Stone<br/>[1] Excellent-Socket Necklace (1~3 Opt/Skt)<br/>[25] Boss Emblem (III)</td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 4 Spawns / Week </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Boss"> Great Golden Dragon (World Boss) <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [200] Lapidary Stone<br/>[400] Guardian Enhanced Stone<br/>[50] Boss Emblem (III)
                            <br/>[10] Mysterious Stone<br/>[50] Artifact Enhancement Stone<br/>[20] Ability Crystal<br/>[20] Uriel's Feather<br/>[8] Battle Shard
                            <br/>[500] Jewel of Bless<br/>[500] Jewel of Creation
                        </td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Information"> 3 Spawns / Week </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Moss Merchant</h2>
                    <p>Visit the Moss Merchant to find rare and powerful items at special prices. A unique opportunity for players in search of exclusive equipment that can shape the course of their adventures in the game.</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100">
                        <tr>
                            <td class="clean py-0 w-30 order-0"><a>Box</a></td>
                            <td class="clean py-0 w-30 border-0"><a class="dh-xs-none">Cost</a></td>
                            <td class="clean py-0 w-40 border-0"><a class="dh-xs-none">Rewards</a></td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 mt-15-off lh-base fs-13">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Arka Trophy <span class="tag-link-red"><a href="#">new</a><span></td>
                        <td data-label="Cost"> x1 Arka Trophy </td>
                        <td data-label="Rewards"> [3] Jewel of Bless<br/> [3] Jewel of Creation<br/>[2] Jewel of Harmony<br/>[2] Bless of Light (Greater [B])<br/>
                            [1] Mastery Box (Standard)<br/>[2] Guardian Enhanced Stone<br/>[2] Lapidary Stone<br/>[1] Pizza<br/>[1] Spider Artifact Fragment<br/>[4] Elemental Rune<br/>
                        </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Hunter Box <span class="tag-link-red"><a href="#">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Cost"> x1 Boss Emblem (I)<br>x1 Boss Emblem (II) </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [1] Hunter Box</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> Hunter Box <span class="tag-link-red"><a href="#">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Cost"> x1 Boss Emblem (II)<br>x1 Boss Emblem (III) </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> [1] Hunter Box</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> [Class] Box <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Cost"> 5.000.000 Zen</td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> Class Weapon Normal +0~+9<br/> Class Weapon Exc +0~+9<br/> Talisman of Luck (10%)<br/> Talisman of Chaos Assembly</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> [Miracle Coin] Box <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Cost"> x1 Miracle Coin</td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> Pentagram Lv. 300 <br/> Premium Muun Egg <br/> Excellent Necklace / Ring PvP <br/> [5] Elemental Rune <br/> Concoror's Badge <br/> Condor Feather <br/> Condor Flame <br/> Excellent Divine Weapon <br/> Talisman of Chaos Assembly <br/> Elemental Talisman of Chaos <br/> Seed Capsule <br/> Broken Horn <br/> Ruud Box (500/1000/2000) </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> [Jewel of Bless] Box <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Cost"> x5 Jewel of Bless</td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> Seal of Ghost Horse <br/> Earring Lv. 700 <br/> Earring Lv. 300 <br/> Excellent Pendant / Ring <br/> Medicines </td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Box"> [Jewel of Soul] Box <span class="tag-link"><a href="#">check</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Cost"> x5 Jewel of Soul </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Rewards"> Sculpture <br/> Earring Lv. 700 <br/> Earring Lv. 300 <br/> Excellent Pendant / Ring <br/> Medicines </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Monthly Events</h2>
                    <p>Monthly events in RealMU blend strategy and luck, allowing players to collect cards and earn rewards like Jewels and special tickets through interactive activities and event banners.</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100">
                        <tr>
                            <td class="clean py-0 w-30 order-0"><a>Event</a></td>
                            <td class="clean py-0 w-30 border-0"><a class="dh-xs-none">Rewards</a></td>
                            <td class="clean py-0 w-40 border-0"><a class="dh-xs-none">Information</a></td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 mt-15-off lh-base fs-13">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Find the Bomb <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Bless of Light<br>Lapidary Stone </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Collect Cards and click on the event banner to play</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Jewel Bingo <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Jewel of Bless<br>Jewel of Soul<br>Pickaxe </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Collect Cards and click on the event banner to play</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> MU Roomy <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Blood Castle Ticket<br>Devil Square Ticket<br>Guardian Enhanced Stone<br>Elite Enhanced Stone </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Collect Cards and click on the event banner to play</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Balls & Cows <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Jewel of Creation<br>Gemstone<br>Mysterious Stone </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Collect Cards and click on the event banner to play</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Evomon <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Jewels<br>RUUD Box </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Collect Evomon Eggs and hatch them for your reward!</td>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Weekend Events</h2>
                    <p>Weekend events in RealMU feature EXP and RUUD boosts, Goblin Points for online time, invasions, and unique challenges like Hide & Seek and Cherry Blossom, offering players a range of valuable rewards and engaging activities.</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100">
                        <tr>
                            <td class="clean py-0 w-30 order-0"><a>Event</a></td>
                            <td class="clean py-0 w-30 border-0"><a class="dh-xs-none">Rewards</a></td>
                            <td class="clean py-0 w-40 border-0"><a class="dh-xs-none">Information</a></td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 mt-15-off lh-base fs-13">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> EXP Boost <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Increased EXP gained </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Percentage</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> RUUD Boost <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Increased RUUD gained </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Percentage</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Goblin Points Online <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Goblin Points </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Online-based reward</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> White Wizard <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> x30 Jewel of Bless<br>Wizard Ring <br> x15 Cherry Blossom Branch </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Invasion</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Hide & Seek <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards">x15 Cherry Blossom Branch <br> Goat Figurine (1D) <br>Dark Transformation Ring (1D) <br>Maple Charm (1D) <br>Oak Charm (1D) <br>x1 Battle Shard<br> </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Find the hidden NPC</td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-30 ping fs-15" data-label="Event"> Cherry Blossom <span class="tag-link-red"><a href="#" class="text-white">new</a><span></td>
                        <td class="clean py-0 border-bt-1 w-30" data-label="Rewards"> Extremely valuable rewards </td>
                        <td class="clean py-0 border-bt-1 w-40" data-label="Information"> Trade x255 Chery Blossom Branches at Noria</td>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Chaos Machine</h2>
                    <p>Venture with the Chaos Machine to forge legendary equipment and perform powerful upgrades. Transform your items with magic and chance, seeking perfection in each fusion. Ideal for players who wish to elevate their power to the maximum!</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100">
                        <tr>
                            <td class="clean py-0 w-33 order-0"><a>Combination</a></td>
                            <td class="clean py-0 w-33 border-0"><a class="dh-xs-none">Max Rate Normal</a></td>
                            <td class="clean py-0 w-33 border-0"><a class="dh-xs-none">Max Rate Vip</a></td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 mt-15-off lh-base fs-13">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Itens +10</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">100%</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">100%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Itens +11</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">50% (Luck +25%)</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">57% (Luck +25%)</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Itens +12</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">45% (Luck +25%)</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">52% (Luck +25%)</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Itens +13</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">45% (Luck +25%)</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">52% (Luck +25%)</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Itens +14</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">40% (Luck +25%)</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">47% (Luck +25%)</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Itens +15</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">40% (Luck +25%)</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">47% (Luck +25%)</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Wings Level 1</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">100%</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">100%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Wings Level 2</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">90%</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">97%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Wings Level 2.5</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">60%</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">67%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Wings Level 3</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">40%</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">47%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Wings Level 4</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">40%</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">47%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Feather of Condor</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">60%</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">67%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Ancient Hero's Soul</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">80%</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">87%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="#">Garuda Feather</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Normal">40%</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="VIP">47%</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">XP rate in Party</h2>
                    <p>Maximize your group experience with XP Rate in Party! Join friends to tackle challenges and monsters, enjoying increased experience rates and shared rewards. A perfect way to grow faster and strengthen bonds in the game.</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100">
                        <tr>
                            <td class="clean py-0 w-33 border-0"><a>Nº Members</a></td>
                            <td class="clean py-0 w-33 border-0"><a class="dh-xs-none">All with the same class</a></td>
                            <td class="clean py-0 w-33 border-0"><a class="dh-xs-none">Different classes</a></td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 lh-base fs-13">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="Nº Members">2 Players</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="All with the same class">55% + 30% <span class="tag-link-red">bonus</span></td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Different classes">55% + 35% <span class="tag-link-red">bonus</span></td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="Nº Members">3 Players</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="All with the same class">40% + 40% <span class="tag-link-red">bonus</span></td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Different classes">40% + 45% <span class="tag-link-red">bonus</span></td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="Nº Members">4 Players</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="All with the same class">30% + 60% <span class="tag-link-red">bonus</span></td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Different classes">30% + 65% <span class="tag-link-red">bonus</span></td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-33 ping fs-15" data-label="Nº Members">5 Players</td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="All with the same class">25% + 105% <span class="tag-link-red">bonus</span></td>
                        <td class="clean py-0 border-bt-1 w-33" data-label="Different classes">25% + 110% <span class="tag-link-red">bonus</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Rank 3 Errtel Options Rate</h2>
                    <p>Significantly increase the likelihood of obtaining powerful options in your Errtels, taking your gameplay to new heights. Ideal for players looking to maximize their skills and equipment to the fullest.</p>
                </div>
            </div>
        </div>
        <div class="vs-blog">
            <div class="blog-meta has-border bg-major-black">
                <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                    <table class="mb-0 w-100">
                        <tr>
                            <td class="clean py-0 w-50 border-0"><a>Radiance Type</a></td>
                            <td class="clean py-0 w-50 border-0"><a class="dh-xs-none">Chance Rate</a></td>
                        </tr>
                    </table>
                </h2>
            </div>
            <div class="blog-content bg-major-black">
                <table class="table-responsive w-100 lh-base fs-13">
                    <tr>
                        <td class="clean py-0 border-bt-1 w-50 ping fs-15">Punish</td>
                        <td class="clean py-0 border-bt-1 w-50">20%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-50 ping fs-15">Bleeding</td>
                        <td class="clean py-0 border-bt-1 w-50">20%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-50 ping fs-15">Paralyzing</td>
                        <td class="clean py-0 border-bt-1 w-50">20%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-50 ping fs-15">Binding</td>
                        <td class="clean py-0 border-bt-1 w-50">20%</td>
                    </tr>
                    <tr>
                        <td class="clean py-0 border-bt-1 w-50 ping fs-15">Blinding</td>
                        <td class="clean py-0 border-bt-1 w-50">20%</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Errtel Upgrade Rates</h2>
                    <p>
                        Significantly increase the likelihood of obtaining powerful options in your Errtels, taking your gameplay to new heights. Ideal for players looking to maximize their skills and equipment to the fullest.<br/>
                        <span class="text-default">* For Errtel Mastery, the success rate is reduced by 10%.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="vs-blog row">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <table class="mb-0 w-100 fs-18">
                            <tr>
                                <td class="clean py-0 w-25 order-0">
                                    <a>Rank</a>
                                </td>
                                <td class="clean py-0 w-15 border-0">
                                    <a class="dh-xs-none">Lv 1</a>
                                </td>
                                <td class="clean py-0 w-15 border-0">
                                    <a class="dh-xs-none">Lv 2</a>
                                </td>
                                <td class="clean py-0 w-15 border-0">
                                    <a class="dh-xs-none">Lv 3</a>
                                </td>
                                <td class="clean py-0 w-15 border-0">
                                    <a class="dh-xs-none">Lv 4</a>
                                </td>
                                <td class="clean py-0 w-15 border-0">
                                    <a class="dh-xs-none">Lv 5</a>
                                </td>
                            </tr>
                        </table>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <table class="table-responsive">
                        <tr>
                            <td class="clean py-0 border-bt-1 w-25 ping" data-label="Rank"> Rank 1</td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 1"> 100% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 2"> 100% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 3"> 100% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 4"> 90% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 5"> 90% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-25 ping" data-label="Rank"> Rank 2</td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 1"> 100% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 2"> 100% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 3"> 90% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 4"> 90% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 5"> 80% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-25 ping" data-label="Rank"> Rank 3</td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 1"> 90% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 2"> 90% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 3"> 80% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 4"> 80% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 5"> 70% </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <table class="mb-0 w-100 fs-18">
                            <tr>
                                <td class="clean py-0 w-25 order-0">
                                    <a>Rank</a>
                                </td>
                                <td class="clean py-0 w-15 border-0">
                                    <a class="dh-xs-none">Lv 6</a>
                                </td>
                                <td class="clean py-0 w-15 border-0">
                                    <a class="dh-xs-none">Lv 7</a>
                                </td>
                                <td class="clean py-0 w-15 border-0">
                                    <a class="dh-xs-none">Lv 8</a>
                                </td>
                                <td class="clean py-0 w-15 border-0">
                                    <a class="dh-xs-none">Lv 9</a>
                                </td>
                                <td class="clean py-0 w-15 border-0">
                                    <a class="dh-xs-none">Lv 10</a>
                                </td>
                            </tr>
                        </table>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <table class="table-responsive">
                        <tr>
                            <td class="clean py-0 border-bt-1 w-25 ping" data-label="Rank"> Rank 1</td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 6"> 80% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 7"> 80% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 8"> 70% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 9"> 70% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 10"> 70% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-25 ping" data-label="Rank"> Rank 2</td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 6"> 80% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 7"> 70% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 8"> 70% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 9"> 60% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 10"> 60% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-25 ping" data-label="Rank"> Rank 3</td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 6"> 70% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 7"> 70% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 8"> 60% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 9"> 60% </td>
                            <td class="clean py-0 border-bt-1 w-15" data-label="Lv 10"> 50% </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Earring Upgrade Rates</h2>
                    <p>Significantly increase the likelihood of obtaining powerful options in your Earrins, taking your gameplay to new heights. Ideal for players looking to maximize their skills and equipment to the fullest.</p>
                </div>
            </div>
        </div>
        <div class="vs-blog row">
            <div class="col-lg-4 col-md-12 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <table class="mb-0 w-100 fs-18">
                            <tr>
                                <td class="clean py-0 w-50 order-0">
                                    <a>Level</a>
                                </td>
                                <td class="clean py-0 w-50 border-0">
                                    <a class="dh-xs-none">Rate</a>
                                </td>
                            </tr>
                        </table>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <table class="table-responsive">
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 1</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 60% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 2</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 60% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 3</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 60% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 4</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 60% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 5</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 60% </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <table class="mb-0 w-100 fs-18">
                            <tr>
                                <td class="clean py-0 w-50 order-0">
                                    <a>Level</a>
                                </td>
                                <td class="clean py-0 w-50 border-0">
                                    <a class="dh-xs-none">Rate</a>
                                </td>
                            </tr>
                        </table>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <table class="table-responsive">
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 6</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 60% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 7</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 60% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 8</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 80% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 9</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 80% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 10</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 80% </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <table class="mb-0 w-100 fs-18">
                            <tr>
                                <td class="clean py-0 w-50 order-0">
                                    <a>Level</a>
                                </td>
                                <td class="clean py-0 w-50 border-0">
                                    <a class="dh-xs-none">Rate</a>
                                </td>
                            </tr>
                        </table>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <table class="table-responsive">
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 11</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 80% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 12</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 80% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 13</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 80% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 14</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 80% </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-50 ping" data-label="Level"> Level 15</td>
                            <td class="clean py-0 border-bt-1 w-50" data-label="Rate"> 80% </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
    <div class="col-lg-12">
        <div class="row justify-content-between">
            <div class="col-md-auto text-center text-md-start">
                <div class="section-title2">
                    <h2 class="sec-title2 text-white font-theme3 mb-0 fs-24">Commands</h2>
                    <p>
                        Master the game with intuitive commands that range from offline leveling and automatic trading to visual adjustments and global communication. Customize your attributes and manage your inventory and account for an optimized and interactive gaming experience. 
                    </p>
                </div>
            </div>
        </div>
        <div class="vs-blog row">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <table class="mb-0 w-100 fs-18">
                            <tr>
                                <td class="clean py-0 w-30 order-0">
                                    <a>Command</a>
                                </td>
                                <td class="clean py-0 w-70 border-0">
                                    <a class="dh-xs-none">Description</a>
                                </td>
                            </tr>
                        </table>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <table class="table-responsive">
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/offlevel</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Toggle offleveling function (Tarkan+ Only)</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/offtrade</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Toggle offtrade function</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">CTRL+F</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Toggle SWITCH mode (Less lag)</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">F6</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Enable/Disable the 3D camera</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">F7</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Reset 3D camera function </td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/post</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Send a global message</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/remaintime</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Check your VIP status remaining time</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">
                                /war 
                                <guild>
                            </td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Propose war to specified guild</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/deletebag</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Clears your inventory (except equipment)</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                <div class="blog-meta has-border bg-major-black">
                    <h2 class="blog-title text-white font-theme h4 mt-25-sm mb-5-off">
                        <table class="mb-0 w-100 fs-18">
                            <tr>
                                <td class="clean py-0 w-30 order-0">
                                    <a>Command</a>
                                </td>
                                <td class="clean py-0 w-70 border-0">
                                    <a class="dh-xs-none">Description</a>
                                </td>
                            </tr>
                        </table>
                    </h2>
                </div>
                <div class="blog-content bg-major-black">
                    <table class="table-responsive">
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/lock [code]</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Locks your account with code (10 char max)</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/unlock [code]</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Unlocks your account</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/cleareventinv</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Clears your event inventory</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/addstr</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Add points to Strenght</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/addvit</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Add points to Vitality</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/addagi</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Add points to Agility</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/addene</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Add points to Energy</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/addcmd</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Add points to Command</td>
                        </tr>
                        <tr>
                            <td class="clean py-0 border-bt-1 w-40 ping" data-label="Command">/dcfriend [char] [password]</td>
                            <td class="clean py-0 border-bt-1 w-60" data-label="Description">Disconnects a friend</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 space-30">&nbsp;</div>
</div>		
<?php
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.right_sidebar');
    $this->load->view($this->config->config_entry('main|template') . DS . 'view.footer');
?>