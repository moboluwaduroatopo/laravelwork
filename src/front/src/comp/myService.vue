<template>
  <div>

   <div class="card">
   <div class="card-body">
       <div class="list-group">
  <a  class="list-group-ite d-flex justify-content-between align-items-center list-group-item-action ">Existing Services
   <span class="badge badge-light badge-pill"><i class="fa fa-chevron-right"></i></span>
         </a>
         </div>     
    </div>
  </div>
  <div class="card">
    <div class="card-body">
       <div class="list-group">
  <a  class="list-group-ite d-flex justify-content-between align-items-center list-group-item-action ">Create a new service
   <span class="badge badge-light badge-pill"><i class="fa fa-chevron-right"></i></span>
         </a>
              </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
       <div class="list-group">
  <a class="list-group-ite d-flex justify-content-between align-items-center list-group-item-action ">Promote your service
   <span class="badge badge-light badge-pill"><i class="fa fa-chevron-right"></i></span>
         </a>
              </div>
    </div>
  </div>
   <div class="card">
    <div class="card-body">
       <div class="list-group">
  <a  class="list-group-ite d-flex justify-content-between align-items-center list-group-item-action ">Destroy a service
   <span class="badge badge-light badge-pill"><i class="fa fa-chevron-right"></i></span>
         </a>
              </div>
    </div>
  </div>
  </div>
</template>

<script>
export default {
  name: 'myService'
}
</script>

<style  scoped>
.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width:100%;
    height:10%

}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
 

</style>