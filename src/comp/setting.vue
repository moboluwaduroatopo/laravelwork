<template>
<div id="app">
<div class="container-fluid">
<div class="text-left" style="color:#2AB967;margin-top:20px;"><h4>Popular Settings</h4></div>
</div>
<div class="card">
 <div class="card-body text-left ">
 <label class="fa fa-bell" style="color:#fffffffd;margin-left:10px;" ></label><label id="label">Notification reminder</label><label class="switch float-right"><input type="checkbox" ><span class="slider round"></span></label>
 </div> 
 <div class="hr"></div>
 <div class="card-body text-left "><label class="fa fa-power-off" style="color:#fffffffd;margin-left:10px;" ></label><label id="label">Notification reminder</label><label class="switch float-right"><input type="checkbox" checked><span class="slider round"></span></label></div> 
 <div class="hr"></div>
  <div class="card-body text-left "><label class="fa fa-power-off" style="color:#fffffffd;margin-left:10px;" ></label><label id="label">Add shortcut to desktop</label><label class="switch float-right"><input type="checkbox" ><span class="slider round"></span></label></div> 
 <div class="hr"></div>
</div>
<div class="yes" style="margin-top:-90px;">
      <div class="container-fluid">
    <div class="text-left" style="color:#2AB967;margin-top:100px;"><h4>Common Settings</h4></div>
    </div>
    <div class="card">
    <div class="card-body text-left "><label class="fa fa-flash" style="color:#fffffffd;margin-left:10px;" ></label><label id="label">Notification</label><label class="switch float-right"><input type="checkbox"><span class="slider round"></span></label></div> 
 <div class="hr"></div>
  <div class="card-body text-left "><label class="fa fa-volume-up" style="color:#fffffffd;margin-left:10px;" ></label><label id="label">Sound</label><label class="switch float-right"><input type="checkbox"><span class="slider round"></span></label></div> 
 <div class="hr"></div>
      <div class="card-body text-left "><label class="fa fa-bell" style="color:#fffffffd;margin-left:10px;" ></label><label id="label">Notification reminder</label><label class="switch float-right"><input type="checkbox"><span class="slider round"></span></label></div> 
 <div class="hr"></div>
      </div>
  </div>
  <div class="yes" style="margin-top:-90px;">
        <div class="container-fluid">
        <div class="text-left" style="color:#2AB967;margin-top:100px;"><h4>General Settings </h4></div>
        </div>
        <div class="card">
          <div class="card-body text-left "><label class="fa fa-star-o" style="color:#fffffffd;margin-left:10px;" ></label><label id="label">Support Us</label><label class="switch float-right"><input type="checkbox"><span class="slider round"></span></label></div> 
    <div class="hr"></div>
           <div class="card-body text-left "><label class="fa fa-share" style="color:#fffffffd;margin-left:10px;" ></label><label id="label">Share</label><label class="switch float-right"><input type="checkbox" checked><span class="slider round"></span></label></div> 
    <div class="hr"></div>
       
   <div class="card-body text-left "><label class="fa fa-warning" style="color:#fffffffd;margin-left:10px;" ></label><label id="label">Privacy </label><label class="switch float-right"><input type="checkbox" ><span class="slider round"></span></label></div> 
    <div class="hr"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'setting',
  data: () => ({
  array:[],
      boolean: true,
      string:null
    })
 
}
</script>

<style  scoped>
#app{
     background:white;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    width: 100%;

    
    overflow: hidden;

}
.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
     width:100%;
    height:40%;
    background-color:#2AB967;
    
}
.md-switch {
    display: flex;
  }
/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.login-html p{
      color:white;
  }
  .hr{
    height:2px;
   
    background:whitesmoke;
  }
  #label{
  color:white
  }
  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
 </style>