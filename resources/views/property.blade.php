@extends('master')



@section('content')




    <link rel='dns-prefetch' href='//maps.googleapis.com' />
    <link rel='dns-prefetch' href='//netdna.bootstrapcdn.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Jawaki property &raquo; Feed" href="http://jawakiproperty.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Jawaki property &raquo; Comments Feed" href="http://jawakiproperty.com/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Jawaki property &raquo; Posts by isayegon Feed" href="http://jawakiproperty.com/author/isayegon/feed/" />
    <!-- This site uses the Google Analytics by MonsterInsights plugin v7.0.5 - Using Analytics tracking - https://www.monsterinsights.com/ -->
    <!-- Note: MonsterInsights is not currently configured on this site. The site owner needs to authenticate with Google Analytics in the MonsterInsights settings panel. -->
    <!-- No UA code set -->
    <!-- / Google Analytics by MonsterInsights -->

    <link rel='stylesheet' id='dashicons-css'  href='http://jawakiproperty.com/wp-includes/css/dashicons.min.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='theme-my-login-css'  href='http://jawakiproperty.com/wp-content/plugins/theme-my-login/theme-my-login.css?ver=6.4.10' type='text/css' media='all' />
    <link rel='stylesheet' id='ultimate-tables-style-css'  href='http://jawakiproperty.com/wp-content/plugins/ultimate-tables/css/ultimate-tables.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='ultimate-datatables-style-css'  href='http://jawakiproperty.com/wp-content/plugins/ultimate-tables/css/jquery.dataTables.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='wpapp-styles-css'  href='http://jawakiproperty.com/wp-content/plugins/wordpress-easy-paypal-payment-or-donation-accept-plugin/wpapp-styles.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='wpbs-calendar-css'  href='http://jawakiproperty.com/wp-content/plugins/wp-booking-system/css/wpbs-calendar.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='ebp_style-css'  href='http://jawakiproperty.com/wp-content/plugins/eventBookingPro/css/frontend.css?ver=20142209' type='text/css' media='all' />
    <link rel='stylesheet' id='sydney-bootstrap-css'  href='http://jawakiproperty.com/wp-content/themes/sydney/css/bootstrap/bootstrap.min.css?ver=1' type='text/css' media='all' />
    <link rel='stylesheet' id='clean-login-css-css'  href='http://jawakiproperty.com/wp-content/plugins/clean-login/content/style.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='http://jawakiproperty.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='es-widget-css-css'  href='http://jawakiproperty.com/wp-content/plugins/email-subscribers/widget/es-widget.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='events-manager-css'  href='http://jawakiproperty.com/wp-content/plugins/events-manager/includes/css/events_manager.css?ver=5.92' type='text/css' media='all' />
    <link rel='stylesheet' id='finalTilesGallery_stylesheet-css'  href='http://jawakiproperty.com/wp-content/plugins/final-tiles-grid-gallery-lite/scripts/ftg.css?ver=3.3.37' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome_stylesheet-css'  href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='rem-bs-css-css'  href='http://jawakiproperty.com/wp-content/plugins/real-estate-manager/assets/admin/css/bootstrap.min.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='http://jawakiproperty.com/wp-content/plugins/real-estate-manager/assets/front/css/font-awesome.min.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='rem-styles-css-css'  href='http://jawakiproperty.com/wp-content/plugins/real-estate-manager/assets/front/css/rem-styles.css?ver=4.9.5' type='text/css' media='all' />-->
    <style id='rem-styles-css-inline-css' type='text/css'>
        .fotorama__thumb-border, .ich-settings-main-wrap .form-control:focus {
            border-color: #1FB7A6 !important;
        }
        .ich-settings-main-wrap .section-title.line-style {
            border-color: #F2F2F2;
        }
        .landz-box-property.box-grid.mini .price {
            border-top: 4px solid #1FB7A6 !important;
        }
        .landz-box-property.box-grid.mini .price:after {
            border-bottom-color: #1FB7A6 !important;
        }

        .ich-settings-main-wrap .section-title.line-style .title {
            border-color: #1fb7a6;
        }
        .ich-settings-main-wrap .btn-default, .ich-settings-main-wrap .btn,
        #rem-agent-page .my-property .my-property-nav a.next,
        #rem-agent-page .my-property .my-property-nav a.previous {
            border-radius: 0 !important;
            border: none;
            background-color: #fff;
            color: #333;
        }
        .ich-settings-main-wrap .btn-default:hover, .ich-settings-main-wrap .btn:hover,
        #rem-agent-page .my-property .my-property-nav a.next:hover,
        #rem-agent-page .my-property .my-property-nav a.previous:hover {
            border-radius: 0;
            background-color: #e6e6e6;
            color: #333;
        }

        /* Theme Colors */

        #property-content .large-price,
        .ich-settings-main-wrap #filter-box .filter,
        .ich-settings-main-wrap .dropdown.open .carat,
        .ich-settings-main-wrap .dropdown li.active,
        .ich-settings-main-wrap .dropdown li.focus,
        .ich-settings-main-wrap .result-calc,
        .ich-settings-main-wrap .landz-box-property .price,
        .ich-settings-main-wrap input.labelauty + label > span.labelauty-checked-image,
        .ich-settings-main-wrap .skillbar-title,
        .ich-settings-main-wrap .noUi-connect,
        .ich-settings-main-wrap .rem-sale span,
        .ich-settings-main-wrap #user-profile .property-list table thead th,
        .ich-settings-main-wrap .price-slider.price #price-value-min, .price-slider.price #price-value-max,
        input.labelauty:hover + label > span.labelauty-checked-image {
            background-color: #1FB7A6 !important;
        }
        #property-content .details .detail .fa-square,
        .hover-effect .cover:before {
            color: #1FB7A6 !important;
        }
        .ich-settings-main-wrap .dropdown .carat:after {
            border-top: 6px solid #1FB7A6;
        }
        .input.labelauty:hover + label > span.labelauty-checked-image {
            border: none;
        }
        .price-slider.price #price-value-min:after {
            border-left: 6px solid #1FB7A6 !important;
        }
        .price-slider.price #price-value-max:after {
            border-right: 6px solid #1FB7A6 !important;
        }
        .ich-settings-main-wrap .landz-box-property .title {
            border-bottom: 3px solid #1FB7A6;
        }
        .ich-settings-main-wrap #user-profile .property-list table thead th {
            border-bottom: 0;
        }
        .ich-settings-main-wrap .landz-box-property .price:after {
            border-bottom: 10px solid #1FB7A6;
        }
        .landz-box-property dd {
            margin: 0 !important;
        }
        #rem-agent-page .my-property .my-property-nav .button-container {
            border-top: 1px solid #1FB7A6 !important;
        }
        .ich-settings-main-wrap #new-property #position {
            background-color: #1FB7A6 !important;
            color: #333 !important;
        }
        .ich-settings-main-wrap #new-property #position:after {
            border-bottom: 10px solid #1FB7A6 !important;
        }
        .ich-settings-main-wrap .pagination > .active > a,
        .ich-settings-main-wrap .pagination > .active > span,
        .ich-settings-main-wrap .pagination > .active > a:hover,
        .ich-settings-main-wrap .pagination > .active > span:hover,
        .ich-settings-main-wrap .pagination > .active > a:focus,
        .ich-settings-main-wrap .pagination > .active > span:focus {
            background-color: #1FB7A6 !important;
            border-color: #1FB7A6 !important;
        }

    </style>
   <!-- <link rel='stylesheet' id='rem-skillbars-css-css'  href='http://jawakiproperty.com/wp-content/plugins/real-estate-manager/assets/front/lib/skill-bars.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='rem-carousel-css-css'  href='http://jawakiproperty.com/wp-content/plugins/real-estate-manager/assets/front/lib/slick.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='rem-archive-property-css-css'  href='http://jawakiproperty.com/wp-content/plugins/real-estate-manager/assets/front/css/archive-property.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='rem-profile-agent-css-css'  href='http://jawakiproperty.com/wp-content/plugins/real-estate-manager/assets/front/css/profile-agent.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='sow-social-media-buttons-flat-f9f58ec69cf0-css'  href='http://jawakiproperty.com/wp-content/uploads/siteorigin-widgets/sow-social-media-buttons-flat-f9f58ec69cf0.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='sydney-fonts-css'  href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C400italic%2C600%7CRaleway%3A400%2C500%2C600' type='text/css' media='all' />
    <link rel='stylesheet' id='sydney-style-css'  href='http://jawakiproperty.com/wp-content/themes/sydney/style.css?ver=20180213' type='text/css' media='all' />
    <style id='sydney-style-inline-css' type='text/css'>
        .site-header { background-color:rgba(0,0,0,0.9);}
        .site-title { font-size:32px; }
        .site-description { font-size:16px; }
        #mainnav ul li a { font-size:14px; }
        h1 { font-size:52px; }
        h2 { font-size:42px; }
        h3 { font-size:32px; }
        h4 { font-size:25px; }
        h5 { font-size:20px; }
        h6 { font-size:18px; }
        body { font-size:16px; }
        .single .hentry .title-post { font-size:36px; }
        .header-image { background-size:cover;}
        .header-image { height:300px; }
        .site-header.float-header { background-color:rgba(0,0,0,0.9);}
        @media only screen and (max-width: 1024px) { .site-header { background-color:#000000;}}
        .site-title a, .site-title a:hover { color:#ffffff}
        .site-description { color:#ffffff}
        #mainnav ul li a, #mainnav ul li::before { color:#ffffff}
        #mainnav .sub-menu li a { color:#ffffff}
        #mainnav .sub-menu li a { background:#1c1c1c}
        .text-slider .maintitle, .text-slider .subtitle { color:#ffffff}
        body { color:#47425d}
        #secondary { background-color:#ffffff}
        #secondary, #secondary a, #secondary .widget-title { color:#767676}
        .footer-widgets { background-color:#252525}
        .btn-menu { color:#ffffff}
        #mainnav ul li a:hover { color:#d65050}
        .site-footer { background-color:#1c1c1c}
        .site-footer,.site-footer a { color:#666666}
        .overlay { background-color:#000000}
        .page-wrap { padding-top:83px;}
        .page-wrap { padding-bottom:100px;}
        .slide-inner { display:none;}
        .slide-inner.text-slider-stopped { display:block;}
        @media only screen and (max-width: 1025px) {
            .mobile-slide {
                display: block;
            }
            .slide-item {
                background-image: none !important;
            }
            .header-slider {
            }
            .slide-item {
                height: auto !important;
            }
            .slide-inner {
                min-height: initial;
            }
        }
        @media only screen and (max-width: 780px) {
            h1 { font-size: 32px;}
            h2 { font-size: 28px;}
            h3 { font-size: 22px;}
            h4 { font-size: 18px;}
            h5 { font-size: 16px;}
            h6 { font-size: 14px;}
        }

    </style>
    <link rel='stylesheet' id='sydney-font-awesome-css'  href='http://jawakiproperty.com/wp-content/themes/sydney/fonts/font-awesome.min.css?ver=4.9.5' type='text/css' media='all' />
    <!--[if lte IE 9]>
    <link rel='stylesheet' id='sydney-ie9-css'  href='http://jawakiproperty.com/wp-content/themes/sydney/css/ie9.css?ver=4.9.5' type='text/css' media='all' />
    <![endif]-->
    <!--<link rel='stylesheet' id='slb_core-css'  href='http://jawakiproperty.com/wp-content/plugins/simple-lightbox/client/css/app.css?ver=2.6.0' type='text/css' media='all' />
    <link rel='stylesheet' id='forget-about-shortcode-buttons-css'  href='http://jawakiproperty.com/wp-content/plugins/forget-about-shortcode-buttons/public/css/button-styles.css?ver=2.1.1' type='text/css' media='all' />
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/wp-booking-system/js/wpbs.js?ver=4.9.5'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/wp-booking-system/js/custom-select.js?ver=4.9.5'></script>
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=4.9.5'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/sortable.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
    <script type='text/javascript'>
        jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
    </script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/menu.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/wp-a11y.min.js?ver=4.9.5'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
        /* ]]> */
    </script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/resizable.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/jquery/ui/dialog.min.js?ver=1.11.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var EM = {"ajaxurl":"http:\/\/jawakiproperty.com\/wp-admin\/admin-ajax.php","locationajaxurl":"http:\/\/jawakiproperty.com\/wp-admin\/admin-ajax.php?action=locations_search","firstDay":"1","locale":"en","dateFormat":"dd\/mm\/yy","ui_css":"http:\/\/jawakiproperty.com\/wp-content\/plugins\/events-manager\/includes\/css\/jquery-ui.min.css","show24hours":"0","is_ssl":"","bookingInProgress":"Please wait while the booking is being submitted.","tickets_save":"Save Ticket","bookingajaxurl":"http:\/\/jawakiproperty.com\/wp-admin\/admin-ajax.php","bookings_export_save":"Export Bookings","bookings_settings_save":"Save Settings","booking_delete":"Are you sure you want to delete?","booking_offset":"30","bb_full":"Sold Out","bb_book":"Book Now","bb_booking":"Booking...","bb_booked":"Booking Submitted","bb_error":"Booking Error. Try again?","bb_cancel":"Cancel","bb_canceling":"Canceling...","bb_cancelled":"Cancelled","bb_cancel_error":"Cancellation Error. Try again?","txt_search":"Search","txt_searching":"Searching...","txt_loading":"Loading..."};
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('asset/js/events-manager.js')}}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mb_ajax = {"ajaxurl":"http:\/\/jawakiproperty.com\/wp-admin\/admin-ajax.php"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('asset/js/front.js')}}'></script>
    <script type='text/javascript' src='{{asset('asset/js/imagefill.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('asset/js/imagesloaded.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('asset/js/slick.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('asset/js/profile-agent.js')}}'></script>
    <link rel='https://api.w.org/' href='http://jawakiproperty.com/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://jawakiproperty.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{asset('asset/wlwmanifest.xml')}}" />
    <meta name="generator" content="WordPress 4.9.5" />
    <script type="text/javascript">
        (function(url){
            if(/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)){ return; }
            var addEvent = function(evt, handler) {
                if (window.addEventListener) {
                    document.addEventListener(evt, handler, false);
                } else if (window.attachEvent) {
                    document.attachEvent('on' + evt, handler);
                }
            };
            var removeEvent = function(evt, handler) {
                if (window.removeEventListener) {
                    document.removeEventListener(evt, handler, false);
                } else if (window.detachEvent) {
                    document.detachEvent('on' + evt, handler);
                }
            };
            var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
            var logHuman = function() {
                var wfscr = document.createElement('script');
                wfscr.type = 'text/javascript';
                wfscr.async = true;
                wfscr.src = url + '&r=' + Math.random();
                (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(wfscr);
                for (var i = 0; i < evts.length; i++) {
                    removeEvent(evts[i], logHuman);
                }
            };
            for (var i = 0; i < evts.length; i++) {
                addEvent(evts[i], logHuman);
            }
        })('//jawakiproperty.com/?wordfence_lh=1&hid=CACE62FB06C08AAF32B8614DF4ECC240');
    </script>    <script type="text/javascript">var ajaxurl = 'http://jawakiproperty.com/wp-admin/admin-ajax.php';</script>
</head>-->

<body class="archive author author-isayegon author-1">

<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>


    <div class="header-clone"></div>



                    </div>
          <!-- #masthead -->


   <!-- <div class="sydney-hero-area">
        <div class="header-image">
            <div class="overlay"></div>			<img class="header-inner" src="http://jawakiproperty.com/wp-content/themes/sydney/images/header.jpg" width="1920" alt="Jawaki property" title="Jawaki property">
        </div>

    </div>-->


    <div id="content" class="page-wrap">
        <div class="container content-wrapper">
            <div class="row">	<section id="rem-agent-page" class="ich-settings-main-wrap">
                    <div style="max-width:1000px; width:100%; margin:0 auto;">
                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xs-12">


                                        </form><!-- /.form -->
                                    </div><!-- /.col-md-8 -->
                                </div>

                            </div>
                        </div>

                        <div class="section-title line-style no-margin">
                            <h3 class="title">My Properties</h3>
                        </div>

                        <section class="wcp-slick">
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('gwakairu')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5479-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="453" />

                                        <h3 class="title">Gwa kairu(K.u Ruiru campus)</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> Gwa kairu</span>
                                    <span class="description">Gwa kairu plots on sale</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('gwakairu')}}">Details</a>
                                    </div>
                                </div>					</div>
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <div class="rem-sale rem-sale-top-left"><span>
            sale        </span></div>
                                    <a target="" class="hover-effect image image-fill" href="{{url('judah')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5488.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="459" />
                                        <h3 class="title">Judah Bypass</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>2,000,000.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> judah bypass</span>
                                    <span class="description">Judah bypass plots on sale</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('judah')}}">Details</a>
                                    </div>
                                </div>					</div>
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('mureramagomano')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5479-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="453" />
                                        <h3 class="title">Murera Magomano</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> Murera Magomano</span>
                                    <span class="description">Murera Magomano plots on sle</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('mureramagomano')}}">Details</a>
                                    </div>
                                </div>					</div>
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('murerabypass')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5483.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="458" />
                                        <h3 class="title">Murera Bypass</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> Murera</span>
                                    <span class="description">Murera bypass plots on sale</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('murerabypass')}}">Details</a>
                                    </div>
                                </div>					</div>
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('ndurumo')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5460-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="441" />
                                        <h3 class="title">Ndurumo quarry</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> Ndurumo</span>
                                    <span class="description">Ndurumo quarry plots on sale 40 by 60 fully services plots with ready title deeds.</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('ndurumo')}}">Details</a>
                                    </div>
                                </div>					</div>
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('ndarasha')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5437-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="432" />
                                        <h3 class="title">Ndarasha plots on sale</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> Ndarasha</span>
                                    <span class="description">Ndarasha 40 by 60 plots on sale</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('ndarasha')}}">Details</a>
                                    </div>
                                </div>					</div>
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('bypassmugetho')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5428-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="424" />
                                        <h3 class="title">Bypass Mung&#8217;etho</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> juja farm</span>
                                    <span class="description">Bypass Mug'etho plots on sale</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>3200 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('bypassmugetho')}}">Details</a>
                                    </div>
                                </div>					</div>
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('athioasis')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5387-2.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="415"/>
                                        <h3 class="title">Athi oasis</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> athi oasis</span>
                                    <span class="description">Athi oasis plots on sale</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>3200 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('athioasis')}}">Details</a>
                                    </div>
                                </div>					</div>
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('athi')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5379-5.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="402" />
                                        <h3 class="title">Athi</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> athi</span>
                                    <span class="description">athi 40 by 80 plots on sale</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>3200 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('athi')}}">Details</a>
                                    </div>
                                </div>					</div>
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('kwamurage')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5375-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="394" />
                                        <h3 class="title">Kwa murage bypass</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> juja farm</span>
                                    <span class="description">50 by 100 kwa murage bypass plots on sale</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>5000 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('kwamurage')}}">Details</a>
                                    </div>
                                </div>					</div>
                            <div style="padding:10px;">
                                <div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('mwireri')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5375-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="394"/>
                                        <h3 class="title">Mwireri</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> City area</span>
                                    <span class="description">Mwireri 40 by 80 plots on sale</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>5000 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('mwireri')}}">Details</a>
                                    </div>
                                </div>					</div>
                        </section>




                    </div><!-- ./container -->
                </section>
                    </div>
            </div>
        </div>
    </div><!-- #content -->





  <!-- #colophon -->


