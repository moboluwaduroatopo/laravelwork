<template>
  <div>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="./assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          <strong>SoFine</strong>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active" v-on:click="side('homeDash')">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item " v-on:click="side('message')">
            <a class="nav-link" href="#">
              <i class="fa fa-envelope"></i>
              <p>Messager</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="fa fa-tag"></i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <md-switch v-model="boolean" class="md-primary"><p>Online Status</p></md-switch>
              
            </a>
          </li>            
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="fa fa-send"></i>
              <p>Make Special Request</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="fa fa-gear"></i>
              <p>Settings</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">switch</i>
              <p>View as Tailor</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#"><strong>{{ title }}</strong></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" v-on:click="side('homeDash')">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
          <div v-if="productP">
            <ProductPage></ProductPage>
          </div>  
          <div v-if="homesDash">
            <HomeDashboard></HomeDashboard>
          </div>
          <div v-if="messager">
             <message></message>
          </div>
     
        
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                  SoFine-Tim
                </a>
              </li>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
                </a>
              </li>
              <li>
                <a href="#">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
             made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">soFine-Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>

  </div>
</template>

<script>
        import ProductPage from './product-page.vue'
        import HomeDashboard from './homeDashboard.vue'
        import Message from './message.vue'

 document.write(new Date().getFullYear())

export default {
  name: 'ProductDashboard',
  props: {
    homeDash: Boolean,
    message: Boolean,
    view: Boolean,

    },
    data() {
        return {
        homesDash: false,
        messager: false,
        boolean: true,
        title: "Dashboard",
        productP: true
        }
          },
        methods: {
        side(show)
          {
            if(show == 'homeDash'){this.homesDash=true; this.productP=false; this.title= "Dashboard"}else{this.homesDash=false}
            if(show == 'message'){this.messager=true; this.title="Message"}else{this.messager=false}
          }
        },
        components: {
        HomeDashboard,
        Message,
        ProductPage
        }
      }
</script>

<style  >
.md-switch {
    display: flex;
  }
</style>