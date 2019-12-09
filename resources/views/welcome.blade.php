<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

    <title>TopCar</title>
      
  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheet/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheet/font-awesome.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheet/bootstrap-select.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheet/revslider.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheet/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheet/owl.theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheet/jquery.bxslider.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheet/jquery.mobile-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheet/style.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/stylesheet/responsive.css')}}" media="all">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
    rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">
  
  
 
    <header>
    <div class="header-banner">
  <div class="container">
  <div class="row">
                <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                  <div class="assetBlock">
                    <div style="height: 20px; overflow: hidden;" id="slideshow">
                      <p style="display: block;">Hot days! - <span>50%</span> Get ready for summer! </p>
                      <p style="display: none;">Save up to <span>40%</span> Hurry limited offer!</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-clock-o"></i> Mon - Fri : 09am to 06pm <i class="fa fa-phone"></i> +1 800 789 0000</div>
              </div>
              </div>
              </div>
      <div class="container">
        <div class="row">
          <div id="header">
            <div class="header-container">
            <div class="header-logo"> <a href="/" title="Car HTML" class="logo">
              <div><img src="frontend/images/logo.png" alt="Car Store"></div>
              </a> </div>
              <div class="header__nav">


                <div class="fl-nav-menu">
                  <nav>
                    <div class="mm-toggle-wrap">
                      <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                    </div>
                    <div class="nav-inner">
                      <!-- BEGIN NAV -->
                      <ul id="nav" class="hidden-xs">
                        <li class="active"> <a class="level-top" href="/"><span>Home</span></a></li>
                        <li class="level0 parent "> <a class="level-top" href="/car_for_sale_list"><span>Cars For
                              Sale</span></a>
                        </li> 
                        <li class="level0 parent "> <a class="level-top" href="/spareparts_for_sale_list"><span>Find Parts For
                              Sale</span></a>
                        </li> 
                        <li class="level0 parent "> <a class="level-top" href="/car_review_list"><span>Car Reviews</span></a>

                        </li>
                        <li class="mega-menu hidden-sm"> <a class="level-top" href="/login"><span>Login</span></a>
                        </li>
                        <li class="mega-menu hidden-sm"> <a class="level-top"
                            href="/register"><span>Sell your car</span></a> </li>
                      </ul>
                      <!--nav-->
                    </div>
                  </nav>
                </div>
              </div>

              <!--row-->

            </div>
          </div>
        </div>
      </div>
    </header>
    <!--container-->

    <div class="content">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="section-filter">
              <div class="b-filter__inner bg-grey">
                <h2>Find your right car</h2>
                <form class="b-filter">
                  <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                      <option>Select Make</option>
                      <option>Make 1</option>
                      <option>Make 2</option>
                      <option>Make 3</option>
                    </select>
                  </div>
                  <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                      <option>Select Model</option>
                      <option>Model 1</option>
                      <option>Model 2</option>
                      <option>Model 3</option>
                    </select>
                  </div>
                  <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                      <option>Select All Locations</option>
                      <option>Location 1</option>
                      <option>Location 2</option>
                      <option>Location 3</option>
                    </select>
                  </div>
                  <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                      <option>Select Year</option>
                      <option>2017</option>
                      <option>2016</option>
                      <option>2015</option>
                    </select>
                  </div> 
                  <div>
                    <div class="b-filter__btns">
                      <button class="btn btn-lg btn-primary">search vehicle</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Slider -->
          <div class="home-slider5">
            <div id="thmg-slideshow" class="thmg-slideshow">
              <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                  <ul>
                    <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                      data-thumb='/frontend/images/slide-img1.jpg'><img src='frontend/images/slide-img1.jpg' data-bgfit='cover'
                        data-bgrepeat='no-repeat' alt="banner" />
                      <div class="container">
                        <div class="content_slideshow">
                          <div class="row">
                            <div class="col-lg-3 col-sm-3 col-md-3 "> &nbsp; </div>
                            <div class="col-lg-9 col-sm-9 col-md-9">
                              <div class="info">
                                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500'
                                  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none'
                                  data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                  style='z-index:2; white-space:nowrap;'></div>
                                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500'
                                  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none'
                                  data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                  style='z-index:3; white-space:nowrap;'><span
                                    style="font-weight:normal; display:block">Modern-classic</span> incredible </div>
                                <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500'
                                  data-start='1450' data-easing='Power2.easeInOut' data-splitin='none'
                                  data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                  style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                      data-thumb='frontend/images/slide-img2.jpg'><img src='frontend/images/slide-img2.jpg' data-bgfit='cover'
                        data-bgrepeat='no-repeat' alt="banner" />
                      <div class="container">
                        <div class="content_slideshow">
                          <div class="row">
                            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                            <div class="col-lg-9 col-sm-9 col-md-9">
                              <div class="info">
                                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500'
                                  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none'
                                  data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                  style='z-index:2; white-space:nowrap;'><span>Top Brands 2018</span> </div>
                                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500'
                                  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none'
                                  data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                  style='z-index:3; white-space:nowrap;'><span
                                    style="font-weight:normal; display:block">Modern-classic</span> Decorative </div>
                                <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500'
                                  data-start='1450' data-easing='Power2.easeInOut' data-splitin='none'
                                  data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                  style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                                <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500'
                                  data-start='1500' data-easing='Linear.easeNone' data-splitin='none'
                                  data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                  style='z-index:4; white-space:nowrap;'>  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="tp-bannertimer"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <!--Category slider Start-->
     
      <div class="top-cate">
        <div class="featured-pro container">
          <div>
            <div class="slider-items-products">
              <div class="new_title">
                <h2>Car Body Type </h2>
              </div>
              <div id="top-categories" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
   
                                 
                        @foreach($car_categories as $item)
                            <div class="item" >

                            <div class="pro-img"><img src="{{ asset('uploads/car_category/'.$item->image) }}" alt="Retis lapen casen">
                              <div class="pro-info">{{ $item->name }}</div>
                                
                            </div>
                            </div>
                        @endforeach

                       
                    
                  </div>
                    </div>
                  </div>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      
      <!-- best Pro Slider -->
      <section class=" wow bounceInUp animated">
        <div class="best-pro slider-items-products container">
          <div class="new_title">
            <h2>Cars of the Week</h2>

          </div>
          <div id="best-seller" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">

            @foreach($car_for_sales as $car_for_sale)
              <div class="item">
                <div class="item-inner">

                  <div class="item-img">
                    <div class="item-img-info"><a href="/car_for_sale_detail" title="Retis lapen casen"
                        class="product-image"><img src="{{ asset('uploads/car_for_sale/'.$car_for_sale->image) }}" alt="Retis lapen casen"></a> 
                    </div>
                  </div>

                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                      <a href="/car_for_sale_detail" title="Retis lapen casen">
                      {{ $car_for_sale->name }}
                      </a>
                       </div>
                      <div class="item-content"> 
                        <div class="item-price">
                          <div class="price-box"><span class="regular-price"><span class="price">KSH {{ $car_for_sale->price }}</span>
                            </span> </div>
                        </div>
                        <div class="other-info">
                          <div class="col-km"><i class="fa fa-tachometer"></i> {{ $car_for_sale->mileage }}KMS</div>
                          <div class="col-engine"><i class="fa fa-gear"></i>{{ $car_for_sale->engine }}</div>
                          <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $car_for_sale->year }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
              

            </div>
          </div>
        </div>
      </section>

      <section class=" wow bounceInUp animated">
        <div class="hot_deals slider-items-products container">
          <div class="new_title">
            <h2>Spare Parts of the Week</h2>

          </div>
          <div id="hot_deals" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">

            @foreach($car_for_sales as $car_for_sale)
              <div class="item">
                <div class="item-inner">

                  <div class="item-img">
                    <div class="item-img-info"><a href="/spareparts_for_sale_detail" title="Retis lapen casen"
                        class="product-image"><img src="{{ asset('uploads/car_for_sale/'.$car_for_sale->image) }}" alt="Retis lapen casen"></a> 
                    </div>
                  </div>

                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                      <a href="/car_for_sale_detail" title="Retis lapen casen">
                      {{ $car_for_sale->name }}
                      </a>
                       </div>
                      <div class="item-content"> 
                        <div class="item-price">
                          <div class="price-box"><span class="regular-price"><span class="price">KSH {{ $car_for_sale->price }}</span>
                            </span> </div>
                        </div>
                        <div class="other-info">
                          <div class="col-km"><i class="fa fa-tachometer"></i> {{ $car_for_sale->mileage }}KMS</div>
                          <div class="col-engine"><i class="fa fa-gear"></i>{{ $car_for_sale->engine }}</div>
                          <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $car_for_sale->year }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
              

            </div>
          </div>
        </div>
      </section>

    
        <!-- Home Lastest Blog Block -->
        <div class="latest-blog wow bounceInUp animated animated container">
          <!--exclude For version 6 -->
          <div class="blog-home-inner">
            <div class="blog-title">
              <h2>Latest Blog post</h2>
            </div>
            <!--For version 1,2,3,4,5,6,8 -->
            <div class="row">
              <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                <div class="blog_inner">
                  <div class="blog-img"> <a href="/car_review_detail"> <img src="/frontend/images/blog-img1.jpg" alt="blog image">
                    </a> </div>
                  <!--blog-img-->
                  <div class="blog-info">
                    <div class="post-date"> <span class="entry-date">14 Jan, 2019</span> </div>
                    <ul class="post-meta">
                      <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                      <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
                    </ul>
                    <h3><a href="/car_review_detail">Powerful and flexible premium Ecommerce themes</a></h3>
                    <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus,
                      semper eu dictum nec...</p>
                  </div>
                </div>
                <!--blog_inner-->
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                <div class="blog_inner">
                  <div class="blog-img"> <a href="/car_review_detail"> <img src="/frontend/images/blog-img2.jpg" alt="blog image">
                    </a> </div>
                  <!--blog-img-->
                  <div class="blog-info">
                    <div class="post-date"> <span class="entry-date">23 Dec, 2018</span> </div>
                    <ul class="post-meta">
                      <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                      <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                    </ul>
                    <h3><a href="/car_review_detail">Awesome template with lot's of features on the board!</a></h3>
                    <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis
                      erat sed elit bibendum ...</p>
                  </div>
                </div>
                <!--blog_inner-->
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                <div class="blog_inner">
                  <div class="blog-img"> <a href="/car_review_detail"> <img src="/frontend/images/blog-img3.jpg" alt="blog image">
                    </a> </div>
                  <!--blog-img-->
                  <div class="blog-info">
                    <div class="post-date"> <span class="entry-date">23 Dec, 2018</span> </div>
                    <ul class="post-meta">
                      <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                      <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                    </ul>
                    <h3><a href="/car_review_detail">Awesome template with lot's of features on the board!</a></h3>
                    <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis
                      erat sed elit bibendum ...</p>
                  </div>
                </div>
                <!--blog_inner-->
              </div>
            </div>
          </div>
          <!--END For version 1,2,3,4,5,6,8 -->
          <!--exclude For version 6 -->
          <!--container-->
        </div>
     
      </div>




