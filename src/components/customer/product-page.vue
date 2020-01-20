
<template>
  <div>
<!-- navbars -->
  <nav class="navbar fixed-top navbars-expand-lg navbars-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbars-brand waves-effect" href="#" >
        <strong class="blue-text">SoFine</strong>
      </a>

      <!-- Collapse -->
      <button class="navbars-toggler" type="button" data-toggle="collapse" data-target="#navbarsSupportedContent" aria-controls="navbarsSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbars-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbars-collapse" id="navbarsSupportedContent">

        <!-- Left -->
        <ul class="navbars-nav mr-auto">
          <li class="nav-item active">
            <router-link to="/customer-dashboard" class="nav-link waves-effect">Dashboard
              <span class="sr-only">(current)</span>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/category" class="nav-link waves-effect" href="#" >Categories
            </router-link>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#">Special Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#" target="_blank">Recomendation</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbars-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect">
              <span class="badge red z-depth-1 mr-1"> 1 </span>
              <i class="fa fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Cart </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link border border-light rounded waves-effect"
              target="_blank">
              <i class="fa fa-user"></i>Profile
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- navbars -->




   <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-7 mb-4">

              <div class="card">
                <div class="m-3">
                  <h2><b>Get your job done  by experts</b></h2>

                      <div class="mb-2 mt-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img(31).jpg" class="img-fluid z-depth-1 rounded-circle myPix"
                        alt="Responsive image">
                        <div class="tins">
                            <div card-header-pillss="md-title"><h4><b>Area 51</b></h4></div>
                            <div class="md-subhead mt-2">Suite tailor</div>
                        </div>

                      <!--Rating-->
                          <div class="rating text-primary mt-4">
                            
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            
                              <i class="fa fa-star"></i>
                           
                              <i class="fa fa-star"></i>
                           
                              <i class="fa fa-star"></i>
                              <span>  (167)  7 Orders in Queue</span>
                          </div>
                        </div>
                </div>
                <hr>
                <div class="card-body">
                  <img src="/assets2/img/categories/cat32.jpg" class="img-fluid" alt="">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#!" class="btn btn-primary">Go somewhere</a>
              </div>
</div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5   mb-4">
        <div class="card">
          <div class="card-header">

          <ul class="nav nav-pills card-header-pills" id="myTabEx" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="home-tab-ex" data-toggle="tab" href="#home-ex" role="tab" aria-controls="home-ex" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab-ex" data-toggle="tab" href="#profile-ex" role="tab" aria-controls="profile-ex" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab-ex" data-toggle="tab" href="#contact-ex" role="tab" aria-controls="contact-ex" aria-selected="false">Contact</a>
            </li>
          </ul>
          </div>
<div class="tab-content pt-5 card-body" id="myTabContentEx">
  <div class="tab-pane fade active show" id="home-ex" role="tabpanel" aria-labelledby="home-tab-ex">
  <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1">Category 2</span>
              </a>
              <a href="">
                <span class="badge blue mr-1">New</span>
              </a>
              <a href="">
                <span class="badge red mr-1">Bestseller</span>
              </a>
            </div>

            <p class="lead">
              <span class="mr-1">
                <del>$200</del>
              </span>
              <span>$100</span>
            </p>

            <p class="lead font-weight-bold">Description</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa sint voluptatibus!
              Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p" type="submit">Continue
                <i class="fa fa-check-square-o ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->
  </div>
  <div class="tab-pane fade" id="profile-ex" role="tabpanel" aria-labelledby="profile-tab-ex">
    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
  </div>
  <div class="tab-pane fade" id="contact-ex" role="tabpanel" aria-labelledby="contact-tab-ex">
    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
  </div>
</div>
</div>
          <div class="card">
                <div class="card-header">
                  <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                   <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1">Category 2</span>
              </a>
              <a href="">
                <span class="badge blue mr-1">New</span>
              </a>
              <a href="">
                <span class="badge red mr-1">Bestseller</span>
              </a>
            </div>

            <p class="lead">
              <span class="mr-1">
                <del>$200</del>
              </span>
              <span>$100</span>
            </p>

            <p class="lead font-weight-bold">Description</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa sint voluptatibus!
              Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart
                <i class="fa fa-shopping-cart ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->
                </div>
          </div>
        </div>
        <!--Grid column-->
  
      </div>
      <!--Grid row-->

    
      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-7 mb-4">

              <div class="card mt-1">
                 <div class="card-header"><h3><b>About This Gig</b></h3></div>
                <div class="card-body">
                  <p>I strive to be the best marketer you'll ever work with. Period.<br> 

                  I'll consult and guide you on how to properly market and promote your work.<br> 

                  Why me? <br>

                  I've been a marketing manager at Google and YouTube, where I've orchestrated major brand campaigns and product launches<br>

                  I was ranked as a Top 7 marketer by Inc Magazine which stated: "If anyone has cracked the code on how to go viral, it's Jon Youshaei. This Wharton alumnus is a creative force who inspires movements for millennials.</p><hr>

                  <div class="table-responsive">
  <!--Table-->
  <table class="table table-striped">

    <!--Table head-->
    <thead>
      <tr>
        <th>#</th>
        <th>Description</th>
        <th>Size</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Kate</td>
        <td>Moss</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Anna</td>
        <td>Wintour</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Jerry</td>
        <td>Horwitz</td>
      </tr>
    </tbody>
    <!--Table body-->
  </table>
  <!--Table-->
  <ul>
  PS links mentioned above: 
  <li>- Forbes' top story with 1.4 million views: bit.ly/ForbesTopStory</li>
  <li>- NPR-ranked graduation speech: bit.ly/NPRrankings</li>
  <li>- Inc Magazine's Top 7 Marketers: bit.ly/IncTopMarketers</li>
  <li>- Entrepreneur Magazine Top 10 Marketers: bit.ly/EntTop10</li>

  </ul>
