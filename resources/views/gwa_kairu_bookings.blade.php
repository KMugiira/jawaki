@extends('master')



@section('content')


    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
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
    <link rel='stylesheet' id='sow-social-media-buttons-flat-f9f58ec69cf0-css'  href='http://jawakiproperty.com/wp-content/uploads/siteorigin-widgets/sow-social-media-buttons-flat-f9f58ec69cf0.css?ver=4.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='sydney-fonts-css'  href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C400italic%2C600%7CRaleway%3A400%2C500%2C600' type='text/css' media='all' />
    <link rel='stylesheet' id='sydney-style-css'  href='http://jawakiproperty.com/wp-content/themes/sydney/style.css?ver=20180213' type='text/css' media='all' />
    <<style id='sydney-style-inline-css' type='text/css'>
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
     <script type="text/javascript">var ajaxurl = 'http://jawakiproperty.com/wp-admin/admin-ajax.php';</script>
</head>

<body class="page-template-default page page-id-771 page-child parent-pageid-53">

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


    <div class="sydney-hero-area">
        <div class="header-image">
            <div class="overlay"></div>			<img class="header-inner" src="http://jawakiproperty.com/wp-content/themes/sydney/images/header.jpg" width="1920" alt="Jawaki property" title="Jawaki property">
        </div>

    </div>


    <div id="content" class="page-wrap">
        <div class="container content-wrapper">
            <div class="row">
                <div id="primary" class="content-area col-md-9">
                    <main id="main" class="post-wrap" role="main">



                        <article id="post-771" class="post-771 page type-page status-publish has-post-thumbnail hentry">
                            <header class="entry-header">
                                <h1 class="title-post entry-title">Gwa Kairu Bookings</h1>	</header><!-- .entry-header -->

                            <div class="row">
                                <img src="{{asset('asset/images/2018/03/IMG_5460.jpg')}}" alt="Plot Layout" width="400" height="200">
                            </div>
                            <div class="entry-content">

                                <article id="post-708" class="post-708 event type-event status-publish has-post-thumbnail hentry event-categories-booking event-categories-buying">
                                    <div class="entry-content">
                                        <p><strong>Location</strong><br />
                                            <a href="http://jawakiproperty.com/locations/athi-2/">Gwa Kairu(K.U Ruiru Campus)</a></p>
                                        <p><strong>Categories</strong></p>
                                        <ul class="event-categories">
                                            <li><a href="http://jawakiproperty.com/events/categories/booking/">Booking</a></li>
                                            <li><a href="http://jawakiproperty.com/events/categories/buying/">Buying</a></li>
                                        </ul>
                                        <p>40 by 60 fully serviced plots with ready title deeds.</p>
                                        <p>They are located behind k.u Ruiru campus and are 1km from Thika superhighway.</p>
                                        <p>The plots are used for building plots and appartments.</p>
                                        <p><a class="fasc-button fasc-size-medium fasc-type-popout fasc-rounded-medium fasc-ico-before dashicons-book-alt" style="background-color: #28a697; color: #ffffff;" href="{{url('jawaki_bookings')}}">Book Now</a></p>
                                        <p><a class="fasc-button fasc-size-medium fasc-type-popout fasc-rounded-medium fasc-ico-before dashicons-arrow-down-alt" style="background-color: #28a697; color: #ffffff;" href="http://jawakiproperty.com/events/athi_1/#">Download Title Deed (Recommended)</a></p>
                                    </div>
                                </article>
                                <p>&nbsp;<br />
                                    <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15956.163793398438!2d37.0015032162809!3d-1.1310519867996476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMDcnNTEuOCJTIDM3wrAwMCczNi45IkU!5e0!3m2!1sen!2ske!4v1523441598115" width="600" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                                <div id="comments" class="comments-area">
                                    <div id="respond" class="comment-respond">
                                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
                                        <form id="commentform" class="comment-form" action="http://jawakiproperty.com/wp-comments-post.php" method="post" novalidate="">
                                            <p class="logged-in-as">&nbsp;</p>
                                            <p class="comment-form-comment"><label for="comment">Comment</label>&nbsp;<textarea id="comment" cols="45" maxlength="65525" name="comment" required="required" rows="8"></textarea></p>
                                            <p class="form-submit"><input id="submit" class="submit" name="submit" type="submit" value="Post Comment"></p>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer">
                            </footer><!-- .entry-footer -->
                        </article><!-- #post-## -->



                    </main><!-- #main -->
                </div><!-- #primary -->


                <div id="secondary" class="widget-area col-md-3" role="complementary">
                    <aside id="theme-my-login-2" class="widget widget_theme_my_login"><h3 class="widget-title">Log In</h3>
                        <div class="tml tml-login" id="theme-my-login1">
                            <form name="loginform" id="loginform1" action="/home/login/property/athi-bookings/?instance=1" method="post">
                                <p class="tml-user-login-wrap">
                                    <label for="user_login1">Username or E-mail</label>
                                    <input type="text" name="log" id="user_login1" class="input" value="" size="20" />
                                </p>

                                <p class="tml-user-pass-wrap">
                                    <label for="user_pass1">Password</label>
                                    <input type="password" name="pwd" id="user_pass1" class="input" value="" size="20" autocomplete="off" />
                                </p>

                                <input type="hidden" name="_wp_original_http_referer" value="/home/login/property/athi-bookings/" />
                                <div class="tml-rememberme-submit-wrap">
                                    <p class="tml-rememberme-wrap">
                                        <input name="rememberme" type="checkbox" id="rememberme1" value="forever" />
                                        <label for="rememberme1">Remember Me</label>
                                    </p>

                                    <p class="tml-submit-wrap">
                                        <input type="submit" name="wp-submit" id="wp-submit1" value="Log In" />
                                        <input type="hidden" name="redirect_to" value="http://jawakiproperty.com/wp-admin/" />
                                        <input type="hidden" name="instance" value="1" />
                                        <input type="hidden" name="action" value="login" />
                                    </p>
                                </div>
                            </form>
                            <ul class="tml-action-links">
                                <li><a href="http://jawakiproperty.com/register-2/" rel="nofollow">Register</a></li>
                                <li><a href="http://jawakiproperty.com/lostpassword/" rel="nofollow">Lost Password</a></li>
                            </ul>
                        </div>
                    </aside>
                </div><!-- #secondary -->
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

<!-- Dynamic page generated in 1.523 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-04-23 16:27:23 -->

<!-- Compression = gzip -->
<!-- super cache -->

@endsection