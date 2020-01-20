
<template>
  <div id="app">
<div class="container">
 <div class="row">
        <div class="col-md-12 col-md-offset-3">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form>
        </div>
    </div>
      <div class="row color">
      <div class="col-md-6">
      <div class="card" style="">
    <a href="./assets/img/male.png"><img class="card-img-top rounded-circle" src="assets/img/male.png" alt="Card image" id="mk"></a>
  </div>
   </div>
     <div class="col-md-6">
     <table class="table">
    <thead>
      <tr>
        <th  class="text-centre text-bold">Client Details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-left">Fullname</td>
        <td class="text-right">Delight delight</td>
      </tr>
      <tr>
        <td class="text-left">Username</td>
        <td class="text-right">Delight99</td>
      </tr>
        <tr>
        <td class="text-left">Email</td>
        <td class="text-right">delightolarinde@gmail.com</td>
      </tr>
      <tr>
        <td class="text-left">Password</td>
        <td class="text-right">08012345678</td>
      </tr>
        <tr>
        <td class="text-left">Address</td>
        <td class="text-right">Pako street,Illy</td>
      </tr>
    </tbody>
  </table>
  </div>
  </div>
        <div class="row">
          <div class="col-md-12">
      <md-tabs md-sync-route>
      <md-tab id="tab-style" md-label="Style" >
       <div class="card" style=" height: 560px;
    width:350px;">
            <img class="card-img-top" style=" height: 400px;
    width:350px;" src="assets/img/log4.jpg">
            <div class="card-body">
              <h4 class="card-title">Job Description</h4>
              <p class="card-text">Native</p>
              <button class="btn btn-success">Job Over</button>
            </div>
          </div>
  </md-tab>

      <md-tab id="tab-measurement" md-label="Measurement" >
         
 <div class="container">
  <ul class="list-group list-group-flush">
  <list  class="list-group-item text-left">Type:Gown</list>
          <list class="list-group-item text-left">Full length - 52inches</list>
          <list class="list-group-item text-left">Back - 15inches</list>
          <list class="list-group-item text-left">Bust - 38inches</list>
          <list class="list-group-item text-left">Under bust - 36inches</list>
          <list class="list-group-item text-left">Slim waist - 28inches</list>
          <list class="list-group-item text-left">Half length - 40inches</list>
          <list class="list-group-item text-left">Hip waist - 34inches</list>
          <list class="list-group-item text-left">Hip line - 14inches</list>
          <list class="list-group-item text-left">Waist line - 14inches</list>
          <list class="list-group-item text-left">Sleeve - 8inches</list>
          <list class="list-group-item text-left">Shoulder circumference - 17inches</list>
  </ul>
</div>
    </md-tab>
 <md-tab id="tab-past jobs" md-label="Past Jobs" >
<div class="container">
          <div class="row">
          <div class="col-md-4">
                  <div class="card" style=" height: 500px;width:350px;">
                    <img class="card-img-top" style=" height: 400px;width:350px;" src="assets/img/log4.jpg">
                    <br>
                    <div class="card-body">
                      <h4 class="card-title">Job Description</h4>
                      <p class="card-text">Native</p>
                    </div>
                  </div>
          </div>
          <div class="col-md-4">
              <div class="card" style=" height: 500px;width:350px;" >
                  <img class="card-img-top" style=" height: 400px;width:350px;" src="assets/img/log4.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Job Description</h4>
                    <p class="card-text">Native</p>
                    
                  </div>
                </div>
          </div>
          <div class="col-md-4">
              <div class="card" style=" height: 500px;width:350px;" >
                  <img class="card-img-top" style=" height: 400px; width:350px;" src="assets/img/log4.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Job Description</h4>
                    <p class="card-text">Native</p>
                 
                  </div>
                </div>
          </div>
      </div>
      </div>
      </md-tab>
    </md-tabs>

          </div>
          </div>
      </div>
</div>

  


    
   
  </template>

<script>


export default {
  name: 'manageJob',
  data: () => ({
      email: null,
      username: null,
      password: null,
      firstname:null,
      lastname:null,
      status:null,
      phone:null,
      selectedDate: null
         })
}
</script>

<style>

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;

}
.color{
  background-color: #FCFCFB;
  border-radiu:10px
}
.file-text
  {
    font-size: 13px;
    margin-left: 0px
  }


#mk{
    width: 300px;
    height: 300px;

}
.card{
  width:400px;
  height:400px
}
.search-form .form-group {
  float: right !important;
  transition: all 0.35s, border-radius 0s;
  width: 32px;
  height: 32px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  border-radius: 25px;
  border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
  padding-right: 20px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 100%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;
  top: -1px;
  right: -2px;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 14px;
}

</style>
