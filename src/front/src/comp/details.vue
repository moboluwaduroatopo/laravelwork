
<template>
  <div>
  <div>
   <div class="container form-search">
        <span class="input-group">
            <span class="input-group-addon"><button class="btn-search"><i class="fa fa-search"></i></button><input type="text" placeholder="search anything..." class="search"></span>
         </span>
      </div>
      <div class="container head">
        <span><a v-on:click="changeit('cli')">Clients</a></span> > <span><a >Details</a></span>
      </div>
      <div class="container all">
          <div class="card">
              <div class="row">
                <div class="col-md-6">
                        <img src="assets2/img/male.png" class="img-fluid rounded-circle"> 
                </div>
                <div class="col-md-6">
                   <span class="full-cli"><b>Client Details</b></span>
                   <div>Fullname<span>Delight delight</span></div>
                   <hr>
                   <div>Username<span>Delight99</span></div>
                   <hr>
                   <div>Email<span>Delight@gmail.com</span></div>
                   <hr>
                   <div>Phone Number<span>08012345678</span></div>
                   <hr>
                   <div>Address<span>Pako street,Illy</span></div>
                   <hr>
                </div>       
               </div>      
          </div>
          </div>
          <div class="row">
          <div class="col-md-12">
      <md-tabs md-sync-route>
      <md-tab id="tab-jobs" md-label="All Jobs" >
            <div class="row">
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
                  <img class="card-img-top" style=" height: 400px;width:350px;" src="assets/img/log4.jpg">
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
        </div>      
  </md-tab>

      <md-tab id="tab-pending" md-label="Pending" >
         
 <div class="container">
   <div class="text-center" id="pend"><b>No Pending Job</b></div>
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
  name: 'Detail',
   props: {
    det: Boolean,
    view: Boolean
  },
  methods: {
  changeit(show)
  {
   this.view = (show == 'cli')?this.det=true:this.det=false;

  }

  },
}
</script>

<style>
  hr{padding: 0px;margin-left: 1pc;margin-right: 1pc}
@media (max-width: 375px) {
    .search
   {
       width:17pc;}
  }
  @media (max-width: 430px) and (min-width:400px) {
  .search{width:20pc}

  }
  @media (max-width: 770px) and (min-width:750px) {
  .search{width:37pc}
  }
  @media (max-width: 1030px) and (min-width:1000px) {
  .search{width:55pc;}
  }
</style>
