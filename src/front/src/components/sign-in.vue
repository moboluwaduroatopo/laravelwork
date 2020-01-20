
<template>
  <div>

          <!-- Navbar -->
  <navbar></navbar>
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
                      <form v-on:submit.prevent="login" class="text-center secondary">

                          <p>Join our mailing list. We write rarely, but only the best content.</p>

                          <p>
                              <a href="" ></a>
                          </p>

                          <!-- Name -->
                          <div class="md-form mt-3">
                              <input v-model="email" type="email" id="materialSubscriptionFormEmail" class="form-control">
                              <label for="materialSubscriptionFormEmail">E-mail</label>
                          </div>

                          <!-- E-mail -->
                          <div class="md-form">
                              <input v-model="password" type="password" id="materialSubscriptionFormPasswords" class="form-control">
                              <label for="materialSubscriptionFormPasswords">Password</label>
                          </div>

                          <!-- Sign in button <router-link to="/customer-dashboard"><button class="btn btn-outline-success btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button></router-link>-->
                          <button @click="login" class="btn btn-outline-success btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                         

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
import axios from 'axios'
import router from '../router'
import EventBus from './EventBus'
import Navbar from './Navbar'
export default {
  components: {
     'Navbar': Navbar
  },
  data (){
    return{
      email:'',
      password:''
    }
  },
  
  methods: {
    login () {
      axios.post("http://localhost/laravel/larasofine/backend/public/api/login",{
        email:this.email,
        password:this.password
      })
      .then((res)=>{
        //console.log(response)
        localStorage.setItem('usertoken',res.data.access_token)
        this.email=''
        this.password=''
        router.push({name: 'profile'})
      })
      .catch((err)=>{
        console.log(err)
      })
      this.emitMethod()
    },
    emitMethod(){
      EventBus.$emit('logged-in','loggedin')
    }
  }
}
</script>