</div>

                 </div>
              </div>

        </div>
        <!--Grid column-->
</div>
<!--Grid row-->


<!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-7 mb-4">

              <div class="card mt-1">
                 <div class="card-header"><h3><b>About The Seller</b></h3></div>
                <div class="card-body">
                      <div class="mb-2">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img(31).jpg" class="img-fluid z-depth-1 rounded-circle myPix"
                        alt="Responsive image">
                         <div class="tins">
                            <div card-header-pillss="md-title mt-3"><h4><b>Area 51</b></h4></div>
                            <div class="md-subhead mt-2">Suite tailor</div>
                        </div>
                      </div>

                  <!--Rating-->
                      <div class="rating text-primary mt-3">
                        
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        
                          <i class="fa fa-star"></i>
                       
                          <i class="fa fa-star"></i>
                       
                          <i class="fa fa-star"></i>
                          <span>  (167)  7 Orders in Queue</span>
                      </div>
                     <div><button type="button" class="btn btn-outline-success waves-effect mt-3">Contact Me</button></div>
                </div>
                <hr>
                <div class="row ml-2 mb-3">
                <div class="col-md-3">
                 <p>From</p>
                 <b>Olive</b>
                </div>
                <div class="col-md-3">
                 <p>Member Since</p>
                 <b>Omega 13 BCE</b>
                </div>
                <div class="col-md-3">
                 hifshif
                </div>
                <div class="col-md-3">
                 hifshif
                </div>
                </div>
              </div>

        </div>
        <!--Grid column-->
</div>
<!--Grid row-->

          <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-7 mb-4">

              <div class="card">
                <div class="m-3">
                  <h4><b>Reviews</b><i class="fa fa-star ml-2 text-success"></i><b class="ml-1 text-success">5</b></h4>
                  <hr>
                      <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="https://mdbootstrap.com/img/Photos/Others/placeholder4.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="mt-0 font-weight-bold">Media heading<i class="fa fa-star ml-2 text-success"></i><b class="ml-1 text-success">5</b></h5>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                          vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                          congue felis in faucibus.

                          <div class="media mt-4">
                            <a class="d-flex pr-3" href="#">
                               <img src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="Generic placeholder image" class="rounded-circle">
                            </a>
                            <div class="media-body">
                              <h5 class="mt-0 font-weight-bold">Consultant's Feedback<i class="fa fa-star ml-2 text-success"></i><b class="ml-1 text-success">5</b></h5>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                              vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                              congue felis in faucibus.
                            </div>
                          </div>
                        </div>
                      </div>
                    <hr>  
                    <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="https://mdbootstrap.com/img/Photos/Others/placeholder4.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="mt-0 font-weight-bold">Media heading<i class="fa fa-star ml-2 text-success"></i><b class="ml-1 text-success">5</b></h5>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                          vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                          congue felis in faucibus.

                          <div class="media mt-4">
                            <a class="d-flex pr-3" href="#">
                              <img src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="Generic placeholder image" class="rounded-circle">
                            </a>
                            <div class="media-body">
                              <h5 class="mt-0 font-weight-bold">Consultant's Feedback<i class="fa fa-star ml-2 text-success"></i><b class="ml-1 text-success">5</b></h5>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                              vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                              congue felis in faucibus.
                            </div>
                          </div>
                        </div>
                      </div>
                    <hr>
                      
                </div>
              </div>
        </div>
      </div>

      <!-- Section: Products v.1 -->
<section class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-2">Recommended for you in this category</h2>
<hr>
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
    </div>


  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/getting-started/" target="_blank" role="button">Download MDB
        <i class="fa fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank" role="button">Start free tutorial
        <i class="fa fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fa fa-facebook mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fa fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fa fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fa fa-google-plus mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fa fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fa fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fa fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fa fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  </div>
</template>

<script>
        import CategCorp from './categCorp.vue'

export default {
  name: 'ProductPage',
   props: {
    categCorp: Boolean
    },
   data() {
        return {
        categoCorp: true
        }
          },
        methods: {
        side(show)
          {
            if(show == 'categCorp'){this.categoCorp=true} else{this.categoCorp=false}
          
          }
        },
  components: {
      CategCorp
  }
}
</script>

<style>
    li{
    list-style-type:none;
    }
    .myPix{
    width:19%;
    float:right; 
    }
    tins{
     margin-right:100px;
    }
    .btn-outline-success{
    }
     
</style>
