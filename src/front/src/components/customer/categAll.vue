
<template>
  <div>
   <!--Section: Products v.3-->
      <section class="mb-4">
        <div class="row wow fadeIn content1 ">
          <div class="col-md-12">
            <!--Carousel Wrapper-->
              <div id="multi-item-example" class="carousel slide carousel-multi-item container" data-ride="carousel">
                <!-- Section heading -->
                <h4 class="h2-responsive font-weight-bold text-left my-3">Corporate</h4>
                <!-- Section description -->
                <hr>
                <!--Controls-->
                <div class="controls-top">
                  <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                  <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                  <li data-target="#multi-item-example" data-slide-to="1"></li>
                  <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                  <!--First slide-->
                  <div class="carousel-item active">

                   <!--Grid row-->
                      <div class="row ">
                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view                                                                                   view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Denim</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <router-link to="/productPage">Denim trousers</router-link>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>49$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Shoes</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a v-on:click="side('message')">High heels</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                               
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>89$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/4.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Outwear</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Brown coat</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                                
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-half-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>59$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Blouses</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Shirt</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                                
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>119$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                      </div>
                      <!--Grid row-->

                  </div>
                  <!--/.First slide-->

                  <!--Second slide-->
                  <div class="carousel-item">

                    <!--Grid row-->
                      <div class="row wow fadeIn">

                       <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Denim</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Denim trousers</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>49$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Shoes</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">High heels</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                               
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>89$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/4.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Outwear</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Brown coat</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                                
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-half-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>59$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Blouses</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Shirt</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                                
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>119$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                      </div>
                      <!--Grid row-->
                  </div>
                  <!--/.Second slide-->

                  <!--Third slide-->
                  <div class="carousel-item">

                    <!--Grid row-->
                      <div class="row wow fadeIn">

                   <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Denim</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Denim trousers</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>49$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Shoes</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">High heels</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                               
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>89$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Blouses</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Shirt</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                                
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>119$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->
                       </div>
                      <!--Grid row-->
                  </div>
                  <!--/.Third slide-->

                </div>
                <!--/.Slides-->

              </div>
              <!--/.Carousel Wrapper-->

          </div>
          
        </div>

        

        <!--Grid row-->
        <div class="row wow fadeIn content2">

          
            <!--Carousel Wrapper-->
              <div id="multi-item" class="carousel slide carousel-multi-item container" data-ride="carousel">

              <!-- Section heading -->
                <h4 class="h2-responsive font-weight-bold text-left my-3">Native</h4>
                <!-- Section description -->
                <hr>

                <!--Controls-->
                <div class="controls-top">
                  <a class="btn-floating" href="#multi-item" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                  <a class="btn-floating" href="#multi-item" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#multi-item" data-slide-to="0" class="active"></li>
                  <li data-target="#multi-item" data-slide-to="1"></li>
                  <li data-target="#multi-item" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                  <!--First slide-->
                  <div class="carousel-item active">

                   <!--Grid row-->
                      <div class="row ">
                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Denim</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Denim trousers</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>49$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Shoes</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">High heels</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                               
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>89$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/4.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Outwear</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Brown coat</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                                
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-half-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>59$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Blouses</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Shirt</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                                
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>119$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                      </div>
                      <!--Grid row-->

                  </div>
                  <!--/.First slide-->

                  <!--Second slide-->
                  <div class="carousel-item">

                    <!--Grid row-->
                      <div class="row wow fadeIn">

                       <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Denim</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Denim trousers</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>49$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Shoes</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">High heels</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                               
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>89$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/4.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Outwear</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Brown coat</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                                
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-half-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>59$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Blouses</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Shirt</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                                
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>119$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                      </div>
                      <!--Grid row-->
                  </div>
                  <!--/.Second slide-->

                  <!--Third slide-->
                  <div class="carousel-item">

                    <!--Grid row-->
                      <div class="row wow fadeIn">

                   <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Denim</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Denim trousers</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>49$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Shoes</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">High heels</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                               
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>89$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Blouses</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Shirt</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                                
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>119$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->
                       </div>
                      <!--Grid row-->
                  </div>
                  <!--/.Third slide-->

                </div>
                <!--/.Slides-->

              </div>
              <!--/.Carousel Wrapper-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row wow fadeIn content1">

          
            <!--Carousel Wrapper-->
              <div id="multi-item3" class="carousel slide carousel-multi-item container" data-ride="carousel">

              <!-- Section heading -->
                <h4 class="h2-responsive font-weight-bold text-left my-3">Suit</h4>
                <!-- Section description -->
                <hr>

                <!--Controls-->
                <div class="controls-top">
                  <a class="btn-floating" href="#multi-item3" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                  <a class="btn-floating" href="#multi-item3" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#multi-item3" data-slide-to="0" class="active"></li>
                  <li data-target="#multi-item3" data-slide-to="1"></li>
                  <li data-target="#multi-item3" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                  <!--First slide-->
                  <div class="carousel-item active">

                   <!--Grid row-->
                      <div class="row ">
                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Denim</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Denim trousers</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>49$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Shoes</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">High heels</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                               
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>89$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/4.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Outwear</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Brown coat</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                                
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-half-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>59$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Blouses</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Shirt</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                                
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>119$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                      </div>
                      <!--Grid row-->

                  </div>
                  <!--/.First slide-->

                  <!--Second slide-->
                  <div class="carousel-item">

                    <!--Grid row-->
                      <div class="row wow fadeIn">

                       <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Denim</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Denim trousers</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>49$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Shoes</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">High heels</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                               
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>89$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/4.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Outwear</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Brown coat</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                                
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-half-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>59$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Blouses</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Shirt</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                                
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>119$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                      </div>
                      <!--Grid row-->
                  </div>
                  <!--/.Second slide-->

                  <!--Third slide-->
                  <div class="carousel-item">

                    <!--Grid row-->
                      <div class="row wow fadeIn">

                   <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Denim</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Denim trousers</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star"></i>
                              
                              
                                  <i class="fa fa-star-o"></i>
                              
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>49$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Shoes</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">High heels</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                               
                               
                                  <i class="fa fa-star"></i>
                                
                               
                                  <i class="fa fa-star"></i>
                                
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>89$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-lg-3 col-md-6">
                          <!-- card cardpannel -->
                          <div class="card cardpannel card-cascade narrower card-ecommerce">
                            <!-- card cardpannel image -->
                            <div class="view views view-cascade overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                                alt="sample photo">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!-- card cardpannel image -->
                            <!-- card cardpannel content -->
                            <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="grey-text">
                                <h5>Blouses</h5>
                              </a>
                              <h4 class="card-title">
                                <strong>
                                  <a href="">Shirt</a>
                                </strong>
                              </h4>
                              <!--Rating-->
                              <div class="rating">
                                
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star"></i>
                               
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <!-- Description -->
                              <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                              </p>
                              <!-- card cardpannel footer -->
                              <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>119$</strong>
                                </span>
                                <span class="float-right">
                                  <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <i class="fa fa-shopping-cart grey-text ml-3"></i>
                                  </a>
                                  <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fa fa-share-alt grey-text ml-3"></i>
                                  </a>
                                  <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                                    <i class="fa fa-heart ml-3"></i>
                                  </a>
                                </span>
                              </div>
                            </div>
                            <!-- card cardpannel content -->
                          </div>
                          <!-- card cardpannel -->
                        </div>
                        <!-- Grid column -->
                       </div>
                      <!--Grid row-->
                  </div>
                  <!--/.Third slide-->

                </div>
                <!--/.Slides-->

              </div>
              <!--/.Carousel Wrapper-->

        </div>
        <!--Grid row-->

         </section>
      <!--Section: Products v.3-->

         <!-- Section: Products v.1 -->
