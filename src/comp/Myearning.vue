
<template>
  <div>
 <div class="container-fluid">
  <div class="text-center">Earnings</div>
  <div class="card">
    <div class="card-body"><b>Earnings/Month </b><span><b>Total</b></span></div>
  </div>
  <div class="card">
      <div class="card-body">Current Orders <span>N54000.50</span></div>
    </div>
    <div class="card">
        <div class="card-body">Active Orders<span>N51400.50</span></div>
      </div>
      <div class="card">
          <div class="card-body">Pending Orders <span>N5400.50</span></div>
        </div>
        <div class="card">
            <div class="card-body">Cancelled Orders <span>N4000.00</span></div>
          </div>
</div>
  </div>
</template>

<script>
export default {
  name: 'Earnings',
}
</script>

<style>
.container-fluid
{margin-top:5pc}
.text-center
{
    font-size: 30px;
}
.card
{
    background-color: #FCFBF1;
    font-size: 17px;
    margin-top: 3px;
    margin-bottom: 3px;
    text-align:left;
}
.card:hover
{
    background-color: #ededed;
}
.card div span{float: right}

</style>
