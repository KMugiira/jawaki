@extends ('master')



@section('content')




<body class="home page-template page-template-page-templates page-template-page_front-page page-template-page-templatespage_front-page-php page page-id-15 page-parent">

<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>


   <!-- <header id="masthead" class="site-header" role="banner">
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        <a href="http://jawakiproperty.com/" title="Jawaki property"><img class="site-logo" src="http://jawakiproperty.com/wp-content/uploads/2018/03/20545152_659623687576805_6660365032157946050_o-Copy-1.jpg" alt="Jawaki property" /></a>
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12">
                        <div class="btn-menu"></div>
                        <nav id="mainnav" class="mainnav" role="navigation">
                            <div class="menu-main-container"><ul id="menu-main" class="menu"><li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-15 current_page_item menu-item-36"><a href="{{url('home')}}">home</a></li>
                                    <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="{{url('about')}}">about us</a></li>
                                    <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="{{url('contact')}}">contacts</a></li>
                                    <li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="{{url('blog')}}">blog</a></li>
                                    <li id="menu-item-136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"><a href="{{url('register')}}">Register</a></li>
                                    <li id="menu-item-137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137"><a href="{{url('login')}}">Login</a></li>
                                </ul></div>					</nav><!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->


    <div class="sydney-hero-area">

        <div id="slideshow" class="header-slider" data-speed="0" data-mobileslider="responsive">
            <div class="slides-container">

                <div class="slide-item slide-item-1" style="background-image:url('asset/images/real-estate-e1516612768994.jpg');">
                    <img class="mobile-slide preserve" src="{{asset('asset/images/real-estate-e1516612768994.jpg')}}" alt=""/>
                    <div class="slide-inner">
                        <div class="contain animated fadeInRightBig text-slider">
                            <h2 class="maintitle">Looking for a property?</h2>
                            <p class="subtitle">Find your dream property now!</p>
                        </div>
                        <a href="{{url('login')}}" class="roll-button button-slider">Get started now</a>                    </div>
                </div>

            </div>

            <div class="slide-inner text-slider-stopped">
                <div class="contain text-slider">
                    <h2 class="maintitle">Looking for a property?</h2>
                    <p class="subtitle">Find your dream property now!</p>
                </div>
                <a href="{{url('login')}}" class="roll-button button-slider">Get started now</a>    </div>
        </div>

        <div class="header-image">
            <div class="overlay"></div>			<img class="header-inner" src="{{asset('asset/images/header.jpg')}}" width="1920" alt="Jawaki property" title="Jawaki property">
        </div>

    </div>


    <div id="content" class="page-wrap">
        <div class="container content-wrapper">
            <div class="row">
                <div id="primary" class="fp-content-area">
                    <main id="main" class="site-main" role="main">

                        <div class="entry-content">
                            <div id="pl-15" class="panel-layout">
                                <div id="pg-15-0" class="panel-grid panel-has-style">
                                    <div class="panel-row-style panel-row-style-for-15-0" style="padding: 100px 0;" data-overlay="true">
                                        <div id="pgc-15-0-0" class="panel-grid-cell" data-weight="1">
                                            <div id="panel-15-0-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="0">
                                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                                    <div class="siteorigin-widget-tinymce textwidget">
                                                        <p><div class="ich-settings-main-wrap">
                                                            <section id="rem-search-box" class="no-margin search-property-page">
                                                                <form data-resselector="" class="search-property-form" action="" method="get" id="search-property" data-ajaxurl="http://jawakiproperty.com/wp-admin/admin-ajax.php">
                                                                    <input type="hidden" name="action" value="rem_search_property">
                                                                    <div class="search-container fixed-map">
                                                                        <div class="search-options sample-page">
                                                                            <div class="searcher">
                                                                                <div class="row margin-div wcp-eq-height">

                                                                                    <div class="col-sm-6 col-md-6 margin-bottom">
                                                                                        <input class="form-control" type="text" name="search_property" id="keywords" placeholder="Keywords" />
                                                                                    </div>


                                                                                    <div class="col-sm-6 col-md-6 margin-bottom">
                                                                                        <select class="dropdown" data-settings='{"cutOff": 5}' name="property_type">
                                                                                            <option value="">-- Property Type --</option>
                                                                                            <option value="Duplex">Duplex</option><option value="House">House</option><option value="Office">Office</option><option value="Retail">Retail</option><option value="Vila">Vila</option>
                                                                                        </select>
                                                                                    </div>


                                                                                    <div class="col-sm-6 col-md-6 margin-bottom">
                                                                                        <select class="dropdown" data-settings='{"cutOff": 5}' name="property_purpose">
                                                                                            <option value="">-- Purpose --</option>
                                                                                            <option value="Rent">Rent</option><option value="Sell">Sell</option>									</select>
                                                                                    </div>


                                                                                    <div class="col-sm-6 col-md-6 margin-bottom">
                                                                                        <span id="span-property_address" data-text="Address"></span>
                                                                                        <input class="form-control" name="property_address" placeholder="Address" type="text" id="property_address" value=""/>
                                                                                    </div>


                                                                                    <div class="col-sm-6 col-md-6 margin-bottom">
                                                                                        <span id="span-property_country" data-text="Country"></span>
                                                                                        <input class="form-control" name="property_country" placeholder="Country" type="text" id="property_country" value=""/>
                                                                                    </div>



                                                                                    <div class="p-slide-wrap col-sm-6 col-md-6 margin-bottom">
                                                                                        <div class="slider price-range">
                                                                                        </div>
                                                                                        <div class="price-slider price">
                                                                                            <span id="price-value-min"></span>
                                                                                            <span class="separator">KSh</span>
                                                                                            <span id="price-value-max"></span>
                                                                                        </div>
                                                                                        <input type="hidden" name="price_min" id="min-value">
                                                                                        <input type="hidden" name="price_max" id="max-value">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row filter hide-filter hidden-xs hidden-sm">
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Attic]" data-labelauty="Attic">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Gas Heat]" data-labelauty="Gas Heat">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Balcony]" data-labelauty="Balcony">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Wine Cellar]" data-labelauty="Wine Cellar">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Basketball Court]" data-labelauty="Basketball Court">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Trash Compactors]" data-labelauty="Trash Compactors">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Fireplace]" data-labelauty="Fireplace">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Pool]" data-labelauty="Pool">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Lake View]" data-labelauty="Lake View">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Solar Heat]" data-labelauty="Solar Heat">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Separate Shower]" data-labelauty="Separate Shower">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Wet Bar]" data-labelauty="Wet Bar">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Remodeled]" data-labelauty="Remodeled">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Skylights]" data-labelauty="Skylights">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Stone Surfaces]" data-labelauty="Stone Surfaces">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Golf Course]" data-labelauty="Golf Course">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Health Club]" data-labelauty="Health Club">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Backyard]" data-labelauty="Backyard">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Pet Allowed]" data-labelauty="Pet Allowed">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Office/Den]" data-labelauty="Office/Den">
                                                                                    </div>
                                                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                        <input class="labelauty" type="checkbox" name="detail_cbs[Laundry]" data-labelauty="Laundry">
                                                                                    </div>
                                                                                </div><!-- ./filter -->
                                                                                <div class="margin-div footer">
                                                                                    <button type="button" class="btn btn-default more-button hidden-xs hidden-sm">
                                                                                        More Filters							</button>
                                                                                    <button type="submit" class="btn btn-default search-button">
                                                                                        Search						</button>
                                                                                </div><!-- ./footer -->
                                                                            </div><!-- ./searcher -->
                                                                        </div><!-- search-options -->
                                                                    </div><!-- search-container fixed-map -->
                                                                </form>
                                                            </section>


                                                            <section id="grid-content" class="search-results">
                                                                <div class="loader text-center margin-bottom" style="display:none;margin-top:20px;">
                                                                    <img src="{{asset('asset/images/2018/03/1-1-2.jpg')}}" alt="Loading...">
                                                                </div>
                                                                <div class="searched-properties">
                                                                </div>
                                                            </section>
                                                        </div><div class="ich-settings-main-wrap"><div class="row"><div id="property-385" class="col-sm-3 post-385 rem_property type-rem_property status-publish hentry""><div class="landz-box-property box-grid">
                                                                    <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                                                        <span class="cover"></span>
                                                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5479-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="453" srcset="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1.jpg 448w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-300x200.jpg 300w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-230x154.jpg 230w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-350x234.jpg 350w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-272x182.jpg 272w" sizes="(max-width: 448px) 100vw, 448px" />		<h3 class="title">Murera Magomano</h3>

                                                                        <h3 class="title">Mwireri</h3>
                                                                    </a>
                                                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                                                    <span class="address"><i class="fa fa-map-marker"></i> Some Area, City</span>
                                                                    <span class="description">mwireri 40 by 80 plots on sale</span>

                                                                    <dl class="detail">
                                                                        <dt class="area">:</dt><dd><span>3200 square meters</span></dd>
                                                                    </dl>

                                                                    <div class="footer">
                                                                        <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                                                                    </div>
                                                                </div></div><div id="property-394" class="col-sm-3 post-394 rem_property type-rem_property status-publish has-post-thumbnail hentry""><div class="landz-box-property box-grid">
                                                                <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                                                    <span class="cover"></span>
                                                                    <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5375-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="394" srcset="{{asset('asset/images/2018/03/IMG_5375-1.jpg 448w, images/2018/03/IMG_5375-1-300x200.jpg 300w, images/2018/03/IMG_5375-1-230x154.jpg 230w, images/2018/03/IMG_5375-1-350x234.jpg 350w, images/2018/03/IMG_5375-1-272x182.jpg')}} 272w" sizes="(max-width: 448px) 100vw, 448px" />		<h3 class="title">Kwa murage bypass</h3>
                                                                </a>
                                                                <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                                                <span class="address"><i class="fa fa-map-marker"></i> juja farm</span>
                                                                <span class="description">50 by 100 kwa murage bypass plots on sale</span>

                                                                <dl class="detail">
                                                                    <dt class="area">:</dt><dd><span>5000 square meters</span></dd>
                                                                </dl>

                                                                <div class="footer">
                                                                    <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                                                                </div>
                                                            </div></div><div id="property-402" class="col-sm-3 post-402 rem_property type-rem_property status-publish has-post-thumbnail hentry""><div class="landz-box-property box-grid">
                                                            <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                                                <span class="cover"></span>
                                                                <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5379-5.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="402" srcset="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5379-5.jpg 448w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5379-5-300x200.jpg 300w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5379-5-230x154.jpg 230w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5379-5-350x234.jpg 350w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5379-5-272x182.jpg 272w" sizes="(max-width: 448px) 100vw, 448px" />		<h3 class="title">Athi</h3>
                                                            </a>
                                                            <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                                            <span class="address"><i class="fa fa-map-marker"></i> athi</span>
                                                            <span class="description">athi 40 by 80 plots on sale</span>

                                                            <dl class="detail">
                                                                <dt class="area">:</dt><dd><span>3200 square meters</span></dd>
                                                            </dl>

                                                            <div class="footer">
                                                                <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                                                            </div>
                                                        </div></div><div id="property-415" class="col-sm-3 post-415 rem_property type-rem_property status-publish has-post-thumbnail hentry""><div class="landz-box-property box-grid">
                                                        <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                                            <span class="cover"></span>
                                                            <img width="448" height="299" src="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5387-2.jpg" class="img-responsive wp-post-image" alt="" data-pid="415" srcset="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5387-2.jpg 448w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5387-2-300x200.jpg 300w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5387-2-230x154.jpg 230w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5387-2-350x234.jpg 350w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5387-2-272x182.jpg 272w" sizes="(max-width: 448px) 100vw, 448px" />		<h3 class="title">Athi oasis</h3>
                                                        </a>
                                                        <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                                        <span class="address"><i class="fa fa-map-marker"></i> athi oasis</span>
                                                        <span class="description">Athi oasis plots on sale</span>

                                                        <dl class="detail">
                                                            <dt class="area">:</dt><dd><span>3200 square meters</span></dd>
                                                        </dl>

                                                        <div class="footer">
                                                            <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                                                        </div>
                                                    </div></div><div id="property-424" class="col-sm-3 post-424 rem_property type-rem_property status-publish has-post-thumbnail hentry""><div class="landz-box-property box-grid">
                                                    <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                                        <span class="cover"></span>
                                                        <img width="448" height="299" src="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5428-1.jpg" class="img-responsive wp-post-image" alt="" data-pid="424" srcset="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5428-1.jpg 448w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5428-1-300x200.jpg 300w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5428-1-230x154.jpg 230w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5428-1-350x234.jpg 350w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5428-1-272x182.jpg 272w" sizes="(max-width: 448px) 100vw, 448px" />		<h3 class="title">Bypass Mug&#8217;etho</h3>
                                                    </a>
                                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                                    <span class="address"><i class="fa fa-map-marker"></i> juja farm</span>
                                                    <span class="description">Bypass Mug'etho plots on sale</span>

                                                    <dl class="detail">
                                                        <dt class="area">:</dt><dd><span>3200 square meters</span></dd>
                                                    </dl>

                                                    <div class="footer">
                                                        <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                                                    </div>
                                                </div></div><div id="property-432" class="col-sm-3 post-432 rem_property type-rem_property status-publish has-post-thumbnail hentry""><div class="landz-box-property box-grid">
                                                <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                                    <span class="cover"></span>
                                                    <img width="448" height="299" src="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5437-1.jpg" class="img-responsive wp-post-image" alt="" data-pid="432" srcset="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5437-1.jpg 448w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5437-1-300x200.jpg 300w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5437-1-230x154.jpg 230w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5437-1-350x234.jpg 350w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5437-1-272x182.jpg 272w" sizes="(max-width: 448px) 100vw, 448px" />		<h3 class="title">Ndarasha plots on sale</h3>
                                                </a>
                                                <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                                <span class="address"><i class="fa fa-map-marker"></i> Ndarasha</span>
                                                <span class="description">Ndarasha 40 by 60 plots on sale</span>

                                                <dl class="detail">
                                                    <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                                </dl>

                                                <div class="footer">
                                                    <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                                                </div>
                                            </div></div><div id="property-441" class="col-sm-3 post-441 rem_property type-rem_property status-publish has-post-thumbnail hentry""><div class="landz-box-property box-grid">
                                            <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                                <span class="cover"></span>
                                                <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5460-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="441" srcset="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5460-1.jpg 448w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5460-1-300x200.jpg 300w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5460-1-230x154.jpg 230w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5460-1-350x234.jpg 350w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5460-1-272x182.jpg 272w" sizes="(max-width: 448px) 100vw, 448px" />		<h3 class="title">Ndurumo quarry</h3>
                                            </a>
                                            <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                            <span class="address"><i class="fa fa-map-marker"></i> Ndurumo</span>
                                            <span class="description">Ndurumo quarry plots on sale 40 by 60 fully services plots with ready title deeds.</span>

                                            <dl class="detail">
                                                <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                            </dl>

                                            <div class="footer">
                                                <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                                            </div>
                                        </div></div><div id="property-448" class="col-sm-3 post-448 rem_property type-rem_property status-publish has-post-thumbnail hentry""><div class="landz-box-property box-grid">
                                        <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                            <span class="cover"></span>
                                            <img width="160" height="107" src="{{asset('asset/images/2018/03/IMG_5471-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="448" />		<h3 class="title">Murera Bypass</h3>
                                        </a>
                                        <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                        <span class="address"><i class="fa fa-map-marker"></i> Murera</span>
                                        <span class="description">Murera bypass plots on sale</span>

                                        <dl class="detail">
                                            <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                        </dl>

                                        <div class="footer">
                                            <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                                        </div>
                                    </div></div><div id="property-453" class="col-sm-3 post-453 rem_property type-rem_property status-publish has-post-thumbnail hentry""><div class="landz-box-property box-grid">
                                    <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                        <span class="cover"></span>
                                        <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5479-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="453" srcset="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1.jpg 448w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-300x200.jpg 300w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-230x154.jpg 230w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-350x234.jpg 350w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-272x182.jpg 272w" sizes="(max-width: 448px) 100vw, 448px" />		<h3 class="title">Murera Magomano</h3>
                                    </a>
                                    <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                                    <span class="address"><i class="fa fa-map-marker"></i> Murera Magomano</span>
                                    <span class="description">Murera Magomano plots on sle</span>

                                    <dl class="detail">
                                        <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                    </dl>

                                    <div class="footer">
                                        <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                                    </div>
                                </div></div><div id="property-459" class="col-sm-3 post-459 rem_property type-rem_property status-publish has-post-thumbnail hentry""><div class="landz-box-property box-grid">
                                <div class="rem-sale rem-sale-top-left"><span>
            sale        </span></div>
                                <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                    <span class="cover"></span>
                                    <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5488.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="459" srcset="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5488.jpg 448w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5488-300x200.jpg 300w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5488-230x154.jpg 230w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5488-350x234.jpg 350w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5488-272x182.jpg 272w" sizes="(max-width: 448px) 100vw, 448px" />		<h3 class="title">Judah Bypass</h3>
                                </a>
                                <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>2,000,000.00</span></span>
                                <span class="address"><i class="fa fa-map-marker"></i> judah bypass</span>
                                <span class="description">Judah bypass plots on sale</span>

                                <dl class="detail">
                                    <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                                </dl>

                                <div class="footer">
                                    <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                                </div>
                            </div></div><div id="property-466" class="col-sm-3 post-466 rem_property type-rem_property status-publish hentry""><div class="landz-box-property box-grid">
                            <a target="" class="hover-effect image image-fill" href="{{url('login')}}">
                                <span class="cover"></span>
                                <img width="448" height="299" src="{{asset('asset/images/2018/03/IMG_5479-1.jpg')}}" class="img-responsive wp-post-image" alt="" data-pid="453" srcset="http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1.jpg 448w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-300x200.jpg 300w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-230x154.jpg 230w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-350x234.jpg 350w, http://jawakiproperty.com/wp-content/uploads/2018/03/IMG_5479-1-272x182.jpg 272w" sizes="(max-width: 448px) 100vw, 448px" />		<h3 class="title">Murera Magomano</h3>

                                <h3 class="title">Gwa kairu(K.u Ruiru campus)</h3>
                            </a>
                            <span class="price"><span class="rem-price-amount"><span class="rem-currency-symbol">KSh</span>0.00</span></span>
                            <span class="address"><i class="fa fa-map-marker"></i> Gwa kairu</span>
                            <span class="description">Gwa kairu plots on sale</span>

                            <dl class="detail">
                                <dt class="area">:</dt><dd><span>2400 square meters</span></dd>
                            </dl>

                            <div class="footer">
                                <a target="" class="btn btn-default" href="{{url('login')}}">Details</a>
                            </div>
                        </div></main></div></div><!--<div class="text-center"></div></div></p>
        <p><a class="fasc-button fasc-size-medium fasc-type-flat fasc-rounded-medium fasc-ico-before dashicons-book-alt" style="background-color: #38bd93; color: #ffffff;" href="{{url('shop')}}">BOOKINGS</a></p>
        <p><a class="fasc-button fasc-size-medium fasc-type-flat fasc-rounded-medium fasc-ico-before dashicons-calendar" style="background-color: #28bda7; color: #ffffff;" href="{{url('register')}}">REGISTER</a></p>
    </div>-->

</div><!-- .entry-content -->

</main><!-- #main -->
</div><!-- #primary -->

</div>
</div>
</div><!-- #content -->







</body>
</html>

<!-- Dynamic page generated in 1.736 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-04-23 15:54:52 -->

<!-- Compression = gzip -->
<!-- super cache -->

@endsection