<section class="text-center my-5 content3">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Fashion Designers</h2>
  <!-- Section description -->
  <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
    adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
    nostrum quisquam eum porro a pariatur veniam.</p>

     <!-- Grid row -->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-12">

      <!--card cardpannel group-->
      <div class="card-group">

        <!--card-->
        <div class="card cardpannel card-personal mb-4">

          <!--card cardpannel image-->
          <div class="view views">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="card cardpannel image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--card cardpannel image-->

          <!--card cardpannel content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">Anna</h4>
            </a>
            <a class="card-meta">Friends</a>

            <!--Text-->
            <p class="card-text">Anna is a web designer living in New York.</p>
            <hr>
            <a class="card-meta"><span><i class="fa fa-user"></i>83 Friends</span></a>
            <p class="card-meta float-right">Joined in 2012</p>
          </div>
          <!--card cardpannel content-->

        </div>
        <!--card-->

        <!--card-->
        <div class="card cardpannel card-personal mb-4">

          <!--card cardpannel image-->
          <div class="view views">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="card cardpannel image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--card cardpannel image-->

          <!--card cardpannel content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">John</h4>
            </a>
            <a class="card-meta">Coworker</a>

            <!--Text-->
            <p class="card-text">John is a copywriter living in Seattle.</p>
            <hr>
            <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
            <p class="card-meta float-right">Joined in 2015</p>
          </div>
          <!--card cardpannel content-->

        </div>
        <!--card-->

        <!--card-->
        <div class="card cardpannel card-personal mb-4">

          <!--card cardpannel image-->
          <div class="view views">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="card cardpannel image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--card cardpannel image-->

          <!--card cardpannel content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">Sara</h4>
            </a>
            <a class="card-meta">Coworker</a>

            <!--Text-->
            <p class="card-text">Sara is a video maker living in Tokyo.</p>
            <hr>
            <a class="card-meta"><span><i class="fa fa-user"></i>127 Friends</span></a>
            <p class="card-meta float-right">Joined in 2014</p>
          </div>
          <!--card cardpannel content-->

        </div>
        <!--card-->

      </div>
      <!--card cardpannel group-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

  </section>
