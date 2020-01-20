
<template>
  <div>

          <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class=" navbar-brand" href="#">
        <h3 class="navcolo"><strong>soFine Tailor</strong></h3>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <router-link to="/sign-in" class="nav-link">Home
              <span class="sr-only">(current)</span>
            </router-link>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Support</a>
          </li>
          <li class="nav-item">
            <router-link to="/contact" class="nav-link" href="#">Contact</router-link>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <router-link to="/signup" href="#" class="nav-link border border-light rounded"
              >Sign Up</router-link>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('image/caro/caro16.jpg');  background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Hire Expert &</h1>

            

            <h3>
              <strong>and get your job done</strong>
            </h3>

            <hr class="hr-light">

            <p class="mb-4 d-none d-md-block">
              <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                available. Create your own, stunning website.</strong>
            </p>

            <router-link to="/signup" class="btn btn-success btn-lg">Register Here
              <i class="fa fa-book" aria-hidden="true"></i>
            </router-link>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

           <!-- Material form subscription -->
              <div class="card">

                  <h5 class="card-header success-color white-text text-center py-4">
                      <strong>SIGN IN</strong>
                  </h5>

                  <!--Card content-->
                  <div class="card-body px-lg-5">

                      <!-- Form -->
                      <form class="text-center secondary">

                          <p>Join our mailing list. We write rarely, but only the best content.</p>

                          <p>
                              <a href="" ></a>
                          </p>

                          <!-- Name -->
                          <div class="md-form mt-3">
                              <input type="email" id="materialSubscriptionFormEmail" class="form-control">
                              <label for="materialSubscriptionFormEmail">E-mail</label>
                          </div>

                          <!-- E-mai -->
                          <div class="md-form">
                              <input type="password" id="materialSubscriptionFormPasswords" class="form-control">
                              <label for="materialSubscriptionFormPasswords">Password</label>
                          </div>

                          <!-- Sign in button -->
                          <router-link to="/customer-dashboard"><button class="btn btn-outline-success btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button></router-link>

                      </form>
                      <!-- Form -->

                  </div>

              </div>
              <!-- Material form subscription -->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  

  </div>
</template>

<script>

export default {
  name: 'signIn',
  methods: {
  },
  components: {

  }
}
</script>

<style>
.navcolo{
  color: #2AB967  ;
}
html,
    body,
    header,
    .view {
      height: 47.3pc;
    }

    @media (max-width: 740px) {
      html,
      body,

      .view {
        height: 1000px;
      }
    }
    @media (max-width: 768px) {
      html,
      body,
  
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
  
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }

</style>
