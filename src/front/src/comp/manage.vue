
<template>
  <div>
    <div class="container form-search">
        <span class="input-group">
            <span class="input-group-addon"><button class="btn-search"><i class="fa fa-search"></i></button><input type="text" placeholder="search anything..." class="search"></span>
         </span>
      </div>
<div class="container-fluid">
     <a>
      <div class="card">
            <img src="assets2/img/female.png" class="img-fluid rounded-circle card-img-top" id="no" >   
             <div class="card-title"><b>Delight(Blouse and Wrapper)</b> <div class="statusg"></div> <i class="fa fa-chevron-right"></i></div> 
  
          </div>
        </a>
         <div class="card">
            <img src="assets2/img/female.png" class="img-fluid rounded-circle card-img-top" id="no" >   
             <div class="card-title"><b>Delight(Blouse and Wrapper)</b> <div class="statusg"></div> <i class="fa fa-chevron-right"></i></div> 
  
          </div>
           <div class="card">
            <img src="assets2/img/female.png" class="img-fluid rounded-circle card-img-top" id="no" >   
             <div class="card-title"><b>Delight(Blouse and Wrapper)</b> <div class="statusg"></div> <i class="fa fa-chevron-right"></i></div> 
  
          </div>
           <div class="card">
            <img src="assets2/img/female.png" class="img-fluid rounded-circle card-img-top" id="no" >   
             <div class="card-title"><b>Delight(Blouse and Wrapper)</b> <div class="statusg"></div> <i class="fa fa-chevron-right"></i></div> 
  
          </div>
</div>
<!--<div *ngIf="managejob">
    <app-manage-job></app-manage-job>
</div>-->

  </div>
</template>

<script>
export default {
  name: 'Manage',
}
</script>

<style>
.form-search{margin-top: 5pc;}
.input-group{
  height: 30px;background-color: transparent;border: none}
.input-group-addon{height: 30px;background-color: transparent;border: none}
.search
 {
     width:67pc;
     height:40px;
     border-style: none;
     padding-left: 5px;
     border-top-right-radius: 20px;border-bottom-right-radius: 20px;
     border: 1px solid #EAEAEA;border-left: none
 }
 .btn-search
 {
    width:30px;
    height: 40px;
    border-style: none;
    padding: 2px;
    background-color: white;
    border-top-left-radius: 25px;border-bottom-left-radius: 25px;padding-left: 5px;
    border: 1px solid #EAEAEA;border-right: none
 }
 .form-icon
 {
    margin-top: 15px;margin-left: 77%;
 }
 .fa-search{color: #555555}
.card
{
  height: 100px;
  margin-top: 3px;margin-bottom: 3px;background-color:#FCFCFB;
}
.card:hover
{
  background-color: #ededed;
}
.container-fluid a {text-decoration: none;}
#no {
  width: 60px;
  height: 60px;
}
#p{
  height: 7vh;
}
.fa-chevron-right
{
  position: absolute;
  left:93%;
  color: #2ab967;
  float: right;
}
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
