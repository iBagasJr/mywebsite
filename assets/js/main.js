/*
  Template Name : Reactia
  Author: Harry
  Create Date: 05/10/2014
  Version: v1.0
*/

/* ------------------------------------------------------------------------------
 This is jquery module for main page
 ------------------------------------------------------------------------------ */

 /* Global constants */

 /*global jQuery */
 jQuery(function ($) {
  'use strict';


  /**
  * Subscription Form Application
  */
  var SubscribeFormApp = {
    $subscribeForm: $("#subscribe_form"),
    $submitFormBtn: $("#subscribe_btn"),
    $subscribeFormEmail: $("#subscribe_email"),
    $confirmMessage: $("#sformMessage"),
    $submitUrl: 'sendmail.php',

    //contact form submit handler
    subscribeFormSubmit: function(evt) {
      
      var email = this.$subscribeFormEmail.val();
      if (!(/(.+)@(.+){1,}\.(.+){1,}/.test(email))) {
        this.$subscribeFormEmail.addClass("validation");
      }
      else {
        this.$subscribeFormEmail.removeClass("validation");
        var resulttext = $.ajax({
          type: "POST",
          url: this.$submitUrl,
          data: this.$subscribeForm.serialize(),
          async: false,
          success: function(status) {}
        }).responseText;

        this.$confirmMessage.html(resulttext);
        this.$subscribeForm.delay(100).slideUp(1000);
        this.$confirmMessage.delay(500).slideDown(500);
        //reseting email input
        this.$subscribeFormEmail.val('');
      }
      evt.preventDefault(); 
      return false;
    },
    bindEvents: function() {
      //binding submit event
      this.$submitFormBtn.on('click', this.subscribeFormSubmit.bind(this));
    },
    init: function() {
      //initializing the subscription form
      console.log('Subscription form is initialized');
      this.bindEvents();
    }
  };


  /**
  * Contact Form Application
  */
  var ContactFormApp = {
    $contactForm: $("#contactForm"),
    $contactFormBtn: $("#contact_submit_btn"),
    $contactFormName: $("#contact_name"),
    $contactFormEmail: $("#contact_email"),
    $contactFormMessage: $("#contact_message"),
    $confirmMessage: $("#cformSuccessMsg"),
    $submitUrl: 'contact.php',

    //Validate Contact Us Data
    validate: function() {
      var err = "";
      //validating name
      var title = this.$contactFormName.val();
      
      if (title == "Name" || title == "" || title == null) {
        this.$contactFormName.addClass("validation");
        err = "error";
      } else {
        this.$contactFormName.removeClass("validation");
      }

      //validating email
      var email = this.$contactFormEmail.val();
      if (!(/(.+)@(.+){2,}\.(.+){2,}/.test(email))) {
        this.$contactFormEmail.addClass("validation");
        err = "error";
      } else {
        this.$contactFormEmail.removeClass("validation");
      }

      //validating message
      var message = this.$contactFormMessage.val();
      if (message == "Message" || message == "" || message == null) {
        this.$contactFormMessage.addClass("validation");
        err = "error";
      } else {
        this.$contactFormMessage.removeClass("validation");
      }
      return err;
    },
    //contact form submit handler
    contactFormSubmit: function(obj) {
      if (this.validate() == "") {
        var resulttext = $.ajax({
          type: "POST",
          url: this.$submitUrl,
          data: this.$contactForm.serialize(),
          async: false,
          success: function(status) {}
        }).responseText;

        this.$confirmMessage.html(resulttext);
        this.$contactForm.delay(100).slideUp(1000);
        this.$confirmMessage.delay(500).slideDown(500);
      
        this.$contactFormName.val('');
        this.$contactFormEmail.val('');
        this.$contactFormMessage.val('');
      }
      return false;
    },
    bindEvents: function() {
      //binding submit event
      this.$contactFormBtn.on('click', this.contactFormSubmit.bind(this));
    },
    init: function() {
      //initializing the contact form
      console.log('Contact form is initialized');
      this.bindEvents();
      return this;
    }
  };

  var App = {
    $options: {},
    $loader: $(".loader"),
    $animationload: $(".animationload"),
    $countdown: $('#countdown_dashboard'),

    bindEvents: function() {
      //binding events
      $(window).on('load', this.load.bind(this));
      $(document).on('ready', this.docReady.bind(this));
    },
    load: function() {
      /* ==============================================
      1.Page Preloader
      =============================================== */
      this.$loader.delay(300).fadeOut();
      this.$animationload.delay(600).fadeOut("slow");
    },
    docReady: function() {
      /* -----------------------------------------------------------------------
        Countdown
        ----------------------------------------------------------------------- */
        this.$countdown.countDown({
          targetDate: {
            'day':    this.$options.day,
            'month':  this.$options.month,
            'year':   this.$options.year,
            'hour':   this.$options.hour,
            'min':    this.$options.min,
            'sec':    this.$options.sec
          },
          omitWeeks: true
        });

      /* ==============================================
      NiceScroll
      =============================================== */
      $("html").niceScroll({
        scrollspeed: 50,
        mousescrollstep: 38,
        cursorwidth: 7,
        cursorborder: 0,
        autohidemode: true,
        zindex: 9999999,
        horizrailenabled: false,
        cursorborderradius: 0
      });

      /* ==============================================
      Parallax
      =============================================== */
      $(window).stellar({
        horizontalScrolling: false,
        responsive: true,
        scrollProperty: 'scroll',
        parallaxElements: false,
        horizontalOffset: 0,
        verticalOffset: 0
      });

      //custom app
      //subscription form
      SubscribeFormApp.init();
      //contat form
      ContactFormApp.init();
    },
    init: function (_options) {
      $.extend(this.$options, _options);
      this.bindEvents();
    }
  }

  //Initializing the app
  //passing the countdown date
  App.init({day: 18, month: 2, year: 2016, hour: 11, min: 59, sec: 59});
});