
       <!--===============================================================================================-->
	    <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/bootstrap/js/popper.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/slick/slick.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/js/slick-custom.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/parallax100/parallax100.js"></script>
        <script type="text/javascript">
            $('.parallax100').parallax100();
        </script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/p_m/vendor/lightbox2/js/lightbox.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/p_m/js/main.js"></script>
        <!--=======      NEW        =======================================================================-->
        <!-- //login -->
        <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- js -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/s_m/js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <script src="<?php echo base_url(); ?>assets/s_m/modernizr.custom.js"></script>
        <!-- Custom-JavaScript-File-Links --> 
        <!-- cart-js -->
        <script src="<?php echo base_url(); ?>assets/s_m/js/minicart.min.js"></script>
        <script>
            // Mini Cart
            paypal.minicart.render({
                action: '#'
            });

            if (~window.location.search.indexOf('reset=true')) {
                paypal.minicart.reset();
            }
        </script>
        <!-- //cart-js --> 
        <!-- script for responsive tabs -->						
        <script src="<?php echo base_url(); ?>assets/s_m/js/easy-responsive-tabs.js"></script>
        <script>
            $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
            }
            });
            $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
            });
            });
        </script>
        <!-- //script for responsive tabs -->		
        <!-- stats -->
        <script src="<?php echo base_url(); ?>assets/s_m/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/s_m/jquery.countup.js"></script>
        <script>
            $('.counter').countUp();
        </script>
        <!-- //stats -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/s_m/js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/s_m/js/jquery.easing.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                */
                $().UItoTop({ easingType: 'easeOutQuart' });
                                 
                });
        </script>
        <!-- //here ends scrolling icon -->
        <!-- for bootstrap working -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/s_m/js/bootstrap.js"></script>
    <script>
      var btnDelete = document.getElementById('clear');
      var inputFocus = document.getElementById('inputFocus');
      //- btnDelete.on('click', function(e) {
      //-   e.preventDefault();
      //-   inputFocus.classList.add('isFocus')
      //- })
      //- inputFocus.addEventListener('click', function() {
      //-   this.classList.add('isFocus')
      //- })
      btnDelete.addEventListener('click', function(e)
      {
        e.preventDefault();
        inputFocus.value = ''
      })
      document.addEventListener('click', function(e)
      {
        if (document.getElementById('first').contains(e.target))
        {
          inputFocus.classList.add('isFocus')
        }
        else
        {
          // Clicked outside the box
          inputFocus.classList.remove('isFocus')
        }
      });

    </script>
    </body>
</html>