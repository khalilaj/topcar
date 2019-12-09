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
                <li class="category1599"> <a href="/car_for_sale" title="">Car For Sale</a> <span>&rsaquo; </span> </li>
                <li class="category1600"> <a href="/car_for_sale_detail" title="">Car Detail</a> <span>&rsaquo; </span> </li>
              </ul>
            </div>
            <!--col-xs-12-->
          </div>
          <!--row-->
        </div>
        <!--container-->
      </div>
      <div class="page-title">
        <h2>Car  Detail</h2>
      </div>
    </div>
    <!-- BEGIN Main Container -->
    <div class="main-container col1-layout wow bounceInUp animated">
      <div class="main">
        <div class="col-main">
          <!-- Endif Next Previous Product -->
          <div class="product-view wow bounceInUp animated" itemscope="" itemtype="http://schema.org/Product"
            itemid="#product_base">
            <div id="messages_product_view"></div>
            <!--product-next-prev-->
            <div class="product-essential container">
              <div class="row">
                <form action="#" method="post" id="product_addtocart_form">
                  <!--End For version 1, 2, 6 -->
                  <!-- For version 3 -->
                  <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                    <div class="new-label new-top-left">Hot</div>
                    <div class="sale-label sale-top-left">-15%</div>
                    <div class="product-image">
                      <div class="product-full"> <img id="product-zoom1" src="frontend/products-images/p46.jpg"
                          data-zoom-image="frontend/products-images/p46.jpg" alt="product-image" /> </div>
                      <div class="more-views">
                        <div class="slider-items-products">
                          <div id="gallery_02" class="product-flexslider hidden-buttons product-img-thumb">
                            <div class="slider-items slider-width-col4 block-content">
                              <div class="more-views-items"> <a href="#" data-image="frontend/products-images/p1.jpg"
                                  data-zoom-image="frontend/products-images/p1.jpg"> <img id="product-zoom0"
                                    src="frontend/products-images/p1.jpg" alt="product-image" /> </a></div>
                              <div class="more-views-items"> <a href="#" data-image="frontend/products-images/p2.jpg"
                                  data-zoom-image="frontend/products-images/p2.jpg"> <img id="product-zoom1"
                                    src="frontend/products-images/p2.jpg" alt="product-image" /> </a></div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/p3.jpg"
                                  data-zoom-image="products-images/p3.jpg"> <img id="product-zoom2"
                                    src="frontend/products-images/p3.jpg" alt="product-image" /> </a></div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/p4.jpg"
                                  data-zoom-image="products-images/p4.jpg"> <img id="product-zoom3"
                                    src="frontend/products-images/p4.jpg" alt="product-image" /> </a> </div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/p5.jpg"
                                  data-zoom-image="frontend/products-images/p5.jpg"> <img id="product-zoom4"
                                    src="frontend/products-images/p5.jpg" alt="product-image" /> </a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end: more-images -->
                    <div class="toll-free"><a href="#"><i class="fa fa-phone"></i> +1 800 789 0000</a></div>
                    <div class="ask-question"><a href="#"><i class="fa fa-whatsapp"></i>WhatsApp</a></div>
                    <div class="request-call"><a href="#"><i class="fa fa-user"></i>Dealer Profile </a></div>
                  </div>
                  <!--End For version 1,2,6-->
                  <!-- For version 3 -->
                  <div class="product-shop col-lg- col-sm-7 col-xs-12">
                    <div class="product-name">
                      <h1>Gorgeous Mercedes-Benz E-Class All-Terrain Luxury </h1>
                    </div> 
                    <div class="price-block">
                      <div class="price-box">

                        <p class="special-price"> <span class="price-label">Special Price</span> <span
                            id="product-price-48" class="price">KSH 70,000.00 - KSH 90,000.00 </span> </p>
                      </div>
                    </div>

                    <div class="spec-row" id="summarySpecs">
                      <h2>Specifications</h2>
                      <table width="100%">
                        <tbody>
                          <tr>
                            <td class="label-spec"> Mileage <span class="coln">:</span></td>
                            <td class="value-spec"> 17 kmpl </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Engine Displ. <span class="coln">:</span></td>
                            <td class="value-spec"> 259kw </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Transmission <span class="coln">:</span></td>
                            <td class="value-spec"> Automatic </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Fuel Type <span class="coln">:</span></td>
                            <td class="value-spec"> Diesel </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Model <span class="coln">:</span></td>
                            <td class="value-spec"> 2019 </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Power Windows <span class="coln">:</span></td>
                            <td class="value-spec"> Yes </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Airbags <span class="coln">:</span></td>
                            <td class="value-spec"> Available </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> ABS <span class="coln">:</span></td>
                            <td class="value-spec"> Yes </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Central Locking <span class="coln">:</span></td>
                            <td class="value-spec"> Yes </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Fog Lamps <span class="coln">:</span></td>
                            <td class="value-spec"> Front </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                
                    <div class="social">
                      <ul class="link">
                        <li class="fb"><a href="#"></a></li>
                        <li class="tw"><a href="#"></a></li>
                        <li class="googleplus"><a href="#"></a></li>
                        <li class="rss"><a href="#"></a></li>
                        <li class="pintrest"><a href="#"></a></li>
                        <li class="linkedin"><a href="#"></a></li>
                        <li class="youtube"><a href="#"></a></li>
                      </ul>
                    </div>
                    <ul class="shipping-pro">
                      <li>Free Servicing</li>
                      <li>Free Monthly Checkup</li>
                      <li>Extended Warrenty</li>
                    </ul>
                  </div>
                  <!--product-shop-->
                  <!--Detail page static block for version 3-->
                </form>
              </div>
            </div>
            <!--product-essential-->
            <div class="product-collateral container">
              <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Vehicle Overview </a> </li>
                <li><a href="#product_tabs_tags" data-toggle="tab">Technical Specification</a></li>
                <li> <a href="#product_tabs_custom" data-toggle="tab">Accessories</a> </li> 
              </ul>
              <div id="productTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="product_tabs_description">
                  <div class="std">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique
                      auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper.
                      Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero.
                      Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis
                      eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget
                      sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum
                      dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi
                      posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a
                      nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi
                      tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at
                      sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus
                      felis vehicula felis, a dapibus enim lorem nec augue.</p>
                    <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique
                      ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                      posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim
                      semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per
                      conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a
                      felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate
                      mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="product_tabs_tags">
                  <div class="spec-row" id="summarySpecs">
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td class="label-spec"> Mileage <span class="coln">:</span></td>
                          <td class="value-spec"> 17 kmpl </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Engine Displ. <span class="coln">:</span></td>
                          <td class="value-spec"> 259kw </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Transmission <span class="coln">:</span></td>
                          <td class="value-spec"> Automatic </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Fuel Type <span class="coln">:</span></td>
                          <td class="value-spec"> Diesel </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Model <span class="coln">:</span></td>
                          <td class="value-spec"> 2019 </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Power Windows <span class="coln">:</span></td>
                          <td class="value-spec"> Yes </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Airbags <span class="coln">:</span></td>
                          <td class="value-spec"> Available </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> ABS <span class="coln">:</span></td>
                          <td class="value-spec"> Yes </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Central Locking <span class="coln">:</span></td>
                          <td class="value-spec"> Yes </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Fog Lamps <span class="coln">:</span></td>
                          <td class="value-spec"> Front </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div> 
                <div class="tab-pane fade" id="product_tabs_custom">
                  <div class="spec-row" id="summarySpecs">
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td class="label-spec"> Air Conditioner <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> AntiLock Braking System <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Power Steering <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Power Windows <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> CD Player <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Leather Seats <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Central Locking <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Power Door Locks <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Brake Assist <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Driver Airbag <span class="coln">:</span></td>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div> 
              </div>
            </div>

                     <!--product-collateral-->
                     <div class="box-additional">
              <!-- BEGIN RELATED PRODUCTS -->
              <div class="related-pro container">
                <div class="slider-items-products">
                  <div class="new_title center">
                    <h2>Related Products</h2>
                  </div>
                  <div id="related-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
               

                      <!-- Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="/spareparts_for_sale_detail" title="Retis lapen casen"
                                class="product-image"><img src="frontend/products-images/p35.jpg" alt="Retis lapen casen"></a>
                            
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="/spareparts_for_sale_detail" title="Retis lapen casen">Gorgeous
                                  Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span
                                        class="price">KSH 39000</span> </span> </div>
                                </div>
                      
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->

                        <!-- Item -->
                        <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="/spareparts_for_sale_detail" title="Retis lapen casen"
                                class="product-image"><img src="frontend/products-images/p33.jpg" alt="Retis lapen casen"></a>
                            
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="/spareparts_for_sale_detail" title="Retis lapen casen">Gorgeous
                                  Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span
                                        class="price">KSH 39000</span> </span> </div>
                                </div>
                      
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->

                        <!-- Item -->
                        <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="/spareparts_for_sale_detail" title="Retis lapen casen"
                                class="product-image"><img src="frontend/products-images/p34.jpg" alt="Retis lapen casen"></a>
                            
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="/spareparts_for_sale_detail" title="Retis lapen casen">Gorgeous
                                  Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span
                                        class="price">KSH 39000</span> </span> </div>
                                </div>
                      
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->

                        <!-- Item -->
                        <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="/spareparts_for_sale_detail" title="Retis lapen casen"
                                class="product-image"><img src="frontend/products-images/p38.jpg" alt="Retis lapen casen"></a>
                            
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="/spareparts_for_sale_detail" title="Retis lapen casen">Gorgeous
                                  Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span
                                        class="price">KSH 39000</span> </span> </div>
                                </div>
                      
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->

                                  <!-- Item -->
                                  <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="/spareparts_for_sale_detail" title="Retis lapen casen"
                                class="product-image"><img src="frontend/products-images/p36.jpg" alt="Retis lapen casen"></a>
                            
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="/spareparts_for_sale_detail" title="Retis lapen casen">Gorgeous
                                  Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span
                                        class="price">KSH 39000</span> </span> </div>
                                </div>
                      
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->


            <!-- Item -->
            <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="/spareparts_for_sale_detail" title="Retis lapen casen"
                                class="product-image"><img src="frontend/products-images/p37.jpg" alt="Retis lapen casen"></a>
                            
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="/spareparts_for_sale_detail" title="Retis lapen casen">Gorgeous
                                  Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span
                                        class="price">KSH 39000</span> </span> </div>
                                </div>
                      
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->


            
                    </div>
                  </div>
                </div>
              </div>
              <!-- end related product -->
          </div>
          <!--box-additional-->
          <!--product-view-->
        </div>
      </div>
      <!--col-main-->
    </div>
    <!--main-container-->
  </div>
  <!--col1-layout-->

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




  <!-- JavaScript -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-slider.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script type="text/javascript" src="js/parallax.js"></script>
  <script type="text/javascript" src="js/revslider.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script src="js/cloud-zoom.js"></script>
  <script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>

  
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
  <script src="{{ asset('frontend/js/cloud-zoom.js')}}"></script> 
 


</body>

<!-- Mirrored from themesground.com/motocart-demo/V1/car-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 11:29:35 GMT -->

</html>