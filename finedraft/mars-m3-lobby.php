<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="shortcut icon" href="assets/img/favicon_png.png">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    
        <title>Finedraft!</title>
        <link rel="stylesheet" href="style.css">

        <?php
            if (isset($_GET['page'])) {
	            $page = $_GET['page'];
            } else {
	            $page = 'lobby';
            }
        ?>

        <style>
            <?php
            	if ($page == 'lobby') {
            		echo 'section#lobby {
            			display: block;
            		}';
            		$menu_status = 'lobby';
            	} else if ($page == 'win') {
            		echo 'section#win {
            			display: block;
            		}';
            		$menu_status = 'win';
                } else if ($page == 'lose') {
            		echo 'section#lose {
            			display: block;
            		}';
            		$menu_status = 'lose';
                }
            ?>
        </style>
    </head>
    <body>
        <!--nav-->
        <!-- <div class="nav-menu">
            <div class="nav-menu-txt <?php if ($menu_status == 'lobby') { echo 'active'; } ?>" onclick="location.href='?page=lobby'">Lobby</div>
            <div class="nav-menu-txt <?php if ($menu_status == 'win') { echo 'active'; } ?>" location.href='?page=win'></div>
            <div class="nav-menu-txt <?php if ($menu_status == 'lose') { echo 'active'; } ?>"  location.href='?page=lose'></div>
        </div> -->

        <!--lobby page-->
        <section id="lobby" style="background-image: url('assets/img/mars background 2.jpeg'); background-size: cover; background-repeat: no-repeat;">
            <div class="grad-ovl-lobby"></div>
            <div class="ovl-lobby-white"></div>
            <div class="lobby-logo" style="background-image: url('assets/img/finedraft_svg.svg'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="btn" onclick="location.href='./'" style="background-image: url('assets/img/button_lobby.svg'); background-size: cover; background-repeat: no-repeat;">
                <div class="btn-icon" style="background-image: url('assets/img/play_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                <div class="btn-txt">Play</div>
            </div>
            <div class="info-bg" style="background-image: url('assets/img/info bg small_lobby.svg'); background-size: cover; background-repeat: no-repeat;">
                <div class="info-ttl">Developer:</div>
                <div class="personal-cont">
                    <div class="p-cont">
                        <div class="info-name">Brian Tjan</div>
                        <div class="info-role">Gameplay Dev</div>
                        <div class="info-icon" style="background-image: url('assets/img/email_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon-txt">Christiansenbrian99@gmail.com</div>
                        <div class="info-icon2" style="background-image: url('assets/img/instagram_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon2-txt">@b_tjan</div>
                    </div>
                    <div class="p-cont">
                        <div class="info-name">Agilelo</div>
                        <div class="info-role">World Builder</div>
                        <div class="info-icon" style="background-image: url('assets/img/email_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon-txt">trypaanjagi@gmail.com</div>
                        <div class="info-icon2" style="background-image: url('assets/img/instagram_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon2-txt">@aditya.t.a</div>
                    </div>
                    <div class="p-cont">
                        <div class="info-name">Irving</div>
                        <div class="info-role">Initial Idea and QA</div>
                        <div class="info-icon" style="background-image: url('assets/img/email_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon-txt">irvingtans@iclub.com</div>
                        <div class="info-icon2" style="background-image: url('assets/img/instagram_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon2-txt">@irvingtandra</div>
                    </div>
                </div>
                <div class="line1"></div>
                <div class="line2"></div>
            </div>
        </section>

        <!--lose page-->
        <section id="lose" style="background-image: url('assets/img/lose bg.jpg'); background-size: cover; background-repeat: no-repeat;">
            <div class="logo" onclick="location.href='?page=lobby'">
                <img src="assets/img/finedraft_svg.svg" alt="">
            </div>
            <div class="grad-ovl-lose"></div>
            <div class="ovl-black"></div>
            <div class="lose-txt">You Lose</div>
            <div class="add-ovl-black"></div>
            <div class="add-cont">
                <div class="add-txt">Mars has exploded</div>
                <div class="replay-btn" onclick="location.href='./'" style="background-image: url('assets/img/circle button.svg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="replay-icon" style="background-image: url('assets/img/reload_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                </div>
            </div>
            <div class="info" style="background-image: url('assets/img/circle button.svg'); background-size: cover; background-repeat: no-repeat;">
                <div class="i-icon" style="background-image: url('assets/img/info_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
            </div>
            <div id="pop" class="info-bg-sec" style="background-image: url('assets/img/info bg small_lobby.svg'); background-size: cover; background-repeat: no-repeat;">
                <div class="info-ttl">Developer:</div>
                <div class="personal-cont">
                    <div class="p-cont">
                        <div class="info-name">Brian Tjan</div>
                        <div class="info-role">Gameplay Dev</div>
                        <div class="info-icon" style="background-image: url('assets/img/email_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon-txt">Christiansenbrian99@gmail.com</div>
                        <div class="info-icon2" style="background-image: url('assets/img/instagram_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon2-txt">@b_tjan</div>
                    </div>
                    <div class="p-cont">
                        <div class="info-name">Agilelo</div>
                        <div class="info-role">World Builder</div>
                        <div class="info-icon" style="background-image: url('assets/img/email_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon-txt">trypaanjagi@gmail.com</div>
                        <div class="info-icon2" style="background-image: url('assets/img/instagram_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon2-txt">@aditya.t.a</div>
                    </div>
                    <div class="p-cont">
                        <div class="info-name">Irving</div>
                        <div class="info-role">Initial Idea and QA</div>
                        <div class="info-icon" style="background-image: url('assets/img/email_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon-txt">irvingtans@iclub.com</div>
                        <div class="info-icon2" style="background-image: url('assets/img/instagram_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon2-txt">@irvingtandra</div>
                    </div>
                </div>
                <div class="line1"></div>
                <div class="line2"></div>
            </div>
        </section>

        <!--win page-->
        <section id="win" style="background-image: url('assets/img/win bg.png'); background-size: cover; background-repeat: no-repeat;">
            <div class="logo" onclick="location.href='?page=lobby'">
                <img src="assets/img/finedraft_svg.svg" alt="">
            </div>
            <div class="grad-ovl-win"></div>
            <div class="ovl-black"></div>
            <div class="win-txt">Winner!</div>
            <div class="btn-cont">
                <div class="btn-win" onclick="location.href='./'" style="background-image: url('assets/img/button_win.svg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="btn-win-icon" style="background-image: url('assets/img/reload_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="btn-win-txt">Re-Play</div>
                </div>
                <div class="btn-win" onclick="location.href='?page=lobby'" style="background-image: url('assets/img/button_win.svg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="btn-win-icon" style="background-image: url('assets/img/home_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="btn-win-txt">Lobby</div>
                </div>
            </div>
            <div class="info" style="background-image: url('assets/img/circle button.svg'); background-size: cover; background-repeat: no-repeat;">
                <div class="i-icon" style="background-image: url('assets/img/info_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
            </div>
            <div id="pop" class="info-bg-sec" style="background-image: url('assets/img/info bg small_lobby.svg'); background-size: cover; background-repeat: no-repeat;">
                <div class="info-ttl">Developer:</div>
                <div class="personal-cont">
                    <div class="p-cont">
                        <div class="info-name">Brian Tjan</div>
                        <div class="info-role">Gameplay Dev</div>
                        <div class="info-icon" style="background-image: url('assets/img/email_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon-txt">Christiansenbrian99@gmail.com</div>
                        <div class="info-icon2" style="background-image: url('assets/img/instagram_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon2-txt">@b_tjan</div>
                    </div>
                    <div class="p-cont">
                        <div class="info-name">Agilelo</div>
                        <div class="info-role">World Builder</div>
                        <div class="info-icon" style="background-image: url('assets/img/email_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon-txt">trypaanjagi@gmail.com</div>
                        <div class="info-icon2" style="background-image: url('assets/img/instagram_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon2-txt">@aditya.t.a</div>
                    </div>
                    <div class="p-cont">
                        <div class="info-name">Irving</div>
                        <div class="info-role">Initial Idea and QA</div>
                        <div class="info-icon" style="background-image: url('assets/img/email_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon-txt">irvingtans@iclub.com</div>
                        <div class="info-icon2" style="background-image: url('assets/img/instagram_icon.svg'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="info-icon2-txt">@irvingtandra</div>
                    </div>
                </div>
                <div class="line1"></div>
                <div class="line2"></div>
            </div>
        </section>
    </body>
</html>