</div><!-- #page -->

<link rel='stylesheet' id='sow-social-media-buttons-flat-012f80f3c4ef-css'  href='http://jawakiproperty.com/wp-content/uploads/siteorigin-widgets/sow-social-media-buttons-flat-012f80f3c4ef.css?ver=4.9.5' type='text/css' media='all' />
<link rel='stylesheet' id='siteorigin-widget-icon-font-fontawesome-css'  href='http://jawakiproperty.com/wp-content/plugins/so-widgets-bundle/icons/fontawesome/style.css?ver=4.9.5' type='text/css' media='all' />
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/ultimate-tables/js/jquery.dataTables.min.js?ver=1.0'></script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/eventBookingPro/js/helpers.js?ver=20142209'></script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/eventBookingPro/js/jquery.dropdown.js?ver=20142209'></script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/eventBookingPro/js/jquery.ebpFullCalendar.js?ver=20142209'></script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/eventBookingPro/js/frontend.js?ver=20142209'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"http:\/\/jawakiproperty.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var es_widget_notices = {"es_email_notice":"Please enter email address","es_success_message":"Successfully Subscribed.","es_success_notice":"Your subscription was successful! Kindly check your mailbox and confirm your subscription. If you don't see the email within a few minutes, check the spam\/junk folder.","es_email_exists":"Email Address already exists!","es_error":"Oops.. Unexpected error occurred.","es_invalid_email":"Invalid email address","es_try_later":"Please try after some time","es_ajax_url":"http:\/\/jawakiproperty.com\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/email-subscribers/widget/es-widget.js?ver=4.9.5'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var es_widget_page_notices = {"es_email_notice":"Please enter email address","es_success_message":"Successfully Subscribed.","es_success_notice":"Your subscription was successful! Kindly check your mailbox and confirm your subscription. If you don't see the email within a few minutes, check the spam\/junk folder.","es_email_exists":"Email Address already exists!","es_error":"Oops.. Unexpected error occurred.","es_invalid_email":"Invalid email address","es_try_later":"Please try after some time","es_ajax_url":"http:\/\/jawakiproperty.com\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/email-subscribers/widget/es-widget-page.js?ver=4.9.5'></script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/plugins/final-tiles-grid-gallery-lite/scripts/jquery.finalTilesGallery.js?ver=3.3.37'></script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/themes/sydney/js/scripts.js?ver=4.9.5'></script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/themes/sydney/js/main.min.js?ver=20180213'></script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-content/themes/sydney/js/skip-link-focus-fix.js?ver=20130115'></script>
<script type='text/javascript' src='http://jawakiproperty.com/wp-includes/js/wp-embed.min.js?ver=4.9.5'></script>
<script type="text/javascript" id="slb_context">/* <![CDATA[ */if ( !!window.jQuery ) {(function($){$(document).ready(function(){if ( !!window.SLB ) { {$.extend(SLB, {"context":["public","user_guest"]});} }})})(jQuery);}/* ]]> */</script>

</body>
</html>

<!-- Dynamic page generated in 1.672 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-04-23 16:32:25 -->

<!-- Compression = gzip -->
<!-- super cache -->

    @endsection