
<template>
  <div>
  <nav class="navbar fixed-top navbars-expand-lg navbars-light white scrolling-navbar">
    <div class="container">

      <a class="navbars-brand" href="#" target="_blank">
        <strong>SoFine</strong>
      </a>

      <button class="navbars-toggler" type="button" data-toggle="collapse" data-target="#navbarsSupportedContent" aria-controls="navbarsSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
            
            <span class="navbars-toggler-icon icon-bar"></span>
      </button>

      <div class="collapse navbars-collapse" id="navbarsSupportedContent">

        <ul class="navbars-nav mr-auto">
         
          <li class="nav-item active">
            <a  class="nav-link" href="#" v-on:click="side('home')" >Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Support</a>
          </li>
        </ul>

        <ul class="navbars-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
          <a href="#" class="nav-link border border-light rounded"  v-on:click="side('sign')" >
              <i></i>sign in
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- navbars -->

      <div v-if="homes">
          <Home></Home>
      </div>
       <div v-if="signIns">
          <Sign_In></Sign_In>
      </div>

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
     <div class="container">
    <div class="foot-beta">
      Beta<sup>&copy;</sup>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-4">
            <div class="foot-one"><b>Categories</b></div>
            <span>Native Tailors</span> <br>
            <span>Suit Tailors</span> <br>
            <span>Corporate</span> <br>
            <span>Cap Tailors</span> <br>
            <span>Designers</span> <br>
            <span>Casual Tailors</span> <br>
            <span>Customiser</span> <br>           
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
            <div class="foot-one"><b>About</b></div>
            <span>Careers</span> <br>
            <span>Press & News</span> <br>
            <span>Intellectual Property Claims</span> <br>
            <span>Terms of Service</span> <br>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
              <div class="foot-one"><b>Support</b></div>
              <span>Contact Support</span> <br>
            <span>Help & Education</span> <br>
            <span>Trust & Safety</span> <br>
            <span>Selling on Beta</span> <br>
            <span>Buying on Beta</span> <br>           
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-3">
                <div class="foot-one"><b>Privacy Policy</b></div>
                <span>Policy</span> <br>
            <span>Partnerships</span> <br>
            <span>Exclusive Benefits</span> <br>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-3">
                  <div class="foot-one"><b>Community</b></div>
            <span>Events</span> <br> 
            <span>Blogs</span> <br> 
            <span>Forum</span> <br> 
            <span>Podcast</span> <br> 
            <span>Affiliates</span> <br> 
            <span>Invite a Friend</span> <br> 
                </div>
    </div>
  </div>
    </div>


    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="#" target="_blank">
        <i class="fa fa-facebook mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fa fa-twitter mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fa fa-youtube mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fa fa-google-plus mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fa fa-dribbble mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fa fa-pinterest mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fa fa-github mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fa fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      ©
      <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> Beta-Tailor-Team-2018</a>
    </div>
    <!--/.Copyright-->

  </footer>

  </div>
</template>

<script>
import Home from './home.vue'
import Sign_In from './signIn.vue'
 document.write(new Date().getFullYear());

export default {
  name: 'GuestNav',
  props: {
    home: Boolean,
    signIn: Boolean,
    view: Boolean
  },
  data() {
  return {
  homes: true,
  signIns: false,

  }
  },
  methods: {
  side(show)
  {
   this.view = (show == 'home')?this.homes=true:this.homes=false;
   this.view = (show == 'sign')?this.signIns=true:this.signIns=false;
  }

  },
  components: {
    Home,
    Sign_In
  }
}
</script>

<style>

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}


html,
      body,
      header,
      .carousel {
        height: 60vh;
      }

      @media (max-width: 740px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
        .border {
        width:9vh;
        font-size:20px
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
              .navbars:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }

.foot-one
        {
            color:#555555;
            margin-bottom: 1pc;
        }
       
        footer span
        {
            color:#777777;
            font-size:14px;
            margin-bottom: 1pc;
        }
        .foot-beta
        {
            font-size: 35px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color:#555555;
            margin-bottom: 1pc;
        }
        .foot-under
        {
            font-size: 13px;
            color:#777777;
        }
</style>
