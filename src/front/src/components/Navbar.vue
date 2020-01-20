<template>
         <!-- Navbar -->
         <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
            <div class="container">
        
              <!-- Brand -->
              <a class=" navbar-brand" href="#">
                <h3 class="navcolo" v-if="auth==''"><strong>soFine Tailor</strong></h3>
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
                  <li v-if="auth==''" class="nav-item active">
                    <router-link  to="/" class="nav-link">Home
                      <span class="sr-only">(current)</span>
                    </router-link>
                  </li>
                  <li v-if="auth==''" class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li v-if="auth==''" class="nav-item">
                    <a class="nav-link" href="#">Policy</a>
                  </li>
                  <li v-if="auth==''" class="nav-item">
                    <a class="nav-link" href="#">Support</a>
                  </li>
                  <li v-if="auth==''" class="nav-item">
                    <router-link to="/contact" class="nav-link" href="#">Contact</router-link>
                  </li>
                </ul>
        
                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                  <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li> -->
                  <li v-if="auth==''" class="nav-item">
                    <router-link to="/signup" href="#" class="nav-link border border-light rounded"
                      >Sign Up</router-link>
                  </li>
                  <li v-if="auth=='loggedin'" class="nav-item">
                    <router-link  to="/profile" href="#" class="nav-link border border-light rounded"
                      >Profile</router-link>
                  </li>
                  
                  <li v-if="auth=='loggedin'" class="nav-item">
                    <router-link  href="" class="nav-link border border-light rounded"
                      >Logout</router-link>
                  </li>
                </ul>
        
              </div>
        
            </div>
          </nav>
          <!-- Navbar -->
    
</template>

<script>

import EventBus from './EventBus';
export default {
  
  data (){
    return{
      auth:'',
     user:''
    }
  },
  methods:{
      logout(){
          localStorage.removeItem('usertoken')
      }
  },
  mounted(){
      EventBus.$on('logged-in', status => {
          this.auth = status;
      })
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

