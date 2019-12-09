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
                  <p style="display: block;">Hot days! - <span>50%</span> Get ready for crazy offers! </p>
                  <p style="display: none;">Save up to <span>40%</span> Hurry limited offers!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-clock-o"></i> Mon - Sun :
              00.00am to 11.59pm <i class="fa fa-phone"></i> +254 702 987 866</div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div id="header">
            <div class="header-container">
              <div class="header-logo"> <a href="index.html" title="Car HTML" class="logo">

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
                        <li class="level0 parent "> <a class="level-top" href="/spareparts_for_sale_list"><span>Find Spare Parts</span></a>
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

    <div class="page-heading">
      <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul>
                <li class="home"> <a href="/" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
                <li class="category1599"> <a href="/car_review" title="">Car Reviews</a> <span>&rsaquo; </span> </li>
              </ul>
            </div>
            <!--col-xs-12-->
          </div>
          <!--row-->
        </div>
        <!--container-->
      </div>
      <div class="page-title">
        <h2>Cars Reviews</h2>
      </div>
    </div>
    <!--breadcrumbs-->

    <!-- BEGIN Main Container -->
    <div class="main-container col2-right-layout">
      <div class="main container">
        <div class="row">
          <div class="col-left sidebar col-sm-3 blog-side">
            <div class="block widget_search">
              <form id="searchform" action="#" method="get">
                <div class="input-group">
                  <input type="text" name="s" id="s" placeholder="Search For" class="input-text" autocomplete="off">
                  <div class="input-group-append">
                    <button type="submit" class="thm-search"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
            <div id="secondary" class="widget_wrapper13" role="complementary">
              <div id="recent-posts-4" class="popular-posts widget block" style="visibility: visible;">
                <h2 class="widget-title">Most Popular Posts</h2>
                <ul class="posts-list unstyled clearfix">
                  <li>
                    <figure class="featured-thumb"> <a href="#"> <img src="frontend/images/blog-img1_1.jpg" alt="blog image">
                      </a> </figure>
                    <!--featured-thumb-->
                    <div class="content-info">
                      <h4><a href="#" title="Lorem ipsum dolor sit amet">Powerful and flexible premium Ecommerce
                          themes</a></h4>
                      <p class="post-meta">
                        <time class="entry-date">Jan 10, 2018 .</time>
                        .</p>
                    </div>
                  </li>
                  <li>
                    <figure class="featured-thumb"> <a href="#"> <img src="frontend/images/blog-img3.jpg" alt="blog image"> </a>
                    </figure>
                    <!--featured-thumb-->
                    <div class="content-info">
                      <h4><a href="#" title="Lorem ipsum dolor sit amet">Awesome template with lot's of features on the
                          board!</a></h4>
                      <p class="post-meta">
                        <time class="entry-date">Feb 26, 2018 .</time>
                        .</p>
                    </div>
                  </li>
                  <li>
                    <figure class="featured-thumb"> <a href="#"> <img src="frontend/images/blog-img2.jpg" alt="blog image"> </a>
                    </figure>
                    <!--featured-thumb-->
                    <div class="content-info">
                      <h4><a href="#" title="Lorem ipsum dolor sit amet">Premium template with unlimited colours, and
                          fully Customizable</a></h4>
                      <p class="post-meta">
                        <time class="entry-date">Mar 14, 2018 .</time>
                        .</p>
                    </div>
                  </li>
                  <li>
                    <figure class="featured-thumb"> <a href="#"> <img src="frontend/images/blog-img4.jpg" alt="blog image"> </a>
                    </figure>
                    <!--featured-thumb-->
                    <div class="content-info">
                      <h4><a href="#" title="Lorem ipsum dolor sit amet">
                          Powerful and flexible premium Ecommerce themes</a></h4>
                      <p class="post-meta">
                        <time class="entry-date">Apr 18, 2018 .</time>
                        .</p>
                    </div>
                  </li>
                </ul>

                <!--widget-content-->
              </div>
              <div id="categories-2" class="widget widget_categories block" style="visibility: visible;">
                <h2 class="widget-title">Categories</h2>

                <ul>
                  <li><a href="#">PhotoShop</a> <span class="count">2</span></li>
                  <li><a href="#">News</a> <span class="count">8</span></li>
                  <li><a href="#">Illustration</a> <span class="count">3</span></li>
                  <li><a href="#">Foods and Drinks</a> <span class="count">7</span></li>
                  <li><a href="#">Social</a> <span class="count">4</span></li>
                  <li><a href="#">Technology</a> <span class="count">9</span></li>
                  <li><a href="#">Uncategorized</a> <span class="count">1</span></li>
                  <li><a href="#">Videos</a> <span class="count">8</span></li>
                </ul>

              </div>

            </div>

          </div>
          <div class="col-main col-sm-9 main-blog">
            <div id="main" class="blog-wrapper">
              <div id="primary" class="site-content">
                <div id="content" role="main">
                  <article id="post-29" class="blog_entry clearfix wow bounceInUp animated animated animated"
                    style="visibility: visible;">

                    <div class="entry-content">
                      <div class="featured-thumb"><a href="#"><img src="frontend/images/blog-img1.jpg" alt="blog-img3"></a></div>
                      <header class="blog_entry-header clearfix">
                        <div class="blog_entry-header-inner">
                          <h2 class="blog_entry-title"> <a href="/car_review_detail" rel="bookmark">Powerful and flexible
                              premium Ecommerce themes</a> </h2>

                        </div>
                        <!--blog_entry-header-inner-->
                      </header>
                      <div class="entry-content">
                        <ul class="post-meta">
                          <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                          <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                          <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span class="month">Feb</span>
                          </li>
                        </ul>
                        <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi
                          metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus
                          ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan. Integer vitae diam sed
                          dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales.</p>
                      </div>
                      <div class="thm-readmore"><a href="/car_review_detail" class="btn">READ MORE</a></div>
                    </div>
                  </article>
                  <article id="post-29" class="blog_entry clearfix wow bounceInUp animated animated animated"
                    style="visibility: visible;">

                    <div class="entry-content">
                      <div class="featured-thumb"><a href="#"><img src="frontend/images/blog-img2.jpg" alt="blog-img2"></a></div>
                      <header class="blog_entry-header clearfix">
                        <div class="blog_entry-header-inner">
                          <h2 class="blog_entry-title"> <a href="blog-detail.html" rel="bookmark">Awesome template with
                              lot's of features on the board!</a> </h2>

                        </div>
                        <!--blog_entry-header-inner-->
                      </header>
                      <div class="entry-content">
                        <ul class="post-meta">
                          <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                          <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                          <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span class="month">Feb</span>
                          </li>
                        </ul>
                        <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac
                          felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus,
                          gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in,
                          feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas
                          sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec
                          eros. </p>
                      </div>
                      <div class="thm-readmore"><a href="/car_review_detail" class="btn">READ MORE</a></div>
                    </div>
                  </article>
                  <article id="post-29" class="blog_entry clearfix wow bounceInUp animated animated animated"
                    style="visibility: visible;">

                    <div class="entry-content">
                      <div class="featured-thumb"><a href="#"><img src="frontend/images/blog-img3.jpg" alt="blog-img1"></a></div>
                      <header class="blog_entry-header clearfix">
                        <div class="blog_entry-header-inner">
                          <h2 class="blog_entry-title"> <a href="/car_review_detail" rel="bookmark">Premium template with
                              unlimited colours, and fully Customizable</a> </h2>

                        </div>
                        <!--blog_entry-header-inner-->
                      </header>
                      <div class="entry-content">
                        <ul class="post-meta">
                          <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                          <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                          <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span class="month">Feb</span>
                          </li>
                        </ul>
                        <p> Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum
                          sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu
                          turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum
                          varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus
                          purus congue nisl, ac molestie enim ligula nec eros.</p>
                      </div>
                      <div class="thm-readmore"><a href="/car_review_detail" class="btn">READ MORE</a></div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="pager">
                <div class="pages">
                  <ol class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="blog905b.html?p=2">2</a></li>
                    <li><a href="blog905b.html?p=2">3</a></li>
                    <li><a href="blog905b.html?p=2">4</a></li>
                    <li><a href="blog905b.html?p=2">5</a></li>
                    <li><a href="blog905b.html?p=2">6</a></li>
                    <li> <a class="next i-next" href="blog905b.html?p=2" title="Next"> » </a> </li>
                  </ol>
                </div>
              </div>
            </div>
            <!--#main wrapper grid_8-->

          </div>
          <!--col-main col-sm-9-->
        </div>
      </div>
      <!--main-container-->

    </div>
    <!--col2-layout-->


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