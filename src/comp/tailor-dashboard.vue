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
              <i class="material-icons">Home</i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item " v-on:click="side('message')">
            <a class="nav-link" href="#">
              <i class="fa fa-envelope"></i>
              <p>Messager</p>
            </a>
          </li>
          <li class="nav-item " v-on:click="side('message')">
            <a class="nav-link" href="#">
              <i class="fa fa-tag"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <md-switch v-model="boolean" class="md-primary"><p>Online Status</p></md-switch>
              
            </a>
          </li>            
          <li class="nav-item " v-on:click="side('managejob')">
            <a class="nav-link" href="#">
              <i class="fa fa-send"></i>
              <p>Manage jobs</p>
            </a>
          </li>
          <li class="nav-item " v-on:click="side('client')">
            <a class="nav-link" href="#">
              <i class="fa fa-send"></i>
              <p>My Clients</p>
            </a>
          </li>
          <li class="nav-item " v-on:click="side('myService')">
            <a class="nav-link" href="#">
              <i class="fa fa-send"></i>
              <p>My service</p>
            </a>
          </li>
          <li class="nav-item " v-on:click="side('earn')">
            <a class="nav-link" href="#">
              <i class="fa fa-send"></i>
              <p>My Earnings</p>
            </a>
          </li>
          <li class="nav-item " v-on:click="side('myprofile')">
            <a class="nav-link" href="#">
              <i class="fa fa-send"></i>
              <p>My Profile</p>
            </a>
          </li>
          <li class="nav-item " v-on:click="side('mySupport')">
            <a class="nav-link" href="#">
              <i class="fa fa-send"></i>
              <p>Support</p>
            </a>
          </li>
          <li class="nav-item " v-on:click="side('setting')">
            <a class="nav-link" href="#">
              <i class="fa fa-gear"></i>
              <p>Settings</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">switch</i>
              <p>View as Customer</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="#">
                    <i class="material-icons">unarchive</i>
                    <p>Log-Out</p>
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
                <a class="nav-link" href="#" v-on:click="side('homeDash')">
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
        <div>
          <div v-if="homesDash">
          <HomeDashboard></HomeDashboard>
      </div>
       <div v-if="messager">
          <message></message>
      </div>
      <div v-if="mysupports">
          <MySupport></MySupport>
      </div>
      <div v-if="myservices">
          <MyService></MyService>
      </div>
       <div v-if="earns">
          <Earnings></Earnings>
      </div>
       <div v-if="settings">
          <Setting></Setting>
      </div>
       <div v-if="managejobs">
          <manageJob></manageJob>
      </div>
       <div v-if="myprofiles">
          <MyProfile></MyProfile>
      </div>
       <div v-if="clients">
          <Client></Client>
      </div>

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
        import Detail from './details.vue'
        import Manage from './manage.vue'
        import MyService from './myService.vue'
        import MySupport from './mySupport.vue'
        import MyProfile from './myProfile.vue'
        import Earnings from './Myearning.vue'
        import Setting from './setting.vue'
        import ManageJob from './manageJob.vue'
        import Client from './client.vue'
        import TailorDashboard from './tailor-dashboard.vue'
        import Message from './message.vue'
        import HomeDashboard from './homeDashboard.vue'


export default {
  name: 'tailor-dashboard',
  props: {
    homeDash: Boolean,
    message: Boolean,
    managejob:Boolean,
    client:Boolean,
    mysupport:Boolean,
    myprofile:Boolean,
    earn:Boolean,
    myservice:Boolean,
    setting:Boolean,
    view: Boolean,

    },
    data() {
        return {
        homesDash: true,
        messager: false,
        managejobs:false,
        clients:false,
        mysupports:false,
        myprofiles:false,
        earns:false,
        myservices:false,
        settings:false,
        boolean: true,
        title: "Dashboard",
        productP: false
        }
          },
        methods: {
        side(show)
          {
            if(show == 'homeDash'){this.homesDash=true; this.title= "Dashboard"}else{this.homesDash=false}
            if(show == 'message'){this.messager=true; this.title="Message"}else{this.messager=false}
            if(show == 'managejob'){this.managejobs=true; this.title= "Manage Jobs"}else{this.managejobs=false}
            if(show == 'client'){this.clients=true; this.title="My Clients"}else{this.clients=false}
            if(show == 'mySupport'){this.mysupports=true; this.title= "Support"}else{this.mysupports=false}
            if(show == 'myprofile'){this.myprofiles=true; this.title="My Profile"}else{this.myprofiles=false}
            if(show == 'earn'){this.earns=true; this.title= "My Earnings"}else{this.earns=false}
            if(show == 'myService'){this.myservices=true; this.title="Services"}else{this.myservices=false}
            if(show == 'setting'){this.settings=true; this.title="Settings"}else{this.settings=false}
          }
        },
        components: {
        HomeDashboard,
        Detail,
        Manage,
        MyService,
        MySupport,
        MyProfile,
        Earnings,
        Setting,
        ManageJob,
        Client,
        TailorDashboard,
        Message
       

        }
      }
</script>

<style  >
.md-switch {
    display: flex;
  }
</style>