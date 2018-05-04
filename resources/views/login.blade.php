@extends ('master')



@section('content')




<!--New Login-->


    <body class="page-template-default page page-id-80 page-parent page-child parent-pageid-15">

    <div class="preloader">
        <div class="spinner">
            <div class="pre-bounce1"></div>
            <div class="pre-bounce2"></div>
        </div>
    </div>

    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>


        <div class="header-clone"></div>


     <!--   <header id="masthead" class="site-header" role="banner">
            <div class="header-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-8 col-xs-12">
                            <a href="http://jawakiproperty.com/" title="Jawaki property"><img class="site-logo" src="http://jawakiproperty.com/wp-content/uploads/2018/03/20545152_659623687576805_6660365032157946050_o-Copy-1.jpg" alt="Jawaki property" /></a>
                        </div>
                        <div class="col-md-8 col-sm-4 col-xs-12">
                            <div class="btn-menu"></div>
                            <nav id="mainnav" class="mainnav" role="navigation">
                                <div class="menu-main-container"><ul id="menu-main" class="menu"><li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-page-ancestor menu-item-36"><a href="http://jawakiproperty.com/">home</a></li>
                                        <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="http://jawakiproperty.com/about-us/">about us</a></li>
                                        <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="http://jawakiproperty.com/contacts/">contacts</a></li>
                                        <li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="http://jawakiproperty.com/blog/">blog</a></li>
                                        <li id="menu-item-136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"><a href="http://jawakiproperty.com/register/">Register</a></li>
                                        <li id="menu-item-137" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-80 current_page_item menu-item-137"><a href="http://jawakiproperty.com/home/login/">Login</a></li>
                                    </ul></div>					</nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->


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



                            <article id="post-80" class="post-80 page type-page status-publish hentry">
                                <header class="entry-header">
                                    <h1 class="title-post entry-title">Login</h1>	</header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p><a><div class="cleanlogin-container">

                                                <form class="cleanlogin-form" method="post" action="http://jawakiproperty.com/home/login1-2/">

                                                    <fieldset>
                                                        <div class="cleanlogin-field">
                                                            <input class="cleanlogin-field-username" type="text" name="log" placeholder="Username">
                                                        </div>

                                                        <div class="cleanlogin-field">
                                                            <input class="cleanlogin-field-password" type="password" name="pwd" placeholder="Password">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <input class="cleanlogin-field" type="submit" value="Log in" name="submit">
                                                        <input type="hidden" name="action" value="login">

                                                        <div class="cleanlogin-field cleanlogin-field-remember">
                                                            <input type="checkbox" name="rememberme" value="forever">
                                                            <label>Remember?</label>
                                                        </div>
                                                    </fieldset>


                                                    <div class="cleanlogin-form-bottom">



                                                    </div>

                                                </form>

                                            </div>
                                        </a></p>
                                    <p><a class="fasc-button fasc-size-medium fasc-type-popout fasc-rounded-medium" style="background-color: #28a697; color: #ffffff;" href="{{url('property')}}">Login</a></p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer">
                                </footer><!-- .entry-footer -->
                            </article><!-- #post-## -->



                        </main><!-- #main -->
                    </div><!-- #primary -->


                    <div id="secondary" class="widget-area col-md-3" role="complementary">
                        <aside id="theme-my-login-2" class="widget widget_theme_my_login"><h3 class="widget-title">Log In</h3>
                            <div class="tml tml-login" id="theme-my-login1">
                                <form name="loginform" id="loginform1" action="/home/login/?instance=1" method="post">
                                    <p class="tml-user-login-wrap">
                                        <label for="user_login1">Username or E-mail</label>
                                        <input type="text" name="log" id="user_login1" class="input" value="" size="20" />
                                    </p>

                                    <p class="tml-user-pass-wrap">
                                        <label for="user_pass1">Password</label>
                                        <input type="password" name="pwd" id="user_pass1" class="input" value="" size="20" autocomplete="off" />
                                    </p>

                                    <input type="hidden" name="_wp_original_http_referer" value="/home/login/" />
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

    <!-- Dynamic page generated in 1.437 seconds. -->
    <!-- Cached page generated by WP-Super-Cache on 2018-04-23 16:24:03 -->

    <!-- Compression = gzip -->
    <!-- super cache -->
    <!--End New Login-->


@endsection