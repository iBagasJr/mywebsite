<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PLAYTOUR.ID</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/logo1.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/p_m/css/main.css">
    <!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>assets/scripts/main.css" rel="stylesheet" type="text/css" >
    <!--=======      NEW        =======================================================================-->
    <link href="<?php echo base_url(); ?>assets/s_m/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>assets/s_m/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>assets/s_m/css/font-awesome.css" rel="stylesheet"> 
    <!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>assets/s_m/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>assets/sb_m/css/main.css" rel="stylesheet" />
    <!--===============================================================================================-->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <!--===============================================================================================-->
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <!--=======  CSS TAMBAHAN   =======================================================================-->
    <style>
        .signup1 {
            position: absolute;
            top: 40%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            width: 65%;
            z-index: 5;
            -webkit-transition: all .3s ease;
        }
        .form-holder1 {
                border-radius: 15px;
                background-color: #F0F0F0 ;
                overflow: hidden;
                margin-top: 50px;
                opacity: 1;
                visibility: visible;
                -webkit-transition: all .3s ease;
        }
                
        .input1 {
            background-color:#F0F0F0 ;
            border: 0;
            outline: none;
            box-shadow: none;
            display: block;
            height: 30px;
            line-height: 30px;
            padding: 8px 15px;
            border-bottom: 1px solid #eee;
            width: 100%;
            font-size: 12px;
        }

        .submit-btn1 {
                background-color: rgba(0,0,0,0.4);
                color: rgba(256,256,256,0.7);
                border:0;
                border-radius: 15px;
                display: block;
                margin: 15px auto; 
                padding: 15px 45px;
                width: 100%;
                font-size: 13px;
                font-weight: bold;
                cursor: pointer;
                opacity: 1;
                visibility: visible;
                -webkit-transition: all .3s ease;
            }
                
        .submit-btn1.hover {
            transition: all .3s ease;
            background-color: rgba(0,0,0,0.8);
        }
    </style>
    <!--=======  SKRIP TAMBAHAN   =====================================================================-->
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	    function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <?php
        $ip_me    = $this->input->ip_address(); // Mendapatkan IP user
    
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
        function generate_string($input, $strength = 16) {
            $input_length = strlen($input);
            $random_string = '';
            for($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }
        
            return $random_string;
        }
    ?>
</head>
<body class="animsition bg2">
	<!-- Header -->
	<header id="home">
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
							<img src="<?php echo base_url(); ?>assets/images/logo2.png" alt="IMG-LOGO" data-logofixed="<?php echo base_url(); ?>assets/images/logo2.png">
					</div>
                    <!-- Menu -->

                    <div class="wrap_menu p-l-35 p-l-0-xl" >
						<nav class="menu">
							<ul class="main_menu">
								<li>
                    <!-- Menu -->
                    <div class="wrap_menu p-l-45 p-l-0-xl" >
						<nav class="menu">
							<ul class="main_menu">
								<li>
                                    <div class="s128" style="padding-right:100px">
                                        <form>
                                            <div class="inner-form">
                                                <div class="row">
                                                    <div class="input-field first" id="first">
                                                        <input class="input" id="inputFocus" type="text" placeholder="Cari Disini" />
                                                        <button class="clear" id="clear">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
								</li>
							</ul>
						</nav>
					</div>
								</li>
							</ul>
						</nav>
                        
					</div>
					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.html">Home</a>
								</li>
								<li>
									<a href="menu.html">Menu</a>
								</li>
							</ul>
						</nav>
					</div>
					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">PILIH GAME</a>
                            <ul class="dropdown-menu">
                                <div class="agile_inner_drop_nav_info">
                                    <div class="row" style="padding-left:10px;padding-right:10px;">
                                        <div class="col-sm-4">
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/mlbb.png" alt=" "/></a></li>
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/ff.png" alt=" "/></a></li>
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/pubgm.png" alt=" "/></a></li>
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/pubg.png" alt=" "/></a></li>

                                        </div>
                                        <div class="col-sm-4">
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/lolwr.png" alt=" "/></a></li>
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/ff.png" alt=" "/></a></li>
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/ff.png" alt=" "/></a></li>
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/mlbb.png" alt=" "/></a></li>

                                        </div>
                                        <div class="col-sm-4">
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/lolwr.png" alt=" "/></a></li>
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/ff.png" alt=" "/></a></li>
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/ff.png" alt=" "/></a></li>
                                                    <li><a href="womens.html"><img width="60px" src="<?php echo base_url(); ?>assets/images/logo-game/mlbb.png" alt=" "/></a></li>

                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </ul>
                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>