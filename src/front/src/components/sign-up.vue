
<template>
  <div>

          <!-- Navbar -->
   
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('image/caro/caro16.jpg');  background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container mt-5">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Get a Gig</h1>

            

            <h3>
              <strong>And sell your designs here</strong>
            </h3>

            <hr class="hr-light">

            <p class="mb-4 d-none d-md-block">
              <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                available. Create your own, stunning website.</strong>
            </p>

            <router-link to="/tailor-signup" class="btn btn-success btn-lg">Register as Tailor
              <i class="fa fa-book" aria-hidden="true"></i>
            </router-link>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

           <!-- Material form register -->
              <div class="card">

                  <h5 class="card-header success-color white-text text-center py-4">
                      <strong>Sign up</strong>
                  </h5>

                  <!--Card content-->
                  <div class="card-body px-lg-5 pt-0">

                      <!-- Form -->
                      <form v-on:submit.prevent="register"  class="text-center" style="color: #757575;">

                          <div class="form-row">
                              <div class="col">
                                  <!-- First name -->
                                  <div class="md-form">
                                      <input v-model="fname" type="text" id="materialRegisterFormFirstName" class="form-control">
                                      <label for="materialRegisterFormFirstName">First name</label>
                                  </div>
                              </div>
                              <div class="col">
                                  <!-- Last name -->
                                  <div class="md-form">
                                      <input v-model="lname" type="text" id="materialRegisterFormLastName" class="form-control">
                                      <label for="materialRegisterFormLastName">Last name</label>
                                  </div>
                              </div>
                          </div>

                          <!-- E-mail -->
                          <div class="md-form mt-0">
                              <input v-model="email" type="email" id="materialRegisterFormEmail" class="form-control">
                              <label for="materialRegisterFormEmail">E-mail</label>
                          </div>

                          <!-- Password -->
                          <div class="md-form">
                              <input v-model="password" type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                              <label for="materialRegisterFormPassword">Password</label>
                              <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                  At least 8 characters and 1 digit
                              </small>
                          </div>

                          <!-- Phone number -->
                          <div class="md-form">
                              <input v-model="phone" type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                              <label for="materialRegisterFormPhone">Phone number</label>
                              <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                  Optional - for two step authentication
                              </small>
                          </div>

                          <!-- Newsletter -->
                          <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                              <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                          </div>

                          <!-- Sign up button  <router-link to="/tailor-dashboard"><button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button></router-link> -->


                                <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
                          <hr>

                          <!-- Terms of service -->
                          <p>By clicking
                              <em>Sign up</em> you agree to our
                              <a href="#" style="color: #00C851;">terms of service</a> and
                              <a href="#" style="color: #00C851;">terms of service</a>. </p>

                      </form>
                     
                      <!-- Form -->

                  </div>

              </div>
              <!-- Material form register -->

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
 
  export default {
    data (){
    return{
      fname:'',
      lname:'',
      email:'',
      password:'',
      phone:''
    }
  },
    
    methods: {
     register () {
        axios.post("http://localhost/laravel/larasofine/backend1/public/api/signup",{
          name:this.fname  + '' +  this.lname,
          email:this.email,
          password:this.password,
          phone:this.phone
        })
        .then((res)=>{
          console.log(res)
          router.push({name: '/signin'})
        })
        .catch((err)=>{
          console.log(err)
        })
       
      },
     
    }
  }
  </script>
  
<!-- <script>

export default {
  data (){
    return{
       fname:'',
      lname:'',
      email:'',
      password:'',
      phone:''
    }
  },
   methods: {
    register () {
      this.$http.get("http://localhost/laravel/larasofine/backend1/public/api/signup")
      .then(function (response){
        console.log(response)
      })
    }
  }
}
</script> -->

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
      header,
      .view {
        height: 1000px;
      }
    }
    @media (max-width: 768px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
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