<footer>
        <!-- BEGIN INFORMATIVE FOOTER -->
        <div class="footer-inner">
          <div class="our-features-box wow bounceInUp animated animated">
            <div class="footer-inner">
              <div class="our-features-box wow bounceInUp animated animated">
                <div class="container">
                  <ul>
                    <li>
                      <div class="feature-box">
                        <div class="icon-truck"><img src="frontend/images/world-icon.png" alt="Image"></div>
                        <div class="content">
                          <h6>Kenya's #1</h6>
                          <p>Largest Auto portal</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="feature-box">
                        <div class="icon-support"><img src="frontend/images/car-sold-icon.png" alt="Image"></div>
                        <div class="content">
                          <h6>Cars Sold</h6>
                          <p>Every day</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="feature-box">
                        <div class="icon-money"><img src="frontend/images/tag-icon.png" alt="Image"></div>
                        <div class="content">
                          <h6>Offers</h6>
                          <p>Stay updated pay less</p>
                        </div>
                      </div>
                    </li>
                    <li class="last">
                      <div class="feature-box">
                        <div class="icon-return"><img src="frontend/images/compare-icon.png" alt="Image"></div>
                        <div class="content">
                          <h6>Compare</h6>
                          <p>Decode the right car</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <!--row-->

            </div>

            <!--container-->
          </div>
        </div>
        <div class="newsletter-row">
          <div class="container">
            <div class="row">

              <!-- Footer Newsletter -->

            </div>
          </div>
          <!--footer-column-last-->
        </div>
       
        <!--container-->
    </div>
    <!--footer-inner-->

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
        
        </div>
      </div>
    </div>
    <!-- BEGIN SIMPLE FOOTER -->
    </footer>


<script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min_2.js')}}"></script>
  <script src="{{ asset('frontend/js/bootstrap-slider.min.js')}}"></script>
  <script src="{{ asset('frontend/js/bootstrap-select.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/parallax.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/revslider.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/common.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/jquery.bxslider.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min_2.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/jquery.mobile-menu.min.js')}}"></script>
  <script src="{{ asset('frontend/js/countdown.js')}}"></script>
 
@if ($errors->any())
    @foreach ($errors->all() as $error)
       <script>
           toastr.error('{{ $error }}');
       </script>
    @endforeach
@endif

<script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
</script>
{!! Toastr::message() !!}
</body>
</html>