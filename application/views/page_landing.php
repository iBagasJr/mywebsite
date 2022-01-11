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
    <title>MyWEBSITE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/logo.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <!--===============================================================================================-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,400italic,500italic,700' rel='stylesheet' type='text/css'>
<style>
</style>
</head>
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
    
<body>

<!-- Preloader -->
<div class="animationload">
    <div class="loader">
    </div>
</div> 
<!-- End Preloader -->

<!-- =========================
         HOME
========================== -->

<section id="home">
    <div class="content">
        <div id="large-header" class="large-header">
            <div id="countdown_dashboard" class="home-main container">
                <div class="row" style="padding-bottom:10px;">
                    <div class="logo">
                        <img style="width:100px;height:100px;"src="<?php echo base_url(); ?>assets/img/logo.gif" alt="logo">
                    </div>
                </div>
                <div class="row">
                    <div class="container text-left">
                      <div class="full border" style="overflow: auto;">
                        
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="social list-inline">
                                    <li><a href="https://www.linkedin.com/in/bagas-adi-pratama-59a5a2168/" target="_blank"><img style="width:60px;height:60px;" src="<?php echo base_url(); ?>assets/img/lg-linkedln.png" border="0" alt="logo" onmouseover='this.src="<?php echo base_url(); ?>assets/img/lg-linkedln-1.png"'
                                        onmouseout='this.src="<?php echo base_url(); ?>assets/img/lg-linkedln.png"'/>
                                        </a>
                                    </li>
                                    <li><a href="https://wa.me/6281316995152" target="_blank"><img style="width:60px;height:60px;" src="<?php echo base_url(); ?>assets/img/lg-wa.png" border="0" alt="logo" onmouseover='this.src="<?php echo base_url(); ?>assets/img/lg-wa-1.png"'
                                        onmouseout='this.src="<?php echo base_url(); ?>assets/img/lg-wa.png"'/>
                                        </a>
                                    </li>
                                    <li><a href="https://mail.google.com/mail/u/0/?fs=1&to=secret030598@gmail.com&su=SUBJECT&body=BODY&tf=cm" target="_blank"><img style="width:60px;height:60px;" src="<?php echo base_url(); ?>assets/img/lg-gmail.png" border="0" alt="logo" onmouseover='this.src="<?php echo base_url(); ?>assets/img/lg-gmail-1.png"'
                                        onmouseout='this.src="<?php echo base_url(); ?>assets/img/lg-gmail.png"'/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <p style="margin-top:10px;font-size:14px;" id="text"></p>
                        </div>
                        <div class="row">
                          <p style="color:white;font-size:14px;" href="" class="typewrite" data-period="2000" data-type='[ "Copyright 2021", "Made By Bagas Adi Pratama"]'>
                            <span class="wrap"></span>
                          </p>
                        </div>
                    </div>
                </div>
            </div> <!-- END COUNTDOWN -->
        </div> <!-- LARGE HEADER -->
    </div> <!-- END CONTENT -->
</section>


    
<!-- JAVASCRIPTS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.lwtCountdown-1.0.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugin.js"></script>
<script src="<?php echo base_url(); ?>assets/js/animated.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  
<script type="text/javascript">
var p = document.getElementById('text');
p.innerHTML = '';
var n = 0;
var d = new Date();
var s = d.getSeconds();
var m = d.getMinutes();
var h = d.getHours();
if (m < 10){
  m = "0" + m
}
if (s < 10){
  s = "0" + s
}
if (h < 10){
  h = "0" + h
}
    var str = h + ":" + m + ":"+ s + " ";
    if(h > 11){
      str += "PM";
    } else {
      str += "AM";
    }
var typeTimer = setInterval(function() {
  n = n + 1;
  p.innerHTML = str.slice(0, n);
  if (n === str.length) {
    clearInterval(typeTimer);
    p.innerHTML = str;
    n = 0;
    setInterval(function() {

      if (n === 0) {
        p.innerHTML = str + "|";
        n = 1;
      } else {
        p.innerHTML = str;
        n = 0;
      };
    }, 500);
  };
}, 360);

var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

</script>

</body>
</html>