<!-- Section: Products v.1 -->


  <!-- Section: Products v.1 -->
<section class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Our bestsellers</h2>
  <!-- Section description -->
  <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
    adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
    nostrum quisquam eum porro a pariatur veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
      <!-- card cardpannel -->
      <div class="card cardpannel card-cascade narrower card-ecommerce">
        <!-- card cardpannel image -->
        <div class="view views view-cascade overlay">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
            alt="sample photo">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- card cardpannel image -->
        <!-- card cardpannel content -->
        <div class="card-body card-body-cascade text-center">
          <!-- Category & Title -->
          <a href="" class="grey-text">
            <h5>Denim</h5>
          </a>
          <h4 class="card-title">
            <strong>
              <a href="">Denim trousers</a>
            </strong>
          </h4>
          <!--Rating-->
          <div class="rating">
          
              <i class="fa fa-star"></i>
          
          
              <i class="fa fa-star"></i>
          
          
              <i class="fa fa-star"></i>
          
          
              <i class="fa fa-star"></i>
          
          
              <i class="fa fa-star-o"></i>
          
          </div>
          <!-- Description -->
          <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
          </p>
          <!-- card cardpannel footer -->
          <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>49$</strong>
            </span>
            <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fa fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fa fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                <i class="fa fa-heart ml-3"></i>
              </a>
            </span>
          </div>
        </div>
        <!-- card cardpannel content -->
      </div>
      <!-- card cardpannel -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
      <!-- card cardpannel -->
      <div class="card cardpannel card-cascade narrower card-ecommerce">
        <!-- card cardpannel image -->
        <div class="view views view-cascade overlay">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
            alt="sample photo">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- card cardpannel image -->
        <!-- card cardpannel content -->
        <div class="card-body card-body-cascade text-center">
          <!-- Category & Title -->
          <a href="" class="grey-text">
            <h5>Shoes</h5>
          </a>
          <h4 class="card-title">
            <strong>
              <a href="">High heels</a>
            </strong>
          </h4>
          <!--Rating-->
          <div class="rating">
           
              <i class="fa fa-star"></i>
            
           
              <i class="fa fa-star"></i>
            
           
              <i class="fa fa-star"></i>
           
           
              <i class="fa fa-star"></i>
            
           
              <i class="fa fa-star"></i>
            
          </div>
          <!-- Description -->
          <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
          </p>
          <!-- card cardpannel footer -->
          <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>89$</strong>
            </span>
            <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fa fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fa fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                <i class="fa fa-heart grey-text ml-3"></i>
              </a>
            </span>
          </div>
        </div>
        <!-- card cardpannel content -->
      </div>
      <!-- card cardpannel -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
      <!-- card cardpannel -->
      <div class="card cardpannel card-cascade narrower card-ecommerce">
        <!-- card cardpannel image -->
        <div class="view views view-cascade overlay">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/4.jpg" class="card-img-top"
            alt="sample photo">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- card cardpannel image -->
        <!-- card cardpannel content -->
        <div class="card-body card-body-cascade text-center">
          <!-- Category & Title -->
          <a href="" class="grey-text">
            <h5>Outwear</h5>
          </a>
          <h4 class="card-title">
            <strong>
              <a href="">Brown coat</a>
            </strong>
          </h4>
          <!--Rating-->
          <div class="rating">
          
              <i class="fa fa-star"></i>
            
          
              <i class="fa fa-star"></i>
          
          
              <i class="fa fa-star"></i>
          
          
              <i class="fa fa-star"></i>
          
          
              <i class="fa fa-star-half-o"></i>
          
          </div>
          <!-- Description -->
          <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
          </p>
          <!-- card cardpannel footer -->
          <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>59$</strong>
            </span>
            <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fa fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fa fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                <i class="fa fa-heart grey-text ml-3"></i>
              </a>
            </span>
          </div>
        </div>
        <!-- card cardpannel content -->
      </div>
      <!-- card cardpannel -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6">
      <!-- card cardpannel -->
      <div class="card cardpannel card-cascade narrower card-ecommerce">
        <!-- card cardpannel image -->
        <div class="view views view-cascade overlay">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
            alt="sample photo">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- card cardpannel image -->
        <!-- card cardpannel content -->
        <div class="card-body card-body-cascade text-center">
          <!-- Category & Title -->
          <a href="" class="grey-text">
            <h5>Blouses</h5>
          </a>
          <h4 class="card-title">
            <strong>
              <a href="">Shirt</a>
            </strong>
          </h4>
          <!--Rating-->
          <div class="rating">
            
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            
              <i class="fa fa-star"></i>
           
              <i class="fa fa-star"></i>
           
              <i class="fa fa-star-o"></i>
          </div>
          <!-- Description -->
          <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
          </p>
          <!-- card cardpannel footer -->
          <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>119$</strong>
            </span>
            <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fa fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fa fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                <i class="fa fa-heart ml-3"></i>
              </a>
            </span>
          </div>
        </div>
        <!-- card cardpannel content -->
      </div>
      <!-- card cardpannel -->
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!--Section: Group of personal card cardpannels-->


      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <!--Arrow left-->
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">5</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!--Pagination-->

  </div>
