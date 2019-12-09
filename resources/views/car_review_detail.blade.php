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
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="page-title">
              <h2>Car Review Details</h2>
            </div>
          </div>
          <!--col-xs-12-->
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
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
          <div class="col-main col-sm-9 main-blog" style="visibility: visible;">
            <div id="main" class="blog-wrapper">

              <div id="primary" class="site-content">
                <div id="content" role="main">
                  <article id="post-29" class="blog_entry clearfix">

                    <div class="entry-content">
                      <div class="featured-thumb"><a href="#"><img src="frontend/images/blog-img3.jpg" alt="blog-img4"></a></div>
                      <header class="blog_entry-header clearfix">
                        <div class="blog_entry-header-inner">
                          <h1 class="blog_entry-title">Powerful and flexible premium Ecommerce themes</h1>
                        </div>
                      </header>

                      <div class="entry-content">
                        <ul class="post-meta">
                          <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                          <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                          <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span class="month">Feb</span>
                          </li>
                        </ul>
                        <div class="thm-post">
                          <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi
                            metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum
                            luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                          <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac
                            felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus,
                            gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in,
                            feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas
                            sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec
                            eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis
                            felis. Donec sit amet quam sem, et aliquet est.</p>
                          <p>Quisque nisl lectus, accumsan et euismod eu, sollicitudin ac augue. In sit amet urna magna.
                            Curabitur imperdiet urna nec purus egestas eget aliquet purus iaculis. Nunc porttitor
                            blandit imperdiet. Nulla facilisi. Cras odio ipsum, vehicula nec vehicula sed, convallis
                            scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
                          <blockquote>Lorem ipsum dolor sit amet, consecte adipiscing elit. Integer aliquam mi nec dolor
                            placerat a condimentum diam mollis. Ut pulvinar neque eget massa dapibus dolor.</blockquote>
                          <p>Curabitur at vestibulum sem. Aliquam vehicula neque ac nibh suscipit ultrices. Morbi
                            interdum accumsan arcu nec scelerisque. Phasellus eget purus nulla. Suspendisse quam est,
                            tempor quis consectetur non, interdum vitae diam. Pellentesque volutpat mollis ligula in
                            laoreet. Aenean est dui, sagittis in consequat at, adipiscing at risus. Sed suscipit, est
                            vitae aliquam molestie, sem dolor dignissim leo, eget imperdiet enim urna in justo. Mauris
                            pulvinar tortor lorem. Aliquam sed nisl in ipsum tincidunt ultrices.</p>
                          <h2>Heading</h2>
                          <p>Pellentesque volutpat mollis ligula in laoreet. Aenean est dui, sagittis in consequat at,
                            adipiscing at risus. Sed suscipit, est vitae aliquam molestie, sem dolor dignissim leo, eget
                            imperdiet enim urna in justo. Mauris pulvinar tortor lorem. Aliquam sed nisl in ipsum
                            tincidunt ultrices.</p>
                          <ul>
                            <li> Integer vitae diam sed dolor euismod laoreet eget ac felis</li>
                            <li> Integer vitae diam sed dolor euismod laoreet eget ac felis</li>
                            <li> Integer vitae diam sed dolor euismod laoreet eget ac felis</li>
                            <li> Integer vitae diam sed dolor euismod laoreet eget ac felis</li>
                            <li> Integer vitae diam sed dolor euismod laoreet eget ac felis</li>
                          </ul>
                          <h3>Heading</h3>
                          <p>Pellentesque volutpat mollis ligula in laoreet. Aenean est dui, sagittis in consequat at,
                            adipiscing at risus. Sed suscipit, est vitae aliquam molestie, sem dolor dignissim leo, eget
                            imperdiet enim urna in justo. Mauris pulvinar tortor lorem. Aliquam sed nisl in ipsum
                            tincidunt ultrices.</p>
                          <h4>Heading</h4>
                          <p>Nullam commodo lobortis nibh, vitae accumsan velit dapibus sed. Nunc ac sem eu libero
                            pretium faucib. Quisque et semper odio. Praesent tortor ligula, imperdiet sed aliquet ut,
                            pharetra at nisi. Etiam sit amet molestie est. Donec id turpis vitae leo viverra adipiscing
                            at sed nisi. Donec ut justo nunc. Vivamu bibendum erat ac nunc sollicitudin lacinia.
                            Phasellus sed lacus magna.</p>
                          <h5>Heading</h5>
                          <p>Nullam commodo lobortis nibh, vitae accumsan velit dapibus sed. Nunc ac sem eu libero
                            pretium faucib. Quisque et semper odio. Praesent tortor ligula, imperdiet sed aliquet ut,
                            pharetra at nisi. Etiam sit amet molestie est. Donec id turpis vitae leo viverra adipiscing
                            at sed nisi. Donec ut justo nunc. Vivamu bibendum erat ac nunc sollicitudin lacinia.
                            Phasellus sed lacus magna.</p>
                        </div>
                      </div>
                    </div>
                  </article>
                  <div class="comment-content">
                    <div class="comments-wrapper">
                      <h3> Comments </h3>
                      <ol class="commentlist">
                        <li class="comment">
                          <div>
                            <img alt="" src="frontend/images/member1.png" class="avatar avatar-60 photo">
                            <div class="comment-text">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div style="width:100%" class="rating"></div>
                                </div>

                              </div>
                              <p class="meta">
                                <strong>John Doe</strong>
                                <span>–</span> <time>April 19, 2018</time>
                              </p>
                              <div class="description">
                                <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis
                                  lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo
                                  eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor
                                  volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut
                                  libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis
                                  at tellus.</p>
                              </div>
                            </div>
                          </div>
                        </li><!-- #comment-## -->
                        <li class="comment">
                          <div>
                            <img alt="" src="frontend/images/member2.png" class="avatar avatar-60 photo">
                            <div class="comment-text">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div style="width:100%" class="rating"></div>
                                </div>

                              </div>
                              <p class="meta">
                                <strong>Stephen Smith</strong> <span>–</span> <time>June 02, 2018</time>
                              </p>
                              <div class="description">
                                <p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </li><!-- #comment-## -->
                      </ol>
                      <!--commentlist-->
                    </div>
                    <!--comments-wrapper-->

                    <div class="comments-form-wrapper comment-respond">
                      <h3>Leave A reply</h3>
                      <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>
                        Required fields are marked <span class="required">*</span></p>
                      <form class="comment-form" method="post" id="postComment" action="#">
                        <div class="field">
                          <label for="name">Name<em class="required">*</em></label>
                          <input type="text" class="input-text" title="Name" value="" id="user" name="user_name"
                            placeholder="Name">
                        </div>
                        <div class="field">
                          <label for="email">Email<em class="required">*</em></label>
                          <input type="text" class="input-text validate-email" title="Email" value="" id="email"
                            name="user_email" placeholder="Email Address">
                        </div>
                        <div class="field">
                          <label for="email">Website<em class="required">*</em></label>
                          <input type="text" class="input-text validate-email" title="Email" value="" id="email"
                            name="user_email" placeholder="Website">
                        </div>
                        <div class="clear"></div>
                        <div class="field aw-blog-comment-area">
                          <label for="comment">Comment<em class="required">*</em></label>
                          <textarea rows="5" cols="50" class="input-text" title="Comment" id="comment" name="comment"
                            placeholder="Comment"></textarea>
                        </div>
                        <div style="width:96%" class="button-set">
                          <input type="hidden" value="1" name="blog_id">
                          <button type="submit" class="bnt-comment"><span><span>Add Comment</span></span></button>
                        </div>
                      </form>
                    </div>
                    <!--comments-form-wrapper clearfix-->

                  </div>

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





    <!-- For version 1,2,3,4,6 -->

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