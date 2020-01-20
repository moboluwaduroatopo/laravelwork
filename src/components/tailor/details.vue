<template>
<div class="container
">
<!-- Card -->
<div class="card">
<div class="row">
   <div class="col-md-6">
    <div class="avatar mx-auto white">
      <img src="assets2/img/female.png" class="rounded-circle" alt="woman avatar">
    </div>
    </div>
  <!-- Content -->
    <div class="card-body">
                 
                 <span class="full-cli"><b>Client Details</b></span>
                 <div>Fullname<span style="float:right">Delight delight</span></div>
                 <hr>
                 <div>Username<span style="float:right">Delight99</span></div>
                 <hr>
                 <div>Email<span style="float:right">delightolarinde@gmail.com</span></div>
                 <hr>
                 <div>Phone Number<span style="float:right">08012345678</span></div>
                 <hr>
                 <div>Address<span style="float:right">Pako street,Illy</span></div>
                 <hr>
                       
    </div>
</div>
</div>
<!-- Card -->
<div>
  <div class="card">
          <div class="card-header">

          <ul class="nav nav-pills card-header-pills" id="myTabEx" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="All-tab-ex" data-toggle="tab" href="#home-ex" role="tab" aria-controls="home-ex" aria-selected="true">All jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pend-tab-ex" data-toggle="tab" href="#profile-ex" role="tab" aria-controls="profile-ex" aria-selected="false">Pending</a>
            </li>
          </ul>
          </div>
<div class="tab-content pt-5 card-body" id="myTabContentEx">
  <div class="tab-pane fade active show" id="home-ex" role="tabpanel" aria-labelledby="All-tab-ex">
  <!--Content-->
        <div class="container">
          <div class="row">
          <div class="col-md-4">
                  <div class="card" style=" height: 500px;width:350px;">
                    <img class="card-img-top" style=" height: 400px;width:350px;" src="assets2/img/log4.jpg">
                    <br>
                    <div class="card-body">
                      <h4 class="card-title">Job Description</h4>
                      <p class="card-text">Native</p>
                    </div>
                  </div>
          </div>
          <div class="col-md-4">
              <div class="card" style=" height: 500px;width:350px;" >
                  <img class="card-img-top" style=" height: 400px;width:350px;" src="assets2/img/log4.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Job Description</h4>
                    <p class="card-text">Native</p>
                    
                  </div>
                </div>
          </div>
          <div class="col-md-4">
              <div class="card" style=" height: 500px;width:350px;" >
                  <img class="card-img-top" style=" height: 400px; width:350px;" src="assets2/img/log4.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Job Description</h4>
                    <p class="card-text">Native</p>
                 
                  </div>
                </div>
          </div>
      </div>
          <!--Content-->
  </div>
  </div>
    <div class="tab-pane fade" id="profile-ex" role="tabpanel" aria-labelledby="pend-tab-ex">
              
      <div class="container">
       <div class="text-center" id="pend"><b>No Pending Job</b></div>
      </div>

    </div>
</div>
</div>
</div>
</div>
</template>

<script>
import { Row, Column, Btn, Card, CardBody, CardHeader, CardText, Fa, BarChart, PieChart, LineChart, RadarChart, DoughnutChart, ListGroup, ListGroupItem, Badge, Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter } from 'mdbvue'

