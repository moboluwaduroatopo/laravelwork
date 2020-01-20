<template>
  <div>
<div class="container">
  <div text-align="left">Rate Us</div>
       <input type="checkbox" value="happy">Happy
<hr>        <input type="checkbox" value="unhappy">Unhappy
<hr>        <input type="checkbox" value="confused">Confused
<hr>      <button class="btn btn-danger">Rate</button>

</div> 
  </div>
</template>

<script>
export default {
  name: 'Dash_Support',
}
</script>

<style>
.container
{
    margin-top: 5pc;
}
.text-center
{
    font-size:35px;
}
button{float: right;
        background-color:#F9E3E1;
        color:white;
}
</style>
