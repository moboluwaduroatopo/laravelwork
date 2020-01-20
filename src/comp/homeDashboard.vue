
<template>
  <div>
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('./assets2/img/caro/caro21.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Hire Experts &</strong>
              </h1>

              <p>
                <strong>Get Your Jobs Done</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong></strong>
              </p>

              <router-link to="/custDash" href="#" class="btn btn-outline-white btn-lg">JOIN NOW
                <i class="fa fa-graduation-cap ml-2"></i>
              </router-link>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('./assets2/img/caro/caro20.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Hire Experts &</strong>
              </h1>

              <p>
                <strong>Get Your Jobs Done</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong></strong>
              </p>

              <a target="_blank" href="#" class="btn btn-outline-white btn-lg">JOIN NOW
                <i class="fa fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('./assets2/img/caro/caro22.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Hire Experts &</strong>
              </h1>

              <p>
                <strong>Get Your Jobs Done</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong></strong>
              </p>

              <a target="_blank" href="#" class="btn btn-outline-white btn-lg">JOIN NOW
                <i class="fa fa-tumb-up ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand">Categories:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" v-on:click="side('categAll')">All
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" v-on:click="side('categCorp')">Corporate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" v-on:click="side('categNative')">Native</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" v-on:click="side('categSuite')">Suite</a>
            </li>

          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->

      <div>
          <div v-if="categoAll">
            <CategAll></CategAll>
          </div>
           <div v-if="categoCorp">
              <CategCorp></CategCorp>
          </div>
          <div v-if="categoNative">
              <CategNative></CategNative>
          </div>
           <div v-if="categoSuite">
              <CategSuite></CategSuite>
          </div>
      </div>

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/getting-started/" target="_blank" role="button">Make special order
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

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->

  </div>
</template>

<script>
        import CategAll from './categAll.vue'
        import CategCorp from './categCorp.vue'
        import CategNative from './categNative.vue'
        import CategSuite from './categSuite.vue' 
       document.write(new Date().getFullYear())

export default {
  name: 'HomeDashboard',
   props: {
    categAll: Boolean,
    categCorp: Boolean,
    categNative: Boolean,
    categSuite: Boolean

    },
   data() {
        return {
        categoAll: true,
        categoCorp: false,
        categoNative: false,
        categoSuite: false
        }
          },
        methods: {
        sendMessage () {
              window.alert('Send a message...')
            },
            doACall () {
              window.alert('Calling someone...')
            },
        side(show)
          {
            if(show == 'categAll'){this.categoAll=true} else{this.categoAll=false}
            if(show == 'categCorp'){this.categoCorp=true} else{this.categoCorp=false}
            if(show == 'categNative'){this.categoNative=true} else{this.categoNative=false}
            if(show == 'categSuite'){this.categoSuite=true} else{this.categoSuite=false}
          }
        },
  components: {
      CategAll,
      CategCorp,
      CategNative,
      CategSuite
  }
}
</script>

<style>

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
        height: 60vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .carousel {
        height:60vh;
      }
    }

    .md-card {

    width: 270px;
    margin: 4px;
    display: inline-block;
    vertical-align: top;
  }
  .md-card-area .photo img{
    width: 100%;
    height: 200px;
  }

  
.pricef{
  font-size: 20px;
}
</style>