export default {
  name: 'Detail',
  components: {
    Row,
    Column,
    Btn,
    Card,
    CardBody,
    CardHeader,
    CardText,
    Fa,
    BarChart,
    PieChart,
    LineChart,
    RadarChart,
    DoughnutChart,
    ListGroup,
    ListGroupItem,
    Badge,
    Modal,
    ModalHeader,
    ModalTitle,
    ModalBody,
    ModalFooter
  },
  data () {
    return {
      showFrameModalTop: false,
      showFrameModalBottom: false,
      showSideModalTopRight: false,
      showSideModalTopLeft: false,
      showSideModalBottomRight: false,
      showSideModalBottomLeft: false,
      showCentralModalSmall: false,
      showCentralModalMedium: false,
      showCentralModalLarge: false,
      showCentralModalFluid: false,
      showFluidModalRight: false,
      showFluidModalLeft: false,
      showFluidModalTop: false,
      showFluidModalBottom: false,
      barChartData: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [
          {
            label: '#1',
            data: [12, 39, 3, 50, 2, 32, 84],
            backgroundColor: 'rgba(245, 74, 85, 0.5)',
            borderWidth: 1
          }, {
            label: '#2',
            data: [56, 24, 5, 16, 45, 24, 8],
            backgroundColor: 'rgba(90, 173, 246, 0.5)',
            borderWidth: 1
          }, {
            label: '#3',
            data: [12, 25, 54, 3, 15, 44, 3],
            backgroundColor: 'rgba(245, 192, 50, 0.5)',
            borderWidth: 1
          }
        ]
      },
      barChartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            barPercentage: 1,
            gridLines: {
              display: true,
              color: 'rgba(0, 0, 0, 0.1)'
            }
          }],
          yAxes: [{
            gridLines: {
              display: true,
              color: 'rgba(0, 0, 0, 0.1)'
            },
            ticks: {
              beginAtZero: true
            }
          }]
        }
      },
      pieChartData: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [
          {
            data: [300, 50, 100, 40, 120, 24, 52],
            backgroundColor: ['#F7464A', '#46BFBD', '#FDB45C', '#949FB1', '#4D5360', '#ac64ad'],
            hoverBackgroundColor: ['#FF5A5E', '#5AD3D1', '#FFC870', '#A8B3C5', '#616774', '#da92db']
          }
        ]
      },
      pieChartOptions: {
        responsive: true,
        maintainAspectRatio: false
      },
      lineChartData: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [
          {
            label: '#1',
            backgroundColor: 'rgba(245, 74, 85, 0.5)',
            data: [65, 59, 80, 81, 56, 55, 40]
          },
          {
            label: '#2',
            backgroundColor: 'rgba(90, 173, 246, 0.5)',
            data: [12, 42, 121, 56, 24, 12, 2]
          },
          {
            label: '#3',
            backgroundColor: 'rgba(245, 192, 50, 0.5)',
            data: [2, 123, 154, 76, 54, 23, 5]
          }
        ]
      },
      lineChartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            gridLines: {
              display: true,
              color: 'rgba(0, 0, 0, 0.1)'
            }
          }],
          yAxes: [{
            gridLines: {
              display: true,
              color: 'rgba(0, 0, 0, 0.1)'
            }
          }]
        }
      },
      radarChartData: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [
          {
            label: '#1',
            backgroundColor: 'rgba(245, 74, 85, 0.5)',
            data: [65, 59, 80, 81, 56, 55, 40]
          },
          {
            label: '#2',
            backgroundColor: 'rgba(90, 173, 246, 0.5)',
            data: [12, 42, 121, 56, 24, 12, 2]
          },
          {
            label: '#3',
            backgroundColor: 'rgba(245, 192, 50, 0.5)',
            data: [2, 123, 154, 76, 54, 23, 5]
          }
        ]
      },
      radarChartOptions: {
        responsive: true,
        maintainAspectRatio: false
      },
      doughnutChartData: {
        labels: ['Red', 'Green', 'Yellow', 'Grey', 'Dark Grey'],
        datasets: [
          {
            data: [300, 50, 100, 40, 120],
            backgroundColor: ['#F7464A', '#46BFBD', '#FDB45C', '#949FB1', '#4D5360'],
            hoverBackgroundColor: ['#FF5A5E', '#5AD3D1', '#FFC870', '#A8B3C5', '#616774']
          }
        ]
      },
      doughnutChartOptions: {
        responsive: true,
        maintainAspectRatio: false
      }
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.cascading-admin-card {
  margin: 20px 0;
}
.cascading-admin-card .admin-up {
  margin-left: 4%;
  margin-right: 4%;
  margin-top: -20px;
}
.cascading-admin-card .admin-up .fa {
  box-shadow: 0 2px 9px 0 rgba(0, 0, 0, 0.2), 0 2px 13px 0 rgba(0, 0, 0, 0.19);
}
.cascading-admin-card .admin-up .fa {
  padding: 1.7rem;
  font-size: 2rem;
  color: #fff;
  text-align: left;
  margin-right: 1rem;
  border-radius: 3px;
}
.cascading-admin-card .admin-up .data {
  float: right;
  margin-top: 2rem;
  text-align: right;
}
.admin-up .data p {
  color: #999999;
  font-size: 12px;
}
.classic-admin-card .card-body {
  color: #fff;
  margin-bottom: 0;
  padding: 0.9rem;
}
.classic-admin-card .card-body p {
  font-size: 13px;
  opacity: 0.7;
  margin-bottom: 0;
}
.classic-admin-card .card-body h4 {
  margin-top: 10px;
}

</style>
