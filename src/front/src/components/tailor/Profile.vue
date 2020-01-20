<template>
  <div id="app">
    <navbar></navbar>
  <br><br><br>
<div class="container">
      <div class="row">
      <div class="col-md-6">
      <div class="card" style="">
    <a href="./assets/img/male.png"><img class="card-img-top rounded-circle" src="assets/img/male.png" alt="Card image" id="mk"></a>
    <div class="card-body">
      <h5 class="card-title"><input type="file" ></h5>
      <p class="card-text">Choose another Photo</p>
      </div>
  </div>
   </div>
     <div class="col-md-6">
     <md-tabs md-sync-route>
      <md-tab id="tab-account" md-label="Account" >
      <md-field>
     <!--  <md-icon class="md-primary">email</md-icon> -->
      <label>Email</label>
       <md-input v-model="email"   type="text">{{email}}</md-input>
    </md-field>
      <md-field>

              <label>username</label>
              <md-input v-model="username" type="text"  >{{whole_name}}</md-input>
     </md-field>
    <md-field>
      <label>New Password</label>
      <md-input v-model="password"  placeholder="welcome"></md-input>
    </md-field>
  </md-tab>

      <md-tab id="tab-profile" md-label="Profile" >
          <md-field>
      <label>Firstname</label>
       <md-input v-model="firstname" type="text"  placeholder="Delight"></md-input>
    </md-field>
  <md-field>
              <label>LastName</label>
              <md-input v-model="username" type="text"  placeholder="Promise"></md-input>
     </md-field>
    <md-field>
      <label> Status</label>
      <md-input v-model="status"  placeholder="The Lord is Good"></md-input>
    </md-field>
 <md-datepicker v-model="selectedDate"  value="date"/>
    </md-tab>
 <md-tab id="tab-contact" md-label="Contact" >

      <md-field>
        <!-- <md-icon class="md-primary">phone</md-icon> -->
      <label>Phone Number</label>
       <md-input v-model="phone" type="text"  >{{phone}}</md-input>
    </md-field>
  

      </md-tab>
    </md-tabs>

          </div>
          </div>
      </div>
</div>

  


    
   
  </template>

<script>
import axios from 'axios'
import { Row, Column, Card, CardBody, ViewWrapper, MdMask, CardTitle, CardText, CardFooter, Fa, Btn, Pagination, PageNav, PageItem } from 'mdbvue'
import Navbar from '../Navbar'

export default {
  name: 'Profile',
  components: {
    Row,
    Column,
    Card,
    CardBody,
    ViewWrapper,
    MdMask,
    CardTitle,
    CardText,
    CardFooter,
    Fa,
    Btn,
    Pagination,
    PageNav,
    PageItem,
    'Navbar': Navbar
  },
  //  data: () => ({
  //     email: null,
  //     username: null,
  //     password: null,
  //     firstname:null,
  //     lastname:null,
  //     status:null,
  //     phone:null,
  //     selectedDate: null
  //        }),

         data(){
           this.getUser().then(res =>{
             this.whole_name = res.user.name
             this.email = res.user.email
             this.phone = res.user.phone
              this.file = res.user.file
            //  this.email = res.user.email
             return res 
           })
           return {
             whole_name:'',
             email:'',
             phone:'',
             file:''
             
           }
         },
         methods: {
           getUser(){
             return axios.get('http://localhost/laravel/larasofine/backend/public/api/me',{
               headers:{
                 Authorization:`Bearer ${localStorage.usertoken}`
               }
             }) 
             .then(res => {
               return res.data
             })
             .catch(err => {
               console.log(err)
             })
           }
         }

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;

}
.file-text
  {
    font-size: 13px;
    margin-left: 0px
  }


#mk{
    width: 400px;
    height: 400px;

}
.card{
  width:500px;
  height:500px
}

</style>