</template>

<script>
import ProductPage from "./product-page.vue"

export default {
  name: 'CategAll',
  props: {
    },
    data() {
        return {
        homesDash: true,
        title: "",
        productP: false
        }
          },
   methods: {
      sendMessage () {
        window.alert('Send a message...')
      },
      doACall () {
        window.alert('Calling someone...')
      },
      
    },
  components: {
    ProductPage
  }
}
</script>

<style>

html,
    body,
    header,
    .carousel {
      height: 60%;
    }
    .carousel-inner{
    height: 400px;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .carousel {
        height: 60vh;
      }
      .carousel-inner{
      height: 400px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .carousel {
        height:60vh;
      }
      .carousel-inner{
      height: 400px;
      }
    }

    .content1{
      background-color: #FAFAFA;
      height:600px;
    }

    .content2{
      background-color: #EEEEEE;
       height:600px;
    }
    .content3{
      background-color: #EEEEEE;
       height:700px;
    }

    .md-card cardpannel {

    width: 270px;
    margin: 4px;
    display: inline-block;
    vertical-align: top;
  }
  .md-card-area .photo img{
    width: 100%;
    height: 180px;
  }

  .h4-responsive{
    padding-bottom: 2px;
  }

  views{
  height: 40px;
  }
  .h4-responsive{
    padding-bottom: 2px;
  }

.cardpannel{
  height: 530px;
  margin:7px;
}

.rating{
display: inline;
}
  
.pricef{
  font-size: 20px;
}
</style>
